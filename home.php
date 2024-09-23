<?php require 'includes/db.php'?>
<?php require 'includes/header.php' ?>
<body>
    <section class="hero">
        <h1>Bloggit</h1>
        <p>A simple bulletin board</p>
        <form action="search.php" method="POST">
            <input type="text" name="keyword" placeholder="Search the community...">
            <button>Search</button>
        </form>
    </section>
    <section class="category container">
        <a href="tips.php">
            <div class="category-block">
                <div class="category-icon">
                    <i class="fa-regular fa-lightbulb"></i>
                </div>
                <div>
                    <h1>Tips</h1>
                </div>       
            </div>
        </a>
        <a href="funny.php">
            <div class="category-block">
                <div class="category-icon">
                    <i class="fa-regular fa-face-grin-tears"></i>
                </div>
                <div>
                    <h1>Funny</h1>
                </div>
            </div>
        </a>
        <a href="philippines.php">
            <div class="category-block">
                <div class="category-icon">
                    <i class="fa-regular fa-sun"></i>
                </div>
                <div>
                    <h1>Philippines</h1>
                </div>
            </div>
        </a>
        <a href="business.php">
            <div class="category-block">
                <div class="category-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <div>
                    <h1>Business</h1>
                </div>
            </div>
        </a>
    </section>
    <section class="category container">
        <a href="celebrity.php">
            <div class="category-block">
                <div class="category-icon">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <h1>Celebrity</h1>
                </div>
            </div>
        </a>
        <a href="politics.php">
            <div class="category-block">
                <div class="category-icon">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div>
                    <h1>Politics</h1>
                </div>
            </div>
        </a>
        <a href="gaming.php">
            <div class="category-block">
                <div class="category-icon">
                    <i class="fa-solid fa-gamepad"></i>
                </div>
                <div>
                    <h1>Gaming</h1>
                </div>
            </div>
        </a>
        <a href="other.php">
            <div class="category-block">
                <div class="category-icon">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div>
                    <h1>Other</h1>
                </div>
            </div>
        </a>
    </section>
    </div>
    <!-- JQUERY-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom Script-->
    <script src="js/scripts.js"></script>
</body>
</html>