<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_SESSION["user"];
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $category = htmlspecialchars($_POST["category"]);
    $content = htmlspecialchars($_POST["content"]);

    //FILE HANDLERS

    $_SESSION["errors"];
    
    if ($_FILES["blog_image"]["error"] !== UPLOAD_ERR_OK) {
        switch ($_FILES["blog_image"]["error"]) {
            case UPLOAD_ERR_PARTIAL:
                array_push($_SESSION["errors"], "File only partially uploaded.");
                break;
            case UPLOAD_ERR_NO_FILE:
                array_push($_SESSION["errors"], "No file was uploaded.");
                break;
            case UPLOAD_ERR_EXTENSION:
                array_push($_SESSION["errors"], "File upload stopped by php extension.");
                break;
            case UPLOAD_ERR_FORM_SIZE:
                array_push($_SESSION["errors"], "File exceeds max size.");
            case UPLOAD_ERR_NO_TMP_DIR:
                array_push($_SESSION["errors"], "Temporary folder not found.");
            case UPLOAD_ERR_CANT_WRITE:
                array_push($_SESSION["errors"], "Failed to write file.");
            default:
                array_push($_SESSION["errors"], "Unknown upload error.");
        }
    }
    
    if ($_FILES["blog_image"]["size"] > 1048576) {
        array_push($_SESSION["errors"], "File too large (max 1MB)");
    }
    
    if(isset($_SESSION["errors"])) {
        header("Location: ../create.php");
    }

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime_type = $finfo->file($_FILES["blog_image"]["tmp_name"]);
    $mime_types = ["image/png", "image/jpeg"];

    if (!in_array($_FILES["blog_image"]["type"], $mime_types)) {
        array_push($_SESSION["errors"], "Invalid file type.");
    }

    if(isset($_SESSION["errors"])) {
        header("Location: ../create.php");
    }

    //UPLOADS FILE IF NO ERRORS ARE FOUND
    $filename = $_FILES["blog_image"]["name"];
    $destination = "../images/thumbnails/" . $filename;
    if (!move_uploaded_file($_FILES["blog_image"]["tmp_name"], $destination)) {
        array_push($_SESSION["errors"], "Can't move file");
    }

    try {
        require_once "db.php";

        $query = "INSERT INTO blog_posts (title, description, category, username, content, file) VALUES (:title, :description, :category, :username, :content, :file);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":file", $filename);

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
    exit();
}