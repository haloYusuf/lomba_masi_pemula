
      <section class="main">
        <div class="main-top">
          <h1>Your News</h1>
        </div>
        <div class="main-skills">
          <?php foreach($data as $val) : ?>
            <div class="card">
              <!-- <i class="fi"></i> -->
              <h3><?=base64_decode($val['news_title']); ?></h3>
              <img src="<?=BASE_IMG_URL . base64_decode($val['news_img']);?>" alt="" />
              <div class="content">
                <?php
                  $i = Contents::getContents(base64_decode($val['news_content']), '<div>', '</div');
                  if(isset($i[0])){
                    echo '<div>' . $i[0] . '</div>';
                    if(isset($i[1])){
                      echo '<div>' . $i[1] . '</div>';
                      if(isset($i[2])){
                        echo '<div>' . $i[2] . '</div>';
                      }
                    }
                  }else{
                    echo substr(base64_decode($val['news_content']), 200);
                  }
                ?>
              </div>
              <button onclick="location.href='<?=BASE_URL ?>/home/news/<?=base64_encode($val['news_id']) ?>';">Baca</button>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </body>
</html>
