<?php

session_start();
require 'connection.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// code for selling 1 iron

if ($_POST['formType'] == 'iron') {
    if ($row['iron'] == 0) {
        header('Location: ../dashboard.php?msg=You dont have enough iron!');
        exit();
    }
    else {
        $sql = "UPDATE `users` SET `iron` = `iron` - 1 WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sql = "UPDATE `users` SET `coins` = `coins` + 10 WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: ../dashboard.php?msg=You sold 1 iron!');
        exit();
    }
}

// code for selling 1 gold

if ($_POST['formType'] == 'gold') {
    if ($row['gold'] == 0) {
        header('Location: ../dashboard.php?msg=You dont have enough gold!');
        exit();
    }
    else {
        $sql = "UPDATE `users` SET `gold` = `gold` - 1 WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sql = "UPDATE `users` SET `coins` = `coins` + 50 WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: ../dashboard.php?msg=You sold 1 gold!');
        exit();
    }
}

// code for selling 1 diamond

if ($_POST['formType'] == 'diamond') {
    if ($row['diamond'] == 0) {
        header('Location: ../dashboard.php?msg=You dont have enough diamond!');
        exit();
    }
    else {
        $sql = "UPDATE `users` SET `diamond` = `diamond` - 1 WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sql = "UPDATE `users` SET `coins` = `coins` + 200 WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: ../dashboard.php?msg=You sold 1 diamond!');
        exit();
    }
}

?>