<?php
session_start();
//require 'header.php';
if ( !isset( $_SESSION['id']) ) {
    header('Location: login.php?msg=Please login!');
    exit;
}

require_once 'backend/connection.php';


// get all infromation from the user logged in
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
// $n = $row['username'];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="css/dashboard-style.css">
    <title>Space miner</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh").load("load.php");
        setInterval(function() {
            $("#div_refresh").load("load.php");
        }, 100);
    });
 
</script>
<!-- script for scrolling down -->
<script type="text/javascript">
jQuery(document).ready(function() {
    
    jQuery('body').animate({scrollTop: +10000}, 1000);
    
});
</script>
<!-- end of script -->
</head>
</head>
<body>
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
                <p>Coins: <?php echo $row['coins'] ?></p>
                <p>Iron: <?php echo $row['iron'] ?></p>
                <p>Gold: <?php echo $row['gold'] ?></p>
                <p>Diamonds: <?php echo $row['diamond'] ?></p>
            </div>  
        </nav>
        <hr>
    </header>
    <main>
        <div class="main-flex">
            <div class="meteor">
                <a href="backend/meteorClick.php">
                    <img src="img/meteor.png" alt="meteor-image" width="150px" height="300px" >
                </a>
            </div>

            <div class="shop">
                <!-- form for selling 1 iron -->
                <form action="backend/shop.php" method="post">
                    <input type="hidden" name="formType" value="iron"/>
                    <p>Sell 1 iron, worth 10 coins</p>
                    <input type="submit" value="Sell!">
                </form>

                <!-- form for selling 1 gold -->
                <form action="backend/shop.php" method="post">
                    <input type="hidden" name="formType" value="gold"/>
                    <p>Sell 1 gold, worth 50 coins</p>
                    <input type="submit" value="Sell!">
                </form>

                <!-- form for selling 1 diamond -->
                <form action="backend/shop.php" method="post">
                    <input type="hidden" name="formType" value="diamond"/>
                    <p>Sell 1 diamond, worth 200 coins</p>
                    <input type="submit" value="Sell!">
                </form>

                <form action="backend/sell_all.php" method="post">
                    <input type="hidden" name="formType" value="iron">
                    <label for="Iron">Iron</label><br>
                    <input type="submit" value="Sell all!">
                </form>

                <form action="backend/sell_all.php" method="post">
                    <input type="hidden" name="formType" value="gold"/>
                    <label for="Gold">Gold</label>
                    <input type="submit" value="Sell!">
                </form>

                <form action="backend/sell_all.php" method="post">
                    <input type="hidden" name="formType" value="diamond"/>
                    <label for="diamond">diamonds</label>
                    <input type="submit" value="Sell!">
                </form>
            </div>
            
            <div class="hangar">
                <a href="hangar.php">
                    <img src="img/dashboard-hangar.gif" alt="Hangar">
                </a>
            </div>
        </div> 
    </main>
    <hr>
    <footer>
        <div class="chat-flex">
            <div id="div_refresh">
                    
            </div>
            </div>
        </div>
                
        <div class="form">
        <form action="backend/chatcontroller.php" method="post">
            <input type="hidden" name="formType" value="chat">
                <br>
            <input type="hidden" name="User" value="<?php echo $id ?>">
            <input type="text" placeholder="Message" name="Message" required>
            <!-- <input type="submit" value="send" required> -->
        </form>
    </footer>
</body>
</html>