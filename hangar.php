<?php
ini_set("display_errors", 1);
error_reporting(0);
session_start();

//require 'header.php';
if ( !isset( $_SESSION['id']) ) {
    header('Location: login.php?msg=Please login!');
    exit;
}
?>

<div class="message">
    <h3>Log:</h3>
    <?php                    
    if(isset($_GET['msg'])){
    echo $_GET['msg'];
    echo '<hr>';
    }
    
    ?>
</div>

<?php
require_once 'backend/connection.php';
$id = $_SESSION['id'];

// check of de quest al klaar is
$timerSQL = "SELECT * FROM timer WHERE user = $id";
$query = $conn->query($timerSQL);
$quests = $query->fetchAll(PDO::FETCH_ASSOC);


// tijd ophalen uit de DB






// tijd van NU rekenen
// $currentTime = date("h:i:s");
// echo "Time quest is started: " . $questStartedTime;
// echo "<br>";
// echo "Current time: " . $currentTime;
// echo "<br>";
// // vergelijken


// if ($currentTime) {
//     # code...
// }
// $rightSpaceship = $quest['spaceship'];

// if(($dateTime1-$currentTime) > 120) {     
//     echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    
//   }else {
//     echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
//   }

// update query


// get all infromation from the user logged in

$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
// code for spaceship 1
?>
<div class="hangar-flex">
    <?php
if ($row['spaceshipOneUnlocked'] == true) {
    ?>
    <div class="spaceshipOne">
            <h1>Spaceship 1</h1>
            <a href="quest.php?id=1">
            <img src="img/spaceship1.png" alt="spaceship 1">
            </a>
            <p>
            <?php
                if ($row['spaceship1quest'] == true) {
                    echo '<p>Spaceship 1 is busy!</p>';
                    
                    // check wanneer hij is gestart
                    // check wanneer hij eindigt
                    // check hoelang het nog duurt

                    // klaar? zet de spaceship op beschikbaar
                    

                }
                elseif ($row['spaceship1quest'] == false) {
                    echo '<p>Spaceship 1 is ready for a quest!</p>';
                }
            ?>

            </p>
            
        </div>
        <?php
    //echo 'output is TRUE';
    
}
if ($row['spaceshipOneUnlocked'] == false) {
    
    ?>
    <hr>
    <form action="backend/spaceShop.php" method="post">
        <input type="hidden" name="formType" value="1"/>
        <p>Buy spaceship #1 || cost: $500</p>
        <input type="submit" value="Buy!">
    </form>
    <hr>

    <!-- <a href="backend/spaceShop.php">Buy the spaceship here!</a> -->
    <?php
}

// code for space ship 2

if ($row['spaceshipTwoUnlocked']) {
    ?>
    <div class="spaceshipOne">
            <h1>Spaceship 2</h1><a href="quest.php?id=2">
                <img src="img/spaceship2.png" alt="spaceship 2">
            </a>
            <p>
            <?php
                if ($row['spaceship2quest'] == true) {
                    echo '<p>Spaceship 2 is busy!</p>';
                }
                elseif ($row['spaceship2quest'] == false) {
                    echo '<p>Spaceship 2 is ready for a quest!</p>';
                }
            ?>

            </p>
            
        </div>
        <?php
    
}else {
    ?>
    <hr>
        <form action="backend/spaceShop.php" method="post">
            <input type="hidden" name="formType" value="2"/>
            <p>Buy spaceship #2 || cost: $2000</p>
            <input type="submit" value="Buy!">
        </form>
        <hr>


            
        <!-- end of tests -->
    <?php
    // show a button to buy the ship
    
}

// code for spaceship 3

if ($row['spaceshipThreeUnlocked']) {
    ?>
    <div class="spaceshipOne">
            <h1>Spaceship 3</h1><a href="quest.php?id=3">
                <img src="img/spaceship3.png" alt="spaceship 3">
            </a>
            <p>
            <?php
                if ($row['spaceship3quest'] == true) {
                    echo '<p>Spaceship 3 is busy!</p>';
                }
                elseif ($row['spaceship3quest'] == false) {
                    echo '<p>Spaceship 3 is ready for a quest!</p>';
                }
            ?>

            </p>
            
        </div>
        <?php
    // show space ship 3
    
}else {
    // show a button to buy the ship
    ?>
        <hr>
        <form action="backend/spaceShop.php" method="post">
            <input type="hidden" name="formType" value="3"/>
            <p>Buy spaceship #3 || cost: $5000</p>
            <input type="submit" value="Buy!">
        </form>
        <hr>
        

    <?php
    
    
}

?>
</div>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hangar-style.css">

    <title>Hangar</title>
    
</head>
<body>
    <main>
        <hr>
        <!-- ticket shop -->
        <div class="ticket-shop-anoucements">
            <h1>ticket shop</h1>
            <?php
            echo "You have: " . $row['ticketCount'] . " one way tickets";
            echo '<br>';
            $retourCount = $row['ticketCount'] / 2;
            $retourCountFloor = floor($retourCount);
            echo "You have: " . $retourCountFloor . " retour tickets";

    ?>
        </div>
        
        <div class="ticket-shop">
        
        <!-- code for tickets -->
            <div class="item">
                <h2>One way</h2>
                <img src="img/retour.png" alt="one way ticket" width="150px" height="150px">
                <form action="backend/ticket-shop.php" method="post">
                    <input type="hidden" name="formType" value="enkel"/>
                    <p>One way ticket: $175</p>
                    <input type="submit" value="Buy!">
                </form>
            </div>
            
            <div class="item">
                <h2>retour</h2>
                <img src="img/retour.png" alt="retour ticket" width="150px" height="150px">
                <form action="backend/ticket-shop.php" method="post">
                    <input type="hidden" name="formType" value="retour"/>
                    <p>Retour ticket: $250</p>
                    <input type="submit" value="Buy!">
                </form>
            </div>
        </div>
    </main>
    <footer>
            <a href="dashboard.php"><p>Back!</p></a>
    </footer>
</body>
</html>
<?php
foreach ($quests as $quest) {
    // save start date in variable
    $dateTime1 = $quest['date'] . " ";
    $questStartedTime = $quest['h'] . ":" . $quest['m'] . ":" . $quest['s'];

    echo "spaceship ";
    echo $quest['spaceship'];
    echo " started quest ";
    // echo "<br>";
    // quest exploden
   // $rightmission = $_GET['id'] + $rightQuest

    $rightQuest1 = explode("1.", $quest['quest']);
    $rightQuest2 = explode("2.", $quest['quest']);
    $rightQuest3 = explode("3.", $quest['quest']);
    $switchQuest1 = $rightQuest1[1];
    $switchQuest2 = $rightQuest2[1];
    $switchQuest3 = $rightQuest3[1];
    
   // echo "rightQuest: $rightQuest[1]";
    //echo "<br>";
     $currentTime = date("h:i:s");
    echo "Time quest is started: " . $questStartedTime;
    // echo "<br>";
    // echo "Current time: " . $currentTime;
    echo "<br>";
// vergelijken

$rightSpaceship = $quest['spaceship'];


switch ($switchQuest1) {
        case '1':

        $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 2) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
  
    $sql = "UPDATE users SET spaceship1quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();

  }

            break;
        case '2';
            
        $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 7) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 300 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '3':
                    $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 15) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '4':
                    $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 20) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 1600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 2000 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET diamond = diamond + 15 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '5':
     $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 45) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 2500 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 3500 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET diamond = diamond + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship1quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        
    }
  switch ($switchQuest2) {
        case '1':

        $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 2) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest2";
    $sql = "UPDATE users SET spaceship2quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();

  }

            break;
        case '2';
            
        $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 7) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 300 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '3':
                    $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 15) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '4':
                    $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 20) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 1600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 2000 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET diamond = diamond + 15 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '5':
     $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 45) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 2500 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 3500 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET diamond = diamond + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship2quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        
    }
      switch ($switchQuest3) {
        case '1':

        $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 2) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest2";
    $sql = "UPDATE users SET spaceship3quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();

  }

            break;
        case '2';
            
        $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 7) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 300 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '3':
                    $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 15) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '4':
                    $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 20) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 1600 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 2000 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET diamond = diamond + 15 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        case '5':
     $diff_time=(strtotime(date($currentTime))-strtotime($questStartedTime))/60;

  if($diff_time >= 45) {     
    echo "Spaceship $rightSpaceship finished task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = false WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
    $sql = "UPDATE users SET iron = iron + 2500 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET gold = gold + 3500 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET diamond = diamond + 100 WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
  else {
    echo "Spaceship $rightSpaceship is busy doing task $rightQuest[1]";
    $sql = "UPDATE users SET spaceship3quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
  }
            break;
        
    }

    echo $rightQuest[1];
    echo " - ";

    // tijd berekeen wanneer hij origineeel klaar zou zijn
    
    // if statements om te kijken welke quest je doet (hoeveel tijd je erbij op moet tellen)


    echo "Start time: " . $dateTime1 . $questStartedTime;
    echo "<hr>";
    // $finishTime = ;
}