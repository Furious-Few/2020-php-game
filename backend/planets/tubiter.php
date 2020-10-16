<?php

session_start();
require '../connection.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
    
// check what form the user comes from

// code for buying first item
  if ( $_POST['formType'] == 'item1' ){
    // if user doesnt have enough coins gtfo here
    if ($row['coins'] < 10000) {
        header('Location: ../../planets/tubiter.php?msg=You dont have enough coins!');
        exit();
    }
    else {
        // first take off 500 coins from the balace
        $sql = "UPDATE users SET coins = coins - 10000 WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // unlock the spaceship
        $sql = "UPDATE items SET item1 = true WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location: ../../planets/tubiter.php?msg=You bought the excavator!');
        exit();
    }
  }

// code for buying second item
if ( $_POST['formType'] == 'item2' ){
    // if user doesnt have enough coins gtfo here
    if ($row['coins'] < 25000) {
        header('Location: ../../planets/tubiter.php?msg=You dont have enough coins!');
        exit();
    }
    else {
        // first take off 500 coins from the balace
        $sql = "UPDATE users SET coins = coins - 25000 WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // unlock the spaceship
        $sql = "UPDATE items SET item2 = true WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location: ../../planets/tubiter.php?msg=You bought the satellite!');
        exit();
    }
  }

// code for buying first item
if ( $_POST['formType'] == 'item3' ){
    // if user doesnt have enough coins gtfo here
    if ($row['coins'] < 50000) {
        header('Location: ../../planets/tubiter.php?msg=You dont have enough coins!');
        exit();
    }
    else {
        // first take off 500 coins from the balace
        $sql = "UPDATE users SET coins = coins - 50000 WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // unlock the spaceship
        $sql = "UPDATE items SET item3 = true WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location: ../../planets/tubiter.php?msg=You bought the moon buggy!');
        exit();
    }
  }



?>