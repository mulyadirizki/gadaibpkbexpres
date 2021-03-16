<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="<?= base_url() ?>/assets/img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Gadai BPKB<br><span>Kendaraan</span></h2>
        <div>
          <a href="<?= base_url() ?>/pengajuan-simulasi" class="btn-get-started scrollto">Pengajuan Simulasi</a>
          <a href="<?= base_url() ?>#contact" class="btn-services scrollto">Hubungi Kami</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3 style="color: orange;">DAPATKAN PINJAMAN BPKB CEPAT DAN MUDAH</h3>
          <p>Dapatkan pinjaman uang hanya dengan jaminan BPKB kendaraan Anda, Proses Cepat, Simulasi Gratis, Syarat mudah, Gak pakek ribet dijamin sudah pasti cair 100%.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
              <i class="fa fa-bolt"></i>
              <div class="card-body">
                <h5 class="card-title" style="color: orange;">Proses Cepat</h5>
                <p class="card-text">Dimanapun Anda, data di jemput oleh surveyor resmi, langsung tanpa perantara, tanpa FEE. No Tipping. Proses 1 hari.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
              <i class="fa fa-edit"></i>
              <div class="card-body">
                <h5 class="card-title" style="color: orange;">Simulasi  Gratis</h5>
                <p class="card-text">Jangan ragu! Apapun kebutuhan Anda, hitung simulasinya GRATIS! Respon Cepat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
              <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title" style="color: orange;">Syarat Mudah</h5>
                <p class="card-text">Tanpa BI checking, proses fleksibel, terima plat daerah, pemohon perorangan atau perusahaan. Cepat nggak ribet!</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
              <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title" style="color: orange;">Cair 100%</h5>
                <p class="card-text">Dijamin sudah pasti cair 100% jika persyaratan lengkap</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>JENIS KENDARAAN</h3>
        </header>

        <div class="row">
          <?php foreach($gambar as $g) : ?>
            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <img src="<?= base_url('uploads/'.$g['gambar']) ?>" alt="" width="60%">
                <h4 class="title"><a href=""><?= $g['title'] ?></a></h4>
                <p class="description">Gadaikan BPKB <?= $g['title'] ?> Anda</p>
              </div>
            </div>
            
          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>PERSYARATAN</h3>
        </header>

        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <h4 class="title">Persyaratan Perorangan (Umum)</h4>

            <ol>
              <li> Syarat Photo Copy KTP dan KK Suami Istri (jika sudah menikah)Photo Copy NPWP</li>
              <li> fotokopi slip gaji (karyawan)/rekening buku tabungan (wirausaha)</li>
              <li> fotokopi PBB/Rek listrik atau bukti kontrak (jika rumah kontrak)</li>
            </ol>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="<?= base_url() ?>/assets/img/persyaratan1.jpg" class="img-fluid" width="50%" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="<?= base_url() ?>/assets/img/persyaratan2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4 class="title">Syarat Perusahaan</h4>
            <p>Selain syarat untuk perorangan Anda juga perlu melampirkan.</p>

            <ol>
              <li> Akte perusahaan</li>
              <li> SPK (surat perjanjian kerjasama ) perusahaan yang masih berlaku</li>
              <li> SIUP (surat izin usaha perdagangan)</li>
              <li> Rekening koran perusahaan</li>
            </ol>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials Pelanggan</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>
    
              <div class="testimonial-item">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section> -->
    <!-- #testimonials -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3>KONTAK KAMI</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <div class="row">
                <?php foreach($profile as $p) : ?>
                <div class="col-md-8 info">
                    <i class="ion-ios-location-outline"></i>
                    <p><?= $p['alamat'] ?></p>
                  </div>
                  <div class="col-md-8 info">
                    <i class="ion-ios-email-outline"></i>
                    <p><?= $p['email'] ?></p>
                  </div>
                  <div class="col-md-8 info">
                    <i class="ion-ios-telephone-outline"></i>
                    <p><?= $p['no_hp'] ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form">
              <?php if(!empty(session()->getFlashdata('success'))){ ?>

                <div class="alert alert-success">
                  <script type="text/javascript">
                    alert('<?php echo session()->getFlashdata('success');?>')
                    </script>
                </div>     
                 
              <?php } ?>

              <?= form_open_multipart(base_url('sent-message')); ?>
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center">
                  <button type="submit" title="Send Message">Send Message</button>
                </div>
 
            <?= form_close() ?>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>