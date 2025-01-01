<?php
include_once '../App/database.php';
include_once '../App/models/Cours.php';
include_once '../App/models/Etudiant.php';
function index(){
    $etuddiants = getEtudiantsCours();
    include_once '../App/views/etudiants/show.php';
}
function delete(){
    $id = $_GET['id'];
    deleteEtudiant($id);
    header('location:index.php?index=etudiants');
}
function add() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $filiere = $_POST['filiere'];
        if (createEtudiant($nom, $prenom, $email, $filiere)) {
            header('Location: index.php?index=etudiants');
        }
    } else {
        $cours = getAllCours();
        require_once '../App/views/etudiants/create.php';
    }
}
function update(){
    $id=$_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $filiere = $_POST['filiere'];
        
        if (updateEtudiant($id, $prenom, $nom, $email, $filiere)) {
            header('Location: index.php?index=etudiants');
        }
    } else {
        $etudiant = getEtudiantById($id);
        $cours = getAllCours();
        require_once '../App/views/etudiants/edit.php';
    }
   
}
?>