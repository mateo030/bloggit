<?php
require 'includes/db.php';
require 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $keyword = $_POST['keyword'];
    $stmt = $pdo->query('SELECT * FROM blog_posts WHERE title LIKE "%' . $keyword .'%"');
    $stmt->execute();
    $post = $stmt->fetchAll();
}

?>
<body>
<section class="main-section">
    <div class="top">
        <?php echo '<h1>' . 'Here are some results for "' . $keyword . "'" . '</h1>'?>
    </div>
    <?php
    if($post) {
        foreach ($post as $row) {
            echo '<div class="blog-box">';
            echo '<img src="images/' . $row['file'] . '">';
            echo '<div class="blog-box-text">';
            echo '<h2><a href="view.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h2>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<p>' . 'By ' . $row['username'] . '</p>';
            echo '</div>';
            echo '</div>';
        }   
    } else {
        echo 'The title you are searching for is not found';
    }
        
    ?>
</section>
<!-- JQUERY-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom Script-->
<script src="js/scripts.js"></script>
</body>
</html>