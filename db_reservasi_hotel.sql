-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 08:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diasiapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id_fasilitas_hotel` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id_fasilitas_hotel`, `keterangan`, `foto`) VALUES
(1, 'Kolam Renang', '398-823c97c0d94e6b570a893e38e23c962e_crop_920x530.jpg'),
(2, 'Tempat Tidur', '448-5f081b41cc76c.jpeg'),
(5, 'Lobi', '417-Rayaburi_Hotel_Patong_-_Lobby.jpg'),
(6, 'Tempat Makan', '295-fairmont.jpg'),
(7, 'Gedung Hotell', '313-27677-hotel-tertinggi-di-dunia.jpg'),
(8, 'Resepsionis', '693-Resepsionis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_fasilitas`, `id_kamar`, `fasilitas`) VALUES
(1, 20, 'Kamar Mandi di Dalam\r\nFull AC\r\nKolam Renang\r\nfutsal'),
(3, 21, 'Ruang tamu, Kursi Kamar, Kamar Mandi di Dalam'),
(4, 22, 'Kasur Tidur, Kursi Tamu, Meja Makan');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` varchar(16) NOT NULL,
  `jumlah_kamar` int(4) DEFAULT NULL,
  `stock_kamar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe_kamar`, `foto`, `harga`, `jumlah_kamar`) VALUES
(20, 'Standart Room', '196-standartroom.jpg', '210.000', 3),
(21, 'Suite Room', '800-suiteroom.jpg', '270.000', 3),
(22, 'Deluxe Room', '529-deluxeroom.jpg', '350.000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `komentar`) VALUES
(0, 'ARIF', 'wkwk');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `cek_in` date DEFAULT NULL,
  `cek_out` date DEFAULT NULL,
  `jml_kamar` int(5) DEFAULT NULL,
  `nama_pemesan` varchar(255) DEFAULT NULL,
  `email_pemesan` varchar(255) DEFAULT NULL,
  `hp_pemesan` int(13) DEFAULT NULL,
  `nama_tamu` varchar(255) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `NIK` int(16) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `cek_in`, `cek_out`, `jml_kamar`, `nama_pemesan`, `email_pemesan`, `hp_pemesan`, `nama_tamu`, `id_kamar`, `status`, `NIK`, `Alamat`) VALUES
(6, '2022-05-12', '2022-05-14', 1, 'sri rahayu', 'sri@gmail.com', 2147483647, 'deni', 20, '2', 2147483647, 'way halim'),
(16, '2022-05-01', '2022-05-05', 2, 'zhongli', 'zhongli@gmail.com', 2147483647, 'kazuha', 22, '2', 1234567890, 'desa penari');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `rateIndex` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `rateIndex`) VALUES
(4, 3),
(5, 4),
(6, 1),
(7, 5),
(8, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(26, 'Arif Maulana', 5, 'good job', 1652933729),
(27, 'Rido Al-Fahri', 5, 'lanjutkan', 1652935840),
(28, 'Firmansyah', 4, 'wkwk', 1652939658),
(29, 'Rakhasy', 3, 'Perfect', 1652939693),
(30, 'Arfando', 5, 'Bestttt', 1652940190),
(31, 'Joko', 5, 'hi', 1652940221),
(32, 'orang', 2, 'why', 1652940243),
(33, 'Ismail', 1, 'ez', 1652940271),
(34, 'Udin', 4, 'nani', 1652940317);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','resepsionis','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin', 'admin'),
(3, 'Resepsionis', 'resepsionis', 'resepsionis', 'resepsionis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id_fasilitas_hotel`);

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `id_fasilitas_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
