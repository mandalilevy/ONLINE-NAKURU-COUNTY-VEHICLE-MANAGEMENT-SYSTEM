<?php
require('fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'nakuru');

$query=mysqli_query($con,"select * from bookbus");
$invoice=mysqli_fetch_array($query);


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'NAKURU COUNTY GOVERNMENT VEHICLE MANAGEMENT SYSTEM',0,0);
//$pdf->Cell(59	,5,'DRIVER ID',0,1);//end of line
$pdf->Cell(189	,10,'',0,1);//end of line
$pdf->Cell(59	,5,'BOOKED HEARSE',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

//$pdf->Cell(130	,5,'[did]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(40	,5,'NUMBER PLATE',1,0);
$pdf->Cell(40	,5,'BOOKED DATE',1,0);
$pdf->Cell(40	,5,'NAME',1,0);//end of line
$pdf->Cell(40	,5,'CONTACTS',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query=mysqli_query($con,"select * from bookhearse");

while($item=mysqli_fetch_array($query)){
	$pdf->Cell(40,5,$item['plate'],1,0);
	$pdf->Cell(40,5,$item['date'],1,0);
	$pdf->Cell(40,5,$item['name'],1,0);//end of line
	$pdf->Cell(40,5,$item['cont'],1,1,'L');//end of line

}
$pdf->Output();
?>
