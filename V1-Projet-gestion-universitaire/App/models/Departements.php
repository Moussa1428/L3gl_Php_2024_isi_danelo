<?php
function createDepartement($nom) {
    $pdo = getDbConnection();
    $sql = "INSERT INTO departements (Nom) VALUES (:Nom)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':Nom', $nom);
    return $stmt->execute();
}
function getDepartementById($id_departement) {
    $pdo = getDbConnection();
    $sql = "SELECT * FROM departements WHERE ID = :ID";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ID', $id_departement);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function getAllDepartements() {
    $pdo = getDbConnection();
    $sql = "SELECT * FROM departements";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function updateDepartement($id_departement, $nom) {
    $pdo = getDbConnection();
    $sql = "UPDATE departements SET Nom = :Nom WHERE ID = :ID";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':Nom', $nom);
    $stmt->bindParam(':ID', $id_departement);
    
    return $stmt->execute();
}
function deleteDepartement($id_departement) {
    $pdo = getDbConnection();
    $sql = "DELETE FROM departements WHERE ID = :ID";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ID', $id_departement);
    
    return $stmt->execute();
}
function getProfesseursForCours($id_cours) {
    $pdo = getDbConnection();
    $sql = "SELECT professeurs.ID, professeurs.Nom, professeurs.Prenom, professeurs.Email 
            FROM professeurs
            LEFT JOIN cours ON cours.IdProfesseur = professeurs.ID
            WHERE cours.ID = :id_cours";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_cours', $id_cours);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>