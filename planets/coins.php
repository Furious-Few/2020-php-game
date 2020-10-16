<?php
        session_start();
        require_once '../backend/connection.php';
        $id = $_SESSION['id'];
        // var_dump($id);
        $sql = "SELECT * FROM users WHERE id = $id";
        $query = $conn->query($sql);
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        
        $sql = "UPDATE users SET coins = coins + 1 WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
?>