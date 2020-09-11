<?php 

session_start();
require 'connection.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);


$allIron = $row['iron'];
$convertedIron = $allIron * 10;

$allGold = $row['gold'];
$convertedGold = $allGold * 50;

$allDiamond = $row['diamond'];
$convertedDiamond = $allDiamond * 200;

if ($_POST['formType'] == 'iron') {
    if ($row['iron'] == 0) {
        header('Location: ../dashboard.php?msg=You dont have enough iron!');
        exit();
    }
    else {
        $sql = "UPDATE `users` SET `iron` = `iron` - $allIron WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sql = "UPDATE `users` SET `coins` = `coins` + $convertedIron WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: ../dashboard.php?msg=You sold '. $allIron .' iron! <br>  and got ' .$convertedIron .' coins.' ) ; 
        exit();
    }
}

if ($_POST['formType'] == 'gold') {
    if ($row['gold'] == 0) {
        header('Location: ../dashboard.php?msg=You dont have enough gold!');
        exit();
    }
    else {
        $sql = "UPDATE `users` SET `gold` = `gold` - $allGold WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sql = "UPDATE `users` SET `coins` = `coins` + $convertedGold WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: ../dashboard.php?msg=You sold '. $allGold .' gold! <br>  and got ' .$convertedGold .' coins.' ) ; 
        exit();
    }
}

if ($_POST['formType'] == 'diamond') {
    if ($row['diamond'] == 0) {
        header('Location: ../dashboard.php?msg=You dont have enough diamond!');
        exit();
    }
    else {
        $sql = "UPDATE `users` SET `diamond` = `diamond` - $allDiamond WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sql = "UPDATE `users` SET `coins` = `coins` + $convertedDiamond WHERE `users`.`id` = $id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('Location: ../dashboard.php?msg=You sold '. $allDiamond .' diamond! <br>  and got ' .$convertedDiamond .' coins.' ) ; 
        exit();
    }
}
?>