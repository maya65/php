<?php
//require("connection.php");
$id=$_REQUEST["nama"];
$file_path = '../document/' . $id;

   header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header("Content-Type: application/force-download");
    header('Content-Disposition: attachment; filename="'.basename($file_path). "\";");
	header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));
	ob_clean();
	flush();
    readfile($file_path);
    exit;

?> 