<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Bloggit!</title>
    <link rel="icon" href="images/icon/bloggit.png" type="image/icon type">
    <!-- Custom Icons-->
    <script src="https://kit.fontawesome.com/492cd470a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<header>
    <div class="logo">
        <h1 class="logo-text"><span>Blogg</span>it</h1>
    </div>
</header>
<body>
    <section class="hero" style="margin-top: 10em">
    <h1>Create an account</h1>
    <div class="acc-forms">
        <form action="includes/user-register.php" method="post">
            <input type="text" name="name" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button>Register</button>
            <p>Already have an account?<a href="index.php"> log in</a></p>
        </form>
    </div>
    </section>
    
</body>
</html>