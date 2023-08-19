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
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/main.css">
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/homepage.css">
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/bikin-berita.css">
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/berita.css">
</head>

<body>
    <!-- Nav -->
    <header>
        <div class="logo">
            <img src="<?=BASE_URL; ?>/img/logo.png">
        </div>
        <i class='bx bx-menu' id="menu"></i>
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
            <img src="<?=BASE_URL; ?>/img/profile.png" class="profile">
            <a href="
                <?php
                if (isset($_COOKIE['data']) && !empty($_COOKIE['data'])) {
                    echo BASE_URL; ?>/profile/<?php echo base64_decode($_COOKIE['data']) . '/';
                }else{
                    echo BASE_URL; ?>/login/<?php
                }
                ?>
            ">Profile</a>
        </div>
    </header>
    <!-- END Nav -->