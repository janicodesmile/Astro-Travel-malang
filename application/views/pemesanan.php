

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
              <div class="title-box text-center">
            <h3 class="title-a">
              Pemesanan Travel
            </h3>
            <p class="subtitle-a">
              ~
            </p>
            <div class="line-mf"></div>
          </div>
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div>

                  </div>
                </div>
                <div class="skill-mf">
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
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Form
                    </h5>
                    <div class="row">
                      <div class="col-lg-12">
                        <?= $this->session->flashdata('message'); ?>
                      </div>
                    </div>
                  </div>

                  <form action="<?= base_url();?>Pemesanan/tambah" method="post" >
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" />
                            <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="tujuan" id="subject" placeholder="Tujuan"  />
                              <?= form_error('tujuan','<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="no_hp" id="email" placeholder="Nomor HP" />
                            <?= form_error('no_hp','<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat"></textarea>
                            <?= form_error('alamat','<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Kirim pesanan</button>
                        </div>
                      </div>
                    </form>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
