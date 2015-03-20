-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 20 Mar 2015 pada 16.02
-- Versi Server: 5.5.41-0ubuntu0.14.04.1
-- Versi PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `kios`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_account`
--

CREATE TABLE IF NOT EXISTS `member_account` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` tinytext NOT NULL,
  `city` varchar(30) NOT NULL,
  `postalcode` varchar(8) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `member_account`
--

INSERT INTO `member_account` (`ID`, `user_id`, `fullname`, `address`, `city`, `postalcode`, `status`) VALUES
(1, 1, 'rohman', 'jalan simpang sulfat utara', 'mlg', '68142', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metas`
--

CREATE TABLE IF NOT EXISTS `metas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `default_meta` text NOT NULL,
  `fb_meta` text NOT NULL,
  `twt_meta` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `metas`
--

INSERT INTO `metas` (`ID`, `page_id`, `name`, `default_meta`, `fb_meta`, `twt_meta`) VALUES
(1, 1, 'HOME', '{"title":"Home - kios27","description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga! ","keywords":"kios,cara-membuat-online-shop,cara-membuat-toko-online-gratis,online-shop-gratis,jasa-seo-murah,jasa-buat-website","author":"kios27","robots":"follow"}', '{"og_title":"Membuat toko online gratis - kios27","og_type":"website","og_image":"http:\\/\\/localhost\\/DEV\\/front\\/index.php\\/assets\\/images\\/profile_pic\\/kios.png","og_url":"http:\\/\\/www.kios27.com/front","og_site_name":"kios27","og_description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga!"}', '{"twitter_card":"this is title","twitter_url":"http:\\/\\/www.kios27.com/front","twitter_title":"Membuat Toko online gratis - kios27","twitter_description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga!","twitter_image":"this is title"}'),
(2, 2, 'SHOP LIST', '{"title":"Home - kios27","description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga! ","keywords":"kios,cara-membuat-online-shop,cara-membuat-toko-online-gratis,online-shop-gratis,jasa-seo-murah,jasa-buat-website","author":"kios27","robots":"follow"}', '{"og_title":"Membuat toko online gratis - kios27","og_type":"website","og_image":"http:\\/\\/localhost\\/DEV\\/front\\/index.php\\/assets\\/images\\/profile_pic\\/kios.png","og_url":"http:\\/\\/www.kios27.com/front","og_site_name":"kios27","og_description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga!"}', '{"twitter_card":"this is title","twitter_url":"http:\\/\\/www.kios27.com/front","twitter_title":"Membuat Toko online gratis - kios27","twitter_description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga!","twitter_image":"this is title"}'),
(3, 3, 'BLOG', '{"title":"Home - kios27","description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga! ","keywords":"kios,cara-membuat-online-shop,cara-membuat-toko-online-gratis,online-shop-gratis,jasa-seo-murah,jasa-buat-website","author":"kios27","robots":"follow"}', '{"og_title":"Membuat toko online gratis - kios27","og_type":"website","og_image":"http:\\/\\/localhost\\/DEV\\/front\\/index.php\\/assets\\/images\\/profile_pic\\/kios.png","og_url":"http:\\/\\/www.kios27.com/front","og_site_name":"kios27","og_description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga!"}', '{"twitter_card":"this is title","twitter_url":"http:\\/\\/www.kios27.com/front","twitter_title":"Membuat Toko online gratis - kios27","twitter_description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga!","twitter_image":"this is title"}'),
(4, 4, 'Contact Us', '{"title":"Home - kios27","description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga! ","keywords":"kios,cara-membuat-online-shop,cara-membuat-toko-online-gratis,online-shop-gratis,jasa-seo-murah,jasa-buat-website","author":"kios27","robots":"follow"}', '{"og_title":"Membuat toko online gratis - kios27","og_type":"website","og_image":"http:\\/\\/localhost\\/DEV\\/front\\/index.php\\/assets\\/images\\/profile_pic\\/kios.png","og_url":"http:\\/\\/www.kios27.com/front","og_site_name":"kios27","og_description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga!"}', '{"twitter_card":"this is title","twitter_url":"http:\\/\\/www.kios27.com/front","twitter_title":"Membuat Toko online gratis - kios27","twitter_description":"Daftar dan buat website toko online gratis dengan kapasitas penyimpanan hingga 1 Gb didukung dengan SEO yang Friendly. Daftar Sekarang juga!","twitter_image":"this is title"}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`ID`, `title`, `content`, `status`) VALUES
(1, 'HOME', 'sadas', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `store_list`
--

CREATE TABLE IF NOT EXISTS `store_list` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `store_url` varchar(150) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `store_list`
--

INSERT INTO `store_list` (`ID`, `user_id`, `store_url`, `status`) VALUES
(1, 1, 'kios', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `user_verification` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `user_verification`, `status`) VALUES
(1, 'rohman', 'masuk', 'de8e0325cf9e6302a35dd72a5bff3ff0', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
