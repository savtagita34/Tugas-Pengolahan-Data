-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2024 pada 04.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webbaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dataguru`
--

CREATE TABLE `tb_dataguru` (
  `id` int(255) NOT NULL,
  `Kode_Guru` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nip_Guru` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tempat_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Agama` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Nama_Guru` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Status_Pegawai` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Pendidikan_Terakhir` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_dataguru`
--

INSERT INTO `tb_dataguru` (`id`, `Kode_Guru`, `Nip_Guru`, `Tempat_Lahir`, `Jenis_Kelamin`, `Agama`, `Nama_Guru`, `Tanggal_Lahir`, `Status_Pegawai`, `Pendidikan_Terakhir`) VALUES
(5, '0098', 'S.KOM', '2024-11-07', 'Perempuan', 'islam', 'ibu haura', '2024-11-09', 'teta', 'S.kom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datanilai`
--

CREATE TABLE `tb_datanilai` (
  `id` int(250) NOT NULL,
  `Kode_Nilai` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nama_Siswa` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Mata_Pelajaran` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Kelas` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nama_Guru` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nilai_Ulangan_Harian` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nilai_Ujian_Praktek` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nilai_PTS` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nilai_PAS` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nilai_PAT` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_datanilai`
--

INSERT INTO `tb_datanilai` (`id`, `Kode_Nilai`, `Nama_Siswa`, `Mata_Pelajaran`, `Kelas`, `Nama_Guru`, `Nilai_Ulangan_Harian`, `Nilai_Ujian_Praktek`, `Nilai_PTS`, `Nilai_PAS`, `Nilai_PAT`) VALUES
(2, '002', 'aura', 'Pemograman Web', '12 PPLG', 'Ibu Haura', '100', '100', '79', '20', '100'),
(3, '001', 'gita', 'Pemograman Web', '12 PPLG', 'Ibu Haura', '100', '100', '100', '100', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_webbaru`
--

CREATE TABLE `tb_webbaru` (
  `id` int(250) NOT NULL,
  `NISN` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Kelas` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Agama` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Jenis_Kelamin` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tahun_Masuk` date NOT NULL,
  `Nama_Siswa` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Alamat` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Nomor_Telepon` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tempat_Lahir` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_webbaru`
--

INSERT INTO `tb_webbaru` (`id`, `NISN`, `Kelas`, `Agama`, `Jenis_Kelamin`, `Tahun_Masuk`, `Nama_Siswa`, `Alamat`, `Tanggal_Lahir`, `Nomor_Telepon`, `Tempat_Lahir`) VALUES
(16, '0003', '10 AK 1', 'Islam', 'Laki Laki', '2024-11-07', 'Marlina', 'bandung', '2024-10-31', '08676764', 'Bali'),
(17, '0003', '10 AK 1', 'Islam', 'Laki Laki', '2024-11-02', 'Jessica', 'Tanggerang', '2024-11-06', '08676764', 'Bali');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dataguru`
--
ALTER TABLE `tb_dataguru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_datanilai`
--
ALTER TABLE `tb_datanilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_webbaru`
--
ALTER TABLE `tb_webbaru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dataguru`
--
ALTER TABLE `tb_dataguru`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_datanilai`
--
ALTER TABLE `tb_datanilai`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_webbaru`
--
ALTER TABLE `tb_webbaru`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
