<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom Icons-->
    <script src="https://kit.fontawesome.com/492cd470a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<?php include 'includes/header.php'?>
<body>
    <form action="includes/formhandler.php" method="POST" class="post-form" enctype="multipart/form-data">
        <h1>Bloggit!</h1>
        <label>Title</label>
        <input type="text" name="title" required>
        <label>Description</label>
        <textarea name="description" class="desc"></textarea>
        <label>Category</label>
        <select name="category">
            <option value="Tips">Tips</option>
            <option value="Funny">Funny</option>
            <option value="Philippines">Philippines</option>
            <option value="Business">Business</option>
            <option value="Celebrity">Celebrity</option>
            <option value="Politics">Politics</option>
            <option value="Gaming">Gaming</option>
            <option value="Other">Other</option>
        </select>
        <label>Thumbnail</label>
        <input type="file" name="file" accept="image/jpeg, image/png, image/jpg" required>
        <textarea name="content" class="maincontent"></textarea>
        <div>
            <button style="color: white; background-color: #343a40; margin-top: 10px">Post</button>
        </div>
    </form>
<!-- JQUERY-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom Script-->
<script src="js/scripts.js"></script>
</body>
</html>
