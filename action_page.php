<?php 


 $name=$_POST['name'];
 $rollno=$_POST['rollno'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $hallno=$_POST['hallno']; 
 $purpose=$_POST['purpose'];
 $strength=$_POST['strength'];
 $date=$_POST['date'];
 $fromtime=$_POST['fromtime'];
 $totime=$_POST['totime'];
 $currentDate = date("j/n/Y");
require('fpdf.php');
$pdf = new FPDF();
$title = "Hall request Form";
$pdf->SetTitle($title);


// $pdf->PrintChapter(1,'A RUNAWAY REEF','20k_c1.txt');
// $pdf->PrintChapter(2,'THE PROS AND CONS','20k_c2.txt');

$pdf->AddPage();
$pdf->SetTopMargin(0);
$pdf->Image('logo.png',2,5,40);

 $pdf->SetFont('helvetica','',16);

$pdf->SetLeftMargin(50);
 $pdf->Cell(0,20,'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,  ',0,0);
 $pdf->Ln(10);
 $pdf->SetLeftMargin(40);
  $pdf->Cell(0,20,'  DESIGN AND MANUFACTURING, KANCHEEPURAM',0,0);

$pdf->SetFont('helvetica','',12);
$pdf->SetLeftMargin(18);
 $pdf->Ln(10);
$pdf->Cell(0,35,'An Institute of National Importance Established by the Ministry of HRD, Government of India',0,0);

 $pdf->SetFont('helvetica','',17);
$pdf->SetLeftMargin(80);
$pdf->Ln(25);
$pdf->Cell(0,20,'Hall Permission Form',0,0);

$pdf->Rect(00,56,300,0);

$pdf->SetFont('helvetica','',12);
$pdf->SetLeftMargin(140);
$pdf->Ln(7);
$pdf->Cell(0,30,'Date: '.$currentDate,0,0);
$pdf->SetLeftMargin(30);
$pdf->Ln(4);

$pdf->Cell(0,50,'Name: '.$name,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Roll Number: '.$rollno,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Email ID : '.$email,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Mobile Number: '.$mobile,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Hall Number: '.$hallno,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Purpose: '.$purpose,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Expected Strength: '.$strength,0,0);
 $pdf->Ln(10);
 $pdf->Cell(42,50,'Time: From '.$fromtime,0,0);
 $pdf->Cell(0,50,'to '.$totime,0,0);
 $pdf->Ln(10);
 $pdf->Cell(0,50,'Date: '.$date,0,0);

$pdf->Ln(25);

$pdf->Rect(0,180,400,0);
$pdf->Ln(10);
$pdf->SetLeftMargin(80);
$pdf->Cell(0,10,"(for office use only)",0,0);

$pdf->SetLeftMargin(20);
$pdf->Ln(10);
$pdf->SetFont('Times','i',20);
$pdf->Cell(0,10,"with the above request, the following hall allotment is made ",0,0);
$pdf->SetFont('Times','i',12);
$pdf->Ln(10);

$pdf->Ln(7);
$pdf->SetFont('helvetica','',12);
$pdf->SetLeftMargin(30);
$pdf->Cell(80,5,'Date: '.$date,0,0);
 
$pdf->SetLeftMargin(100);
$pdf->Cell(80,5,'Hall number: '.$hallno,0,0);


$pdf->SetLeftMargin(30);
$pdf->Ln(10);
$pdf->Cell(80,5,'Time: From: '.$fromtime,0,0);
$pdf->SetLeftMargin(100);
$pdf->Cell(80,5,'To: '.$totime,0,0);

$pdf->SetFont('Times','i',15);
$pdf->SetLeftMargin(50);
$pdf->Ln(10);
$pdf->Cell(50,10,'The hall shall be opened as per the details given below : ',0,0);


$pdf->SetFont('helvetica','',12);
$pdf->SetLeftMargin(30);
$pdf->Ln(15);
$pdf->Cell(80,5,'Date: '.$date,0,0);
 
$pdf->SetLeftMargin(100);
$pdf->Cell(80,5,'Hall number: '.$hallno,0,0);


$pdf->SetLeftMargin(30);
$pdf->Ln(10);
$pdf->Cell(80,5,'Time: From: '.$fromtime,0,0);
$pdf->SetLeftMargin(80);
$pdf->Cell(80,5,'To: '.$totime,0,0);


$pdf->SetLeftMargin(140);
$pdf->Ln(16);
$pdf->Cell(10,5,'Controlling officer ',0,0);

$filename="test.pdf";
$pdf->Output($filename,'F');
require_once('PHPMailer.php');
require_once('Exception.php');

 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$bodytext='pfa of hall request';
$email1=$_POST['email'];
$email = new PHPMailer();
$email->From      = $email1;
$email->FromName  = 'srinath';
$email->Subject   = 'REG: HALL REQUEST';
$email->Body      = $bodytext;
$email->AddAddress( 'ced15i033@iiitdm.ac.in' );

$file_to_attach = 'C:/xampp/htdocs/Hall permission/test.pdf';

$email->AddAttachment( $file_to_attach , 'hallrequest.pdf' );

 $email->Send();








 ?>
 <!-- use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer();
$email->From      = 'you@example.com';
$email->FromName  = 'Your Name';
$email->Subject   = 'Message Subject';
$email->Body      = $bodytext;
$email->AddAddress( 'destinationaddress@example.com' );

$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );

return $email->Send(); -->
 <!DOCTYPE html>
 <html>
 <head>

 	<title>hall request</title>
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://github.com/Eonasdan/bootstrap-datetimepicker/blob/master/src/js/bootstrap-datetimepicker.js"></script>

<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <script src="https://use.fontawesome.com/b3f6a18a0c.js"></script>
    <script src="clockface.js"></script>
    <link rel="stylesheet" href="clockface.css">

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 </head>
 <body>
 	<div class="container" style="margin:50px auto ">
 		<div class="alert alert-success"> 
 	<span class="glyphicon glyphicon-info-sign inline"><strong style="padding-left: 10px;">Successfully submitted </strong></span>
 		</div>
 	</div>
 </body>
 </html>