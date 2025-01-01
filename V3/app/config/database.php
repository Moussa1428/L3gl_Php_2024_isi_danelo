<?php

class Database{
    
    private $serveur="localhost";
    private $port = "5432";
    private $user="postgres";
    private $pwd="moussa.dev.com";
    private $dbname="projetgestionferme";


    function getConnexion(){
        try {
  
            $connexion = new PDO("pgsql:host=$this->serveur;dbname=$this->dbname", $this->user, $this->pwd);
    
        }catch (PDOException $e){
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $connexion;
    
    }

}
  


