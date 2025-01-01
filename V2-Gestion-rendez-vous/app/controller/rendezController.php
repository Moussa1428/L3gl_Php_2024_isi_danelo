<?php

class rendezController
{
  function index()
  {
    global $model;
    $rend = $model->getAll();
    require_once('../app/view/rendezvous/index.php');
  }

  function pageAdd()
{
    global $model;
    $clients = $model->getClient();
    require_once('../app/view/rendezvous/create.php');
}

  function save()
  {
    global $model;
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $description = $_POST['description'];
    $client = $_POST['client'];
    $model->add($date, $heure, $description , $client);
    header('Location: index.php?controller=rendez&page=list');
    exit();
  }

  function delete()
  {
    global $model;
    $id = $_GET['id'];
    $model->deleteRend($id);
    header('Location: index.php?controller=rendez&page=list');
    exit();
  }

  function pageEdite()
  {
    global $model;
    $id = $_GET['id'];
    $clients = $model->getClient();  
    $ren = $model->getRendById($id);
    require_once('../app/view/rendezvous/edit.php');
  }

  function update()
  {
    global $model;
    $id = $_POST['id'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $description = $_POST['description'];
    $client = $_POST['client'];
    $model->updateRend($id, $date, $heure, $description , $client);
    header('Location: index.php?controller=rendez&page=list');
    exit();
  }

}


?>