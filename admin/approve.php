<?php

require("connection.php");
$id=$_REQUEST["approveid"]; 

$res=$con->query("UPDATE `user_id` SET STATUS=1 WHERE id='$id' ");
$count=mysqli_affected_rows($con);
if($count>0)
{
  header("location:table.php");
}

else
{
header("location:dashboard.php");
}

?>