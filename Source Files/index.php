<?php
        require_once './modele/connexionbdd.php';

        $monPdoMusic=PdoMusic::getPdoMusic();

        // if(isset($_REQUEST['conn'])){   
        //     $conn=$_REQUEST['conn']; 
        // }

        // if($conn != 1)
        // {
        //     echo $conn;
        //     //header('Location: ./vues/v_connexion.php');
        // }

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
                    $conn = $conn;
                    include ("./vues/v_accueil.php");
                    break;
                case 'cours':
                    $conn = $conn;
                    $lesSeances = $monPdoMusic->getLesSeances();
                    include("./vues/v_cours.php");
                    break;
                case 'listeInscription':
                    $conn = $conn;
                    $lesInscr = $monPdoMusic->getLesInscriptions();
                    include ("./vues/v_listeInscription.php");
                    break;
                case 'form':
                    $conn = $conn;
                    include ("./vues/v_inscription.php");
                    break;
                case 'validation':
                    $conn = $conn;
                    include ("./vues/v_validation.php");
                    break;
                default : 
                    $conn = $conn;
                    include ("./vues/v_accueil.php");
            }
        include './vues/v_pied.php';
    ?>