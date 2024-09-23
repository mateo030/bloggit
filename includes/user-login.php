<?php

require_once 'db.php';

$sql = $pdo->prepare('SELECT * FROM users WHERE username=? AND password=?');
$sql->execute([$_REQUEST['name'], $_REQUEST['password']]);

$user = $sql->fetchAll();

if ($user) {
    session_start();
    foreach ($user as $user_data) {
        $_SESSION['user'] = $user_data['username'];
        $_SESSION['user_id'] = $user_data['user_id'];
        $_SESSION['user_pass'] = $user_data['password'];
        $_SESSION['user_creation'] = $user_data['created_at'];
        $_SESSION['user_picture'] = $user_data['user_picture'];
    }
    header("Location: ../home.php");
    exit();
} else {
    echo 'An error has occured';
}
