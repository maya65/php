<?php

require("connection.php");
session_start();

$email=$_REQUEST["em"];
$password=$_REQUEST["pass"];

$select=$con->query("select * from admin where `EMAIL`='$email' AND `PASSWORD`='$password'");
$select1=$select->num_rows;
if($select1>0)
{
   header("location:dashboard.php");
    $_SESSION['email']=$email;
 }
else
 {
  header("location:index.php");
 }  
 
 ?>