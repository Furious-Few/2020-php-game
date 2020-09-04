<div class="message">
<?php


if (isset($_GET['msg'])) {
    echo $_GET['msg'];
    echo '<hr>';
}
?>

</div>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="css/register-style.css">
        <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
    </head>
    <body>
        <div class="inlog-container">
            <div class="box">
                <h1>Register</h1>
                <h3>Fill in the form below to create your account!</h3>
                <div class="form">
                    <form action="backend/backend.php" method="post">
                        <input type="hidden" name="formType" value="register">
 
                        <div class="form-group">
                            <div class="input-align">
                                <input type="text" name="Username" placeholder="Username" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="input-align">
                                <input type="password" name="Password" placeholder="Password" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="input-align">
                                <input type="email" name="Email" placeholder="Email" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="button-input">
                                <input type="submit" value="Register" required>
                            </div>
                        </div>
 
                        <div class="bottom-text">
                        <p>Already have a account?<a href="login.php"> Login Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>
</body>
</html>