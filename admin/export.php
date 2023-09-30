<?php 

  //Create Connection of Database
  require("connection.php");
   
 	
  //Create header of excel
  $content = '<table>
  <tr>
  <th>S.NO</th>
  <th>NAME</th>
  <th>MOBILE_NUMBER</th>
  <th>EMAIL_ID</th>
  <th>RESUME</th>
  <th>user_id</th>
  <th>STATUS</th>
  </tr>'; 

  // Fetch data from Users table
$res=$con->query("select * from user_id");
 $count=$res->num_rows; 
  
  if($count>0)
  {	
$no=1;
  //fetch all data with the help of mysqli_fetch_array 
while($row=$res->fetch_assoc()) 
  {  
  	  $content .='<tr>';
	    $content .='<td>'. $no++ .'</td>';
	    $content .='<td>'.$row['NAME'].'</td>';
	    $content .='<td>'.$row['MOBILE_NUMBER'].'</td>';
	    $content .='<td>'.$row['EMAIL_ID'].'</td>';
		$content .='<td>'.$row['RESUME'].'</td>';
		$content .='<td>'.$row['user_id'].'</td>';
		$content .='<td>'.$row['STATUS'].'</td>';

	    $content .='<tr>';   
  } 
  $content.='</table>'; 
  //}
  //This code is use to create excel format
  header('Content-Type:application/xls');  
  header('Content-Disposition: attachment; filename=users.xls');
  echo $content;
  exit();
}
?>