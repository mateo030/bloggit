<?php include 'includes/header.php'; ?>
<section class="card-view">
    <?php
    include 'includes/db.php';

    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM blog_posts WHERE id = ?');
    $stmt->execute([$id]);
    $post = $stmt->fetch();

    if ($post) {
        echo '<h1>' . $post['title'] . '</h1>';
        echo '<img src="images/' . $post['file'] . '" height="500" width="635">';
        echo '<p>' . $post['content'] . '</p>';
        echo '<p><small>Category: ' . $post['category'] . ' | By: ' . $post['username'] . ' | ' . $post['created_at'] . '</small></p>';

    } else {
        echo '<p>Post not found.</p>';
    }

    ?>
</section>
<!-- JQUERY-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom Script-->
<script src="js/scripts.js"></script>
</body>
</html>