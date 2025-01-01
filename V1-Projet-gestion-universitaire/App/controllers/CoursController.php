<?php
include_once '../App/database.php';
include_once '../App/models/Cours.php';
include_once '../App/models/Etudiant.php';
include_once '../App/models/Professeurs.php';
function index(){
    $cours = getAllCoursProfesseurDepartements();
    include_once '../App/views/cours/show.php';
}
function delete(){
    $id = $_GET['id'];
    if (getEtudiantsByCours($id)) {
        echo "<script>alert('Ce cours ne peut pas être supprimé car il est encore référencé par des étudiants.');</script>";
        echo "<script>window.location.href = 'index.php?index=cours';</script>"; 
    } else {
        deleteCours($id);
        header('location:index.php?index=cours');
    }
}
function add() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $code = $_POST['code'];
        $heure = $_POST['heure'];
        $professeur_id = $_POST['professeur_id'];
        if (createCours($nom, $code, $heure,$professeur_id)){
            header('Location: index.php?index=cours');
        }
    } else {
        $professeurs = getAllProfesseurs();
        require_once '../App/views/cours/create.php';
    }
}
function update(){
    $id=$_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $code = $_POST['code'];
        $heure = $_POST['heure'];
        
        if (updateCours($id, $nom, $code,$heure)) {
            header('Location: index.php?index=cours');
        }
    } else {
        $cours = getCoursById($id);
        $prof = getAllProfesseurs();
        require_once '../App/views/cours/edit.php';
    }
}
?>