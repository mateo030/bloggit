<?php

function displayCards()
{
    require 'db.php';
    $rows = $pdo->query('SELECT * FROM blog_posts ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);

    for ($i = 0; $i < 6; $i++) {
        $row = $rows[$i];
        echo '<div class="blog-box">';
        echo '<img src="images/' . $row['file'] . '" height="300" width="435">';
        echo '<p class="category">' . $row['category'] . '</p>';
        echo '<h2><a href="view.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h2>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<p>' . 'By ' . $row['username'] . '</p>';
        echo '</div>';
    }
}

function displayFilteredCards($key)
{
    require 'db.php';
    $rows = $pdo->query('SELECT * FROM blog_posts WHERE category LIKE "' . $key . '" ORDER BY created_at DESC ')->fetchAll(PDO::FETCH_ASSOC);

    for ($i = 0; $i < 3; $i++) {
        $row = $rows[$i];
        echo '<div class="blog-box">';
        echo '<img src="images/' . $row['file'] . '" height="300" width="435">';
        echo '<p class="category">' . $row['category'] . '</p>';
        echo '<h2><a href="view.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h2>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<p>' . 'By ' . $row['username'] . '</p>';
        echo '</div>';
    }
}

function displayCardView($key)
{
    require 'includes/db.php';
    echo '<h1>' . $key . '</h1>';
    echo '<div class="blog-container">';
    $rows = $pdo->query('SELECT * FROM blog_posts WHERE category LIKE "' . $key .'" ORDER BY created_at DESC')->fetchAll(PDO::FETCH_ASSOC);
    $totalRows = count($rows);

    for ($i = 0; $i < $totalRows; $i++) {
        $row = $rows[$i];
        echo '<div class="blog-box">';
        echo '<img src="images/' . $row['file'] . '" height="300" width="435">';
        echo '<p class="category">' . $row['category'] . '</p>';
        echo '<h2><a href="view.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h2>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<p>' . 'By ' . $row['username'] . '</p>';
        echo '</div>';
    }

    echo '</div>';
}

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function displayTitle($server) {
    $uri = $server;
    if ($uri === '/bloggit/') {
        echo '<title>Welcome to Bloggit</title>';
    } else if ($uri === '/bloggit/home.php'){
        echo '<title>Home | Bloggit</title>';
    } else if ($uri === '/bloggit/latest.php') {
        echo '<title>Latest | Bloggit</title>';
    } else if ($uri === '/bloggit/create.php') {
        echo '<title>Create | Bloggit</title>';
    } else if ($uri === '/bloggit/tips.php') {
        echo '<title>Tips | Bloggit</title>';
    } else if ($uri === '/bloggit/funny.php') {
        echo '<title>Funny | Bloggit</title>';
    } else if ($uri === '/bloggit/Philippines.php') {
        echo '<title>Philippines | Bloggit</title>';
    } else if ($uri === '/bloggit/Business.php') {
        echo '<title>Business | Bloggit</title>';
    } else if ($uri === '/bloggit/Celebrity.php') {
        echo '<title>Celebrity | Bloggit</title>';
    } else if ($uri === '/bloggit/Politics.php') {
        echo '<title>Politics | Bloggit</title>';
    } else if ($uri === '/bloggit/Gaming.php') {
        echo '<title>Gaming | Bloggit</title>';
    } else if ($uri === '/bloggit/Other.php') {
        echo '<title>Other | Bloggit</title>';
    } else {
        include_once 'includes/db.php';

        $id = $_GET['id'];
        $stmt = $pdo->prepare('SELECT * FROM blog_posts WHERE id = ?');
        $stmt->execute([$id]);
        $post = $stmt->fetch();
        echo '<title>' . $post['title'] . ' | ' . 'Bloggit' . '</title>';
    }
}


