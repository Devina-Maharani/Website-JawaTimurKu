<?php
// Menghubungkan file koneksi.php
include('Dashboard//koneksi.php');

  // Query untuk mengambil data dari tabel tabout_us
  $result = mysqli_query($koneksi, "SELECT * FROM tabout_us LIMIT 1");
  $data = mysqli_fetch_array($result);

  // Query untuk mengambil data dari database galeri
    $query_galeri = "SELECT id_gambar, judul_gambar, gambar_1, jenis_gambar FROM tgambar ORDER BY id_gambar ASC";
    $result_galeri = mysqli_query($koneksi, $query_galeri);

    // Query untuk mengambil nama, alamat, dan ulasan berdasarkan tanggal terbaru
$query_tamu = "SELECT nama, alamat, ulasan 
FROM ttamu 
ORDER BY tanggal DESC LIMIT 15"; // Urutkan berdasarkan tanggal terbaru

$result_tamu = $koneksi->query($query_tamu);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Index</title>
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

  <body class="index-page">
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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="projects.php">Gallery</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
        <div class="info d-flex align-items-center">
          <div class="container">
            <div
              class="row justify-content-center"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="col-lg-6 text-center">
                <h2>Jawa Timur : Harmoni Alam dan Tradisi</h2>
                <p>
                  Fokus pada keseimbangan antara keindahan alam dan kekayaan
                  tradisi lokal.
                </p>
                <a href="#get-started" class="btn-get-started">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <div
          id="hero-carousel"
          class="carousel slide"
          data-bs-ride="carousel"
          data-bs-interval="5000"
        >
          <div class="carousel-item">
            <img src="assets/img/Jawa Timur/jawa-timur.jpg" alt="" />
          </div>

          <div class="carousel-item active">
            <img src="assets/img/Jawa Timur/jawa-timur-2.jpg" alt="" />
          </div>

          <div class="carousel-item">
            <img src="assets/img/Jawa Timur/jawa-timur-3.jpg" alt="" />
          </div>

          <div class="carousel-item">
            <img src="assets/img/Jawa Timur/jawa-timur-4.jpg" alt="" />
          </div>

          <div class="carousel-item">
            <img src="assets/img/Jawa Timur/jawa-timur-5.jpg" alt="" />
          </div>

          <a
            class="carousel-control-prev"
            href="#hero-carousel"
            role="button"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon bi bi-chevron-left"
              aria-hidden="true"
            ></span>
          </a>

          <a
            class="carousel-control-next"
            href="#hero-carousel"
            role="button"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon bi bi-chevron-right"
              aria-hidden="true"
            ></span>
          </a>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- Get Started Section -->
      <section id="get-started" class="get-started section">
        <div class="container">
          <div class="row justify-content-between gy-4">
            <div
              class="col-lg-6 d-flex align-items-center"
              data-aos="zoom-out"
              data-aos-delay="100"
            >
            <!-- Revisi Tentang Kami -->
              <div class="content">
                <div class="about-us">
                <div class="about-us-container">
                  <div class="about-us-image">
                    <img src="assets/img/Budaya Jawa Timur.jpg" />
                </div>
                  <div class="about-us-content">
                    <div class="about-us-header">
                      <h5>Tentang Kami</h5>
                      <div class="underline"></div> <!-- Garis panjang -->
                    </div>
                    <h2>JawaTimurKu</h2>
                    <p>
                    <?= $data['paragraf_pertama']; ?>
                    </p>
                    <!-- Button: Selengkapnya -->
                    <a href="about.php" class="btn">Selengkapnya ➔</a> <!-- Tombol menuju halaman lain -->
              </div>
            </div>
            <!-- End Quote Form -->
          </div>
        </div>
      </section>
      <!-- /Get Started Section -->

      <!-- Revisi Budaya -->
      <section id="constructions" class="constructions section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Budaya Jawa Timur</h2>
          <p>
          Berikut merupakan budaya yang dibahas pada website Jawa TimurKu. 
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg">
                      <img src="assets/img/Tradisi Jawa Timur.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Tradisi Jawa Timur</h4>
                      <p>
                        Tradisi Jawa Timur mencakup kebiasaan, adat, dan budaya yang diwariskan secara turun-temurun. Tradisi ini mencerminkan nilai lokal, kepercayaan, serta hubungan manusia dengan alam dan leluhur, dan beberapa masih dipraktikkan hingga kini.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg">
                      <img src="assets/img/Tari Khas Jawa Timur.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">
                        Tarian Jawa Timur
                      </h4>
                      <p>
                        Tarian Jawa Timur adalah tarian tradisional dari provinsi Jawa Timur yang mencerminkan budaya, sejarah, dan tradisi. Gerakannya dinamis dan energik, beberapa dipengaruhi oleh Kerajaan Majapahit dan kehidupan masyarakat setempat. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg">
                      <img src="assets/img/Pakaian Adat Jawa Timur.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">
                        Pakaian Adat Jawa Timur
                      </h4>
                      <p>
                        Pakaian tradisional Jawa Timur mencerminkan identitas, budaya, dan adat masyarakatnya. Biasanya dipakai dalam upacara adat, acara budaya, dan seni, serta memiliki makna filosofis yang mendalam.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg">
                      <img src="assets/img/Makanan khas Jawa Timur.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">
                        Makanan khas Jawa Timur
                      </h4>
                      <p>
                        Masakan Jawa Timur berasal dari provinsi Jawa Timur, Indonesia, dikenal dengan rasa pedas dan berani. Menggunakan bahan dasar seperti daging, ikan, sayuran, serta sambal pedas, dan biasanya disajikan dengan nasi.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Item -->
          </div>
        </div>
      </section>
      <!-- End Budaya Section -->

      <!-- Features Section -->
      <section id="features" class="features section">
        <div class="container">
          <ul
            class="nav nav-tabs row g-2 d-flex"
            data-aos="fade-up"
            data-aos-delay="100"
            role="tablist"
          >
            <li class="nav-item col-3" role="presentation">
              <a
                class="nav-link active show"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-1"
                aria-selected="true"
                role="tab"
              >
                <h4>Tradisi</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item col-3" role="presentation">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-2"
                aria-selected="false"
                tabindex="-1"
                role="tab"
              >
                <h4>Tarian</h4> </a
              ><!-- End tab nav item -->
            </li>
            <li class="nav-item col-3" role="presentation">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-3"
                aria-selected="false"
                tabindex="-1"
                role="tab"
              >
                <h4>Pakaian</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item col-3" role="presentation">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-4"
                aria-selected="false"
                tabindex="-1"
                role="tab"
              >
                <h4>Makanan</h4>
              </a>
            </li>
            <!-- End tab nav item -->
          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            <div
              class="tab-pane fade active show"
              id="features-tab-1"
              role="tabpanel"
            >
              <div class="row">
                <div
                  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                >
                  <h3>Tradisi</h3>
                  <p class="fst-italic">
                    Tradisi di Jawa Timur selalu penuh warna dan semangat kebersamaan. Dari upacara adat hingga perayaan hari besar, semua dijalani dengan suka cita. Bahkan, jika ada yang lupa bawa tumpeng, tetangga sebelah siap menyelamatkan situasi dengan tumpeng cadangan!
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Menjaga hubungan dengan leluhur melalui berbagai upacara dan ritual khas daerah.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Mengadakan perayaan tahunan yang menjadi ajang berkumpulnya masyarakat setempat—bukan cuma buat berdoa, tapi juga buat update gosip terbaru.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Melibatkan generasi muda dalam pelaksanaan tradisi untuk menjaga kelestariannya. Soalnya, kalau yang muda nggak ikut, siapa yang bakal nge-post di Instagram?</span
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img
                    src="assets/img/FreeImageKit.com_tradisi.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
            <!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
              <div class="row">
                <div
                  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                >
                  <h3>Tarian Tradisional</h3>
                  <p class="fst-italic">
                    Kalau ada yang bilang joget sekarang keren, coba deh lihat tarian tradisional Jawa Timur yang penuh makna dan bikin terpukau! Meski gerakannya nggak bisa buat challenge TikTok, tapi tetap juara di hati.
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Ditampilkan pada acara budaya dan festival untuk menunjukkan kekayaan seni lokal. Bahkan, yang cuma datang buat makan, akhirnya ikut terpesona juga.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Menceritakan kisah sejarah, mitologi, atau nilai-nilai kehidupan dalam setiap gerakannya. Jadi, selain nonton, bisa sambil belajar sejarah!</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Membutuhkan latihan intensif untuk menjaga keindahan dan keaslian gerakan. Tapi ya, pas latihan pasti ada aja yang salah gerakan, bikin semua ketawa.</span
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img
                    src="assets/img/FreeImageKit.com_tarian.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
            <!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
              <div class="row">
                <div
                  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                >
                  <h3>Pakaian Adat</h3>
                  <p class="fst-italic">
                    Pakaian adat Jawa Timur bikin siapa pun yang pakai jadi kelihatan lebih anggun dan berwibawa.
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Memadukan warna dan motif khas yang mencerminkan identitas daerah, bikin semua orang saling puji-puji saat acara keluarga.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Membutuhkan keahlian khusus dalam pembuatan kain dan bordir yang kaya detail. Tapi, kalau nggak hati-hati, bisa jadi tantangan saat nyetrika!</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Memperlihatkan status sosial dan makna tertentu dalam setiap corak dan aksesori. Soalnya, beda corak, beda cerita, tapi sama-sama bikin penampilan makin elegan.</span
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img
                    src="assets/img/FreeImageKit.com_pakaian adat.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
            <!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
              <div class="row">
                <div
                  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                >
                  <h3>Makanan Khas</h3>
                  <p class="fst-italic">
                    Makanan khas Jawa Timur itu ibarat mantan, susah dilupakan dan selalu bikin kangen. Begitu nyicip lagi, langsung auto nostalgia!
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Menggunakan bahan-bahan lokal yang segar dan kaya rasa. Dijamin, setiap suapan bikin senyum-senyum sendiri.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Menyajikan kelezatan yang menggugah selera dengan cita rasa rempah-rempah khas. Sampai ada yang nggak sabar nunggu foto makanan, langsung sikat!</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Menjadi salah satu daya tarik wisata kuliner yang menarik pengunjung dari berbagai daerah. Yang datang buat liburan, pulangnya malah bawa oleh-oleh satu mobil penuh.</span
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img
                    src="assets/img/FreeImageKit.com_makanan.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
            <!-- End tab content item -->
          </div>
        </div>
      </section>
      <!-- /Features Section -->

      <!-- Revisi Galeri -->
      <section id="projects" class="projects section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Galeri</h2>
          <p>
            Selamat datang di galeri JawaTimurKu.
            
          </p>
        </div>
        <!-- End Section Title -->

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
                    while ($row = mysqli_fetch_assoc($result_galeri)) {
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

      <!-- Recent Blog Posts Section -->
      <section id="recent-blog-posts" class="recent-blog-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Recent Blog Posts</h2>
          <p>
            Berita yang tersedia di website JawaTimurKu.
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-5">
          <?php
      // Query untuk recent posts
      $recent_query = "SELECT * FROM tberita ORDER BY tanggal DESC LIMIT 3";
      $recent_result = mysqli_query($koneksi, $recent_query);
      if (mysqli_num_rows($recent_result) > 0) {
        while ($recent_data = mysqli_fetch_assoc($recent_result)) {
    ?>
            <div class="col-xl-4 col-md-6">
              <div
                class="post-item position-relative h-100"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <div class="post-img position-relative overflow-hidden">
                  <img
                    src="/Jawa%20Timur/Dashboard/<?= $recent_data['gambar']; ?>"
                    class="img-fluid"
                    alt=""
                  />
                  <span class="post-date"><?= date('M d, Y', strtotime($recent_data['tanggal'])); ?></span>
                </div>

                <div class="post-content d-flex flex-column">
                  <h3 class="post-title">
                  <?= $recent_data['judul_berita']; ?>
                  </h3>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-person"></i>
                      <span class="ps-2"><?= $recent_data['nama_penulis']; ?></span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-folder2"></i>
                      <span class="ps-2"><?= $recent_data['jenis_berita']; ?></span>
                    </div>
                  </div>

                  <hr />

                  <a href="detail_berita.php?id_berita=<?= $recent_data['id_berita']; ?>" class="readmore stretched-link"
                    ><span>Read More</span><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <?php
          }
      } else {
          echo '<p>No recent posts found.</p>';
      }
      ?>
            <!-- End post item -->
          </div>
        </div>
      </section>
      <!-- /Recent Blog Posts Section -->
    </main>

<!--panggil file footer-->
<?php include "footer.php"; ?>