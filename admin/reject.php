<?php

require("connection.php");
$id=$_REQUEST["rejectid"]; 

$res=$con->query("UPDATE `user_id` SET STATUS=2 WHERE id='$id' ");
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