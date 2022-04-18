<?php
class PdoMusic{   		
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=projetmusique';   		
    private static $user='root' ;    		
    private static $mdp='' ;	
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

        $req = "Select p.nom, p.prenom, i.idCours as id from personne as p inner join inscription as i on i.idAdherent = p.id;";

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
        $verif = 0;

        $rs = self::$monPdo->prepare($sql) ;

        $rs->execute() ;

        $empl = $rs->fetchAll();

        foreach($empl AS $nb)
        {
            if($nb['nombre'] != "0")
            {
                $verif = 1;
            }
        }

        return $verif;

    }
    

}