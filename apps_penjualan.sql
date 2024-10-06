-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Okt 2019 pada 05.51
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apps_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `barang_id` varchar(30) NOT NULL,
  `barang_nama` varchar(50) DEFAULT NULL,
  `barang_merk` varchar(50) DEFAULT NULL,
  `barang_ukuran` varchar(20) DEFAULT NULL,
  `barang_satuan` varchar(50) DEFAULT NULL,
  `barang_jenis` varchar(30) DEFAULT NULL,
  `barang_kategori` varchar(50) DEFAULT NULL,
  `barang_harga_beli` varchar(30) DEFAULT NULL,
  `barang_harga` varchar(30) DEFAULT NULL,
  `barang_harga_jual` varchar(30) DEFAULT NULL,
  `barang_jumlah` int(11) DEFAULT NULL,
  `barang_total_harga` varchar(30) DEFAULT NULL,
  `barang_tgl_masuk` date DEFAULT NULL,
  `id_suplier` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`barang_id`, `barang_nama`, `barang_merk`, `barang_ukuran`, `barang_satuan`, `barang_jenis`, `barang_kategori`, `barang_harga_beli`, `barang_harga`, `barang_harga_jual`, `barang_jumlah`, `barang_total_harga`, `barang_tgl_masuk`, `id_suplier`) VALUES
('BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', 'Barang-kering', 'Bahan Pangan', '15000', '16000', '17000', 60, NULL, NULL, NULL),
('BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '20000', '20500', '22000', 100, NULL, NULL, NULL),
('BR000003', 'Beras Pera', '-', '50kg', 'Kg', 'Barang-kering', 'Bahan Pangan', '15500', '16000', '16500', 0, NULL, NULL, NULL),
('BR000004', 'Beras Pulen', '-', '50kg', 'Kg', 'Barang-kering', 'Bahan Pangan', '14500', '14000', '0', 0, NULL, NULL, NULL),
('BR000005', 'Beras Merah', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '20000', '20000', '0', 0, NULL, NULL, NULL),
('BR000006', 'Beras untuk karyawan', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '11000', '11000', '0', 0, NULL, NULL, NULL),
('BR000007', 'Bumbu Pelezat Serbaguna', 'Royco rasa ayam', '12 x 12 x 10 gr', 'Renceng', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000008', 'Bandrek', '2 Pigeon Cianjur', '10 x 25gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '1800', '2000', '0', 0, NULL, NULL, NULL),
('BR000009', 'CUka', 'Belibis', '-', 'Botol', 'Barang-kering', 'Bahan Pangan', '1800', '2000', '0', 0, NULL, NULL, NULL),
('BR000010', 'cuka', 'Dixi', '650ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '15000', '15000', '0', 0, NULL, NULL, NULL),
('BR000011', 'Coca Cola', '-', '24 x 200ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '62000', '62000', '0', 0, NULL, NULL, NULL),
('BR000012', 'Emping Melinjo', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '62000', '62000', '0', 0, NULL, NULL, NULL),
('BR000013', 'Fanta Soda', '-', '24 x 200ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '62000', '62000', '0', 0, NULL, NULL, NULL),
('BR000014', 'Fanta Strawberry', '-', '24 x 200ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '62000', '62000', '0', 0, NULL, NULL, NULL),
('BR000015', 'Garam Halus', '-', '5kg', 'Pcs', 'Barang-kering', 'Bahan Pangan', '54000', '55000', '0', 0, NULL, NULL, NULL),
('BR000016', 'Garam halus', 'Ibu jari', '200gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '2300', '2500', '0', 0, NULL, NULL, NULL),
('BR000017', 'Garam Meja', 'Refina', '20 x 500gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000018', 'Gula kristal Putih', 'GMP', '50kg', 'Kg', 'Barang-kering', 'Bahan Pangan', '13000', '13000', '0', 0, NULL, NULL, NULL),
('BR000019', 'Gula Stick', 'Gulaku', ' 250 x 10gr', 'Pack', 'Barang-kering', 'Bahan Pangan', '25000', '25000', '0', 0, NULL, NULL, NULL),
('BR000020', 'Gula aren', 'Bungkus Daun', '1kg', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000021', 'Gula Merah Batok', 'Plastik Pocong', '10kg', 'Kg', 'Barang-kering', 'Bahan Pangan', '16000', '16000', '0', 0, NULL, NULL, NULL),
('BR000022', 'Kecap Asin', 'ABC', '12 x 620 ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000023', 'Kecap asin', 'Angsa', '600ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000024', 'Kecap manis refiil', 'Bango', '12 x 620 ML', 'Pcs', 'Barang-kering', 'Bahan Pangan', '27000', '28000', '0', 0, NULL, NULL, NULL),
('BR000025', 'Kecap manis refiil', 'Indofood', '12 x 520 ML', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000026', 'Kecap inggris', 'Harum Sedap', '620ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000027', 'Kecap Meja', 'Oedang sari', '600Ml', 'Botol', 'Barang-kering', 'Bahan Pangan', '40000', '40000', '0', 0, NULL, NULL, NULL),
('BR000028', 'Kacang Kedelai', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000029', 'Kacang Tanah', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '26000', '27000', '0', 0, NULL, NULL, NULL),
('BR000030', 'Kapulaga', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000031', 'Kayu manis', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '115000', '0', '0', 0, NULL, NULL, NULL),
('BR000032', 'Kemiri Pecah', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '46000', '44000', '0', 0, NULL, NULL, NULL),
('BR000033', 'Kemiri Utuh', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '55000', '55000', '0', 0, NULL, NULL, NULL),
('BR000034', 'Ketumbah utuh', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '45000', '46000', '0', 0, NULL, NULL, NULL),
('BR000035', 'Kerupuk Bawang', '-', '5Kg', 'Kg', 'Barang-kering', 'Bahan Pangan', '19000', '19000', '0', 0, NULL, NULL, NULL),
('BR000036', 'Keju', 'Kraft Chaddar', '175gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000037', 'Kopi Cappucino', 'Torabika', '10 x25gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '25000', '25000', '0', 0, NULL, NULL, NULL),
('BR000038', 'Kopi', 'Kapal Api', '20 x 165gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '14000', '14000', '0', 0, NULL, NULL, NULL),
('BR000039', 'Lada Putih Bubuk', 'Koepoe', '6 x 85gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000040', 'Lada putih utuh', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000041', 'Lemon Tea', 'Max tea', '30\'s', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000042', 'Minyak Wijen', 'ABC', '195ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '33600', '35000', '0', 0, NULL, NULL, NULL),
('BR000043', 'Minyak Goreng', 'Bimoli', '18L', 'Jerigen', 'Barang-kering', 'Bahan Pangan', '233000', '235000', '0', 0, NULL, NULL, NULL),
('BR000044', 'Minyak Goreng Refiil', 'Bimoli', '6 x 2000ML', 'Pcs', 'Barang-kering', 'Bahan Pangan', '28000', '28000', '0', 0, NULL, NULL, NULL),
('BR000045', 'Minyak Nabati Padat', 'Minyak Samin', '2kg', 'Kaleng', 'Barang-kering', 'Bahan Pangan', '98000', '98000', '0', 0, NULL, NULL, NULL),
('BR000046', 'Minyak Goreng Refiil', 'Tropical', '6 x 2L', 'Dus', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000047', 'Milo 3 in 1', '-', '-', 'Pcs', 'Barang-kering', 'Bahan Pangan', '35000', '35000', '0', 0, NULL, NULL, NULL),
('BR000048', 'Margarine', 'Forvita', '10 x 6 x 200gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '5500', '5500', '0', 0, NULL, NULL, NULL),
('BR000049', 'Plastik Bening PE', '-', '20 x 40 (kg)', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000050', 'Plastik Klip Bening PP', '-', '7 x 10', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000051', 'Pembersih lantai', 'SOS antibacterial', '4L', 'Jerigen', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000052', 'Pembersih Lantai', 'SOS Apple', '4L', 'Jerigen', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000053', 'Sabun Cream ', 'Ekonomi', '350 K PT 97gr', 'Dus', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000054', 'Spon reguler', 'Polytex', '12 Pcs', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000055', 'Spon basic 3M', 'Scoth Brite', 'ID-T36(96 Pcs)', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000056', 'Spon Basic 3M', 'Scoth Brite', 'ID-T57(144 Pcs)', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000057', 'Segotan Bungkus Kertas', '-', '-', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000058', 'Sabun', 'Sunlight Jeruk Nipis', 'Jerigen 4 x 4L', 'Jerigen', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000059', 'Sabun', 'Sunlight Jeruk Nipis', 'Pouch 12x800ML', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000060', 'Sabun Hand Soap', 'SOS Strawberry', '4L', 'Jerigen', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000061', 'Tissue Bulat', 'Nice', '-', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000062', 'Tusuk Gigi Steril', '-', '-', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000063', 'Tusuk Sate Ayam', '-', '-', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000064', 'Tusuk Sate Kambing', '-', '-', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000065', 'Lengkuas', '', '', 'Kg', 'Barang-basah', 'Bumbu Dapur', '15', '18', '0', 0, NULL, NULL, NULL),
('BR000066', 'Sereh Besar', '', '', 'Kg', 'Barang-basah', 'Bumbu Dapur', '16', '19', '0', 0, NULL, NULL, NULL),
('BR000067', 'Arang Batok', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '12', '13', '0', 0, NULL, NULL, NULL),
('BR000068', 'Baso Sapi', '', '', 'Pack', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '35', '40', '0', 0, NULL, NULL, NULL),
('BR000069', 'Cincau Hitam', '', '', 'Buah', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '10', '13', '0', 0, NULL, NULL, NULL),
('BR000070', 'Daun Pisang Lebar', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000071', 'Kerupuk Udang', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000072', 'Oncom', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan', '8500', '0', '0', 0, NULL, NULL, NULL),
('BR000073', 'Soun Putih', '', '', 'Pack', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '4000', '0', '0', 0, NULL, NULL, NULL),
('BR000074', 'Soun Putih Isi 20 Bungkus', '-', '-', 'Pack', NULL, NULL, '3000', '0', NULL, 0, NULL, NULL, NULL),
('BR000075', 'Tahu Coklat', '', '', 'Bungkus', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '4000', '0', '0', 0, NULL, NULL, NULL),
('BR000076', 'Tahu Kuning susu', '', '', 'Bungkus', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '10000', '0', '0', 0, NULL, NULL, NULL),
('BR000077', 'Tahu Kulit', '', '', 'Bungkus', 'Barang-basah', 'Bahan Pangan', '4500', '0', '0', 0, NULL, NULL, NULL),
('BR000078', 'Tahu Putih', '', '', 'Bungkus', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '4500', '0', '0', 0, NULL, NULL, NULL),
('BR000079', 'Tape', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '13', '16', '0', 0, NULL, NULL, NULL),
('BR000080', 'Telur Ayam', '', '', 'Kg', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000081', 'Telur Asin Mentah', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '4000', '0', '0', 0, NULL, NULL, NULL),
('BR000082', 'Telur asin matang', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '4000', '0', '0', 0, NULL, NULL, NULL),
('BR000083', 'Tempe Super', '', '', 'Papan', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '11000', '13500', '0', 0, NULL, NULL, NULL),
('BR000084', 'Tempe Daun', '', '', 'Papan', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '8000', '10000', '0', 0, NULL, NULL, NULL),
('BR000085', 'Ubi', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan dan Lain-lain', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000086', 'Ati,Ampela Ayam', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '50000', '57000', '0', 0, NULL, NULL, NULL),
('BR000087', 'Ayam Pejantan', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000088', 'Ayam Negeri', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '43000', '48000', '0', 0, NULL, NULL, NULL),
('BR000089', 'Babat', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '53000', '60000', '0', 0, NULL, NULL, NULL),
('BR000090', 'Buntut Tanpa Lemak', '', '', 'kg', 'Barang-basah', 'Lauk Pauk', '120000', '135000', '0', 0, NULL, NULL, NULL),
('BR000091', 'Bandeng Basah', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '40000', '47000', '0', 0, NULL, NULL, NULL),
('BR000092', 'Cue Pindang / Tongkol', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '55000', '62000', '0', 0, NULL, NULL, NULL),
('BR000093', 'Cumi Asin', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan', '85000', '0', '0', 0, NULL, NULL, NULL),
('BR000094', 'Cumi Basah (6-9 ekor)', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '120000', '0', '0', 0, NULL, NULL, NULL),
('BR000095', 'Cumi Basah (15-17ekor)', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000096', 'Daging Lamosir', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '120000', '132500', '0', 0, NULL, NULL, NULL),
('BR000097', 'Daging Sapi', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '115000', '128000', '0', 0, NULL, NULL, NULL),
('BR000098', 'Ikan asin kipas', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000099', 'Ikan Asin Japuh', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000100', 'Ikan Asin Peda', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '75000', '80000', '0', 0, NULL, NULL, NULL),
('BR000101', 'Ikan Asin Jambal', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '90000', '97000', '0', 0, NULL, NULL, NULL),
('BR000102', 'Ikan Asin Petek', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000103', 'Ikan Asin Selar', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000104', 'Ikan Asin Teri Jengki', '', '', 'Kg', 'Barang-basah', 'Bahan Pangan', '75000', '0', '0', 0, NULL, NULL, NULL),
('BR000105', 'Ikan Asin Teri Medan Kecil', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000106', 'Ikan Asin Teri Medan Besar', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000107', 'Ikan Kembung', '', '', 'Kg', 'Barang-basah', 'Lauk Pauk', '40000', '47000', '0', 0, NULL, NULL, NULL),
('BR000108', 'Ikan Mujaer', '-', '-', 'Kg', NULL, NULL, '35000', '42000', '0', 0, NULL, NULL, NULL),
('BR000109', 'Limpa', '-', '-', 'Kg', NULL, NULL, '60000', '67000', '0', 0, NULL, NULL, NULL),
('BR000110', 'Lidah Sapi', '-', '-', 'Kg', NULL, NULL, '97000', '104000', '0', 0, NULL, NULL, NULL),
('BR000111', 'Pindang Bandeng', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000112', 'Paru', '-', '-', 'Kg', NULL, NULL, '80000', '87000', '0', 0, NULL, NULL, NULL),
('BR000113', 'Tongkol Basah', '-', '-', 'Kg', NULL, NULL, '42000', '49000', '0', 0, NULL, NULL, NULL),
('BR000114', 'Usus / Iso', '-', '-', 'Kg', NULL, NULL, '50000', '0', NULL, 0, NULL, NULL, NULL),
('BR000115', 'Udang Kecil', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000116', 'Udang (35 ekor)', '-', '-', 'Kg', NULL, NULL, '130000', '142000', '0', 0, NULL, NULL, NULL),
('BR000117', 'Udang Rebon', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000118', 'Alpukat', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '26000', '29000', '30000', 0, NULL, NULL, NULL),
('BR000119', 'Bengkuang', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '14000', '17000', '19000', 0, NULL, NULL, NULL),
('BR000120', 'Jambu Batu', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '18000', '21000', '0', 0, NULL, NULL, NULL),
('BR000121', 'Jeruk Peras Pontianak', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '14000', '17000', '0', 0, NULL, NULL, NULL),
('BR000122', 'Jeruk Limo', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '32000', '35000', '0', 0, NULL, NULL, NULL),
('BR000123', 'Jeruk Nipis', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '25000', '28000', '0', 0, NULL, NULL, NULL),
('BR000124', 'Kelapa Muda', '', '', 'Butir', 'Barang-basah', 'Buah-Buahan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000125', 'Kedondong', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '13000', '16000', '0', 0, NULL, NULL, NULL),
('BR000126', 'Kolang Kaling', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '17000', '19000', '0', 0, NULL, NULL, NULL),
('BR000127', 'Labu Kuning', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000128', 'Mangga Arum Manis', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '35000', '38000', '0', 0, NULL, NULL, NULL),
('BR000129', 'Melon', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '18000', '21000', '0', 0, NULL, NULL, NULL),
('BR000130', 'Nanas', '', '', 'kg', 'Barang-basah', 'Buah-Buahan', '8000', '11000', '0', 0, NULL, NULL, NULL),
('BR000131', 'Nangka Matang', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '35000', '38000', '0', 0, NULL, NULL, NULL),
('BR000132', 'Pisang Tanduk', '', '', 'Sisir', 'Barang-basah', 'Buah-Buahan', '35000', '38000', '0', 0, NULL, NULL, NULL),
('BR000133', 'Pisang Kepok', '', '', 'Sisir', 'Barang-basah', 'Buah-Buahan', '30000', '33000', '0', 0, NULL, NULL, NULL),
('BR000134', 'Pepaya', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '13000', '16000', '0', 0, NULL, NULL, NULL),
('BR000135', 'Sirsak', '', '', 'Kg', 'Barang-basah', 'Buah-Buahan', '16000', '19000', '0', 0, NULL, NULL, NULL),
('BR000136', 'Strawberry', '', '', 'Bungkus', 'Barang-basah', 'Buah-Buahan', '12000', '15000', '0', 0, NULL, NULL, NULL),
('BR000137', 'Bayam', '', '', 'Iket', 'Barang-basah', 'Sayuran', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000138', 'Buncis', '', '', 'Kg', 'Barang-basah', 'Sayuran', '18000', '21000', '0', 0, NULL, NULL, NULL),
('BR000139', 'Buah Tangkil', '', '', 'Kg', 'Barang-basah', 'Sayuran', '21000', '18000', '0', 0, NULL, NULL, NULL),
('BR000140', 'Caisim / Sawi Hijau', '', '', 'Kg', 'Barang-basah', 'Sayuran', '11000', '14000', '0', 0, NULL, NULL, NULL),
('BR000141', 'Ciciwis', '', '', 'Kg', 'Barang-basah', 'Sayuran', '15000', '18000', '0', 0, NULL, NULL, NULL),
('BR000142', 'Daun Bawang', '', '', 'kg', 'Barang-basah', 'Sayuran', '22000', '21000', '0', 0, NULL, NULL, NULL),
('BR000143', 'Daun Jeruk', '', '', 'Kg', 'Barang-basah', 'Sayuran', '35000', '38000', '0', 0, NULL, NULL, NULL),
('BR000144', 'Daun Kemangi', '', '', 'Kg', 'Barang-basah', 'Sayuran', '32000', '35000', '0', 0, NULL, NULL, NULL),
('BR000145', 'Daun Kenikir', '', '', 'Kg', 'Barang-basah', 'Sayuran', '25000', '28000', '0', 0, NULL, NULL, NULL),
('BR000146', 'Daun Pisang', '-', '-', 'Kg', NULL, NULL, '9000', '11500', '0', 0, NULL, NULL, NULL),
('BR000147', 'Daun Poh Pohan', '', '', 'Kg', 'Barang-basah', 'Sayuran', '23000', '26000', '0', 0, NULL, NULL, NULL),
('BR000148', 'Daun Salam', '', '', 'Kg', 'Barang-basah', 'Sayuran', '13000', '16000', '0', 0, NULL, NULL, NULL),
('BR000149', 'Daun Selada', '', '', 'Kg', 'Barang-basah', 'Sayuran', '25000', '28000', '0', 0, NULL, NULL, NULL),
('BR000150', 'Daun Seledri', '', '', 'Kg', 'Barang-basah', 'Sayuran', '27000', '30000', '0', 0, NULL, NULL, NULL),
('BR000151', 'Daung Singkong', '', '', 'Kg', 'Barang-basah', 'Sayuran', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000152', 'Daun Tangkil', '', '', 'Kg', 'Barang-basah', 'Sayuran', '25000', '28000', '0', 0, NULL, NULL, NULL),
('BR000153', 'Jagung Manis', '', '', 'Kg', 'Barang-basah', 'Sayuran', '14000', '17000', '0', 0, NULL, NULL, NULL),
('BR000154', 'Jagung Sayur (biasa/P12)', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000156', 'Jagung Muda (Putren)', '', '', 'Kg', 'Barang-basah', 'Sayuran', '15000', '18000', '0', 0, NULL, NULL, NULL),
('BR000157', 'Jamur Putih', '', '', 'Kg', 'Barang-basah', 'Sayuran', '21000', '24000', '0', 0, NULL, NULL, NULL),
('BR000158', 'Jamur Kuping', '', '', 'Kg', 'Barang-basah', 'Sayuran', '21000', '24000', '0', 0, NULL, NULL, NULL),
('BR000159', 'Jengkol', '', '', 'Kg', 'Barang-basah', 'Sayuran', '45000', '48000', '0', 0, NULL, NULL, NULL),
('BR000160', 'Kacang Merah', '', '', 'Kg', 'Barang-basah', 'Sayuran', '33000', '36000', '0', 0, NULL, NULL, NULL),
('BR000161', 'Kacang Panjang', '', '', 'Kg', 'Barang-basah', 'Sayuran', '22000', '25000', '0', 0, NULL, NULL, NULL),
('BR000162', 'Kangkung', '', '', 'Iket', 'Barang-basah', 'Sayuran', '2000', '3000', '0', 0, NULL, NULL, NULL),
('BR000163', 'Kelapa Parut', '', '', 'Butir', 'Barang-basah', 'Sayuran', '9000', '11000', '0', 0, NULL, NULL, NULL),
('BR000164', 'Kelapa Santan', '', '', 'Butir', 'Barang-basah', 'Sayuran', '10000', '12000', '0', 0, NULL, NULL, NULL),
('BR000165', 'Kembang Kol', '-', '-', 'Kg', NULL, NULL, '18000', '21000', '0', 0, NULL, NULL, NULL),
('BR000166', 'Kentang', '-', '-', 'kg', NULL, NULL, '16000', '19000', '0', 0, NULL, NULL, NULL),
('BR000167', 'Kol', '-', '-', 'Kg', NULL, NULL, '11000', '14000', '0', 0, NULL, NULL, NULL),
('BR000168', 'Labu Siam Baby (Acar)', '-', '-', 'Kg', NULL, NULL, '15000', '18000', '0', 0, NULL, NULL, NULL),
('BR000169', 'Labu siam biasa (Besar)', '-', '-', 'Kg', NULL, NULL, '10000', '13000', '0', 0, NULL, NULL, NULL),
('BR000170', 'Leunca', '-', '-', 'Kg', NULL, NULL, '21000', '24000', '0', 0, NULL, NULL, NULL),
('BR000171', 'Lobak', '-', '-', 'Kg', NULL, NULL, '11000', '0', NULL, 0, NULL, NULL, NULL),
('BR000172', 'Nangka Muda', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000173', 'Nangka Sayur', '-', '-', 'Kg', NULL, NULL, '12000', '15000', '0', 0, NULL, NULL, NULL),
('BR000174', 'Picung Muda', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000175', 'Pete', '-', '-', 'Papan', NULL, NULL, '7000', '9500', '0', 0, NULL, NULL, NULL),
('BR000176', 'Pakcoy', '-', '-', 'Kg', NULL, NULL, '12000', '15000', '0', 0, NULL, NULL, NULL),
('BR000177', 'Paria/Pare', '-', '-', 'Kg', NULL, NULL, '16000', '19000', '0', 0, NULL, NULL, NULL),
('BR000178', 'Sawi Putih', '-', '-', 'Kg', NULL, NULL, '13000', '16000', '0', 0, NULL, NULL, NULL),
('BR000179', 'Singkong', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000180', 'Toge Lokal', '-', '-', 'Kg', NULL, NULL, '9000', '11000', '0', 0, NULL, NULL, NULL),
('BR000181', 'Tomat Sayur', '-', '-', 'Kg', NULL, NULL, '10000', '13000', '0', 0, NULL, NULL, NULL),
('BR000182', 'Tomat Apel', '-', '-', 'Kg', NULL, NULL, '14000', '17000', '0', 0, NULL, NULL, NULL),
('BR000183', 'Terong Bulat', '-', '-', 'Kg', NULL, NULL, '14000', '17000', '0', 0, NULL, NULL, NULL),
('BR000184', 'Terong Ungu', '-', '-', 'Kg', NULL, NULL, '14000', '17000', '0', 0, NULL, NULL, NULL),
('BR000185', 'Timun', '-', '-', 'Kg', NULL, NULL, '16000', '19000', '0', 0, NULL, NULL, NULL),
('BR000186', 'Wortel', '-', '-', 'Kg', NULL, NULL, '14000', '17000', '0', 0, NULL, NULL, NULL),
('BR000187', 'Wortel Super', '-', '-', 'Kg', NULL, NULL, '17000', '20000', '0', 0, NULL, NULL, NULL),
('BR000188', 'Wortel Import', '-', '-', 'Kg', NULL, NULL, '22000', '0', NULL, 0, NULL, NULL, NULL),
('BR000189', 'Bawang Merah', '-', '-', 'Kg', NULL, NULL, '33000', '36000', '0', 0, NULL, NULL, NULL),
('BR000190', 'Bawang Merah Kupas', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000191', 'Bawang Merah Iris', '-', '-', 'Kg', NULL, NULL, '35000', '38000', '0', 0, NULL, NULL, NULL),
('BR000192', 'Bawang Bombay', '-', '-', 'Kg', NULL, NULL, '29000', '32000', '0', 0, NULL, NULL, NULL),
('BR000193', 'Bawang Putih', '-', '-', 'Kg', NULL, NULL, '34000', '37000', '0', 0, NULL, NULL, NULL),
('BR000194', 'Bawang Putih Kupas', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000195', 'Bawang Kucai', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000196', 'Bawang Kating', '-', '-', 'Kg', NULL, NULL, '38000', '41000', '0', 0, NULL, NULL, NULL),
('BR000197', 'Bumbu Rawon', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000198', 'Bunga Lawang', '-', '-', 'Renceng', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000199', 'Cabe Rawit Hijau', '-', '-', 'Kg', NULL, NULL, '74000', '77000', '0', 0, NULL, NULL, NULL),
('BR000200', 'Cabe Rawit Merah', '-', '-', 'Kg', NULL, NULL, '84000', '87000', '0', 0, NULL, NULL, NULL),
('BR000201', 'Cabe Rawit Besar', '-', '-', 'Kg', NULL, NULL, '57000', '60000', '0', 0, NULL, NULL, NULL),
('BR000202', 'Cabe Hijau Besar', '-', '-', 'Kg', NULL, NULL, '34000', '37000', '0', 0, NULL, NULL, NULL),
('BR000203', 'Cabe Kriting Merah', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000204', 'Cabe Kriting Hijau', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000205', 'Cengkeh', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000206', 'Jahe Besar', '-', '-', 'Kg', NULL, NULL, '24000', '27000', '0', 0, NULL, NULL, NULL),
('BR000207', 'Jinten', '-', '-', 'Renceng', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000208', 'Kayu manis', '-', '-', 'Renceng', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000209', 'Kunyit', '-', '-', 'Kg', NULL, NULL, '14000', '17000', '0', 0, NULL, NULL, NULL),
('BR000210', 'Kelewak', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000211', 'Kencur', '-', '-', 'Kg', NULL, NULL, '44000', '47000', '0', 0, NULL, NULL, NULL),
('BR000212', 'Ketumbar', '-', '-', 'Kg', NULL, NULL, '0', '0', '0', 0, NULL, NULL, NULL),
('BR000213', 'Mie Telor', 'Burung Dara', '36 x 136gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000214', 'Pala (Biji Pala)', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '180000', '180000', '0', 0, NULL, NULL, NULL),
('BR000215', 'Pala Biji Lonjong Kupas', '-', '-', 'Kg', 'Barang-kering', 'Bahan Pangan', '200000', '200000', '0', 0, NULL, NULL, NULL),
('BR000216', 'Penguat Rasa', 'Sasa', '12 x 1 Kg', 'Pcs', 'Barang-kering', 'Bahan Pangan', '36000', '36000', '0', 0, NULL, NULL, NULL),
('BR000217', 'Penguat Rasa', 'Sasa', '500gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000218', 'Santan', 'Kara', '10 x 200ML', 'Pcs', 'Barang-kering', 'Bahan Pangan', '12000', '12000', '0', 0, NULL, NULL, NULL),
('BR000219', 'Saos', 'Kikkoman', '1,6L', 'Botol', 'Barang-kering', 'Bahan Pangan', '100000', '100000', '0', 0, NULL, NULL, NULL),
('BR000220', 'Saus Tomat', 'Delmonte', '5,7 Kg', 'Jerigen', 'Barang-kering', 'Bahan Pangan', '75000', '78000', '0', 0, NULL, NULL, NULL),
('BR000221', 'Saus Tiram', 'Panda / Lee Kum Kee', '510gr', 'Botol', 'Barang-kering', 'Bahan Pangan', '50000', '50000', '0', 0, NULL, NULL, NULL),
('BR000222', 'Saus Sambal Extra Hot', 'Delmonte', '5,5Kg', 'Jerigen', 'Barang-kering', 'Bahan Pangan', '98000', '98000', '0', 0, NULL, NULL, NULL),
('BR000223', 'Susu Kental Coklat', 'Frisian Flag', '48 x 370gr', 'Kaleng', 'Barang-kering', 'Bahan Pangan', '11000', '11000', '0', 0, NULL, NULL, NULL),
('BR000224', 'Susu Kental Putih', 'Frisian Flag', '48 x 370gr', 'Kaleng', 'Barang-kering', 'Bahan Pangan', '12000', '12000', '0', 0, NULL, NULL, NULL),
('BR000225', 'Sirup cocopandan', 'Marjan', '12 x 500ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '22000', '22000', '0', 0, NULL, NULL, NULL),
('BR000226', 'Sirup Grenadine', 'Marjan', '24 x 460ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '22000', '22000', '0', 0, NULL, NULL, NULL),
('BR000227', 'Sirup Melon', 'Marjan', '25 x 500ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '22000', '22000', '0', 0, NULL, NULL, NULL),
('BR000228', 'Sirup Mocca', 'Marjan', '460ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '22000', '22000', '0', 0, NULL, NULL, NULL),
('BR000229', 'Sirup Vanilla', 'Marjan', '460ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '23000', '23000', '0', 0, NULL, NULL, NULL),
('BR000230', 'Tepung Pati Jagung', 'Nalzena Corn Strach', '15 x 1Kg', 'Pcs', 'Barang-kering', 'Bahan Pangan', '18000', '16000', '0', 0, NULL, NULL, NULL),
('BR000231', 'Tepung Beras Putih', 'Rose Brand', '20 x 500gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '8000', '8000', '0', 0, NULL, NULL, NULL),
('BR000232', 'Tepung Tapioka', 'Pak Tani', '10 x 1 Kg', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000233', 'Tepung Terigu Transparan', 'Segitiga Biru', '12 x 1Kg', 'Pcs', 'Barang-kering', 'Bahan Pangan', '10000', '11000', '0', 0, NULL, NULL, NULL),
('BR000234', 'Teh Botol', 'Sosro', '-', 'Botol', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000235', 'Teh Bubuk Biru', 'Cap Botol', '5 x 80gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '6500', '3000', '0', 0, NULL, NULL, NULL),
('BR000236', 'Teh Hitam', 'Goal Para', '6 x 100gr', 'Pcs', 'Barang-kering', 'Bahan Pangan', '16000', '16000', '0', 0, NULL, NULL, NULL),
('BR000238', 'Terasi', 'Ikan Duyung', '1/4 Kg', 'Pcs', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000239', 'Box Timbel', 'Mika Bento', ' 50Pcs', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000240', 'Cup Gelas + Tutup', '-', '16 Oz', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000241', 'Cup Sambel', '-', '-', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000242', 'Cup Sayur Asem', '-', '200ML / 25Pcs', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000243', 'Kantong Plastik Putih Susu', 'Arco / Becak', 'no 24 / 500gr', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000244', 'Kantong Plastik Putih Susu', 'Arco / Becak', 'no 17', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000245', 'Kantong Plastik Putih Susu', 'Arco / Becak', 'no 28', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000246', 'Kantong Plastik Putih Susu', 'Arco / Becak', 'no 35', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000247', 'Kantong Plastik Putih Susu', 'Arco / Becak', 'no 40', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000248', 'Kantong Plastik Sampah', '-', '60 x 100', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000249', 'Kantong Plastik Sampah', '-', '90 x 120', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000250', 'Kertas Bungkus Nasi Kotak Panjang', '-', '250 Lembar', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000251', 'Kertas Bungkus Pendek', '-', '-', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000252', 'Kertas Nasi Bulat', '-', '-', '-', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000253', 'Kertas Koran', '-', '-', 'Roll', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000254', 'Kotak Nasi', '-', '', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000255', 'Kotak Nasi', '-', '', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000256', 'Kotak Nasi', '-', '', 'Pcs', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000257', 'Plastik Bening', '-', '10 x 25 (1 / 4Kg)', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000258', 'Plastik Bening', '-', '12 x 30 (1 / 2Kg)', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000259', 'Plastik Bening', '-', '14 x 35 (1Kg)', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000260', 'Plastik Bening', '-', '28 x 50 (5 Kg)', 'Pack', 'Barang-kering', 'Barang Non-Food', '0', '0', '0', 0, NULL, NULL, NULL),
('BR000261', 'Ang Ciu', 'Lonceng', '600ML', 'Botol', 'Barang-kering', 'Bahan Pangan', '0', '0', '0', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_beli_detail`
--

CREATE TABLE `tbl_beli_detail` (
  `bd_id` int(200) NOT NULL,
  `bd_barang_id` varchar(200) NOT NULL,
  `bd_barang_nama` varchar(200) DEFAULT NULL,
  `bd_barang_merk` varchar(200) DEFAULT NULL,
  `bd_barang_ukuran` varchar(200) DEFAULT NULL,
  `bd_barang_satuan` varchar(200) DEFAULT NULL,
  `bd_barang_harga_beli` varchar(200) DEFAULT NULL,
  `bd_barang_jumlah` varchar(200) DEFAULT NULL,
  `bd_barang_total` varchar(200) DEFAULT NULL,
  `tb_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_beli_header`
--

CREATE TABLE `tbl_beli_header` (
  `beli_id` varchar(200) NOT NULL,
  `beli_supplier_id` varchar(30) DEFAULT NULL,
  `beli_tanggal` varchar(30) DEFAULT NULL,
  `beli_tempo_bayar` varchar(50) DEFAULT NULL,
  `beli_total` varchar(30) DEFAULT NULL,
  `beli_jumlah_uang` varchar(50) DEFAULT NULL,
  `beli_kembalian` varchar(50) DEFAULT NULL,
  `beli_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_costumer`
--

CREATE TABLE `tbl_costumer` (
  `costumer_id` varchar(20) NOT NULL,
  `costumer_nama` varchar(50) DEFAULT NULL,
  `costumer_alamat` varchar(100) DEFAULT NULL,
  `costumer_notelp` varchar(50) DEFAULT NULL,
  `costumer_no_rekening` varchar(200) DEFAULT NULL,
  `costumer_balance` varchar(200) DEFAULT NULL,
  `costumer_debit` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jual_detail`
--

CREATE TABLE `tbl_jual_detail` (
  `jd_id` int(50) NOT NULL,
  `jd_barang_id` varchar(200) NOT NULL,
  `jd_barang_nama` varchar(200) DEFAULT NULL,
  `jd_barang_merk` varchar(200) DEFAULT NULL,
  `jd_barang_ukuran` varchar(200) DEFAULT NULL,
  `jd_barang_satuan` varchar(200) DEFAULT NULL,
  `jd_barang_harga_jual` varchar(200) DEFAULT NULL,
  `jd_barang_jumlah` varchar(200) DEFAULT NULL,
  `jd_barang_total` varchar(200) DEFAULT NULL,
  `jd_tj_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jual_detail`
--

INSERT INTO `tbl_jual_detail` (`jd_id`, `jd_barang_id`, `jd_barang_nama`, `jd_barang_merk`, `jd_barang_ukuran`, `jd_barang_satuan`, `jd_barang_harga_jual`, `jd_barang_jumlah`, `jd_barang_total`, `jd_tj_id`) VALUES
(9, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000001'),
(10, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000001'),
(11, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '1', '16500', 'P1910000001'),
(12, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000002'),
(13, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000002'),
(14, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000003'),
(15, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000003'),
(16, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '1', '16500', 'P1910000003'),
(17, 'BR000004', 'Beras Pulen', '-', '50kg', 'Kg', '0', '1', '0', 'P1910000003'),
(18, 'BR000005', 'Beras Merah', '-', '-', 'Kg', '0', '1', '0', 'P1910000003'),
(19, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000004'),
(20, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000004'),
(21, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '1', '16500', 'P1910000004'),
(22, 'BR000004', 'Beras Pulen', '-', '50kg', 'Kg', '0', '1', '0', 'P1910000004'),
(23, 'BR000005', 'Beras Merah', '-', '-', 'Kg', '0', '1', '0', 'P1910000004'),
(24, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000005'),
(25, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000005'),
(26, 'BR000004', 'Beras Pulen', '-', '50kg', 'Kg', '0', '1', '0', 'P1910000005'),
(27, 'BR000009', 'CUka', 'Belibis', '-', 'Botol', '0', '1', '0', 'P1910000005'),
(28, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000006'),
(29, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000006'),
(30, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '1', '16500', 'P1910000006'),
(31, 'BR000004', 'Beras Pulen', '-', '50kg', 'Kg', '0', '1', '0', 'P1910000006'),
(32, 'BR000005', 'Beras Merah', '-', '-', 'Kg', '0', '1', '0', 'P1910000006'),
(33, 'BR000007', 'Bumbu Pelezat Serbaguna', 'Royco rasa ayam', '12 x 12 x 10 gr', 'Renceng', '0', '1', '0', 'P1910000006'),
(34, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000009'),
(35, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000010'),
(36, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000010'),
(37, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '1', '16500', 'P1910000010'),
(38, 'BR000004', 'Beras Pulen', '-', '50kg', 'Kg', '0', '1', '0', 'P1910000010'),
(39, 'BR000008', 'Bandrek', '2 Pigeon Cianjur', '10 x 25gr', 'Pcs', '0', '1', '0', 'P1910000010'),
(40, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '2', '34000', 'P1910000011'),
(41, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000012'),
(42, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000012'),
(43, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '1', '16500', 'P1910000012'),
(44, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '1', '22000', 'P1910000012'),
(45, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '1', '17000', 'P1910000012'),
(46, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '1', '16500', 'P1910000012'),
(47, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '2', '17000', 'P1910000013'),
(48, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '4', NULL, 'P1910000014'),
(49, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '5', NULL, 'P1910000015'),
(50, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '5', NULL, 'P1910000016'),
(51, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '5', '85', 'P1910000017'),
(52, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '2', '34000', 'P1910000018'),
(53, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '2', '34000', 'P1910000020'),
(54, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '3', '66000', 'P1910000021'),
(55, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '3', '66000', 'P1910000021'),
(56, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '6', '132000', 'P1910000022'),
(57, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '6', '132000', 'P1910000022'),
(58, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '40', '680000', 'P1910000023'),
(59, 'BR000082', 'Telur asin matang', '', '', 'Kg', '0', '20', '330000', 'P1910000024'),
(60, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '20', '330000', 'P1910000024'),
(61, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '20', '330000', 'P1910000024'),
(62, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '20', '330000', 'P1910000024'),
(63, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '10', '0', 'P1910000025'),
(64, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '10', '0', 'P1910000025'),
(65, 'BR000098', 'Ikan asin kipas', '', '', 'Kg', '0', '10', '0', 'P1910000025'),
(66, 'BR000013', 'Fanta Soda', '-', '24 x 200ML', 'Botol', '0', '10', '0', 'P1910000025'),
(67, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '50', '850000', 'P1910000026'),
(68, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '60', '1320000', 'P1910000027'),
(69, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '60', '1320000', 'P1910000027'),
(70, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '30', '660000', 'P1910000028'),
(71, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '30', '660000', 'P1910000028'),
(72, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '10', '220000', 'P1910000029'),
(73, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '10', '220000', 'P1910000029'),
(74, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '70', NULL, 'P1910000030'),
(75, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '2', NULL, 'P1910000030'),
(76, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '30', NULL, 'P1910000031'),
(77, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '3', NULL, 'P1910000031'),
(78, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '20', NULL, 'P1910000032'),
(79, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '2', NULL, 'P1910000032'),
(80, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '19', '323000', 'P1910000033'),
(81, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '3', '66000', 'P1910000033'),
(82, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '70', '1190000', 'P1910000034'),
(83, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '2', '44000', 'P1910000034'),
(84, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '10', '170000', 'P1910000035'),
(85, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '12', '264000', 'P1910000035'),
(86, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '16', '264000', 'P1910000035'),
(87, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '20', '340000', 'P1910000036'),
(88, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '50', '850000', 'P1910000037'),
(89, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '20', '440000', 'P1910000037'),
(90, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '2', '33000', 'P1910000037'),
(91, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '12', '204000', 'P1910000038'),
(92, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '30', '660000', 'P1910000038'),
(93, 'BR000181', 'Tomat Sayur', '-', '-', 'Kg', '0', '50', '0', 'P1910000038'),
(94, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '12', '204000', 'P1910000039'),
(95, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '10', '220000', 'P1910000039'),
(96, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '10', '170000', 'P1910000040'),
(97, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '8', '136000', 'P1910000041'),
(98, 'BR000003', 'Beras Pera', '-', '50kg', 'Kg', '16500', '10', '165000', 'P1910000041'),
(99, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '21', '357000', 'P1910000042'),
(100, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '50', '1100000', 'P1910000042'),
(101, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '50', '850000', 'P1910000043'),
(102, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '60', '1320000', 'P1910000043'),
(103, 'BR000001', 'Asam Madura', 'Cap Cabe', '0,5kg x 20', 'Pcs', '17000', '40', '680000', 'P1910000044'),
(104, 'BR000002', 'Bawang Putih Utuh', '-', '-', 'Kg', '22000', '40', '880000', 'P1910000044');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jual_header`
--

CREATE TABLE `tbl_jual_header` (
  `tj_id` varchar(200) NOT NULL,
  `tj_costumer_id` varchar(200) DEFAULT NULL,
  `tj_tanggal` date DEFAULT NULL,
  `tj_tempo_bayar` varchar(50) DEFAULT NULL,
  `tj_total` varchar(30) DEFAULT NULL,
  `tj_tunggakan` varchar(40) DEFAULT NULL,
  `tj_jumlah_uang` varchar(50) DEFAULT NULL,
  `tj_kembalian` varchar(50) DEFAULT NULL,
  `tj_status` varchar(50) DEFAULT NULL,
  `kop_surat` varchar(200) DEFAULT NULL,
  `office` varchar(200) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `periode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jual_header`
--

INSERT INTO `tbl_jual_header` (`tj_id`, `tj_costumer_id`, `tj_tanggal`, `tj_tempo_bayar`, `tj_total`, `tj_tunggakan`, `tj_jumlah_uang`, `tj_kembalian`, `tj_status`, `kop_surat`, `office`, `telepon`, `email`, `periode`) VALUES
('P1910000005', 'PT Jaya Negara', '2019-10-12', NULL, '39,000', NULL, NULL, NULL, NULL, 'Pare Makmur', 'Bogor', '081564685525', 'info@gmail.com', '2019'),
('P1910000006', 'PT Jaya Negara', '2019-10-13', NULL, '55,500', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000007', 'PT Jaya Negara', '2019-10-13', NULL, '55,500', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000008', 'Lembur Kuring Sentul', '2019-10-13', NULL, '0', NULL, NULL, NULL, NULL, 'Pare Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000009', 'Lembur Kuring Sentul', '2019-10-13', NULL, '17,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000010', 'Lembur Kuring Sentul', '2019-10-13', NULL, '55,500', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000011', 'Lembur Kuring Sentul', '2019-10-13', NULL, '34,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000012', 'Lembur Kuring Sentul', '2019-10-14', NULL, '55,500', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000013', 'Lembur Kuring Sentul', '2019-10-14', NULL, '17,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000014', 'Lembur Kuring Sentul', '2019-10-14', NULL, '17,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000015', 'Lembur Kuring Sentul', '2019-10-14', NULL, '17,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000016', 'Lembur Kuring Sentul', '2019-10-14', NULL, '17,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000017', 'Lembur Kuring Sentul', '2019-10-14', NULL, '17,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta', '081564685525', 'info@gmail.com', '2019'),
('P1910000018', 'Lembur Kuring Sentul', '2019-10-14', NULL, '17,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', '2019'),
('P1910000020', 'Lembur Kuring Sentul', '2019-10-14', NULL, '17,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000021', 'Lembur Kuring Sentul', '2019-10-14', NULL, '39,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000022', 'Lembur Kuring Sentul', '2019-10-14', NULL, '39,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000023', 'Lembur Kuring Sentul', '2019-10-14', NULL, '680,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000024', 'Lembur Kuring Sentul', '2019-10-14', NULL, '1,770,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000025', 'Lembur Kuring Sentul', '2019-10-16', NULL, '1,335,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000026', 'Lembur Kuring Sentul', '2019-10-16', NULL, '850,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000027', 'Lembur Kuring Sentul', '2019-10-16', NULL, '2,170,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000028', 'Lembur Kuring', '2019-10-16', NULL, '1,680,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta , PS Bogor', '0988666', 'paremakmur@gmail.com', ''),
('P1910000029', 'Lembur Kuring Sentul', '2019-10-16', NULL, '1,240,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'paremakmur@gmail.com', ''),
('P1910000030', 'Lembur Kuring Sentul', '2019-10-16', NULL, '1,234,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000031', 'Lembur Kuring Sentul', '2019-10-16', NULL, '', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'paremakmur@gmail.com', ''),
('P1910000032', 'Lembur Kuring Sentul', '2019-10-16', NULL, '384,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000033', 'Lembur Kuring Sentul', '2019-10-16', NULL, '389,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '0988666', 'info@gmail.com', ''),
('P1910000034', 'Lembur Kuring Sentul', '2019-10-16', NULL, '1,234,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000035', 'Lembur Kuring Karyawan', '2019-10-16', NULL, '698,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'info@gmail.com', ''),
('P1910000036', 'Lembur Kuring Sentul', '2019-10-17', NULL, '340,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta Selatan', '081564685525', 'paremakmur@gmail.com', ''),
('P1910000037', 'Lembur Kuring Karyawan', '2019-10-17', NULL, '1,323,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta , PS Bogor', '081564685525', 'paremakmur@gmail.com', ''),
('P1910000038', 'Lembur Kuring Karyawan', '2019-10-21', NULL, '864,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta , PS Bogor', '081564685525', 'paremakmur@gmail.com', ''),
('P1910000039', 'Lembur Kuring', '2019-10-21', NULL, '424,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta', '0818787318', 'info.sahrilangga@gmail.com', ''),
('P1910000040', 'Lembur Kuring', '2019-10-21', NULL, '170,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta', '0818787318', 'info.sahrilangga@gmail.com', ''),
('P1910000041', 'Lembur Kuring Sentul', '2019-10-21', NULL, '301,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta , PS Bogor', '081564685525', 'paremakmur@gmail.com', ''),
('P1910000042', 'Lembur Kuring', '2019-10-21', NULL, '1,457,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta', '0818787318', 'info.sahrilangga@gmail.com', ''),
('P1910000043', 'Lembur Kuring Sentul', '2019-10-21', NULL, '2,170,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta , PS Bogor', '081564685525', 'paremakmur@gmail.com', ''),
('P1910000044', 'Lembur Kuring', '2019-10-21', NULL, '1,560,000', NULL, NULL, NULL, NULL, 'Dua Cahaya Makmur', 'Jakarta', '0818787318', 'info.sahrilangga@gmail.com', '');

--
-- Trigger `tbl_jual_header`
--
DELIMITER $$
CREATE TRIGGER `kurangi_dep` AFTER INSERT ON `tbl_jual_header` FOR EACH ROW BEGIN
UPDATE tbl_costumer set costumer_balance = costumer_balance - New.tj_total WHERE costumer_id = NEW.tj_costumer_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kop_surat`
--

CREATE TABLE `tbl_kop_surat` (
  `id` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `office` varchar(200) NOT NULL,
  `periode` varchar(200) NOT NULL,
  `suplier` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kop_surat`
--

INSERT INTO `tbl_kop_surat` (`id`, `email`, `telp`, `office`, `periode`, `suplier`) VALUES
('1', 'a', 'a', 'a', 'a', ''),
('2', 'a', 'a', 'a', 'a', ''),
('3', 'b', 'b', 'b', 'b', 'b'),
('S000004', 'b', 'b', 'b', 'b', 'b'),
('S000005', 'as', 'as', 'as', 'as', 'as'),
('S000006', 'ii', 'oio', 'io', 'io', 'io'),
('S000007', 'info@gmail.com', '0982772', 'Jakarta', '2019', 'Sayuran'),
('S000008', 'info@gmail.com', '0982772', 'Jakarta Selatan', '2019', 'Sayuran'),
('S000009', 'a', 'a', 'aa', 'aa', 'aa'),
('S000010', 'paremakmur@gmail.com', '081930069', 'Jakarta , PS Bogor', '2019', 'Sayur Mayur,Buah buahan segar , Lauk Pauk,Dan bahan kering'),
('S000011', 'paremakmur@gmail.com', '081930069', 'Jakarta , PS Bogor', '2019', 'Sayuran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_suplier`
--

CREATE TABLE `tbl_suplier` (
  `suplier_id` int(11) NOT NULL,
  `suplier_nama` varchar(50) DEFAULT NULL,
  `suplier_alamat` varchar(100) DEFAULT NULL,
  `suplier_notelp` varchar(50) DEFAULT NULL,
  `suplier_no_rekening` varchar(200) DEFAULT NULL,
  `suplier_balance` varchar(200) DEFAULT NULL,
  `suplier_debit` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(50) DEFAULT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `Level` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_username`, `user_password`, `Level`) VALUES
(1, 'Administrator', 'admin', 'admin', 0),
(2, 'user_nama', 'user2019username', 'user2019password', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `tbl_beli_detail`
--
ALTER TABLE `tbl_beli_detail`
  ADD PRIMARY KEY (`bd_id`);

--
-- Indexes for table `tbl_beli_header`
--
ALTER TABLE `tbl_beli_header`
  ADD PRIMARY KEY (`beli_id`);

--
-- Indexes for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  ADD PRIMARY KEY (`costumer_id`);

--
-- Indexes for table `tbl_jual_detail`
--
ALTER TABLE `tbl_jual_detail`
  ADD PRIMARY KEY (`jd_id`);

--
-- Indexes for table `tbl_jual_header`
--
ALTER TABLE `tbl_jual_header`
  ADD PRIMARY KEY (`tj_id`);

--
-- Indexes for table `tbl_kop_surat`
--
ALTER TABLE `tbl_kop_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_beli_detail`
--
ALTER TABLE `tbl_beli_detail`
  MODIFY `bd_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jual_detail`
--
ALTER TABLE `tbl_jual_detail`
  MODIFY `jd_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
