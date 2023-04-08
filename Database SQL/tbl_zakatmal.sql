-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2023 pada 08.50
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
-- Struktur dari tabel `tbl_zakatmal`
--

CREATE TABLE `tbl_zakatmal` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jml_hasil` varchar(200) NOT NULL,
  `jml_zakat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_zakatmal`
--

INSERT INTO `tbl_zakatmal` (`nik`, `nama`, `alamat`, `tanggal`, `jml_hasil`, `jml_zakat`) VALUES
('3674050203001011', 'Harsya Febrydias', 'jl. Raya Pondok Petir Depok', '2023-04-17', '1000000000', '25000000'),
('1234561234561234', 'Ranggasu', 'Tangerang', '2023-05-01', '2000000', '50000'),
('1111111111111111', 'Mbappe', 'Komplek Paris', '2023-04-11', '4000000000', '100000000'),
('6543216543216543', 'Ronaldo', 'Arab', '2023-05-06', '10000000000', '250000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
