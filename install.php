<?php
        #create variables with server details on 
        $servername = "localhost";;
        $username = "root";
        $password = "password";
        
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        $sql="CREATE DATABASE IF NOT EXISTS Lunches";
        $conn -> exec($sql);
        echo("DB amde");
        $stmt1 = $conn->prepare("DROP TABLE IF EXISTS tblusers; 
        CREATE TABLE tblusers
        (UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Username VARCHART(20) NOT NULL,
        Surname VARCHART(20) NOT NULL,
        Forename VARCHART(20) NOT NULL,
        Passwords VARCHART(200) NOT NULL,
        Year INT(2)NOT NULL,
        Balance DECIMAL(15,2) NOT NULL,
        Role TINYINT(1)),;
        ");
        $stmt1->execute();
?>