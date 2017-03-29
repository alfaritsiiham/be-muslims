-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mar 2017 pada 07.46
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abasa`
--

CREATE TABLE `abasa` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `addhuha`
--

CREATE TABLE `addhuha` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `addukhan`
--

CREATE TABLE `addukhan` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `adzariyat`
--

CREATE TABLE `adzariyat` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aladiyat`
--

CREATE TABLE `aladiyat` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alahqaf`
--

CREATE TABLE `alahqaf` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alahzab`
--

CREATE TABLE `alahzab` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alala`
--

CREATE TABLE `alala` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alalaq`
--

CREATE TABLE `alalaq` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alanam`
--

CREATE TABLE `alanam` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alanbiya`
--

CREATE TABLE `alanbiya` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alanfal`
--

CREATE TABLE `alanfal` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alankabut`
--

CREATE TABLE `alankabut` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alaraf`
--

CREATE TABLE `alaraf` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alashr`
--

CREATE TABLE `alashr` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `albalad`
--

CREATE TABLE `albalad` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `albaqarah`
--

CREATE TABLE `albaqarah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `albayyinah`
--

CREATE TABLE `albayyinah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alburuj`
--

CREATE TABLE `alburuj` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alfajr`
--

CREATE TABLE `alfajr` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alfalaq`
--

CREATE TABLE `alfalaq` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alfath`
--

CREATE TABLE `alfath` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alfatihah`
--

CREATE TABLE `alfatihah` (
  `id_ayat` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ayat` int(100) NOT NULL,
  `arab` text NOT NULL,
  `latin` text NOT NULL,
  `indo` text NOT NULL,
  `inggris` text NOT NULL,
  `suara` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alfatihah`
--

INSERT INTO `alfatihah` (`id_ayat`, `ayat`, `arab`, `latin`, `indo`, `inggris`, `suara`, `created_at`, `updated_at`) VALUES
(00002, 1, 'Ø¨ÙØ³Ù’Ù…Ù Ù±Ù„Ù„Ù‘ÙŽÙ‡Ù Ù±Ù„Ø±Ù‘ÙŽØ­Ù’Ù…ÙŽÙ°Ù†Ù Ù±Ù„Ø±Ù‘ÙŽØ­ÙÙŠÙ…Ù', 'Bismillahirrahmanirrahiim', 'Dengan menyebut nama Allah yang maha pengasih lagi maha penyayang', '', '', '2017-03-13 09:44:22', '0000-00-00 00:00:00'),
(00003, 2, 'Ù±Ù„Ù’Ø­ÙŽÙ…Ù’Ø¯Ù Ù„ÙÙ„Ù‘ÙŽÙ‡Ù Ø±ÙŽØ¨Ù‘Ù Ù±Ù„Ù’Ø¹ÙŽÙ°Ù„ÙŽÙ…ÙÙŠÙ†ÙŽ ', 'Alhamdulillahi rabbil alamin', 'Segala puji bagi Allah, Tuhan semesta alam.', '', '', '2017-03-13 10:10:03', '0000-00-00 00:00:00'),
(00004, 3, 'Ù±Ù„Ø±Ù‘ÙŽØ­Ù’Ù…ÙŽÙ°Ù†Ù Ù±Ù„Ø±Ù‘ÙŽØ­ÙÙŠÙ…Ù ', ' Ar rahma_nir rahim(i)', 'Maha Pemurah lagi Maha Penyayang.', '', '', '2017-03-13 10:11:38', '0000-00-00 00:00:00'),
(00005, 4, 'Ù…ÙŽÙ°Ù„ÙÙƒÙ ÙŠÙŽÙˆÙ’Ù…Ù Ù±Ù„Ø¯Ù‘ÙÙŠÙ†Ù ', ' Ma_liki yaumid din(i)', 'Yang menguasai di Hari Pembalasan', '', '', '2017-03-13 10:13:48', '0000-00-00 00:00:00'),
(00006, 5, 'Ø¥ÙÙŠÙ‘ÙŽØ§ÙƒÙŽ Ù†ÙŽØ¹Ù’Ø¨ÙØ¯Ù ÙˆÙŽØ¥ÙÙŠÙ‘ÙŽØ§ÙƒÙŽ Ù†ÙŽØ³Ù’ØªÙŽØ¹ÙÙŠÙ†Ù ', ' iyyaaka naâ€™budu wa-iyyaaka nastaâ€™iinu', 'Hanya Engkaulah yang kami sembah, dan hanya kepada Engkaulah kami meminta pertolongan', '', '', '2017-03-13 10:14:38', '0000-00-00 00:00:00'),
(00007, 6, 'Ù±Ù‡Ù’Ø¯ÙÙ†ÙŽØ§ Ù±Ù„ØµÙ‘ÙØ±ÙŽÙ°Ø·ÙŽ Ù±Ù„Ù’Ù…ÙØ³Ù’ØªÙŽÙ‚ÙÙŠÙ…ÙŽ ', ' ihdinaa alshshiraatha almustaqiima', 'Tunjukilah kami jalan yang lurus', '', '', '2017-03-13 10:15:21', '0000-00-00 00:00:00'),
(00008, 7, 'ØµÙØ±ÙŽÙ°Ø·ÙŽ Ù±Ù„Ù‘ÙŽØ°ÙÙŠÙ†ÙŽ Ø£ÙŽÙ†Ù’Ø¹ÙŽÙ…Ù’ØªÙŽ Ø¹ÙŽÙ„ÙŽÙŠÙ’Ù‡ÙÙ…Ù’ ØºÙŽÙŠÙ’Ø±Ù Ù±Ù„Ù’Ù…ÙŽØ', 'shiraathalladziina anâ€™amta â€˜alayhim ghayrilmaghdhuubi â€˜alayhim walaaldhdhaalliina', '(yaitu) Jalan orang-orang yang telah Engkau beri nikmat kepada mereka; bukan (jalan) mereka yang dimurkai dan bukan (pula jalan) mereka yang sesat', '', '', '2017-03-13 10:16:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alfil`
--

CREATE TABLE `alfil` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alfurqan`
--

CREATE TABLE `alfurqan` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alghasiyyah`
--

CREATE TABLE `alghasiyyah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alhadid`
--

CREATE TABLE `alhadid` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alhajj`
--

CREATE TABLE `alhajj` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alhaqqah`
--

CREATE TABLE `alhaqqah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alhasyr`
--

CREATE TABLE `alhasyr` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alhijr`
--

CREATE TABLE `alhijr` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alhujarat`
--

CREATE TABLE `alhujarat` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alhumazah`
--

CREATE TABLE `alhumazah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alikhlas`
--

CREATE TABLE `alikhlas` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alimran`
--

CREATE TABLE `alimran` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alinfitar`
--

CREATE TABLE `alinfitar` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alinsan`
--

CREATE TABLE `alinsan` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alinsyiqoq`
--

CREATE TABLE `alinsyiqoq` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alinsyirah`
--

CREATE TABLE `alinsyirah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alisra`
--

CREATE TABLE `alisra` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aljatsiyah`
--

CREATE TABLE `aljatsiyah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aljin`
--

CREATE TABLE `aljin` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aljumuah`
--

CREATE TABLE `aljumuah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alkafirun`
--

CREATE TABLE `alkafirun` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alkahfi`
--

CREATE TABLE `alkahfi` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alkautsar`
--

CREATE TABLE `alkautsar` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `allahab`
--

CREATE TABLE `allahab` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `allail`
--

CREATE TABLE `allail` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almaarij`
--

CREATE TABLE `almaarij` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almaidah`
--

CREATE TABLE `almaidah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almaun`
--

CREATE TABLE `almaun` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almuddatsir`
--

CREATE TABLE `almuddatsir` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almujadilah`
--

CREATE TABLE `almujadilah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almulk`
--

CREATE TABLE `almulk` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almumin`
--

CREATE TABLE `almumin` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almuminun`
--

CREATE TABLE `almuminun` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almumtahanah`
--

CREATE TABLE `almumtahanah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almunafiqun`
--

CREATE TABLE `almunafiqun` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almursalat`
--

CREATE TABLE `almursalat` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almutaffifin`
--

CREATE TABLE `almutaffifin` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `almuzzamil`
--

CREATE TABLE `almuzzamil` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alqadar`
--

CREATE TABLE `alqadar` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alqalam`
--

CREATE TABLE `alqalam` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alqamar`
--

CREATE TABLE `alqamar` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alqariah`
--

CREATE TABLE `alqariah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alqasas`
--

CREATE TABLE `alqasas` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alqiyamah`
--

CREATE TABLE `alqiyamah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alquraisy`
--

CREATE TABLE `alquraisy` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alwaqiah`
--

CREATE TABLE `alwaqiah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annaba`
--

CREATE TABLE `annaba` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annahl`
--

CREATE TABLE `annahl` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annajm`
--

CREATE TABLE `annajm` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annaml`
--

CREATE TABLE `annaml` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annas`
--

CREATE TABLE `annas` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annashr`
--

CREATE TABLE `annashr` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annaziat`
--

CREATE TABLE `annaziat` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annisa`
--

CREATE TABLE `annisa` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `annur`
--

CREATE TABLE `annur` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arradu`
--

CREATE TABLE `arradu` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arrahman`
--

CREATE TABLE `arrahman` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `arrum`
--

CREATE TABLE `arrum` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assaf`
--

CREATE TABLE `assaf` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assafat`
--

CREATE TABLE `assafat` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assajadah`
--

CREATE TABLE `assajadah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assyams`
--

CREATE TABLE `assyams` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assyuara`
--

CREATE TABLE `assyuara` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assyura`
--

CREATE TABLE `assyura` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attaghabun`
--

CREATE TABLE `attaghabun` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attahrim`
--

CREATE TABLE `attahrim` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attakasur`
--

CREATE TABLE `attakasur` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attakwir`
--

CREATE TABLE `attakwir` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attalaq`
--

CREATE TABLE `attalaq` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attaubah`
--

CREATE TABLE `attaubah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `atthariq`
--

CREATE TABLE `atthariq` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `atthur`
--

CREATE TABLE `atthur` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attin`
--

CREATE TABLE `attin` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `azzalzalah`
--

CREATE TABLE `azzalzalah` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `azzhukruf`
--

CREATE TABLE `azzhukruf` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `azzumar`
--

CREATE TABLE `azzumar` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fathir`
--

CREATE TABLE `fathir` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fussilat`
--

CREATE TABLE `fussilat` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hud`
--

CREATE TABLE `hud` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibrahim`
--

CREATE TABLE `ibrahim` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `luqman`
--

CREATE TABLE `luqman` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `maryam`
--

CREATE TABLE `maryam` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `muhammad`
--

CREATE TABLE `muhammad` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nuh`
--

CREATE TABLE `nuh` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `qaf`
--

CREATE TABLE `qaf` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saba`
--

CREATE TABLE `saba` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shad`
--

CREATE TABLE `shad` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `taha`
--

CREATE TABLE `taha` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `yasin`
--

CREATE TABLE `yasin` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `yunus`
--

CREATE TABLE `yunus` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `yusuf`
--

CREATE TABLE `yusuf` (
  `id_ayat` int(5) DEFAULT NULL,
  `ayat` int(100) DEFAULT NULL,
  `arab` text,
  `latin` text,
  `indo` text,
  `inggris` text,
  `suara` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alfatihah`
--
ALTER TABLE `alfatihah`
  ADD PRIMARY KEY (`id_ayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alfatihah`
--
ALTER TABLE `alfatihah`
  MODIFY `id_ayat` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
