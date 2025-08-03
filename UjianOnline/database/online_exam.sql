-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2025 at 05:04 AM
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
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `soal_id` int(11) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `benar` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `user_id`, `soal_id`, `jawaban`, `benar`) VALUES
(1, 1, 1, 'c', 1),
(2, 1, 2, 'c', 1),
(3, 1, 3, 'b', 0),
(4, 1, 4, 'a', 0),
(5, 1, 5, 'a', 0),
(6, 1, 6, 'b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi_a` varchar(100) DEFAULT NULL,
  `opsi_b` varchar(100) DEFAULT NULL,
  `opsi_c` varchar(100) DEFAULT NULL,
  `opsi_d` varchar(100) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `pertanyaan`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `jawaban`) VALUES
(1, 'Air adalah salah satu sumber daya alam yang sangat penting bagi kehidupan manusia, antara lain berfungsi sebagai ….', 'Sumber barang elektronik', 'Alat untuk membuat tanaman', 'Sumber minuman', 'Alat untuk bahan bakar', 'c'),
(2, 'Pakaian adat berikut ini yang tidak berasal dari daerah di pulau Sumatra adalah ….', 'Ulos', 'Aesan Gede', 'Kebaya', 'Bundo Kaduang', 'c'),
(3, 'Betang, Joglo dan Gadang adalah contoh kergaman budaya Indonesia berupa ….', 'Pakaian adat', 'Tarian daerah', 'Lagu daerah', 'Rumah adat', 'd'),
(4, 'Betang, Joglo dan Gadang adalah contoh kergaman budaya Indonesia berupa ….', 'Pakaian adat', 'Tarian daerah', 'Lagu daerah', 'Rumah adat', 'd'),
(5, 'Air di bumi mengalami siklus yang terus berputar, proses penguapan air laut dalam siklus air disebut juga dengan ….', 'Kondensasi', 'Evaporasi', 'Presipitasi', 'Infiltrasi', 'b'),
(6, 'Ikan-ikan di sungai akan mati  jika tidak ada air, hal ini mennandakan bahwa ada jenis hewan yang membutuhkan air sebagai ….', 'Sumber makanan', 'Alat transportasi', 'Tempat hidupnya', 'Alat berkembangbiak', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','siswa') DEFAULT 'siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'Yoan', '$2y$10$A7MXLOtFLLA1kKZzgDBl4eWhPTdSvlSWUvFWWRgW1W3CR2v3iP6x2', 'siswa'),
(2, 'admin', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `soal_id` (`soal_id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `jawaban_ibfk_2` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
