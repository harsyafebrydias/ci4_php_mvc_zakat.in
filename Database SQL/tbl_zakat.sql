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
-- Struktur dari tabel `tbl_zakat`
--

CREATE TABLE `tbl_zakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jns_zakat` varchar(200) NOT NULL,
  `jml_zakat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_zakat`
--

INSERT INTO `tbl_zakat` (`nik`, `nama`, `alamat`, `tanggal`, `jns_zakat`, `jml_zakat`) VALUES
('3674050203001011', 'Harsya Febrydias', 'jl. Raya Pondok Petir Depok rt. 003/001 Depok', '2023-04-19', 'Uang', 'Rp 35.000,00'),
('1234561234561234', 'Ankara Messi', 'Argentina', '2023-05-02', 'Beras', '3 Kg'),
('1111111111111111', 'Ranggasu', 'artinya apa bang messi', '2023-05-04', 'Uang', 'Rp 35.000,00'),
('6543216543216543', 'Ronaldo', 'Arab', '2023-12-25', 'Beras', '3 Kg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
