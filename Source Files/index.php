<?php
        require_once './modele/connexionbdd.php';

        $monPdoMusic=PdoMusic::getPdoMusic();

        include './vues/v_entete.php';
        
        if(!isset($_REQUEST['action']))
            {    
                $action = 'accueil';

            }else {   

             $action = $_REQUEST['action'];
            }
           


        switch ($action)
            {
                case 'accueil':
                    include ("./vues/v_accueil.php");
                    break;
                case 'cours':
                    $lesSeances = $monPdoMusic->getLesSeances();
                    include("./vues/v_cours.php");
                    break;
                case 'listeInscription':
                    $lesInscr = $monPdoMusic->getLesInscriptions();
                    include ("./vues/v_listeInscription.php");
                    break;
                case 'form':
                    include ("./vues/v_inscription.php");
                    break;
                case 'validation':
                    include ("./vues/v_validation.php");
                    break;
                default : 
                    include ("./vues/v_accueil.php");
            }
        //include './vues/v_pied.php';
    ?>