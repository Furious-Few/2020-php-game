<?php
  session_start();
  require 'backend/connection.php';

    // alle gegevens ophalen
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

  // check welke space shuttle je hebt gekozen

  $spaceshuttle = $_GET['id'];

  echo $spaceshuttle;

  if ($spaceshuttle == 1) {
      // code for spaceshuttle 1

      // checken of hij bezig is
      
      $spaceship1busy = $row['spaceship1quest'];
      if ($spaceship1busy) {
          // je kan niks uitvoeeren
          // laat een timer zien
      }
      elseif ($spaceship1busy == 1) {
          // kies een quest
          ?>
          
          <form action="backend/quest-backend.php">
          
          </form>

          <?php
          
      }

  }
  // code for sapceshuttle 2

  if ($spaceshuttle == 2) {
    // code for spaceshuttle 2
    }

     // code for sapceshuttle 3

  if ($spaceshuttle == 3) {
    // code for spaceshuttle 3
    }
?>