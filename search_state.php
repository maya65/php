<?php
//$cert_type=$_POST['cert_type'];
require('connection.php');
$country=$_REQUEST['country'];

				 
				   $res=$con->query ("select a.sname,a.stat_id FROM states as a LEFT JOIN countries as b on a.country_id = b.cont_id where a.country_id='$country'");
				   $count=$res->num_rows;
if($count>0)
{
	while($row=$res->fetch_assoc())
{
?>
<option value="<?php echo $row['stat_id']; ?>"><?php echo $row['sname'];?> </option>

             <?php
}	 	
}	  
				  ?>
				  
				  
				  