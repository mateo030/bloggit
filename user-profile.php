<?php 
require 'includes/db.php';
require 'includes/header.php';
?>
<section class="user-block">
    <div class="user-card">
        <div class="user-icon">
            <?php
            if ($_SESSION['user_picture'] == null) {
                echo '<img src="images/icon/defaultuser.png">';
            } else {
                echo '<img src="images/icon/' . $_SESSION['user_picture'] . '">';
            }
            ?>
        <form action="includes/update-userpic.php" method="POST">
            <input type="file" name="user_picture">
            <button>Change Profile</button>
        </form>
        </div>
        <div class="user-info">
            <h1>Username</h1>
            <p><?php echo $_SESSION['user'] ?></p>
            <h1>Password</h1>
            <p><?php echo $_SESSION['user_pass'] ?></p>
            <h1>Joined at:</h1>
            <p><?php echo $_SESSION['user_creation'] ?></p>
        </div>
    </div>
</section>