<?php $uri = $_SERVER['REQUEST_URI']?>
<section class="category container">
        <a href="tips.php">
            <div class="category-block" style="<?php
            if ($uri == '/bloggit/tips.php') {
                echo 'border: 2px solid rgb(49,49,49)';
            }
            ?>">
                <div class="category-icon">
                    <i class="fa-regular fa-lightbulb"></i>
                </div>
                <div>
                    <h1>Tips</h1>
                </div>
                <div class="post-count"> 
                    <i class="fa-solid fa-comment-dots"></i>
                    <p><?php echo returnPostCount('tips'); ?></p>
                </div>
            </div>
        </a>
        <a href="funny.php">
        <div class="category-block" style="<?php
            if ($uri == '/bloggit/funny.php') {
                echo 'border: 2px solid rgb(49,49,49)';
            }
            ?>">
                <div class="category-icon">
                    <i class="fa-regular fa-face-grin-tears"></i>
                </div>
                <div>
                    <h1>Funny</h1>
                </div>
                <div class="post-count"> 
                    <i class="fa-solid fa-comment-dots"></i>
                    <p><?php echo returnPostCount('funny'); ?></p>
                </div>
            </div>
        </a>
        <a href="philippines.php">
        <div class="category-block" style="<?php
            if ($uri == '/bloggit/philippines.php') {
                echo 'border: 2px solid rgb(49,49,49)';
            }
            ?>">
                <div class="category-icon">
                    <i class="fa-regular fa-sun"></i>
                </div>
                <div>
                    <h1>Philippines</h1>
                </div>
                <div class="post-count"> 
                    <i class="fa-solid fa-comment-dots"></i>
                    <p><?php echo returnPostCount('philippines'); ?></p>
                </div>
            </div>
        </a>
        <a href="business.php">
        <div class="category-block" style="<?php
            if ($uri == '/bloggit/business.php') {
                echo 'border: 2px solid rgb(49,49,49)';
            }
            ?>">
                <div class="category-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <div>
                    <h1>Business</h1>
                </div>
                <div class="post-count"> 
                    <i class="fa-solid fa-comment-dots"></i>
                    <p><?php echo returnPostCount('business'); ?></p>
                </div>
            </div>
        </a>
    </section>
    <section class="category container">
        <a href="celebrity.php">
        <div class="category-block" style="<?php
            if ($uri == '/bloggit/celebrity.php') {
                echo 'border: 2px solid rgb(49,49,49)';
            }
            ?>">
                <div class="category-icon">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <h1>Celebrity</h1>
                </div>
                <div class="post-count"> 
                    <i class="fa-solid fa-comment-dots"></i>
                    <p><?php echo returnPostCount(key: 'celebrity'); ?></p>
                </div>
            </div>
        </a>
        <a href="politics.php">
        <div class="category-block" style="<?php
            if ($uri == '/bloggit/politics.php') {
                echo 'border: 2px solid rgb(49,49,49)';
            }
            ?>">
                <div class="category-icon">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div>
                    <h1>Politics</h1>
                </div>
                <div class="post-count"> 
                    <i class="fa-solid fa-comment-dots"></i>
                    <p><?php echo returnPostCount('politics'); ?></p>
                </div>
            </div>
        </a>
        <a href="gaming.php">
        <div class="category-block" style="<?php
            if ($uri == '/bloggit/gaming.php') {
                echo 'border: 2px solid rgb(49,49,49)';
            }
            ?>">
                <div class="category-icon">
                    <i class="fa-solid fa-gamepad"></i>
                </div>
                <div>
                    <h1>Gaming</h1>
                </div>
                <div class="post-count"> 
                    <i class="fa-solid fa-comment-dots"></i>
                    <p><?php echo returnPostCount('gaming'); ?></p>
                </div>
            </div>
        </a>
        <a href="other.php">
        <div class="category-block" style="<?php
            if ($uri == '/bloggit/other.php') {
                echo 'border: 2px solid rgb(49,49,49)';
            }
            ?>">
                <div class="category-icon">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div>
                    <h1>Other</h1>
                </div>
                <div class="post-count"> 
                    <i class="fa-solid fa-comment-dots"></i>
                    <p><?php echo returnPostCount('other'); ?></p>
                </div>
            </div>
        </a>
    </section>