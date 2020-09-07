<?php
  session_start();
  require '../backend/connection.php';

    // alle gegevens ophalen
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "UPDATE users SET spaceship1quest = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

   
      $sql = "UPDATE users SET spaceship1quest = true WHERE id = $id";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
       

?>