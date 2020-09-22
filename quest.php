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
          
        
     //=============================quests====================================//  ?> 
        <div class="quests">
          <div class="quest1">
          <form action="backend/quest-backend.php">
          <input type="hidden" name="busy" value="1.1">
            <p> first main quest 

      you get a task to investigate a unknown planet on your way there you come across some meteors you deside to mine them
      and collect the recources you get from them then you continue to go to the designated planet.
      
         2 min  reward + 100 iron
            </p>
            <input type="submit" name="start"/>
          
          </form>
        </div>
<?php //============================quest 2===================================// ?>
         <div class="quest2">
          <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="1.2">
              <p> 
     second main quest 

     you arrive on the planet and see there is alot of landscape so you scan the place and the results say this planets 
     origin and that 87% of the planet is made up of precious metals but no diamonds but you decide to mine anyway.

         7 min.  reward +300 iron +100 gold 

            </p>
          <input type="submit" name="start"/>
        </form>
      </div>

    <?php //============================quest 3===================================// ?>

        <div class="quest3">
          <form action="backend/quest-backend.php">
           <input type="hidden" name="busy" value="1.3">
             <p> 
         third main quest

     with the information you gatherd you must return to your home planet and turn it in voor a grand reward 
     that has been promised. while your traveling you come across alot meteors and you managed to dodge all of them
     but one yout ship is damadged so you have to land somewhere to repair the damgades. after the repares you see that the meteor that hit you was made out of gold and iron.
     you mine these but it most likely will take a long time.

      15 min.  reward +600 iron +600 gold


            </p>
          <input type="submit" name="start"/>
        </form>
      </div>

       <?php //============================quest 4===================================// ?>

          <div class="quest4">
           <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="1.4">
              <p> 

     forth main quest 

     after mining the meteor you finally get to go back to your base but the travel is still long and will take a while 
     and on the way you need to make a stop to fill up gass. when you eventually come home you directly go to the guy for your reward.

  20 min.     reward +1600 iron  +2000 gold  +15 diamonds
             </p>
          <input type="submit" name="start"/>
        </form>
      </div>

      <?php //============================quest 5===================================// ?>

        <div class="quest5">
           <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="1.5">
              <p> 

     
     fifth main quest

     nadat je de informatie heeft geleverd geeft dezelde persoon een kaart naar een planeet met heel veel diamanten,goud en 
     after you turn in the information you got the same guy gives you a map to a planet with alot of everything from diamonds to gold to iron 
     so you decide to go there but he warns you of the travel time it will take a long time to get there and minde all the recources you want
     you go anyway and mine alot this took a long long time.

  45 min.  reward  +2500 iron  +3500 gold  +100 diamonds


             </p>
          <input type="submit" name="start"/>
        </form>
      </div>
    </div>
          <?php
          // header('Location: ../hangar.php?msg=Quest started!');  
          // exit();
          
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

     //==================================ship 2 quests======================================== ?>
       <div class="quests">
          <div class="quest1">
          <form action="backend/quest-backend.php">
          <input type="hidden" name="busy" value="2.1">
            <p> first main quest 

      you get a task to investigate a unknown planet on your way there you come across some meteors you deside to mine them
      and collect the recources you get from them then you continue to go to the designated planet.
      
         2 min  reward + 100 iron
            </p>
            <input type="submit" name="start"/>
          
          </form>
        </div>
<?php //============================quest 2===================================// ?>
         <div class="quest2">
          <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="2.2">
              <p> 
     second main quest 

     you arrive on the planet and see there is alot of landscape so you scan the place and the results say this planets 
     origin and that 87% of the planet is made up of precious metals but no diamonds but you decide to mine anyway.

         7 min.  reward +300 iron +100 gold 

            </p>
          <input type="submit" name="start"/>
        </form>
      </div>

    <?php //============================quest 3===================================// ?>

        <div class="quest3">
          <form action="backend/quest-backend.php">
           <input type="hidden" name="busy" value="2.3">
             <p> 
         third main quest

     with the information you gatherd you must return to your home planet and turn it in voor a grand reward 
     that has been promised. while your traveling you come across alot meteors and you managed to dodge all of them
     but one yout ship is damadged so you have to land somewhere to repair the damgades. after the repares you see that the meteor that hit you was made out of gold and iron.
     you mine these but it most likely will take a long time.

      15 min.  reward +600 iron +600 gold


            </p>
          <input type="submit" name="start"/>
        </form>
      </div>

       <?php //============================quest 4===================================// ?>

          <div class="quest4">
           <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="2.4">
              <p> 

     forth main quest 

     after mining the meteor you finally get to go back to your base but the travel is still long and will take a while 
     and on the way you need to make a stop to fill up gass. when you eventually come home you directly go to the guy for your reward.

  20 min.     reward +1600 iron  +2000 gold  +15 diamonds
             </p>
          <input type="submit" name="start"/>
        </form>
      </div>

      <?php //============================quest 5===================================// ?>

        <div class="quest5">
           <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="2.5">
              <p> 

     
     fifth main quest

     nadat je de informatie heeft geleverd geeft dezelde persoon een kaart naar een planeet met heel veel diamanten,goud en 
     after you turn in the information you got the same guy gives you a map to a planet with alot of everything from diamonds to gold to iron 
     so you decide to go there but he warns you of the travel time it will take a long time to get there and minde all the recources you want
     you go anyway and mine alot this took a long long time.

  45 min.  reward  +2500 iron  +3500 gold  +100 diamonds


             </p>
          <input type="submit" name="start"/>
        </form>
      </div>
    </div>

        <?php
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
?>
    <div class="quests">
          <div class="quest1">
          <form action="backend/quest-backend.php">
          <input type="hidden" name="busy" value="3.1">
            <p> first main quest 

      you get a task to investigate a unknown planet on your way there you come across some meteors you deside to mine them
      and collect the recources you get from them then you continue to go to the designated planet.
      
         2 min  reward + 100 iron
            </p>
            <input type="submit" name="start"/>
          
          </form>
        </div>
        <div class="quest2">
          <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="3.2">
              <p> 
     second main quest 

     you arrive on the planet and see there is alot of landscape so you scan the place and the results say this planets 
     origin and that 87% of the planet is made up of precious metals but no diamonds but you decide to mine anyway.

         7 min.  reward +300 iron +100 gold 

            </p>
          <input type="submit" name="start"/>
        </form>
      </div>

    <?php //============================quest 3===================================// ?>

        <div class="quest3">
          <form action="backend/quest-backend.php">
           <input type="hidden" name="busy" value="3.3">
             <p> 
         third main quest

     with the information you gatherd you must return to your home planet and turn it in voor a grand reward 
     that has been promised. while your traveling you come across alot meteors and you managed to dodge all of them
     but one yout ship is damadged so you have to land somewhere to repair the damgades. after the repares you see that the meteor that hit you was made out of gold and iron.
     you mine these but it most likely will take a long time.

      15 min.  reward +600 iron +600 gold


            </p>
          <input type="submit" name="start"/>
        </form>
      </div>

       <?php //============================quest 4===================================// ?>

          <div class="quest4">
           <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="3.4">
              <p> 

     forth main quest 

     after mining the meteor you finally get to go back to your base but the travel is still long and will take a while 
     and on the way you need to make a stop to fill up gass. when you eventually come home you directly go to the guy for your reward.

  20 min.     reward +1600 iron  +2000 gold  +15 diamonds
             </p>
          <input type="submit" name="start"/>
        </form>
      </div>

      <?php //============================quest 5===================================// ?>

        <div class="quest5">
           <form action="backend/quest-backend.php">
            <input type="hidden" name="busy" value="3.5">
              <p> 

     
     fifth main quest

     nadat je de informatie heeft geleverd geeft dezelde persoon een kaart naar een planeet met heel veel diamanten,goud en 
     after you turn in the information you got the same guy gives you a map to a planet with alot of everything from diamonds to gold to iron 
     so you decide to go there but he warns you of the travel time it will take a long time to get there and minde all the recources you want
     you go anyway and mine alot this took a long long time.

  45 min.  reward  +2500 iron  +3500 gold  +100 diamonds


             </p>
          <input type="submit" name="start"/>
        </form>
      </div>
    </div>

      <?php
  }
    }
    ?>