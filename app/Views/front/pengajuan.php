<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    
  </section><!-- #intro -->

  <main id="main">


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>PROSES PENGAJUAN PINJAMAN</h3>
        </header>

        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <span class="title">Survey</span>

            <p>jika Anda setuju dengan besarnya pinjaman, angsuran, jangka waktu/tenor pinjaman, surveyor kami akan segera melakukan survey ke tempat tinggal Anda untuk mengambil FOTO COPY persyaratan sekaligus cek fisik kendaraan dan isi aplikasi pinjaman.</p>

            <!-- <span class="title">Dana Cair</span>

            <p>Saat yang sama ketika Anda menyerahkan BPKB ASLI untuk dijaminkan, Anda akan segera mendapatkan pencairan dana hari itu juga.</p> -->

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="<?= base_url() ?>/assets/img/proses-kredit.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="<?= base_url() ?>/assets/img/proses-kredit.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4 class="title">Proses</h4>

            <p>jika Anda setuju dengan besarnya pinjaman, angsuran, jangka waktu/tenor pinjaman, surveyor kami akan segera melakukan survey ke tempat tinggal Anda untuk mengambil FOTO COPY persyaratan sekaligus cek fisik kendaraan dan isi aplikasi pinjaman.</p>
          </div>
        </div>

        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">

            <span class="title">Dana Cair</span>

            <p>Saat yang sama ketika Anda menyerahkan BPKB ASLI untuk dijaminkan, Anda akan segera mendapatkan pencairan dana hari itu juga.</p>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="<?= base_url() ?>/assets/img/proses-kredit.png" class="img-fluid" alt="">
          </div>
        </div><br><br>

         <div class="row row-eq-height justify-content-center">
            <div class="col-lg-8 mb-3">
              <?php if(!empty(session()->getFlashdata('success'))){ ?>

                <div class="alert alert-success">
                  <script type="text/javascript">
                    alert('<?php echo session()->getFlashdata('success');?>')
                    </script>
                </div>     
                 
              <?php } ?>

              <?= form_open_multipart(base_url('proses-pengajuan-simulasi')); ?>
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <label>First Name*</label>
                      <input type="text" name="first_name" class="form-control" id="name" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required=""  />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>Last Name*</label>
                      <input type="text" class="form-control" name="last_name" id="email" placeholder="Your Last Name" data-rule="email" data-msg="Please enter a valid email" required=""  />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email*</label>
                    <input type="email" class="form-control" name="email" id="subject" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required=""  />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <label>Alamat*</label>
                    <textarea class="form-control" name="alamat" rows="5" data-rule="" data-msg="Please write something for us" placeholder="Alamat" required="" ></textarea>
                    <div class="validation"></div>
                  </div>

                  <label>Jenis Kendaraan*</label>
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="radio" name="jenis_kendaraan" value="Mobil" required="">
                      <span> Mobil</span>
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="radio" name="jenis_kendaraan" value="Motor" required="">
                      <span> Motor</span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="radio" name="jenis_kendaraan" value="Pick Up" required="">
                      <span> Pick Up</span>
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="radio" name="jenis_kendaraan" value="Truck" required="">
                      <span> Truck</span>
                    </div>
                  </div><br>

                  <label>Status Kendaraan*</label>
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="radio" name="status_kendaraan" value="Milik Saya" required="">
                      <span> Milik Saya</span>
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="radio" name="status_kendaraan" value="Milik Keluarga" required="">
                      <span> Milik Keluarga</span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="radio" name="status_kendaraan" value="Bukan Milik Saya" required="">
                      <span> Bukan Milik Saya</span>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label>Tahun Pembuatan*</label>
                    <input type="text" class="form-control" name="tahun_pembuatan" id="subject" placeholder="Tahun Pembuatan" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required="" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <label>Nomor HP Aktif*</label>
                    <input type="text" class="form-control" name="no_hp" id="subject" placeholder="Nomor HP Aktif" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required=""  />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group">
                    <input type="checkbox" name=""> <span>Menyetujui Semua Ketentuan dan Persyaratan</span><br>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-primary " title="Send Message">Send Message</button>
                  </div>
                </div>
              </div>
            </div>
          <?= form_close() ?>

      </div>
    </section><!-- #about -->


  </main>