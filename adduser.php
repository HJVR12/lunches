<?php
    print_r($_POST);
    include_once("connection.php");
    $surname = "bob";
    $role = 1;
    $stmt1 = $conn->prepare(" INSERT INTO tblusers
    (UserID, Username, Surname, Forename, Passwords, Year, Balance, Role)
    VALUES
    (NULL,:Username, :Surname, :Forename, :Passwords, :Year, :Balance, :Role)
    ");
    $stmt1->bindParam(":Username", $username);
    $stmt1->bindParam(":Surname", $_post["surname"]);
    $stmt1->bindParam(":Forname", $_post["forename"]);
    $stmt1->bindParam(":Passwords", $_post["passwords"]);
    $stmt1->bindParam(":Year", $_post["year"]);
    $stmt1->bindParam(":Balance", $_post["balance"]);
    $stmt1->bindParam(":role", $role);
    $stmt1->execute();
    
?>