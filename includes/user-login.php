<?php

require_once 'db.php';

$sql = $pdo->prepare('select * from users where username=? and password=?');
$sql->execute([$_REQUEST['name'], $_REQUEST['password']]);

$user = $sql->fetch();

if ($user) {
    session_start();
    $_SESSION['user'] = $_REQUEST['name'];
    header("Location: ../home.php");
    exit();
} else {
    echo 'An error has occured';
}
