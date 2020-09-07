<?php
session_start();
require 'connection.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$materialGenerator = rand(1,10);

//voor lucchallah
// chance 2 in 10 u get gold

if ($materialGenerator == 1) {
    // random number for quentity
    $randomNumber = rand(1,10);

    // stuk sql om in de databsae de hoeveelheid te zetten
    $sql = "UPDATE `users` SET `gold` = `gold` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    sleep(3);
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

    header('Location: ../dashboard.php?msg=You got ' . $randomNumber . ' gold!');  
    exit();
}

if ($materialGenerator == 2) {
    $randomNumber = rand(1,10);

    $sql = "UPDATE `users` SET `gold` = `gold` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    sleep(3);
    $stmt->execute();

    header('Location: ../dashboard.php?msg=You got ' . $randomNumber . ' gold!');   
    exit();
}

// chance 1 in 10 u get diamond

if ($materialGenerator == 5) {
    $randomNumber = rand(1,5);

    $sql = "UPDATE `users` SET `diamond` = `diamond` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    sleep(3);
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

    header('Location: ../dashboard.php?msg=You got ' . $randomNumber . ' diamond!');  
    exit();
}

// chance 7 in 10 u get iron

else{
    $randomNumber = rand(1,20);

    $sql = "UPDATE `users` SET `iron` = `iron` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    sleep(3);
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

    header('Location: ../dashboard.php?msg=You got ' . $randomNumber . ' iron!');  
    exit();
}

?>
