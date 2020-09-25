<?php

session_start();
require 'connection.php';

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);


    // echo $id;
    // echo $row['username'];


    if ( $_POST['formType'] == 'enkel' ){
        // checken of je genoeg geld hebt
        if ($row['coins'] > 175) {
            echo 'Wel genoeg';

            $sql = "UPDATE `users` SET `ticketCount` = ticketcount +1 WHERE `users`.`id` = $id;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $sql = "UPDATE `users` SET `coins` = coins -175 WHERE `users`.`id` = $id;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header('Location: ../hangar.php?msg=You bought a one way ticket!');
            exit();
        }

        else {
            header('Location: ../hangar.php?msg=You dont have enough coins!');
            exit();
        }

    }

    else if ( $_POST['formType'] == 'retour' ){
        if ($row['coins'] > 250) {

            $sql = "UPDATE `users` SET `ticketCount` = ticketcount +2 WHERE `users`.`id` = $id;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $sql = "UPDATE `users` SET `coins` = coins -250 WHERE `users`.`id` = $id;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header('Location: ../hangar.php?msg=You bought a retour ticket!');
            exit();
        }
        else {
            header('Location: ../hangar.php?msg=You dont have enough coins!');
            exit();
        }
    }

?>