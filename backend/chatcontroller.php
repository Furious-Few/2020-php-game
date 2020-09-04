<?php
session_start();
    require 'connection.php';

    $User = $_SESSION['id'];
    $sql2 = "SELECT * FROM users WHERE id = $User";
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $n = $row['username'];


    $Message = $_POST['Message'];
    // $username = $_SESSION['username'];
    $time = date("h:i:sa");



$sql = "INSERT INTO chat (user, message, time) 
VALUES ('$n', '$Message', '$time')";

$prepare = $conn->prepare($sql);
$prepare->execute();

header('Location: ../dashboard.php?msg=message sent!');
exit();

?>