<!--panggil file header-->
<?php include "header.php"; ?>
<?php
// Menghubungkan file koneksi.php
include('Dashboard//koneksi.php');

// Query untuk mengambil nama, alamat, dan ulasan berdasarkan tanggal terbaru
$query_tamu = "SELECT nama, alamat, ulasan 
          FROM ttamu 
          ORDER BY tanggal DESC LIMIT 15"; // Urutkan berdasarkan tanggal terbaru

$result_tamu = $koneksi->query($query_tamu);
?>

<?php
  // Query untuk mengambil data dari tabel tabout_us
  $result = mysqli_query($koneksi, "SELECT * FROM tabout_us LIMIT 1");
  $data = mysqli_fetch_array($result);
?>

<nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php"class="active">About</a></li>
            <li><a href="projects.php">Gallery</a></li>
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
          <h1>About</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li class="current">About</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- About Section -->
      <section id="about" class="about section">
        <div class="container">
          <div class="row position-relative">
            <div
              class="col-lg-7 about-img"
              data-aos="zoom-out"
              data-aos-delay="200"
            >
              <img src="Dashboard/<?= $data['gambar_about']; ?>" />
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
              <h2 class="inner-title">JawaTimurKu</h2>
              <div class="our-story">
                <h4></h4>
                <h3><?= $data['judul_about']; ?>
                </h3>
                <p>
                <?= $data['paragraf_pertama']; ?>
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check-circle"></i>
                    <span
                      ><?= $data['poin_1']; ?>
                      </span
                    >
                  </li>
                  <li>
                    <i class="bi bi-check-circle"></i>
                    <span
                      ><?= $data['poin_2']; ?></span
                    >
                  </li>
                  <li>
                    <i class="bi bi-check-circle"></i>
                    <span
                      ><?= $data['poin_3']; ?></span
                    >
                  </li>
                </ul>
                <p>
                <?= $data['paragraf_terakhir']; ?>
                </p>

                <div
                  class="watch-video d-flex align-items-center position-relative"
                >
                  <i class="bi bi-play-circle"></i>
                  <a
                    href="<?= $data['website_url']; ?>"
                    class="glightbox stretched-link"
                    >Watch Video</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->

      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>
            Testimonials dari pengunjung website JawaTimurKu.
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 2,
                    "spaceBetween": 20
                  }
                }
              }
            </script>

            <div class="swiper-wrapper">
            <?php while ($row = $result_tamu->fetch_assoc()): ?>
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <h3><?= $row['nama']; ?></h3>
                    <h4><?= $row['alamat']; ?></h4>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span
                        ><?= $row['ulasan']; ?></span
                      >
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- /Testimonials Section -->
    </main>

<!--panggil file footer-->
<?php include "footer.php"; ?>