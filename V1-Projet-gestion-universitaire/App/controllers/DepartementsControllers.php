<?php
include_once '../App/database.php';
include_once '../App/models/Departements.php';
include_once '../App/models/Professeurs.php';
function index(){
    $depatem = getAllDepartements();
    include_once '../App/views/departements/show.php';
}
function add() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        if (createDepartement($nom)) {
            header('Location: index.php?index=departements');
        }
    } else {
        require_once '../App/views/departements/create.php';
    }
}
function delete(){
    $id = $_GET['id'];
    if (getProfesseursByDepartement($id)) {
        echo "<script>alert('Ce departements ne peut pas être supprimé car il est encore référencé par un professeurs.');</script>";
        echo "<script>window.location.href = 'index.php?index=departements';</script>"; 
    } else {
        deleteDepartement($id);
        header('location:index.php?index=departements');
    }
}
function update(){
    $id=$_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        if (updateDepartement($id, $nom)) {
            header('Location: index.php?index=departements');
        }
    } else {
        $dep = getDepartementById($id);
        require_once '../App/views/departements/edit.php';
    }
}
?>
