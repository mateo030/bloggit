<?php
session_start();
require 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggit.com</title>
    <link rel="icon" href="images/icon/bloggit.png" type="image/icon type">
    <!-- Custom Icons-->
    <script src="https://kit.fontawesome.com/492cd470a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<header>
    <div class="logo">
        <h1 class="logo-text"><span>Blogg</span>it</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <li><a href="home.php">Home</a></li>
        <li>
            <a href="#">
                <i class="fa fa-user" style="color: rgb(236, 148, 32);"></i>
                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                <?php
                if (isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                } else {
                    header('Location: index.php');
                }
                ?>
            </a>
            <ul>
                <li><a href="user-profile.php">Profile</a></li>
                <li><a href="create.php">Create a blog</a></li>
                <li><a href="includes/logout.php" class="logout">Logout</a></li>
            </ul>
        </li>
    </ul>
</header>