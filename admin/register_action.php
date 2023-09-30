<?php

require("connection.php");
$product = $_REQUEST["pn"];
$price = $_REQUEST["pr"];
$offer = $_REQUEST["op"];
$pht = $_FILES["pht"]['name']; 
$description = $_REQUEST["dp"];

$res=$con->query("insert into products(`Product_Name`,`Price`,`Offer_Price`,`Choose_Image`,`Description`)values('$product','$price','$offer','$pht','$description')");

$count=mysqli_affected_rows($con);
if($count>0)
{
  move_uploaded_file($_FILES["pht"]['tmp_name'],"pics/".$pht);
  header("location:view_users.php");
}
else
{
header("location:main-page.html");
}

?>
