<?php

function createEtudiant($prenom, $nom,$email, $id_user) {
    $pdo = getDbConnection();
    $sql = "INSERT INTO etudiants (Nom, Prenom,Email, IdCours) 
            VALUES (:Nom, :Prenom,:Email, :IdCours)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':Nom', $nom);
    $stmt->bindParam(':Prenom', $prenom);
    $stmt->bindParam(':Email', $email);
    $stmt->bindParam(':IdCours', $id_user);
    
    return $stmt->execute();
}
function getEtudiantById($id_etudiant) {
    $pdo = getDbConnection();
    $sql = "SELECT * FROM etudiants WHERE ID = :ID";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ID', $id_etudiant);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function getEtudiantsByCours($id_cours) {
    $pdo = getDbConnection();
    $sql = "SELECT * FROM etudiants WHERE IdCours = :IdCours";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':IdCours', $id_cours);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getAllEtudiants() {
    $pdo = getDbConnection();
    $sql = "SELECT * FROM etudiants";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getEtudiantsCours() {
    $pdo = getDbConnection();
    $sql = "SELECT etudiants.ID, etudiants.Nom AS nom, etudiants.Prenom AS prenom,
                   etudiants.Email AS email, Cours.nom AS filiere, Cours.heures AS heure
            FROM etudiants
            LEFT JOIN cours ON etudiants.IdCours = cours.ID";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function updateEtudiant($id_etudiant, $prenom, $nom, $email,$idcours) {
    $pdo = getDbConnection();
    $sql = "UPDATE etudiants SET Prenom = :prenom, Nom = :nom, Email = :email, IdCours = :idcours
            WHERE ID = :id_etudiant";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':idcours', $idcours);
    $stmt->bindParam(':id_etudiant', $id_etudiant);
    
    return $stmt->execute();
}
function deleteEtudiant($id_etudiant) {
    $pdo = getDbConnection();
    $sql = "DELETE FROM Etudiants WHERE ID = :id_etudiant";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_etudiant', $id_etudiant);
    
    return $stmt->execute();
}
// function getEtudiantsCoursBYID($id_etudiant = null) {
//     $pdo = getDbConnection();

//     // Si un ID d'étudiant est passé, on filtre par cet ID, sinon on récupère tous les étudiants
//     if ($id_etudiant) {
//         $sql = "SELECT etudiants.ID, etudiants.Nom AS nom, etudiants.Prenom AS prenom,
//                        etudiants.Email AS email, Cours.nom AS filiere, Cours.heures AS heure
//                 FROM etudiants
//                 LEFT JOIN cours ON etudiants.IdCours = cours.ID
//                 WHERE etudiants.ID = :id_etudiant";
        
//         $stmt = $pdo->prepare($sql);
//         $stmt->bindParam(':id_etudiant', $id_etudiant);
//     } else {
//         $sql = "SELECT etudiants.ID, etudiants.Nom AS nom, etudiants.Prenom AS prenom,
//                        etudiants.Email AS email, Cours.nom AS filiere, Cours.heures AS heure
//                 FROM etudiants
//                 LEFT JOIN cours ON etudiants.IdCours = cours.ID";
        
//         $stmt = $pdo->prepare($sql);
//     }

//     $stmt->execute();
    
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }
