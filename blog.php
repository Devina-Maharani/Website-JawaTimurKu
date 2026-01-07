<?php
// Include koneksi database
include('koneksi.php');

// Tentukan jumlah berita per halaman
$perPage = 6;

// Ambil nomor halaman dari parameter URL (default ke halaman 1 jika tidak ada)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Tentukan offset untuk query SQL
$offset = ($page - 1) * $perPage;

// Ambil nilai search_term dari form
$searchTerm = isset($_POST['search_term']) ? $_POST['search_term'] : '';

// Query untuk menghitung jumlah total data dengan pencarian jika ada
$totalQuery = "SELECT COUNT(*) as total FROM tberita WHERE judul_berita LIKE '%$searchTerm%'";
$totalResult = mysqli_query($koneksi, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalData = $totalRow['total'];

// Hitung total halaman
$totalPages = ceil($totalData / $perPage);

// Query untuk mengambil data dengan limit dan offset dengan pencarian jika ada
$query = "SELECT id_berita, nama_penulis, tanggal, jenis_berita, judul_berita, paragraf_1, gambar 
          FROM tberita 
          WHERE judul_berita LIKE '%$searchTerm%' 
          ORDER BY tanggal ASC 
          LIMIT $perPage OFFSET $offset";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Blog</title>
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

  <body class="blog-page">
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
            <li><a href="blog.php" class="active">Blog</a></li>
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
          <h1>Blog</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li class="current">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Blog Posts Section -->
      <section id="blog-posts" class="blog-posts section">
        <div class="container">


                <!-- Search Form -->
                <div class="row">
          <div class="col-lg-12">
            <form action="" method="POST" class="mb-4 d-flex">
              <input type="text" name="search_term" placeholder="Search..." class="form-control me-2" value="<?php echo isset($searchTerm) ? $searchTerm : ''; ?>" />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>

          <div class="row gy-4">
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <article class="position-relative h-100">
                <!-- Berita 1 -->
                <div class="post-img position-relative overflow-hidden">
                  <img
                    src="/Jawa%20Timur/Dashboard/<?= $row['gambar']; ?>"
                    class="img-fluid"
                    alt=""
                  />
                  <span class="post-date"><?= date('F d, Y', strtotime($row['tanggal'])); ?></span>
                </div>

                <div class="post-content d-flex flex-column">
                  <h3 class="post-title">
                  <?= $row['judul_berita']; ?>
                  </h3>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-person"></i>
                      <span class="ps-2"><?= $row['nama_penulis']; ?></span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-folder2"></i>
                      <span class="ps-2"><?= $row['jenis_berita']; ?></span>
                    </div>
                  </div>

                  <p><?= $row['paragraf_1']; ?></p>

                  <hr />

                  <a href="detail_berita.php?id_berita=<?= $row['id_berita']; ?>" class="readmore stretched-link"
                    ><span>Read More</span><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </article>
            </div>
            <?php endwhile; ?>
            <!-- End post list item -->
          </div>
        </div>
      </section>
      <!-- /Blog Posts Section -->

      <!-- Blog Pagination Section -->
      <section id="blog-pagination" class="blog-pagination section">
        <div class="container">
          <div class="d-flex justify-content-center">
          <ul class="pagination">
        <?php if ($page > 1): ?>
        <li><a href="?page=<?= $page - 1; ?>"><i class="bi bi-chevron-left"></i></a></li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <li><a href="?page=<?= $i; ?>" class="<?= $i == $page ? 'active' : ''; ?>"><?= $i; ?></a></li>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
        <li><a href="?page=<?= $page + 1; ?>"><i class="bi bi-chevron-right"></i></a></li>
        <?php endif; ?>
    </ul>
          </div>
        </div>
      </section>
      <!-- /Blog Pagination Section -->
    </main>

<!--panggil file footer-->
<?php include "footer.php"; ?>