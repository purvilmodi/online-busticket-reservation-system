<?php
//call the FPDF library
include 'connection.php';
session_start();
$order=$_SESSION["id"];
$sql2=mysqli_query($conn,"SELECT * FROM payment where order_id='$order'")or die(mysqli_error());
$row2 = mysqli_fetch_array($sql2);
$no=$row2['bus_no'];
$sql1=mysqli_query($conn,"SELECT * from bus where no='$no'");
$row1=mysqli_fetch_array($sql1);
require('fpdf186/fpdf.php');

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->SetFont('helvetica', 'B', 20);

//Cell(width , height , text , border , end line , [align] )
$image_file = 'http://localhost/bus/img/icon.png';
$pdf->Image($image_file, 10, 10, 50, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(59 ,5,'',0,1);//end of line
$pdf->Cell(130 ,7,'',0,0);
$pdf->Cell(15 ,7,'Date:',0,0);
$pdf->Cell(34 ,7,$currentDate = date('Y-m-d'),0,1);//end of line

$pdf->Cell(130 ,7,'',0,0);
$pdf->Cell(18 ,7,'Order-Id:',0,0);
$pdf->Cell(34 ,7,$row2['order_id'],0,1);//end of line

$pdf->Cell(130 ,7,'',0,0);
$pdf->Cell(18 ,7,'Bus No:',0,0);
$pdf->Cell(34 ,7,$row2['bus_no'],0,1);//end of line

$pdf->Cell(130 ,7,'',0,0);
$pdf->Cell(20 ,7,'Departure:',0,0);
$pdf->Cell(34 ,7,$row1['date'],0,1);//end of line
//make a dummy empty cell as a vertical spacer


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(45 ,10,'Ticket-Id',1,0);
$pdf->Cell(40 ,10,'Passenger-Name',1,0);
$pdf->Cell(40 ,10,'Passenger-Age',1,0);
$pdf->Cell(30 ,10,'Seat-No',1,0);
$pdf->Cell(29 ,10,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
$sql=mysqli_query($conn,"SELECT * FROM payment where order_id='$order'")or die(mysqli_error());
$sum=0;
while($row=$sql->fetch_assoc()){
$sum=$sum + $row1['price'];
    $pdf->Cell(45 ,7,$row['ticket_id'],1,0);
    $pdf->Cell(40 ,7,$row['p_name'],1,0);
    $pdf->Cell(40 ,7,$row['p_age'],1,0);
    $pdf->Cell(30 ,7,$row['seat'],1,0);
    $pdf->Cell(29 ,7,$row1['price'],1,1);
}
//summary
$pdf->Cell(110 ,12,'',0,0);
$pdf->Cell(35 ,12,'Total Payment',0,0);
$pdf->Cell(10 ,12,'RS.',1,0);
$pdf->Cell(29 ,12,$sum,1,1,'R');//end of line

$pdf->cell(0,10,'',0,1);
$pdf->cell(20,7,'Hello,We Are Very Thankfull for Giving A Little Time After Our Ticket Booking Service And We Hope',0,1);
$pdf->Cell(0,7,'You have used Our Service Without Having Any Issues And If You have Had Then You may Surely ',0,1);
$pdf->cell(0,7,'feedback Us By Our Given Email Address.,',0,1);
$pdf->cell(50,10,'Thank You....',0,1);
//output the result
$pdf->Output();
?>