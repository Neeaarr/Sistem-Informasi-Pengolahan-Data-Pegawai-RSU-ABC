-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jan 2021 pada 17.07
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rsu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE IF NOT EXISTS `arsip` (
`id` int(5) NOT NULL,
  `ruang_arsip` varchar(25) NOT NULL,
  `no_rak` int(5) NOT NULL,
  `no_laci` int(5) NOT NULL,
  `no_boks` int(5) NOT NULL,
  `para_pihak` varchar(100) NOT NULL,
  `no_perkara` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `pemberi` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id`, `ruang_arsip`, `no_rak`, `no_laci`, `no_boks`, `para_pihak`, `no_perkara`, `tgl_masuk`, `penerima`, `pemberi`, `status`, `keterangan`) VALUES
(6, 'Arsip Pidana', 2, 10, 10, 'Jhonny', '01/PID.B/2018/PN.KIS', '2018-12-01', 'Marno', 'Putri', 'Ada', 'Pidana Pencurian'),
(7, 'Arsip Pidana', 2, 11, 10, 'Tuti, Wanda', '02/PID.B/2018/PN.KIS', '2018-12-03', 'Marno', 'Putri', 'Dipinjam', 'Pidana Perjudian'),
(8, 'Arsip Pidana', 1, 3, 9, 'Budi', '03/PID.B/2018/PN.KIS', '2018-12-04', 'Marno', 'Putri', 'Ada', 'Pidana Perjudian'),
(9, 'Arsip Perdata', 1, 3, 5, 'Miswar, Susi, Lastri', '01/PDT.G/2018/PN.KIS', '2018-12-03', 'Ipul', 'Setiawan', 'Dipinjam', 'Perdata Gugatan'),
(10, 'Arsip Perdata', 2, 3, 1, 'Mastur', '02/PDT.G/2018/PN.KIS', '2018-12-12', 'Ipul', 'Setiawan', 'Ada', 'Perdata Gugatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE IF NOT EXISTS `gaji` (
  `nip` int(5) NOT NULL,
  `golongan` int(10) NOT NULL,
  `gaji` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`nip`, `golongan`, `gaji`) VALUES
(1111, 2, 2500000),
(1112, 2, 3000000),
(1113, 1, 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `golongan` int(10) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `tgl_lahir`, `alamat`, `golongan`, `jabatan`) VALUES
(1111, 'Ridwan', '1996-04-01', 'kisaran', 2, 'Konsultan IT'),
(1112, 'Andini', '1999-01-07', 'Kisaran', 2, 'Perawat'),
(1113, 'Joni', '1996-11-05', 'kisaran', 1, 'Security');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `no_perkara` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
`id` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_perkara`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('01/PID.B/2018/PN.KIS', 'A. Nasution', '2018-12-14', '2018-12-16', 2, '-', 4),
('01/PDT.G/2018/PN.KIS', 'J. Siahaan', '2018-12-10', 'Belum Kembali', 0, '-', 5),
('02/PID.B/2018/PN.KIS', 'Bejo', '2018-12-11', 'Belum Kembali', 0, 'Input ke CTS', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Admin', 1, 'Staff Kepegawaian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `no_perkara` (`no_perkara`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
