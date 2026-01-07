<?php
  // Query untuk mengambil data dari tabel tkontak
  $result_kontak = mysqli_query($koneksi, "SELECT * FROM tkontak LIMIT 1");
  $data = mysqli_fetch_array($result_kontak);
?>

<footer id="footer" class="footer dark-background">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.php" class="logo d-flex align-items-center">
              <span class="sitename">JawaTimurKu</span>
            </a>
            <div class="footer-contact pt-3">
              <p><?= $data['address']; ?></p>
              <p class="mt-3">
                <strong>Phone:</strong> <span><?= $data['call_us']; ?></span>
              </p>
              <p><strong>Email:</strong> <span><?= $data['email_us']; ?></span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="<?= $data['twitter']; ?>"><i class="bi bi-twitter-x"></i></a>
              <a href="<?= $data['facebook']; ?>"><i class="bi bi-facebook"></i></a>
              <a href="<?= $data['instagram']; ?>"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

      <div class="container copyright text-center mt-4">
        <p>
          © <span>Copyright</span>
          <strong class="px-1 sitename">JawaTimurKu</strong>
          <span>All Rights Reserved</span>
        </p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
