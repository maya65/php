<?php
require("connection.php");
session_start();

$email = $_REQUEST["em"];
$password = $_REQUEST["pd"];

$select=$con->query("select * from registration where `EMAIL_ID`='$email' AND `PASSWORD`='$password'");
$select1=$select->num_rows;
if($select1>0)
{
  header("location:view applied_candidates.php");
   $row=$select->fetch_assoc();
  $id=$row["id"];
  $_SESSION["id"]=$id;
  }
  else
  {
  header("location:index.html");
  }


?>