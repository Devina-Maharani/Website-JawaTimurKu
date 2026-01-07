<?php
// Menyertakan file koneksi
include('koneksi.php'); ?>
<?php
// uji jika tombol simpan di klik
if(isset($_POST['bsimpan'])) {
    $tgl = date('Y-m-d');

    $nama = htmlspecialchars( $_POST['nama'], ENT_QUOTES);
    $alamat = htmlspecialchars( $_POST['alamat'], ENT_QUOTES);
    $ulasan = htmlspecialchars( $_POST['ulasan'], ENT_QUOTES);
    $nope = htmlspecialchars( $_POST['nope'], ENT_QUOTES);

    $simpan = mysqli_query($koneksi, "INSERT INTO ttamu values ('','$tgl','$nama','$alamat','$ulasan','$nope')");

    if($simpan){
      echo "<script>alert('Your message has been sent. Thank you!');document.location='?'</script>";
    } else {
      echo "<script>alert('Simpan data gagal');document.location='?'</script>";
    }
}
?>

<?php
  // Query untuk mengambil data dari tabel tkontak
  $result = mysqli_query($koneksi, "SELECT * FROM tkontak LIMIT 1");
  $data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: UpConstruction
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="contact-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between"
      >
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">JawaTimurKu</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="projects.php">Gallery</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>

    <main class="main">
      <!-- Page Title -->
      <div
        class="page-title dark-background"
        style="background-image: url(assets/img/page-title-bg.jpg)"
      >
        <div class="container position-relative">
          <h1>Contact</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li class="current">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Contact Section -->
      <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p><?= $data['address']; ?></p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p><?= $data['call_us']; ?></p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p><?= $data['email_us']; ?></p>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <div class="row gy-4 mt-1">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <iframe
                src="<?= $data['maps']; ?>"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <!-- End Google Maps -->

            <div class="col-lg-6">
  <form method="POST" action="" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
    <div class="row gy-4">
      <div class="col-md-6">
        <input
          type="text"
          name="nama" 
          class="form-control form-control-user"
          placeholder="Your Name"
          required
        />
      </div>

      <div class="col-md-6">
        <input
          type="text"
          class="form-control form-control-user"
          name="nope" 
          placeholder="Your Phone Number"
          required
        />
      </div>

      <div class="col-md-12">
        <input
          type="text"
          class="form-control form-control-user"
          name="alamat" 
          placeholder="Address"
          required
        />
      </div>

      <div class="col-md-12">
        <textarea
          class="form-control form-control-user"
          name="ulasan" 
          rows="6"
          placeholder="Message"
          required
        ></textarea>
      </div>

      <div class="col-md-12 text-center">
        <button type="submit" name="bsimpan" class="btn btn-primary btn-user btn-block">Send Message</button>
      </div>
    </div>
  </form>
</div>
<!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- /Contact Section -->
    </main>

<!--panggil file footer-->
<?php include "footer.php"; ?>