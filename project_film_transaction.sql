-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220707.a5d60f5698
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 12:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_film_transaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `penulis`, `tanggal`, `gambar`, `detail`) VALUES
(1, 'Lightyear Batal Rilis di Indonesia hingga Rating Usia Thor 4', 'By Helmy Herlambang:', '2022-06-20', 'https://cdn.kincir.com/2/pSVSsPeoBQSy70cDad_N7WHwPiP8QYZ-HjB2965Apok/transform/rs:fill:764:400/src/production/2022-06/16by9/berita-terkini-lightyear-batal-tayang-di-indonesia~3c308558-7ea2-4978-a92e-8b951b3ad293.jpg', 'pada pekan lalu kembali didominasi oleh kabar dari Hollywood, khususnya yang mengusung genre superhero. Dari film Thor: Love and Thunder, terungkap rating usia penontonnya ketika tayang nanti dengan memiliki adegan ketelanjangan. Lalu, terungkap juga bahwa Gorr the God Buthcer bukanlah pure villain dalam film tersebut.Selanjutnya, beredar kabar juga bahwa film animasi Lightyear kemungkinan besar batal tayang di Indonesia karena menampilkan adegan LGBT. Oh ya, pada pekan lalu juga terungkap bagaimana penampilan Ryan Gosling sebagai Ken dalam film live action Barbie.'),
(2, 'Film Horor Winnie the Pooh hingga Disney Disuruh Minta Maaf ke Johnny Depp', 'by Helmi Herlambang: ', '2022-06-06', 'https://cdn.kincir.com/2/RJsuTk5BZGRd14qtC9syLiG-30KJpU7WVO7pZyoMU6Y/transform/rs:fill:764:400/src/production/2022-06/16by9/berita-terkini-film-horor-winnie-the-pooh~3517e5f7-1009-4301-bf79-07eed615d53c.jpg', '\"Salah satunya datang dari hasil persidangan Johnny Depp dan Amber Heard yang menyatakan bahwa Depp tak bersalah. Hasil putusan ini membuat Amber Heard harus membayar uang ganti rugi dalam jumlah yang cukup besar kepada Depp.\r\nLalu, kabar lainnya juga datang dari proyek film Captain America 4 yang rumornya akan menampilkan sosok Patriot. Selanjutnya, ada juga kabar dari film horor terbaru yang menampilkan Winnie the Pooh sebagai pembunuh yang sangat sadis.\"'),
(3, 'Keren! Maxime Bouttier Bintangi Film Hollywood ‘Ticket To Paradise’ Bareng Julia Robert dan George Cloony', 'Reporter: Winda| ', '2022-06-01', 'https://s3.theasianparent.com/cdn-cgi/image/width=450,quality=90/tap-assets-prod/wp-content/uploads/sites/24/2022/07/Profil-Maxime-Bouttier.jpg', '\"Aktor Indonesia, Maxime Bouttier membintangi Film Hollywood berjudul Ticket To Paradise bersama peraih Piala Oscar Julia Robert dan George Cloony.Mantan kekasih Prilly Latuconsina ini akan berakting sebagai warga Bali yang akan dinikahkan dengan anak Julia Robert dan George Cloony yang diperankan oleh Kaitlyn Dever.Film bergenre komedi-romantis ini dijadwalkan akan tayang perdana pada 21 Oktober 2022 di bioskop Amerika Serikat. Namun belum diketahui penayangan resmi di Indonesia.\"'),
(4, 'Spoiler Film Minions \'The Rise of Gru\', Baru Tayang setelah Tertunda 2 Tahun', 'Rachel Corrie| \r\n ', '2022-07-02', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/06/30/3041162619.jpg', ' Minions: The Rise of Gru akan menelusuri asal-usul kolaborasi Gru (Steve Carell) yang berusia 12 tahun dengan Minion (Pierre Coffin) untuk mengubah bocah itu menjadi penjahat super dan merupakan film kelima dalan franchise Despicable Me. Film yang sempat tertunda 2 tahun karena pandemi Covid-19 ini sudah resmi dirilis di Indonesia pada tanggal 28 juni 2022.\r\nFilm ini juga menjadi film pertama dalam waralaba Despicable Me yang tidak memiliki karakter yang disuarakan oleh John Cygan. Diketahui, John Cygan meninggal dunia pada 13 Mei 2017, lebih dari sebulan sebelum rilis \"Despicable Me 3\" (2017).');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `nama_cinema` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `id_film`, `nama_cinema`) VALUES
(1, 21, 'Cinepolis'),
(2, 24, 'XXI');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `title`, `genre`, `image`, `description`, `price`) VALUES
(1, 'Everything Everywhere All At Once ', '1', 'https://awsimages.detik.net.id/community/media/visual/2022/06/25/everything-everywhere-all-at-once.jpeg?w=700&q=90', 'Everything Everywhere All At Once adalah petualangan yang penuh aksi, sci-fi yang lucu dan berjiwa besar tentang seorang wanita Cina-Amerika, Seorang imigran Tiongkok terbawa dalam petualangan luar biasa, di mana dia sendiri yang dapat menyelamatkan dunia dengan menjelajahi alam semesta lain yang terhubung dengan kehidupan yang bisa dia jalani.', 30000),
(3, 'KKN di Desa Penari', '1', 'https://m.media-amazon.com/images/M/MV5BYjBjM2Y5YWEtNTgyMi00MzcwLThkYTctYzZmY2FkNjZjZTRjXkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg', 'KKN Di Desa Penari diadaptasi dari salah satu cerita horror yang telah viral di tahun 2019 melalui Twitter, menurut sang penulis, cerita ini diambil dari sebuah kisah nyata sekelompok mahasiswa yang tengah melakukan program KKN (Kuliah Kerja Nyata) di Desa Penari. Tak berjalan mulus, serentetan pengalaman horror pun menghantui mereka hingga program KKN tersebut berakhir tragis', 30000),
(4, 'JURASSIC WORLD DOMINION', '1', 'https://m.media-amazon.com/images/M/MV5BOTBjMjA4NmYtN2RjMi00YWZlLTliYTktOTIwMmNkYjYxYmE1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_FMjpg_UX1000_.jpg', 'Empat tahun setelah kehancuran pulau Nublar, dinosaurus sekarang hidup dan berburu bersama manusia di seluruh dunia. Keseimbangan yang rapuh ini akan menentukan, apakah manusia akan tetap menjadi berada di puncak rantai makanan ketika berbagi wilayah dengan makhluk paling menakutkan dalam sejarah bumi.', 35000),
(5, 'MINIONS 2: THE RISE OF GRU', '1', 'https://upload.wikimedia.org/wikipedia/id/4/45/Minions_The_Rise_of_Gru_poster.jpg', 'Kisah tak terduga tentang mimpi seorang anak berusia dua belas tahun untuk menjadi penjahat super terhebat di dunia.', 30000),
(6, 'NGERI-NGERI SEDAP', '1', 'https://m.media-amazon.com/images/M/MV5BYTQyYzg3N2EtNjVlZC00NGViLTkyZjgtYTc2MTVjNTIwNWYwXkEyXkFqcGdeQXVyMTE4MTAxMzUx._V1_.jpg', 'Pak Domu dan Mak Domu yang tinggal bersama Sarma, ingin sekali tiga anaknya: Domu, Gabe dan Sahat yang sudah lama merantau pulang untuk menghadiri acara adat, tetapi mereka menolak pulang karena hubungan mereka tidak harmonis dengan Pak Domu.', 30000),
(7, 'KELUARGA CEMARA 2', '1', 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01g6784zm5brw0h03erj45d9wz.jpg', 'Setelah jatuh miskin, Emak dan Abah bertahan hidup di desa. Ingin sejahtera, tapi lupa dengan kebahagiaan anak-anaknya. Abah sibuk dengan pekerjaan barunya, tak bisa tiap hari antar jemput anak-anaknya. Emak mencari sampingan agar keluarganya punya pendapatan tambahan dan juga tabungan.', 30000),
(8, 'THE BLACK PHONE', '1', 'https://media.21cineplex.com/webcontent/gallery/pictures/165467615627503_287x421.jpg', 'Setelah diculik oleh seorang pembunuh anak dan dikunci di ruang bawah tanah yang kedap suara, seorang anak laki-laki berusia 13 tahun mulai menerima panggilan telepon yang terputus dari korban pembunuh sebelumnya', 35000),
(9, 'BROKER', '1', 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01816469ac3d38aa2c38e3f48d692198.jpg', 'Sang-hyun menjalankan binatu, tetapi terus-menerus dibebani dengan hutang. Dong-soo, yang tumbuh di panti asuhan, bekerja di fasilitas kotak bayi. Suatu malam di tengah hujan lebat, mereka diam-diam membawa bayi yang tertinggal di kotak bayi.', 35000),
(10, 'Top Gun: Maverick', '1', 'https://image.tmdb.org/t/p/w200/wxP2Mzv9CdjOK6t4dNnFGqIQl0V.jpg', 'Lebih dari 30 tahun mengabdi sebagai salah satu penerbang Angkatan Laut terbaik, Pete “Maverick” Mitchell berada dalam posisi dambaannya, melakukan aksi-aksi mendobrak sebagai pilot uji nan pemberani, dan menampik setiap kesempatan naik pangkat karena akan membuatnya tak bisa menerbangkan pesawatnya.', 30000),
(20, 'The Gray Man', '2', ' https://statics.indozone.news/local/627615f294d03.jpg', 'The Grey Man adalah film thriller aksi Amerika yang akan datang yang disutradarai oleh Anthony dan Joe Russo, dari skenario yang ditulis bersama dengan Christopher Markus dan Stephen McFeely, berdasarkan novel 2009 dengan nama yang sama oleh Mark Greaney.', 35000),
(21, 'Thor: Love and Thunder', '2', 'https://media.suara.com/pictures/original/2022/05/24/81628-thor-love-and-thunder.jpg', 'Thor: Love and Thunder\"menceritakan Thor dalam sebuah perjalanan yang belum pernah ia jalani – pencariankedamaian batin. Namun, masa pensiunnya terganggu oleh seorang pembunuh galaksi yang dikenal sebagai Gorr sang Dewa Jagal , yang ingin memusnahkan para dewa.', 45000),
(22, 'Ghost Writer 2', '2', 'https://obs.line-scdn.net/0huXPPw6iWKndtKT6pg_9VIFV_JgZeTzB-T05hFE8hdEZABWQlUUt5FBh5fVsTEDlzTUg2Rk8qdUYUSj5yBA/w644', 'Ghost Writer 2 adalah film horor komedi Indonesia tahun 2022 yang disutradarai oleh Muhadkly Acho, sekaligus merupakan debut penyutradaraannya.', 35000),
(23, 'Ivanna', '2', 'https://upload.wikimedia.org/wikipedia/id/thumb/3/32/Poster_Ivanna.jpeg/220px-Poster_Ivanna.jpeg', 'Ivanna adalah film horor Indonesia tahun 2022 yang disutradarai oleh Kimo Stamboel. Film yang diadaptasi dari novel Ivanna van Dijk karya Risa Saraswati ini, dibintangi oleh Caitlin Halderman, Jovarel Callum, Junior Roberts, Shandy William, dan Sonia Alyssa', 35000),
(24, 'Nope', '2', 'https://upload.wikimedia.org/wikipedia/en/e/e6/Nope_%28film%29_poster.jpg', 'Nope adalah film horor fiksi ilmiah Amerika yang akan datang yang ditulis, disutradarai, dan diproduksi bersama oleh Jordan Peele di bawah panji Monkeypaw Productions-nya. Dibintangi oleh Daniel Kaluuya, Keke Palmer, dan Steven Yeun.', 35000),
(25, 'Mencuri Raden Saleh', '2', 'https://m.media-amazon.com/images/M/MV5BZDlhMTBkNWItOGMxMy00ZDNmLWExNDMtNDhlZTgzM2VlZjRlXkEyXkFqcGdeQXVyMjkyOTg5NjI@._V1_.jpg', 'Mencuri Raden Saleh adalah sebuah film drama aksi perampokan Indonesia mendatang yang disutradarai oleh Angga Dwimas Sasongko', 35000),
(26, '12 Cerita Glen Anggara', '2', 'https://upload.wikimedia.org/wikipedia/id/b/b6/Poster_film_12_Cerita_Glen_Anggara.jpeg', '12 Cerita Glen Anggara adalah film drama remaja Indonesia tahun 2022 yang disutradarai oleh Fajar Bustomi berdasarkan novel berjudul sama karya Luluk HF sekaligus merupakan sempalan dari film Mariposa yang dirilis pada tahun 2020.', 35000),
(27, 'Pengabdi Setan 2: Communion', '2', 'https://upload.wikimedia.org/wikipedia/id/5/53/Poster_promosional_Film_Pengabdi_setan_2_-_Komuni.jpeg', 'Pengabdi Setan 2: Communion adalah sebuah film horor Indonesia tahun 2022 yang disutradarai dan ditulis oleh Joko Anwar. Film ini merupakan sekuel dari film Pengabdi Setan', 35000),
(28, 'Super Pets', '2', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQaUKvA8GjgBNb32LvhWEG49ENhrtuHRW0aTtpZHTDqcqDB-Afi', 'DC League of Super-Pets adalah animasi komputer 3D superhero film komedi Amerika yang akan datang diproduksi oleh Warner Animation Group, berdasarkan tim superhero DC Comics Legion of Super-Pets. Film ini disutradarai oleh Jared Stern, yang ikut menulisnya dengan John Whittington.', 45000),
(50, 'Blazing Samurai', '5', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ3fMS8U5x1rXpaoMUnhGKt0bDqzwVmvco0cstYrUllihlclFhd', 'Blazing Samurai adalah sebuah film komedi petualangan laga naimasi komputer Amerika Serikat yang terinspirasi oleh film komedi koboi tahun 1974 Blazing Saddles, garapan Chris Bailey dan ditulis oleh Ed Stone dan Nate Hopper. Film tersebut menampilkan Michael Cera, Samuel L.', 40000),
(51, 'Teen Titans Go! & DC Super Hero Girls: Mayhem in the Multiverse', '5', 'https://image.tmdb.org/t/p/w200/3Hnhf1FqVGnh20hKlHbiRvHhB5b.jpg', '', 20000),
(52, 'Dragon Ball Super: Pahlawan Super', '5', 'https://image.tmdb.org/t/p/w200/jUiaVnAo0aRzQYMfxOfzdHcltZ2.jpg', '', 20000),
(53, 'The Ice Age Adventures of Buck Wild', '5', 'https://image.tmdb.org/t/p/w200/zzXFM4FKDG7l1ufrAkwQYv2xvnh.jpg', '', 20000),
(54, 'Peterchens Mondfahrt', '5', 'https://image.tmdb.org/t/p/w200/ayodKoUm9RYRlxVLzbWGd9OJNgj.jpg', '', 20000),
(55, 'Hotel Transylvania: Transformania', '5', 'https://image.tmdb.org/t/p/w200/6zt5l4DYV1kLPL5Vqz1kLq3THXD.jpg', '', 20000),
(56, 'The Seven Deadly Sins: Terkutuk oleh Cahaya', '5', 'https://image.tmdb.org/t/p/w200/8AnML0t6LreZyiQ1kVkJVzoGltZ.jpg', 'Meliodas dan kawan-kawannya kembali beraksi ketika era baru yang penuh kedamaian terancam oleh aliansi sihir hebat yang bisa mengakhiri segalanya.', 20000),
(57, 'Demon Slayer - Kimetsu no Yaiba - The Movie: Mugen Train', '5', 'https://image.tmdb.org/t/p/w200/m9cn5mhW519QKr1YGpGxNWi98VJ.jpg', 'Tanjirou Kamado dan teman-temannya Pembasmi Iblis menemani Hashira Api Kyoujirou Rengoku, untuk menyelidiki kasus misterius yang terjadi di dalam kereta. Tak banyak yang mereka ketahui tentang keberadaan Enmu, salah satu dari Dua Belas Kizuki yang juga berada di dalam kereta dan telah menyiapkan perangkap untuk mereka.', 20000),
(58, 'Encanto', '5', 'https://image.tmdb.org/t/p/w200/4j0PNHkMr5ax3IA8tjtxcmPU3QT.jpg', '', 20000),
(59, 'My Hero Academia THE MOVIE World Heroes Mission', '5', 'https://image.tmdb.org/t/p/w200/4jW9xHLtYdprjg38arANzNeGuKW.jpg', '', 20000),
(62, 'Spider-Man: No Way Home', '6', 'https://image.tmdb.org/t/p/w200/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg', 'Peter Parker menghadapi masalah besar. Hal ini terjadi setelah identitasnya sebagai Spiderman terungkap. Dengan kepergian Tony Stark, Peter Parker pun harus meminta bantuan Doctor Strange agar semua orang bisa melupakan identitasnya sebagai manusia laba-laba.', 20000),
(63, 'Uncharted', '6', 'https://image.tmdb.org/t/p/w200/tlZpSxYuBRoVJBOpUrPdQe9FmFq.jpg', 'menceritakan tentang aksi perburuan harta karun terbesar yang tidak pernah ditemukan. Nathan Drake merupakan seorang bartender yang pintar. Nathan mengaku bahwa dirinya adalah keturunan dari penjelajah kenamaan asal Inggris bernama Sir Francis Drake.', 20000),
(65, 'Interceptor', '6', 'https://image.tmdb.org/t/p/w200/cpWUtkcgRKeauhTyVMjYHxAutp4.jpg', 'Seorang letnan Angkatan Darat menggunakan pelatihan taktisnya selama bertahun-tahun untuk menyelamatkan umat manusia dari enam belas rudal nuklir yang diluncurkan di AS saat serangan terkoordinasi dengan kekerasan secara bersamaan mengancam stasiun pencegat rudal jarak jauhnya.', 20000),
(66, 'Doctor Strange', '6', 'https://image.tmdb.org/t/p/w200/uGBVj3bEbCoZbDjjl9wTxcygko1.jpg', 'Hidup Stephen Vincent Strange (Benedict Cumberbatc), seorang doktor bedah yang pintar namun sombong, mendadak berubah drastis. Sebuah kecelakaan mobil membuat kemampuan tangannya menjadi sangat terbatas. Bertekad untuk menyembuhkan kondisinya, ia pun berpetualang mencari obat untuk memulihkan tangannya.  Perjalanan tersebut mempertemukan sang doktor bedah dengan penyihir bernama The Ancient One (Tilda Swinto), yang kemudian mengangkat Strange menjadi murid, dengan tujuan menjadikan ia sebagai pelindung alam manusia. Kali ini Strange harus mengesampingkan egonya, dan menggunakan segala kemampuannya untuk menjadi perantara antara dimensi manusia dan dimensi lain.', 20000),
(68, 'Doctor Strange in the Multiverse of Madness', '6', 'https://image.tmdb.org/t/p/w200/hq2igFqb31fDqGotz8ZuUfwKgn8.jpg', '', 20000),
(69, 'The Batman', '6', 'https://image.tmdb.org/t/p/w200/3VFI3zbuNhXzx7dIbYdmvBLekyB.jpg', 'Ketika seorang pembunuh berantai sadis mulai membunuh tokoh-tokoh politik penting di Gotham, Batman terpaksa menyelidiki korupsi tersembunyi di kota itu dan mempertanyakan keterlibatan keluarganya.', 20000),
(72, 'A Day to Die', '7', 'https://image.tmdb.org/t/p/w200/8Kce1utfytAG5m1PbtVoDzmDZJH.jpg', '', 20000),
(75, 'The Lost City', '7', 'https://image.tmdb.org/t/p/w200/neMZH82Stu91d3iqvLdNQfqPPyl.jpg', 'The Lost City mengisahkan tentang seorang penulis novel yang hobi menyendiri bernama Loretta Sage. Ia baru saja menyelesaikan novel romantis terbarunya yang bercerita tentang kota yang hilang. Saat tengah melakukan promosi untuk novel terbarunya, Loretta Sage diculik oleh lelaki bernama Abigail Fairfax.', 20000),
(76, 'Memory', '7', 'https://image.tmdb.org/t/p/w200/QaNLpq3Wuu2yp5ESsXYcQCOpUk.jpg', 'Sinopsis film alam Memory berfokus pada Alex Lewis (Liam Neeso), pembunuh bayaran profesional yang ternyata mengidap alzheimer, penyakit pada otak yang menyebabkan menurunnya daya ingat. Tugas Alex makin rumit ketika ia menyadari bahwa kontrak yang telah dia sepakati mengharuskannya membunuh anak di bawah umur. Dia pun bertekad membatalkan kontrak tersebut dan berbalik memburu orang-orang dalam sindikat kejahatan yang mempekerjakannya. Upaya balas dendam Alex turut diwarnai aksi pengejaran oleh agen FBI Vincent Serra (Guy Pearc), dan intel dari Meksiko. Pada saat yang sama, Alex harus berjuang mempertahankan daya ingatnya yang makin menurun.', 20000),
(85, 'Turning Red', '8', 'https://image.tmdb.org/t/p/w200/qsdjk9oAKSQMWs0Vt5Pyfh6O4GZ.jpg', '', 20000),
(88, 'Bebas', '8', 'https://cdn.kincir.com/1/production/media/2019/agustus/para-artis-ternama-mejeng-di-poster-resmi-film-bebas/1-poster-film-bebas-resmi-baim-wong.jpg', 'a', 30000),
(89, 'The Contractor', '8', 'https://image.tmdb.org/t/p/w200/rJPGPZ5soaG27MK90oKpioSiJE2.jpg', '', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `username`, `pass`) VALUES
(9, 'elisa@gmail.com', 'elisa', '123'),
(10, 'admin@gmail.com', 'admin', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `reviuw`
--

CREATE TABLE `reviuw` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `reviuw_film` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviuw`
--

INSERT INTO `reviuw` (`id`, `id_film`, `reviuw_film`) VALUES
(3, 50, 'baguss banget'),
(4, 1, 'bagus');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `checked` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `id_film`, `quantity`, `checked`, `created_at`) VALUES
(58, 1, 3, 1, '2022-07-07 18:41:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviuw`
--
ALTER TABLE `reviuw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviuw`
--
ALTER TABLE `reviuw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cinema`
--
ALTER TABLE `cinema`
  ADD CONSTRAINT `id_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`);

--
-- Constraints for table `reviuw`
--
ALTER TABLE `reviuw`
  ADD CONSTRAINT `reviuw_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



