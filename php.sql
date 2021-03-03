-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2021 pada 03.00
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `develop`
--

CREATE TABLE `develop` (
  `nama_dev` varchar(25) NOT NULL,
  `nim` char(12) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `mata_kuliah` varchar(10) NOT NULL,
  `dosen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `develop`
--

INSERT INTO `develop` (`nama_dev`, `nim`, `jurusan`, `fakultas`, `mata_kuliah`, `dosen`) VALUES
('Fuad Kusumah', '16271065065', 'Teknik Informatika', 'Teknologi Industri', 'SKPI-PHP', 'Irlon M.Kom, MMSi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(4) NOT NULL,
  `nip` char(16) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `nisn` char(16) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_kawin` varchar(25) NOT NULL,
  `pendidikan_terakhir` varchar(14) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `thn_lulus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `nisn`, `jenis_kelamin`, `agama`, `status_kawin`, `pendidikan_terakhir`, `jurusan`, `thn_lulus`) VALUES
(1, '3160758660300083', 'Faidah Faisal, S.Pd.I', '3160758660300083', 'perempuan', 'Islam', 'Kawin', 'S1', 'PAI', '2004'),
(2, '3175044606810000', 'Dwi Anggraeni, S.Pd', '3175044606810000', 'perempuan', 'Islam', 'Blm kwn', 'S1', 'Pendidikan', '2008'),
(3, '3275085108910018', 'Ulya Rahma Baiti,S.Pd', '3275085108910018', 'perempuan', 'Islam', 'Kawin', 'S1', 'Pend. B. Ind', '2009'),
(4, '2533760662200030', 'Tasim Ahmad Qurthubi, S.P', '2533760662200030', 'laki-laki', 'Islam', 'Kawin', 'S1', 'Pendidikan', '2007'),
(51, '01', 'guru 2', '01', 'laki-laki', 'islam', 'islam', 'SMA/Sederajat', 'sastra inggris', '2000'),
(52, '01', 'guru 1', '', 'laki-laki', 'islam', 'islam', 'SMA/Sederajat', 'sastra inggris', '2000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(4) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tgl` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` int(14) NOT NULL,
  `ayah` varchar(25) NOT NULL,
  `ibu` varchar(25) NOT NULL,
  `kelas` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `agama`, `tempat`, `tgl`, `alamat`, `telp`, `ayah`, `ibu`, `kelas`) VALUES
(1, 111747007, 'AFZALURAHMAN AL FARISI', 'L', 'Islam', '', '0000-00-00', 'Jl. Merak No.22, Komplek Taspen, Bumi Makmur', 0, 'Faris Arif Rahman', 'Silviana Sona Avila', 'kelas 3C'),
(2, 117491408, 'AGASTYA FIQLI SATYA RAFIF', 'L', 'Islam', '', '0000-00-00', 'De\\\' Sanctuary F8', 0, 'Hamdan Satriyo', 'Adibawana Wulansahitri', 'kelas 3B'),
(3, 113653348, 'AGHNY ZAHIDAH', 'P', 'Islam', '', '0000-00-00', 'Jl.KH. Madani No.197', 0, 'Moehammad Tho\'im', 'Ika Budhi Rachmayanti', ''),
(4, 102323436, 'ALIFAH RAHMANIA MUNTAHAR', 'P', 'Islam', '', '0000-00-00', 'Jl. Kenanga III Blok J3/7 Duta Indah', 0, 'Frimansyah Andi Muntahar', 'Evi Rahmayanthi', ''),
(5, 104538484, 'AMIRA NUR SHABRINA', 'P', 'Islam', '', '0000-00-00', 'Komplek purinusaphala. jl citra asih 3 Blok N no 8', 0, 'Dihar Simapura', 'Terry W U', ''),
(62, 1, 'siswa3', 'laki-laki', 'islam', 'jakarta', '2021-03-02', 'jakarta', 0, '', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `NoId` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `userName` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`NoId`, `Name`, `userName`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '123'),
(2, 'fuad', 'fuad', 'fuad@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`NoId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `NoId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
