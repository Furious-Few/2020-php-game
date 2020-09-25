<?php
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


// get all infromation from the user logged in
$id = $_SESSION['id'];
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
        <div class="ticket-shop">
            <div class="item">
                <h2>enkeltje</h2>
            </div>
            
            <div class="item">
                <h2>retour</h2>
            </div>
        </div>
    </main>
    <footer>
            <a href="dashboard.php"><p>Back!</p></a>
    </footer>
</body>
</html>