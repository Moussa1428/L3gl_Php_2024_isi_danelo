<?php
function getDbConnection() {
    $host = 'localhost';       
    $dbname = 'gestion-universitaire';
    $user = 'root';           
    $password = '';           
    try {
        // Établir la connexion avec la base de données MySQL
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        
        // Activer le mode d'erreur pour obtenir des exceptions en cas d'erreur
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "jajjla";
        // Retourner l'objet PDO pour l'utiliser dans d'autres fonctions
        return $pdo;
        
    } catch (PDOException $e) {
        // Si une erreur se produit, afficher l'exception
        echo "Erreur de connexion : " . $e->getMessage();
        exit();
    }
}
?>