<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $username = $_SESSION["user"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $content = $_POST["content"];
    $uploadDir = '../images/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);
    $file = $_FILES['file']['name'];

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "The file has been uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    try {
        require_once "db.php";

        $query = "INSERT INTO blog_posts (title, description, category, username, content, file) VALUES (:title, :description, :category, :username, :content, :file);";

        $stmt = $pdo->prepare($query);
        if(move_uploaded_file($temp_name, $folder)){
            echo 'File uploaded successfuly';
        } else {
            echo 'There was an error';
        }

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":file", $file);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../home.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else{
    header("Location: ../home.php");
}