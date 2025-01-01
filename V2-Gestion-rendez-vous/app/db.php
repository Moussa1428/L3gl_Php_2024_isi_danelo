<?php 
class database
{
private $server='localhost';
private $user='postgres';
private $pwd='moussa.dev.com';
private $dbname='gestion-rendez-vous';
private $port='5432';

function getconnection(){
    try {
        $pdo = new PDO("pgsql:host=$this->server;dbname=$this->dbname;user=$this->user;password=$this->pwd;port=$this->port");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (Exception $e) {
        echo "Connection failed: ". $e->getMessage();
    }
}

}


?>