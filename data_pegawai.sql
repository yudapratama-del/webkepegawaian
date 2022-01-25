-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2022 pada 15.18
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `judul` varchar(225) CHARACTER SET latin1 NOT NULL,
  `kategori` enum('Keagamaan','Pemerintahan','Pendidikan','Sosial') CHARACTER SET latin1 NOT NULL,
  `deskripsi` text CHARACTER SET latin1 NOT NULL,
  `foto` varchar(500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `judul`, `kategori`, `deskripsi`, `foto`) VALUES
('k100122', 'Hari Anti Korupsi Sedunia, PC KMHDI Bogor: Organisasi Kemahasiswaan Seharusnya Menjadi Pelopor Dalam Meningkatkan Literasi Keuangan', 'Pemerintahan', 'Setiap 9 Desember Perserikatan Bangsa-Bangsa (PBB) memperingati Hari Anti Korupsi Sedunia, yang merupakan sebuah kampanye global untuk memerangi korupsi. Korupsi menyerang fondasi lembaga-lembaga demokrasi dengan mendistorsi proses pemilu, memutarbalikkan supremasi hukum dan menciptakan rawa-rawa birokrasi yang satu-satunya alasan keberadaannya adalah suap.  Mengenai hal itu, Bendahara Pimpinan Cabang Kesatuan Mahasiswa Hindu Dharma Indonesia (PC KMHDI) Bogor I Gede Yoga Widnyana mengatakan, Korupsi merusak institusi demokrasi, memperlambat pembangunan ekonomi dan berkontribusi pada ketidakstabilan pemerintahan', 'kegiatan3.jpeg'),
('k190122', 'Amalkan Jati Diri Religius, PC KMHDI Bangli Laksanakan Tirta Yatra', 'Keagamaan', 'Untuk mengawali kegiatan diawal tahun 2022, PC KMHDI Bangli melaksanakan kegiatan melukat dan ngayah mereresik. Kegiatan melukat ini menjadi bentuk aplikasi jati diri religius KMHDI dan menumbuhkan rasa religi dalam diri kader KMHDI Bangli. Kemudian yang dilanjutkan dengan ngayah mereresik di Pura Dalem Puri Besakih', 'kegiatan1.jpeg'),
('k200122', 'Penghujung Tahun 2021, KMHDI Berikan Catatan Untuk Pemerintah', 'Pemerintahan', 'Kesatuan Mahasiswa Hindu Dharma Indonesia (KMHDI) memberikan catatan kristis kepada pemerintah menjelang akhir tahun 2021. Catatan kritis ini merupakan himpuanan dari persoalan-persoalan yang muncul pada tahun 2021 yang harus dievaluasi serta dibenahi oleh pemerintah pada tahun 2022 nanti.', 'kegiatan2.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `status` enum('Pegawai','Honorer') NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nama`, `alamat`, `no_hp`, `status`, `jabatan`, `foto`) VALUES
('527121008', 'Ani Armila', 'Mataram', '09876567898', 'Pegawai', 'Staff', 'pegawai4.jpeg'),
('527121010', 'I Gede Wira Aditya Tanaya', 'Gerung Selatan', '08312956465', 'Pegawai', 'Desainer', 'pegawai3.jpeg'),
('527121078', 'I Gede Yuda Pratama', 'Jl. Baruna shanti, Gg. Gunung emas No. 06, Tanah embet, Batulayar, Lombok Barat, Nusa Tenggara Barat', '082340335292', 'Pegawai', 'Leader', 'pegawai1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Sekretaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'I Gede Yuda Pratama', 'admin', 'admin', 'Administrator'),
(2, 'Putu Wisnu Gunadharma', 'sekretaris', 'sek', 'Sekretaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_profil`, `alamat`, `bidang`) VALUES
(1, 'PT KESATUAN MAHASISWA HINDU DHARMA INDONESIA', 'Jalan kakatua blok aa nomor 14, Jl. Cipinang Indah, RT.2/RW.3, Pd. Bambu, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta', 'KEAGAMAAN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
