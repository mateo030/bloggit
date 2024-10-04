<?php
require 'includes/db.php';
require 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $keyword = $_POST['keyword'];
    $stmt = $pdo->query('SELECT * FROM blog_posts WHERE title LIKE "%' . $keyword . '%"');
    $stmt->execute();
    $post = $stmt->fetchAll();
}

?>
<?php require 'hero.php' ?>

<body>

    <div class="home-article">
        <aside>
            <?php require 'categories.php' ?>
        </aside>
        <div class="main">
            <div class="top">
                <h1>Here are some results for "<?php echo $keyword ?>"</h1>
            </div>
            <?php

            foreach ($post as $posts) {
                echo '<div class="blog-box">';
                echo '<img src="images/' . $posts['file'] . '">';
                echo '<div class="blog-box-text">';
                echo '<h1><a href="view.php?id=' . $posts['id'] . '">' . $posts['title'] . '</a></h1>';
                echo '<p>' . $posts['description'] . '</p>';
                echo '<div class="blog-box-bottom">';
                echo '<p class="blog-box-username">' . 'By ' . $posts['username'] . '</p>';
                echo '<i class="fa-regular fa-calendar"></i>';
                echo '<p class="blog-box-date">' . $posts['created_at'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            ?>
        </div>
    </div>


    <!-- JQUERY-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom Script-->
    <script src="js/scripts.js"></script>
</body>

</html>