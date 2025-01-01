<?php
include_once '../App/database.php';
include_once '../App/models/Departements.php';
include_once '../App/models/Professeurs.php';
include_once '../App/models/Cours.php';
function index(){
    $depatem = getAllProfesseurs();
    include_once '../App/views/professeurs/show.php';
}
function add() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $dep = $_POST['dep'];
        if (createProfesseur($nom,$prenom,$email,$dep)) {
            header('Location: index.php?index=professeurs');
        }
    } else {
        $departement = getAllDepartements() ;
        require_once '../App/views/professeurs/create.php';
    }
}
function delete(){
        $id = $_GET['id'];
        if (getCoursByProfesseur($id)) {
            echo "<script>alert('Ce Professeur ne peut pas être supprimé car il est encore référencé par un cour.');</script>";
            echo "<script>window.location.href = 'index.php?index=professeurs';</script>"; 
        } else {
            deleteProfesseur($id);
            header('location:index.php?index=professeurs');
        }
        
}
function update(){
    $id=$_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $dep = $_POST['dep'];
        if (updateProfesseur($id, $nom,$prenom,$email,$dep)) {
            header('Location: index.php?index=professeurs');
        }
    } else {
        $prof = getProfesseurById($id);
        $departements = getAllDepartements();
        require_once '../App/views/professeurs/edit.php';
    }
}
?>
