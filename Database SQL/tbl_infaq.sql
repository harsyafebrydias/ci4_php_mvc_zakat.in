-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2023 pada 08.49
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_infaq`
--

CREATE TABLE `tbl_infaq` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jml_infaq` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_infaq`
--

INSERT INTO `tbl_infaq` (`nik`, `nama`, `alamat`, `tanggal`, `jml_infaq`) VALUES
('3674050203001011', 'Ronaldo', 'Arab', '2023-04-17', '250000000'),
('1234561234561234', 'Harsya Febrydias', 'jl. Raya Pondok Petir Depok', '2023-04-05', '100000000'),
('1111111111111111', 'Mbappe', 'Arab', '2023-04-03', '100000000'),
('6543216543216543', 'Ankara Messi', 'artinya apa bang messi?', '2023-02-05', '350000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
