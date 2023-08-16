    <!-- editor textarea -->
    <script type="text/javascript" src="<?=BASE_URL; ?>js/nicEdit.js"></script>
    <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function () {
            nicEditors.allTextAreas()
        });
    </script>
    <!-- Isi -->
    <section class="container">
    <h1>Buat Artikel</h1>

        <form action="<?=BASE_URL; ?>/content/submitContent" method="post" enctype="multipart/form-data">
            <div class="form-item">
                <label for="Judul">Judul</label>
                <input type="text" name="Judul" id="Judul" placeholder="Judul Artikel" required>
            </div>

            <!-- Youtube WPU PHP | 15.UPLOAD -->
            <div class="form-item">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" required>
            </div>

            <div class="form-item form-textarea">
                <label for="isi">Isi Arikel</label>
                <textarea name="isi" id="isi"></textarea>
            </div>
            <?php Flasher::flash(); ?>
            <input type="submit" name="submit" id="submit" class="btn-submit">
        </form>
    </section>
    <!-- END Isi -->