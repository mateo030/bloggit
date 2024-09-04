<?php 
require 'includes/header.php';
?>
<section class="main-section">
    <h1>Latest Posts</h1>
    <div class="blog-container">
        <?php
        require 'includes/db.php';
        $rows = $pdo->query('SELECT * FROM blog_posts ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);
        $totalRows = count($rows);

        for ($i = 0; $i < $totalRows; $i++) {
            $row = $rows[$i];
            echo '<div class="blog-box">';
            echo '<img src="images/' . $row['file'] . '" height="300" width="435">';
            echo '<p class="category">' . $row['category'] . '</p>';
            echo '<h2><a href="view.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h2>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<p>' . 'By ' . $row['username'] . '</p>';
            echo '</div>';
        }

        ?>
    </div>
</section>
<?php require 'includes/footer.php' ?>
<!-- JQUERY-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Custom Script-->
<script src="js/scripts.js"></script>
</body>

</html>