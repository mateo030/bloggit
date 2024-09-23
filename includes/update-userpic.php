<?php

require 'db.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_pic = $_POST['user_picture'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare('UPDATE users SET user_picture=:user_pic WHERE user_id=:user_id');
    $stmt->bindParam(':user_pic', $user_pic);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    header('Location: ../user-profile.php');
    die();
}