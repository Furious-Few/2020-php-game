<?php
session_start();
require '../connection.php';
$image = $_GET['id'];
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$materialGenerator = rand(1,10);

//voor lucchallah
// chance 2 in 10 u get gold

if ($image == 1) {
    // random number for quentity
    $randomNumber = rand(50,100);

    // stuk sql om in de databsae de hoeveelheid te zetten
    $sql = "UPDATE `users` SET `iron` = `iron` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    sleep(1);
    // de sql uitvoeren
    $stmt->execute();

    // ff in de bank history zetten wat er is gebeurt

    // message wat er is gebeurt
    $Message = $_SESSION['username'];
    $Message = " got $randomNumber iron";
    $sql2 = "INSERT INTO bank_history ( name, message) VALUES (:name, :message)";

    $prepare = $conn->prepare($sql2);
      $prepare->execute([
        ':name' =>$row['username'],
        ':message' =>$Message
      ]);

    header('Location: ../../planets/tubiter.php?msg=You got ' . $randomNumber . ' iron!');  
    exit();
}

if ($image == 2) {
    // random number for quantity
    $randomNumber = rand(20,45);

    // stuk sql om in de databsae de hoeveelheid te zetten
    $sql = "UPDATE `users` SET `gold` = `gold` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    sleep(1);
    // de sql uitvoeren
    $stmt->execute();

    // ff in de bank history zetten wat er is gebeurt

    // message wat er is gebeurt
    $Message = $_SESSION['username'];
    $Message = " got $randomNumber gold";
    $sql2 = "INSERT INTO bank_history ( name, message) VALUES (:name, :message)";

    $prepare = $conn->prepare($sql2);
      $prepare->execute([
        ':name' =>$row['username'],
        ':message' =>$Message
      ]);

      header('Location: ../../planets/tubiter.php?msg=You got ' . $randomNumber . ' gold!');  
      exit();
}

if ($image == 3) {
    // random number for quentity
    $randomNumber = rand(10,25);

    // stuk sql om in de databsae de hoeveelheid te zetten
    $sql = "UPDATE `users` SET `diamond` = `diamond` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    sleep(1);
    // de sql uitvoeren
    $stmt->execute();

    // ff in de bank history zetten wat er is gebeurt

    // message wat er is gebeurt
    $Message = $_SESSION['username'];
    $Message = " got $randomNumber diamond";
    $sql2 = "INSERT INTO bank_history ( name, message) VALUES (:name, :message)";

    $prepare = $conn->prepare($sql2);
      $prepare->execute([
        ':name' =>$row['username'],
        ':message' =>$Message
      ]);

      header('Location: ../../planets/tubiter.php?msg=You got ' . $randomNumber . ' diamonds!');  
      exit();
}



?>
