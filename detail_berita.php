<?php
// Menyertakan koneksi database
include('koneksi.php');

// Mengambil ID berita dari URL
$id_berita = isset($_GET['id_berita']) ? $_GET['id_berita'] : 0;

// Query untuk mengambil data berita berdasarkan ID
$query = "SELECT * FROM tberita WHERE id_berita = '$id_berita'";
$result = mysqli_query($koneksi, $query);

// Mengecek apakah data ditemukan
$data = mysqli_fetch_assoc($result);
if (!$data) {
    echo "Berita tidak ditemukan.";
    exit;
}

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Koneksi database gagal: " . $e->getMessage());
}

// ID berita (bisa dinamis, misalnya dari URL)
$id_berita = isset($_GET['id_berita']) ? intval($_GET['id_berita']) : 0;

// Ambil data komentar berdasarkan ID berita
$komentar = [];
try {
  $query = "SELECT nama, email, komen, created_at FROM tkomen WHERE id_berita = :id_berita ORDER BY created_at ASC";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':id_berita', $id_berita, PDO::PARAM_INT);
  $stmt->execute();
  $komentar = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error saat mengambil komentar: " . $e->getMessage();
}

// Proses form submit
$success_message = ""; // Variabel untuk pesan berhasil
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = $koneksi->real_escape_string($_POST['nama']);
                $email = $koneksi->real_escape_string($_POST['email']);
                $komen = $koneksi->real_escape_string($_POST['komen']);
                $id_berita = intval($_POST['id_berita']); // Pastikan ID berita dikirim

                $sql = "INSERT INTO tkomen (nama, email, komen, id_berita) VALUES ('$nama', '$email', '$komen', $id_berita)";
                $result = $koneksi->query($sql);

                if ($result) {
                  // Redirect untuk mencegah re-submit saat refresh
                  header("Location: " . $_SERVER['PHP_SELF'] . "?id_berita=$id_berita&success=1");
                  exit();
              } else {
                  $success_message = "Terjadi kesalahan, komentar tidak dapat ditambahkan.";
              }
            }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Blog Details</title>
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

  <body class="blog-details-page">
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
          <h1>Blog Details</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li class="current">Blog Details</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
              <div class="container">
                <article class="article">
                  <div class="post-img">
                    <img
                      src="/Jawa%20Timur/Dashboard/<?= $data['gambar']; ?>"
                      alt=""
                      class="img-fluid"
                    />
                  </div>

                  <h2 class="title"><?= $data['judul_berita']; ?></h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center">
                        <i class="bi bi-person"></i>
                        <span><?= $data['nama_penulis']; ?></span>
                      </li>
                      <li class="d-flex align-items-center">
                        <i class="bi bi-clock"></i>
                        <time datetime="<?= $data['tanggal']; ?>">
                                            <?= date('F d, Y', strtotime($data['tanggal'])); ?>
                        </time>
                      </li>
                      <li class="d-flex align-items-center">
                        <i class="bi bi-chat-dots"></i>
                        <a href=""><?php echo count($komentar); ?> Comments</a>
                      </li>
                    </ul>
                  </div>
                  <!-- End meta top -->

                  <div class="content">
                    <p><?= $data['paragraf_1']; ?></p>
                    <p><?= $data['paragraf_2']; ?></p>
                    <p><?= $data['paragraf_3']; ?></p>
                    <p><?= $data['paragraf_4']; ?></p>
                  </div>
                  <!-- End post content -->

                  <div class="meta-bottom">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                      <li><a href="#"><?= $data['jenis_berita']; ?></a></li>
                    </ul>
                  </div>
                  <!-- End meta bottom -->
                </article>
              </div>
            </section>
            <!-- /Blog Details Section -->

            <!-- Blog Comments Section -->
            <section id="blog-comments" class="blog-comments section">
              <div class="container">
                <h4 class="comments-count"><?php echo count($komentar); ?> Comments</h4>

                <?php if (!empty($komentar)): ?>
    <?php foreach ($komentar as $komen): ?>
        <div id="comment-1" class="comment"> 
            <div class="d-flex">
                <div>
                    <h5>
                        <?php echo htmlspecialchars($komen['nama']); ?>
                    </h5>
                    <time datetime="<?php echo htmlspecialchars($komen['created_at']); ?>">
                        <?php echo date("d M, Y", strtotime($komen['created_at'])); ?>
                    </time>
                    <p>
                        <?php echo htmlspecialchars($komen['komen']); ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Belum ada komentar.</p>
<?php endif; ?>
                <!-- End comment #1 -->
              </div>
            </section>
            <!-- /Blog Comments Section -->

            <!-- Comment Form Section -->
            <section id="comment-form" class="comment-form section">
              <div class="container">
                        <!-- Menampilkan pesan berhasil jika ada parameter success -->
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="alert alert-success">
                Komentar Anda berhasil ditambahkan!
            </div>
        <?php endif; ?>
              <form id="commentForm" method="POST" action="">
                        <h4>Post Comment</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <input type="hidden" name="id_berita" value="<?php echo htmlspecialchars($id_berita); ?>" />
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input
                        name="nama"
                        type="text"
                        class="form-control"
                        placeholder="Your Name*"
                        required
                      />
                    </div>
                    <div class="col-md-6 form-group">
                      <input
                        name="email"
                        type="email"
                        class="form-control"
                        placeholder="Your Email*"
                        required
                      />
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col form-group">
                      <textarea
                        name="komen"
                        class="form-control"
                        placeholder="Your Comment"
                        required
                      ></textarea>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Post Comment
                    </button>
                  </div>
                </form>
              </div>
            </section>
            <!-- /Comment Form Section -->
          </div>

          <div class="col-lg-4 sidebar">
            <div class="widgets-container">
              <!-- Recent Posts Widget -->
              <div class="recent-posts-widget widget-item">
                <h3 class="widget-title">Recent Posts</h3>
                <?php
      // Query untuk recent posts
      $recent_query = "SELECT * FROM tberita WHERE id_berita != '$id_berita' ORDER BY tanggal DESC LIMIT 5";
      $recent_result = mysqli_query($koneksi, $recent_query);
      if (mysqli_num_rows($recent_result) > 0) {
        while ($recent_data = mysqli_fetch_assoc($recent_result)) {
    ?>

                <div class="post-item">
                  <img
                    src="/Jawa%20Timur/Dashboard/<?= $recent_data['gambar']; ?>"
                    alt=""
                    class="flex-shrink-0"
                  />
                  <div>
                    <h4>
                      <a href="detail_berita.php?id_berita=<?= $recent_data['id_berita']; ?>">
                <?= $recent_data['judul_berita']; ?></a
                      >
                    </h4>
                    <time datetime="<?= $recent_data['tanggal']; ?>">
              <?= date('M d, Y', strtotime($recent_data['tanggal'])); ?></time>
                  </div>
                </div>
                <?php
          }
      } else {
          echo '<p>No recent posts found.</p>';
      }
      ?>
                <!-- End recent post item-->
              </div>
              <!--/Recent Posts Widget -->
          </div>
        </div>
      </div>
    </main>

<!--panggil file footer-->
<?php include "footer.php"; ?>