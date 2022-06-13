<?php

require('../fpdf/fpdf.php');
require_once '../modele/connexionbdd.php';

$monPdoMusic=PdoMusic::getPdoMusic();

if(!isset($_REQUEST['Adh']))
{    

    header('../vues/v_connexion.php');

}else {   

    $adh = $_REQUEST['Adh'];

}

if(!isset($_REQUEST['Cours']))
{    
    
    header('../vues/v_connexion.php');

}else {   

    $cours = $_REQUEST['Cours'];
    
}

$inscr = $monPdoMusic->getUneInscription($adh, $cours);

foreach($inscr AS $uneInscr)
{
    

    $pdf=new FPDF();

    $pdf->AddPage();

    $pdf->SetTitle('Inscription '.$uneInscr['prenom'].' '.$uneInscr['nom'].'');

    $pdf->SetFont('Arial','BU',16);

    $pdf->Image('../images/harmonie.png',0,0, 210, 84);

    $pdf->Cell(0,200,'Inscription a votre cours :');

    $pdf->SetFont('Arial','',16);

    $pdf->Text(20,125,'Prenom : '.$uneInscr['prenom'].'');
    $pdf->Text(20,132,'Nom : '.$uneInscr['nom'].'');
    $pdf->Text(20,139,'Cours : '.$uneInscr['id'].'');
    $pdf->Text(20,146,'Instrument : '.$uneInscr['instrument'].'');
    $pdf->Text(20,153,'Professeur : '.$uneInscr['profNom'].' '.$uneInscr['profPrenom'].'');
    $pdf->Text(20,160,'Date : '.$uneInscr['date'].'');

    $pdf->Output();
}

?>