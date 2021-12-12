-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Des 2021 pada 10.16
-- Versi server: 5.7.33-0ubuntu0.18.04.1
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma2raha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `animeku`
--

CREATE TABLE `animeku` (
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `link` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `animeku`
--

INSERT INTO `animeku` (`gambar`, `judul`, `deskripsi`, `link`) VALUES
('123', '123', '123', '123'),
('higehiro.jpg', 'higehiro', 'genre : drama, romance', 'mega.nz/file/wbwxQaab#AieFTL5geAmow13XMiBVpZ9E4LVJ_0M-0WBLDDkqvk8'),
('tate.jpg', 'tate no yuusha', 'genre : romance, action, advanture, fantasy', 'mega.nz/file/yXQG0ACI#83ee_zG8ZvdZbp4r-PoZrl2u9njShndSw1IWXygUcI0'),
('watamote.jpeg', 'watamote', 'keseharian tomoko kuroki sebagai seorang otaku nolep', 'https://mega.nz/#!XeB0lCIa!AQVKymYwvCDlhsK5492MlJUKfsaOt35M5AkT1Jp_1go'),
('wataten.jpg', 'wataten', 'anime ini ber  cerita  tentang mya  nee seorang otakus nolep ', 'https://mega.nz/file/LbJlWCIC#YI7ubBpuExH4qrLLg0xRD1TU89Zm_-Ji9JoIvg0rP6Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `HENTAI`
--

CREATE TABLE `HENTAI` (
  `gambar` varchar(500) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `HENTAI`
--

INSERT INTO `HENTAI` (`gambar`, `judul`, `deskripsi`, `link`) VALUES
('A.jpg', 'asas', 'asas', 'asas'),
('b.png', 'asasa', 'sasas', 'as');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `animeku`
--
ALTER TABLE `animeku`
  ADD PRIMARY KEY (`judul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
