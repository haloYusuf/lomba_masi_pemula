
<section class="main">
        <div class="main-top">
          <h1>Request to Publish</h1>
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
              <div class="btn">
                <ul>
                  <li><a class="button button1" href="<?=BASE_URL ?>/profile/acc/<?=base64_decode($_COOKIE['data']) ?>/<?=$val['news_id']?>" onclick="return confirm('Yakin ingin mempublish data?');">Accept</a></li>
                  <li><a class="button button2" href="<?=BASE_URL ?>/profile/del/<?=base64_decode($_COOKIE['data']) ?>/<?=$val['news_id'] ?>" onclick="return confirm('Yakin ingin menghapus data?');">Delete</a></li>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </body>
</html>
