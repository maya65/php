<?Php
require ("connection.php");//connection to database
//SQL to get 10 records
$res=$con->query("select * from user_id ");
require('fpdf/fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();

$width_cell=array(10,20,35,40,57,20,17);
$pdf->SetFont('Arial','B',10);

//Background color of header//
$pdf->SetFillColor(193,229,252);


// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'S.NO',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'NAME',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'MOBILE_NUMBER',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'EMAIL_ID',1,0,'C',true);
//fifth header column//
$pdf->Cell($width_cell[4],10,'RESUME',1,0,'C',true); 
//sixth header column//
$pdf->Cell($width_cell[5],10,'user_id',1,0,'C',true);
//seventh header column//
$pdf->Cell($width_cell[6],10,'STATUS',1,1,'C',true);
//// header ends ///////

$pdf->SetFont('Arial','',10);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

/// each record is one row  ///
 $count=$res->num_rows; 
  
  if($count>0)
  {	
 $no=1;
  //fetch all data with the help of mysqli_fetch_array 
while($row=$res->fetch_assoc()) 
  {  
//foreach ($dbo->query($res) as $row) {
$pdf->Cell($width_cell[0],10, $no++ ,1,0,'C',$fill);
$pdf->Cell($width_cell[1],10,$row['NAME'],1,0,'L',$fill);
$pdf->Cell($width_cell[2],10,$row['MOBILE_NUMBER'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],10,$row['EMAIL_ID'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],10,$row['RESUME'],1,0,'C',$fill);
$pdf->Cell($width_cell[5],10,$row['user_id'],1,0,'C',$fill);
$pdf->Cell($width_cell[6],10,$row['STATUS'],1,1,'C',$fill);
//to give alternate background fill  color to rows//
$fill = !$fill;
}
/// end of records /// 
  }
$pdf->Output();
?>
