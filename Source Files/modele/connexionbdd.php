<?php
class PdoMusic{   		
    // private static $serveur='mysql:host=localhost';
    // private static $bdd='dbname=projetmusique';   		
    // private static $user='root' ;    		
    // private static $mdp='' ;	
    private static $serveur='mysql:host=bufsuabjtzikmu.mysql.db';
    private static $bdd='dbname=bufsuabjtzikmu';   		
    private static $user='bufsuabjtzikmu' ;    		
    private static $mdp='fhZid7392Vdse8' ;
    private static $monPdo;
	private static $monPdoMusic=null;

			
	private function __construct(){
    	PdoMusic::$monPdo = new PDO(PdoMusic::$serveur.';'.PdoMusic::$bdd, PdoMusic::$user, PdoMusic::$mdp); 
		PdoMusic::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoMusic::$monPdo = null;
	}

	public  static function getPdoMusic(){
		if(PdoMusic::$monPdoMusic==null){
			PdoMusic::$monPdoMusic= new PdoMusic();
		}
		return PdoMusic::$monPdoMusic;  
	}
        
        public  static function getMonPdo(){
		
		return PdoMusic::$monPdo;  
	}

 

    public   function getLesSeances(){ 

        try {
        
        $cours = array();

        $req = "Select c.id, i.nom as instru, c.jourheure, c.nbplace, p.nom, p.prenom from cours as c inner join personne as p on p.id = c.idProfesseur inner join instrument as i on i.id = c.idInstrument;";

        $rs = self::$monPdo->prepare($req) ;

        $rs->execute() ;

        $cours = $rs->fetchAll();
        return $cours;

        } 
        catch (PDOException $e) {
        
            echo 'Échec lors de la connexion : ' . $e->getMessage();

        }


    }
    
    public function validerInscription(string $sql){

        try {
    
            $rs = self::$monPdo->prepare($sql) ;
    
            $rs->execute() ;
    
            } 
            catch (PDOException $e) {
            
                echo 'Échec lors de la connexion : ' . $e->getMessage();
    
            }

    }

    public   function getId(string $sql){ 

        try {
        
        $id = array();

        $rs = self::$monPdo->prepare($sql) ;

        $rs->execute() ;

        $id = $rs->fetchAll();
        return $id;

        } 
        catch (PDOException $e) {
        
            echo 'Échec lors de la connexion : ' . $e->getMessage();

        }


    }

    public   function getLesInscriptions(){ 

        try {
        
        $inscr = array();

        $req = "Select p.nom, p.prenom, i.idCours as id, i.idAdherent as adh from personne as p inner join inscription as i on i.idAdherent = p.id;";

        $rs = self::$monPdo->prepare($req) ;

        $rs->execute() ;

        $inscr = $rs->fetchAll();
        return $inscr;

        } 
        catch (PDOException $e) {
        
            echo 'Échec lors de la connexion : ' . $e->getMessage();

        }


    }

    public function getUneInscription(int $idAdh, int $idCours)
    {
        try {
            $inscr = array();
            $req = "Select p.nom as nom, p.prenom as prenom, i.idCours as id, it.nom as instrument, prof.nom as profNom, prof.prenom as profPrenom, c.jourheure as date from personne as p inner join inscription as i on i.idAdherent = p.id inner join cours as c on c.id = i.idCours inner join personne prof on c.idProfesseur = prof.id inner join instrument it on it.id = c.idInstrument where p.id = ".$idAdh." and c.id = ".$idCours.";";
            $rs = self::$monPdo->prepare($req) ;

            $rs->execute() ;

            $inscr = $rs->fetchAll();
            return $inscr;
        }
        catch (PDOException $e) {
        
            echo 'Échec lors de la connexion : ' . $e->getMessage();

        }
    }

    public function verifConn(string $ident, string $mdp){

        $sql = "select count(*) as nombre from employe where identifiant = '".$ident."' and mdp = '".$mdp."';";
    
        $empl = array();
        $verif = '0';

        $rs = self::$monPdo->prepare($sql) ;

        $rs->execute() ;

        $empl = $rs->fetchAll();

        foreach($empl AS $nb)
        {
            if($nb['nombre'] != "0")
            {
                $sql = "select clé from employe where identifiant = '".$ident."'and mdp = '".$mdp."';";

                $cle = array();

                $rs = self::$monPdo->prepare($sql) ;

                $rs->execute() ;

                $cle = $rs->fetchAll();

                foreach($cle AS $uneCle)
                {
                    $verif = $uneCle['clé'];
                }
            }
        }
        return $verif;

    }

    public function verifCle(string $cle){
        $sql = "select count(*) as nombre from employe where clé = '".$cle."';";

        $nbCle = array();
        $res = 0;
        $rs = self::$monPdo->prepare($sql);
        $rs->execute();
        $nbCle = $rs->fetchAll();

        foreach($nbCle AS $nb)
        {
            if($nb['nombre'] != "0")
            {
                $res = 1;
            }
        }
        return $res;
    }
    

}