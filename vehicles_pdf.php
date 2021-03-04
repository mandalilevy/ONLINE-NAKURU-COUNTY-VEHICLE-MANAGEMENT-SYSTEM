<?php
require('fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'nakuru');

$query=mysqli_query($con,"select * from driver");
$invoice=mysqli_fetch_array($query);


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A3');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'NAKURU COUNTY GOVERNMENT VEHICLE MANAGEMENT SYSTEM',0,0);
//$pdf->Cell(59	,5,'DRIVER ID',0,1);//end of line
$pdf->Cell(189	,10,'',0,1);//end of line
$pdf->Cell(59	,5,'ALL VEHICLES',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

//$pdf->Cell(130	,5,'[did]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',10);

$pdf->Cell(50	,5,'NUMBER PLATE',1,0);
$pdf->Cell(50	,5,'VEHICLE TYPE',1,0);
$pdf->Cell(50	,5,'DEPARTMENT',1,0);//end of line
$pdf->Cell(50	,5,'DATE REGISTERED',1,0);//end of line
$pdf->Cell(50	,5,'STATUS',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query=mysqli_query($con,"select * from vehicle ORDER BY status");

while($item=mysqli_fetch_array($query)){
	$pdf->Cell(50	,5,$item['platenumber'],1,0);
	$pdf->Cell(50	,5,$item['type'],1,0);
	$pdf->Cell(50	,5,$item['department'],1,0);
	$pdf->Cell(50	,5,$item['date'],1,0);
	$pdf->Cell(50	,5,$item['status'],1,1);
}
$pdf->Output();
?>
