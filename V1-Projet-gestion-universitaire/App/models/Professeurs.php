<?php
function getAllProfesseurs() {
     $pdo = getDbConnection();
    $stmt =  $pdo->query("SELECT p.*, d.nom as departement_nom 
                         FROM professeurs p 
                         LEFT JOIN departements d ON p.IdDepartement = d.id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getCoursParProfesseur($professeur_id) {
     $pdo = getDbConnection();
    $stmt =  $pdo->prepare("
        SELECT * FROM cours 
        WHERE professeur_id = ?
        ORDER BY titre ASC
    ");
    $stmt->execute([$professeur_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getProfesseurById($id) {
     $pdo = getDbConnection();
    $stmt =  $pdo->prepare("SELECT * FROM professeurs WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function createProfesseur($nom, $prenom, $email, $departement_id) {
    $pdo = getDbConnection();
    $stmt =  $pdo->prepare("INSERT INTO professeurs (nom, prenom, email, IdDepartement) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$nom, $prenom, $email, $departement_id]);
}
function updateProfesseur($id, $nom, $prenom, $email,$departement_id) {
     $pdo = getDbConnection();
    $stmt =  $pdo->prepare("UPDATE professeurs SET nom = ?, prenom = ?, email = ?, IdDepartement = ? WHERE id = ?");
    return $stmt->execute([$nom, $prenom, $email, $departement_id, $id]);
}
function deleteProfesseur($id) {
     $pdo = getDbConnection();
    $stmt =  $pdo->prepare("DELETE FROM professeurs WHERE id = ?");
    return $stmt->execute([$id]);
}
function getProfesseursByDepartement($id_departement) {
    $pdo = getDbConnection();
    $sql = "SELECT professeurs.ID, professeurs.Nom, professeurs.Prenom, professeurs.Email, 
                   departements.Nom AS departement
            FROM professeurs
            LEFT JOIN departements ON professeurs.IdDepartement = departements.ID
            WHERE professeurs.IdDepartement = :id_departement";  // Filtrer par ID du département
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_departement', $id_departement, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
