    <!-- Berita -->
    <section class="berita">
        <div class="top">
            <!--📝 Username penulis -->
            <h3><?=$data['user']['user_name']; ?></h3>
            <!--📝 Judul artikel -->
            <h1><?=base64_decode($data['news_title']); ?></h1>
            <!--📝 waktu saat dibuat -->
            <p><?=$data['news_created']; ?></p>
            <!--📝 gambar artikel | kalo gak ada gambarnya?-->
            <div class="garis"></div>
        </div>
        <div class="berita-img">
            <img src="<?=BASE_IMG_URL . base64_decode($data['news_img']) ?>" width="1200" height="600">
        </div>
        <!--📝 isi artikelnya-->
        <article>
            <?=base64_decode($data['news_content']); ?>
        </article>
    </section>
    <!-- END Berita -->