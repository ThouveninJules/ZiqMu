<?php

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $mail=$_POST['mail'];
    $adresse=$_POST['adresse'];
    $number=$_POST['numero'];
    

    $sql = "insert into personne values(NULL,'".$nom."', '".$prenom."', ".$tel.", '".$adresse."', '".$mail."');";
    $monPdoMusic->validerInscription($sql);

    $sql = "Select id from personne where tel=".$tel.";";
    $lesComptes = $monPdoMusic->getId($sql);
    foreach($lesComptes as $unCompte){

        $compte = $unCompte['id'];
    
        echo $sql;
        echo $compte;

        $sql = "insert into adherents values(".$compte.", 1);";
        $monPdoMusic->validerInscription($sql);

        $sql = "insert into inscription values(".$compte.", ".$number.", 0);";
        $monPdoMusic->validerInscription($sql);

    }

    echo "<a href=index.php?action=listeInscription>Voir la liste des inscription</a>";

?>