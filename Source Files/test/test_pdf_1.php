<?php

require('../fpdf/fpdf.php');

$pdf=new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial','BU',16);

$pdf->Image('../images/harmonie.png',0,0, 210, 84);

$pdf->Cell(0,200,'Inscription a votre cours :');

$pdf->SetFont('Arial','',16);

$pdf->Text(20,125,'Prenom : Jules');
$pdf->Text(20,132,'Nom : Thouvenin');
$pdf->Text(20,139,'Cours : 3');
$pdf->Text(20,146,'Instrument : Piano');
$pdf->Text(20,153,'Professeur : Mr Roussel');
$pdf->Text(20,160,'Date : Lundi 13/06/2022');
$pdf->Text(20,167,'Horaire : 17h');

$pdf->Output();

?>