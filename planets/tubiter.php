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
<link rel="stylesheet" href="../css/tubiter-style.css">
<script>
function goBack() {
  window.history.back()
}
</script>

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
<div class="item">
<?php

if ($row['item1']) {
  // item showen
  ?>
  <a href="../backend/planets/imageclick.php?id=1"><img src="img/landline.png" alt="landline" width="400px" height="400px"></a>
  <?php
  // image showen
  
  echo '<h1>landline</h1>';
}else {
  // item niet showen
  // echo '<h1>1 NIET unlocked</h1>';
  // moet hem kunnen kopen
  ?>
  <hr>
        <form action="../backend/planets/tubiter.php" method="post">
            <input type="hidden" name="formType" value="item1"/>
            <p>Buy landline || cost: $10000</p>
            <input type="submit" value="Buy!">
        </form>
        <hr>
    
  <?php
}

?>
</div>


<!-- code voor item 2 -->
<div class="item">
<?php

if ($row['item2']) {
  // item showen
  ?>
  <a href="../backend/planets/imageclick.php?id=2"><img src="img/satellite.png" alt="satellite" width="400px" height="400px"></a>
  <?php
  // image showen
  echo '<h1>satellite</h1>';
}else {
  // item niet showen
  // echo '<h1>2 NIET unlocked</h1>';
  // moet hem kunnen kopen
  ?>
  <hr>
        <form action="../backend/planets/tubiter.php" method="post">
            <input type="hidden" name="formType" value="item2"/>
            <p>Buy satellite || cost: $25000</p>
            <input type="submit" value="Buy!">
        </form>
        <hr>
    
  <?php
}

?>
</div>

<!-- code voor item 3 -->
<div class="item">
<?php

if ($row['item3']) {
  // item showen
  ?>
  <a href="../backend/planets/imageclick.php?id=3"><img src="img/moon-buggy.png" alt="moon buggy"  width="400px" height="250px"></a>
  <?php
  // image showen
  ?>
  
  <div class="moon-car-align">
 <h1>moon car</h1>
  </div>
  <?php
  
}else {

  ?>
  <hr>
        <form action="../backend/planets/tubiter.php" method="post">
            <input type="hidden" name="formType" value="item3"/>
            <p>Buy moon car || cost: $50000</p>
            <input type="submit" value="Buy!">
        </form>
        <hr>
    
  <?php
}
?>
</div>

</div>

<button onclick="goBack()">Go Back</button>