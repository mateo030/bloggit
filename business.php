<?php require 'includes/db.php' ?>
<?php require 'includes/header.php' ?>

<body>
    <?php require 'hero.php' ?>
    <div class="home-article">
        <aside>
            <?php require 'categories.php' ?>
        </aside>
        <div class="main">
            <div class="top">
                <i class="fa-solid fa-briefcase"></i>
                <h1>Business</h1>
            </div>
            <?php displayCardView('Business') ?>
        </div>
    </div>
    <?php require 'includes/footer.php' ?>
    <!-- JQUERY-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom Script-->
    <script src="js/scripts.js"></script>
</body>

</html>