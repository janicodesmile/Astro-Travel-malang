 <!--/ Section Blog Star /-->
 <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
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
          foreach($data->result() as $u){ 
          $kalimat = $u->konten;
          $konten = substr($kalimat,3,150);
        ?>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="<?= base_url(); ?>dist/img/wisata/<?= $u->gambar ?>" data-lightbox="gallery-mf">
                        <img src="<?= base_url(); ?>dist/img/wisata/<?= $u->gambar ?>"  height="200px" width="100%">
              </a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?= $u->nama ?></h6>
                </div>
              </div>
              <p class="card-description">
               <?= $konten ?>
              </p>
              <h3 class="card-title"><a href="<?= base_url('inde/blog?blog='.$u->id);?>">Lihat lengkapnya</a></h3>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author"> <?= $u->dibuat ?></span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> <?= $u->tanggal ?>
              </div>
            </div>
          </div>
        </div>
         <?php } ?>
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->
  <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>