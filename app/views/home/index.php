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
            
            <?php foreach($data as $val): ?>
                <div class="card-berita">
                    <!-- 📝 ganti sesuai gambar berita -->
                    <img src="<?=BASE_IMG_URL . base64_decode($val['news_img']) ?>">
                    <div class="text-berita">
                        <h2 class="judul"><?=base64_decode($val['news_title']) ?></h2>
                        <div class="keterangan">
                            <div class="waktu">
                                <i class='bx bx-time-five'></i>
                                <p><?=$val['news_created']?></p>
                            </div>
                            <div class="daerah">
                                <i class='bx bx-grid-alt'></i>
                                <p>Yogyakarta</p>
                            </div>
                        </div>
                        <p><?=base64_decode($val['news_content']) ?>
                        </p>
                    </div>
                    <a href="<?=BASE_URL ?>/home/detail/<?=base64_encode($val['news_id']) ?>" class="btn-berita">Lanjut Baca</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- End Berita -->