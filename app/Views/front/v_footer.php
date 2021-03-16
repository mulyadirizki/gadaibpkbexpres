<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-7 col-md-8 footer-info">
            <h3>Gadai BPKB Express</h3>
            <p>Dapatkan pinjaman uang hanya dengan jaminan BPKB kendaraan Anda, Simulasi Gratis, Proses Cepat, Syarat mudah, Gak pakek ribet dijamin sudah pasti cair 100%.</p>
          </div>


           <div class="col-lg-5 col-md-7 footer-contact">
            <h4>Kontak Kami</h4>
            <?php foreach($profile as $p) : ?>
              <p>
                <strong>Alamat : </strong><?= $p['alamat'] ?><br>
                <strong>HP/WA :</strong> <?= $p['no_hp'] ?><br>
                <strong>Email :</strong> <?= $p['email'] ?><br>
              </p>
            <?php endforeach; ?>
            
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        © Copyright <strong>gadaibpkbexpres</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <span title="Back To Top" id="back_to_top"></span>
  <div onclick="ht_ctc_click(this);" class="ht-ctc-chat style-4 desktop" style="position: fixed; bottom: 22px; left: 20px; cursor: pointer; z-index: 99999999;" 
    data-return_type="chat" 
    data-number="6285264137401" 
    data-pre_filled="Hallo Saya inggin menggadaikan BPKB kendaraan saya"
     data-is_ga_enable="no" 
     data-is_fb_an_enable="no" data-webandapi="1">
    <style>

      .chip {
          display: inline-block;
          padding-left: 12px;
          padding-right: 12px;
          padding-top: 0px;
          padding-bottom: 0px;
          border-radius: 25px;
          font-size: 13px;
          line-height: 32px;
      }

      /* Image */
      .chip img {
          float: left;
          margin: 0 8px 0 -12px;
          height: 32px;
          width: 32px;
          border-radius: 50%;
      }

    </style>
    <div class="chip" style="background-color: #32C03C; height: 36px color: #000000;">
       <span style="color: white;">Hubungi Kami</span> <img src="<?= base_url() ?>/assets/img/logo-whatsapp.png" alt="whatsapp">
    </div>           
  </div>
  <script type="text/javascript">
    /* <![CDATA[ */
    var ht_ctc_var = {"is_mobile":"no","post_title":"Sample Post Multiple Image","is_ga_enable":"no","is_fb_an_enable":"no"};
    var ht_ctc_var_chat = {"number":"6285668081513","pre_filled":"Hallo Saya inggin menggadaikan BPKB kendaraan saya","show_or_hide":"hide","webandapi":"1"};
    /* ]]> */
  </script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/appdc8c.js"></script>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?= base_url() ?>/assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?= base_url() ?>/assets/lib/wow/wow.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url() ?>/assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>
</html>