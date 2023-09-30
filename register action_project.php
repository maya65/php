<?php

require("connection.php");

$name = $_REQUEST["nm"];
$number = $_REQUEST["mn"];
$email = $_REQUEST["em"];
$password = $_REQUEST["pd"];
$confirm = $_REQUEST["tx"];
$countries = $_REQUEST["sn"];
$states = $_REQUEST["ss"];

$res=$con->query("insert into registration(`NAME`,`MOBILE_NUMBER`,`EMAIL_ID`,`PASSWORD`,`CONFIRM_PASSWORD`,`SELECT_COUNTRIES`,`SELECT_STATES`)values('$name','$number','$email','$password','$confirm','$countries','$states')");
$count = mysqli_affected_rows($con);
if($count>0)
{
	header("location:users_values.html");
}
else
{
	header("location:login_form.html");
}

?>