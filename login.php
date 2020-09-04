<title>Login</title>
<div class="message">
  <?php
    if(isset($_GET['msg'])){
      echo $_GET['msg'];
      echo '<hr>';
    }
  ?>
  
</div>
 
<body>
<div class="login-container">
<link rel="stylesheet" href="css/register-style.css">
    <div class="inlog-container">
      <h1>Login</h1>
      <form action="backend/backend.php" method="post">
        <input type="hidden" name="formType" value="login"/>
        <br>
        <input type="text" placeholder="Username" name="Username" required/>
        <br>
        <br>
        <input type="Password" placeholder="Password" name="Password" required/>
        <br>
        <div class="button-input">
            <input type="submit" value="login" required>
        </div>
      </form>
      <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
  </div>


 
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
 
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>