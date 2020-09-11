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

  $startQuest = $_GET['busy'];

     if ($startQuest == 1) {
       # code...
    
      $sql = "UPDATE users SET spaceship1quest = true WHERE id = $id";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      header('Location: ../hangar.php?msg=Quest started!');  
          exit(); 
        }
     
       if ($startQuest == 2) {
         # code...
       
        $sql = "UPDATE users SET spaceship2quest = true WHERE id = $id";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      header('Location: ../hangar.php?msg=Quest started!');  
          exit();
          }

           if ($startQuest == 3) {
         # code...
       
        $sql = "UPDATE users SET spaceship3quest = true WHERE id = $id";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      header('Location: ../hangar.php?msg=Quest started!');  
          exit();
          }
?>