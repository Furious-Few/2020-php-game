<?php
  session_start();
  require '../backend/connection.php';

    // alle gegevens ophalen
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "UPDATE users SET spaceship1quest = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  $startQuest = $_GET['busy'];
    //=================================code voor quests spaceship 1==================================
     if ($startQuest == 1.1 || $startQuest == 1.2 || $startQuest == 1.3 || $startQuest == 1.4 || $startQuest == 1.5) {
       # code...
    
       $sql = "UPDATE users SET spaceship1quest = true WHERE id = $id";
       $stmt = $conn->prepare($sql);
       $stmt->execute();
 
       $date = date("Y/m/d");
       $user = $row['id'];
       $dateHour = date("h");
       $dateMinute = date("i");
       $dateSeconds = date("s");
       // code for timer
       var_dump($date);
       $sql2 = "INSERT INTO `timer` (`id`, `user`, `quest`, `date`, `h`, `m`, `s`, `spaceship`) VALUES
       (NULL, $user, $startQuest, '$date', $dateHour, $dateMinute, $dateSeconds, $startQuest)";
 
       $stmt = $conn->prepare($sql2);
       $stmt->execute();
 
       header('Location: ../hangar.php?msg=Quest started HUTS!');  
           exit();
           }

     //=================================code voor quests spaceship 2==================================
       if ($startQuest == 2.1 || $startQuest == 2.2 || $startQuest == 2.3 || $startQuest == 2.4 || $startQuest == 2.5) {
         # code...
       
      $sql = "UPDATE users SET spaceship2quest = true WHERE id = $id";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      $date = date("Y/m/d");
      $user = $row['id'];
      $dateHour = date("h");
      $dateMinute = date("i");
      $dateSeconds = date("s");
      // code for timer
      var_dump($date);
      $sql2 = "INSERT INTO `timer` (`id`, `user`, `quest`, `date`, `h`, `m`, `s`, `spaceship`) VALUES
               (NULL, $user, $startQuest, '$date', $dateHour, $dateMinute, $dateSeconds, $startQuest)";

      $stmt = $conn->prepare($sql2);
      $stmt->execute();

      header('Location: ../hangar.php?msg=Quest started HUTS!');  
          exit();
          }
            
 //=================================code voor quests spaceship 3==================================
           if ($startQuest == 3.1 || $startQuest == 3.2 || $startQuest == 3.3 || $startQuest == 3.4 || $startQuest == 3.5) {
         # code...
       
         $sql = "UPDATE users SET spaceship3quest = true WHERE id = $id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
   
         $date = date("Y/m/d");
         $user = $row['id'];
         $dateHour = date("h");
         $dateMinute = date("i");
         $dateSeconds = date("s");
         // code for timer
         var_dump($date);
         $sql2 = "INSERT INTO `timer` (`id`, `user`, `quest`, `date`, `h`, `m`, `s`, `spaceship`) VALUES
         (NULL, $user, $startQuest, '$date', $dateHour, $dateMinute, $dateSeconds, $startQuest)";
   
         $stmt = $conn->prepare($sql2);
         $stmt->execute();
   
         header('Location: ../hangar.php?msg=Quest started!');  
             exit();
             }
?>