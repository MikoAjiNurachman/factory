-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2019 pada 17.40
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
-- Database: `factory_utl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fct_akses`
--

CREATE TABLE `fct_akses` (
  `kd_user` int(225) NOT NULL,
  `username` char(33) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nohp` char(13) NOT NULL,
  `alamat` char(25) NOT NULL,
  `group` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fct_akses`
--

INSERT INTO `fct_akses` (`kd_user`, `username`, `password`, `nohp`, `alamat`, `group`, `tglentry`) VALUES
(4, 'username', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', '', '2019-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konter`
--

CREATE TABLE `konter` (
  `kodecbg` char(3) NOT NULL,
  `kodepo` char(2) NOT NULL,
  `konterpo` int(8) NOT NULL,
  `koderb` char(2) NOT NULL,
  `konterrb` int(8) NOT NULL,
  `kodefpb` char(2) NOT NULL,
  `konterfpb` int(8) NOT NULL,
  `kodefkb` char(2) NOT NULL,
  `konterfkb` int(8) NOT NULL,
  `kodero` char(2) NOT NULL,
  `konterro` int(8) NOT NULL,
  `kodeg2g3` char(2) NOT NULL,
  `konterg2g3` int(8) NOT NULL,
  `returg3g2` char(2) NOT NULL,
  `konreg3g2` int(8) NOT NULL,
  `kodesi` char(2) NOT NULL,
  `kontersi` int(8) NOT NULL,
  `kodesj` char(2) NOT NULL,
  `kontersj` int(8) NOT NULL,
  `kodekwi` char(2) NOT NULL,
  `konterkwi` int(8) NOT NULL,
  `kodeasmsk` char(2) NOT NULL,
  `konterasmsk` int(8) NOT NULL,
  `kodekasklr` char(2) NOT NULL,
  `konterkasklr` int(8) NOT NULL,
  `kodekastb` char(2) NOT NULL,
  `konterkastb` int(8) NOT NULL,
  `kodein` char(2) NOT NULL,
  `konterin` int(8) NOT NULL,
  `kodein2` char(2) NOT NULL,
  `konterin2` int(8) NOT NULL,
  `kodein3` char(2) NOT NULL,
  `konterin3` int(8) NOT NULL,
  `kodeacc` char(2) NOT NULL,
  `konteracc` int(8) NOT NULL,
  `konterpjkawl` int(8) NOT NULL,
  `konterpjkakh` int(8) NOT NULL,
  `konterpjkawl1` int(8) NOT NULL,
  `konterpjkakh1` int(8) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konter`
--

INSERT INTO `konter` (`kodecbg`, `kodepo`, `konterpo`, `koderb`, `konterrb`, `kodefpb`, `konterfpb`, `kodefkb`, `konterfkb`, `kodero`, `konterro`, `kodeg2g3`, `konterg2g3`, `returg3g2`, `konreg3g2`, `kodesi`, `kontersi`, `kodesj`, `kontersj`, `kodekwi`, `konterkwi`, `kodeasmsk`, `konterasmsk`, `kodekasklr`, `konterkasklr`, `kodekastb`, `konterkastb`, `kodein`, `konterin`, `kodein2`, `konterin2`, `kodein3`, `konterin3`, `kodeacc`, `konteracc`, `konterpjkawl`, `konterpjkakh`, `konterpjkawl1`, `konterpjkakh1`, `kduser`, `tglentry`) VALUES
('1', 'FC', 19060001, 'RB', 19060001, 'PB', 0, 'KB', 0, 'RO', 0, 'K3', 0, 'R3', 0, 'IF', 0, 'SJ', 0, 'KF', 19060001, 'KM', 19060001, 'KK', 0, 'TB', 19060001, 'IN', 19060001, 'IP', 0, 'IG', 0, 'AC', 0, 0, 0, 0, 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_session`
--

CREATE TABLE `log_session` (
  `id` int(225) NOT NULL,
  `username` char(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jamin` time NOT NULL,
  `jamout` time NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_session`
--

INSERT INTO `log_session` (`id`, `username`, `tanggal`, `jamin`, `jamout`, `status`) VALUES
(11, 'username', '2019-07-09', '22:19:14', '00:00:00', 'online'),
(12, 'username', '2019-07-09', '22:23:46', '00:00:00', 'online');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `kodecbg` char(3) NOT NULL,
  `namacbg` char(40) NOT NULL,
  `alamat1` char(40) NOT NULL,
  `alamat2` char(40) NOT NULL,
  `kota` char(30) NOT NULL,
  `kdpos` char(5) NOT NULL,
  `notelp` char(18) NOT NULL,
  `nohp` char(18) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `chstore` char(20) NOT NULL,
  `kduser` char(10) NOT NULL,
  `tglentry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`kodecbg`, `namacbg`, `alamat1`, `alamat2`, `kota`, `kdpos`, `notelp`, `nohp`, `logo`, `chstore`, `kduser`, `tglentry`) VALUES
('1', 'Cabang semarang', 'Jl. Sana kemari 1', 'Opsional', 'Semarang', '50512', '(082) 372-312-3132', '(089) 647-852-615_', 'Dota2-TheInternational2015.jpg', 'Pimpinan', 'userinv', '2019-06-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `refjurnal`
--

CREATE TABLE `refjurnal` (
  `kas` char(13) NOT NULL,
  `bank` char(13) NOT NULL,
  `umbeli` char(13) NOT NULL,
  `hutang` char(13) NOT NULL,
  `persediaan` char(13) NOT NULL,
  `ppnmasuk` char(13) NOT NULL,
  `ongkirbeli` char(13) NOT NULL,
  `persediaan_in_transit` char(13) NOT NULL,
  `persediaan_gd1` char(13) NOT NULL,
  `persediaan_gd2` char(13) NOT NULL,
  `persediaan_brg_jadi` char(13) NOT NULL,
  `persediaan_bahan_baku_dlm_proses` char(13) NOT NULL,
  `persediaan_bahan_pembantu` char(13) NOT NULL,
  `biaya_upah_produksi` char(13) NOT NULL,
  `biaya_jasa_maklon` char(13) NOT NULL,
  `biaya_biaya_listrik` char(13) NOT NULL,
  `biaya_penyusutan_inv_pabrik` char(13) NOT NULL,
  `biaya_pr_mesin` char(13) NOT NULL,
  `biaya_perlengkapan_pabrik` char(13) NOT NULL,
  `biaya_lain` char(13) NOT NULL,
  `persediaan_gd3` char(13) NOT NULL,
  `umjual` char(13) NOT NULL,
  `piutang` char(13) NOT NULL,
  `penjualan` char(13) NOT NULL,
  `ppnkeluar` char(13) NOT NULL,
  `ongkirjual` char(13) NOT NULL,
  `hpp` char(13) NOT NULL,
  `retur_penjualan` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `refjurnal`
--

INSERT INTO `refjurnal` (`kas`, `bank`, `umbeli`, `hutang`, `persediaan`, `ppnmasuk`, `ongkirbeli`, `persediaan_in_transit`, `persediaan_gd1`, `persediaan_gd2`, `persediaan_brg_jadi`, `persediaan_bahan_baku_dlm_proses`, `persediaan_bahan_pembantu`, `biaya_upah_produksi`, `biaya_jasa_maklon`, `biaya_biaya_listrik`, `biaya_penyusutan_inv_pabrik`, `biaya_pr_mesin`, `biaya_perlengkapan_pabrik`, `biaya_lain`, `persediaan_gd3`, `umjual`, `piutang`, `penjualan`, `ppnkeluar`, `ongkirjual`, `hpp`, `retur_penjualan`) VALUES
('Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', 'Pilih No Akun', '127.101.02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fct_akses`
--
ALTER TABLE `fct_akses`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indeks untuk tabel `log_session`
--
ALTER TABLE `log_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fct_akses`
--
ALTER TABLE `fct_akses`
  MODIFY `kd_user` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `log_session`
--
ALTER TABLE `log_session`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
