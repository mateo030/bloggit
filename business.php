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
</body>

</html>