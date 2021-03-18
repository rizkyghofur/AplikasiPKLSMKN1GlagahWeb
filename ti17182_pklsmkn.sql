-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2020 pada 17.31
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ti17182_pklsmkn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `keterangan` enum('Hadir','Sakit','Izin','Tanpa Keterangan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_siswa`, `tanggal_absensi`, `keterangan`) VALUES
(1, 18867, '2020-08-01', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_kunjungan_pkl`
--

CREATE TABLE `catatan_kunjungan_pkl` (
  `id_catatan_kunjungan_pkl` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `catatan_pembimbing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dudi`
--

CREATE TABLE `data_dudi` (
  `id_dudi` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_dudi` varchar(255) NOT NULL,
  `alamat_dudi` varchar(255) NOT NULL,
  `no_telp_dudi` int(15) NOT NULL DEFAULT '0',
  `jenis_usaha` varchar(255) NOT NULL DEFAULT '-',
  `nama_pimpinan` varchar(255) NOT NULL DEFAULT '-',
  `no_telp_pimpinan` int(15) NOT NULL DEFAULT '0',
  `kuota` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dudi`
--

INSERT INTO `data_dudi` (`id_dudi`, `id_jurusan`, `nama_dudi`, `alamat_dudi`, `no_telp_dudi`, `jenis_usaha`, `nama_pimpinan`, `no_telp_pimpinan`, `kuota`) VALUES
(1, 1, 'Asterix Komputer', 'Jl. Dr. Soetomo No. 72 Banyuwangi', 0, '-', '-', 0, 7),
(2, 1, 'Bina Usaha Komputer', 'Jl. KH. Wahid Hasyim Genteng', 0, '', '', 0, 0),
(3, 1, 'BPS Komputer', 'Jl. Achmad Yani Banyuwangi', 0, '-', '', 0, -3),
(4, 1, 'Cakrawala Komputer', 'Jl. Sayu Wiwit No. 73 Banyuwangi', 0, '-', '', 0, 2),
(5, 1, 'CV. Indokomtel (ISP)', 'Jl. Jendral Sudirman No 74 Kroya, Cilacap', 0, '-', '', 0, 0),
(6, 1, 'CV. SIC Yogyakarta', 'Jl. Kali Urang KM 9,2 No. 95 RT/RW 05/18, Yogyakarta', 0, '-', '', 0, 0),
(7, 1, 'CV. Talenta Maksima Malang', 'Jl. Kendal Sari No. 2, Ruko E-F, Cengger Ayam, Malang', 0, '-', '', 0, 0),
(8, 1, 'DD. TECH Banyuwangi', 'Jl. Adi Sucipto 08', 0, '-', '', 0, 0),
(9, 1, 'Dinas Komunikasi Informatika dan Persandian', 'Jl. KH. Agus Salim No. 85, Taman Baru, Banyuwangi', 0, '-', '', 0, 0),
(10, 1, 'Doctor Komputer', 'Jl. Sayu Wiwit, Banyuwangi', 0, '-', '', 0, 0),
(11, 1, 'Elcom Komputer', 'Jl. Kalimantan No. 5 Jember', 0, '-', '', 0, 0),
(12, 1, 'Escape Service', 'Jl. Sukopuro Dusun Srono, Kec. Srono, Banyuwangi', 0, '-', '', 0, 0),
(13, 1, 'Genius Komputer', 'Jl. Adi Sucipto 108 D Sobo', 0, '-', '', 0, 1),
(14, 1, 'Haris Laptop Service', 'Benculu Krajan RT 2/5 Cluring Banyuwangi', 0, '-', '', 0, 0),
(15, 1, 'ID Computer', 'Jl. KH. Agus Salim, Banyuwangi', 0, '-', '', 0, 0),
(16, 1, 'Intan Service', 'Perlinggihan Grogol Banyuwangi', 0, '-', '', 0, 0),
(17, 1, 'JTV Banyuwangi', 'Jl. Kepiting No. 35', 0, '-', '', 0, 0),
(18, 1, 'Kantor Kecamatan Banyuwangi', 'Jl. Jendral Ahmad Yani No 101, Banyuwangi', 0, '-', '', 0, 0),
(19, 1, 'Kantor Kesyah Bandaran dan Otoritas Pelabuhan kelas III', 'Jl. Raya Situbondo, Ketapang', 0, '-', '', 0, 0),
(20, 1, 'Kantor UPBU Kelas III Blambangan Banyuwangi', 'Jl. Agung Wilis, kec. Rogojampi, Banyuwangi', 0, '-', '', 0, 0),
(21, 1, 'Laptop Gallery', 'Jl. Achmad Yani 65, Banyuwangi', 0, '-', '', 0, 0),
(22, 1, 'LKP Print', 'Jl. KH. Hasyim Ashari, Rogojampi', 0, '-', '', 0, 0),
(23, 1, 'Micro DB', 'Dusun Kraja, Desa Setail, RT 2/6 Kec. Genteng', 0, '-', '', 0, 0),
(24, 1, 'Multikom Banyuwangi', 'Jl. Ken Arok No. 8 Banyuwangi', 0, '-', '-', 0, 0),
(25, 1, 'PENS - ITS', 'Jl. Raya ITS Politeknik Elektronika, Keputih, Sukolilo, Surabaya', 0, '-', '', 0, 0),
(26, 1, 'PT. Blambangan Cahaya Timur', 'Perum Permata Jingga 1 Blok D/9, Boyolangu, Giri, Banyuwangi', 0, '-', '', 0, 0),
(27, 1, 'PT. Lundin Industry Invest', 'Jl. Lundin No. 1 Sukowidi, Banyuwangi', 0, '-', '', 0, 0),
(28, 1, 'PT. ASDP Indonesia Ferry', 'Jl. Jendral Gatot Subroto, Ketapang Banyuwangi', 0, '-', '', 0, 0),
(29, 1, 'PT. Global Retalindo Pratama', 'Jl. Kediri No. 36 Tuban, Bali', 0, '-', '', 0, 0),
(30, 1, 'PT. Menara Gading Mulia', 'Kota Harapan Indah Ruko Ifolia HY, 46 No. 40-41, Bekasi', 0, '-', '', 0, 0),
(31, 1, 'PT. Pelindo', 'Jl. Raya Banyuwangi , Selogiri, Ketapang, Banyuwangi', 0, '-', '', 0, 0),
(32, 1, 'PT. Pertamina Persero', 'Jl. Raya Ulakan, Manggis, Karangasem, Bali', 0, '-', '', 0, 0),
(33, 1, 'PT. PJB UP Gresik', 'Jl. Harun Tohir, Pulopancikan, Gresik', 0, '-', '', 0, 0),
(34, 1, 'PT. Surya Selindo', 'Kawasan Industri & Perdagangan Taman Tekno Blok K2, No. 11 BSD Sektor XI Setu, Tanggerang Selatan', 0, '-', '', 0, 0),
(35, 1, 'PT. Telkom Akses', 'Jl. Kalisosok 1 No. 12, Krembangan Selatan, Surabaya', 0, '-', '', 0, 0),
(36, 1, 'PT. Telkom Surabaya', 'Jl. Ketintang 156, Surabaya', 0, '-', '', 0, 0),
(37, 1, 'PT. Telkom Banyuwangi', 'Jl. Dr. Sutomo no.63 Kepatihan, Banyuwangi', 0, '-', '', 0, 0),
(38, 1, 'PT. Trion Global Indonesia', 'Jl. Gajah Mada no. 38 Penataban', 0, '-', '', 0, 0),
(39, 1, 'PT. Tunas Jaya Sanur', 'Jl. By Pass, Ngurah Rai, Sanur, Bali', 0, '-', '', 0, 0),
(40, 1, 'PT. WBS (Windu Blambangan Sejati)', 'JL. Gatot Subroto, No. 18, Bulusan Banyuwangi', 0, '-', '', 0, 0),
(41, 1, 'Putri Kuning Group', 'Jl. Juanda 126, Jajag, Banyuwangi', 0, '-', '', 0, 0),
(42, 1, 'Raya Komputer', 'Jl. Bengawan, lingk. Gentengan RT/RW 02/02', 0, '-', '', 0, 0),
(43, 1, 'RSUD Blambangan', 'Jl. Letkol Istiqlal No. 49 Banyuwangi', 0, '-', '', 0, 0),
(44, 1, 'Sahabat Komputer', 'Jl. KH. Agus Salim  No. 116 Banyuwangi', 0, '-', '', 0, 0),
(45, 1, 'STIKOM Banyuwangi', 'Jl. Jendral Ahmad Yani No. 80, Banyuwangi', 0, '-', '', 0, 0),
(46, 1, 'TCTC Komputer', 'Jl. Ahmad Yani 112, Banyuwangi', 0, '-', '', 0, 0),
(47, 1, 'Tri Kurniawan', 'Jl. Raya Serpong KM 8 Blok A2 No. 10, Tanggerang', 0, '-', '', 0, 0),
(48, 1, 'USB Komputer', 'Jl. Letjen. S. Parman No. 108 A, Banyuwangi', 0, '-', '', 0, 0),
(49, 1, 'Viola Komputer', 'Jl. MH. Thamrin No. 149, Banyuwangi', 0, '-', '', 0, 0),
(50, 1, 'Vista Komputer', 'Jl. Sri Gunting, No. 3 Genteng', 0, '-', '', 0, 0),
(51, 1, 'Cakrawala Network ', 'Jl. Padang Tawang No. 14, Langgu, Badung, Bali', 0, '-', '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL DEFAULT '1',
  `nip` varchar(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `id_jurusan`, `nip`, `nama_guru`, `jenis_kelamin`, `alamat`) VALUES
(501, 1, '19870809 201101 1 009', 'Misbahus Surur, S.ST', 'Laki-laki', 'dsn. jajang surat rt.02 rw.03 ds. karangbendo kec. rogojampi - Banyuwangi'),
(512, 1, '19870809 201101 1 009', 'Apri Diantono, A.Md', 'Laki-laki', 'Jl. dr. sutomo 45\r\n'),
(521, 1, '', 'Dadang Ferdian, ST', 'Laki-laki', ''),
(576, 1, '19741024 200212 1 007', 'Hari Wahyudi, S.Pd.,MT.', 'Laki-laki', 'Kertosari RT 3 / IV Krajan  Kec. Banyuwangi'),
(595, 1, '', 'Iwan Sapta Yulianto, S.Kom', 'Laki-laki', ''),
(614, 1, '', 'Mursalin, SST.', 'Laki-laki', 'Puri Brawijaya Permai Blok M No 15 Kebalenan Banyuwangi'),
(713, 1, '19840509 201101 2 016', 'Herdian Wijayanti, S.Kom', 'Perempuan', 'Gapangan'),
(724, 1, '19960317 201903 1 002', 'Singgih Adie Kurniawan, S. Pd', 'Laki-laki', 'Rogojampi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `id_jurusan` int(11) NOT NULL DEFAULT '1',
  `kelas` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `hp_siswa` varchar(255) NOT NULL,
  `ayah` varchar(255) NOT NULL,
  `ibu` varchar(255) NOT NULL,
  `alamat_orang_tua` varchar(255) NOT NULL,
  `no_hp_orang_tua` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nis`, `nisn`, `nama_siswa`, `id_jurusan`, `kelas`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat_rumah`, `hp_siswa`, `ayah`, `ibu`, `alamat_orang_tua`, `no_hp_orang_tua`) VALUES
(18867, '18867/514.066', '0', 'ACHMAD REZA ZULQONI SUHERMAN', 1, 'XITKJ1', 'Laki-laki', '', '0000-00-00', '', 'Dusun Krajan Desa Rejosari Kec. Glagah Kab. Banyuwangi', '82140204362', '', '', 'Dusun Krajan Desa Rejosari Kec. Glagah Kab. Banyuwangi', '85259988126'),
(18868, '18868/515.066', '33033633', 'ADITYA FARID ANDIKA SARDANA', 1, 'XITKJ1', 'Laki-laki', 'TRENGGALEK', '0000-00-00', 'Islam', 'Perum Griya Indah Pakis Blok B.17', '895412000000', 'SARJU', 'FRANSIANA FLORIDA', 'Perum Griya Indah Pakis Blok B.17', '85236029828'),
(18869, '18869/516.066', '33033875', 'ADITYA RAMANDA FAUZI', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. K.H. Abdul Wahid,Link.krajan,RT/RW.03/02,Kec.Banyuwngi Kab.Banyuwangi', '81358277405', 'IMAM FAUZI', 'FITRI HANDAYANI', 'Kebagusan IV,RT/RW.001/004,Kebagusan,Kec.Pasar minggu,Jakarta selatan', '85211284210'),
(18870, '18870/517.066', '31970767', 'AGAM EKA RIZKI PURNAMA', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn. Blangkon, RT / RW.04 / 01, Ds. Kebaman, Kec. Srono Kab. Banyuwangi', '6288888888888', 'PANJI RETNO ADI SAPUTRO', 'HARTINI', 'Dsn. Blangkon, RT / RW.04 / 01, Ds. Kebaman, Kec. Srono Kab. Banyuwangi', '81246907285'),
(18871, '18871/518.066', '26982121', 'AGUSTIN', 1, 'XITKJ1', 'Perempuan', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl.Garuda No.04, Link.Krajan,RT/RW.003/002,Ds.Pakis,Kec.Banyuwangi Kab.Banyuwangi', '82247504098', 'BIARTO WIJAYA', 'QOMARIYAH', '0', '81234675897'),
(18872, '18872/519.066', '42632843', 'AHMAD ALIF', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dusun Rupi Rt 02 Rw 01, Grogol, Giri', '6288888888888', 'SOLIHIN', 'ALIYAH', 'Dusun Rupi Rt 02 Rw 01, Grogol, Giri', '85335627637'),
(18873, '18873/520.066', '37724439', 'AHMAD MIFTAHUL A`LAM', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', '', 'Dsn.Krajan,RT/RW.01/03,Ds.Pesucen, Kec, Kalipuro Kab.Banyuwangi', '85806787198', 'AHMAD HUSAINI', 'INSIYANA', 'Dsn.Krajan,Ds.Kedaleman,Kec.Rogojampi Kab.Banyuwangi', '82244987693'),
(18874, '18874/521.066', '17051413', 'AHMAD RIZALUL ARIFIN', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Cendrawasih, RW/RT.02/01, Ds.Pakis, Kec. Banyuwangi Kab. Banyuwangi', '85810123557', 'SANURI', 'NUR INDAYATI', 'Jl. Cendrawasih, RW/RT.02/01, Ds.Pakis, Kec. Banyuwangi Kab. Banyuwangi', '82332242479'),
(18875, '18875/522.066', '22363706', 'AHMAD VIKA ROZA', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Mahoni - Pesucen', '6288888888888', 'BAHROJI', 'MUDIAH', 'Jl. Mahoni - Pesucen', '82143433625'),
(18876, '18876/523.066', '20205478', 'AINUL ROFIKI', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dusun Wadungdolah Rt 02 Rw 01 Desa Kaligondo Kec. Glemore Kab. Banyuwangi', '895413000000', 'AHMAD S', 'ENY KUSRINI', 'Dusun Wadungdolah Rt 02 Rw 01 Desa Kaligondo Kec. Glemore Kab. Banyuwangi', '82240488690'),
(18877, '18877/524.066', '26477669', 'ALDYTO YOHAN YUDHATAMA', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Adi Sucipto Gg. Yapenatim', '6288888888888', 'KUAT SANTOSO', 'YUNI RATNAWATI', 'Jl. Adi Sucipto Gg. Yapenatim', '85233216737'),
(18878, '18878/525.066', '27617540', 'ALFIANSYAH ABDURRAHMAN PUTRA', 1, 'XITKJ1', 'Laki-laki', 'Pamekasan', '0000-00-00', 'Islam', 'Dsn. Kalimati, RT/RW.02/03, Ds. Kedung Rejo, Kec. Muncar, Kab. Banyuwangi', '82334556989', 'ABDURROHMAN ARIF', 'IKA RATNAWATI', 'Dsn. Kalimati, RT/RW.03/01Ds. Kedung Rejo, Kec. Muncar, Kab. Banyuwangi', '81249707774'),
(18879, '18879/526.066', '38227164', 'ALFINO RACHMAD OKTAVIAN', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn.Bangorejo,RT/RW.03/04,Ds.Bangorejo,Kec.Bangorejo Kab.Banyuwangi', '81233558601', 'LULUT SUHADAK', 'WIWIN WULANDARI', 'Bulurejo', '85104018511'),
(18880, '18880/527.066', '35612437', 'ALVIAN NUR FIRDAUS', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn. Krajan, RT/ RW.01 / 03, Ds. aliyan, Kec. Rogojampi Kab. Banyuwangi', '85334834390', 'NAWARI', 'SITI KOMARIYAH', 'Dsn. Krajan, RT/ RW.01 / 03, Ds. aliyan, Kec. Rogojampi Kab. Banyuwangi', '85231747377'),
(18881, '18881/528.066', '31387876', 'ANANDA GALIH PRATAMA', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn. Jatisari, RT/RW.02/03, Ds. Bomo, Kec. Rogojampi Kab Banyuwangi', '895604000000', 'HERI SUGIARTO', 'DWI ERNA LUTFIATIN', 'Dsn. Jatisari, RT/RW.02/03, Ds. Bomo, Kec. Rogojampi Kab Banyuwangi', '81350240869'),
(18882, '18882/529.066', '26662137', 'ANDRE DIMAS PRASTYAWAN', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Kendang Kempul', '81358586695', 'SLAMET SUPRIYADI', 'LINDAYANI', 'Jl. Kendang Kempul', '82214479000'),
(18883, '18883/530.066', '26478289', 'ANGLING MAHESA', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', '', 'Jl. Gandrung No. 22', '82359412026', 'ANDIKA TRISYANDI', 'SUSIANI', 'Jl. Gandrung No. 22', '89615128085'),
(18884, '18884/531.066', '28797488', 'AS\'ADZUL FIKAR', 1, 'XITKJ1', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Dsn.Krajan,RT.01/RW.06,Ds.Watukebo,Kec.Blimbingsari,Kab.Banyuwangi', '85882397708', 'ABDULLOH', 'SABILA RUSTI', 'Dsn.Krajan,RT.01/RW.06,Ds.Watukebo,Kec.Blimbingsari,Kab.Banyuwangi', '82335337748'),
(18885, '18885/532.066', '32252615', 'BADRUS SALIKIN', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn. Komis Kulon, RT/RW.01/10, Ds. Wonosobo, Kec. Srono, Kab. Banyuwangi ', '82337111780', 'JAMILIK', 'YUNITA', 'Dsn. Komis Kulon, RT/RW.01/10, Ds. Wonosobo, Kec. Srono, Kab. Banyuwangi', '81249054187'),
(18886, '18886/533.066', '28797040', 'BAGUS HENDRY SETYAWAN', 1, 'XITKJ1', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Dsn.Krajan, RT/RW.01/02, Ds. Dadapan, Kec. Kabat Kab. Banyuwangi', '6288888888888', 'HERMAN SURYANTARA', 'MISNI', 'Dsn.Krajan, RT/RW.01/02, Ds. Dadapan, Kec. Kabat Kab. Banyuwangi', '82334575750'),
(18887, '18887/534.066', '21540555', 'BAGUS PUTRA ROMADHON', 1, 'XITKJ1', 'Laki-laki', 'MALANG', '0000-00-00', 'Islam', 'Jl. MH Thamrin / Perum Griya Permata Husada Blok A.5 RT.04 RW.05 Kel. Pengantigan Kec. Banyuwangi Kab. Banyuwangi  ', '82335819884', 'SUGIANTO', 'JUMA\'IYAH', 'Jl. MH Thamrin / Perum Griya Permata Husada Blok A.5 RT.04 RW.05 Kel. Pengantigan Kec. Banyuwangi Kab. Banyuwangi  ', '8113058699'),
(18888, '18888/535.066', '27416417', 'BILLAH FIRGIAWAN PUTRA', 1, 'XITKJ1', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Link.Klatakan,RT/RW.05/01,Kel.Klatak,Kec.Kalipuro', '83895215184', 'KARTIPIN', 'WININGSIH', 'Link.Klatakan,RT/RW.05/01,Kel.Klatak,Kec.Kalipuro', '85232936852'),
(18889, '18889/536.066', '36837988', 'BIMA YUSUF PRATAMA', 1, 'XITKJ1', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Jl. Belitung Gg. II No. 39,RT/RW.03/02,Kel.Lateng,Kec.Banyuwangi,Kab.Banyuwangi', '85288796777', 'DJOKO WARSONO', 'SANIDA HANDAYANI', 'Jl. Belitung Gg. II No. 39,RT/RW.03/02,Kel.Lateng,Kec.Banyuwangi,Kab.Banyuwangi', '85258771381'),
(18890, '18890/537.066', '36318272', 'DEVA KRISNA PUTRA', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', '', 'Jalan Gajah Mada', '83832382333', '', '', 'Jalan Gajah Mada', '81917025494'),
(18891, '18891/538.066', '0', 'DIFASYA TEGAR RAMADHAN', 1, 'XITKJ1', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Jl. Banterang baru no. 26/lingkungan kampung melayu,RT/RW.04/0, Ds. Kampung melayu, kec. Banyuwangi, kab. Banyuwangi', '6288888888888', 'SETYA BUDI', 'NURULLIYA FARIDA', 'Jl. Banterang baru no. 26/lingkungan kampung melayu,RT/RW.04/0, Ds. Kampung melayu, kec. Banyuwangi, kab. Banyuwangi', '82234959481'),
(18892, '18892/539.066', '27001622', 'DIMAS FIRMANSYAH', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Desa Lemahbang Dewo Rt/Rw 02/04 Kec. Rogojampi Kab. Banyuwangi', '6288888888888', 'SOLIHIN', 'SUHARTINI', 'Desa Lemahbang Dewo Rt/Rw 02/04 Kec. Rogojampi Kab. Banyuwangi', '82334641928'),
(18893, '18893/540.066', '25562638', 'FADEL MUHAMMAD SYUKRON EFFENDY', 1, 'XITKJ1', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Dusun Sepanjang Kulon Rt 02 Rw 03 Desa Sepanjang Kec. Glemore Kab. Banyuwangi', '821322000000', 'BISRI MUSTAFA EFFENDI', 'SITI AMINAH', 'Dusun Sepanjang Kulon Rt 02 Rw 03 Desa Sepanjang Kec. Glemore Kab. Banyuwangi', '85348984114'),
(18894, '18894/541.066', '28439552', 'FAHMI BAHRUR RIZKI', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Tegal Wero  Rt/Rw 01/01', '82337074499', 'SLAMET MUHTADI', 'HAYATI ', 'Tegal Wero  Rt/Rw 01/01', '81337368518'),
(18895, '18895/542.066', '25750791', 'FAIZUL UMAM', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Kenjo No 45 Dsn.Krajan RT 001/RW 001,Ds.kenjo,Kec.Glagah,Kab.Banyuwangi', '87858756705', 'MOH.SUPAAT SLAMET', 'SITI HOTIJAH', 'Jl. Kenjo No 45 Dsn.Krajan RT 001/RW 001,Ds.kenjo,Kec.Glagah,Kab.Banyuwangi', '82335397175'),
(18896, '18896/543.066', '28178130', 'FAJRINSYAH AKBAR RAMADHAN', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Angklung Caruk 12', '82324766676', 'HERMANSYAH', 'RUSDIANA', 'Jl. Angklung Caruk 12', '82331623070'),
(18897, '18897/544.066', '33644622', 'FARHAN RAMADITA', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl.Andalas,Singotrunan,RT/RW.04/03,Kec.Banyuwangi Kab.Banyuwangi', '82247002745', 'ABDURAHMAN', 'MAHMUDAH', 'Jl.Andalas,Singotrunan,RT/RW.04/03,Kec.Banyuwangi Kab.Banyuwangi', '85940770552'),
(18898, '18898/545.066', '25658321', 'FEBRI PUTRA PAMUNGKAS', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Yos Sudarso, RT/RW.05/01, Klatak, Kec. Kalipuro Kab. Banyuwangi', '82132483043', 'BOARI', 'SOELIYATI', 'Jl.Yos sudarso, RT/RW.05/01, Klatak, Kec. Kalipuro Kab. Banyuwangi', '85331860832'),
(18899, '18899/546.066', '25268943', 'GIBRAN FITRATULLAH', 1, 'XITKJ1', 'Laki-laki', 'SURABAYA', '0000-00-00', 'Islam', 'Perum Griya Giri Mulya Blok W. 17 RT. 04 RW. 06 Klatak Kalipuro- Banyuwangi', '82236787707', 'SISWA PURWANTO', 'DWI JUNIATI SURJANI', 'Perum Griya Giri Mulya Blok W. 17 RT. 04 RW. 06 Klatak Kalipuro- Banyuwangi', '81233838514'),
(18900, '18900/547.066', '28439346', 'HELEN DWI AYU WULANDARI', 1, 'XITKJ1', 'Perempuan', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn: Timurjo, RT/RW.02/01, Ds. Aliyan, Kec: Rogojampi Kab. Banywangi', '81335194509', 'SUPAAT', 'SUGIARTI', 'Dsn: Timurjo, RT/RW.02/01, Ds. Aliyan, Kec: Rogojampi Kab. Banywangi', '82301636159'),
(18901, '18901/548.066', '0', 'HELMI SUWASTIKA', 1, 'XITKJ1', 'Laki-laki', '', '0000-00-00', '', '', '82236402347', '', '', '', '6282230292702'),
(18902, '18902/549.066', '31970329', 'ILHAM YUDHISTIRA', 1, 'XITKJ1', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Srono', '87754724853', 'SLAMET HARIYONO', 'AINIYATUL MASUDAH', 'Jl. Srono', '85130310281'),
(18903, '18903/550.066', '28178129', 'IQBAL FIKHRIANSYAH R', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Perum Griya Indah Blok A-17', '82140204362', 'SUKIRNO', 'YENY DIAN RAHMAWATI', 'Perum Griya Indah Blok A-17', '81326523627'),
(18904, '18904/551.066', '34798267', 'JAVIER STEVANO REIVALDY', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Link.Sukorojo,RT/RW.02/03,Ds.Banjarsari,Kec.Glagah Kab. Banyuwangi', '895412000000', 'FERY PRASETYAWAN', 'DWI RINAWATI', 'Link.Sukorojo,RT/RW.02/03,Ds.Banjarsari,Kec.Glagah Kab. Banyuwangi', '82233143639'),
(18905, '18905/552.066', '25918336', 'JONI RIZKI RUSADI', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn.Krajan, RT/RW.02/02, Kec.Glagah, Kab.Banyuwangi', '81358277405', 'JAM\'UL ANAM', 'RUSDIANA', 'Dsn.Krajan, RT/RW.02/02, Kec.Glagah, Kab.Banyuwangi', '83835532956'),
(18906, '18906/553.066', '24276626', 'KURNIA DWI NURAINI', 1, 'XITKJ2', 'Perempuan', 'JAKARTA', '0000-00-00', 'Islam', 'dsn. krajan ds tampo rt/rw oo2/003 kec cluring kab banyuwangi.', '6288888888888', 'UNTUNG MUNTARIS', 'ISMIATI RODIANA', '.dsn krajan ds tampo rt/rw 002/003 kec cluring kab banyuwangi', '81231735243'),
(18907, '18907/554.066', '26477929', 'M. FAJARSYAH EKA PERMANA', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Karimunjawa Gg Manggis No 2', '82247504098', 'SETYA EKA PERMANA', 'OCTAVIANTININGSIH', 'Jl. Karimunjawa Gg Manggis No 2', '85235492696'),
(18908, '18908/555.066', '28974013', 'M. ROFI ALKHOIRUMAN', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn.krajan,RTRW.04/04,Ds.Kradenan,Kec.Purwoharjo Kab.Banyuwangi', '6288888888888', 'SHODIK ALFAJAR ', 'ISTIQOMAH', 'Ds.Kradenan,RT/RW 04/04,Kec.Purwoharjo Kab.Banyuwangi', '82335526771'),
(18909, '18909/556.066', '28855037', 'M. TOYYIBAL ARDANI', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dusun Krajan, Rt 004/Rw 002 Desa Banjar', '85806787198', 'AHMAD SYAMSUL AFANDI', 'SITI ROHMAH', 'Dusun Krajan, Rt 004/Rw 002 Desa Banjar', '85259351455'),
(18910, '18910/557.066', '27405234', 'MOCH. AOFA HERMANTO', 1, 'XITKJ2', 'Laki-laki', 'JEMBER', '0000-00-00', 'Islam', 'Jl. Ikan Belanak D-11 /82', '85810123557', 'BAMBANG HERMANTO', 'LILIS SURYANI', 'Jl. Ikan Belanak D-11 /82', '81336178281'),
(18911, '18911/558.066', '26478622', 'MOCH. FAUZI ROMADANI', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jln. Rw Monginsidi No. 21 RT/RW.01/03 Kec. Banyuwangi Kab. Banyuwangi', '6288888888888', 'ROHMATULLAH', 'YULIANA ', 'Jln. Rw Monginsidi No. 21 RT/RW.01/03 Kec. Banyuwangi Kab. Banyuwangi', '81386261325'),
(18912, '18912/559.066', '26272822', 'MOHAMMAD HELMI YAHYA', 1, 'XITKJ2', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Jalan Hayam Wuruk, Dsn.Krajan1,Ds. Penataban, Kec. Giri Kab. Banyuwangi', '895413000000', 'GAZALI ISMAIL', 'APRIYANI RINTOWATI', 'Jl.Hayam wuruk,Dsn.Krajan1,RT/RW. 02/03,Ds.Penataban,Kec.Giri Kab.Banyuwangi', '81236548877'),
(18913, '18913/560.066', '26477987', 'MOHAMMAD RASHEL ARRIZKI', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Mt Hariyono No.11 RT. 001 RW. 002 Lingk. Krajan Utara Kel.Tukangkayu Kec. / Kab. Banyuwangi', '6288888888888', 'HERI PRISTIAWAN', 'ISTIQOMAH', '-', '87793398068'),
(18914, '18914/561.066', '23007891', 'MUH. RAFQI PUTRA RUSDI', 1, 'XITKJ2', 'Laki-laki', 'BALIKPAPAN', '0000-00-00', 'Islam', 'Ketapang - Kalipuro', '82334556989', 'MUH.RUSDI', 'ST RISNASARI N', 'Ketapang - Kalipuro', '81236842112'),
(18915, '18915/562.066', '33035589', 'MUHAMMAD BINTANG SAFTAR ARIEF', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn. Krajan Timur, RT/RW.02/01, Ds. Labanasem, Kec. Kabat, Kab. Banyuwangi', '81233558601', 'ABD MUNIR', 'DAUHATUN MASNUNAH,SE', 'Dsn. Krajan Timur, RT/RW.02/01, Ds. Labanasem, Kec. Kabat, Kab. Banyuwangi', '85204885891'),
(18916, '18916/563.066', '27748641', 'MUHAMMAD RUDI HARTONO', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Kh. Ahmad Ashari', '85334834390', 'SUCIPTO', 'MASROYA', 'Jl. Kh. Ahmad Ashari', '82331582427'),
(18917, '18917/564.066', '38594664', 'MUHAMMAD ZIDANE SYAFAAT', 1, 'XITKJ2', 'Laki-laki', 'BEKASI', '0000-00-00', 'Islam', 'Link. Krajan, RT/RW.02/03, Kel. Penataban, Kec. Giri, Kab. Banyuwangi', '895604000000', 'MUSAHNAN', 'LAILI IRIANI', 'Link. Krajan, RT/RW.02/03, Kel. Penataban, Kec. Giri, Kab. Banyuwangi', '81383013642'),
(18918, '18918/565.066', '25750823', 'MUTIA BUDI UTAMI', 1, 'XITKJ2', 'Perempuan', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Perkebunan Kelibendo Dsn.Krajan, RT/RW.001/002, Ds.Kampunganyar, Kec.Glagah Kab.Banyuwangi', '81358586695', 'BUDI HARSONO', 'SAMROTUN', 'Jl. Perkebunan Kelibendo Dsn.Krajan, RT/RW.001/002, Ds.Kampunganyar, Kec.Glagah Kab.Banyuwangi', '85331071906'),
(18919, '18919/566.066', '0', 'NANDA FIRMANSYAH', 1, 'XITKJ2', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Dusun Watu Ulo Rt/Rw 06/02 Desa Rejosari Kec. Glagah Kab. Banyuwangi', '82359412026', 'SUCIPTO', 'SAMIYATI', 'Dusun Watu Ulo Rt/Rw 06/02 Desa Rejosari Kec. Glagah Kab. Banyuwangi', '81331074975'),
(18920, '18920/567.066', '26269492', 'NOUVAL TRIA CHRISANDY', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Brawijaya, Perumahan Brawijaya Regency, Blok F No 9, Kel. Kebalenan, Kec. Banyuwangi, Kab. Banyuwangi', '85882397708', 'SURATNO', 'YUNIAR IDAWATI', 'Dsn. Bulu Sari,RT/RW.04/01,Ds. Grajagan, Kec. Purwoharjo, Kab. Banyuwangi', '81357186581'),
(18921, '18921/568.066', '28797046', 'PUTRA HARDIONO OKTAVIAN', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Pondok Nongko, Dsn. Dadapan Utara, RT./RW. 02/02, Ds.Dadapan, Kec. Kabat, Kab. Banyuwangi', '82337111780', 'NUR HARIDI', 'SRI WAHYUNI HARTINI', 'Jl. Pondok Nongko, Dsn. Dadapan Utara, RT./RW. 02/02, Ds.Dadapan, Kec. Kabat, Kab. Banyuwangi', '85245861801'),
(18922, '18922/569.066', '25538517', 'RADEN BAGUS HARIO TSABITUL AZMI WIJAYA', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Ciliwung No.40 RT/RW.05/01, Ds. Panderejo, Kecamatan Banyuwangi', '6288888888888', '-', 'NUR HIDAYANTI', '-', '82331661995'),
(18923, '18923/570.066', '28657356', 'RAFI FIKRIAN NIRWANA', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Tidar', '82335819884', 'AJI NIRWONO', 'NUR HONALIS', 'Jl. Tidar', '85331542366'),
(18924, '18924/571.066', '37239090', 'RAYHAN LAROYBAFY HIDAYAT', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Lingk.GAPLEK , Jln.Rengganis', '83895215184', 'DODIK ROBBI SUBAGIO', 'AL FITRIYAH', 'Lingk.GAPLEK , Jln.Rengganis', '8123463743'),
(18925, '18925/572.066', '23068174', 'RAYHAN NASHRULLAH', 1, 'XITKJ2', 'Laki-laki', 'JEMBER', '0000-00-00', 'Islam', 'Jl. A. Yani No. 34, Dsn.Krajan, RT/RW.03/04, Ds. Kedungrejo, Kec. Muncar, Kab. Banyuwangi', '85288796777', 'MIFTAHUL FATAH', 'SRI REJEKI', 'Jl. A. Yani No. 34, Dsn. Krajan, RT/RW.03/04, Ds. Kedungrejo, Kec. Muncar, Kab. Banyuwangi', '85257630777'),
(18926, '18926/573.066', '28853679', 'RENDRA HADI WIRA KUSUMA', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn. Krajan, RT/RW.03/07, Ds. Gladag, Kec. Rogojampi Kab. Banyuwangi', '83832382333', 'TOMMY HADIYANTO', 'HARWIYATI', 'Jember', '6282131536488'),
(18927, '18927/574.066', '26478417', 'RIO ANUGRAH PUTRA', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl Riau Gg Permata No 2', '6288888888888', 'SAKIRMAN', 'SITI NAIMAH', 'Jl Riau Gg Permata No 2', '82143390808'),
(18928, '18928/575.066', '32233152', 'RIZAL ANDRIANSYAH', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Watugong Dsn plembangrejo, RT/RW.03/15 Ds.Wonosobo, Kec. Srono Kab.Banyuwangi', '6288888888888', 'ALI IMRON', 'ERNAWATI', 'Jl. Watugong', '85237978766'),
(18929, '18929/576.066', '34212200', 'SAFATULLOH ARSY RAHMAN', 1, 'XITKJ2', 'Laki-laki', 'Banyuwangi', '0000-00-00', 'Islam', 'Link.Krajan Kalipuro,RT/RW.02/01,Ds.Kalipuro,Kec.Kalipuro Kab. Banyuwangi', '821322000000', 'MOKH. BUYUNG WAKSITO', 'DIAN SULISTYORINI', 'Link.Kalipuro,RT/RW.02/01,Ds.Kalipuro,Kec.Kalipuro Kab. Banyuwangi', '81235320824'),
(18930, '18930/577.066', '26478232', 'SANDI SULAIMAN', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Kyai Saleh 68 RT 01 RW 02 Ds Kepatihan Kec banyuwangi Kab banyuwangi', '82337074499', 'HUSAINI', 'NISWATI', 'Jl. Kyai Saleh 68 RT 01 RW 02 Ds Kepatihan Kec banyuwangi Kab banyuwangi', '85334588427'),
(18931, '18931/578.066', '39967960', 'SITI NUR JANAH', 1, 'XITKJ2', 'Perempuan', 'BANYUWANGI ', '0000-00-00', 'Islam', 'Link. Krajan Rt.03 Rw.03 Kel. Bakungan Kec. Glagah Kab. Banyuwangi', '87858756705', 'YUSRIP', 'AIRTIK', 'Link. Krajan Rt.03 Rw.03 Kel. Bakungan Kec. Glagah Kab. Banyuwangi', '82139201505'),
(18932, '18932/579.066', '25657333', 'SOFYAN', 1, 'XITKJ2', 'Laki-laki', 'SUMENEP', '0000-00-00', 'Islam', 'Dusun Pelat', '82324766676', 'JAMALUDDIN', 'HUZAIMA', 'Dusun Pelat', '81357636729'),
(18933, '18933/580.066', '26477785', 'TEGAR MAULANA IMAMI', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jln. Musi No.20 E', '82247002745', 'DIDIK SUGIYANTO', 'IQNAIR ROHMANI', 'Jln. Musi No.20 E', '85258584591'),
(18934, '18934/581.066', '22782351', 'TEGAR RALDIASTRA AXL RAHARJO', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Siliragung', '82132483043', 'EDY AGUS TRI RAHARJO', 'RATNA SARI SISWINANTI', 'Siliragung', '6282332666626'),
(18935, '18935/582.066', '35746821', 'TIWI PRAHESTI', 1, 'XITKJ2', 'Perempuan', 'BANYUWANGI ', '0000-00-00', 'Islam', 'Link. Gunungsari Kel.  Banjarsari Rt. 01 Rw. 03 Kec. Glagah Kab. Banyuwangi', '82236787707', 'SUWONDO', 'KAMISAH', 'Link. Gunungsari Kel.  Banjarsari Rt. 01 Rw. 03 Kec. Glagah Kab. Banyuwangi', '85336475807'),
(18936, '18936/583.066', '31970117', 'TRI BAGUS SETIAWAN', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Dsn. Krajan wetan, RT/RW.001/001, Ds. Wonosobo, Kec. Srono Kab. Banyuwangi', '81335194509', 'SUJONO', 'YANTI SETYOWATI', 'Dsn. Krajan wetan, RT/RW.001/001, Ds. Wonosobo, Kec. Srono Kab. Banyuwangi', '82264488347'),
(18937, '18937/584.066', '26477668', 'WAHID CYRION FITRIAN', 1, 'XITKJ2', 'Laki-laki', 'BANYUWANGI', '0000-00-00', 'Islam', 'Jl. Brawijaya Perum Kebalenan Indah Blok. D-8', '82236402347', 'AHMAD KHOLIL JUNIAWAN', 'YULI TRIANA', 'Jl. Brawijaya Perum Kebalenan Indah Blok. D-8', '85259558955');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_staf_tu`
--

CREATE TABLE `data_staf_tu` (
  `id_staf_tu` int(11) NOT NULL,
  `nama_staf_tu` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_staf_tu`
--

INSERT INTO `data_staf_tu` (`id_staf_tu`, `nama_staf_tu`, `jenis_kelamin`, `alamat`) VALUES
(234, 'Anggiya', 'P', 'banyuwangi'),
(235, 'anandita', 'P', 'banyuwangi'),
(236, 'WIJI IKA APRILYANI', 'P', ''),
(237, 'VICO ETVEN PAMUNGKAS', 'L', ''),
(238, 'Rizki Idul Fitriansyah', 'L', 'Jelun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal_pkl`
--

CREATE TABLE `jurnal_pkl` (
  `id_jurnal_pkl` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kompetensi_dasar` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `topik_pekerjaan` varchar(255) NOT NULL,
  `dokumentasi` varchar(255) DEFAULT 'default.jpg',
  `status` enum('Belum Tervalidasi','Tervalidasi','Ditolak') NOT NULL DEFAULT 'Belum Tervalidasi',
  `catatan` varchar(255) DEFAULT 'Belum ada catatan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurnal_pkl`
--

INSERT INTO `jurnal_pkl` (`id_jurnal_pkl`, `id_siswa`, `id_kompetensi_dasar`, `tanggal`, `topik_pekerjaan`, `dokumentasi`, `status`, `catatan`) VALUES
(2, 18867, 49, '2020-08-26', 'Menerapkan K3LH', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(3, 18867, 135, '2020-08-26', 'Buat desain dari bitmap', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(4, 18867, 69, '2020-08-26', 'Mencoba menghidupkan komputer', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(5, 18867, 70, '2020-08-26', 'Melakukan setting BIOS setelah dirakit', '2Qhhdda6Qnbf8RCfUN1XbeG3HcHexpWLjyYM4sj6ZWtRzbXdo3FfQUBdCXc2wXV1znXcJk8r8LaR63u9nvqC.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(6, 18867, 73, '2020-08-26', 'Instalasi aplikasi komputer rakitan', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(7, 18867, 274, '2020-08-26', 'membuat poster iklan dengan menyusun kata-kata promosi', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(8, 18867, 127, '2020-08-26', 'Menata layout pada masing-masing desain poster', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(9, 18867, 140, '2020-08-26', 'Mempelajari jaringan fiber optic', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(10, 18867, 71, '2020-08-26', 'Instalasi sistem operasi jaringan berbasis Linux', 'Instalasi_Sistem_Operasi_Jaringan.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(11, 18867, 284, '2020-08-26', 'Menyusun bahan pekerjaan untuk merakit komputer bagi klien', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(12, 18867, 125, '2020-08-26', 'Penempatan warna-warna pada komposisi layout poster promosi', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan'),
(13, 18867, 61, '2020-08-26', 'Mengisi perangkat lunak pada laptop klien', 'default.jpg', 'Belum Tervalidasi', 'Belum ada catatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Komputer & Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi_dasar`
--

CREATE TABLE `kompetensi_dasar` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `kompetensi_dasar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kompetensi_dasar`
--

INSERT INTO `kompetensi_dasar` (`id`, `id_mapel`, `kode`, `kompetensi_dasar`) VALUES
(1, 1, '3.1', 'Menerapkan logika dan algoritma komputer'),
(2, 1, '3.2', 'Menerapkan metode peta- minda'),
(3, 1, '3.3', 'Mengevaluasi paragraf deskriptif, argumentatif, naratif, dan persuasif'),
(4, 1, '3.4', 'Menerapkan logika dan operasi perhitungan data'),
(5, 1, '3.5', 'Menganalisis fitur yang tepat untuk pembuatan slide'),
(6, 1, '3.6', 'Menerapkan teknik presentasi yang efektif'),
(7, 1, '3.7', 'Menganalisis pembuatan e- book'),
(8, 1, '3.8', 'Memahami konsep Kewargaan Digital'),
(9, 1, '3.9', 'Menerapkan teknik penelusuran Search Engine'),
(10, 1, '3.10', 'Menganalisis komunikasi'),
(11, 1, '3.11', 'Menganalisis fitur perangkat lunak pembelajaran kolaboratif daring'),
(12, 1, '3.12', 'Merancang dokumen tahap pra-produksi'),
(13, 1, '3.13', 'Menganalisis produksi video, animasi dan/atau musik digital'),
(14, 1, '3.14', 'Mengevaluasi pasca-produksi video, animasi dan/atau musik digital'),
(15, 1, '4.1', 'Menggunakan fungsi-fungsi perintah (Command)'),
(16, 1, '4.2', 'Membuat peta-minda'),
(17, 1, '4.3', 'Menyusun kembali format dokumen pengolah kata'),
(18, 1, '4.4', 'Mengoperasikan perangkat lunak pengolah angka'),
(19, 1, '4.5', 'Membuat slide untuk presentasi'),
(20, 1, '4.6', 'Melakukan presentasi yang efektif'),
(21, 1, '4.7', 'Membuat e-book dengan perangkat lunak e-book editor'),
(22, 1, '4.8', 'Merumuskan etika Kewargaan Digital'),
(23, 1, '4.9', 'Melakukan penelusuran informasi'),
(24, 1, '4.10', 'Melakukan komunikasi sinkron dan asinkron dalam jaringan'),
(25, 1, '4.11', 'Menggunakan fitur untuk pembelajaran kolaboratif daring (kelas maya)'),
(26, 1, '4.12', 'Membuat dokumen tahap pra- produksi'),
(27, 1, '4.13', 'Memroduksi video dan/atau animasi dan/atau musik digital'),
(28, 1, '4.14', 'Membuat laporan hasil pasca- produksi'),
(29, 2, '3.1', 'Memahami sistem bilangan (Desimal, Biner, Heksadesimal)'),
(30, 2, '3.2', 'Menganalisis relasi logika dasar, kombinasi dan sekuensial (NOT, AND, OR); (NOR,NAND,EXOR,EXNOR); (Flip Flop, counter)'),
(31, 2, '3.3', 'Menerapkan operasi logika Aritmatik (Half-Full Adder, Ripple Carry Adder)'),
(32, 2, '3.4', 'Mengklasifikasikan rangkaian Multiplexer, Decoder, Register'),
(33, 2, '3.5', 'Menerapkan elektronika dasar (kelistrikan, komponen elektronika dan skema rangkaian elektronika)'),
(34, 2, '3.6', 'Menerapkan dasar dasar mikrokontroler'),
(35, 2, '3.7', 'Menganalisis blok diagram dari sistem mikro komputer (arsitektur komputer)'),
(36, 2, '3.8', 'Mengevaluasi Perangkat Eksternal / Peripheral'),
(37, 2, '3.9', 'Menganalisis memori berdasarkan karakteristik sistem memori (lokasi,kapasitas, kecepatan, cara akses, tipe fisik)'),
(38, 2, '3.10', 'Menganalisa Struktur CPU dan fungsi CPU'),
(39, 2, '4.1', 'Mengkonversikan sistem bilangan (Desimal, Biner, Heksadesimal) dalam memecahkan masalah konversi'),
(40, 2, '4.2', 'Merangkai fungsi gerbang logika dasar, kombinasi dan sekuensial (NOT, AND, OR);(NOR,NAND,EXOR,EXNOR); melalui ujicoba (Flip Flop, counter)'),
(41, 2, '4.3', 'Mempraktikkan operasi Logik Unit (Half-Full Adder, Ripple Carry Adder)'),
(42, 2, '4.4', 'Mengoperasikan aritmatik dan logik pada Arithmatic Logic Unit (Multiplexer, Decoder, Register)'),
(43, 2, '4.5', 'Mempraktikkan fungsi kelistrikan dan komponen elektronika)'),
(44, 2, '4.6', 'Manipulasi dasar-dasar mikrokontroler (port IO, clock, arsitektur RISK, general purpose RISK, stack pointer, SRAM, EEPROM, SREG)'),
(45, 2, '4.7', 'Menyajikan gambar minimal sistem mikro komputer berdasarkan blok diagram dan sistem rangkaian (arsitektur computer)'),
(46, 2, '4.8', 'Merangkai perangkat eksternal dengan consule unit'),
(47, 2, '4.9', 'Membuat alternatif kebutuhan untuk memodifikasi beberapa memori dalam sistem computer'),
(48, 2, '4.10', 'Menyajikan Rangkaian internal CPU'),
(49, 3, '3.1', 'Menerapkan K3LH disesuaikan dengan lingkungan kerja'),
(50, 3, '3.2', 'Menerapkan perakitan komputer'),
(51, 3, '3.3', 'Menerapkan pengujian perakitan komputer'),
(52, 3, '3.4', 'Menerapkan konfigurasi BIOS pada komputer'),
(53, 3, '3.5', 'Menerapkan instalasi sistem operasi'),
(54, 3, '3.6', 'Menerapkan instalasi driver perangkat keras komputer'),
(55, 3, '3.7', 'Menerapkan instalasi software aplikasi'),
(56, 3, '3.8', 'Menerapkan perawatan perangkat keras komputer'),
(57, 3, '3.9', 'Menganalisis permasalahan pada perangkat keras'),
(58, 3, '3.10', 'Menganalisis permasalahan pada instalasi software aplikasi'),
(59, 3, '3.11', 'Menerapkan instalasi jaringan komputer'),
(60, 3, '3.12', 'Menerapkan pengalamanatan IP pada jaringan komputer'),
(61, 3, '3.13', 'Menerapkan sumber daya berbagi pakai pada jaringan komputer'),
(62, 3, '3.14', 'Menerapkan instalasi koneksi internet pada workstation'),
(63, 3, '3.15', 'Mengevaluasi desain jaringan lokal (LAN)'),
(64, 3, '3.16', 'Menerapkan instalasi jaringan lokal (LAN)'),
(65, 3, '3.17', 'Menerapkan perawatan jaringan lokal (LAN)'),
(66, 3, '3.18', 'Menganalisis permasalahan pada jaringan lokal (LAN)'),
(67, 3, '4.1', 'Melaksanakan K3LH dilingkungan kerja'),
(68, 3, '4.2', 'Merakit komputer'),
(69, 3, '4.3', 'Menguji kinerja komputer'),
(70, 3, '4.4', 'Melakukan seting BIOS'),
(71, 3, '4.5', 'Menginstalasi sistem operasi'),
(72, 3, '4.6', 'Menginstalasi driver perangkat keras komputer'),
(73, 3, '4.7', 'Menginstalasi software aplikasi'),
(74, 3, '4.8', 'Melakukan perawatan perangkat keras komputer'),
(75, 3, '4.9', 'Melakukan perbaikan pada perangkat keras'),
(76, 3, '4.10', 'Mengelola perbaikan pada instalasi software aplikasi'),
(77, 3, '4.11', 'Menginstalasi jaringan komputer'),
(78, 3, '4.12', 'Mengkonfigurasi pengalamatan IP pada jaringan komputer'),
(79, 3, '4.13', 'Menginstalasi sumber daya berbagi pakai pada jaringan komputer'),
(80, 3, '4.14', 'Menginstalasi koneksi internet pada workstation'),
(81, 3, '4.15', 'Mendesain jaringan lokal (LAN)'),
(82, 3, '4.16', 'Menginstalasi jaringan lokal (LAN)'),
(83, 3, '4.17', 'Melakukan perawatan jaringan lokal (LAN)'),
(84, 3, '4.18', 'Mengelola perbaikan pada jaringan lokal (LAN)'),
(85, 4, '3.1', 'Menerapkan alur logika pemrograman komputer'),
(86, 4, '3.2', 'Memahami perangkat lunak bahasa pemrograman'),
(87, 4, '3.3', 'Menerapkan alur pemrograman dengan struktur bahasa pemrograman komputer'),
(88, 4, '3.4', 'Menerapkan penggunaan tipe data, variabel, konstanta, operator, dan ekspresi'),
(89, 4, '3.5', 'Menerapkan operasi aritmatika dan logika'),
(90, 4, '3.6', 'Menerapkan struktur kontrol Percabangan dalam bahasa pemrograman'),
(91, 4, '3.7', 'Menerapkan struktur kontrol Perulangan dalam bahasa pemrograman'),
(92, 4, '3.8', 'Menganalisis penggunaan array untuk penyimpanan data di memori'),
(93, 4, '3.9', 'Menerapkan penggunaan fungsi'),
(94, 4, '3.10', 'Menerapkan pembuatan antar muka (User Intreface) pada aplikasi'),
(95, 4, '3.11', 'Menerapkan berbagai struktur kontrol dalam aplikasi antar muka (User Intreface).'),
(96, 4, '3.12', 'Menganalisis pembuatan aplikasi sederhana berbasis antar muka (User Intreface)'),
(97, 4, '3.13', 'Mengevaluasi debuging pada aplikasi sederhana'),
(98, 4, '3.14', 'Mengevaluasi paket installer aplikasi sederhana'),
(99, 4, '4.1', 'Membuat alur logika pemrograman komputer'),
(100, 4, '4.2', 'Melakukan Instalasi perangkat lunak bahasa pemrograman'),
(101, 4, '4.3', 'Menulis kode pemrogram sesuai dengan aturan dan sintaks bahasa pemrograman'),
(102, 4, '4.4', 'Membuat kode program dengan tipe data, variabel, konstanta, operator dan ekspresi'),
(103, 4, '4.5', 'Membuat kode program dengan operasi aritmatika dan logika'),
(104, 4, '4.6', 'Membuat kode program struktur kontrol percabangan'),
(105, 4, '4.7', 'Membuat kode program struktur kontrol perulangan'),
(106, 4, '4.8', 'Membuat kode program untuk menampilkan kumpulan data array'),
(107, 4, '4.9', 'Membuat kode program menggunakan fungsi'),
(108, 4, '4.10', 'Membuat antar muka (User Intreface) pada aplikasi'),
(109, 4, '4.11', 'Membuat kode program berbagai struktur kontrol dalam aplikasi antar muka (User Intreface).'),
(110, 4, '4.12', 'Membuat aplikasi sederhana berbasis antar muka (User Intreface)'),
(111, 4, '4.13', 'Menggunakan debuging pada aplikasi sederhana'),
(112, 4, '4.14', 'Memformulasikan paket installer aplikasi sederhana'),
(113, 5, '3.1', 'Mendiskusikan unsur-unsur tata letak berupa garis, ilustrasi, tipografi, warna, gelap-terang, tekstur, dan ruang'),
(114, 5, '3.2', 'Mendiskusikan fungsi, dan unsur warna CMYK dan RGB'),
(115, 5, '3.3', 'Mendiskusikan prinsip-prinsip tata letak, antara lain : proporsi, irama (rythm), keseimbangan, kontras, kesatuan (unity), dan harmoni dalam pembuatan desain grafis'),
(116, 5, '3.4', 'Mendiskusikan berbagai format gambar'),
(117, 5, '3.5', 'Menerapkan prosedur scanning gambar/ ilustrasi/teks dalam desain'),
(118, 5, '3.6', 'Menerapkan perangkat lunak pengolah gambar vektor'),
(119, 5, '3.7', 'Menerapkan manipulasi gambar vektor dengan menggunakan fitur efek'),
(120, 5, '3.8', 'Menerapkan pembuatan desain berbasis gambar vektor'),
(121, 5, '3.9', 'Menerapkan perangkat lunak pengolah gambar bitmap (raster)'),
(122, 5, '3.10', 'Menerapkan manipulasi gambar raster dengan menggunakan fitur efek'),
(123, 5, '3.11', 'Mengevaluasi pembuatan desain berbasis gambar bitmap (raster)'),
(124, 5, '3.12', 'Mengevaluasi penggabungan gambar vektor dan bitmap (raster)'),
(125, 5, '4.1', 'Menempatkan unsur-unsur tata letak berupa garis, ilustrasi, tipografi, warna, gelap-terang, tekstur, dan ruang'),
(126, 5, '4.2', 'Menempatkan berbagai fungsi, dan unsur warna CMYK dan RGB.'),
(127, 5, '4.3', 'Menerapkan hasil prinsip- prinsip tata letak, antara lain : proporsi, irama (rythm), keseimbangan, kontras, kesatuan (unity), dan harmoni dalam pembuatan desain grafis'),
(128, 5, '4.4', 'Menempatkan berbagi format gambar'),
(129, 5, '4.5', 'Melakukan proses scanning gambar/ ilustrasi/teks dengan alat scanner dalam desain'),
(130, 5, '4.6', 'Menggunakan perangkat lunak pengolah gambar vektor'),
(131, 5, '4.7', 'Memanipulasi gambar vektor dengan menggunakan fitur efek'),
(132, 5, '4.8', 'Membuat desain berbasis gambar vektor'),
(133, 5, '4.9', 'Menggunakan perangkat lunak pengolah gambar bitmap (raster)'),
(134, 5, '4.10', 'Memanipulasi gambar raster dengan menggunakan fitur efek'),
(135, 5, '4.11', 'Membuat desain berbasis gambar bitmap (raster)'),
(136, 5, '4.12', 'Membuat desain penggabungan gambar vektor dan bitmap (raster)'),
(137, 6, '3.1', 'Menganalisis jaringan berbasis luas'),
(138, 6, '3.2', 'Mengevaluasi jaringan nirkabel'),
(139, 6, '3.3', 'Mengevaluasi permasalahan jaringan nirkabel'),
(140, 6, '3.4', 'Memahami jaringan fiber optic'),
(141, 6, '3.5', 'Mengidentifikasi jenis-jenis kabel fiber optic'),
(142, 6, '3.6', 'Menerapkan fungsi alat kerja fiber optic'),
(143, 6, '3.7', 'Mengevaluasi penyambungan fiber optic'),
(144, 6, '3.8', 'Mengevaluasi perangkat pasif jaringan fiber optic'),
(145, 6, '3.9', 'Mengevaluasi permasalahan jaringan fiber optic'),
(146, 6, '4.1', 'Membuat disain jaringan berbasis luas'),
(147, 6, '4.2', 'Mengkonfigurasi jaringan nirkabel'),
(148, 6, '4.3', 'Memperbaiki jaringan nirkabel'),
(149, 6, '4.4', 'Mengkaji jaringan fiber optic'),
(150, 6, '4.5', 'Menemutunjukkan kabel fiber optic'),
(151, 6, '4.6', 'Menggunakan alat kerja fiber optic'),
(152, 6, '4.7', 'Melakukan sambungan fiber optic'),
(153, 6, '4.8', 'Mengkonfigurasikan perangkat pasif jaringan fiber optic'),
(154, 6, '4.9', 'Melakukan perbaikan jaringan fiber optic'),
(155, 7, '3.1', 'Mengevaluasi VLAN pada jaringan'),
(156, 7, '3.2', 'Mengevaluasi permasalahan VLAN'),
(157, 7, '3.3', 'Memahami proses routing'),
(158, 7, '3.4', 'Mengevaluasi routing statis'),
(159, 7, '3.5', 'Menganalisis permasalahan routing statis'),
(160, 7, '3.6', 'Mengevaluasi routing dinamis'),
(161, 7, '3.7', 'Mengevaluasi permasalahan routing dinamis'),
(162, 7, '3.8', 'Mengevaluasi internet gateway'),
(163, 7, '3.9', 'Menganalisis permasalahan internet gateway'),
(164, 7, '3.10', 'Mengevaluasi firewall jaringan'),
(165, 7, '3.11', 'Menganalisis permasalahan firewall'),
(166, 7, '3.12', 'Mengevaluasi manajemen bandwidth'),
(167, 7, '3.13', 'Menganalisis permasalahan manajemen bandwidth'),
(168, 7, '3.14', 'Mengevaluasi load balancing'),
(169, 7, '3.15', 'Mengevaluasi permasalahan load balancing'),
(170, 7, '3.16', 'Mengevaluasi Proxy Server'),
(171, 7, '3.17', 'Menganalisis permasalahan Proxy Server'),
(172, 7, '4.1', 'Mengkonfigurasi VLAN'),
(173, 7, '4.2', 'Melakukan perbaikan konfigurasi VLAN'),
(174, 7, '4.3', 'Mengkaji jenis-jenis routing'),
(175, 7, '4.4', 'Mengkonfigurasi routing statis'),
(176, 7, '4.5', 'Memperbaiki konfigurasi routing statis'),
(177, 7, '4.6', 'Mengkonfigurasi routing dinamis'),
(178, 7, '4.7', 'Memperbaiki konfigurasi routing dinamis'),
(179, 7, '4.8', 'Mengkonfigurasi NAT'),
(180, 7, '4.9', 'Memperbaiki konfigurasi NAT'),
(181, 7, '4.10', 'Mengkonfigurasi firewall jaringan'),
(182, 7, '4.11', 'Memperbaiki konfigurasi firewall'),
(183, 7, '4.12', 'Mengkonfigurasi manajemen bandwidth'),
(184, 7, '4.13', 'Memperbaiki konfigurasi manajemen bandwidth'),
(185, 7, '4.14', 'Mengkonfigurasi load balancing'),
(186, 7, '4.15', 'Memperbaiki konfigurasi load balancing'),
(187, 7, '4.16', 'Mengkonfigurasi Proxy Server'),
(188, 7, '4.17', 'Memperbaiki konfigurasi Proxy Server'),
(189, 8, '3.1', 'Menerapkan sistem operasi jaringan'),
(190, 8, '3.2', 'Mengevaluasi DHCP Server'),
(191, 8, '3.3', 'Mengevaluasi FTP Server'),
(192, 8, '3.4', 'Mengevaluasi Remote Server'),
(193, 8, '3.5', 'Mengevaluasi File Server'),
(194, 8, '3.6', 'Mengevaluasi Web Server'),
(195, 8, '3.7', 'Mengevaluasi DNS Server'),
(196, 8, '3.8', 'Mengevaluasi Database Server'),
(197, 8, '3.9', 'Mengevaluasi Mail Server'),
(198, 8, '3.10', 'Mengevaluasi Control Panel Hosting'),
(199, 8, '3.11', 'Mengevaluasi Share Hosting Server'),
(200, 8, '3.12', 'Mengevaluasi Virtual Private Server'),
(201, 8, '3.13', 'Mengevaluasi dedicated hosting Server'),
(202, 8, '3.14', 'Mengevaluasi VPN Server'),
(203, 8, '3.15', 'Mengevaluasi sistem kontrol dan monitoring'),
(204, 8, '3.16', 'Mengevaluasi sistem keamanan jaringan'),
(205, 8, '3.17', 'Menganalisis permasalahan sistem administrasi'),
(206, 8, '4.1', 'Menginstalasi sistem operasi jaringan'),
(207, 8, '4.2', 'Mengkonfigurasi DHCP Server'),
(208, 8, '4.3', 'Mengkonfigurasi FTP Server'),
(209, 8, '4.4', 'Mengkonfigurasi Remote Server'),
(210, 8, '4.5', 'Mengkonfigurasi File Server'),
(211, 8, '4.6', 'Mengkonfigurasi Web Server'),
(212, 8, '4.7', 'Mengkonfigurasi DNS Server'),
(213, 8, '4.8', 'Mengkonfigurasi Database Server'),
(214, 8, '4.9', 'Mengkonfigurasi Mail Server'),
(215, 8, '4.10', 'Mengkonfigurasi Control Panel hosting'),
(216, 8, '4.11', 'Mengkonfigurasi Share Hosting Server'),
(217, 8, '4.12', 'Mengkonfigurasi Virtual Private Server'),
(218, 8, '4.13', 'Mengkonfigurasi Dedicated Hosting Server'),
(219, 8, '4.14', 'Mengkonfigurasi VPN Server'),
(220, 8, '4.15', 'Mengkonfigurasi sistem kontrol dan monitoring'),
(221, 8, '4.16', 'Mengkonfigurasi sistem keamanan jaringan'),
(222, 8, '4.17', 'Melakukan perbaikan sistem administrasi'),
(223, 9, '3.1', 'Memahami ragam aplikasi komunikasi data.'),
(224, 9, '3.2', 'Menganalisis berbagai standar komunikasi data.'),
(225, 9, '3.3', 'Menganalisis proses komunikasi data dalam jaringan.'),
(226, 9, '3.4', 'Memahami aspek-aspek teknologi komunikasi data dan suara.'),
(227, 9, '3.5', 'Menganalisis kebutuhan telekomunikasi dalam jaringan.'),
(228, 9, '3.6', 'Menganalisis kebutuhan beban / bandwidth jaringan.'),
(229, 9, '3.7', 'Memahami konsep kerja protokoler Server softswitch.'),
(230, 9, '3.8', 'Memahami diagram rangkaian operasi komunikasi VoIP'),
(231, 9, '3.9', 'Memahami bagan dan konsep kerja Server softswitch berkaitan dengan PBX.'),
(232, 9, '3.10', 'Menerapkan konfigurasi ekstensi dan dial-plan Server softswitch.'),
(233, 9, '3.11', 'Menerapkan prosedur instalasi Server softswitch berbasis session initial protocol (SIP).'),
(234, 9, '3.12', 'Memahami konfigurasi ekstensi dan dial-plan Server softswitch'),
(235, 9, '3.13', 'Memahami fungsi firewall pada jaringan VoIP'),
(236, 9, '3.14', 'Memahami prinsip kerja subscriber internet telepon'),
(237, 9, '3.15', 'Menerapkan konfigurasi pada subscriber internet telepon'),
(238, 9, '3.16', 'Mengevaluasi kerja sistem komunikasi VoIP'),
(239, 9, '3.17', 'Mengevaluasi perawatan sistem komunikasi VoIP'),
(240, 9, '3.18', 'Menganalisis permasalahan sistem komunikasi VoIP'),
(241, 9, '4.1', 'Menyajikan karakteristik ragam aplikasi komunikasi data'),
(242, 9, '4.2', 'Menyajikan berbagai standar komunikasi data'),
(243, 9, '4.3', 'Menyajikan hasil analisis proses komunikasi data'),
(244, 9, '4.4', 'Menalar aspek-aspek teknologi komunikasi data dan suara'),
(245, 9, '4.5', 'Menyajikan hasil analisis kebutuhan telekomunikasi dalam jaringan'),
(246, 9, '4.6', 'Menyajikan hasil analisis kebutuhan beban/bandwidth jaringan'),
(247, 9, '4.7', 'Menalar konsep kerja protokoler Server softswitch'),
(248, 9, '4.8', 'Menalar diagram rangkaian operasi komunikasi VoIP'),
(249, 9, '4.9', 'Menyajikan bagan dan konsep kerja Server softswitch berkaitan dengan PBX.'),
(250, 9, '4.10', 'Melakukan konfigurasi ekstensi dan dial-plan Server softswitch'),
(251, 9, '4.11', 'Menginstalasi Server softswitch berbasis session initial protocol (SIP).'),
(252, 9, '4.12', 'Menyajikan hasil konfigurasi eksistensi dan dial-plan Server softswitch.'),
(253, 9, '4.13', 'Menalar fungsi firewall pada jaringan VoIP'),
(254, 9, '4.14', 'Menalar prinsip kerja subscriber internet telepon'),
(255, 9, '4.15', 'Membuat konfigurasi subscriber internet telepon.'),
(256, 9, '4.16', 'Mengelola kerja sistem komunikasi VoIP'),
(257, 9, '4.17', 'Melakukan perawatan sistem komunikasi VoIP'),
(258, 9, '4.18', 'Melakukan perbaikan sistem komunikasi VoIP'),
(259, 10, '3.1', 'Memahami sikap dan perilaku wirausahawan'),
(260, 10, '3.2', 'Menganalisis peluang usaha produk barang/jasa'),
(261, 10, '3.3', 'Memahami hak atas kekayaan intelektual'),
(262, 10, '3.4', 'Menganalisis konsep desain/prototype dan kemasan produk barang/ jasa'),
(263, 10, '3.5', 'Menganalisis proses kerja pembuatan prototype produk barang/jasa'),
(264, 10, '3.6', 'Menganalisis lembar kerja/ gambar kerja untuk pembuatan prototype produk barang/jasa'),
(265, 10, '3.7', 'Menganalisis biaya produksi prototype produk barang/jasa'),
(266, 10, '3.8', 'Menerapkan proses kerja pembuatan prototype produk barang/jasa'),
(267, 10, '3.9', 'Menentukan pengujian kesesuaian fungsi prototype produk barang/jasa '),
(268, 10, '3.10', 'Menganalisis perencanaan produksi massal'),
(269, 10, '3.11', 'Menentukan indikator keberhasilan tahapan produksi massal'),
(270, 10, '3.12', 'Menerapkan proses produksi massal'),
(271, 10, '3.13', 'Menerapkan metoda perakitan produk barang/jasa'),
(272, 10, '3.14', 'Menganalisis prosedur pengujian kesesuaian fungsi produk barang/jasa'),
(273, 10, '3.15', 'Mengevaluasi kesesuaian hasil produk dengan rancangan'),
(274, 10, '3.16', 'Memahami paparan deskriptif, naratif, argumentatif, atau persuasif tentang produk/jasa'),
(275, 10, '3.17', 'Menentukan media promosi'),
(276, 10, '3.18', 'Menyeleksi strategi pemasaran'),
(277, 10, '3.19', 'Menilai perkembangan usaha'),
(278, 10, '3.20', 'Menentukan standard laporan keuangan'),
(279, 10, '4.1', 'Memresentasikan sikap dan perilaku wirausahawan'),
(280, 10, '4.2', 'Menentukan peluang usaha produk barang/jasa'),
(281, 10, '4.3', 'Memresentasikan hak atas kekayaan intelektual'),
(282, 10, '4.4', 'Membuat desain/prototype dan kemasan produk barang/jasa'),
(283, 10, '4.5', 'Membuat alur dan proses kerja pembuatan prototype produk barang/jasa'),
(284, 10, '4.6', 'Membuat lembar kerja/ gambar kerja untuk pembuatan prototype produk barang/jasa'),
(285, 10, '4.7', 'Menghitung biaya produksi prototype produk barang/jasa'),
(286, 10, '4.8', 'Membuat prototype produk barang/jasa'),
(287, 10, '4.9', 'Menguji prototype produk barang/jasa'),
(288, 10, '4.10', 'Membuat perencanaan produksi massal'),
(289, 10, '4.11', 'Membuat indikator keberhasilan tahapan produksi missal'),
(290, 10, '4.12', 'Melakukan produksi massal'),
(291, 10, '4.13', 'Melakukan perakitan produk barang/jasa'),
(292, 10, '4.14', 'Melakukan pengujian produk barang/jasa'),
(293, 10, '4.15', 'Melakukan pemeriksaan produk sesuai dengan kriteria kelayakan produk/standar operasional'),
(294, 10, '4.16', 'Menyusun paparan deskriptif, naratif, argumentatif, atau persuasif tentang produk/jasa'),
(295, 10, '4.17', 'Membuat media promosi berdasarkan segmentasi pasar'),
(296, 10, '4.18', 'Melakukan pemasaran'),
(297, 10, '4.19', 'Membuat bagan perkembangan usaha'),
(298, 10, '4.20', 'Membuat laporan keuangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'Simulasi dan Komunikasi Digital '),
(2, 'Sistem Komputer '),
(3, 'Komputer dan Jaringan Dasar '),
(4, 'Pemrograman Dasar '),
(5, 'Dasar Desain Grafis '),
(6, 'Teknologi Jaringan Berbasis Luas (WAN) '),
(7, 'Administrasi Infrastruktur Jaringan '),
(8, 'Administrasi Sistem Jaringan '),
(9, 'Teknologi Layanan Jaringan '),
(10, 'Produk Kreatif dan Kewirausahaan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuanpkl`
--

CREATE TABLE `pengajuanpkl` (
  `id_pengajuanpkl` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_dudi` int(11) NOT NULL,
  `tanggal_pengajuan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_masuk` date DEFAULT '2020-01-01',
  `tanggal_keluar` date DEFAULT '2020-01-01',
  `id_guru` int(11) NOT NULL DEFAULT '0',
  `status_keanggotaan` enum('Anggota','Ketua Kelompok') NOT NULL DEFAULT 'Anggota',
  `status_validasi` enum('Belum Tervalidasi','Diterima','Ditolak','Proses Pengajuan') NOT NULL DEFAULT 'Belum Tervalidasi',
  `kuota` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuanpkl`
--

INSERT INTO `pengajuanpkl` (`id_pengajuanpkl`, `id_siswa`, `id_dudi`, `tanggal_pengajuan`, `tanggal_masuk`, `tanggal_keluar`, `id_guru`, `status_keanggotaan`, `status_validasi`, `kuota`) VALUES
(5, 18867, 1, '2020-08-22 17:26:57', '2020-01-22', '2020-07-31', 521, 'Anggota', 'Diterima', 1),
(6, 18868, 1, '2020-08-23 17:28:20', '2020-01-01', '2020-01-01', 521, 'Ketua Kelompok', 'Diterima', 1);

--
-- Trigger `pengajuanpkl`
--
DELIMITER $$
CREATE TRIGGER `TG_kuota_dudi` AFTER INSERT ON `pengajuanpkl` FOR EACH ROW BEGIN
	UPDATE data_dudi SET kuota=kuota-NEW.kuota
    WHERE id_dudi = NEW.id_dudi;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TG_kuota_dudi1` AFTER DELETE ON `pengajuanpkl` FOR EACH ROW BEGIN
	UPDATE data_dudi SET kuota=kuota+OLD.kuota
    WHERE id_dudi = OLD.id_dudi;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('siswa','admin_pkl','pembimbing_dudi','koordinator_jurusan','guru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id`, `username`, `password`, `role`) VALUES
(1, 18867, '18867', 'UeogQ', 'siswa'),
(2, 18868, '18868', 'LybaF', 'siswa'),
(3, 18869, '18869', 'MfrnX', 'siswa'),
(4, 18870, '18870', 'NukzI', 'siswa'),
(5, 18871, '18871', 'ZuheN', 'siswa'),
(6, 18872, '18872', 'AurhM', 'siswa'),
(7, 18873, '18873', 'ElyoJ', 'siswa'),
(8, 18874, '18874', 'LgcyL', 'siswa'),
(9, 18875, '18875', 'XtixF', 'siswa'),
(10, 18876, '18876', 'TlekL', 'siswa'),
(11, 18877, '18877', 'VutoR', 'siswa'),
(12, 18878, '18878', 'DjxjS', 'siswa'),
(13, 18879, '18879', 'DtcqF', 'siswa'),
(14, 18880, '18880', 'OjzgW', 'siswa'),
(15, 18881, '18881', 'RzulD', 'siswa'),
(16, 18882, '18882', 'BtxkS', 'siswa'),
(17, 18883, '18883', 'ArwdL', 'siswa'),
(18, 18884, '18884', 'MxkcF', 'siswa'),
(19, 18885, '18885', 'XjmsW', 'siswa'),
(20, 18886, '18886', 'NyayP', 'siswa'),
(21, 18887, '18887', 'KpbcW', 'siswa'),
(22, 18888, '18888', 'TvjqD', 'siswa'),
(23, 18889, '18889', 'BmcpM', 'siswa'),
(24, 18890, '18890', 'DrfkX', 'siswa'),
(25, 18891, '18891', 'QlomN', 'siswa'),
(26, 18892, '18892', 'HwxwB', 'siswa'),
(27, 18893, '18893', 'ItlwQ', 'siswa'),
(28, 18894, '18894', 'XkmgF', 'siswa'),
(29, 18895, '18895', 'XulvM', 'siswa'),
(30, 18896, '18896', 'AgagW', 'siswa'),
(31, 18897, '18897', 'ZdctT', 'siswa'),
(32, 18898, '18898', 'BiivI', 'siswa'),
(33, 18899, '18899', 'OdtpH', 'siswa'),
(34, 18900, '18900', 'OnoaY', 'siswa'),
(35, 18901, '18901', 'XlnnV', 'siswa'),
(36, 18902, '18902', 'ZaviH', 'siswa'),
(37, 18903, '18903', 'XcynC', 'siswa'),
(38, 18904, '18904', 'SvzfS', 'siswa'),
(39, 18905, '18905', 'FwggU', 'siswa'),
(40, 18906, '18906', 'PuouA', 'siswa'),
(41, 18907, '18907', 'OuehI', 'siswa'),
(42, 18908, '18908', 'NteuE', 'siswa'),
(43, 18909, '18909', 'QzljB', 'siswa'),
(44, 18910, '18910', 'NwoyW', 'siswa'),
(45, 18911, '18911', 'UiwbN', 'siswa'),
(46, 18912, '18912', 'IsvwO', 'siswa'),
(47, 18913, '18913', 'LdquC', 'siswa'),
(48, 18914, '18914', 'OrjgH', 'siswa'),
(49, 18915, '18915', 'RsshW', 'siswa'),
(50, 18916, '18916', 'IwslG', 'siswa'),
(51, 18917, '18917', 'ZmokZ', 'siswa'),
(52, 18918, '18918', 'HxomR', 'siswa'),
(53, 18919, '18919', 'TmzfM', 'siswa'),
(54, 18920, '18920', 'HsznS', 'siswa'),
(55, 18921, '18921', 'RqbdX', 'siswa'),
(56, 18922, '18922', 'LubmW', 'siswa'),
(57, 18923, '18923', 'WhpnP', 'siswa'),
(58, 18924, '18924', 'EylnN', 'siswa'),
(59, 18925, '18925', 'OtohT', 'siswa'),
(60, 18926, '18926', 'PaczI', 'siswa'),
(61, 18927, '18927', 'GdzqF', 'siswa'),
(62, 18928, '18928', 'VxujL', 'siswa'),
(63, 18929, '18929', 'KfpnX', 'siswa'),
(64, 18930, '18930', 'QfkpR', 'siswa'),
(65, 18931, '18931', 'MixkR', 'siswa'),
(66, 18932, '18932', 'LelaK', 'siswa'),
(67, 18933, '18933', 'LwtxE', 'siswa'),
(68, 18934, '18934', 'YxjuP', 'siswa'),
(69, 18935, '18935', 'EansE', 'siswa'),
(70, 18936, '18936', 'JmynJ', 'siswa'),
(71, 18937, '18937', 'GivzH', 'siswa'),
(72, 501, 'Misbahus', 'Misbahus', 'koordinator_jurusan'),
(73, 512, 'Apri', 'Apri', 'guru'),
(74, 521, 'Dadang', 'Dadang', 'guru'),
(75, 576, 'Hari', 'Hari', 'guru'),
(76, 595, 'Iwan', 'Iwan', 'guru'),
(77, 614, 'Mursalin', 'Mursalin', 'guru'),
(78, 713, 'Herdian', 'Herdian', 'guru'),
(79, 724, 'Singgih', 'Singgih', 'guru'),
(80, 234, 'Anggi', 'Anggi', 'admin_pkl'),
(81, 1, 'Asterix', 'Asterix', 'pembimbing_dudi'),
(82, 2, 'Bina', 'Bina', 'pembimbing_dudi'),
(83, 3, 'BPS', 'BPS', 'pembimbing_dudi'),
(84, 4, 'CakraKom', 'CakraKom', 'pembimbing_dudi'),
(85, 5, 'CakraNet', 'CakraNet', 'pembimbing_dudi'),
(86, 6, 'Indokomtel', 'Indokomtel', 'pembimbing_dudi'),
(87, 7, 'SIC', 'SIC', 'pembimbing_dudi'),
(88, 8, 'Talenta', 'Talenta', 'pembimbing_dudi'),
(89, 9, 'DDTech', 'DDTech', 'pembimbing_dudi'),
(90, 10, 'Kominfo', 'Kominfo', 'pembimbing_dudi'),
(91, 11, 'DocKom', 'DocKom', 'pembimbing_dudi'),
(92, 12, 'Elcom', 'Elcom', 'pembimbing_dudi'),
(93, 13, 'Escape', 'Escape', 'pembimbing_dudi'),
(94, 14, 'Genius', 'Genius', 'pembimbing_dudi'),
(95, 15, 'Haris', 'Haris', 'pembimbing_dudi'),
(96, 16, 'IDCom', 'IDCom', 'pembimbing_dudi'),
(97, 17, 'Intan', 'Intan', 'pembimbing_dudi'),
(98, 18, 'JTVBWI', 'JTVBWI', 'pembimbing_dudi'),
(99, 19, 'CamatBWI', 'CamatBWI', 'pembimbing_dudi'),
(100, 20, 'Kesyah', 'Kesyah', 'pembimbing_dudi'),
(101, 21, 'UPBU', 'UPBU', 'pembimbing_dudi'),
(102, 22, 'Galllery', 'Galllery', 'pembimbing_dudi'),
(103, 23, 'LKP', 'LKP', 'pembimbing_dudi'),
(104, 24, 'MircroDB', 'MircroDB', 'pembimbing_dudi'),
(105, 25, 'Multikom', 'Multikom', 'pembimbing_dudi'),
(106, 26, 'PENS', 'PENS', 'pembimbing_dudi'),
(107, 27, 'Blambangan', 'Blambangan', 'pembimbing_dudi'),
(108, 28, 'Lundin', 'Lundin', 'pembimbing_dudi'),
(109, 29, 'ASDP', 'ASDP', 'pembimbing_dudi'),
(110, 30, 'Retalindo', 'Retalindo', 'pembimbing_dudi'),
(111, 31, 'Mulia', 'Mulia', 'pembimbing_dudi'),
(112, 32, 'Pelindo', 'Pelindo', 'pembimbing_dudi'),
(113, 33, 'Pertamina', 'Pertamina', 'pembimbing_dudi'),
(114, 34, 'PJB', 'PJB', 'pembimbing_dudi'),
(115, 35, 'Selindo', 'Selindo', 'pembimbing_dudi'),
(116, 36, 'TelkomAkses', 'TelkomAkses', 'pembimbing_dudi'),
(117, 37, 'TelkomSBY', 'TelkomSBY', 'pembimbing_dudi'),
(118, 38, 'TelkomBWI', 'TelkomBWI', 'pembimbing_dudi'),
(119, 39, 'Trion', 'Trion', 'pembimbing_dudi'),
(120, 40, 'TunasJaya', 'TunasJaya', 'pembimbing_dudi'),
(121, 41, 'WBS', 'WBS', 'pembimbing_dudi'),
(122, 42, 'PutriKuning', 'PutriKuning', 'pembimbing_dudi'),
(123, 43, 'Raya', 'Raya', 'pembimbing_dudi'),
(124, 44, 'RSUDBlb', 'RSUDBlb', 'pembimbing_dudi'),
(125, 45, 'SahabatKom', 'SahabatKom', 'pembimbing_dudi'),
(126, 46, 'STIKOM', 'STIKOM', 'pembimbing_dudi'),
(127, 47, 'TCTC', 'TCTC', 'pembimbing_dudi'),
(128, 48, 'Tri', 'Tri', 'pembimbing_dudi'),
(129, 49, 'USBKom', 'USBKom', 'pembimbing_dudi'),
(130, 50, 'ViolaKom', 'ViolaKom', 'pembimbing_dudi'),
(131, 51, 'VistaKom', 'VistaKom', 'pembimbing_dudi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_pkl`
--

CREATE TABLE `penilaian_pkl` (
  `id_penilaian_pkl` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `aspek_teknis_1` varchar(255) DEFAULT '-',
  `nilai_astek_1` varchar(3) DEFAULT NULL,
  `aspek_teknis_2` varchar(255) DEFAULT '-',
  `nilai_astek_2` varchar(3) DEFAULT NULL,
  `aspek_teknis_3` varchar(255) DEFAULT '-',
  `nilai_astek_3` varchar(3) DEFAULT NULL,
  `aspek_teknis_4` varchar(255) DEFAULT '-',
  `nilai_astek_4` varchar(3) DEFAULT NULL,
  `aspek_teknis_5` varchar(255) DEFAULT '-',
  `nilai_astek_5` varchar(3) DEFAULT NULL,
  `aspek_teknis_6` varchar(255) DEFAULT '-',
  `nilai_astek_6` varchar(3) DEFAULT NULL,
  `aspek_teknis_7` varchar(255) DEFAULT '-',
  `nilai_astek_7` varchar(3) DEFAULT NULL,
  `aspek_teknis_8` varchar(255) DEFAULT '-',
  `nilai_astek_8` varchar(3) DEFAULT NULL,
  `aspek_teknis_9` varchar(255) DEFAULT '-',
  `nilai_astek_9` varchar(3) DEFAULT NULL,
  `aspek_teknis_10` varchar(255) DEFAULT '-',
  `nilai_astek_10` varchar(3) DEFAULT NULL,
  `aspek_teknis_11` varchar(255) DEFAULT '-',
  `nilai_astek_11` varchar(3) DEFAULT NULL,
  `aspek_teknis_12` varchar(255) DEFAULT '-',
  `nilai_astek_12` varchar(3) DEFAULT NULL,
  `aspek_teknis_13` varchar(255) DEFAULT '-',
  `nilai_astek_13` varchar(3) DEFAULT NULL,
  `aspek_teknis_14` varchar(255) DEFAULT '-',
  `nilai_astek_14` varchar(3) DEFAULT NULL,
  `nilai_nontek_disiplin` varchar(3) DEFAULT NULL,
  `nilai_nontek_kerjasama` varchar(3) DEFAULT NULL,
  `nilai_nontek_inisiatif` varchar(3) DEFAULT NULL,
  `nilai_nontek_tanggungjawab` varchar(3) DEFAULT NULL,
  `nilai_nontek_kebersihan_kerapian` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian_pkl`
--

INSERT INTO `penilaian_pkl` (`id_penilaian_pkl`, `id_siswa`, `aspek_teknis_1`, `nilai_astek_1`, `aspek_teknis_2`, `nilai_astek_2`, `aspek_teknis_3`, `nilai_astek_3`, `aspek_teknis_4`, `nilai_astek_4`, `aspek_teknis_5`, `nilai_astek_5`, `aspek_teknis_6`, `nilai_astek_6`, `aspek_teknis_7`, `nilai_astek_7`, `aspek_teknis_8`, `nilai_astek_8`, `aspek_teknis_9`, `nilai_astek_9`, `aspek_teknis_10`, `nilai_astek_10`, `aspek_teknis_11`, `nilai_astek_11`, `aspek_teknis_12`, `nilai_astek_12`, `aspek_teknis_13`, `nilai_astek_13`, `aspek_teknis_14`, `nilai_astek_14`, `nilai_nontek_disiplin`, `nilai_nontek_kerjasama`, `nilai_nontek_inisiatif`, `nilai_nontek_tanggungjawab`, `nilai_nontek_kebersihan_kerapian`) VALUES
(1, 18867, 'Merakit komputer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '80', '80', '80', '80', '80');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_pkl`
--

CREATE TABLE `program_pkl` (
  `id_program_pkl` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kompetensi_dasar` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `topik_pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program_pkl`
--

INSERT INTO `program_pkl` (`id_program_pkl`, `id_siswa`, `id_kompetensi_dasar`, `tanggal`, `topik_pekerjaan`) VALUES
(1, 18867, 127, '2020-08-25', 'Menyusun beberapa layouting dan pewarnaan pada poster promosi'),
(2, 18867, 49, '2020-08-26', 'menerapkan k3lh saat merakit komputer'),
(3, 18867, 37, '2020-08-26', 'menganalisis kebutuhan komputer untuk kebutuhan ukuran ram'),
(4, 18867, 113, '2020-08-26', 'Menerapkan peletakkan layout pada desain poster promosi'),
(5, 18867, 73, '2020-08-26', 'Instalasi sistem operasi jaringan'),
(6, 18867, 274, '2020-08-26', 'menyusun kata-kata promosi pada desain promosi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `catatan_kunjungan_pkl`
--
ALTER TABLE `catatan_kunjungan_pkl`
  ADD PRIMARY KEY (`id_catatan_kunjungan_pkl`);

--
-- Indeks untuk tabel `data_dudi`
--
ALTER TABLE `data_dudi`
  ADD PRIMARY KEY (`id_dudi`);

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `data_staf_tu`
--
ALTER TABLE `data_staf_tu`
  ADD PRIMARY KEY (`id_staf_tu`);

--
-- Indeks untuk tabel `jurnal_pkl`
--
ALTER TABLE `jurnal_pkl`
  ADD PRIMARY KEY (`id_jurnal_pkl`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kompetensi_dasar`
--
ALTER TABLE `kompetensi_dasar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajuanpkl`
--
ALTER TABLE `pengajuanpkl`
  ADD PRIMARY KEY (`id_pengajuanpkl`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `penilaian_pkl`
--
ALTER TABLE `penilaian_pkl`
  ADD PRIMARY KEY (`id_penilaian_pkl`);

--
-- Indeks untuk tabel `program_pkl`
--
ALTER TABLE `program_pkl`
  ADD PRIMARY KEY (`id_program_pkl`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `catatan_kunjungan_pkl`
--
ALTER TABLE `catatan_kunjungan_pkl`
  MODIFY `id_catatan_kunjungan_pkl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_dudi`
--
ALTER TABLE `data_dudi`
  MODIFY `id_dudi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=725;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18938;

--
-- AUTO_INCREMENT untuk tabel `jurnal_pkl`
--
ALTER TABLE `jurnal_pkl`
  MODIFY `id_jurnal_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kompetensi_dasar`
--
ALTER TABLE `kompetensi_dasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengajuanpkl`
--
ALTER TABLE `pengajuanpkl`
  MODIFY `id_pengajuanpkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `penilaian_pkl`
--
ALTER TABLE `penilaian_pkl`
  MODIFY `id_penilaian_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `program_pkl`
--
ALTER TABLE `program_pkl`
  MODIFY `id_program_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
