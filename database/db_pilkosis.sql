-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2021 pada 09.21
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pilkosis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alamat`
--

CREATE TABLE `tb_alamat` (
  `id` int(11) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `kode_pos` varchar(300) NOT NULL,
  `telepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_alamat`
--

INSERT INTO `tb_alamat` (`id`, `alamat`, `kode_pos`, `telepon`) VALUES
(0, 'Jl. Cemara No.37, Karangasem, Karangsari Kec. Kebumen, Kabupaten Kebumen, Jawa Tengah ', '54317', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `nama_paslon` varchar(30) NOT NULL,
  `calon_ketua` varchar(40) NOT NULL,
  `calon_wakil` varchar(40) NOT NULL,
  `visi` varchar(300) NOT NULL,
  `misi` varchar(300) NOT NULL,
  `proker` varchar(300) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_calon`
--

INSERT INTO `tb_calon` (`id`, `no`, `nama_paslon`, `calon_ketua`, `calon_wakil`, `visi`, `misi`, `proker`, `foto`) VALUES
(43, 1, 'FATIN', 'Fatika Rachmawati', 'Tias Nur Wahidayah Ningsih', 'Menciptakan siswa siswi smk n1 kebumen yang religius , unggul, dan kompeten dalam bidang maupun non akademik', '1. Menerapkan nilai religius dalam segala bidang2. ... dst', '1. Mengadakan peringatan hari besar agama dan hari besar nasional', 'foto-211105-603ebefccb.jpeg'),
(44, 2, 'ERLIZA', 'Erlinda Prisnasari', 'M. Dzaki Syarofi Salim', 'visi.....', 'missiiii', 'test', 'foto-211105-cb93a52df5.jpeg'),
(45, 3, 'FAIDA', 'Faizal Jefrin Al Diansyah', 'Ghaida Azzahra', 'test', 'test', 'test', 'foto-211105-d333b665f3.jpeg'),
(46, 4, 'Venaz', 'Veni Ramadani', 'Nazwa Amelia  Putri', 'test', 'test', 'test', 'foto-211105-d6babadfec.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chat`
--

CREATE TABLE `tb_chat` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `message` varchar(300) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `kelas` varchar(300) NOT NULL,
  `feedback` varchar(300) NOT NULL,
  `saran` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(500) NOT NULL,
  `tanggal_mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `nama_kegiatan`, `tanggal_mulai`) VALUES
(1, 'Pemilihan Ketua Osis Dan Wakil Ketua Osis\r\nSMK N 1 KEBUMEN akan dilakukan pada tanggal\r\n', '2021-09-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nis` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`, `nis`, `kelas`, `foto`, `is_active`) VALUES
(1, 'Admin1', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 15278, 'XII RPL 1', 'foto-210922-b6c85545f9.png', 1),
(3, 'Indah Suryaningsih', '15278', 'a30fe92c057988e6ea6c25e99296da62df4b620f', 15278, '12 RPL 1', 'foto-211105-f5b63f5fb8.jpg', 2),
(4, 'Azizah', '15270', 'd2f1388066ebe854b0aa742fd9b7639975fdd516', 15278, 'XII RPL 1', 'admin.png', 2),
(5, 'Safira ss', '15293', '1cd09bd25bb1cddfd6ed85f460eace316c7a84a5', 15278, 'XII RPL 1', 'admin.png', 2),
(6, 'Ilham', '15784', '7ea584a18bef8c220357fc2ba344d29549aff971', 15278, 'XI RPL 1', 'admin.png', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemilih`
--

CREATE TABLE `tb_pemilih` (
  `id` int(11) NOT NULL,
  `no_kandidat` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `tgl_pemilihan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `kelas` varchar(300) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id`, `nama`, `kelas`, `no_hp`, `pertanyaan`) VALUES
(3, 'Indah Suryaningsih', 'XII RPL1', 2147483647, 'halo kak ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pilkosis`
--

CREATE TABLE `tb_pilkosis` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(300) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pilkosis`
--

INSERT INTO `tb_pilkosis` (`id`, `nama_kegiatan`, `tanggal_mulai`, `tanggal_akhir`) VALUES
(8, '', '2021-11-05', '2021-11-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suara`
--

CREATE TABLE `tb_suara` (
  `no_kandidat` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pasangan` varchar(30) NOT NULL,
  `hasil_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_calon`
--
ALTER TABLE `tb_calon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemilih`
--
ALTER TABLE `tb_pemilih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pilkosis`
--
ALTER TABLE `tb_pilkosis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_suara`
--
ALTER TABLE `tb_suara`
  ADD PRIMARY KEY (`no_kandidat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pemilih`
--
ALTER TABLE `tb_pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pilkosis`
--
ALTER TABLE `tb_pilkosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_suara`
--
ALTER TABLE `tb_suara`
  MODIFY `no_kandidat` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
