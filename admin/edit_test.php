<?php

require("connection.php");
$id = $_REQUEST["tx"];
$product = $_REQUEST["pn"];
$price = $_REQUEST["pr"];
$offer = $_REQUEST["op"];
$description = $_REQUEST["dp"];

if(empty($_files["pht"]))
{
$res=$con->query("UPDATE `products` SET `Product_Name`='$product',`Price`='$price',`Offer_Price`='$offer',`Description`='$description' WHERE id='$id' ");
$count=mysqli_affected_rows($con);
if($count>0)
{
  header("location:view_users.php");
}

else
{
	 $pht = $_FILES["pht"]['name']; 
	 $res=$con->query("UPDATE `products` SET `Product_Name`='$product',`Price`='$price',`Offer_Price`='$offer',`Choose_Image`='$pht',`Description`='$description' WHERE id='$id' ");
	$count=mysqli_affected_rows($con);
	move_uploaded_file($_FILES["pht"]['tmp_name'],"pics/".$pht);
    header("location:view_users.php");
 
}
}
?>