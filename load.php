<?php
        session_start();
        require_once 'backend/connection.php';
        $id = $_SESSION['id'];
        // var_dump($id);
        $sql = "SELECT * FROM chat";
        $query = $conn->query($sql);
        $chats = $query->fetchAll(PDO::FETCH_ASSOC);
        $username = $_SESSION['username'];


        foreach ($chats as $chat) {
            echo "[${chat['time']}] <b>$username : </b> ${chat['message']}<br><br>";

        }
?>