-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2019 pada 17.38
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factory_inv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `intrn1`
--

CREATE TABLE `intrn1` (
  `kodein` varchar(225) NOT NULL,
  `tglin` date NOT NULL,
  `kodeitem` char(14) NOT NULL,
  `qty` int(6) NOT NULL,
  `satuan` char(4) NOT NULL,
  `hargabeli` int(9) NOT NULL,
  `hpp` int(9) NOT NULL,
  `hargajual` int(9) NOT NULL,
  `disc` int(9) NOT NULL,
  `ket` char(40) NOT NULL,
  `typetrans` char(2) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_inmst1`
--

CREATE TABLE `ms_inmst1` (
  `kodecbg` char(3) NOT NULL,
  `kodeitem` char(14) NOT NULL,
  `namabrg` char(40) NOT NULL,
  `kategori` char(2) NOT NULL,
  `hrg_beli_akhir` int(9) NOT NULL,
  `tgl_beli_akhir` date NOT NULL,
  `saldo_awal` int(6) NOT NULL,
  `jml_saldo_awal` int(9) NOT NULL,
  `qty` int(6) NOT NULL,
  `satuan` char(4) NOT NULL,
  `kdgudang` char(2) NOT NULL,
  `kdrak` char(5) NOT NULL,
  `hpp` int(9) NOT NULL,
  `mip` int(6) NOT NULL,
  `min` int(6) NOT NULL,
  `po` int(6) NOT NULL,
  `so` int(6) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_inmst1`
--

INSERT INTO `ms_inmst1` (`kodecbg`, `kodeitem`, `namabrg`, `kategori`, `hrg_beli_akhir`, `tgl_beli_akhir`, `saldo_awal`, `jml_saldo_awal`, `qty`, `satuan`, `kdgudang`, `kdrak`, `hpp`, `mip`, `min`, `po`, `so`, `kduser`, `tglentry`) VALUES
('', '10721151', 'Powder chocho belgian', '01', 0, '0000-00-00', 0, 0, 1000, 'LOSI', '01', 'A1', 0, 500, 100, 0, 0, 'userinv', '2019-07-09'),
('', '10721152', 'Cokelat', '02', 0, '0000-00-00', 0, 0, 500, 'LOSI', '01', 'A2', 0, 1000, 100, 0, 0, 'userinv', '2019-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_inmst2`
--

CREATE TABLE `ms_inmst2` (
  `kodecbg` int(3) NOT NULL,
  `kodeitem` char(14) NOT NULL,
  `namabrg` char(40) NOT NULL,
  `kategori` char(2) NOT NULL,
  `hrg_beli_akhir` char(9) NOT NULL,
  `tgl_beli_akhir` date NOT NULL,
  `saldo_awal` int(6) NOT NULL,
  `jml_saldo_awal` int(9) NOT NULL,
  `qty` int(6) NOT NULL,
  `satuan` char(4) NOT NULL,
  `kdgudang` char(2) NOT NULL,
  `kdrak` char(5) NOT NULL,
  `hpp` int(9) NOT NULL,
  `hargalabel` int(9) NOT NULL,
  `harga_jual1` int(9) NOT NULL,
  `harga_jual2` int(9) NOT NULL,
  `harga_jual3` int(9) NOT NULL,
  `tgl_jual_akhir` date NOT NULL,
  `mip` int(6) NOT NULL,
  `min` int(6) NOT NULL,
  `po` int(6) NOT NULL,
  `so` int(6) NOT NULL,
  `bln0` int(7) NOT NULL,
  `frek0` int(5) NOT NULL,
  `bln1` int(7) NOT NULL,
  `frek1` int(5) NOT NULL,
  `bln2` int(7) NOT NULL,
  `frek2` int(5) NOT NULL,
  `bln3` int(7) NOT NULL,
  `frek3` int(5) NOT NULL,
  `bln4` int(7) NOT NULL,
  `frek4` int(5) NOT NULL,
  `kduser` char(5) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_inmst2`
--

INSERT INTO `ms_inmst2` (`kodecbg`, `kodeitem`, `namabrg`, `kategori`, `hrg_beli_akhir`, `tgl_beli_akhir`, `saldo_awal`, `jml_saldo_awal`, `qty`, `satuan`, `kdgudang`, `kdrak`, `hpp`, `hargalabel`, `harga_jual1`, `harga_jual2`, `harga_jual3`, `tgl_jual_akhir`, `mip`, `min`, `po`, `so`, `bln0`, `frek0`, `bln1`, `frek1`, `bln2`, `frek2`, `bln3`, `frek3`, `bln4`, `frek4`, `kduser`, `tglentry`) VALUES
(0, '10721151', 'Powder chocho belgian', '01', '', '0000-00-00', 0, 0, 0, 'PCS', '02', 'A1', 0, 0, 0, 0, 0, '0000-00-00', 500, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'useri', '2019-07-09'),
(0, '10721152', 'Cokelat', '02', '', '0000-00-00', 0, 0, 0, 'PCS', '02', 'A2', 0, 0, 0, 0, 0, '0000-00-00', 1000, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'useri', '2019-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_kategori`
--

CREATE TABLE `ms_kategori` (
  `kategori` char(2) NOT NULL,
  `ket` char(15) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_kategori`
--

INSERT INTO `ms_kategori` (`kategori`, `ket`, `kduser`, `tglentry`) VALUES
('01', 'Bahan Baku', 'userinv', '2019-07-09'),
('02', 'Bahan Pembantu', 'userinv', '2019-07-09'),
('03', 'Bahan Packaging', 'userinv', '2019-07-09'),
('04', 'Produk 1/2 Jadi', 'userinv', '2019-07-09'),
('05', 'Produk Jadi', 'userinv', '2019-07-09'),
('06', 'Produk Edukasi', 'userinv', '2019-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_konversi`
--

CREATE TABLE `ms_konversi` (
  `nokonter` int(225) NOT NULL,
  `satuan` char(4) NOT NULL,
  `jml` int(225) NOT NULL,
  `satuan2` char(4) NOT NULL,
  `jml2` int(225) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='nokonter Konversi == nokonter fct-konter';

--
-- Dumping data untuk tabel `ms_konversi`
--

INSERT INTO `ms_konversi` (`nokonter`, `satuan`, `jml`, `satuan2`, `jml2`, `kduser`, `tglentry`) VALUES
(3, 'LOSI', 1, 'PCS', 12, 'userinv', '2019-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_pack`
--

CREATE TABLE `ms_pack` (
  `nokonter` int(225) NOT NULL,
  `kditem` char(14) NOT NULL,
  `satuan` char(4) NOT NULL,
  `jml` int(225) NOT NULL,
  `satuan2` char(4) NOT NULL,
  `jml2` int(225) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_rack`
--

CREATE TABLE `ms_rack` (
  `nokonter` int(225) NOT NULL,
  `kdrak` char(5) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_rack`
--

INSERT INTO `ms_rack` (`nokonter`, `kdrak`, `kduser`, `tglentry`) VALUES
(6, 'A1', 'userinv', '2019-07-09'),
(7, 'A2', 'userinv', '2019-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_satuan`
--

CREATE TABLE `ms_satuan` (
  `nokonter` int(225) NOT NULL,
  `satuan` char(4) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_satuan`
--

INSERT INTO `ms_satuan` (`nokonter`, `satuan`, `kduser`, `tglentry`) VALUES
(6, 'PCS', 'userinv', '2019-07-09'),
(8, 'LOSI', 'userinv', '2019-07-09'),
(9, 'BUAH', 'userinv', '2019-07-09'),
(10, 'PACK', 'userinv', '2019-07-09'),
(11, 'KG', 'userinv', '2019-07-09'),
(12, 'GRAM', 'userinv', '2019-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opname1`
--

CREATE TABLE `opname1` (
  `kodecbg` char(3) NOT NULL,
  `tgl` date NOT NULL,
  `kodeitem` char(14) NOT NULL,
  `qty` int(6) NOT NULL,
  `satuan` char(4) NOT NULL,
  `kdgudang` char(2) NOT NULL,
  `kdrak` char(5) NOT NULL,
  `hpp` int(9) NOT NULL,
  `qtyopname` int(6) NOT NULL,
  `qtyselisih` int(6) NOT NULL,
  `jmlselisih` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trjurnal`
--

CREATE TABLE `trjurnal` (
  `kodeakun` varchar(20) NOT NULL,
  `namaakun` varchar(225) NOT NULL,
  `debet` double(15,2) NOT NULL,
  `kredit` double(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `intrn1`
--
ALTER TABLE `intrn1`
  ADD PRIMARY KEY (`kodein`);

--
-- Indeks untuk tabel `ms_inmst1`
--
ALTER TABLE `ms_inmst1`
  ADD PRIMARY KEY (`kodeitem`);

--
-- Indeks untuk tabel `ms_inmst2`
--
ALTER TABLE `ms_inmst2`
  ADD PRIMARY KEY (`kodeitem`);

--
-- Indeks untuk tabel `ms_kategori`
--
ALTER TABLE `ms_kategori`
  ADD PRIMARY KEY (`kategori`);

--
-- Indeks untuk tabel `ms_konversi`
--
ALTER TABLE `ms_konversi`
  ADD PRIMARY KEY (`nokonter`);

--
-- Indeks untuk tabel `ms_pack`
--
ALTER TABLE `ms_pack`
  ADD PRIMARY KEY (`kditem`);

--
-- Indeks untuk tabel `ms_rack`
--
ALTER TABLE `ms_rack`
  ADD PRIMARY KEY (`nokonter`);

--
-- Indeks untuk tabel `ms_satuan`
--
ALTER TABLE `ms_satuan`
  ADD PRIMARY KEY (`nokonter`);

--
-- Indeks untuk tabel `opname1`
--
ALTER TABLE `opname1`
  ADD PRIMARY KEY (`kodeitem`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ms_konversi`
--
ALTER TABLE `ms_konversi`
  MODIFY `nokonter` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ms_rack`
--
ALTER TABLE `ms_rack`
  MODIFY `nokonter` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ms_satuan`
--
ALTER TABLE `ms_satuan`
  MODIFY `nokonter` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
