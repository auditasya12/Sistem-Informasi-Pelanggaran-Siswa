-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 01:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibs`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `izin` int(10) NOT NULL,
  `sakit` int(10) NOT NULL,
  `tanpa_ket` int(10) NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nbm` varchar(30) NOT NULL,
  `nama_guru` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `jenkel_guru` char(1) NOT NULL,
  `hp_guru` varchar(13) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nbm`, `nama_guru`, `alamat`, `jenkel_guru`, `hp_guru`, `id_jabatan`, `id_tahun`, `status`) VALUES
(1, '1400016045', 'Anggi Surya Permana', 'yogyakarta', 'L', '081327671411', 1, 1, 0),
(2, '123', 'nj', 'nj', 'P', '90', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak_akses` int(11) NOT NULL,
  `nama_hak_akses` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `nama_hak_akses`) VALUES
(1, 'Administrator'),
(2, 'Guru'),
(3, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `akronin_jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `akronin_jurusan`) VALUES
(2, 'Unggulan', 'KU'),
(3, 'Multilingual', 'KM'),
(4, 'Matematika dan Ilmu Alam', 'MIA'),
(5, 'Ilmu-Ilmu Sosial', 'ISS'),
(6, 'Ilmu-Ilmu Keagamaan', 'IIK');

-- --------------------------------------------------------

--
-- Table structure for table `kat_panggilan`
--

CREATE TABLE `kat_panggilan` (
  `id_kat_panggilan` int(11) NOT NULL,
  `nama_kat_panggilan` varchar(200) NOT NULL,
  `keterangan_kat_panggilan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_panggilan`
--

INSERT INTO `kat_panggilan` (`id_kat_panggilan`, `nama_kat_panggilan`, `keterangan_kat_panggilan`) VALUES
(2, 'Nasihat', 'Poin 1 - 15'),
(3, 'SP1', 'Poin 16 - 30'),
(4, 'Pengantar SP2 ( Panggilan )', 'Poin 31 - 60'),
(5, 'SP2', 'Poin 61 - 80'),
(6, 'SP3', 'Poi 81 - 89'),
(7, 'Pembinaan Wadir 3', 'Poin 90 - 99'),
(8, 'Konfrensi Kasus', 'Poin 100+');

-- --------------------------------------------------------

--
-- Table structure for table `kat_pelanggaran`
--

CREATE TABLE `kat_pelanggaran` (
  `id_kat_pelanggaran` int(11) NOT NULL,
  `nama_kat_pelanggaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_pelanggaran`
--

INSERT INTO `kat_pelanggaran` (`id_kat_pelanggaran`, `nama_kat_pelanggaran`) VALUES
(4, 'BENTUK PELANGGARAN - KEDISIPLINAN'),
(5, 'BENTUK PELANGGARAN - KERAPIAN'),
(6, 'BENTUK PELANGGARAN SIKAP dan PRILAKU');

-- --------------------------------------------------------

--
-- Table structure for table `kat_prestasi`
--

CREATE TABLE `kat_prestasi` (
  `id_kat_prestasi` int(11) NOT NULL,
  `nama_kat_prestasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_prestasi`
--

INSERT INTO `kat_prestasi` (`id_kat_prestasi`, `nama_kat_prestasi`) VALUES
(1, 'Hafalan'),
(2, 'Juara Lomba');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tingkat`, `nama_kelas`) VALUES
(5, 'I', 'Satu'),
(6, 'II', 'Dua'),
(7, 'III', 'Tiga'),
(8, 'IV', 'Empat'),
(9, 'V', 'Lima'),
(10, 'VI', 'Enam');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_jurusan`
--

CREATE TABLE `kelas_jurusan` (
  `id_kelas_jurusan` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `daya_tampung` int(10) NOT NULL,
  `urutan_kelas_jurusan` char(1) NOT NULL,
  `id_wali_kelas` int(20) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_jurusan`
--

INSERT INTO `kelas_jurusan` (`id_kelas_jurusan`, `id_kelas`, `id_jurusan`, `daya_tampung`, `urutan_kelas_jurusan`, `id_wali_kelas`, `id_tahun`) VALUES
(1, 5, 2, 35, 'A', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `id_hak_akses` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `id_hak_akses`, `status`) VALUES
(1, '199506102015051003', '21232f297a57a5a743894a0e4a801fc3', 1, 0),
(2, '199506102015051004', 'bbff3c8efdc34c2c0f26c2acd86b1c08', 2, 1),
(3, '123', '202cb962ac59075b964b07152d234b70', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id_ortu` int(11) NOT NULL,
  `nama_ortu` varchar(200) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `jenkel_ortu` varchar(1) NOT NULL,
  `hp_ortu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id_ortu`, `nama_ortu`, `alamat_ortu`, `jenkel_ortu`, `hp_ortu`) VALUES
(2, 'Anggi Surya Permana', 'Yogyakarta', 'L', '0813272671411');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `nama_pelanggaran` varchar(200) NOT NULL,
  `point_pelanggaran` int(10) NOT NULL,
  `id_kat_pelanggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `nama_pelanggaran`, `point_pelanggaran`, `id_kat_pelanggaran`) VALUES
(4, 'Datang terlambat.', 10, 4),
(5, 'Tidak mengikuti pelajaran tanpa izin.', 10, 4),
(6, 'Meninggalkan kelas tanpa izin.', 10, 4),
(7, 'Di kantin saat jam pelajaran.', 10, 4),
(8, 'Tidak mengikuti dan melaksanakan piket 9 K.', 10, 4),
(9, 'Tidur di kelas saat pelajaran berlangsung', 10, 4),
(10, 'Tidak membawa buku yang berkaitan dengan pelajaran', 10, 4),
(11, 'Pulang sebelum waktunya tanpa izin dari sekolah', 20, 4),
(12, 'Tidak masuk sekolah tanpa keterangan', 20, 4),
(13, 'Tidak mengikuti upacara', 20, 4),
(14, 'Tidak mengikuti kegiatan sekolah', 20, 4),
(15, 'Tidak mengikuti kegiatan ekstrakurikuler', 20, 4),
(16, 'Tidak berseragam sesuai dengan ketentuan.', 10, 5),
(17, 'Tidak memasukkan baju.', 10, 5),
(18, 'Melipat lengan baju, baju tidak dikancingkan.', 10, 5),
(19, 'Seragam yang dicoret-coret.', 10, 5),
(20, 'Celana atau rok bawah tidak dikelim.', 10, 5),
(21, 'Celana atau rok sobek', 10, 5),
(22, 'Tidak memakai kaos kaki.', 10, 5),
(23, 'Memakai kaos kaki tidak sesuai ketentuan SMA Negeri 1 Bangkalan', 10, 5),
(24, 'Tidak memakai ikat pinggang', 10, 5),
(25, 'Seragam dan atribut tidak lengkap', 10, 5),
(26, 'Tidak membawa buku sesuai jadwal.', 10, 6),
(27, 'Membuat kegaduhan di kelas atau di sekolah.', 10, 6),
(28, 'Mencoret-coret atau mengotori dinding, pintu, meja, kursi, pagar sekolah.', 10, 6),
(29, 'Membawa atau bermain kartu remi dan domino di sekolah.', 10, 4),
(30, 'Memparkir sepeda/motor tidak pada tempatnya', 10, 6),
(31, 'Bermain bola di koridor dan di dalam kelas.', 10, 6),
(32, 'Menyontek', 10, 6),
(33, 'Melindungi teman yang bersalah.', 20, 6),
(34, 'Menghidupkan handphone waktu KBM', 20, 6),
(35, 'Berbuat asusila di lingkungan sekolah', 20, 6),
(36, 'Berperilaku jorok atau asusila baik didalam mauapun diluar sekolah ', 20, 6),
(37, 'Merayakan ulang tahun berlebihan di sekolah', 20, 6),
(38, 'Membawa atau membunyikan petasan dan menggunakannya', 30, 6),
(39, 'Membuat surat izin palsu', 50, 6),
(40, 'Meloncat jendela dan pagar sekolah', 50, 6),
(41, 'Merusak sarana dan prasarana sekolah', 50, 6),
(42, 'Bertindak tidak sopan/ melecehkan Kepala Sekolah, guru dan karyawan sekolah.', 100, 6),
(43, 'Mengancam / mengintimidasi teman sekelas / teman sekolah', 100, 6),
(44, 'Mengancam / mengintimidasi Kepala Sekolah, guru dan karyawan.', 100, 6),
(45, 'Membawa / merokok saat masih dilingkungan sekolah', 100, 6),
(46, 'Menyalahgunakan media sosial yang merugikan pihak lain yang berhubungan dengan sekolah', 100, 6),
(47, 'Berjudi dalam bentuk apapun di sekolah.', 150, 6),
(48, 'Membawa senjata tajam, senjata api dsb. di sekolah', 150, 6),
(49, 'Terlibat langsung maupun tidak langsung perkelahian/tawuran di sekolah, di luar sekolah atau antar sekolah', 150, 6),
(50, 'Mengikuti aliran/perkumpulan/geng terlarang/Komunitas LGBT dan radikalisme', 150, 6),
(51, 'Membawa, menggunakan atau mengedarkan miras dan narkoba', 150, 6),
(52, 'Membawa dan/atau membuat VCD Porno, buku porno,', 200, 6),
(53, 'Mencuri di sekolah dan di luar sekolah', 250, 6),
(54, 'Memalsukan stempel sekolah, edaran sekolah atau tanda tangan Kepala Sekolah, guru dan karyawan sekolah.', 300, 6),
(55, 'Terlibat tindakan kriminal, mencemarkan nama baik sekolah.', 150, 6),
(56, 'Terbukti hamil atau menghamili', 300, 6),
(57, 'Terbukti menikah', 300, 6),
(58, 'Melakukan perundungan/bullying verbal dan atau non verbal, baik langsung atau dengan menggunakan media online/teknologi digital: Melakukan intimidasi, ancaman, fitnah, penghinaan dan atau pencemaran n', 300, 6),
(59, 'Melakukan Pelecehan, yang merupakan tindakan kekerasan atau penyerangan secara fisik, psikis atau daring pada guru dan atau warga sekolah, baik di sekolah atau luar sekolah', 300, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran_siswa`
--

CREATE TABLE `pelanggaran_siswa` (
  `id_pelanggaran_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL,
  `id_penginput` int(20) NOT NULL,
  `waktu_melanggar` date NOT NULL,
  `waktu_input` text NOT NULL,
  `tempat_pelanggaran` varchar(200) NOT NULL,
  `tindak_lanjut` text NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_siswa`
--

CREATE TABLE `penilaian_siswa` (
  `id_penilaian_siswa` int(11) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `sholat_wajib` int(1) NOT NULL,
  `membaca_kitab` int(1) NOT NULL,
  `sholat_sunnah` int(1) NOT NULL,
  `kerajinan` int(1) NOT NULL,
  `kedisiplinan` int(1) NOT NULL,
  `kerapihan` int(1) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(200) NOT NULL,
  `point_prestasi` int(10) NOT NULL,
  `id_kat_prestasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `point_prestasi`, `id_kat_prestasi`) VALUES
(1, 'Hafalan 5 Juz Al-Qur\'an', 75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_siswa`
--

CREATE TABLE `prestasi_siswa` (
  `id_prestasi_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_prestasi` int(11) NOT NULL,
  `id_penginput` int(20) NOT NULL,
  `waktu_input` datetime NOT NULL,
  `keterangan_prestasi` text NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi_siswa`
--

INSERT INTO `prestasi_siswa` (`id_prestasi_siswa`, `id_siswa`, `id_prestasi`, `id_penginput`, `waktu_input`, `keterangan_prestasi`, `id_tahun`) VALUES
(1, 2, 1, 1, '0000-00-00 00:00:00', '5 Juz terakhir ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `jenkel_siswa` varchar(1) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `hp_siswa` varchar(20) NOT NULL,
  `photo_siswa` text DEFAULT NULL,
  `id_ortu` int(11) DEFAULT NULL,
  `id_kelas_jurusan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `account` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenkel_siswa`, `alamat_siswa`, `hp_siswa`, `photo_siswa`, `id_ortu`, `id_kelas_jurusan`, `id_tahun`, `status`, `account`) VALUES
(2, '267733', 'Muhammad Anshar Sara', 'L', 'Yogyakarta', '082327768945', 'uploads/848da860b5d39ab88e0cf3b3aa9dda47.png', 2, 1, 1, 0, 1),
(3, '123', 'Quin', 'P', 'mojokerto', '0', 'uploads/c3c6491391b49968ed6505097b40d6a6.jpg', 2, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `awal_tahun` date NOT NULL,
  `akhir_tahun` date NOT NULL,
  `tahun_ajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `awal_tahun`, `akhir_tahun`, `tahun_ajaran`) VALUES
(1, '2018-01-01', '2018-12-28', 'Tahun Ajaran 2018/2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `nis` (`id_siswa`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kat_panggilan`
--
ALTER TABLE `kat_panggilan`
  ADD PRIMARY KEY (`id_kat_panggilan`);

--
-- Indexes for table `kat_pelanggaran`
--
ALTER TABLE `kat_pelanggaran`
  ADD PRIMARY KEY (`id_kat_pelanggaran`);

--
-- Indexes for table `kat_prestasi`
--
ALTER TABLE `kat_prestasi`
  ADD PRIMARY KEY (`id_kat_prestasi`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_jurusan`
--
ALTER TABLE `kelas_jurusan`
  ADD PRIMARY KEY (`id_kelas_jurusan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_wali_kelas` (`id_wali_kelas`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_hak_akses` (`id_hak_akses`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `id_kat_pelanggaran` (`id_kat_pelanggaran`);

--
-- Indexes for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD PRIMARY KEY (`id_pelanggaran_siswa`),
  ADD KEY `nis` (`id_siswa`),
  ADD KEY `id_pelanggaran` (`id_pelanggaran`),
  ADD KEY `id_penginput` (`id_penginput`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `penilaian_siswa`
--
ALTER TABLE `penilaian_siswa`
  ADD PRIMARY KEY (`id_penilaian_siswa`),
  ADD KEY `nis` (`id_siswa`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `id_kat_prestasi` (`id_kat_prestasi`);

--
-- Indexes for table `prestasi_siswa`
--
ALTER TABLE `prestasi_siswa`
  ADD PRIMARY KEY (`id_prestasi_siswa`),
  ADD KEY `nis` (`id_siswa`),
  ADD KEY `id_prestasi` (`id_prestasi`),
  ADD KEY `id_penginput` (`id_penginput`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`,`nis`),
  ADD KEY `id_kelas_jurusan` (`id_kelas_jurusan`),
  ADD KEY `id_ortu` (`id_ortu`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kat_panggilan`
--
ALTER TABLE `kat_panggilan`
  MODIFY `id_kat_panggilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kat_pelanggaran`
--
ALTER TABLE `kat_pelanggaran`
  MODIFY `id_kat_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kat_prestasi`
--
ALTER TABLE `kat_prestasi`
  MODIFY `id_kat_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelas_jurusan`
--
ALTER TABLE `kelas_jurusan`
  MODIFY `id_kelas_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  MODIFY `id_pelanggaran_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penilaian_siswa`
--
ALTER TABLE `penilaian_siswa`
  MODIFY `id_penilaian_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestasi_siswa`
--
ALTER TABLE `prestasi_siswa`
  MODIFY `id_prestasi_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas_jurusan`
--
ALTER TABLE `kelas_jurusan`
  ADD CONSTRAINT `kelas_jurusan_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_jurusan_ibfk_5` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_jurusan_ibfk_6` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_jurusan_ibfk_7` FOREIGN KEY (`id_wali_kelas`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_hak_akses`) REFERENCES `hak_akses` (`id_hak_akses`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`id_kat_pelanggaran`) REFERENCES `kat_pelanggaran` (`id_kat_pelanggaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD CONSTRAINT `pelanggaran_siswa_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_siswa_ibfk_2` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_siswa_ibfk_4` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian_siswa`
--
ALTER TABLE `penilaian_siswa`
  ADD CONSTRAINT `penilaian_siswa_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_siswa_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`id_kat_prestasi`) REFERENCES `kat_prestasi` (`id_kat_prestasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi_siswa`
--
ALTER TABLE `prestasi_siswa`
  ADD CONSTRAINT `prestasi_siswa_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestasi_siswa_ibfk_2` FOREIGN KEY (`id_prestasi`) REFERENCES `prestasi` (`id_prestasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestasi_siswa_ibfk_3` FOREIGN KEY (`id_penginput`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestasi_siswa_ibfk_4` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas_jurusan`) REFERENCES `kelas_jurusan` (`id_kelas_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_4` FOREIGN KEY (`id_ortu`) REFERENCES `ortu` (`id_ortu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
