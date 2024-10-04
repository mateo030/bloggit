<?php
include 'includes/header.php';
include 'includes/db.php';
include 'includes/reply-view.php';
$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM blog_posts WHERE id = ?');
$stmt->execute([$id]);
$post = $stmt->fetch();
?>
<section class="main-section">
    <div class="post-view">
        <div class="wall-block container">
            <div class="wall-block-title">
                <h1><?php echo $post['title'] ?></h1>
            </div>
            <div class="wall-block-header">
                <div class="original-poster-img">
                    <img src="images/userpics/<?php displayPosterProfile($id)?>">              
                </div>
                <div class="original-poster-info">
                    <p><?php echo $post['username'] ?></p>
                </div>
            </div>
            <div class="wall-content">
                <div class="wall-creation">
                    <i class="fa-regular fa-calendar"></i>
                    <p><?php echo $post['created_at'] ?></p>
                </div>
                <div class="wall-img">
                    <img src="images/<?php echo $post['file']?>">
                </div>
                <div class="wall-text">
                    <p><?php echo $post['content'] ?></p>
                </div>
            </div>
        </div>
        <?php fetchUserReplies($id)?>
        <div class="add-comment">
            <form action="includes/reply.php" method="POST">
                <input type="hidden" name="blog_id" value=<?php echo '"' . $id . '"';?>>
                <input type="hidden" name="user_id" value=<?php echo '"' . $_SESSION['user_id'] . '"';?>>
                <textarea name="user_comment" id="user_comment"></textarea>
                <div class="add-comment-button">
                    <button>Reply</button>
                </div>
            </form>
        </div>
    </div>    
</section>
<!-- JQUERY-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom Script-->
<script src="js/scripts.js"></script>
</body>
</html>