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
         // exit();
          
          ?>
          
          <div class="quest1">
          <form action="backend/quest-backend.php">
          <input type="hidden" name="busy" value="1">
            <p> first main quest 

      you get a task to investigate a unknown planet on your way there you come across some meteors you deside to mine them
      and collect the recources you get from them then you continue to go to the designated planet.
      
         2 min  reward + 100 iron
            </p>
            <input type="submit" name="start"/>
          
          </form>
        </div>
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
      
  }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quest-style.css">

    <title>quests</title>
</head>
<body>
    <main>
        <!-- <div class="spaceshipOne">
            <h1>Spaceship 1</h1>
            <img src="img/spaceship1.png" alt="">
        </div> -->
    </main>
    <footer>
            <a href="hangar.php"><p>Back!</p></a>
    </footer>
</body>
</html>