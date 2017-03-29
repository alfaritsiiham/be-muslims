-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mar 2017 pada 07.44
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assalamualaikum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'Ini Admin', '2017-03-13 04:38:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
--

CREATE TABLE `config` (
  `id_config` int(5) UNSIGNED ZEROFILL NOT NULL,
  `title` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `header` int(1) NOT NULL,
  `yt_header` varchar(100) NOT NULL,
  `gbr_header` varchar(100) NOT NULL,
  `yt_about` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`id_config`, `title`, `about`, `instagram`, `header`, `yt_header`, `gbr_header`, `yt_about`, `updated_at`) VALUES
(00001, 'Assalamualaikum - All About Muslim', 'Spatu jordan yeezy di fotoin,spatunya anjayy... A En Je A Ye... Aaaaanjayyy.... My name? Uvuvwevwevwe Onyetwenywevwe Ugwemubwem Ossass ', 'https://www.instagram.com/alfaritsi_hamdani/', 0, '9vMh9f41pqE', 'header-ac_syndicate-wallpaper-1280x800.jpg', 'nvlxPoD9lwE', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dakwah`
--

CREATE TABLE `dakwah` (
  `id_dakwah` int(5) UNSIGNED ZEROFILL NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `dari` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dakwah`
--

INSERT INTO `dakwah` (`id_dakwah`, `judul`, `isi`, `dari`, `gambar`, `pdf`, `created_at`, `updated_at`) VALUES
(00001, 'judul dakwah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam velit est: In dui pulvinar! Elementum posuere quisque lectus maecenas potenti, ultrices semper egestas phasellus: Tempus vehicula fusce ad phasellus. Viverra nonummy magna; Diam habitasse sagittis mattis dignissim massa ut nascetur: Est fringilla blandit sapien... Accumsan molestie erat auctor feugiat odio; Hac habitant lobortis morbi magna quisque? Litora quisque suscipit phasellus bibendum hymenaeos... Senectus magnis nunc enim sem etiam! Viverra erat mus;\n\nVitae vestibulum senectus: Molestie libero est aliquet purus suscipit mollis: Eros cubilia dis auctor: Tincidunt molestie quis. Suspendisse facilisi primis potenti inceptos class? Luctus duis felis felis risus sem curae; elementum: Taciti imperdiet eu. Etiam pede dignissim sodales massa donec malesuada libero! Cubilia nascetur sociosqu velit ullamcorper felis erat, in pharetra velit? Nam cubilia placerat? Vehicula habitasse cras, fringilla turpis sem sapien aliquam.\n\nMattis volutpat sollicitudin maecenas platea porta pulvinar... Eleifend potenti tortor praesent taciti? Tempor felis habitant... Tincidunt bibendum donec taciti nullam primis: Eleifend vitae porttitor massa diam eu! Semper accumsan libero fringilla lacinia... Praesent justo suspendisse. Ridiculus condimentum viverra placerat faucibus magna dictumst. Sociis sociosqu ac facilisi ad vel... Penatibus bibendum consequat nascetur egestas ullamcorper praesent per... Ut curabitur duis fusce nam.\n\nCubilia fringilla integer tristique sociosqu sollicitudin malesuada montes... Duis molestie cras, viverra pretium ac fringilla mollis ultricies... Magnis augue sit felis fermentum curabitur sapien! Cursus interdum suscipit scelerisque. Dapibus nascetur lacinia dolor cras diam sed a? Litora convallis tincidunt consequat rhoncus consequat: Odio inceptos sagittis velit: Torquent vivamus nonummy hymenaeos a ornare convallis, turpis litora auctor duis auctor tortor mi.\n\nVenenatis mus vulputate ut velit ante magnis sollicitudin, mauris potenti ad sagittis molestie integer platea dolor. Pulvinar in hymenaeos dictumst luctus. Lorem amet hac vulputate quisque orci cum. Dictumst volutpat quisque nostra hendrerit eu; Suscipit rutrum mollis erat ultricies! Facilisis purus urna magna vitae... Per euismod nec pretium platea donec laoreet? Sagittis sociis taciti ad, integer lectus vestibulum viverra etiam.\n\nMassa hac habitant dignissim? Lacus praesent velit dictum dolor pellentesque non, at auctor volutpat hendrerit amet suspendisse lobortis; Ligula dapibus ut pede libero morbi turpis nullam. Tempor fringilla felis fusce amet! Senectus cras lectus? Sodales mus nunc... Urna litora ac; Tellus laoreet vel... Aliquam vel molestie litora, venenatis sed porttitor... Penatibus mus elit rhoncus nostra posuere... Placerat a pede lorem maecenas felis rhoncus...\n\nFelis ultricies bibendum laoreet venenatis adipiscing eget: Sit ligula erat, penatibus nunc vel aliquam magnis taciti. Nunc porttitor mattis feugiat interdum... Hymenaeos magna semper purus; Consequat vitae metus ornare? Sapien aenean eleifend augue mauris suscipit justo sociosqu! Ornare vitae turpis arcu; Et donec luctus, feugiat velit praesent lacinia hac sapien ridiculus hendrerit? Gravida eu morbi blandit sociis elit nulla aptent... Varius consequat!\n\nTellus amet ullamcorper rhoncus hendrerit tellus aliquam pellentesque! Porta at scelerisque velit odio viverra sit? Nostra vivamus nisl nibh nam. Donec nostra platea dui; Arcu aptent nisl interdum velit nisi ligula, aptent semper vel blandit bibendum leo diam nibh, montes nibh nulla! Suspendisse cubilia duis nibh morbi... Nibh netus lacinia quisque blandit per pulvinar? Metus fames semper... Aenean viverra bibendum lacus.\n\nPrimis nisl cras varius velit netus risus sociis, nonummy nascetur dapibus magna ante ullamcorper vitae? Magnis ad sit facilisis pulvinar; Pellentesque pretium eleifend lectus. Hymenaeos tincidunt placerat velit per: Purus sagittis urna! Parturient aenean parturient interdum felis commodo magnis. Suscipit ullamcorper congue libero dictum diam pretium... Fusce dignissim erat sagittis. Cursus magna pede arcu a elementum fames: Nisi condimentum litora primis:\n\nCommodo sodales ultrices eleifend quisque; Elementum eros conubia ultrices... Quam nisl auctor ultrices nec ante. Cursus ac vivamus? Nec cras suscipit nisi placerat! Class fusce consequat justo laoreet? Auctor pulvinar potenti interdum erat justo... Vitae felis donec augue vehicula ipsum non. Montes senectus orci vestibulum? Inceptos curae; est orci lorem cras inceptos habitasse; Litora nunc aliquet ante aliquam felis montes... Posuere odio', 'www.dakwah.com', '', '', '2017-03-13 10:41:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `doa`
--

CREATE TABLE `doa` (
  `id_doa` int(5) UNSIGNED ZEROFILL NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `dikutip` varchar(100) NOT NULL,
  `arab` text NOT NULL,
  `latin` text NOT NULL,
  `indo` text NOT NULL,
  `inggris` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `doa`
--

INSERT INTO `doa` (`id_doa`, `judul`, `deskripsi`, `dikutip`, `arab`, `latin`, `indo`, `inggris`, `created_at`, `updated_at`) VALUES
(00002, 'Ayat Kursi', 'Biasa digunakan untuk mengusir setan :v', 'Al-Baqarah ayat 255', 'Ø§Ù„Ù„Ù‘ÙŽÙ‡Ù Ù„ÙŽØ§ Ø¥ÙÙ„ÙŽÙ‡ÙŽ Ø¥ÙÙ„Ù‘ÙŽØ§ Ù‡ÙÙˆÙŽ Ø§Ù„Ù’Ø­ÙŽÙŠÙ‘Ù Ø§Ù„Ù’Ù‚ÙŽÙŠÙ‘ÙÙˆÙ…Ù Ù„ÙŽØ§ ØªÙŽØ£Ù’Ø®ÙØ°ÙÙ‡Ù Ø³ÙÙ†ÙŽØ©ÙŒ ÙˆÙŽÙ„ÙŽØ§ Ù†ÙŽÙˆÙ’Ù…ÙŒ Ù„ÙŽÙ‡Ù Ù…ÙŽØ§ ÙÙÙŠ Ø§Ù„Ø³Ù‘ÙŽÙ…ÙŽØ§ÙˆÙŽØ§ØªÙ ÙˆÙŽÙ…ÙŽØ§ ÙÙÙŠ Ø§Ù„Ù’Ø£ÙŽØ±Ù’Ø¶Ù Ù…ÙŽÙ†Ù’ Ø°ÙŽØ§ Ø§Ù„Ù‘ÙŽØ°ÙÙŠ ÙŠÙŽØ´Ù’ÙÙŽØ¹Ù Ø¹ÙÙ†Ù’Ø¯ÙŽÙ‡Ù Ø¥ÙÙ„Ù‘ÙŽØ§ Ø¨ÙØ¥ÙØ°Ù’Ù†ÙÙ‡Ù ÙŠÙŽØ¹Ù’Ù„ÙŽÙ…Ù Ù…ÙŽØ§ Ø¨ÙŽÙŠÙ’Ù†ÙŽ Ø£ÙŽÙŠÙ’Ø¯ÙÙŠÙ‡ÙÙ…Ù’ ÙˆÙŽÙ…ÙŽØ§ Ø®ÙŽÙ„Ù’ÙÙŽÙ‡ÙÙ…Ù’ ÙˆÙŽÙ„ÙŽØ§ ÙŠÙØ­ÙÙŠØ·ÙÙˆÙ†ÙŽ Ø¨ÙØ´ÙŽÙŠÙ’Ø¡Ù Ù…ÙÙ†Ù’ Ø¹ÙÙ„Ù’Ù…ÙÙ‡Ù Ø¥ÙÙ„Ù‘ÙŽØ§ Ø¨ÙÙ…ÙŽØ§ Ø´ÙŽØ§Ø¡ÙŽ ÙˆÙŽØ³ÙØ¹ÙŽ ÙƒÙØ±Ù’Ø³ÙÙŠÙ‘ÙÙ‡Ù Ø§Ù„Ø³Ù‘ÙŽÙ…ÙŽØ§ÙˆÙŽØ§ØªÙ ÙˆÙŽØ§Ù„Ù’Ø£ÙŽØ±Ù’Ø¶ÙŽ ÙˆÙŽÙ„ÙŽØ§ ÙŠÙŽØ¦ÙÙˆØ¯ÙÙ‡Ù Ø­ÙÙÙ’Ø¸ÙÙ‡ÙÙ…ÙŽØ§ ÙˆÙŽÙ‡ÙÙˆÙŽ Ø§Ù„Ù’Ø¹ÙŽÙ„ÙÙŠÙ‘Ù Ø§Ù„Ù’Ø¹ÙŽØ¸ÙÙŠÙ…Ù ', 'ALLAHU LAA ILAAHA ILLA HUWAL HAYYUL QAYYUMU. LAA TA’KHUDZUHUU SINATUW WA  LAA NAUUM. LAHUU MAA FISSAMAAWAATI WA MAA FIL ARDHI. MAN DZAL LADZII  YASFA’U ‘INDAHUU ILLAA BI IDZNIHI. YA’LAMU MAA BAINA AIDIIHIM WA MAA  KHALFAHUM. WA LAA YUHITHUUNA BI SYAI-IN MIN ‘ILMIHII ILLAA BI MAASYAA-A.  WASI’A KURSIYYUHUSSAMAAWAATI WAL ARDHA. WA LAA YA-UDHUU HIFZHUHUMAA  WAHUWAL ‘ALIYYUL AZHIIM', 'Allah,  tidak ada Tuhan (yang berhak disembah) melainkan Dia Yang Hidup kekal  lagi terus menerus mengurus (makhluk-Nya); tidak mengantuk dan tidak  tidur. Kepunyaan-Nya apa yang di langit dan di bumi. Tiada yang dapat  memberi syafa''at di sisi Allah tanpa izin-Nya? Allah mengetahui apa-apa  yang di hadapan mereka dan di belakang mereka, dan mereka tidak  mengetahui apa-apa dari ilmu Allah melainkan apa yang dikehendaki-Nya.  Kursi Allah meliputi langit dan bumi. Dan Allah tidak merasa berat  memelihara keduanya, dan Allah Maha Tinggi lagi Maha Besar.', 'Allah , there is no god (worthy of worship ) but He , the Living, the Eternal slumber ( creature - his ) ; Neither slumber nor sleep . Belonging - things in heaven and in earth . No one can intercede with Allah without permission - Him? God knows what - what''s in front of them and behind them , and they do not know what - what of His knowledge except what He - He. Seat embraces the heavens and the earth . And God does not feel heavy preserving them , and Allah Most High, Most Great.', '2017-03-14 10:55:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hadist`
--

CREATE TABLE `hadist` (
  `id_hadist` int(5) UNSIGNED ZEROFILL NOT NULL,
  `judul` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `indo` text NOT NULL,
  `inggris` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hadist`
--

INSERT INTO `hadist` (`id_hadist`, `judul`, `oleh`, `isi`, `indo`, `inggris`, `created_at`, `updated_at`) VALUES
(00002, 'Haram memakai cincin emas dan sutra bagi laki-laki', 'Bukhari,muslim', 'Ø¹ÙŽÙ†Ù’ Ø¹ÙŽÙ„ÙÙŠÙ‘Ù Ø±ÙŽØ¶ÙÙŠÙŽ Ø§Ù„Ù„Ù‘ÙŽÙ‡Ù Ø¹ÙŽÙ†Ù’Ù‡Ù Ù‚ÙŽØ§Ù„ÙŽ\r\nØ£ÙŽÙ‡Ù’Ø¯ÙŽÙ‰ Ø¥ÙÙ„ÙŽÙŠÙ‘ÙŽ Ø§Ù„Ù†Ù‘ÙŽØ¨ÙÙŠÙ‘Ù ØµÙŽÙ„Ù‘ÙŽÙ‰ Ø§Ù„Ù„Ù‘ÙŽÙ‡Ù Ø¹ÙŽÙ„ÙŽÙŠÙ’Ù‡Ù ÙˆÙŽØ³ÙŽÙ„Ù‘ÙŽÙ…ÙŽ Ø­ÙÙ„Ù‘ÙŽØ©ÙŽ Ø³ÙÙŠÙŽØ±ÙŽØ§Ø¡ÙŽ ÙÙŽÙ„ÙŽØ¨ÙØ³Ù’ØªÙÙ‡ÙŽØ§ ÙÙŽØ±ÙŽØ£ÙŽÙŠÙ’ØªÙ Ø§Ù„Ù’ØºÙŽØ¶ÙŽØ¨ÙŽ ÙÙÙŠ ÙˆÙŽØ¬Ù’Ù‡ÙÙ‡Ù ÙÙŽØ´ÙŽÙ‚ÙŽÙ‚Ù’ØªÙÙ‡ÙŽØ§ Ø¨ÙŽÙŠÙ’Ù†ÙŽ Ù†ÙØ³ÙŽØ§Ø¦ÙÙŠ', ' Ali r.a. berkata: Nabi saw memberiku hadiah kain dari sutra, lalu aku memakainya, tiba-tiba aku melihat kemarahan di wajah Nabi saw., lalu  aku bagi-bagikan kepada istriku', 'Ali r.a. said: The Prophet gave me a gift of a silk fabric, and then I wore it, suddenly I saw anger in the face of the Prophet, and then I was distributing to my wife', '2017-03-14 09:46:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribe`
--

CREATE TABLE `subscribe` (
  `id_email` int(5) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subscribe`
--

INSERT INTO `subscribe` (`id_email`, `email`) VALUES
(00001, 'alfaritsiiham@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surah`
--

CREATE TABLE `surah` (
  `id_surah` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nama_tabel` varchar(100) NOT NULL,
  `nama_surah` varchar(100) NOT NULL,
  `jumlah_ayat` int(11) NOT NULL,
  `jenis_surah` varchar(100) NOT NULL,
  `arti_surah` varchar(100) NOT NULL,
  `cerita_dibalik` text NOT NULL,
  `gbr_surah` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surah`
--

INSERT INTO `surah` (`id_surah`, `nama_tabel`, `nama_surah`, `jumlah_ayat`, `jenis_surah`, `arti_surah`, `cerita_dibalik`, `gbr_surah`, `created_at`, `updated_at`) VALUES
(00001, 'alfatihah', 'Surah Al-Fatihah', 7, 'Makiyyah', 'Pembukaan', 'Surat al-Fatihah adalah surat pembuka dari 114 surat yang terdapat di dalam al-Qur''an. Surat ini termasuk surat Makkiyah karena diturunkan di Makkah, saat Nabi Muhammad Saw. belum hijrah ke Madinah. Surat al-Fatihah memiliki banyak nama lain, seperti Ummul Qur''an, Suratus Syifa'', Suratus Syafiyah, Suratud Du''a, Suratut Thalab, Suratus Su''al, Suratut Ta''limil Ma''salah, Suratul Mujziyah, dan lain sebagainya.', '', '2017-03-11 13:28:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_akun` int(5) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_akun`, `username`, `password`, `nama`, `created_at`, `updated_at`) VALUES
(00001, 'user', 'user', 'Ini User', '2017-03-13 04:37:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `website`
--

CREATE TABLE `website` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nama_web` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `website`
--

INSERT INTO `website` (`id`, `nama_web`, `logo`) VALUES
(00001, 'Assalamualaikum', 'logo-kD0khh77.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id_config`);

--
-- Indexes for table `dakwah`
--
ALTER TABLE `dakwah`
  ADD PRIMARY KEY (`id_dakwah`);

--
-- Indexes for table `doa`
--
ALTER TABLE `doa`
  ADD PRIMARY KEY (`id_doa`);

--
-- Indexes for table `hadist`
--
ALTER TABLE `hadist`
  ADD PRIMARY KEY (`id_hadist`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `surah`
--
ALTER TABLE `surah`
  ADD PRIMARY KEY (`id_surah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dakwah`
--
ALTER TABLE `dakwah`
  MODIFY `id_dakwah` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doa`
--
ALTER TABLE `doa`
  MODIFY `id_doa` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hadist`
--
ALTER TABLE `hadist`
  MODIFY `id_hadist` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id_email` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surah`
--
ALTER TABLE `surah`
  MODIFY `id_surah` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_akun` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
