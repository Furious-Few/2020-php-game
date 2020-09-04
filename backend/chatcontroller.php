<?php
session_start();
    require 'connection.php';

    $Message = $_POST['Message'];
    $username = $_SESSION['username'];
    $time = date("h:i:sa");


$sql = "INSERT INTO chat (user, message, time) 
VALUES ('$username', '$Message', '$time')";

$prepare = $conn->prepare($sql);
$prepare->execute();

header('Location: ../dashboard.php?msg=message sent!');
exit();

?>