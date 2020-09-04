<?php
session_start();
require 'connection.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$materialGenerator = rand(1,10);


// chance 2 in 10 u get gold

if ($materialGenerator == 1) {
    $randomNumber = rand(1,10);

    $sql = "UPDATE `users` SET `gold` = `gold` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header('Location: ../dashboard.php?msg=You got ' . $randomNumber . ' gold!');
    sleep(3);
    exit();
}

if ($materialGenerator == 2) {
    $randomNumber = rand(1,10);

    $sql = "UPDATE `users` SET `gold` = `gold` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header('Location: ../dashboard.php?msg=You got ' . $randomNumber . ' gold!');
    sleep(3);
    exit();
}

// chance 1 in 10 u get diamond

if ($materialGenerator == 5) {
    $randomNumber = rand(1,5);

    $sql = "UPDATE `users` SET `diamond` = `diamond` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header('Location: ../dashboard.php?msg=You got ' . $randomNumber . ' diamonds!');
    sleep(3);
    exit();
}

// chance 7 in 10 u get iron

else{
    $randomNumber = rand(1,20);

    $sql = "UPDATE `users` SET `iron` = `iron` + $randomNumber WHERE `users`.`id` = $id;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header('Location: ../dashboard.php?msg=You got ' . $randomNumber . ' iron!');
    sleep(3);
    exit();
}

?>
