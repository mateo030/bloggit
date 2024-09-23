<?php

require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user_reply = $_POST['user_comment'];
    $user_id = $_POST['user_id'];
    $blog_id = $_POST['blog_id'];

    try {

        $stmt = $pdo->prepare('INSERT INTO blog_comments (user_id, blog_id, content) VALUES (:user_id, :blog_id, :content)');

        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':blog_id', $blog_id);
        $stmt->bindParam(':content', $user_reply);

        $stmt->execute();
        header('Location: ../view.php?id=' . $blog_id);
        die();

    } catch(ErrorException) {

    }
}