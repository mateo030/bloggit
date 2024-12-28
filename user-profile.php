<?php 
require 'includes/db.php';
require 'includes/header.php';
?>
<body>
<?= $_SESSION['user_id']?>
    <div class="user-card">
        <div class="user-icon">
            <?php
            if ($_SESSION['user_picture'] == null) {
                echo '<img src="images/icon/defaultuser.png">';
            } else {
                echo '<img src="images/userpics/' . $_SESSION['user_picture'] . '">';
            }
            ?>
        <form action="includes/update-userpic.php" enctype="multipart/form-data" method="POST">
            <input type="file" name="user_picture"><br>
            <div class="user-card-container">
                <button>Change Profile</button>
                <?php 
                    if (isset($_SESSION["errors"]) && !empty($_SESSION["errors"])) {
                        ?>
                        <div class="errors">
                            <p><?= $_SESSION["errors"][0] ?></p>
                        </div>
                        <?php
                        unset($_SESSION["errors"]);
                    }
                ?>
            </div>
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
</body>