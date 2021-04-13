<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DevFolio Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>vendor/DevFolio/img/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>vendor/DevFolio/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url(); ?>vendor/DevFolio/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url(); ?>vendor/DevFolio/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>vendor/DevFolio/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>vendor/DevFolio/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>vendor/DevFolio/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>vendor/DevFolio/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url(); ?>vendor/DevFolio/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="<?= base_url(); ?>dist/img/<?= $set['logo'] ?>" width="200px" ></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url('inde/tentang'); ?>">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url('inde/tujuan'); ?>">Tujuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url('inde/galeri'); ?>">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url('inde/blogspot'); ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url('inde/Testimoni'); ?>">Pemesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <a href="https://api.whatsapp.com/send?phone=6281233428484&text=Mohon%20diisi..%0ADAFTAR%20PESANAN%20PENUMPANG%0AASTRO%20TRAVEL%0AHari%20%2F%20Tanggal%20%3A%0APagi%20%2F%20Sore%20%20%20%20%20%20%3A%0ANama%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3A%0AJemput%20%20%20%20%20%20%20%20%20%20%20%20%3A%0ATujuan%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3A%0AJumlah%20pnp%20%20%20%20%20%3A%0ANo%20Hp%20Aktif%20%20%20%20%20%20%3A%0A%0ABarang%20bawaan%20penumpang%20maksimal%201%20tas%20jinjing%20dan%201%20kardus%20air%20mineral%20tanggung" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>

  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(<?= base_url(); ?>vendor/DevFolio/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Blog Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <?php 
                foreach($user as $u){ 
?>
  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post-box">
            <div class="post-thumb">
             <a target="_blank" href="<?= base_url(); ?>dist/img/wisata/<?= $u->gambar ?>">
                        <img src="<?= base_url(); ?>dist/img/wisata/<?= $u->gambar ?>"  class="img-fluid">
              </a>
            </div>
            <div class="post-meta">
              <h1 class="article-title"><?= $u->judul ?></h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <a href="#"><?= $u->dibuat ?></a>
                </li>
                <li>
                  <span class="ion-pricetag"></span>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <span class="ion-chatbox"></span>
                  <a href="#">14</a>
                </li>
              </ul>
            </div>
            <div class="article-content">
              <!-- <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </blockquote> -->
              <p>
                  <?= $u->konten ?>
              </p>
              <div class="title-box-2">
                    <h5 class="title-left">
                      Melayani Rute
                    </h5>
                  </div>
              <table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Dari</th>
        <th scope="col">Tujuan</th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Malang</td>
        <td>Magetan</td>
        <td>Pulang Pergi</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Malang</td>
        <td>Madiun</td>
        <td>Pulang Pergi</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Malang</td>
        <td>Nganjuk</td>
        <td>Pulang Pergi</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Malang</td>
        <td>Kertosono</td>
        <td>Pulang Pergi</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Malang</td>
        <td>Pare</td>
        <td>Pulang Pergi</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Malang</td>
        <td>Ponorogo</td>
        <td>Pulang Pergi</td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>Malang</td>
        <td>Trenggalek</td>
        <td>Pulang Pergi</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>Malang</td>
        <td>Tulungagung</td>
        <td>Pulang Pergi</td>
      </tr>
    </tbody>
  </table>
  <div class="title-box-2">
                    <h5 class="title-left">
                      Jam Keberangkatan
                    </h5>
                  </div>
                  <table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Dari</th>
        <th scope="col">jam</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Malang</td>
        <td>06.00 WIB</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Malang</td>
        <td>14.00 WIB</td>
      </tr>
       </tbody>
  </table>
            </div>
          </div>
          <div class="box-comments">
            <div class="title-box-2">
              <h4 class="title-comments title-left">Comments (<?= $num_results ?>)</h4>
            </div>
            <ul class="list-comments">
              <li>
                <?php foreach ($blog as $b) { ?>
                <div class="comment-details">
                  <h4 class="comment-author"><?= $b->nama ?></h4>
                  <?php date_default_timezone_set('Asia/Jakarta'); ?>
                  <span><?= date('d F Y, H:i', strtotime($b->tanggal)) ?></span>
                  <p>
                  <?= $b->komentar ?>
                  </p>
                  <a href="3">Reply</a>
                </div>
                <br>
                <?php } ?>
              </li>
            </ul>
          </div>
          <div class="form-comments">
            <div class="title-box-2">
              <h3 class="title-left">
                Leave a Reply
              </h3>
              <div class="row">
                      <div class="col-lg-12">
                        <?= $this->session->flashdata('message'); ?>
                      </div>
                    </div>
            </div>
            <form class="form-mf"  action="<?= base_url();?>Blog/tambah" method="post">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control input-mf" id="inputName" placeholder="Name *" >
                    <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *">
                    <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <textarea id="textMessage" name="komen" class="form-control input-mf" placeholder="Comment *" name="message"
                      cols="45" rows="8" ></textarea>
                      <?= form_error('komen','<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>

                <input type="hidden" name="id_wisata" value="<?= $this->input->get('blog'); ?>">

                <div class="col-md-12">
                <button type="submit" class="button button-a button-big button-rouded">Kirim Komentar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="widget-sidebar sidebar-search">
            <h5 class="sidebar-title">Search</h5>
            <div class="sidebar-content">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="button">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Recent Post</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
              <?php 
          foreach($data->result() as $u){ 
        ?>
                <li>
                  <a href="<?= base_url('inde/blog?blog='.$u->id);?>"><?= $u->judul ?></a>
                </li>
          <?php }?>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Archives</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">September, 2017.</a>
                </li>
                <li>
                  <a href="#">April, 2017.</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
                <li>
                  <a href="#">Atque placeat maiores nam quo autem</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Tags</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#">Web.</a>
                </li>
                <li>
                  <a href="#">Design.</a>
                </li>
                <li>
                  <a href="#">Travel.</a>
                </li>
                <li>
                  <a href="#">Photoshop</a>
                </li>
                <li>
                  <a href="#">Corel Draw</a>
                </li>
                <li>
                  <a href="#">JavaScript</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  <?php } ?>


  