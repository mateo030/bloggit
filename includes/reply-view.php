<?php

function fetchUserReplies($blog_id) {
    require 'db.php';
    $stmt = $pdo->prepare('SELECT * FROM blog_comments INNER JOIN users ON blog_comments.user_id=users.user_id WHERE blog_comments.blog_id = :blog_id');
    $stmt->bindParam(':blog_id', $blog_id);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $row) {

        if ($row['user_picture'] == null) {
            ?> <div class="reply-card">
                    <div class="reply-card-header">
                        <div class="reply-userprofile">
                            <img src="images/icon/defaultuser.png">
                            <p><?= $row['username'] ?></p>
                        </div>
                    </div>
                    <div class="reply-card-content">
                        <p><?= $row['content'] ?></p>
                    </div>
                </div>
            <?php
        } else {
            ?>
                <div class="reply-card">
                    <div class="reply-card-header">
                        <div class="reply-userprofile">
                        <img src="images/userpics/' . $row['user_picture'] . '">
                        <p><?= $row['username'] ?></p>
                        </div>
                    </div>
                    <div class="reply-card-content">
                        <p> <?= $row['content'] ?></p>
                    </div>
                </div>
            <?php
        }
    }
}



