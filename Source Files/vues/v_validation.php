<?php

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $mail=$_POST['mail'];
    $adresse=$_POST['adresse'];
    $number=$_POST['numero'];
    

    $sql = "insert into personne values(NULL,'".$nom."', '".$prenom."', ".$tel.", '".$adresse."', '".$mail."', DEFAULT);";
    echo $sql;
    $monPdoMusic->validerInscription($sql);

    $sql = "Select id from personne where tel=".$tel.";";
    echo $sql;
    $lesComptes = $monPdoMusic->getId($sql);
    foreach($lesComptes as $unCompte){

        $compte = $unCompte['id'];
    
        echo $sql;
        echo $compte;

        $sql = "insert into adherents values(".$compte.", 1);";
        echo $sql;
        $monPdoMusic->validerInscription($sql);

        $sql = "insert into inscription values(".$compte.", ".$number.", 0, 0, 0);";
        echo $sql;
        $monPdoMusic->validerInscription($sql);

    }

    header('Location: ../index.php?action=listeInscription&conn='.$conn);

?>