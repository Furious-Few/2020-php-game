<?php
  session_start();
  require 'connection.php';
  if ( $_POST['formType'] == 'register' ){
      // je komt vanuit het register form
      $Username = $_POST['Username'];
      $Password = $_POST['Password'];
      $Email = $_POST['Email'];
      
      $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
        
      $sql = "SELECT * FROM users WHERE username = :username";
      $query = $conn->prepare($sql);
      $query->execute([
        'username' => $Username
      ]);

      $user = $query->rowcount();
      if ($user) {
        // gebruiker bestaat al..
        header('Location: ../register.php?msg=This account already exists!');
        exit();
      }

      $sql = "SELECT * FROM users WHERE email = :email";
      $query = $conn->prepare($sql);
      $query->execute([
        'email' => $Email
      ]);

      $user2 = $query->rowcount();
      if ($user2) {
        // gebruiker bestaat al..
        header('Location: ../register.php?msg=This email is already being used!');
        exit();
      }

      $sql = "INSERT INTO users (id, username, password, email, iron, gold, diamond, coins) 
              VALUES (NULL, :username, :password, :email, 20, 10, 3, 0)";

      $prepare = $conn->prepare($sql);
      $prepare->execute([
        ':username' =>$Username,
        ':password' =>$hashedPassword,
        ':email' =>$Email
      ]);

      header('Location: ../login.php?msg=Account succesfully registered!');
      exit();
      }

  elseif ($_POST['formType'] == 'login') {
    // je komt vanuit het login form
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    // heb ik wel iemand met dit email adress

    $sql = "SELECT * FROM users WHERE username = :username";
    $query = $conn->prepare($sql);
    $query->execute([
        ':username' => $Username
    ]);
    $userExists = $query->rowCount();

    if ($userExists) {
        $user = $query->fetch();
        $verified = password_verify($Password, $user['password']);
        if (!$verified) {
          header('Location: ../login.php?msg=Wrong password!');
          exit();
        }

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_admin'] = $user['admin'];
        //session_start($_SESSION['id'] = $user['id']);

        header('Location: ../dashboard.php?msg=You are logged in!');
        exit();

      }
    else {
      header('Location: ../login.php?msg=User doesnt excist!');
      exit();
      //exit('gebruiker bestaat niet');
    }
  }
?>