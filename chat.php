<?php
session_start();

if(!$_SESSION['id']){
    header('Location: index.php?msg=You are not loggedin!');
    exit();
}

?>
<head>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
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

<body>
    <div class="chat-flex">
        <div id="div_refresh"></div>
        <div class="form">
        <!-- <hr> -->
        <form action="backend/chatcontroller.php" method="post">
            <input type="hidden" name="formType" value="chat">
                <br>
            <input type="hidden" name="User" value="<?php echo $id ?>">
            <input type="text" placeholder="Message" name="Message" required>
            <input type="submit" value="send" required>
        </form>
        </div>
    </div>



</body>

    

</html>