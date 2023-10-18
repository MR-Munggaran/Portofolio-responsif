-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 04:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `namaSaya` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `nama`, `ukuran`, `tipe`, `namaSaya`, `deskripsi`) VALUES
(1, 'me.jpg', 324083, 'image/jpeg', 'Muhammad Rafi Munggaran', 'Saya adalah individu yang penuh semangat dan memiliki minat yang kuat dalam dunia teknologi. Walaupun belum memiliki pengalaman bekerja baik secara offline maupun online, namun semangat saya dalam mengeksplorasi teknologi tidak pernah surut. Saya secara konsisten mengikuti berbagai kursus online yang tersedia di platform seperti Dicoding dan Codepolitan, memperluas pengetahuan saya dalam berbagai bidang teknologi. Meskipun fokus utama saya adalah pada pengembangan backend website, saya tetap terbuka untuk menjelajahi bidang lain seperti pengembangan aplikasi mobile untuk platform Android, jaringan, dan bahkan iOS.\r\n<br>\r\n<br>\r\nSelain itu, saya juga memiliki kemampuan di bidang frontend yang terus saya tingkatkan. Saya masih berada dalam fase belajar dan eksplorasi di kedua bidang ini, dan meskipun saya belum terlibat dalam proyek yang signifikan, saya telah mencoba merancang beberapa proyek dummy untuk meningkatkan pemahaman saya.\r\n<br>\r\n<br>\r\nDi luar dunia teknologi, saya menikmati bermain game, yang sebagian besar telah memberikan inspirasi tambahan bagi minat saya dalam teknologi. Melalui mengubah coding menjadi hobi, saya merasa bahwa proses pembelajaran menjadi lebih menyenangkan dan tidak terasa seperti kewajiban semata. Saya berharap dengan informasi ini, pembaca dapat memiliki gambaran yang lebih baik tentang siapa saya.');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `ukuran`, `tipe`) VALUES
(1, 'saya.jpg', 324083, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `namaSaya` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `nama`, `ukuran`, `tipe`, `namaSaya`, `deskripsi`) VALUES
(1, 'me.jpg', 324083, 'image/jpeg', 'M Rafi Munggaran', '<p>Salam hangat untuk Anda yang telah singgah di portofolio saya. Saya dengan bangga merupakan mahasiswa semester 5 jurusan Informatika di Universitas Pembangunan Jaya, Indonesia. Dengan semangat belajar yang tak pernah pudar, saya selalu bersemangat untuk mengeksplorasi lebih dalam dalam dunia informatika. Terima kasih atas kunjungan Anda, salam kenal</p>');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `ket` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `nama`, `ukuran`, `tipe`, `judul`, `ket`, `link`) VALUES
(1, 'games-pygame.jpg', 83242, 'image/jpeg', 'Python games', '<p>saya pernah membuat games sederhhana dari python menggunakan pygame</p>', 'https://github.com/MR-Munggaran/percobaan-game-1'),
(2, 'calc.jpg', 109725, 'image/jpeg', 'Calculator', '<p>Saya juga pernah membuat sebuah kalkulator dari python</p>', 'https://github.com/MR-Munggaran/Kalkulator'),
(3, 'convert.jpg', 106599, 'image/jpeg', 'Konversi', '<p> saya juga membuat sebuah program konversi suhu dari F to K. saya membuatnya menggunakan python', 'https://github.com/MR-Munggaran/Konversi-Fahrenheit-to-Kelvin'),
(4, 'portofolio-bootstrap.jpg', 69869, 'image/jpeg', 'Portofolio BS', '<p>sebelum saya membuat portoffolio sekarang, sebelumnya saya pernah membuat. saya menonton WP UNPAS.</p>', 'https://github.com/MR-Munggaran/portofolio-bs-dummy'),
(5, 'web-toko.jpg', 319309, 'image/jpeg', 'Web Toko', '<p>ini adalah hasil belajar dari youtube WP UNPAS jadi masih sama persis dan belum diganti 100%, mohon tidak salah paham. terima kasih.</p>>', 'https://github.com/MR-Munggaran/Web-Kedai.github.io'),
(6, 'Web-pernikahan.jpg', 316212, 'image/jpeg', 'Web pernikahan', '<p>web ini adalah hasil dari melihat youtube WP UNPAS jadi hasilnya masih sedikit sama persis dan belum banyak di ganti</p>', 'https://github.com/MR-Munggaran/Web-Pernikahan');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `ket` text NOT NULL,
  `icons` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `judul`, `ket`, `icons`) VALUES
(1, 'Backend Website', '<p>\r\nSaya memiliki kemampuan utama dalam membangun backend website dan berkomitmen untuk terus meningkatkan pengetahuan dan keterampilan saya melalui berbagai sumber pembelajaran online seperti kursus dan tutorial di YouTube. Meskipun saya belum mencapai tingkat keahlian yang mendalam, saya gigih dalam mengikuti tutorial pembuatan website, dan saat ini, saya telah memperoleh pemahaman dasar yang kuat tentang PHP dan CodeIgniter. Selain itu, saya sedang giat mengembangkan keterampilan saya dalam menggunakan Laravel serta sedang fokus mempelajari Node.js untuk meningkatkan kemampuan pengembangan saya di berbagai aspek. Saya berharap berkontribusi dalam proyek-proyek dan terus berkembang sebagai pengembang web yang terampil dan berdedikasi.</p>\r\n\r\n', '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARtJREFUSEu1ldENwjAMRF83gU1gEmASYBLYBDaBTUBX1SgKTupaar9Qk/r57uIwsPIzrFyfLGADvCPNZQAq/gKewH4OkgEcgduagAtwBq6AfnefjIIHsJvskU1pgLxWoXtRwfzXK2tOKrTHDb2lQIXVqZ7SCgOo2BawPLRPgf8p8gDmsT6qT4rnvwIXqG5mfFEDzF9386RK6uqABT4AUii7tD5aVgLK4q5c4DN16ikXWGoMcqoBGh4ttvys/a9PT5mbZfRnUc/P3oA1c2uF7PnZGrBubr1jan5aHt6ApY6peSvPVUCdewNm+7RHnrtTHb0q5gJuXhdRwKILrqRFAeZ/6AbNAGxGog39GEs+CP9NZhT0L/3O6hIFKcgXbmJKGRWkFLIAAAAASUVORK5CYII=\"/>'),
(2, 'Frontend Website', '<p>Saya juga memiliki kemampuan dalam pengembangan frontend website. Saya yakin bahwa menguasai frontend memberikan kesempatan besar untuk menerapkan desain yang menarik dan menyelaraskan dengan fungsi backend. Di bidang frontend, saya telah memperoleh pemahaman dasar yang kuat dalam HTML, CSS, dan JavaScript. Dalam hal CSS, saya terampil dalam menggunakan Bootstrap, memiliki beberapa pengetahuan dalam Tailwind, dan menguasai Sass CSS untuk meningkatkan efisiensi dalam pengembangan. Meskipun belum sepenuhnya menguasai framework JavaScript, saat ini saya sedang mempelajari Vue.js dengan tekun dan berharap dapat mengintegrasikan pengetahuan ini dengan kemampuan backend saya untuk menciptakan solusi website yang lengkap dan berkualitas.\r\n\r\n\r\n</p>', '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALZJREFUSEvtlMENgDAMA80msAlsApPAJrAJqzAKCioSgrguSBWf9tNHI1/iNKmQ+VSZ9VEA0uHfLaoBtAAWkuoU3jZWSqwCE58DYHAgJj4CMPEu3A8OA1zFTaBxMrSYFYDdFOIBUsRPnoTcAW/EkyBXwBdxCbkDpKfkt9DkPIveQqKVsyanQqStsW+qIFLc7FSDdkK8QevDILI5OdqldlHKqrCJpkcB5LZUAQWgHJJNlgIqIHsPdt9sNhnf01JXAAAAAElFTkSuQmCC\"/>'),
(3, 'Database', '<p>Dalam tambahan pada fokus pengembangan backend dan frontend, saya juga telah mencurahkan waktu untuk memperoleh pengalaman dalam menguasai MySQL, sebuah sistem manajemen basis data yang sangat umum digunakan dalam industri. Saya sering menggunakan phpMyAdmin sebagai alat untuk mengelola data secara efisien. Saya memahami betapa pentingnya penyimpanan data yang teratur dan efektif, dan saya mampu menjalankan tugas-tugas seperti membersihkan data, mengatur basis data, dan memodifikasi data untuk memastikan integritas dan konsistensi yang terjaga. Keterampilan ini memungkinkan saya untuk merancang dan mengelola basis data yang dapat mendukung aplikasi web dengan efisien, menjadikan saya seorang pengembang web yang berfokus pada kualitas dan performa yang tinggi.</p>', '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAANhJREFUSEvFldENwjAMRK+bwCawCUxSmAQ2gU1gE6pDCTKWHGy5CfmJlDb3bJ/lTOi8ps76GArYAZgBcM+sO4AzAO5fGTwAbDLK4i7F9xrwWkm8yrzLLz0YBsgaXwM1MxgOoPHsrKvy6FTOnuo8lAHFLwVwFBCKs6Upzm6REDdAilNgKyLlt1tpaw1xAVrilWNB3AArQgmo5ZMZugAUaZWhlaEboCHS5EMxX3vDOyFAhVhtym7SKwyIjqj/AdYc1x9v5Nxhndl22TfBfHCitXb9n52cPyHdAQv4ZkYZXjPOLAAAAABJRU5ErkJggg==\"/>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
