<!--/ Section Portfolio Star /-->
<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Galeri
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php 
          $nomor = $this->uri->segment('3');
          foreach($data as $u){ 
            $nomor++
        ?>
        <div class="col-md-4">
          <div class="work-box">
            <a href="<?= base_url(); ?>/dist/img/galeri/<?=  $u->gambar?>" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="<?= base_url(); ?>/dist/img/galeri/<?=  $u->gambar?>" height="200px" width="100%">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?= $u->judul ?></h2>
                    <div class="w-more">
                      <span class="w-ctegory"><?= $u->upload ?></span> / <span class="w-date"><?= $u->tanggal ?>
                      </span> / <span><?= $nomor?>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <?php 
          }
        ?>
        
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->
  <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
  </div>