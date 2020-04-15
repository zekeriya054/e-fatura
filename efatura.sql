-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Şub 2020, 23:34:55
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `efatura`
--
CREATE DATABASE IF NOT EXISTS `efatura` DEFAULT CHARACTER SET latin5 COLLATE latin5_turkish_ci;
USE `efatura`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bankalar`
--

DROP TABLE IF EXISTS `bankalar`;
CREATE TABLE IF NOT EXISTS `bankalar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banka_ad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `bankalar`
--

INSERT INTO `bankalar` (`id`, `banka_ad`) VALUES
(1, 'Ziraat Bankası'),
(2, 'Vakıfbank'),
(3, 'Denizbank'),
(4, 'İş Bankası'),
(5, 'Halkbank'),
(6, 'Garanti Bankası');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tahsilat`
--

DROP TABLE IF EXISTS `tahsilat`;
CREATE TABLE IF NOT EXISTS `tahsilat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `borclu` varchar(30) NOT NULL,
  `banka` varchar(50) NOT NULL,
  `icra_dairesi` varchar(5) NOT NULL,
  `icra_numarasi` varchar(20) NOT NULL,
  `urun_numarasi` varchar(20) NOT NULL,
  `yatirilan_miktar` decimal(10,0) NOT NULL,
  `tarih` date NOT NULL,
  `tahsil_eden` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tahsilat`
--

INSERT INTO `tahsilat` (`id`, `borclu`, `banka`, `icra_dairesi`, `icra_numarasi`, `urun_numarasi`, `yatirilan_miktar`, `tarih`, `tahsil_eden`) VALUES
(1, 'Ali', 'İş Bankası', '5', '1', '100', '5000', '2020-10-29', 'Mustafa Kaya'),
(2, 'Veli', 'Halkbank', '4', '2', '233', '34560', '2020-08-19', 'Ercan Yolcu'),
(3, 'Hüseyin', 'İş Bankası', '1', '455', '999', '5000', '2020-01-02', 'Ercan Yolcu'),
(4, 'mustafa', 'Denizbank', '4', '3', '1000', '2900', '2020-01-24', 'Ahmet Küçük'),
(5, 'murtaza', 'Vakıfbank', '1', '234', '43243', '5500', '2017-11-24', 'Ahmet Küçük'),
(6, 'Veli', 'Vakıfbank', '2', '1', '233', '5000', '2019-11-30', 'Ahmet Küçük'),
(7, 'Ali', 'İş Bankası', '5', '1', '500', '5000', '2020-02-01', 'Ercan Yolcu'),
(11, 'murtaza', 'Ziraat Bankası', '2', '1', '100', '5000', '2010-01-01', 'Ahmet Küçük'),
(12, 'Hüseyin', 'Vakıfbank', '1', '1', '100', '5000', '2020-11-30', 'Ahmet Küçük'),
(21, 'Ali', 'Vakıfbank', '2', '3', '233', '34560', '2003-11-30', 'Mustafa Kaya'),
(22, 'Ali', 'Vakıfbank', '3', '1', '100', '34560', '2020-01-24', 'errr'),
(24, 'Veli', 'Halkbank', '7', '2', '100', '6500', '2020-01-25', 'Mustafa Kaya'),
(25, 'Hüseyin', 'Vakıfbank', '1', '1', '233', '6500', '2020-01-22', 'Mustafa Kaya'),
(26, 'Hüseyin', 'Ziraat Bankası', '3', '3', '233', '5000', '2020-01-30', 'Ahmet Küçük'),
(27, 'Hüseyin', 'Vakıfbank', '2', '3', '100', '5000', '2020-01-30', 'Ahmet Küçük'),
(28, 'murtaza', 'Halkbank', '3', '3', '1000', '5000', '2020-01-28', 'Ercan Yolcu'),
(29, 'Hüseyin', 'Ziraat Bankası', '3', '234', '100', '5000', '2020-01-20', 'Mustafa Kaya'),
(30, 'Ali', 'İş Bankası', '6', '234', '155', '134', '2020-01-30', 'Ahmet Küçük'),
(31, 'Hüseyin', 'Ziraat Bankası', '2', '3', '100', '134', '2020-01-30', 'Mustafa Kaya'),
(32, 'Hüseyin', 'Ziraat Bankası', '1', '1', '100', '5500', '2020-01-30', 'Ercan Yolcu'),
(33, 'deneme', 'Denizbank', '3', '4', '34', '500', '2020-01-30', 'Mustafa Kaya'),
(35, 'Hüseyin', 'Ziraat Bankası', '2', '2', '233', '6500', '2020-01-31', 'Mustafa Kaya'),
(36, 'Hüseyin', 'Vakıfbank', '1', '3', '100', '5000', '2020-01-29', 'Ercan Yolcu'),
(37, 'Hüseyin', 'Vakıfbank', '2', '1', '233', '134', '2020-01-31', 'Mustafa Kaya'),
(38, 'Hüseyin', 'Ziraat Bankası', '3', '1', '100', '5000', '2020-01-31', 'Ahmet Küçük'),
(39, 'ali', 'Vakıfbank', '2', '3', '3', '4', '2020-02-02', 'Ahmet Küçük'),
(40, 'aa', 'Denizbank', '3', '4', '5', '4', '2020-02-02', 'Ahmet Küçük'),
(41, 'Hüseyin', 'Vakıfbank', '2', '5', '5', '6500', '2020-02-02', 'Mustafa Kaya'),
(42, 'Hüseyin', 'Ziraat Bankası', '3', '3', '100', '5000', '2020-02-02', 'Ahmet Küçük'),
(43, 'Cahit', 'Garanti Bankası', '10', '100', '100', '100', '2020-02-02', 'Ahmet Küçük'),
(100, 'Mahmut', 'Garanti Bankası', '3', '190', '19999', '5400', '2020-02-05', 'Ahmet Küçük');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tahsildar`
--

DROP TABLE IF EXISTS `tahsildar`;
CREATE TABLE IF NOT EXISTS `tahsildar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tahsildar`
--

INSERT INTO `tahsildar` (`id`, `ad`) VALUES
(1, 'Ahmet Küçük'),
(2, 'Mustafa Kaya'),
(3, 'Ercan Yolcu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
