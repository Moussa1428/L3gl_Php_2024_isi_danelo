<?php
final class rendezModel
{
  function getAll()
  {
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM rend_vous");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }
  function add($date, $heure, $descriptions, $client)
  {
    global $pdo;
    $query = $pdo->prepare("INSERT INTO rend_vous (date, heure, descriptions,client) VALUES (?,?,?,?)");
    $query->execute([$date, $heure, $descriptions, $client]);
  }

  function deleteRend($id)
  {
    global $pdo;
    $sql = $pdo->prepare("DELETE FROM rend_vous WHERE id=?");
    $sql->execute([$id]);
  }

  function updateRend($id, $date, $heure, $description, $client)
  {
    global $pdo;
    $sql = "UPDATE rend_vous SET date = ?, heure = ?, descriptions = ?, client = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$date, $heure, $description, $client, $id]);
  }

  function getRendById($id)
  {
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM rend_vous WHERE id=?");
    $query->execute([$id]);
    return $query->fetch(PDO::FETCH_ASSOC);

  }

  function getClient()
  {
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM client");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>