-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Eyl 2021, 15:28:23
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ismek`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber`
--

CREATE TABLE `haber` (
  `id` int(11) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `icerik` text NOT NULL,
  `durum` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `haber`
--

INSERT INTO `haber` (`id`, `baslik`, `icerik`, `durum`) VALUES
(7, 'Deneme ', 'ewrwr', 'aktif'),
(8, 'vcbbnvbn', 'ertert', 'aktif'),
(4, 'Yeni Haberx', 'Yeni haber içeriği buradadır.', 'aktif'),
(9, 'Yeni Haberx', 'Yeni haber içeriği buradadır.', 'pasif'),
(10, 'Deneme ', 'ewrwr', 'aktif'),
(11, 'Deneme ', 'ewrwr', 'aktif'),
(12, 'Deneme ', 'ewrwr', 'aktif'),
(13, 'Yeni Haberx', 'Yeni haber içeriği buradadır.', 'aktif'),
(14, 'Yeni Haberx', 'Yeni haber içeriği buradadır.', 'aktif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumsal`
--

CREATE TABLE `kurumsal` (
  `icerik` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kurumsal`
--

INSERT INTO `kurumsal` (`icerik`) VALUES
('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haber`
--
ALTER TABLE `haber`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haber`
--
ALTER TABLE `haber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
