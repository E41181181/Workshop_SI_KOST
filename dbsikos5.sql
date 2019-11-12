-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 06:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsikos5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `IDADMIN` varchar(15) NOT NULL,
  `PWD` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IDADMIN`, `PWD`) VALUES
('online24jam', '24');

-- --------------------------------------------------------

--
-- Table structure for table `data_kost`
--

CREATE TABLE `data_kost` (
  `KODE_DATA_KOST` varchar(10) NOT NULL,
  `IDPEMILIK` varchar(15) DEFAULT NULL,
  `NAMA_KOST` varchar(50) DEFAULT NULL,
  `ALAMAT_KOST_JL` varchar(50) DEFAULT NULL,
  `ALAMAT_KOST_KEC` varchar(50) DEFAULT NULL,
  `ALAMAT_KOST_KAB` varchar(50) DEFAULT NULL,
  `KHUSUS_KOST` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kost`
--

INSERT INTO `data_kost` (`KODE_DATA_KOST`, `IDPEMILIK`, `NAMA_KOST`, `ALAMAT_KOST_JL`, `ALAMAT_KOST_KEC`, `ALAMAT_KOST_KAB`, `KHUSUS_KOST`) VALUES
('00001', 'elysusanti123', 'Mastrip Timur', 'mastrip timur no 83', 'sumbersari', 'jember', 'Putri'),
('00002', 'gatotmastrip', 'FF 19 Berkah', 'Perum Mastrip FF 19', 'Sumbersari', 'Jember', 'Putra'),
('00003', 'ishro', 'Kos Bu Ali', 'jl. Mastip gang v, no 5b lingkungan krajan timur', 'Sumbersari', 'Jember', 'Putri');

-- --------------------------------------------------------

--
-- Table structure for table `foto_kost`
--

CREATE TABLE `foto_kost` (
  `KODE_FOTO_KOST` varchar(10) NOT NULL,
  `KODE_TIPE_KAMAR` varchar(10) DEFAULT NULL,
  `FOTO_DAPUR` longblob,
  `FOTO_PARKIRAN` longblob,
  `FOTO_BANGUNAN` longblob,
  `FOTO_KMR_MND_LUAR` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `KODE_HARGA` varchar(5) NOT NULL,
  `KODE_TIPE_KAMAR` varchar(10) DEFAULT NULL,
  `DIBAYAR_SETIAP` varchar(20) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `DITEMPATI` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`KODE_HARGA`, `KODE_TIPE_KAMAR`, `DIBAYAR_SETIAP`, `HARGA`, `DITEMPATI`) VALUES
('00001', '00001', 'Bulan', 500000, 'Sendiri'),
('00002', '00002', 'Bulan', 350000, 'Seorang'),
('00003', '00003', 'Bulan', 450000, 'Seorang');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_kost`
--

CREATE TABLE `pemilik_kost` (
  `IDPEMILIK` varchar(15) NOT NULL,
  `PWD_PMLK` varchar(25) DEFAULT NULL,
  `NAMA_PMLK` varchar(50) DEFAULT NULL,
  `NOHP_PMLK` varchar(14) DEFAULT NULL,
  `EMAIL_PMLK` varchar(50) DEFAULT NULL,
  `ALAMAT_JLN` varchar(50) DEFAULT NULL,
  `ALAMAT_KEC` varchar(50) DEFAULT NULL,
  `ALAMAT_KAB` varchar(50) DEFAULT NULL,
  `FOTO_KTP` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_kost`
--

INSERT INTO `pemilik_kost` (`IDPEMILIK`, `PWD_PMLK`, `NAMA_PMLK`, `NOHP_PMLK`, `EMAIL_PMLK`, `ALAMAT_JLN`, `ALAMAT_KEC`, `ALAMAT_KAB`, `FOTO_KTP`) VALUES
('elysusanti123', 'Elysusanti', 'Ely Susanti', '08123453466', NULL, 'perum mastrip  timur 80,gumuk kerang RT4 RW20', 'sumbersari', 'jember', NULL),
('gatotmastrip', '1122gatot', 'Gatot Mairudi Siswan', '08123487880', NULL, 'mastrip', 'sumbersari', 'jember', NULL),
('ishro', 'ishro123', 'Ishro Hidayati', '085231534007', NULL, 'jl. S. Parman, No B24, Lingkungan Krajan Timur', 'Sumbersari', 'Jember', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penyewa_kost`
--

CREATE TABLE `penyewa_kost` (
  `IDPENYEWA` varchar(15) NOT NULL,
  `KODE_VERIFIKASI` varchar(10) DEFAULT NULL,
  `KODE_DATA_KOST` varchar(10) DEFAULT NULL,
  `PWD_PENYEWA` varchar(1024) DEFAULT NULL,
  `NAMA_PENYEWA` varchar(1024) DEFAULT NULL,
  `NOHP_PENYEWA` varchar(15) DEFAULT NULL,
  `NOHP_KELUARGA` varchar(15) DEFAULT NULL,
  `EMAIL_PENYEWA` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `FOTO_SURAT_NIKAH` longblob,
  `ALAMAT_PENYEWA_JL` varchar(50) DEFAULT NULL,
  `ALAMAT_PENYEWA_KEC` varchar(20) DEFAULT NULL,
  `ALAMAT_PENYEWA_KAB` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa_kost`
--

INSERT INTO `penyewa_kost` (`IDPENYEWA`, `KODE_VERIFIKASI`, `KODE_DATA_KOST`, `PWD_PENYEWA`, `NAMA_PENYEWA`, `NOHP_PENYEWA`, `NOHP_KELUARGA`, `EMAIL_PENYEWA`, `JENIS_KELAMIN`, `STATUS`, `FOTO_SURAT_NIKAH`, `ALAMAT_PENYEWA_JL`, `ALAMAT_PENYEWA_KEC`, `ALAMAT_PENYEWA_KAB`) VALUES
('arinda999', NULL, '00001', '999arinda', 'yuniarinda maulid', '085791302282', '085895226318', 'yuniarinda.arinda@gmail.com', 'perempuan', 'mahasiswa', NULL, 'jajar kebon, Rt 1 Rw3', 'gondang wetan', 'pasuruan'),
('Dewi', NULL, '00003', 'dewi19', 'Dewi Anggun Maharani', '085222141677', '081908443271', NULL, 'perempuan', 'mahasiswa', NULL, 'Kelurahan Bendo, RT 023 RW 010', 'Bendo', 'Magetan'),
('fitriazi999', NULL, '00001', 'fitriazi999', 'Fitria Aziati', '083854132799', '081232355252', 'fitriaaziati999@gmail.com', 'perempuan', 'mahasiswa', NULL, 'Tenggilis rejo Rt 2Rw1 no 9', 'gondang wetan', 'pasuruan'),
('indy979', NULL, NULL, 'indy979', 'Indyra Ayu Wijayanti', '083111052979', '085234890068', 'indyra.wijayanti@gmail.com', 'perempuan', 'mahasiswa', NULL, 'jl mayang tengah no 2', 'sukorejo', 'blitar'),
('Jazilatur12', NULL, NULL, 'JazilaturRomdhaniah', 'Jazilatur Romdhaniah', '081345190129', '085258278765', 'Jazilaturromdhaniah27@gmail.com', 'perempuan', 'mahasiswa', NULL, 'Jl. Jokotole Pecinan Besuki', 'Besuki', 'Situbondo'),
('JazilaturRomdha', NULL, NULL, 'JazilaturRomdhaniah', 'Jazilatur Romdhaniah', '081345190129', '085258278765', 'Jazilaturromdhaniah27@gmail.com', 'perempuan', 'mahasiswa', NULL, 'Jl. Jokotole Pecinan Besuki', 'Besuki', 'Jl. Jokotole Pecinan'),
('Ketrinamarga', NULL, '00003', 'ketrinarga', 'Ketrina', '081931594351', '081931594351', 'ketrinamarga@gmail.com', 'perempuan', 'mahasiswa', NULL, 'jl. Raya Tegaldlimo, GG soekarno 4, Glagahagung', 'Purwoharjo', 'Banyuwangi'),
('nadia', NULL, NULL, 'nadia843', 'Nadia Novita Sari', '081555997843', NULL, 'nadiangoran4@gmail.com', 'perempuan', 'mahasiswa', NULL, 'lada', 'nglegok', 'blitar'),
('rendraadjip', NULL, '00002', 'rendraadjip', 'Rendra Adji Prayudi', '082334978919', '081330564452', 'adjiprendra@gmail.com', 'pria', 'mahasiswa', NULL, 'Bluru Permai EF 23', NULL, 'sidoarjo'),
('Widya', NULL, '00003', 'widya268', 'Nur Widya Aprisa Arisnawati', NULL, '08523744268', 'widyaaprisa@gmail.com', 'perempuan', 'mahasiswa', NULL, 'Dusun Kebonsari, RT 002 RW 003, Benculuk', 'Cluring', 'Banyuwangi');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `KODE_TIPE_KAMAR` varchar(10) NOT NULL,
  `KODE_DATA_KOST` varchar(10) DEFAULT NULL,
  `UKURAN_KAMAR` varchar(10) DEFAULT NULL,
  `FASILITAS_KAMAR` varchar(1024) DEFAULT NULL,
  `JUMLAH_KMR` int(11) DEFAULT NULL,
  `KETERANGAN_LAINNYA` varchar(200) DEFAULT NULL,
  `FOTO_KMR` longblob,
  `FOTO_KMR_MANDI` longblob,
  `KAMAR_KOSONG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`KODE_TIPE_KAMAR`, `KODE_DATA_KOST`, `UKURAN_KAMAR`, `FASILITAS_KAMAR`, `JUMLAH_KMR`, `KETERANGAN_LAINNYA`, `FOTO_KMR`, `FOTO_KMR_MANDI`, `KAMAR_KOSONG`) VALUES
('00001', '00001', '3.5X3', 'Dapur, parkiran motor, jemuran, ruang cuci, kamar mandi luar, ruang tamu ', 22, 'tambah biaya listrik 25 ribu jika membawa pemanas air, kipas angin, printer, tv, tidak boleh mengotori dinding', NULL, NULL, 0),
('00002', '00002', '2X2', 'Lemari, Kasur, Karpet', 10, NULL, NULL, NULL, 0),
('00003', '00003', '3X4', 'almari, meja, kasur, bantal, gantungan baju, guling', 50, 'tidak boleh membawa pemanas air', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `KODE_VERIFIKASI` varchar(10) NOT NULL,
  `IDADMIN` varchar(15) DEFAULT NULL,
  `IDPEMILIK` varchar(15) DEFAULT NULL,
  `TANGGAL` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDADMIN`);

--
-- Indexes for table `data_kost`
--
ALTER TABLE `data_kost`
  ADD PRIMARY KEY (`KODE_DATA_KOST`),
  ADD KEY `FK_MEMASUKAN` (`IDPEMILIK`);

--
-- Indexes for table `foto_kost`
--
ALTER TABLE `foto_kost`
  ADD PRIMARY KEY (`KODE_FOTO_KOST`),
  ADD KEY `FK_MEMASUKAN3` (`KODE_TIPE_KAMAR`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`KODE_HARGA`),
  ADD KEY `FK_MEMASUKAN4` (`KODE_TIPE_KAMAR`);

--
-- Indexes for table `pemilik_kost`
--
ALTER TABLE `pemilik_kost`
  ADD PRIMARY KEY (`IDPEMILIK`);

--
-- Indexes for table `penyewa_kost`
--
ALTER TABLE `penyewa_kost`
  ADD PRIMARY KEY (`IDPENYEWA`),
  ADD KEY `FK_DISEWA` (`KODE_DATA_KOST`),
  ADD KEY `FK_MELAKUKAN` (`KODE_VERIFIKASI`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`KODE_TIPE_KAMAR`),
  ADD KEY `FK_MEMASUKAN2` (`KODE_DATA_KOST`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`KODE_VERIFIKASI`),
  ADD KEY `FK_MELAKUKAN2` (`IDPEMILIK`),
  ADD KEY `FK_DILAKUKAN` (`IDADMIN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kost`
--
ALTER TABLE `data_kost`
  ADD CONSTRAINT `FK_MEMASUKAN` FOREIGN KEY (`IDPEMILIK`) REFERENCES `pemilik_kost` (`IDPEMILIK`);

--
-- Constraints for table `foto_kost`
--
ALTER TABLE `foto_kost`
  ADD CONSTRAINT `FK_MEMASUKAN3` FOREIGN KEY (`KODE_TIPE_KAMAR`) REFERENCES `tipe_kamar` (`KODE_TIPE_KAMAR`);

--
-- Constraints for table `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `FK_MEMASUKAN4` FOREIGN KEY (`KODE_TIPE_KAMAR`) REFERENCES `tipe_kamar` (`KODE_TIPE_KAMAR`);

--
-- Constraints for table `penyewa_kost`
--
ALTER TABLE `penyewa_kost`
  ADD CONSTRAINT `FK_DISEWA` FOREIGN KEY (`KODE_DATA_KOST`) REFERENCES `data_kost` (`KODE_DATA_KOST`),
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`KODE_VERIFIKASI`) REFERENCES `verifikasi` (`KODE_VERIFIKASI`);

--
-- Constraints for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD CONSTRAINT `FK_MEMASUKAN2` FOREIGN KEY (`KODE_DATA_KOST`) REFERENCES `data_kost` (`KODE_DATA_KOST`);

--
-- Constraints for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD CONSTRAINT `FK_DILAKUKAN` FOREIGN KEY (`IDADMIN`) REFERENCES `admin` (`IDADMIN`),
  ADD CONSTRAINT `FK_MELAKUKAN2` FOREIGN KEY (`IDPEMILIK`) REFERENCES `pemilik_kost` (`IDPEMILIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
