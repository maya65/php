<?php

require("connection.php");
session_start();

$name = $_REQUEST["nm"];
$number = $_REQUEST["mn"]; 
$email = $_REQUEST["em"];
$pht = $_FILES["pht"]['name']; 
 $id = $_SESSION["id"];

$res=$con->query("insert into user_id(`NAME`,`MOBILE_NUMBER`,`EMAIL_ID`,`RESUME`,`user_id`)values('$name','$number','$email','$pht','$id')");

$count=mysqli_affected_rows($con);
if($count>0)
{
	 move_uploaded_file($_FILES["pht"]['tmp_name'],"document/".$pht);
  //header("location:view_users.php");
}
else
{
//header("location:main-page.html");
}

?>
