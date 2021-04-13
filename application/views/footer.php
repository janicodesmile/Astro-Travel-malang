 <!--/ Section Contact-Footer Star /-->
 <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Hubungi Kami
                    </h5>
                  </div>
                  <div class="more-info">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6601118646345!2d112.59450771439356!3d-7.930522394287391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882187ccb341f%3A0x259276f3cf083412!2sAstro%20Travel%20Malang!5e0!3m2!1sid!2sid!4v1583740450967!5m2!1sid!2sid" 
width="450" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <ul class="list-ico">
                      <a href="https://www.google.com/maps/place/Astro+Travel+Malang/@-7.9305224,112.5945077,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7882187ccb341f:0x259276f3cf083412!8m2!3d-7.9305224!4d112.5966964">
                        <li><span class="ion-ios-location"></span> <?= $set['alamat'] ?> </li>
                      </a>
                      <li><span class="ion-ios-telephone"></span><?= $set['no_telp'] ?></li>
                      <li><span class="ion-email"></span><?= $set['email'] ?></li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="<?= $set['facebook_link'] ?>"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="<?= $set['instagram_link'] ?>"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/popper/popper.min.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/easing/easing.min.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/counterup/jquery.counterup.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url(); ?>vendor/DevFolio/lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url(); ?>vendor/DevFolio/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url(); ?>vendor/DevFolio/js/main.js"></script>

</body>
</html>