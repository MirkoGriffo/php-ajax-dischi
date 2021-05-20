<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Album</title>
</head>
<body>
<?php
include 'database.php';?>
<header>
    <div class="container">
<img src="../logo.png" alt="logo">
</div>
</header>
<main>
<div class="container">
<div class="container-card">
<?php
foreach ($database as $album) {?>
<div class="card">
    <img src="<?php echo $album['poster'] ?>" alt="">
    <h3><?php echo $album['title'] ?></h3>
    <p><?php echo $album['author'] ?></p>
    <h3><?php echo $album['year'] ?></h3>
    <p><?php echo $album['genre'] ?></p>
    </div>
    <?php }?>
    </div>
</div>
</body>
</html>