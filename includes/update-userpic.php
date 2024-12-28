<?php

require 'db.php';
session_start();

try {
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //FILE UPLOAD ERROR HANDLERS
        
        $_SESSION["errors"] = [];

        if ($_FILES["user_picture"]["error"] !== UPLOAD_ERR_OK) {
            switch ($_FILES["user_picture"]["error"]) {
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
        
        if ($_FILES["user_picture"]["size"] > 1048576) {
            array_push($_SESSION["errors"], "File too large (max 1MB)");
        }
        
        if(isset($_SESSION["errors"])) {
            header("Location: ../user-profile.php");
        }
    }

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime_type = $finfo->file($_FILES["user_picture"]["tmp_name"]);
    $mime_types = ["image/png", "image/jpeg"];

    if (!in_array($_FILES["user_picture"]["type"], $mime_types)) {
        array_push($_SESSION["errors"], "Invalid file type.");
    }

    if(isset($_SESSION["errors"])) {
        header("Location: ../user-profile.php");
    }

    //UPLOADS FILE IF NO ERRORS ARE FOUND
    $filename = $_FILES["user_picture"]["name"];
    $destination = "../images/userpics/" . $filename;
    if (!move_uploaded_file($_FILES["user_picture"]["tmp_name"], $destination)) {
        array_push($_SESSION["errors"], "Can't move file");
    }

    //SETS USER PROFILE THROUGH DATABASE
    $user_picture = $_FILES['user_picture']['name'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare('UPDATE users SET user_picture=:user_picture WHERE id=:id');
    $stmt->bindParam(':user_picture', $user_picture);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();

    $pdo = null;
    $stmt = null;

    header('Location: ../user-profile.php');
    die();
    
} catch(Exception $e) {
    echo $e->getMessage();
}
