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
      if ($spaceship1busy == 1) {
       header('Location: hangar.php?msg=Your ship is busy you cant start a quest!');
        exit();
          // je kan niks uitvoeeren
          // laat een timer zien
      }
      elseif ($spaceship1busy == 0) {
          // kies een quest
          echo 'You can choose of the quests below!';
          exit();
          ?>
          
          <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="1">
            <p></p>
            <input type="submit" name="start">
          
          </form>

          <?php
          
      }

  }
 if ($spaceshuttle == 2) {
    // code for spaceshuttle 2
    $spaceship2busy = $row['spaceship2quest'];
    if ($spaceship2busy) {
        
      header('Location: hangar.php?msg=Spaceship 2 is busy!');
      exit();
      // je kan niks uitvoeeren
      // laat een timer zien
  }
  elseif ($spaceship2busy == false) {
      // kies een quest
        echo 'You can choose of the quests below!';
      exit();
  }
    }

     // code for sapceshuttle 3

  if ($spaceshuttle == 3) {
    
    // code for spaceshuttle 3
    $spaceship3busy = $row['spaceship3quest'];
    if ($spaceship3busy) {
        
      header('Location: hangar.php?msg=Spaceship 3 is busy!');
      exit();
      // je kan niks uitvoeeren
      // laat een timer zien
  }
  elseif ($spaceship3busy == false) {
      // kies een quest
        echo 'You can choose of the quests below!';
      exit();
  }
    }
?>