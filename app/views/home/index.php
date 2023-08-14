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
</head>

<body>
    <!-- Nav -->
    <header>
        <div class="logo">
            <img src="<?=BASE_URL; ?>/img/logo.png">
        </div>
        <div class="nav">
            <a href="#home">Home</a>
            <!--📝 Bikin file content.html -->
            <a href="content.html">Content</a>
            <!-- 📝 Nanti profile diganti sesuai user -->
            <a href="
                <?php
                if (isset($_COOKIE['username']) && !empty($_COOKIE['username'])) {
                    echo BASE_URL; ?>/user/<?php
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

    <!-- Hero -->
    <section class="hero">
        <div class="hero-logo">
            <img src="<?=BASE_URL; ?>/img/hero-logo.png">
        </div>
        <p>Nusantara adalah website narasi kebudayaan, dimana kamu bisa belajar kebudayaan, mengetahui kebudayaan unik,
            serta memberikan pengalaman budaya mu di website ini</p>
    </section>
    <!-- END Hero -->

    <!-- Berita -->
    <section class="berita">
        <div class="cari">
            <input type="text" placeholder="cari berita..." .box-cari>
            <i class='bx bx-search'></i>
        </div>
        <div class="content-berita">
            <!-- 📝 Di custom dengan database -->
            <div class="card-berita">
                <!-- 📝 ganti sesuai gambar berita -->
                <img src="<?=BASE_URL; ?>/img/contoh-berita.png">
                <div class="text-berita">
                    <h2 class="judul">Judul</h2>
                    <div class="keterangan">
                        <div class="waktu">
                            <i class='bx bx-time-five'></i>
                            <p>31/12/2021</p>
                        </div>
                        <div class="daerah">
                            <i class='bx bx-grid-alt'></i>
                            <p>Yogyakarta</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, expedita.
                    </p>
                </div>
                <a href="#" class="btn-berita">Lanjut Baca</a>
            </div>
            <div class="card-berita">
                <!-- 📝 ganti sesuai gambar berita -->
                <img src="<?=BASE_URL; ?>/img/contoh-berita.png">
                <div class="text-berita">
                    <h2 class="judul">Judul</h2>
                    <div class="keterangan">
                        <div class="waktu">
                            <i class='bx bx-time-five'></i>
                            <p>31/12/2021</p>
                        </div>
                        <div class="daerah">
                            <i class='bx bx-grid-alt'></i>
                            <p>Yogyakarta</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, expedita.
                    </p>
                </div>
                <a href="#" class="btn-berita">Lanjut Baca</a>
            </div>
            <div class="card-berita">
                <!-- 📝 ganti sesuai gambar berita -->
                <img src="<?=BASE_URL; ?>/img/contoh-berita.png">
                <div class="text-berita">
                    <h2 class="judul">Judul</h2>
                    <div class="keterangan">
                        <div class="waktu">
                            <i class='bx bx-time-five'></i>
                            <p>31/12/2021</p>
                        </div>
                        <div class="daerah">
                            <i class='bx bx-grid-alt'></i>
                            <p>Yogyakarta</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, expedita.
                    </p>
                </div>
                <a href="#" class="btn-berita">Lanjut Baca</a>
            </div>
        </div>
    </section>
    <!-- End Berita -->

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="kiri">
                <h3 class="footer-heading">
                    Selamat Datang
                </h3>
                <p>Nusantara adalah sebuah platform online mengenai kebudayan Indonesia di web ini kamu bisa membaca
                    mengenai kebudayaan yang sudah di tulis oleh beberapa orang yang sudah terdaftar di website ini.
                    Selamat menikmati </p>
            </div>
            <div class="kanan">
                <h3 class="footer-heading">Page</h3>
                <div class="footer-link">
                    <a href="#">Tentang Kami</a>
                    <a href="#">Github</a>
                </div>
            </div>
        </div>
        <h3>Copyright by Nusantara - 2023</h3>
    </footer>
    <!-- END Footer -->

</body>

</html>
