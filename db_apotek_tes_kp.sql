-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2020 pada 14.34
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apotek_tes_kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `expire` date NOT NULL,
  `penyajian` text NOT NULL,
  `pabrik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `deskripsi`, `nama_obat`, `harga`, `stok`, `kategori`, `expire`, `penyajian`, `pabrik`) VALUES
(1, 'Tablet untuk membantu meringankan sesak karena asma, bronkitis, dan gangguan pernafasan lain. Beli Asmasolon STR 4\'S di K24Klik dan dapatkan manfaatnya.', 'Asmasolon Str 4\'s', 2432, 99, 'Antiasma', '2025-06-19', 'Setelah makan', 'Probus'),
(12, 'Pembuatan tablet salut selaput ditujukan untuk menghindari bau yang tidak sedap dari bahan yang terkandung di dalamnya.', 'Asam Mefenamat', 9437, 120, 'Antiinflamasi Nonsteroid', '2025-03-22', 'Setelah makan', 'Indofarma'),
(13, 'Clavamox yang dikeluarkan oleh PT Kalbe Farma diproduksi dalam bentuk tablet. Tablet Clavamox mengandung Amoxicillin trihidrat dan kalium klavulanat.', 'Amoxicillin', 8700, 88, 'Antibiotik penisilin', '2026-04-23', 'Setelah makan', 'KALBE'),
(14, 'Cardio Aspirin merupakan obat yang digunakan untuk mengencerkan darah supaya tidak terjadi penyumbatan di pembuluh darah pada penderita jantung, infark, dan stroke.', 'Aspirin', 11050, 200, 'Antiplatelet & obat antiinflam', '2026-09-22', 'Setelah makan', 'Nama pabrik'),
(15, 'PT Hexpharm memproduksi tablet Bisoprolol Fumarate 5 mg dan telah terdaftar di BPOM. ', 'Bisoprolol', 6700, 55, 'Penghambat beta', '2021-09-29', 'Setelah makan', 'Hexpharm'),
(16, 'Siladex Cough & Could diproduksi oleh PT Konimex dan tersedia dalam kemasan 30 mL, 60 mL, dan 100 mL.', 'Bisolvon', 3450, 65, 'Mukolitik (pengencer dahak)', '2022-01-23', 'Setelah makan', 'PT Konimex'),
(17, 'Bodrex Flu & Batuk Berdahak PE merupakan rangkaian dari bodrex flu & batuk PE khusus untuk batuk berdahak pertama di Indonesia dengan PE (Phenylephrine) yang berfungsi sebagai dekongestan untuk meredakan hidung tersumbat. ', 'Bodrex', 2350, 350, 'Obat sakit kepala', '2027-09-25', 'Setelah makan', 'Tempo Scan Pasific'),
(18, 'Chloramphenicol merupakan jenis obat generik yang banyak diproduksi oleh perusahan-perusahaan farmasi, salah satunya yaitu PT Bernofarm.', 'Chloramphenicol', 2350, 40, 'Antibiotik', '2024-12-03', 'Setelah makan', 'BERNOFARM'),
(19, 'AFRA PREMIUM OLIVE OIL 250 ML Minyak zaitun yang diproses secara higienis dan menggunakan teknologi yang modern. ', 'Gliserol', 3450, 25, 'Obat pencahar (laksatif)', '2023-05-12', 'Setelah makan', 'Mitra Bersaudara'),
(20, 'Piroxicam Novell merupakan obat produksi PT. Novell Pharmaceutical Lab yang mengandung 10mg piroksikam pada setiap tabletnya. ', 'Lisinopril', 2350, 34, 'ACE inhibitor', '2021-09-23', 'Setelah makan', 'Novell Pharma');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
