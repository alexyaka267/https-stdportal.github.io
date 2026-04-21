<?php
require('fpdf.php');
session_start();
$conn = new mysqli("localhost","root","","student_db");

if(!isset($_SESSION['student'])) die("Login required");

$username=$_SESSION['student'];

$data=$conn->query("SELECT * FROM students WHERE username='$username'")->fetch_assoc();

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"ADMISSION LETTER",0,1,"C");

$pdf->SetFont("Arial","",12);
$pdf->Ln(10);
$pdf->Cell(0,10,"Name: ".$data['fullname'],0,1);
$pdf->Cell(0,10,"District: ".$data['district'],0,1);
$pdf->Cell(0,10,"Course: ".$data['course'],0,1);
$pdf->Cell(0,10,"NIN: ".$data['nin'],0,1);

$pdf->Output();
?>
