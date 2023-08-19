<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Nusantara | Web Kita</title>
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css"
    />
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/dashboard.css" />
  </head>

  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="<?=BASE_URL; ?>/home" class="logo">
              <img src="<?=BASE_URL; ?>/img/logo.png" alt="" />
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fi fi-rr-user"></i>
              <span class="nav-item">Selamat datang, <?=base64_decode($_COOKIE['data']); ?> </span>
            </a>
          </li>
          <hr />
          <li>
            <a href="<?=BASE_URL . "/profile/" . base64_decode($_COOKIE['data'])?>">
              <i class="fi fi-ss-paper-plane"></i>
              <span class="nav-item">My News</span>
            </a>
          </li>
          <?php 
            if($data['user_access'] == 1){
              echo "
              <li>
                <a href=\"" . BASE_URL . "/profile/request/" . base64_decode($_COOKIE['data']) ."\">
                  <i class=\"fi fi-ss-paper-plane\"></i>
                  <span class=\"nav-item\">Request Publish</span>
                </a>
              </li>
            ";
            }
          ?>
          <li>
            <a href="<?=BASE_URL?>/content/">
              <i class="fi fi-rr-plus"></i>
              <span class="nav-item">Add News</span>
            </a>
          </li>
            <a href="<?=BASE_URL?>/profile/logout/" class="logout">
              <i class="fi fi-rs-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>
