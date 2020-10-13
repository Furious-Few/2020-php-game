<?php
        session_start();
        require_once 'backend/connection.php';
        $id = $_SESSION['id'];
        // var_dump($id);
        $sql = "SELECT * FROM chat";
        $query = $conn->query($sql);
        $chats = $query->fetchAll(PDO::FETCH_ASSOC);
        $username = $_SESSION['id'];

        
        

        foreach ($chats as $chat) {
            


            echo "[${chat['time']}] <b>${chat['user']} : </b> ${chat['message']}<br><br>";

        }
?>