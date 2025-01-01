<?php
function createCours($nom, $code,$heure,$prof) {
    $pdo = getDbConnection();
    $sql = "INSERT INTO cours (Nom, code,heures,IdProfesseur) VALUES (:nom, :code,:heure,:idrpof)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':heure', $heure);
    $stmt->bindParam(':idrpof', $prof);
    return $stmt->execute();
}
function getCoursById($id_cours) {
    $pdo = getDbConnection();
    $sql = "SELECT * FROM Cours WHERE ID = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id_cours);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function getAllCours() {
    $pdo = getDbConnection();
    $sql = "SELECT * FROM Cours";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getAllCoursProfesseurDepartements() {
    $pdo = getDbConnection();
    $sql = "SELECT cours.ID AS ID, cours.Nom AS Nom, cours.Heures AS heures,cours.code AS code,
                   professeurs.Nom AS Profnom, professeurs.Prenom AS Profprenom, 
                   departements.Nom AS departementnom
            FROM cours
            LEFT JOIN professeurs ON cours.IdProfesseur = professeurs.ID
            LEFT JOIN departements ON professeurs.IdDepartement = departements.ID";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateCours($id, $nom, $code,$heure) {
    $pdo = getDbConnection();
    $sql = "UPDATE Cours SET nom = :nom, code = :code ,heures =  :heure WHERE ID = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':heure', $heure);
    $stmt->bindParam(':id', $id);
    
    return $stmt->execute();
}
function deleteCours($id_cours) {
    $pdo = getDbConnection();
    $sql = "DELETE FROM Cours WHERE ID = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id_cours);
    
    return $stmt->execute();
}
function getCoursByProfesseur($id_professeur) {
    $pdo = getDbConnection();
    $sql = "SELECT cours.ID, cours.Nom AS cours_nom, cours.Heures AS heures, 
                   professeurs.Nom AS professeur_nom, professeurs.Prenom AS professeur_prenom
            FROM cours
            LEFT JOIN professeurs ON cours.IdProfesseur = professeurs.ID
            WHERE cours.IdProfesseur = :id_professeur";  // Filtrer par l'ID du professeur
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_professeur', $id_professeur, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

