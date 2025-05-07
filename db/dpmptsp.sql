-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 04:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpmptsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_berita` text NOT NULL,
  `kutipan_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `tanggal`, `isi_berita`, `kutipan_berita`, `gambar`, `status`) VALUES
(6, 'DPMPTSP Kota Medan Gelar Temu Pelaku Usaha Untuk Wujudkan Kemitraan', 'dpmptsp-kota-medan-gelar-temu-pelaku-usaha-untuk-wujudkan-kemitraan', '2024-01-03', '<p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) Kota Medan menggelar Temu Pelaku Usaha tanggal 18 Juli 2023 di Hotel Four Points Medan. Kegiatan yang dimulai pukul sembilan pagi ini dihadiri oleh 7 perwakilan instansi nonbisnis, 6 perusahaan hotel, 3 restoran, 3 ritel, dan 14 wirausaha mitra DPMPTSP Kota Medan.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Kegiatan ini merupakan ajang pertemuan antara pelaku usaha besar dan pelaku usaha mikro-kecil dalam rangka penjajakan kemitraan. Sebelumnya, DPMPTSP Kota Medan telah melakukan kurasi terhadap usaha mikro-kecil yang berpotensi untuk dimitrakan dengan perusahaan sektor hotel, restoran, dan ritel. Keempat belas wirausaha yang hadir terdiri dari klaster pangan, manufaktur, material maju, dan tekonologi informasi.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Acara dibuka oleh Asisten Ekonomi Pembangunan, Agus Suryono, mewakili Wali Kota Medan dan dilanjutkan dengan <em>keynote speech</em> dari General Manager Hotel Grand Mercure Maha Cipta Medan, Rachmad Suwardi, dan pelaku usaha, Prof. Ir. Lilis Sukeksi, MSc., PhD.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Rachmad Suwardi memaparkan bagaimana Hotel Grand Mercure Maha Cipta Medan selama ini telah menyerap produk-produk lokal, baik berupa fasilitas kamar, maupun galeri. Namun demikian, Rachmad berterima kasih kepada DPMPTSP Kota Medan yang membuka peluang kemitraan yang lebih luas lagi. Hotel Grand Mercure Maha Cipta Medan akan meningkatkan penyerapan produk lokal dengan beberapa konsep yang sedang dikaji.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Mewakili Wirausaha Mitra DPMPTSP Kota Medan, Prof. Ir. Lilis Sukeksi, MSc., PhD menyampaikan pengalamannya membangun bisnis bermerk Artsari. Prof. Lilis Sukeksi melihat potensi yang besar pada wirausaha lokal namun butuh sentuhan pemerintah untuk mempercepat pengembangan usaha, salah satunya seperti kegiatan Temu Pelaku Usaha ini.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><a name=\"_Hlk141176588\" style=\"color: inherit;\"></a><em>One-on-one Meeting</em> merupakan sesi utama dari kegiatan Temu Pelaku Usah ini<em>.</em> Di sesi ini, masing-masing Wirausaha Mitra DPMPTSP Medan melakukan <em>deep talk</em> dengan pihak perusahaan. Tercatat ada 80 peminatan Wirausahawan Mitra terhadap perusahaan hotel, restoran, ritel yang hadir. Sementara peminatan perusahaan-perusahaan terhadap Wirausaha Mitra ada sebanyak 48 peminatan.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Perusahaan yang paling banyak ditarget oleh Wirausaha Mitra adalah Habitat Café dan Hotel JW Marriot, masing-masing 10 penawaran, lalu Hotel Grand Mercure sebanyak 9 penawaran. Produk yang paling banyak diminati oleh perusahaan adalah Sabun Cuci Piring Mom Clean (4 minat), Dried Rosella Nyoon\'s (4 minat), dan Syrup Rosella Nyoon\'s (4 minat).</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Pihak perusahaan dan Wirausaha Mitra sepakat untuk melakukan tindak lanjut pada pertemuan-pertemuan intens selanjutnya. Hal ini akan terus dipantau oleh DPMPTSP Kota Medan untuk memastikan terjalinnya kemitraan atau mengidentifikasi kendala-kendala yang terjadi. Kegiatan Temu Pelaku Usaha kemudian ditutup oleh Plh. Kepala DPMPTSP Kota Medan, Nurbaiti Harahap, S.Sos, M.AP.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Dari survei yang dilakukan oleh DPMPTSP terhadap Wirausaha Mitra di acara tersebut, diketahui bahwa 87,5% (8 wirausaha) merasa sangat puas dengan pelaksanaan kegiatan dan 12,5% (1 wirausaha) merasa puas.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Wirausaha Mitra mengatakan bahwa hal terbaik dari kegiatan ini adalah bisa bertemu langsung dengan pihak perusahaan. Kesempatan ini diakui jarang bisa diperoleh. Para Wirausaha Mitra pun berharap dapat difasilitasi untuk bertemu dengan pihak-pihak lain seperti perbankan, BUMN. uji laboratorium, dan perusahan sektor lainnya.</p>', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) Kota Medan menggelar Temu Pelaku Usaha tanggal 18 Juli 2023 di Hotel Four Points Medan. Kegiatan yang dimulai pukul sembilan pagi ini d', 'dpmptsp_01.jpg', 'Y'),
(7, 'Bobby Nasution Raih Anugerah Kebudayaan PWI Tahun 2023', 'bobby-nasution-raih-anugerah-kebudayaan-pwi-tahun-2023', '2024-01-03', '<p><span style=\"color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Wali Kota Medan Bobby Nasution menerima Anugerah Kebudayaan PWI pada puncak Peringatan Hari Pers Nasional Tahun 2023...</span><br></p>', 'Wali Kota Medan Bobby Nasution menerima Anugerah Kebudayaan PWI pada puncak Peringatan Hari Pers Nasional Tahun 2023...', '02.jpg', 'Y'),
(8, 'Safari Subuh Perdana 2024, Bobby Nasution: Makmurkan Umat Melalu Masjid Mandiri', 'safari-subuh-perdana-2024-bobby-nasution-makmurkan-umat-melalu-masjid-mandiri', '2024-02-06', '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Mengawali safari subuh&nbsp;perdana di tahun 2024, Wali Kota Medan, Bobby Nasution bersafari subuh di Masjid Muslimin Jalan AR Hakim, Gang Buntu, Kelurahan Tegal Sari III, Kecamatan Medan Area, Rabu (31/1/2024). Pada safari subuh yang diisi dengan salat berjamaah dan tausiyah&nbsp;agama ini, Bobby Nasution memberikan bantuan senilai Rp 50 juta&nbsp;untuk masjid.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Selain bantuan untuk masjid, Bobby Nasution juga memberikan sejumlah bantuan lainnya diantaranya bantuan sosial senilai Rp 10 juta, penyerahan akte&nbsp;pendirian koperasi, bantuan gerobak usaha, bantuan bibit cabe dan bantuan peralatan olahraga serta rak buku.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Dalam sambutannya, Bobby Nasution yang hadir didampingi segenap pimpinan perangkat daerah di lingkungan Pemko Medan diantaranya Asisten Pemerintah dan Sosial Muhammad Sofyan, Kadisdukcapil Baginda P Siregar, Kadis Kominfo Arrahman Pane, Kadis Sosial Khoiruddin Rangkuti serta Kadis PKPCKTR Alexander dan Camat Medan Area, Muhammad Ilfan mengatakan kunjungan safari subuh ini selain untuk bersilaturahmi juga untuk menyampaikan program Pemko Medan yakni masjid mandiri.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">\"Selain mengembalikan fungsi masjid&nbsp;seperti zaman Rasulullah yang menjadikan masjid tidak hanya sebagai tempat ibadah, tetapi sebagai tempat peradaban, program masjid mandiri ini juga dapat memakmurkan jemaah atau umat, khususnya yang ada di sekitar masjid\", kata Bobby Nasution.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Dijelaskan Bobby Nasution, untuk melihat &nbsp;bagaimana sebuah masjid itu makmur seperti ayam dan telur, artinya mana yang lebih dahulu dimakmurkan apakah masjid atau jemaahnya. Hal itu dikarenakan masjid&nbsp;itu makmur jika jemaah yang datang begitu memasukan&nbsp;uang ke kotak infak, nilai infaknya&nbsp;sudah besar.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">\"Kunci untuk memakmurkan masjid&nbsp;adalah memakmurkan jemaah atau umat. Oleh karena itu, fungsi kedua dari program masjid mandiri adalah bagaimana masjid juga dapat meningkatkan perekonomian jemaah atau warga di sekitar masjid. Atas dasar itu, kami berikan akte pendirian koperasi yang dapat &nbsp;digunakan untuk kegiatan usaha bagi jemaah masjid\", jelas Bobby Nasution.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Bobby Nasution menambahkan kalau setiap masjid&nbsp;bisa memastikan jemaahnya &nbsp;minimal 10 rumah keliling dari masjid &nbsp;bisa dibantu perekonomiannya, maka jika jumlah masjid di Medan sekitar 1.115 masjid, berarti ada sekitar 40 ribu warga Kota Medan&nbsp;yang bisa terbantu perekonomian dengan hadirnya masjid yang menjalankan program masjid mandiri.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">\"Kalau program masjid mandiri ini bisa kita masifkan, maka jemaah atau umat yang ada di Kota Medan dapat lebih makmur. Semoga program ini dapat terus berjalan yang nantinya dapat bermanfaat tidak hanya untuk masjid tetapi juga bagi jemaah\", ujar Bobby Nasution.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Terkait dengan permintaan BKM Mesjid Muslimin yang ingin menuntaskan pembangunan masjid dalam kurun waktu dua bulan, Bobby Nasution mendukung penuh dan siap membantunya. Namun sejalan dengan proses penyelesaian, Bobby Nasution meminta BKM Masjid Muslimin dapat menjalankan satu diantara program masjid mandiri&nbsp;yaitu dari sisi ekonomi atau sosial.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">\"Insha Allah saya sanggupi penyelesaian pembangunan masjid, tetapi ada satu PR yang harus dilakukan BKM masjid, yakni menjalankan cita-cita program masjid mandiri dari sisi ekonomi atau sosial minimal membantu dua jemaah dari masjid ini harus terbantu ekonominya. Tentunya ini menjadi motivasi kita untuk memakmurkan jemaah yang nantinya jika sudah terbantu jemaah tersebut juga akan memakmurkan masjid \", pungkas Bobby Nasution.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Selanjutnya Bobby Nasution juga meminta kepada seluruh masyarakat Kota&nbsp;Medan untuk menjaga kebersamaan dan persaudaraan kita jelang pemilu yang dalam beberapa hari lagi akan berlangsung.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Sebelumnya Ketua BKM Masjid Muslimin, Zainul Arifin mengungkapkan seluruh jemaah sangat senang dengan hadirnya bapak Wali Kota Medan Bobby Nasution dalam rangka safari subuh. Sebab BKM sudah lama menantikan kehadiran Wali Kota Medan ke Masjid Muslimin. Semoga bantuan yang diberikan oleh Pemko Medan bermanfaat untuk kemakmuran masjid.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">\"Saat ini masjid sedang melakukan pembangunan, untuk bangunan fisik sendiri sudah hampir selesai namun untuk menara masih dalam tahap pembangunan. Pembangunan ini kami lakukan karena kondisi masjid yang sudah kurang layak digunakan untuk beribadah. Dengan dana awal yang tidak besar kami memberanikan diri untuk merenovasi, Alhamdulillah kini sudah hampir selesai\", katanya</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">Dijelaskan Zainul, dalam pembangunan masjid&nbsp;kami juga terkendala dengan dana karena dapat dilihat bersama lingkungan masjid&nbsp;merupakan warga menengah ke bawah. Mudah-mudahan dengan hadirnya bapak Wali Kota Medan dapat membantu atau berupaya untuk menyelesaikan pembangunan masjid.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 248, 248);\">\"Mudah-mudahan dalam waktu dua bulan ini jika pak wali kota&nbsp;membantunya pembangunan masjid akan dapat selesai. Kami mohon kepada pak wali kota dapat melanjutkan pembangunan\", ujarnya seraya mengungkapkan Masjid Muslimin telah menjalankan satu diantara program masjid mandiri yakni maghrib mengaji.</span><br></p>', 'Mengawali safari subuh&nbsp;perdana di tahun 2024, Wali Kota Medan, Bobby Nasution bersafari subuh di Masjid Muslimin Jalan AR Hakim, Gang Buntu, Kelurahan Tegal Sari III, Kecamatan Medan Area, Rabu (', 'berita.jpeg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan_menu`
--

CREATE TABLE `pengaturan_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status_aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `urutan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan_menu`
--

INSERT INTO `pengaturan_menu` (`id`, `nama_menu`, `url`, `status_aktif`, `urutan`) VALUES
(1, 'Investasi', 'https://investmedan.pemkomedan.go.id/', 'N', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan_submenu`
--

CREATE TABLE `pengaturan_submenu` (
  `id` int(11) NOT NULL,
  `nama_submenu` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status_aktif` enum('Y','N') NOT NULL,
  `urutan` int(2) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan_submenu`
--

INSERT INTO `pengaturan_submenu` (`id`, `nama_submenu`, `url`, `status_aktif`, `urutan`, `menu_id`) VALUES
(1, 'test', 'testset', 'Y', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `portal`
--

CREATE TABLE `portal` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `nama_portal` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `urutan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portal`
--

INSERT INTO `portal` (`id`, `logo`, `nama_portal`, `deskripsi`, `link`, `urutan`) VALUES
(4, '', 'Ruko Investasi', 'Ruang Konsultasi Informasi dan Promosi Investasi', 'http://investmedan.pemkomedan.go.id/', 0),
(5, '', 'Detil Perizinan', 'Daftar Izin dan Syarat', '', 0),
(6, 'sipandu.png', 'Sipandu Medan', 'Pengurusan Izin Online', 'https://sipandumedan.pemkomedan.go.id/', 0),
(7, '', 'Monitoring', 'Lihat Status Perizinan', '', 0),
(8, 'pupr.png', 'PUPR', 'Portal Perizinan SIMB', 'https://simbg.pu.go.id/', 0),
(9, 'oss.png', 'OSS.GO.ID', 'Sistem Perizinan OSS', 'https://oss.go.id/', 0),
(10, '', 'SKM Online', 'Survei / Index Kepuasan', '', 0),
(11, '', 'Pengaduan', 'Hubungi Kami', 'https://api.whatsapp.com/send?phone=6282277733130&text=Hallo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profil_penghargaan`
--

CREATE TABLE `profil_penghargaan` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_penghargaan`
--

INSERT INTO `profil_penghargaan` (`id`, `foto`) VALUES
(0, '01_(1).jpg'),
(0, '02_(1).jpg'),
(0, '03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil_sarana_layanan`
--

CREATE TABLE `profil_sarana_layanan` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_sarana_layanan`
--

INSERT INTO `profil_sarana_layanan` (`id`, `foto`) VALUES
(1, '01.jpg'),
(2, '02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil_struktur_organisasi`
--

CREATE TABLE `profil_struktur_organisasi` (
  `id` int(11) NOT NULL,
  `gambar_struktur` varchar(255) NOT NULL,
  `nama_asn_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_struktur_organisasi`
--

INSERT INTO `profil_struktur_organisasi` (`id`, `gambar_struktur`, `nama_asn_pdf`) VALUES
(1, 'struktur_organisasi.jpg', 'absenok.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `profil_tentang`
--

CREATE TABLE `profil_tentang` (
  `id` int(11) NOT NULL,
  `tentang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_tentang`
--

INSERT INTO `profil_tentang` (`id`, `tentang`) VALUES
(1, '<a href=\"https://dpmptsp.pemkomedan.go.id/public/media/SK_IKU.pdf\" style=\"color: rgb(26, 188, 156); font-family: Lato, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);\"><u><h4 style=\"margin: 0px 0px 30px; font-weight: 600; line-height: 1.5; color: rgb(68, 68, 68); font-family: Poppins, sans-serif;\">Unduh SK dan IKU</h4></u></a><span style=\"color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"></span><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Visi Wali Kota dan Wakil Wali Kota Medan terpilih periode tahun 2021-2026 adalah:<br><i><span style=\"font-weight: bolder;\">“Terwujudnya Masyarakat Kota Medan yang Berkah, Maju dan Kondusif”</span></i></p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Untuk mewujudkan visi tersebut maka ditetapkan 7 (tujuh) misi, sebagai berikut:</p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Medan Berkah, Mewujudkan Kota Medan Sebagai Kota Yang Berkah dengan Memegang Teguh Nilai-Nilai Keagamaan dan Menjadikan Medan Sebagai Kota Layak Huni  Juga Berkualitas Bagi Seluruh Lapisan Masyarakat.</li><li style=\"margin: 0px; padding: 0px;\">Medan Maju, Memajukan Kesejahteraan Masyarakat Melalui Revitalisasi Pelayanan Pendidikan dan Kesehatan yang Modern dan Terjangkau oleh semua</li><li style=\"margin: 0px; padding: 0px;\">Medan Bersih, Menciptakan Keadilan Sosial melalui Reformasi Birokrasi yang Bersih, Profesional, dan Akuntabel Berlandaskan Semangat Melayani Masyarakat serta terciptanya pelayanan publik yang prima, adil dan merata.</li><li style=\"margin: 0px; padding: 0px;\">Medan Membangun, Membangun sarana dan prasarana yang mendukung peningkatan perekonomian dan potensi lokal masyarakat yang berkeadilan Agar Terciptanya Lapangan Kerja, Iklim Kewirausahaan Yang Sehat dan Peningkatan Kualitas SDM.</li><li style=\"margin: 0px; padding: 0px;\">Medan Kondusif, Menghadirkan Rasa Aman dan Nyaman bagi Segenap Masyarakat Kota Medan melalui Peningkatan Supremasi Hukum berbasis Partisipasi Masyarakat.</li><li style=\"margin: 0px; padding: 0px;\"><span style=\"font-weight: bolder;\">Medan Inovatif, Mewujudkan Kota Medan sebagai Kota Ekonomi Kreatif dan Inovatif yang Berbasis pada Penguatan Human Capital, Teknologi Digital dan Sosial Budaya</span></li><li style=\"margin: 0px; padding: 0px;\">Medan Beridentitas, Mewujudkan Kota Medan yang Beradab, Harmonis, Toleran dalam Kemajemukan Demokratis dan Cinta Tanah Air.</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"> </p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Tujuan dan Sasaran Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu dalam rangka pencapaian Visi dan Misi RPJMD Kota Medan Tahun 2021-2026</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"> </p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">MISI (RPJMD)</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"> Medan Inovatif</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">TUJUAN  (RPJMD) :</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Menciptakan Kota Medan menjadi kota kreatif dan inovatif dalam meningkatkan pertumbuhan ekonomi yang inklusif dan berkelanjutan.</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">INDIKATOR TUJUAN (RPJMD)</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">  Produk Domestik Regional Bruto               </li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">SASARAN (RPJMD)</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Meningkatnya kualitas iklim usaha dan investasi</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">INDIKATOR SASARAN (RPJMD)</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Nilai Investasi PMA</li><li style=\"margin: 0px; padding: 0px;\">Nilai Investasi PMDN</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">TUJUAN (RENSTRA)</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Menciptakan Kota Medan menjadi kota kreatif dan inovatif yang berlandaskan kepada penguatan Modal Manusia, Teknologi digital dan sosial budaya</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">INDIKATOR TUJUAN (RENSTRA)</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Nilai Investasi PMA</li><li style=\"margin: 0px; padding: 0px;\">Nilai Investasi PMDN</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><br><span style=\"font-weight: bolder;\">SASARAN (RENSTRA)</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Meningkatnya inovasi dan ekonomi kreatif dalam perekonomian Kota Medan</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"> </p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">INDIKATOR SASARAN (RENSTRA)</span></p><ul style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Jumlah Perusahaan PMA</li><li style=\"margin: 0px; padding: 0px;\">Jumlah Perusahaan PMDN</li></ul><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\"></p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Dinas Penanaman Modal dan Pelayanan Terpadu Satu PIntu Kota Medan merupakan unsur pelaksana urusan pemerintah bidang penanaman modal di kota medan dengan sasaran strategis meningkatkan iklim investasi dan kualitas pelayanan perizinan di kota medan. Penciptaan lingkungan yang kondusif dalam mendukung investasi serta promosi investasi daerah dan peningkatan kualitas pelayanan perizinan merupakan suatu proses yang berkesinambungan dan berkelanjutan dari perencanaan sampai dengan pertanggungjawaban keuangan daerah.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Sejauh ini kinerja pengelolaan di Dinas Penanaman Modal dan PTSP Kota Medan masih perlu dioptimalkan, sehingga perlu dilaksanakan penyelenggaraan PTSP dan penanaman modal yang berkelanjutan dan diharapkan sampai pada tahun 2021kinerja dimaksud bisa mencapai level yang lebih baik.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Salah satu permasalahan penting yang dihadapi daerah saat ini, termasuk di Kota Medan adalah seringnya pemerintah (pusat) mengganti peraturan-peraturan yang berkaitan dengan pengelolaan keuangan, perizinan, aspek-aspek terkait investasi, sehingga daerah segera harus menyesuaikan dengan peraturan yang baru. Sistem informasi pengembangan investasi dan PTSP yang ada harus dapat diterapkan secara optimal dengan dukungan sumber daya manusia dan sarana prasarana yang memadai.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Medan yang merupakan unsur pelaksana urusan pemerintahan dengan tugas melaksanakan kewenangan otonomi daerah dalam pengelolaan aspek-aspek terkait dengan peningkatan investasi  dan pelayanan perizinan di Kota Medan. Kewenangan yang diberikan kepada daerah akan membawa konsekuensi terhadap kemampuan daerah untuk mengantisipasi tuntutan masyarakat akan pelayanan yang lebih baik dan prima. Untuk itu daerah harus menyediakan sumber-sumber pembiayaan yang memadai dan dituntut kreativitas daerah serta kemampuan aparat daerah dalam upaya menggali potensi daerah sehingga dapat meningkatkan investasi di daerah.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Dalam upaya peningkatan investasi di daerah perlu dilakukan kegiatan intensifikasi dan ekstensifikasi, peningkatan penyelenggaraan pelayanan prima melalui perumusan perencanaan strategis. Dengan perumusan perencanaan strategis yang dikonfirmasikan kepada segenap lapisan pegawai dan stakeholder, maka diharapkan tantangan perubahan iklim pemerintahan daerah dapat diantisipasi. Kebijakan di bidang investasi pada dasarnya ditujukan untuk meningkatkan kemampuan daerah dalam mengundang para investor untuk masuk ke Kota Medan.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Sedangkan dalam melaksanakan tugas dan fungsinya, tantangan dan permasalahan yang dihadapi Dinas Penanaman Modal dan PTSP Kota Medan adalah sebagaimana berikut ini:</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">   Kebijakan Penanaman Modal</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">   Belum adanya kebijakan daerah tentang pemberian insentif/ kemudahan berinvestasi di Kota Medan.<br>   Peraturan Wali Kota tentang Rencana Umum Penanaman Modal Kota Medan belum. Saat ini masih dalam bentuk naskah akademis .<br>   Belum ada kajian pemetaan potensi investasi daerah Kota Medan.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">   Kerjasama Penanaman Modal, pelaksanaan fasilitasi kerjasama dengan dunia usaha masih terbatas.<br>   Promosi Penanaman Modal, promosi penanaman modal belum optimal dalam menarik investasi ke Kota Medan.<br>   Pelayanan Penanaman Modal, pedoman tata cara dan pelaksanaan pelayanan terpadu satu pintu kegiatan penanaman modal belum optimal.<br>   Pengendalian Pelaksanaan Penanaman Modal</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">   Belum adanya satuan tugas pengawasan dan pengendalian penanaman modal di Kota Medan.<br>   Belum tersedianya sarana dan prasarana pendukung dalam pengendalian penanaman modal.</p><p style=\"margin-bottom: 30px; line-height: 1.8; color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 16px;\">Pengelolaan Data dan Sistem Informasi Penanaman Modal masih terbatasnya dan belum mutakhirnya  sistem informasi penanaman modal Kota Medan.<br>Ketersediaan sarana dan prasarana pendukung pelaksanaan urusan wajib penanaman modal dan pelayanan perizinan masih kurang dan belum memadai. Oleh karena itu, untuk mencapai pelayanan prima perizinan maka ketersediaan sarana dan prasarana yang memadai merupakan suatu keharusan.<br>Penyebarluasan, Pendidikan dan Pelatihan Penanaman Modal, sosialisasi atas kebijakan dan perencanaan pengembangan, kerjasama luar negeri, promosi, pemberian pelayanan perizinan, pengendalian pelaksanaan, dan sistem informasi penanaman modal kepada aparatur pemerintah dan dunia usaha masih sangat terbatas dan belum optimal.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `rekan_kami`
--

CREATE TABLE `rekan_kami` (
  `id` int(11) NOT NULL,
  `rekan_kami` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekan_kami`
--

INSERT INTO `rekan_kami` (`id`, `rekan_kami`, `logo`) VALUES
(10, 'Pemko Medan', 'medan.png'),
(11, 'USU', 'usu.png'),
(12, 'Agung Podomoro Group', 'podomoro.png');

-- --------------------------------------------------------

--
-- Table structure for table `situs_terkait`
--

CREATE TABLE `situs_terkait` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `situs_terkait` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `situs_terkait`
--

INSERT INTO `situs_terkait` (`id`, `logo`, `situs_terkait`, `deskripsi`, `link`) VALUES
(1, 'pir.png', 'PORTAL PIR', 'Potensi Investasi Regional', 'https://regionalinvestment.bkpm.go.id/pir/daerah-wilayah/?id=1275'),
(2, 'rdtr.png', 'RDTR', 'Rencana Detail Tata Ruang', 'https://gistaru.atrbpn.go.id/rdtrinteraktif/'),
(3, '', 'NSI', 'North Sumatra Investment', 'https://northsumatrainvest.id/en/city/medan'),
(4, '', 'LAPOR', 'Layangkan Suatu Laporan', 'https://www.lapor.go.id/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`, `foto`, `level`) VALUES
(1, 'admin', 'edbd881f1ee2f76ba0bd70fd184f87711be991a0401fd07ccd4b199665f00761afc91731d8d8ba6cbb188b2ed5bfb465b9f3d30231eb0430b9f90fe91d136648', 'Administrator', 'admin@admin.com', 'logo1.png', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan_menu`
--
ALTER TABLE `pengaturan_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan_submenu`
--
ALTER TABLE `pengaturan_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_sarana_layanan`
--
ALTER TABLE `profil_sarana_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_struktur_organisasi`
--
ALTER TABLE `profil_struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_tentang`
--
ALTER TABLE `profil_tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekan_kami`
--
ALTER TABLE `rekan_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `situs_terkait`
--
ALTER TABLE `situs_terkait`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengaturan_menu`
--
ALTER TABLE `pengaturan_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaturan_submenu`
--
ALTER TABLE `pengaturan_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portal`
--
ALTER TABLE `portal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profil_sarana_layanan`
--
ALTER TABLE `profil_sarana_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profil_struktur_organisasi`
--
ALTER TABLE `profil_struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil_tentang`
--
ALTER TABLE `profil_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekan_kami`
--
ALTER TABLE `rekan_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `situs_terkait`
--
ALTER TABLE `situs_terkait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
