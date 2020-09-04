<?php

session_start();
  require 'connection.php';

  // get all information from user

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // check what form the user comes from

    // code for buyinbg second space ship
  if ( $_POST['formType'] == '1' ){
    // if user doesnt have enough coins gtfo here
    if ($row['coins'] < 500) {
        header('Location: ../hangar.php?msg=You dont have enough coins!');
        exit();
    }
    else {
        // first take off 500 coins from the balace
        $sql = "UPDATE users SET coins = coins - 500 WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // unlock the spaceship
        $sql = "UPDATE users SET spaceshipOneUnlocked = true WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location: ../hangar.php?msg=You just bought the first spaceship!');
        exit();
    }
  }

  // code for buying second space ship
  if ( $_POST['formType'] == '2' ){
    // if user doesnt have enough coins gtfo here
    if ($row['coins'] < 2000) {
        header('Location: ../hangar.php?msg=You dont have enough coins!');
        exit();
    }
    else {
        // first take off 500 coins from the balace
        $sql = "UPDATE users SET coins = coins - 2000 WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // unlock the spaceship
        $sql = "UPDATE users SET spaceshipTwoUnlocked = true WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location: ../hangar.php?msg=You just bought the second spaceship!');
        exit();
    }
  }

  // code for buying third space ship
  if ( $_POST['formType'] == '3' ){
    // if user doesnt have enough coins gtfo here
    if ($row['coins'] < 5000) {
        header('Location: ../hangar.php?msg=You dont have enough coins!');
        exit();
    }
    else {
        // first take off 500 coins from the balace
        $sql = "UPDATE users SET coins = coins - 5000 WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // unlock the spaceship
        $sql = "UPDATE users SET spaceshipThreeUnlocked = true WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location: ../hangar.php?msg=You just bought the third spaceship!');
        exit();
    }
  }
?>