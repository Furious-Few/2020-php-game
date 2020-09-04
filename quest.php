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
  
  // code for spaceshuttle 1
  if ($spaceshuttle == 1) {
      

      // checken of hij bezig is
      
      $spaceship1busy = $row['spaceship1quest'];
      if ($spaceship1busy) {
        
          header('Location: hangar.php?msg=Spaceship 1 is busy!');
          exit();
          // je kan niks uitvoeeren
          // laat een timer zien
      }
      elseif ($spaceship1busy == 1) {
          // kies een quest
          
      }

  }
  // code for sapceshuttle 2

  if ($spaceshuttle == 2) {
    // code for spaceshuttle 2
    $spaceship2busy = $row['spaceship2quest'];
    if ($spaceship2busy) {
        
      header('Location: hangar.php?msg=Spaceship 2 is busy!');
      exit();
      // je kan niks uitvoeeren
      // laat een timer zien
  }
  elseif ($spaceship2busy == 1) {
      // kies een quest
      
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
  elseif ($spaceship3busy == 1) {
      // kies een quest
      
  }
    }
?>