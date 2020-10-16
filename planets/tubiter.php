<?php
// ini_set("display_errors", 1);
// error_reporting(0);
session_start();
require_once '../backend/connection.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
// $n = $row['username'];

//require 'header.php';
if ( !isset( $_SESSION['id']) ) {
    header('Location: login.php?msg=Please login!');
    exit;
}
?>
<link rel="stylesheet" href="../css/dashboard-style.css">
<header>
      <nav>
          <div class="leaderbord">
              <h2>Leaderboard</h2>
                <?php
              $sql = "SELECT * FROM users ORDER BY coins DESC LIMIT 5";
              $query = $conn->query($sql);
              $users = $query->fetchAll(PDO::FETCH_ASSOC);    

              foreach ($users as $user) {
                  echo "<li>${user['username']} with ${user['coins']} coins";
              }
              ?>
          </div>
          <div class="message">
              <h3>Log:</h3>
              <?php
                if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                }
              ?>
          </div>
          <div class="nav-resources">
              <h1>Your resources:</h1>
              <p>Coins: <?php echo $row['coins'] ?></p>
              <p>Iron: <?php echo $row['iron'] ?></p>
              <p>Gold: <?php echo $row['gold'] ?></p>
              <p>Diamonds: <?php echo $row['diamond'] ?></p>
          </div>  
      </nav>
    <hr>
</header>

<?php

$id = $_SESSION['id'];


// get all infromation from the user logged in

$sql = "SELECT * FROM items WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
// code for spaceship 1
?>
<div class="items-flex">

<!-- code voor item 1 -->
<?php

if ($row['item1']) {
  // item showen
  echo '<h1>1 WEL unlocked</h1>';
}else {
  // item niet showen
  echo '<h1>1 NIET unlocked</h1>';
  // moet hem kunnen komen
}

?>

<!-- code voor item 2 -->
<?php

if ($row['item2']) {
  // item showen
  echo '<h1>2 WEL unlocked</h1>';
}else {
  // item niet showen
  echo '<h1>2 NIET unlocked</h1>';
  // moet hem kunnen komen
}

?>

<!-- code voor item 3 -->
<?php

if ($row['item3']) {
  // item showen
  echo '<h1>3 WEL unlocked</h1>';
}else {
  // item niet showen
  echo '<h1>3 NIET unlocked</h1>';
  // moet hem kunnen komen
}
?>

</div>
    