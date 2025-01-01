<?php
final class clientController
{
  function index()
  {
    global $modelC;
    $client = $modelC->getAll();
    require_once('../app/view/client/index.php');
  }

  function pageAdd()
  {
    require_once('../app/view/client/create.php');
  }

  function save()
  {
    global $modelC;
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $modelC->add($nom, $prenom, $email, $telephone);
    header('Location: index.php?controller=client&page=list');
    exit();
  }

  function delete()
  {
    global $modelC;
    $id = $_GET['id'];
    $modelC->deleteClient($id);
    header('Location: index.php?controller=client&page=list');
    exit();
  }

  function pageEdite()
  {
    global $modelC;
    $id = $_GET['id'];
    $cl = $modelC->getClientById($id);
    require_once('../app/view/client/edit.php');
  }
  function update()
  {
    global $modelC;
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $modelC->updateClient($id, $nom, $prenom, $email, $telephone);
    header('Location: index.php?controller=client&page=list');
    exit();
  }
}


?>