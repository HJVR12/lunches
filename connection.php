<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "lunches";

    try{
        $conn = new PDO("mysql:host = $servername; dbname = $dbname", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo("connected ok");
    }
    catch (PDOExemption $e)
    {
        echo("connection failed " .$e->getMessage(), "<br>");
    }
?>