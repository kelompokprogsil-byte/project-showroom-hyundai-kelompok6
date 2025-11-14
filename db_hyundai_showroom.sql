-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2025 at 04:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hyundai_showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `nama`, `password`, `email`, `status`, `jabatan`) VALUES
(1, 'admin1', 'Super Admin', 'admin123', 'admin1@showroom.com', 'aktif', 'Manager'),
(2, 'admin2', 'Sales Admin', 'sales123', 'admin2@showroom.com', 'aktif', 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id_dealer` int(11) NOT NULL,
  `nama_dealer` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_dealer` varchar(50) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id_dealer`, `nama_dealer`, `email`, `no_dealer`, `provinsi`, `kota`, `alamat`) VALUES
(1, 'Hyundai Tangerang', 'dealer_tgr@hyundai.com', '08123456789', 'Banten', 'Tangerang', 'Jl. BSD Raya Utama No. 88'),
(2, 'Hyundai Jakarta Selatan', 'dealer_jkt@hyundai.com', '08198765432', 'DKI Jakarta', 'Jakarta Selatan', 'Jl. Fatmawati No. 99');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Mobil'),
(2, 'Sparepart'),
(3, 'Aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `kebutuhan_alamat` tinyint(1) DEFAULT 0,
  `kebutuhan_tanggal` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `deskripsi`, `kebutuhan_alamat`, `kebutuhan_tanggal`) VALUES
(1, 'Booking', 'Layanan untuk memesan produk sebelum pembelian atau test drive.', 0, 1),
(2, 'Trade-in', 'Layanan tukar tambah kendaraan lama dengan yang baru.', 0, 0),
(3, 'Test Drive', 'Layanan uji coba mobil sebelum membeli untuk memastikan performa.', 1, 1),
(4, 'Checkout', 'Proses pembayaran akhir untuk produk non-mobil seperti sparepart dan aksesoris.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `tahun_produksi` varchar(10) DEFAULT NULL,
  `transmisi` varchar(50) DEFAULT NULL,
  `kapasitas_mesin` varchar(50) DEFAULT NULL,
  `tenaga` varchar(50) DEFAULT NULL,
  `kursi` varchar(10) DEFAULT NULL,
  `fitur` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` decimal(15,2) DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_admin`, `gambar`, `nama_produk`, `jenis`, `model`, `warna`, `kategori`, `tipe`, `tahun_produksi`, `transmisi`, `kapasitas_mesin`, `tenaga`, `kursi`, `fitur`, `deskripsi`, `harga`, `tanggal_input`) VALUES
(1, 1, 1, 'Stargazer_Cartenz_X.png', 'Hyundai Stargazer Cartenz X', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 350000000.00, '2025-10-12'),
(2, 1, 1, 'Stargazer_Cartenz.png', 'Hyundai Stargazer Cartenz', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 330000000.00, '2025-10-12'),
(3, 1, 1, 'The_New_Creta.png', 'Hyundai The New Creta', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400000000.00, '2025-10-12'),
(4, 1, 1, 'Stargazer_X.png', 'Hyundai Stargazer X', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 360000000.00, '2025-10-12'),
(5, 1, 1, 'Stargazer.png', 'Hyundai Stargazer', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 320000000.00, '2025-10-12'),
(6, 1, 1, 'Creta.png', 'Hyundai Creta', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 310000000.00, '2025-10-12'),
(7, 1, 1, 'The_All-New_Palisade.png', 'Hyundai The All-New Palisade', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 900000000.00, '2025-10-12'),
(8, 1, 1, 'The_All-New_Santa-FE.png', 'Hyundai The All-New Santa FE', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 700000000.00, '2025-10-12'),
(9, 1, 1, 'Staria.png', 'Hyundai Staria', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 850000000.00, '2025-10-12'),
(10, 1, 1, 'Ionig-6.png', 'Hyundai Ioniq 6', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1000000000.00, '2025-10-12'),
(11, 1, 1, 'The_All-New_Kona_Electric.png', 'Hyundai The All-New Kona Electric', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 750000000.00, '2025-10-12'),
(12, 1, 1, 'Ioniq-5.png', 'Hyundai Ioniq 5', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 950000000.00, '2025-10-12'),
(13, 1, 1, 'Venue.png', 'Hyundai Venue', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300000000.00, '2025-10-12'),
(14, 1, 1, 'The_New_Tucson.png', 'Hyundai The New Tucson', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 680000000.00, '2025-10-12'),
(15, 1, 1, 'Palisade.png', 'Hyundai Palisade', NULL, NULL, NULL, 'Mobil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 880000000.00, '2025-10-12'),
(16, 2, 1, NULL, 'Oli Mesin Hyundai', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 250000.00, '2025-10-12'),
(17, 2, 1, NULL, 'Filter Oli', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 150000.00, '2025-10-12'),
(18, 2, 1, NULL, 'Busi (Spark Plug)', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100000.00, '2025-10-12'),
(19, 2, 1, NULL, 'Aki (Battery)', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 900000.00, '2025-10-12'),
(20, 2, 1, NULL, 'Kampas Rem Depan', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 350000.00, '2025-10-12'),
(21, 2, 1, NULL, 'Filter Udara', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200000.00, '2025-10-12'),
(22, 2, 1, NULL, 'Radiator', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1200000.00, '2025-10-12'),
(23, 2, 1, NULL, 'Shock Absorber', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 600000.00, '2025-10-12'),
(24, 2, 1, NULL, 'V-Belt', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 180000.00, '2025-10-12'),
(25, 2, 1, NULL, 'Lampu Headlight', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 450000.00, '2025-10-12'),
(26, 2, 1, NULL, 'Kampas Kopling', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500000.00, '2025-10-12'),
(27, 2, 1, NULL, 'Filter Bahan Bakar', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 220000.00, '2025-10-12'),
(28, 2, 1, NULL, 'Bearing Roda', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300000.00, '2025-10-12'),
(29, 2, 1, NULL, 'Sensor Parkir', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400000.00, '2025-10-12'),
(30, 2, 1, NULL, 'ECU (Engine Control Unit)', NULL, NULL, NULL, 'Sparepart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2500000.00, '2025-10-12'),
(31, 3, 1, NULL, 'Karpet Dasar Mobil', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 250000.00, '2025-10-12'),
(32, 3, 1, NULL, 'Sarung Jok Kulit', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 750000.00, '2025-10-12'),
(33, 3, 1, NULL, 'Dashboard Cover', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200000.00, '2025-10-12'),
(34, 3, 1, NULL, 'Sunshade', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 150000.00, '2025-10-12'),
(35, 3, 1, NULL, 'Door Sill Plate', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 180000.00, '2025-10-12'),
(36, 3, 1, NULL, 'Spoiler Belakang', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500000.00, '2025-10-12'),
(37, 3, 1, NULL, 'Roof Rack', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 600000.00, '2025-10-12'),
(38, 3, 1, NULL, 'Side Visor (Talang Air)', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 220000.00, '2025-10-12'),
(39, 3, 1, NULL, 'Cover Mobil', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300000.00, '2025-10-12'),
(40, 3, 1, NULL, 'Foot Step Samping', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400000.00, '2025-10-12'),
(41, 3, 1, NULL, 'LED Interior Light', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 120000.00, '2025-10-12'),
(42, 3, 1, NULL, 'Dashcam (Kamera Dashboard)', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 750000.00, '2025-10-12'),
(43, 3, 1, NULL, 'Charger Mobil USB', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100000.00, '2025-10-12'),
(44, 3, 1, NULL, 'Alarm & Remote Starter', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500000.00, '2025-10-12'),
(45, 3, 1, NULL, 'Pelindung Bumper (Bumper Guard)', NULL, NULL, NULL, 'Aksesoris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 250000.00, '2025-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_dealer` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `id_produk`, `id_dealer`, `stok`) VALUES
(1, 1, 1, 10),
(2, 2, 1, 8),
(3, 3, 1, 12),
(4, 4, 2, 5),
(5, 5, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_layanan`
--

CREATE TABLE `transaksi_layanan` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_dealer` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `jenis_service` varchar(100) DEFAULT NULL,
  `alamat_rumah` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `tanggal_janji` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `foto_profil` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `foto_profil`, `username`, `nama`, `password`, `email`, `tanggal_daftar`) VALUES
(1, 'user1.png', 'pijar', 'Pijar Prasetyo', 'pijar123', 'pijar@example.com', '2025-10-12'),
(2, 'user2.png', 'piyelop', 'Piyelop Gunawan', 'piyelop123', 'piyelop@example.com', '2025-10-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_dealer` (`id_dealer`);

--
-- Indexes for table `transaksi_layanan`
--
ALTER TABLE `transaksi_layanan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_layanan` (`id_layanan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_dealer` (`id_dealer`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id_dealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi_layanan`
--
ALTER TABLE `transaksi_layanan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `stok_ibfk_2` FOREIGN KEY (`id_dealer`) REFERENCES `dealer` (`id_dealer`);

--
-- Constraints for table `transaksi_layanan`
--
ALTER TABLE `transaksi_layanan`
  ADD CONSTRAINT `transaksi_layanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_layanan_ibfk_2` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`),
  ADD CONSTRAINT `transaksi_layanan_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `transaksi_layanan_ibfk_4` FOREIGN KEY (`id_dealer`) REFERENCES `dealer` (`id_dealer`),
  ADD CONSTRAINT `transaksi_layanan_ibfk_5` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
