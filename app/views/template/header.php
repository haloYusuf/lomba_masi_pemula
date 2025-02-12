<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara | Homepage</title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="<?=BASE_URL; ?>/img/favicon.ico" />
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/homepage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/bikin-berita.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/berita.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Nav -->
    <header>
        <div class="logo">
            <a href="<?=BASE_URL; ?>/home/">
                <img src="<?=BASE_URL; ?>/img/logo.png">
            </a>
        </div>
        <div class="nav">
            <a href="<?=BASE_URL; ?>/home/">Home</a>
            <!--📝 Bikin file content.html -->
            <a href="
            <?php
                if (isset($_COOKIE['data']) && !empty($_COOKIE['data'])) {
                    echo BASE_URL; ?>/content/<?php
                }else{
                    echo BASE_URL; ?>/login/<?php
                }
                ?>
            ">Content</a>
            <!-- 📝 Nanti profile diganti sesuai user -->
            <a href="
                <?php
                if (isset($_COOKIE['data']) && !empty($_COOKIE['data'])) {
                    echo BASE_URL; ?>/user/<?php echo base64_decode($_COOKIE['data']) . '/';
                }else{
                    echo BASE_URL; ?>/login/<?php
                }
                ?>
            ">
                <img src="<?=BASE_URL; ?>/img/profile.png" class="profile">
            </a>
        </div>
    </header>
    <!-- END Nav -->
