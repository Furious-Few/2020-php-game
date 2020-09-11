

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="css/dashboard-style.css">
    <title>Planetarium</title>
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
            <div class="Planets">
            <h2>Leaderboard</h2>
                <li>luc with 53500 coins<li>alexiushuts with 10640 coins<li>test with 3660 coins<li>test3 with 2440 coins<li>test2 with 2250 coins            </div>
            <div class="Quests">
                <h3>Questlog:</h3>
                <p>Quest1: 1</p>
                <p>Quest2: 2</p>
                <p>Quest3: 0</p>
                <p>Quest4: 0</p>
            <div class="nav-resources">
                <p>Coins: 10640</p>
                <p>Iron: 0</p>
                <p>Gold: 0</p>
                <p>Diamonds: 0</p>
            </div>  
        </nav>
        <hr>
    </header>
    <main>
        <div class="main-flex">
            <div class="planet">
                <a href="backend/planetClick.php">
                    <img src="img/skorp.png" alt="planet-image" width="150px" height="300px" >
                </a>
            </div>
        </form>
    </footer>
</body>
</html>
