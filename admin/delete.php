<?php

require("connection.php");
$id=$_REQUEST["deleteid"]; 

    $res=$con->query ("select * from `products` where id ='$id' ");
    $row=$res->fetch_assoc();
	$photos='pics/'.$row['Choose_Image'];
    unlink($photos);

$res=$con->query("DELETE FROM `products` WHERE id='$id' ");
$count=mysqli_affected_rows($con);

if($count>0)
{
 header('location:view_users.php');
}

else
{
 header('location:index.html');
}

 
?>