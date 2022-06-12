<?php

    require_once '../modele/connexionbdd.php';

    $monPdoMusic=PdoMusic::getPdoMusic();

    $ident=$_POST['ident'];
    $mdp=$_POST['mdp'];
    
    $conn=$monPdoMusic->verifConn($ident, $mdp);

    if($conn=='0')
    {
        header('Location: ./v_connexion.php?conn='.$conn);
    }
    else{
        header('Location: ../index.php?action=accueil&conn='.$conn);
    }

?>