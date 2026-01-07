-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2025 pada 21.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwebsite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabout_us`
--

CREATE TABLE `tabout_us` (
  `id_about` int(3) NOT NULL,
  `judul_about` text NOT NULL,
  `paragraf_pertama` text NOT NULL,
  `poin_1` text NOT NULL,
  `poin_2` text NOT NULL,
  `poin_3` text NOT NULL,
  `paragraf_terakhir` text NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `gambar_about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabout_us`
--

INSERT INTO `tabout_us` (`id_about`, `judul_about`, `paragraf_pertama`, `poin_1`, `poin_2`, `poin_3`, `paragraf_terakhir`, `website_url`, `gambar_about`) VALUES
(1, 'Profil', 'JawaTimurKu adalah sistem informasi yang berisikan tentang kekayaan budaya dan berita yang ada di wilayah Jawa Timur. Sistem ini dibuat bertujuan untuk menambah pengetahuan masyarakat tentang isi budaya yang ada di Jawa Timur. JawaTimurKu adalah salah satu bentuk implementasi yang dibuat oleh Mahasiswa Sistem Informasi Universitas Negeri Surabaya (UNESA) dalam melakukan pengembangan budaya Jawa Timur. ', 'Tujuan Utama: Menjadi sumber informasi terpercaya tentang kebudayaan, berita, dan kekayaan alam di Jawa Timur.', 'Misi Kami: Mengedukasi masyarakat dan generasi muda agar lebih mengenal, mencintai, dan melestarikan budaya lokal melalui platform digital yang mudah diakses.', 'Visi ke Depan: Membangun komunitas digital yang aktif dan peduli terhadap pelestarian budaya Jawa Timur.', 'Dengan semangat menjaga dan memperkenalkan budaya lokal, JawaTimurKu hadir sebagai platform yang tidak hanya memberikan informasi, tetapi juga mengajak masyarakat untuk berpartisipasi aktif dalam melestarikan kekayaan budaya dan sejarah Jawa Timur. Melalui kolaborasi dengan berbagai pihak, termasuk pemerintah, komunitas, dan generasi muda, JawaTimurKu berharap dapat menciptakan ekosistem digital yang berkelanjutan untuk menjaga identitas budaya kita.', 'https://youtu.be/LaZybpTNbAw', 'uploads/about_us/Budaya Jawa Timur.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tadmin`
--

CREATE TABLE `tadmin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `nomin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tadmin`
--

INSERT INTO `tadmin` (`id_admin`, `email`, `password`, `username`, `nomin`) VALUES
(1, 'devina@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Devina', '08573656723'),
(2, 'asnia@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Asnia', '085765355243');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tberita`
--

CREATE TABLE `tberita` (
  `id_berita` int(3) NOT NULL,
  `nama_penulis` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_berita` varchar(128) NOT NULL,
  `judul_berita` text NOT NULL,
  `paragraf_1` text NOT NULL,
  `paragraf_2` text NOT NULL,
  `paragraf_3` text NOT NULL,
  `paragraf_4` text NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tberita`
--

INSERT INTO `tberita` (`id_berita`, `nama_penulis`, `tanggal`, `jenis_berita`, `judul_berita`, `paragraf_1`, `paragraf_2`, `paragraf_3`, `paragraf_4`, `gambar`) VALUES
(1, 'Asnia', '2024-04-28', 'Tarian', 'Ritual Tarian Mistis Seblang Olehsari Banyuwangi', 'Tari mistis Seblang Olehsari merupakan tradisi Banyuwangi yang memiliki daya tarik sendiri. Ratusan pengunjung selalu memadati tradisi budaya yang digelar di Desa Olehsari, Kecamatan Glagah, Banyuwangi. Ritual ini dimulai dari hari Senin (24/4/2023) hingga 7 hari kedepan.', 'Seblang merupakan tarian mistis dimana penarinya adalah perempuan. Adapun pemilihan penari ditentukan secara supranaturaloleh tetua adat setempat yang masih memiliki hubungan darah dengan leluhur seblang terdahulu. Tarian ini juga melibatkan kegiatan mistis, karena si penari akan dirasuki roh halus agar bisa menari.', 'Dalam tarian ini, seorang pawang akan mengasapi penari seblang dengan asap dupa sambil mengucapkan mantera tertentu. Pembacaan mantera bertujuan agar roh leluhur masuk ke dalam tubuh si penari. Sehingga ia dapat menari dengan mata terpejam mengikuti arahan si pawang dan irama gending. Ritual adat yang dipercayai oleh masyarakat Olehsari sebagai bersih desa dan tolak bala, yang diadakan selama 7 hari berturut-turut.', 'Penari Seblang tahun ini adalah Dwi Putri Ramadani, berusia 19 tahun dari SMK Negeri 1 Banyuwangi. Ia merupakan keturunan seblang Salwati. Tahun ini adalah tahun pertamanya menjadi seblang menggantikan Susi Susanti (21) yang telah menjadi Seblang sejak 2020.', 'uploads/berita/tari-seblang-olehsari.jpeg'),
(2, 'Asnia', '2022-02-23', 'Tradisi', 'Mengenal Yadnya Kasada Suku Tengger', 'Yadna Kasada merupakan upacara adat Suku Tengger yang digelar setiap tahun. Upacara ini dilakukan dengan melarungkan palawija, ternak, dan hasil pertanian ke kawah Gunung Bromo. Upacara adat Yadna Kasada digelar sebagai perwujudan rasa syukur kepada Sang Hyang Widi, yang merupakan manifestasi dari Batara Brahma.', 'Upacara adat ini digelar Suku Tengger setiap tanggal 15 bulan Kasada dari penanggalan tengger. Suku Tengger berasal dari turunan kalender Hindu. Jumlah hari dalam tiap bulannya antara 29-30 hari. Penanggalan Tengger berkaitan dengan pelaksanaan tradisi suku tersebut. Seluruh tradisi masyarakat Tengger dilakukan mengikuti penanggalan yang mereka buat sendiri.', 'Kalender Tengger memiliki 12 bulan dalam satu tahun. Jika diurut dari bulan pertama, yaitu Kasa, Karo, Katiga, Kapat, Kalima, Kanem, Kapitu, Kawolu, Kasangka, Kadasa, Dhesta dan Kasadha. Tetapi, setiap lima tahun sekali Suku Tengger memiliki 13 bulan, Namanya adalah bulan Pashing. Tahun yang memiliki tambahan ini bulan disebut sebagai tahun Landung. Bulan Kasada sendiri adalah bulan terakhir dalam almanak Tengger selain di tahun Landung. Sehingga Kasada termasuk sebagai bulan ke-12.', 'Upacara adat Yadnya Kasada tahun 2024 digelar pada Jumat-Sabtu (21-22 Juni 2024). Wisata Bromo di waktu ini hanya terbuka untuk masyarakat yang hendak melaksanakan Yadnya Kasada. Pada Minggu - Senin (23-24 Juni 2024) kawasan wisata Bromo juga masih tertutup untuk umum. Hanya masyarakat dan petugas yang berkepentingan untnuk membersihkan kawasan yang dibolehkan masuk.', 'uploads/berita/safeimagekit-KasadaBromo.jpeg'),
(3, 'Asnia', '2024-09-22', 'Tarian', '1.500 Anak Menari Remo Iringi Kirab Sawunggaling Babat Suroboyo', 'Sebanyak 1.500 anak menarikan Tari Remo dalam Kirab Sawunggaling di Jalan Raya Lidah Wetan, Lakarsantri, Surabaya. Tari remo tersebut mengiringi perjalanan ribuan orang yang berjalan menuju Balai Kota Surabaya dalam rangka sedekah bumi Kelurahan Lidah Wetan.', 'Ribuan anak-anak tersebut memakai pakaian putih, merah, dan hitam menari Remo di sepanjang Jalan Raya Lidah Wetan. Beberapa di antaranya memakai busana prajurit gaya Surabayan.\r\n\r\nSetelah memperagakan tari Remo, para peserta kirab berjalan dari kelurahan menuju Balai Kota Surabaya. Para peserta juga memakai bermacam-macam pakaian adat hingga membawa ayam jago sebagai simbol dari Sawunggaling.', 'Ketua LPMK Lidah Wetan Muhammad Andi mengatakan, tarian Remo tersebut merupakan rangkaian dalam acara kirab Sawunggaling Babat Alas Suroboyo. Mereka merupakan siswa dan siswi SMPN 28 Surabaya. \"Seperti tahun kemarin, anak-anak sangat antusias menari Remo dalam acara ini. Ada total 1.500 anak yang ikut tari Remo untuk mengiringi keberangkatan kirab,\" kata Andi, Minggu (22/9/2024).', 'Andi menambahkan meski di tengah terik matahari yang menyengat, anak-anak tersebut tetap semangat membawakan tari Remo. Tentunya sesuai semangat Sawunggaling dalam memperjuangkan Surabaya. \"Yang terpenting mereka semua mewarisi semangat Sawunggaling,\" pungkasnya.', 'uploads/berita/safeimagekit-1500-penari-remo-anak-meriahkan-kirab-sawunggaling_169.jpeg'),
(4, 'Devina', '2024-09-22', 'Tradisi', 'Kirab Sawunggaling Babat Suroboyo, Ribuan Orang Jalan Kaki ke Balai Kota', 'Ribuan orang berjalan dari Kelurahan Lidah Wetan, Lakarsantri, menuju Balai Kota Surabaya. Aksi jalan kaki yang diikuti lebih dari 1.500 orang ini merupakan kegiatan sedekah bumi Kelurahan Lidah Wetan.', 'Kegiatan bertema Sembrani Bumi Nusantara Babat Alas Suroboyo ini digelar setiap tahun untuk merayakan sedekah bumi. Sebelum berangkat warga menggelar teater singkat yang menceritakan Sawunggaling meminta restu kepada ibunya Dewi Sangkra untuk menuju Kedaton Surabaya. Setelah mendapat restu, Sawunggaling atau Joko Berek berangkat dengan membawa ayam jago menuju balai kota.', 'Warga berjalan kaki menggunakan pakaian adat khas Jawa Timur dengan membawa beberapa peralatan seperti busur panah. Tak lupa, mereka membawa ayam jago yang menjadi simbol Raden Sawunggaling saat menuju Kedaton Surabaya kala itu. Ketua LKMK Lidah Wetan Muhammad Andi mengatakan kirab tapak tilas Sawunggaling babat alas Suroboyo tersebut sudah digelar kedua kalinya. Kegiatan tersebut merupakan rangkaian dalam tradisi dalam sedekah bumi Kelurahan Lidah Wetan. \"Ini sudah tahun kedua. Tahun kemarin, Sawunggaling tagih Janji, sekarang kita ambil yang babat alas Suroboyo,\" kata Andi, Minggu (22/9/2024).', 'Andi menjelaskan dalam kegiatan tersebut, panitia ingin menunjukkan bahwa Raden Sawunggaling pernah berjalan dari Lidah Wetan, yang dulunya Donowati menuju Kedaton Tumenggung Jayangrana. Namun dalam kirab tersebut warga Lidah Wetan berjalan kaki untuk menemui Walikota Surabaya Eri Cahyadi. \"Kami nanti akan menemui wali kota. Yang rencananya walikota akan menjadi Sawunggaling untuk bertemu Jayangrana,\" pungkasnya singkat.', 'uploads/berita/safeimagekit-ribuan-warga-berangkat-dari-lidah-wetan-menuju-balai-kota-surabaya-dengan-pakaian-adat_169.jpeg'),
(5, 'Devina', '2024-09-22', 'Tradisi', 'Sabung Ayam di Pertigaan Mastrip Surabaya Iringi Kirab Sawunggaling', 'Ribuan warga Kelurahan Lidah Wetan, Lakarsantri Surabaya berjalan kaki dari Kelurahan Lidah Wetan menuju Balai Kota Surabaya. Di tengah perjalanan mereka menggelar aksi teatrikal singkat.', 'Beberapa warga menggelar pertarungan ayam di tengah pertigaan Jalan Raya Mastrip Wiyung. Mereka beradu ayam jago yang memperagakan Sawunggaling melawan pemuda Joyoboyo. Dalam teatrikal adu ayam tersebut, dua orang yang membawa ayam dari Joyoboyo mencegah Joko Berek menuju balai kota. Mereka pun sempat beradu mulut hingga akhirnya menyelesaikan dengan pertarungan ayam.', 'Muhammad Andi, Ketua LPMK Lidah Wetan mengatakan teatrikal tersebut merupakan salah satu adegan yang memperagakan saat Sawunggaling dihadang oleh pemuda asal Joyoboyo saat menuju Kedaton. \"Itu merupakan sepenggal cerita Sawunggaling yang sempat dihadang pemuda asal Joyoboyo saat menuju balai kota. Makanya kita peragakan,\" kara Andi, Minggu (22/9/2024).', 'Namun, setelah ayam Sawunggaling menang, para pemuda Joyoboyo pun ikut mengantarnya ke Balai Kota. Tak hanya itu di sekitar terminal Joyoboyo, Sawunggaling juga dihadang kembali. \"Pada intinya kita ingin menunjukan kepada masyarakat Surabaya khususnya bahwasannya ada Joko Berek atau Sawunggaling yang pernah babat alas Suroboyo ketika mencari ayahnya di Kedaton Surabaya. Budaya ini jangan sampai tertimpa oleh zaman, kita ingin mengenalkan sejarah dan Budaya yang selama ini sudah dijalankan Warga Lidah Wetan,\" pungkasnya.', 'uploads/berita/safeimagekit-sabung-ayam-sawunggaling.jpeg'),
(6, 'Devina', '2024-09-29', 'Tradisi', 'Warga Berebut Gunungan 1.000 Hasil Bumi-Tumpeng di Festival Ketan', 'Warga Desa Darungan, Kecamatan Yosowilangun, Lumajang, menggelar Festival Ketan. Dalam acara tersebut, ratusan warga langsung berebut 3 gunungan hasil bumi berupa sayur mayur dan buah buahan.', 'Selain itu, warga juga berebut 1.000 tumpeng ketan berisi olahan makanan berbahan dasar beras ketan. Seperti lepet, rengginang, lemper, enten enten, rangin dan onde onde. Dalam waktu singkat, 3 gunungan hasil bumi serta 1.000 tumpeng ketan ini langsung ludes diperebutkan warga yang memadati lokasi. Meski saling rebutan dan berdesak desakan dengan warga lainnya, warga mengaku senang bisa mendapat gunungan hasil bumi dan tumpeng ketan. \"Tadi dapat kue dapat sayuran dan buah buahan. Meskipun tadi berdesakan dengan lainnya tapi perasaannya senang,\" ujar salah satu warga Sri Bawon, Minggu (29/9/2024).', 'Grebeg gunungan hasil bumi dan 1.000 tumpeng ketan tersebut merupakan peringatan hari jadi Desa Darungan yang ke-37. Selain itu bentuk ungkapan rasa syukur atas hasil panen. Selama ini, Desa Darungan merupakan sentra penghasil beras ketan di kabupaten Lumajang.', '\"Festival ketan ini digelar untuk memperingati hari jadi Desa Darungan serta sebagai ungkapan rasa sayukur atas hasil panen,\" ujar Ketua Panitia Festival Ketan Adi Sucipto di lokasi. Sebelum diperebutkan, gunungan hasil bumi berupa sayuran dan buah buahan serta 1.000 tumpeng ketan tersebut diarak keliling kampung dari Dusun Rekesan hingga berakhir di Balai Desa Darungan.', 'uploads/berita/safeimagekit-festival-ketan-di-lumajang-1_169.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tgambar`
--

CREATE TABLE `tgambar` (
  `id_gambar` int(3) NOT NULL,
  `jenis_gambar` varchar(128) NOT NULL,
  `judul_gambar` varchar(255) NOT NULL,
  `paragraf_1` text NOT NULL,
  `paragraf_2` text NOT NULL,
  `paragraf_3` text NOT NULL,
  `paragraf_4` text NOT NULL,
  `gambar_1` varchar(128) NOT NULL,
  `gambar_2` varchar(128) NOT NULL,
  `gambar_3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tgambar`
--

INSERT INTO `tgambar` (`id_gambar`, `jenis_gambar`, `judul_gambar`, `paragraf_1`, `paragraf_2`, `paragraf_3`, `paragraf_4`, `gambar_1`, `gambar_2`, `gambar_3`) VALUES
(1, 'Tradisi', 'Larung Sembonyo', 'Larung Sembonyo adalah budaya sedekah laut yang telah dilakukan secara turun-temurun oleh nenek moyang dari masyarakat lokal nelayan Prigi terwujud dalam upacara adat. Hal ini merupakan bentuk rasa syukur masyarakat nelayan Prigi akan hasil laut yang telah diperoleh.', 'Upacara ini juga sebagai permohonan akan keselamatan masyarakat nelayan Prigi ketika mencari ikan di laut. Kebiasaan ini telah dilakukan sejak lama dan menjadi bagian kebudayaan masyarakat Kabupaten Trenggalek, terutama yang tinggal di pesisir pantai Prigi.', 'Upacara Larung Sembonyo ini lahir dari cerita tradisional mengenai peristiwa gaib ketika seseorang Tumenggung dan pasukannya melakukan perluasan wilayah atau babad alas pada daerah tersebut. Peristiwa tersebut menjadi asal mula adanya mitos yang berkembang oleh masyarakat pesisir pantai Prigi. Warga pesisir pantai Prigi mempercayai tradisi ini diselenggarakan dalam penanggalan Jawa ketika Senin Kliwon, bulan Selo.', 'Upacara Larung Sembonyo ini biasanya dilakukan oleh para nelayan dan petani yang bercocok tanam atau melaut di daerah Prigi. Upacara ini sebagai rasa hormat kepada leluhur yang telah membuka wilayah tersebut sebagai pemukiman.', 'uploads/gallery/larung sembonyo.JPG', 'uploads/gallery/Larung sembonyo1.png', 'uploads/gallery/larung-sembonyo.jpg'),
(3, 'Tarian', 'Reog', 'Reog adalah salah satu kesenian tradisional yang berasal dari Ponorogo, Jawa Timur. Tarian ini dikenal dengan penampilannya yang megah dan dramatis, menampilkan sosok Barong, yaitu karakter raksasa yang terbuat dari daun-daun dan bulu hewan. Reog biasanya dipertunjukkan dalam berbagai acara, seperti perayaan, upacara adat, dan festival, dan menjadi simbol kebanggaan masyarakat Ponorogo.', 'Dalam pertunjukan Reog, terdapat beberapa elemen penting, antara lain penari, musik, dan cerita. Penari yang mengenakan kostum berwarna-warni dan beragam atribut memainkan peran penting dalam menyampaikan cerita yang berkaitan dengan mitologi dan sejarah daerah tersebut. Musik gamelan yang mengiringi tariannya menambah suasana yang meriah dan enerjik. Semua elemen ini bekerja sama untuk menciptakan pengalaman yang mengesankan bagi penonton.', 'Salah satu daya tarik utama dari Reog adalah kemampuan penari dalam mengangkat Barong yang berat, biasanya mencapai puluhan kilogram, dengan gigi dan rahangnya. Ini adalah demonstrasi ketangkasan dan kekuatan fisik yang mengagumkan. Penari biasanya melakukan gerakan yang lincah dan dramatis, menggambarkan konflik antara baik dan jahat, yang menjadi inti cerita dalam pertunjukan tersebut.', 'Reog juga memiliki nilai budaya yang tinggi, melambangkan kebersamaan dan kekuatan masyarakat Ponorogo. Tarian ini mengajarkan pentingnya menghormati tradisi dan menjaga warisan budaya. Dengan semakin banyaknya pertunjukan Reog di berbagai daerah dan even internasional, kesenian ini semakin dikenal luas dan menjadi salah satu ikon budaya Indonesia yang patut dilestarikan.', 'uploads/gallery/tari reog (1).jpg', 'uploads/gallery/r3.png', 'uploads/gallery/r2.png'),
(7, 'Makanan', 'Rawon', 'Rawon adalah salah satu masakan khas dari Jawa Timur yang terkenal dengan kuahnya yang hitam pekat dan rasa yang kaya. Hidangan ini terbuat dari daging sapi yang dimasak dengan bumbu rempah yang khas, terutama menggunakan kluwak, sejenis biji yang memberikan warna hitam serta rasa unik yang mendalam. Selain daging, rawon biasanya disajikan dengan irisan daun bawang, telur asin, dan sambal sebagai pelengkap, memberikan keseimbangan rasa yang menyenangkan.', 'Proses pembuatan rawon dimulai dengan merebus daging sapi hingga empuk. Bumbu halus yang terdiri dari bawang merah, bawang putih, jahe, lengkuas, dan tentu saja kluwak, diulek dan kemudian ditumis hingga harum. Daging yang telah direbus ditambahkan ke dalam tumisan bumbu, kemudian semuanya dimasak bersama air hingga mendidih dan bumbu meresap ke dalam daging. Warna kuah yang hitam pekat adalah ciri khas rawon yang membuatnya mudah dikenali.', 'Rawon seringkali disajikan dengan nasi putih, dan biasanya dihidangkan bersama pelengkap seperti tauge segar, kerupuk, dan sambal. Komponen-komponen ini menambah cita rasa dan tekstur yang berbeda dalam satu suapan. Kehangatan kuahnya yang kaya dan rempah menjadikan rawon sangat cocok disantap saat cuaca dingin atau saat ingin menikmati hidangan yang mengenyangkan.', 'Selain menjadi makanan sehari-hari, rawon juga sering disajikan dalam acara-acara tertentu, menunjukkan bahwa hidangan ini memiliki tempat istimewa dalam budaya kuliner Jawa Timur. Keberadaannya tidak hanya menjadi simbol kekayaan kuliner daerah, tetapi juga menjadi daya tarik bagi wisatawan yang ingin merasakan kelezatan masakan Indonesia. Rawon pun telah menjadi salah satu menu yang banyak dicari di restoran-restoran yang menyajikan masakan tradisional, menjadikannya salah satu ikon kuliner Indonesia yang patut dicoba.', 'uploads/gallery/rawon (1).jpg', 'uploads/gallery/rawon2.png', 'uploads/gallery/rawon3.png'),
(8, 'Pakaian', 'Baju Gothil', 'Baju gothil adalah pakaian laki-laki Ponorogo, Jawa Timur. Baju gothil adalah baju yang sangat sederhana, berwarna hitam polos dan memiliki bentuk khas Ponorogo. Baju gothil berbentuk longgar dan lengan yang longgar juga. Baju ini dikenakan dengan celana yang gombrong yang disebut dengan celana kombor atau komprang.', 'Baju Ghotil merupakan kaos polos berwarna hitam dan berlengan panjang. Kaos ini memiliki ukuran yang longgar jika dipakai. Sederhana memang. Kaos ini seringkali dipakai oleh pria warok Ponorogo. Pakaian ini juga bisa Grameds temukan saat menonton pertunjukan Reog Ponorogo.', 'Sementara itu, Celana Komprang merupakan pasangan dari Baju Gothil. Ukurannya yang besar dan longgar saat dipakai seolah memberi ruang pada penggunanya untuk menikmati ruang gerak. Bentuk celana ini cukup unik, ditambah lagi celana ini dijahit dengan teknik khusus.', 'Baju Gothil merupakan pakaian adat Jawa Timur yang mencerminkan kemewahan dan keanggunan. Dikenal dengan hiasan bordir yang rumit dan warna yang cerah, pakaian ini sering dipakai pada acara resmi atau upacara adat penting. Pakaian ini menjadi simbol dari status dan keindahan dalam budaya Jawa Timur.', 'uploads/gallery/baju gothil (1).jpg', 'uploads/gallery/gothil3.png', 'uploads/gallery/gothil1.png'),
(9, 'Tradisi', 'Selamatan Ketupat dan Serabi', 'Selamatan Ketupat dan Serabi yang dilaksanakan ini bertujuan untuk memohon kepada Tuhan Yang Maha Esa agar diberikan kesehatan dan dihindarkan dari wabah-wabah penyakit yang mematikan.', 'Tradisi ini sering dilakukan pada hari ke-7 setelah Idul Fitri, yang dikenal sebagai Hari Ketupat, meskipun juga bisa diadakan pada waktu lain sesuai kebutuhan.', 'Acara biasanya diawali dengan doa bersama sebagai ungkapan syukur. Setelah doa, makanan disajikan dan dinikmati bersama-sama oleh keluarga dan tetangga. Ini menjadi momen berkumpul yang mempererat silaturahmi.', 'Selamatan ini bukan hanya tentang makanan, tetapi juga sebagai simbol rasa syukur atas rezeki dan keberkahan. Ini adalah kesempatan untuk mempererat hubungan sosial di antara anggota masyarakat.', 'uploads/gallery/selamatan (1).jpg', 'uploads/gallery/KS1.png', 'uploads/gallery/KS3.png'),
(10, 'Tarian', 'Remo', 'Tarian Remo adalah salah satu kesenian tradisional yang berasal dari Jawa Timur, khususnya di daerah Surabaya. Tarian ini biasanya ditampilkan oleh penari pria yang mengenakan kostum khas, dengan ikat kepala dan pakaian berwarna cerah, mencerminkan semangat serta karakter kuat. Remo sering diiringi oleh alat musik gamelan, yang memberikan ritme dan nuansa yang enerjik. Tarian ini dikenal sebagai tarian penyambutan atau pengantar, yang sering dipertunjukkan dalam berbagai acara, termasuk upacara adat dan perayaan.', 'Gerakan dalam Tarian Remo sangat dinamis dan penuh energi. Penari menunjukkan keahlian dan ketangkasan melalui gerakan lincah, serta ekspresi wajah yang bersemangat. Tarian ini menggambarkan kebanggaan dan keberanian, sering kali disertai dengan permainan kipas atau atribut lain yang menambah keindahan penampilan. Setiap gerakan memiliki makna tersendiri, mencerminkan karakter dan nilai-nilai budaya yang ingin disampaikan kepada penonton.', 'Dalam pertunjukan Tarian Remo, ada elemen interaksi antara penari dan penonton. Penari sering kali berusaha melibatkan penonton dengan ajakan untuk bertepuk tangan atau bersorak, menciptakan suasana yang hidup dan penuh semangat. Selain itu, improvisasi dalam gerakan juga sering dilakukan, memberikan nuansa yang segar dan berbeda di setiap pertunjukan. Hal ini membuat Tarian Remo menjadi salah satu pertunjukan yang sangat dinamis dan menghibur.', 'Tarian Remo tidak hanya menjadi hiburan, tetapi juga merupakan bentuk ekspresi budaya yang penting. Melalui tarian ini, penari mengkomunikasikan cerita dan nilai-nilai lokal yang melekat dalam masyarakat Jawa Timur. Selain sebagai sarana pelestarian budaya, Tarian Remo juga berfungsi sebagai jembatan untuk mengenalkan tradisi kepada generasi muda dan masyarakat luas, sehingga warisan budaya ini tetap hidup dan relevan di era modern.', 'uploads/gallery/tari remo (1).jpeg', 'uploads/gallery/r1.png', 'uploads/gallery/r2.png'),
(11, 'Pakaian', 'Baju Pesa\'an', 'Pesa\'an adalah baju adat khas dari Madura, provinsi Jawa Timur. Baju Pesa\'an menjadi salah satu simbol utama yang menjadi wakil budaya baju adat Jawa Timur di Nusantara. Baju Pesa\'an ini bisa digunakan pada acara-acara penting masyarakat Madura seperti acara upacara pernikahan ataupun acara penting lainnya.', 'Pakaian adat Madura ini terdiri atas busana wanita dan pria. Bagi para pria terdiri atas celana longgar dan kaos bergaris merah putih yang cukup sederhana. Sedangkan untuk para wanita menggunakan kebaya dengan warna cerah yang mencolok sebagai pasangan dari busana pria. Penggunaan warna yang cerah dan terang yang kuat pada pakaian adat ini mencerminkan karakter masyarakat Madura dikenal akan keberaniannya, sikap tegas, tidak kenal ragu, serta bersikap terbuka dalam menyampaikan isi pikirannya kepada orang lain.', 'Baju Pesa\'an ini cukup dikenal di seluruh penjuru Indonesia. Hal ini dikarenakan pakaian Pesa\'an ini cukup mencolok dalam hal ciri khas yang dimiliki sehingga membuatnya mudah dibedakan dengan baju adat daerah lain.', 'Biasanya pakaian ini dilengkapi dengan penutup kepala sederhana yang dibuat dari bahan kain yang disebut dengan odheng, sarung kotak-kotak dan sabuk katemang dari Ponorogo, tropa atau alas kaki, serta senjata tradisional Madura yang berupa celurit.', 'uploads/gallery/baju pm (1).jpg', 'uploads/gallery/pm1.png', 'uploads/gallery/pm3.png'),
(12, 'Makanan', 'Soto Lamongan', 'Soto Lamongan adalah salah satu hidangan kuah khas dari Jawa Timur yang sangat populer, terutama di daerah Lamongan. Hidangan ini dikenal dengan kuahnya yang bening dan kaya akan rasa, terbuat dari kaldu ayam yang segar. Ciri khas Soto Lamongan adalah penggunaan bumbu rempah yang melimpah, termasuk kunyit, jahe, dan daun jeruk, yang memberikan aroma harum serta rasa yang menggugah selera.', 'Daging ayam yang digunakan dalam Soto Lamongan biasanya dimasak hingga empuk dan disuwir-suwir. Kuahnya yang bening dihasilkan dari proses perebusan yang tepat, sehingga kaldu menjadi jernih namun tetap kaya rasa. Di samping itu, Soto Lamongan juga biasanya dilengkapi dengan komponen lain seperti mie soun, telur rebus, dan sayuran seperti taoge dan daun bawang. Penampilan yang berwarna-warni dan beragam ini membuat hidangan ini semakin menggoda.', 'Salah satu pelengkap yang tak boleh ketinggalan adalah sambal dan kerupuk, yang memberikan tekstur dan rasa tambahan saat menyantap Soto Lamongan. Sambal yang pedas menjadi pendamping yang sempurna, meningkatkan cita rasa hidangan ini. Selain itu, kerupuk yang renyah memberikan kontras yang menarik saat dikunyah bersama kuah soto yang hangat dan gurih.', 'Soto Lamongan bukan hanya sekadar makanan, tetapi juga bagian dari budaya kuliner masyarakat setempat. Hidangan ini sering dinikmati dalam suasana santai bersama keluarga atau teman, serta menjadi pilihan yang populer untuk sarapan atau makan siang. Dengan kombinasi rasa yang kaya dan presentasi yang menarik, Soto Lamongan menjadi salah satu ikon kuliner yang layak dicoba oleh siapa saja yang mengunjungi Jawa Timur.', 'uploads/gallery/soto lamongan (1).jpg', 'uploads/gallery/s1.png', 'uploads/gallery/s3.png'),
(13, 'Tradisi', 'Rebo Wekasan', 'Rebo Wekasan dianggap sebagai hari datangnya sumber penyakit dan marabahaya. Rata-rata, upacara yang dilaksanakan pada Rabu Wekasan adalah bersifat tolak bala. Tradisi ini merupakan perpaduan nilai-nilai agama Islam dengan tradisi Jawa.', 'Beberapa aktivitas dilakukan selama hari ini, antara lain doa bersama, berbagi makanan baik dalam bentuk gunungan maupun selamatan, sampai sholat sunah lidaf’il bala (tolak bala) bersama. Namun, di beberapa kalangan NU, sholat sunah lidaf’il bala ini mulai mengalami perubahan dengan disarankan tidak lagi diniatkan untuk memperingati Rebo wekasan, tetapi sebagai salat sunah sebagaimana salat lainnya saja.', 'Sejarah Rebo Wekasan berawal dari masa penyebaran Islam di Indonesia. Masyarakat Jawa meyakini hari Rabu terakhir pada Bulan Safar merupakan hari naas dari kepercayaan lama kaum Yahudi.', 'Keistimewaan hari ini adalah karena inilah satu satunya hari yang tidak tergantung pada hari pasaran dan neptu untuk melakukan suatu upacara adat. Catatan dalam adat Kejawen hari pasaran dan neptu adalah sangat penting demi keselamatan dan berkah dari acara. Konon ini adalah hari datangnya 320.000 sumber penyakit dan marabahaya 20.000 bencana. Maka rata-rata upacara yang dilaksanakan pada hari ini adalah bersifat tolak bala.', 'uploads/gallery/rabu wekasan-1.jpg', 'uploads/gallery/rw2.png', 'uploads/gallery/rw3.png'),
(14, 'Tarian', 'Jaranan Buto', 'Tarian Jaranan Buto adalah salah satu bentuk kesenian tradisional yang berasal dari Jawa Timur, khususnya di daerah Blitar dan sekitarnya. Tarian ini mengisahkan tentang sosok buto atau raksasa yang memiliki kekuatan dan kebijaksanaan. Jaranan Buto biasanya ditampilkan dalam acara-acara budaya, perayaan, atau upacara tertentu, dan menjadi daya tarik tersendiri bagi penonton. Kostum yang digunakan dalam tarian ini sering kali megah dan mencolok, menciptakan suasana yang dramatis.', 'Salah satu elemen yang paling mencolok dari Jaranan Buto adalah penggunaan topeng raksasa yang dikenakan oleh penari. Topeng ini biasanya terbuat dari bahan kayu dan dihias dengan warna-warna cerah serta ornamen yang kompleks. Penari yang mengenakan topeng ini tidak hanya bergerak dengan anggun, tetapi juga menggambarkan karakter raksasa dengan ekspresi wajah yang mendalam, sehingga menciptakan nuansa yang kuat dalam penampilan. Selain itu, gerakan tarian yang dinamis dan energik menambah daya tarik visual.', 'Tarian ini sering diiringi dengan gamelan tradisional dan alat musik khas seperti kendang dan gong. Irama musik yang menggebu-gebu memacu semangat penari dan menciptakan atmosfer yang penuh energi. Selain itu, ada juga elemen improvisasi dalam tarian ini, di mana penari dapat mengekspresikan kreativitas mereka melalui gerakan dan interaksi dengan penonton. Hal ini menjadikan setiap penampilan Jaranan Buto unik dan menarik.', 'Jaranan Buto bukan hanya sekadar pertunjukan seni, tetapi juga mengandung nilai-nilai budaya yang dalam. Tarian ini mengajarkan tentang kekuatan, kebijaksanaan, dan keharmonisan antara manusia dan alam. Melalui gerakan dan cerita yang disampaikan, Jaranan Buto menggambarkan kearifan lokal serta tradisi yang dijunjung tinggi oleh masyarakat Jawa Timur. Dengan demikian, tarian ini memiliki peran penting dalam melestarikan warisan budaya dan identitas daerah.', 'uploads/gallery/tari jaranan buto.jpeg', 'uploads/gallery/jb1.png', 'uploads/gallery/jb2.png'),
(15, 'Pakaian', 'Baju Mantenan', 'Baju Mantenan adalah pakaian adat khas Jawa Timur yang digunakan pada pernikahan adat Jawa Timuran. Baju ini memiliki ciri khas berupa warna hitam dengan corak merah keemasan.', 'Baju Mantenan. Dalam bahasa Jawa, manten memiliki arti pengantin. Sesuai namanya, baju ini digunakan oleh pasangan pengantin laki-laki dan perempuan. Model pakaian ini dulunya sering dipakai oleh para raja Jawa kuno.', 'Pakaian mantenan adalah busana lengkap yang terdiri dari penutup kepala dan rangkaian bunga melati. Melambangkan kesucian dan keharmonisan dalam pernikahan, pakaian ini dipakai oleh kedua mempelai pada upacara pernikahan adat Jawa Timur sebagai simbol dari awal perjalanan hidup baru yang bersama.', 'Aksesori yang digunakan bersama Baju Mantenan, antara lain Penutup kepala untuk mempelai pria, Bunga melati yang dikalungkan Sanggul panjang menjuntai hingga ke lengan untuk mempelai wanita, Sabuk emas, Kalung emas, Selendang.', 'uploads/gallery/baju mantenan (1).jpg', 'uploads/gallery/m1.png', 'uploads/gallery/m3.png'),
(16, 'Makanan', 'Satai Madura', 'Satai Madura adalah salah satu kuliner ikonik dari Jawa Timur, khususnya berasal dari pulau Madura. Hidangan ini terdiri dari potongan daging, biasanya daging sapi atau ayam, yang ditusuk menggunakan tusukan bambu dan dibakar di atas bara api. Proses pemanggangan ini memberikan cita rasa smoky yang khas, menjadikan satai Madura begitu menggugah selera. Selain daging, satai ini sering disajikan dengan lontong, nasi, atau bahkan kerupuk sebagai pelengkap.', 'Kelezatan satai Madura terletak pada bumbu marinasi yang digunakan. Daging yang telah dipotong dadu biasanya direndam dalam campuran kecap manis, bawang merah, bawang putih, dan berbagai rempah lainnya sebelum ditusuk dan dipanggang. Proses marinasi ini membuat daging semakin empuk dan beraroma kuat, sehingga setiap gigitan memberikan sensasi rasa yang kaya. Kecap manis yang kental dan manis juga menambah keunikan satai Madura, berbeda dari satai dari daerah lain.', 'Satai Madura biasanya disajikan dengan sambal kacang yang terbuat dari kacang tanah, cabai, dan bumbu lainnya. Sambal ini memberikan rasa pedas dan gurih yang sempurna, menyatu dengan daging satai yang juicy. Selain itu, irisan timun dan bawang merah sering ditambahkan sebagai pelengkap, memberikan kesegaran yang kontras dengan rasa satai yang kaya. Makanan ini sangat populer sebagai hidangan jalanan, sering dijajakan oleh pedagang kaki lima di berbagai sudut kota.', 'Tidak hanya enak, satai Madura juga memiliki makna sosial yang kuat. Hidangan ini sering dinikmati dalam suasana santai bersama keluarga atau teman, menciptakan momen kebersamaan yang hangat. Dalam beberapa acara tradisional, satai Madura menjadi salah satu menu utama yang tak boleh terlewatkan. Dengan semua keunikan dan cita rasanya, satai Madura tidak hanya menjadi simbol kuliner Madura, tetapi juga merupakan bagian penting dari warisan kuliner Indonesia yang patut dilestarikan dan diperkenalkan kepada lebih banyak orang.', 'uploads/gallery/sate madura (1).jpg', 'uploads/gallery/sate2.png', 'uploads/gallery/sate3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkomen`
--

CREATE TABLE `tkomen` (
  `id_komen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `komen` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tkomen`
--

INSERT INTO `tkomen` (`id_komen`, `nama`, `email`, `komen`, `created_at`, `id_berita`) VALUES
(25, 'lowman', 'lowman@gmail.com', 'epic', '2025-01-04', 6),
(29, 'La', 'lalala@gmail.com', 'p', '2025-01-10', 4),
(31, 'Devina', 'lalala@gmail.com', 'P', '2025-01-04', 4),
(33, 'Raya', 'Ayaya@gmail.com', 'P', '2025-01-04', 4),
(35, 'Raya', 'devinamaharani22@gmail.com', 'AASD', '2025-01-04', 4),
(36, 'Anaya', 'revan@gmail.com', 'A', '2025-01-04', 4),
(37, 'Lia', 'Lisa@gmail.com', 'A', '2025-01-04', 4),
(38, 'Lisa', 'alay@nwjns.es', 'Abcs', '2025-01-04', 4),
(39, 'Anaya', 'frasayyana@gmail.com', 'Yayaya', '2025-01-04', 4),
(40, 'Alaya', 'revan@gmail.com', 'lalala', '2025-01-04', 4),
(41, 'Raya', 'aya@gmail.com', 'Halo', '2025-01-05', 2),
(55, 'Lisa', 'lisa@gmail.com', 'Bagus', '2025-01-05', 2),
(56, 'Aya', 'aya@gmail.com', 'bagus', '2025-01-05', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkontak`
--

CREATE TABLE `tkontak` (
  `id_kontak` int(3) NOT NULL,
  `address` varchar(128) NOT NULL,
  `call_us` varchar(20) NOT NULL,
  `email_us` varchar(128) NOT NULL,
  `maps` varchar(500) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tkontak`
--

INSERT INTO `tkontak` (`id_kontak`, `address`, `call_us`, `email_us`, `maps`, `twitter`, `facebook`, `instagram`) VALUES
(1, 'Jl. Ahmad Yani, Surabaya, Jawa Timur', '+62874635420', 'jawatimur@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8508263867157!2d112.74505987431408!3d-7.257812871301621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f96596479087%3A0x330dfab7c9aa70c!2sKantor%20Pemerintah%20Kota%20Surabaya!5e0!3m2!1sid!2sid!4v1736095579660!5m2!1sid!2sid', 'https://x.com/jatimpemprov', 'https://web.facebook.com/JatimPemprov/?locale=id_ID&amp;_rdc=1&amp;_rdr', 'https://www.instagram.com/jatimpemprov/?hl=id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttamu`
--

CREATE TABLE `ttamu` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ulasan` varchar(100) NOT NULL,
  `nope` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ttamu`
--

INSERT INTO `ttamu` (`id`, `tanggal`, `nama`, `alamat`, `ulasan`, `nope`) VALUES
(1, '2024-12-01', 'Annisa', 'Surabaya', 'Membantu saya belajar', '086755342323'),
(2, '2024-08-13', 'Risa', 'Malang', 'Semoga website ini makin berkembang dan budaya Jawa Timur makin dikenal.', '081122334455'),
(3, '2024-08-23', 'Anaya', 'Bogor', 'Informasi di sini bener-bener bikin aku tambah wawasan tentang budaya Jawa Timur!', '083456789012'),
(4, '2024-08-12', 'Sabrina', 'Tangerang', 'Suka banget sama bagian tarian tradisionalnya. Gerakannya unik dan indah!', '081345671290'),
(5, '2024-10-08', 'Rio', 'Medan', 'Mau dong lebih banyak update soal cerita rakyat khas Jawa Timur!', '082134567654'),
(6, '2024-11-10', 'Lia', 'Jogja', 'Website ini bikin aku makin paham arti penting melestarikan budaya lokal.', '085123456789'),
(7, '2024-06-04', 'Emma', 'Jakarta', 'Koleksi foto di galeri budayanya keren-keren! Bikin tambah cinta Jawa Timur.', '081234567801'),
(8, '2024-04-02', 'Dina', 'Kediri', 'Aku jadi makin bangga sama daerah sendiri! Kontennya bikin betah scroll.', '081456789012'),
(9, '2024-03-11', 'Wahyu', 'Banten', 'Dari sini aku baru tahu ada tari remo yang penuh makna! Keep going.', '081778899001'),
(10, '2024-12-03', 'Citra', 'Pasuruan', 'Makanan tradisionalnya bikin penasaran. Mau coba bikin rawon di rumah!', '082134567890'),
(11, '2024-02-26', 'Elios', 'Sidoarjo', 'Website ini bikin aku makin cinta sama budaya Jawa Timur. Good job!', '087812345678'),
(12, '2024-12-03', 'Maya', 'Banyuwangi', 'Website ini bener-bener bantu aku buat tugas sekolah soal kebudayaan Jawa Timur.', '085876543210'),
(16, '2024-12-08', 'Raya', 'Bogor', 'Menarik', '08736652552'),
(18, '2024-12-10', 'Isa', 'Bogor', 'P', '08675874764'),
(19, '2024-12-10', 'Alaya', 'Bogor', 'Y', '08675874764'),
(20, '2025-01-05', 'Naya', 'Bogor', 'Sangat bagus, saya suka', '08672434657'),
(21, '2025-01-05', 'Yaya', 'Depok', 'Menambah wawasan', '0857363525645'),
(22, '2025-01-05', 'Kalea', 'Jogja', 'Ilmu dan berita yang disampaikan bagus', '0874536254');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabout_us`
--
ALTER TABLE `tabout_us`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tadmin`
--
ALTER TABLE `tadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tberita`
--
ALTER TABLE `tberita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tgambar`
--
ALTER TABLE `tgambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tkomen`
--
ALTER TABLE `tkomen`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indeks untuk tabel `tkontak`
--
ALTER TABLE `tkontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `ttamu`
--
ALTER TABLE `ttamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabout_us`
--
ALTER TABLE `tabout_us`
  MODIFY `id_about` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tadmin`
--
ALTER TABLE `tadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tberita`
--
ALTER TABLE `tberita`
  MODIFY `id_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tgambar`
--
ALTER TABLE `tgambar`
  MODIFY `id_gambar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tkomen`
--
ALTER TABLE `tkomen`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tkontak`
--
ALTER TABLE `tkontak`
  MODIFY `id_kontak` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ttamu`
--
ALTER TABLE `ttamu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tkomen`
--
ALTER TABLE `tkomen`
  ADD CONSTRAINT `tkomen_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tberita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
