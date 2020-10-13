<?php

    session_start();
    require 'connection.php';

    $targetPlanet = $_GET['planet'];
    echo $targetPlanet;

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $ticketAmount = $row['ticketCount'];
    echo $ticketAmount;

    if ($ticketAmount >= 1) {
        // je mag naar de planeet

        $sql = "UPDATE `users` SET `ticketCount` = ticketcount -1 WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // 1 ticket eraf halen
        
        // naarttoe sturen
        header('Location: ../planets/' . $targetPlanet . '.php');
        exit();
    }
    else {
        // terug worden gestuurd
        header('Location: ../planets.php?msg=You have dont have enough tickets!');
        exit();
    }

?>