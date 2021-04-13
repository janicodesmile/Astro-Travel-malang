<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Astro Travel Malang</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
  <link href="<?= base_url(); ?>vendor/aaa/common-css/ionicons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>vendor/aaa/common-css/jquery.classycountdown.css" />
		
	<link href="<?= base_url(); ?>vendor/aaa/03-comming-soon/css/styles.css" rel="stylesheet">
	
	<link href="<?= base_url(); ?>vendor/aaa/03-comming-soon/css/responsive.css" rel="stylesheet">

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
  <style type="text/css" media="screen">
                .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:70px;
            right:10px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
          font-size:30px;
            box-shadow: 2px 2px 3px #999;
          z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="<?= base_url(); ?>vendor/DevFolio/img/astrotr.png" width="200px" ></a>
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
            <a class="nav-link js-scroll" href="<?= base_url('inde/Testimoni'); ?>">Testimoni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>

    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url(<?= base_url(); ?>vendor/DevFolio/img/astrotr.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Astro Travel <br> Malang Ponorogo</h1> <br>
          <p class="intro-subtitle"><span class="text-slider-items">Malang - Magetan,Malang - Madiun,Malang - Nganjuk,Malang - Kertosono,Malang - Pare, Malang - Ponorogo, Malang - Trenggalek, Malang - Tulungagung, Malang - Blitar</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->