<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $password = $_POST["password"];

    if (empty($name) and empty($password)) {
        echo 'Input all fields!';
    }else if (empty($name)) {
        echo 'Input a name!';
    }else if (empty($password)) {
        echo 'Input a Password!';
    } else {
        try {
            require_once "db.php";
    
            $query = "INSERT INTO users (username, password) VALUES (:username, :password);";
    
            $stmt = $pdo->prepare($query);
    
            $stmt->bindParam(":username", $name);
            $stmt->bindParam(":password", $password);
    
            $stmt->execute();
    
            $pdo = null;
            $stmt = null;
    
            header("Location: ../index.php");
    
            die();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
}
