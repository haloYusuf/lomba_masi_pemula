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
        <form action="<?=BASE_URL?>/home/" method="POST">
            <div class="cari">
                <input type="text" placeholder="cari berita..." name="cari" id="cari" .box-cari/>
                <button>
                    <i class='bx bx-search'></i>
                </button>
            </div>
        </form>
        <div class="content-berita">
            <!-- 📝 Di custom dengan database -->
            
            <?php foreach($data as $val): ?>
                <div class="card-berita">
                    <!-- 📝 ganti sesuai gambar berita -->
                    <img src="<?=BASE_IMG_URL . base64_decode($val['news_img']) ?>" class="image">
                    <div class="text-berita">
                        <h2 class="judul"><?=base64_decode($val['news_title']) ?></h2>
                        <div class="keterangan">
                            <div class="waktu">
                                <i class='bx bx-time-five'></i>
                                <p><?=$val['news_created']?></p>
                            </div>
                        </div>
                        <div class="content">
                        <?php
                            $i = Contents::getContents(base64_decode($val['news_content']), '<div>', '</div');
                            if(isset($i[0]) && !empty($i[0])){
                                echo '<div>' . $i[0] . '</div>';
                                if(isset($i[1])){
                                    echo '<div>' . $i[1] . '</div>';
                                    if(isset($i[2])){
                                        echo '<div>' . $i[2] . '</div>';
                                    }
                                }
                            }else{
                                echo base64_decode($val['news_content']);
                            }
                        ?>
                        </div>
                    </div>
                    <a href="<?=BASE_URL ?>/home/news/<?=base64_encode($val['news_id']) ?>" class="btn-berita">Lanjut Baca</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- End Berita -->