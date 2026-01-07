<?php
// Menghubungkan file koneksi.php
include('Dashboard//koneksi.php');
 
// Query untuk mengambil data dari database
$query = "SELECT id_gambar, judul_gambar, gambar_1, jenis_gambar FROM tgambar ORDER BY id_gambar ASC";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Gallery</title>
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

  <body class="projects-page">
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
            <li><a href="projects.php" class="active">Gallery</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
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
          <h1>Gallery</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li class="current">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Galeri Section -->
      <section id="projects" class="projects section">
        <div class="container">
          <div
            class="isotope-layout"
            data-default-filter="*"
            data-layout="masonry"
            data-sort="original-order"
          >
            <ul
              class="portfolio-filters isotope-filters"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-remodeling">Tradisi</li>
              <li data-filter=".filter-construction">Tarian</li>
              <li data-filter=".filter-repairs">Pakaian</li>
              <li data-filter=".filter-design">Makanan</li>
            </ul>
            <!-- End Portfolio Filters -->

            <div
              class="row gy-4 isotope-container"
              data-aos="fade-up"
              data-aos-delay="200"
            >
            
            <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Filter berdasarkan jenis_gambar
                        $filterClass = "";
                        switch ($row['jenis_gambar']) {
                            case "Tradisi":
                                $filterClass = "filter-remodeling";
                                break;
                            case "Tarian":
                                $filterClass = "filter-construction";
                                break;
                            case "Pakaian":
                                $filterClass = "filter-repairs";
                                break;
                            case "Makanan":
                                $filterClass = "filter-design";
                                break;
                        }
                    ?>
              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $filterClass; ?>"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="/Jawa%20Timur/Dashboard/<?= $row['gambar_1']; ?>"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4><?= $row['judul_gambar']; ?></h4>
                    <a
                      href="/Jawa%20Timur/Dashboard/<?= $row['gambar_1']; ?>"
                      title="<?= $row['judul_gambar']; ?>"
                      data-gallery="portfolio-gallery-app"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="detail.php?id_gambar=<?= $row['id_gambar']; ?>"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- End Portfolio Item -->
            </div>
            <!-- End Portfolio Container -->
          </div>
        </div>
      </section>
      <!-- /Projects Section -->
    </main>

<!--panggil file footer-->
<?php include "footer.php"; ?>