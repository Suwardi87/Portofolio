-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 13.45
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_plastik_yun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kd_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `total_byr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`kd_brg`, `nama_brg`, `tanggal`, `jumlah_brg`, `harga_brg`, `total_byr`) VALUES
(21, 'pipet bengkok', '2023-09-12', 120, 100000, 12000000),
(22, 'kertas nasi bunga', '2023-09-12', 120, 20000, 2400000),
(23, 'tali mulyana', '2023-09-12', 120, 15250, 1830000),
(24, 'pop ice 8 wr', '2023-09-29', 120, 125000, 15000000),
(25, 'plastik 24 RC', '2023-09-28', 120, 21000, 2520000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `no_faktur` int(11) NOT NULL,
  `kd_brg` int(11) NOT NULL,
  `nama_brg` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `customer` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `jumlah_brg` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`no_faktur`, `kd_brg`, `nama_brg`, `tanggal`, `customer`, `alamat`, `tipe`, `harga_brg`, `jumlah_brg`) VALUES
(54, 22, '', '2023-10-30', 'wq', 'w', 'Kredit', 2, '2'),
(68, 21, '21', '2023-11-27', '2', '2', 'QRIS', 2, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(8, 'fadhila annur', 'fadhila', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kd_brg`),
  ADD KEY `nama_brg` (`nama_brg`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`no_faktur`),
  ADD KEY `kd_brg` (`kd_brg`),
  ADD KEY `nama_brg` (`nama_brg`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `kd_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `no_faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`kd_brg`) REFERENCES `tb_barang` (`kd_brg`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
