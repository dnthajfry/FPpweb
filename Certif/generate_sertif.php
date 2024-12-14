<?php
require('../fpdfile/fpdf.php');
include __DIR__ . '/../config.php';


session_start();

if (isset($_SESSION['user_name'])) {
    $nama = $_SESSION['user_name'];
} else {
    $nama = "Tamu";
}

$score = isset($_SESSION['Nilai']) ? $_SESSION['Nilai'] : 0;

$name = $nama; 
$file_name = "sertifikat_$name.pdf";

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

$pdf->Image('Sertifikat.png', 0, 0, 297, 210); 

$pdf->SetFont('Arial', 'B', 24);
$pdf->SetTextColor(0, 0, 128); 

$pdf->SetXY(0, 75);
$pdf->Cell(297, 10, $name, 0, 1, 'C');

$pdf->SetFont('Arial', '', 14);
$pdf->SetXY(0, 90);
$pdf->Cell(297, 10, "Meraih kelulusan modul dengan skor = $score", 0, 1, 'C');

$pdf->Output('I', $file_name);
?>
