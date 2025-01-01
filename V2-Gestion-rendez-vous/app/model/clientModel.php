<?php

final class clientModel
{
  function getAll()
  {
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM client");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }
  function add($nom, $prenom, $email, $telephone)
  {
    global $pdo;
    $query = $pdo->prepare("INSERT INTO client (nom, prenom, email, telephone) VALUES (?,?,?,?)");
    $query->execute([$nom, $prenom, $email, $telephone]);
  }

  function deleteClient($id)
  {
    global $pdo;
    $query = $pdo->prepare("DELETE FROM client WHERE id=?");
    $query->execute([$id]);
  }

  function updateClient($id, $nom, $prenom, $email, $telephone)
  {
    global $pdo;
    $query = $pdo->prepare("UPDATE client SET nom=?, prenom=?, email=?, telephone=? WHERE id=?");
    $query->execute([$nom, $prenom, $email, $telephone, $id]);
  }

  function getClientById($id)
  {
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM client WHERE id=?");
    $query->execute([$id]);
    return $query->fetch(PDO::FETCH_ASSOC);
  }
}

?>