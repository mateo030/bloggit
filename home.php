<?php require 'includes/db.php'?>
<?php require 'includes/header.php' ?>
<body>
    <aside>
        <h3>Browse by category</h3>
        <ul>
            <li>
                <a href="#tips"><p>Tips</p></a>
            </li>
            <li>
                <a href="#funny"><p>Funny</p></a>
            </li>
            <li>
                <a href="#philippines"><p>Philippines</p></a>
            </li>
            <li>
                <a href="#business"><p>Business</p></a>
            </li>
            <li>
                <a href="#celebrity"><p>Celebrity</p></a>
            </li>
            <li>
                <a href="#politics"><p>Politics</p></a>
            </li>
            <li>
                <a href="#gaming"><p>Gaming</p></a>
            </li>
            <li>
                <a href="#other"><p>Other</p></a>
            </li>
        </ul>
    </aside>
    <section class="main-section">
        <form action="search.php" method="POST">
            <i class="fa-solid fa-magnifying-glass" style="color: gray;"></i> <label style="font-weight:bold;">Or search by title</label>
            <input type="text" name="keyword">
            <button>Search</button>
        </form>
        <h1>Latest Posts</h1>
        <div class="blog-container">
            <?php
            displayCards();
            ?>
        </div>
        <h3><a href="latest.php">Read More</a></h3>
    </section>
    <section class="filtered-section">
        <h1 id="tips">Tips</h1>
        <div class="blog-container">
            <?php
            $key = 'Tips';
            displayFilteredCards($key);
            ?>
        </div>
        <h3><a href="tips.php">Read More</a></h3>
    </section>
    <section class="filtered-section">
        <h1 id="funny">Funny</h1>
        <div class="blog-container">
            <?php
            $key = 'Funny';
            displayFilteredCards($key);
            ?>
        </div>
        <h3><a href="funny.php">Read More</a></h3>
    </section>
    <section class="filtered-section">
        <h1 id="philippines">Philippines</h1>
        <div class="blog-container">
            <?php
            $key = 'Philippines';
            displayFilteredCards($key);
            ?>
        </div>
        <h3><a href="philippines.php">Read More</a></h3>
    </section>
    <section class="filtered-section">
        <h1 id="business">Business</h1>
        <div class="blog-container">
            <?php
            $key = 'Business';
            displayFilteredCards($key);
            ?>
        </div>
        <h3><a href="business.php">Read More</a></h3>
    </section>
    <section class="filtered-section">
        <h1 id="celebrity">Celebrity</h1>
        <div class="blog-container">
            <?php
            $key = 'Celebrity';
            displayFilteredCards($key);
            ?>
        </div>
        <h3><a href="celebrity.php">Read More</a></h3>
    </section>
    <section class="filtered-section">
        <h1 id="politics">Politics</h1>
        <div class="blog-container">
            <?php
            $key = 'Politics';
            displayFilteredCards($key);
            ?>
        </div>
        <h3><a href="politics.php">Read More</a></h3>
    </section>
    <section class="filtered-section">
        <h1 class="gaming">Gaming</h1>
        <div class="blog-container">
            <?php
            $key = 'Gaming';
            displayFilteredCards($key);
            ?>
        </div>
        <h3><a href="gaming.php">Read More</a></h3>
    </section>
    <section class="filtered-section">
        <h1 class="other">Other</h1>
        <div class="blog-container">
            <?php
            $key = 'Other';
            displayFilteredCards($key);
            ?>
        </div>
        <h3><a href="other.php">Read More</a></h3>
    </section>
    <?php require 'includes/footer.php' ?>
    </div>
    <!-- JQUERY-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom Script-->
    <script src="js/scripts.js"></script>
</body>
</html>