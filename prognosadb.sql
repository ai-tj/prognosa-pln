-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2024 pada 08.04
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prognosadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `prognosa`
--

CREATE TABLE `prognosa` (
  `id` int(11) NOT NULL,
  `indikator` varchar(255) NOT NULL,
  `jenis_ukur` varchar(255) NOT NULL,
  `polaritas` varchar(255) NOT NULL,
  `bobot` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `target` float NOT NULL,
  `sesuai_target` float NOT NULL,
  `diluar_target` float NOT NULL,
  `nilai_target` float NOT NULL,
  `pencapaian` float NOT NULL,
  `pencapaian_persen` int(11) NOT NULL,
  `nilai_indikator` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prognosa`
--

INSERT INTO `prognosa` (`id`, `indikator`, `jenis_ukur`, `polaritas`, `bobot`, `satuan`, `target`, `sesuai_target`, `diluar_target`, `nilai_target`, `pencapaian`, `pencapaian_persen`, `nilai_indikator`) VALUES
(57, '1', '1', 'Positif', 10, 'MW', 460, 460, 0, 1, 1, 100, 10),
(59, '2', '1', 'Positif', 10, 'kms', 14, 14, 1.4, 1.07143, 1.1, 110, 11),
(62, '3', '1', 'Positif', 10, 'MVA', 250, 250, 0, 1, 1, 100, 10),
(63, '4', '2', 'Positif', 10, '%', 100, 100.82, 0, 1.0082, 1.0082, 101, 10.082),
(66, '5', '1', 'Positif', 6, 'MW', 43, 0, 57.1, 0.57043, 0.57043, 57, 3.42258),
(67, '6', '1', 'Positif', 5, 'Proyek', 7, 5, 5, 1.13095, 1.1, 110, 5.5),
(68, '7', '', 'Positif', 5, 'Rp', 94.24, 291.51, 0, 3.09327, 1.1, 110, 5.5),
(69, '8', '1', 'Positif', 5, 'Ha', 4.28, 10.9186, 0, 2.55107, 1.1, 110, 5.5),
(70, '9', '1', 'Positif', 5, 'Izin', 6, 6, 4, 1.66667, 1.1, 110, 5.5),
(71, '10', '2', 'Positif', 5, 'Dokumen Legal', 256, 292, 0, 1.14062, 1.1, 110, 5.5),
(72, '11', '3', 'Positif', 5, 'Rp Milyar', 2.261, 2240.6, 0, 990.977, 1.1, 110, 5.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'admin', 'admin@email.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
(5, 'root', 'root@email.cpm', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `prognosa`
--
ALTER TABLE `prognosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `prognosa`
--
ALTER TABLE `prognosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
