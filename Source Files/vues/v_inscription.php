<?php

if(!isset($_REQUEST['cours']))
{    
    $number = '0';

}else {   

 $number = $_REQUEST['cours'];
}

    echo "<br>
    <form action='index.php?action=validation' method=\"POST\">
    <input type='hidden' name='numero' value=".$number." required>
    <input type='text' placeholder='Entrez votre nom' name='nom' required><br><br>
    <input type='text' placeholder='Entrez votre prénom' name='prenom' required><br><br>
    <input type='number' placeholder='Entrez votre téléphone' name='tel' required><br><br>
    <input type='text' placeholder='Entrez votre adresse' name='adresse' required><br><br>
    <input type='email' placeholder='Entrez votre mail' name='mail' required><br><br>
    <input type='submit'value='Valider'><br><br>
    </form>";


?>