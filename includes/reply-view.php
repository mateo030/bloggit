<?php

function fetchUserReplies($blog_id) {
    require 'db.php';
    $stmt = $pdo->prepare('SELECT * FROM blog_comments INNER JOIN users ON blog_comments.user_id=users.user_id WHERE blog_comments.blog_id = :blog_id');
    $stmt->bindParam(':blog_id', $blog_id);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $row) {

        if ($row['user_picture'] == null) {
            echo '<div class="reply-card">';
            echo    '<div class="reply-card-header">';
            echo        '<div class="reply-userprofile">';
            echo            '<img src="images/icon/defaultuser.png">';
            echo            '<p>' . $row['username'] . '</p>';
            echo        '</div>';
            echo    '</div>';
            echo    '<div class="reply-card-content">';
            echo        '<p>' . $row['content'] . '</p>';
            echo    '</div>';
            echo '</div>';
        } else {
            echo '<div class="reply-card">';
            echo    '<div class="reply-card-header">';
            echo        '<div class="reply-userprofile">';
            echo            '<img src="images/userpics/' . $row['user_picture'] . '">';
            echo            '<p>' . $row['username'] . '</p>';
            echo        '</div>';
            echo    '</div>';
            echo    '<div class="reply-card-content">';
            echo        '<p>' . $row['content'] . '</p>';
            echo    '</div>';
            echo '</div>';
        }
    }
}



