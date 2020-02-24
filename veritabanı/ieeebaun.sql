-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Ara 2019, 20:32:22
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ieeebaun`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlik`
--

CREATE TABLE `etkinlik` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `ilgilikomite` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `katilimci` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `etkinlik`
--

INSERT INTO `etkinlik` (`id`, `adi`, `tarih`, `ilgilikomite`, `katilimci`) VALUES
(1, 'HTML CSS eğitimi', '2019-11-23', 'Computer Society(CS),Eğitim ve Seminer Komitesi', '49522461036'),
(2, 'java', '2019-11-07', 'Computer Society(CS)', '49522461036,123'),
(3, 'kadın iş derse', '2019-11-13', '', '123456,123'),
(4, 'su', '2019-11-19', '', '49522461036,123456,123'),
(5, 'ras workshop', '2019-11-30', 'Robotics And Automation Society (RAS),Eğitim ve Se', '123456,123,12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `komite`
--

CREATE TABLE `komite` (
  `komiteID` int(11) NOT NULL,
  `komiteAdi` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `komite`
--

INSERT INTO `komite` (`komiteID`, `komiteAdi`) VALUES
(1, 'Computer Society(CS)'),
(2, 'Robotics And Automation Society (RAS)'),
(3, 'Power And Energy(PES)'),
(4, 'Women In Engineering(WIE)'),
(5, 'Engineerin in Medicine and Biology (EMBS)'),
(6, 'Basın Ve Halkla İlişkiler'),
(7, 'Educational Activities (EA)'),
(8, 'Eğitim ve Seminer Komitesi'),
(9, 'KOK'),
(10, 'Sosyal ve Kültürel Etkinlikler'),
(11, 'Sponsorluk ve Kurumsal İlişkiler'),
(12, 'Teknik Gezi'),
(13, 'Yayın ve Tasarım');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `komiteler`
--

CREATE TABLE `komiteler` (
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `cs` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `ras` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `pes` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `wie` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `embs` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `basin` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `ea` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `egitimseminer` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `kok` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `sponsorluk` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `teknikgezi` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `yayintasarim` varchar(3) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `komiteler`
--

INSERT INTO `komiteler` (`adsoyad`, `tc`, `cs`, `ras`, `pes`, `wie`, `embs`, `basin`, `ea`, `egitimseminer`, `kok`, `sosyal`, `sponsorluk`, `teknikgezi`, `yayintasarim`) VALUES
('mehmet ilkay memur', '49522461036', 'var', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('sami kızılboğa', '123456', 'var', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('onur alican', '123', 'var', '-', '-', 'var', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('aylin kaya', '12345', '-', '-', 'var', 'var', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye_bilgiler`
--

CREATE TABLE `uye_bilgiler` (
  `sira` int(11) NOT NULL,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `bolum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sinif` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `okulno` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(5) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uye_bilgiler`
--

INSERT INTO `uye_bilgiler` (`sira`, `adsoyad`, `tc`, `eposta`, `telefon`, `bolum`, `sinif`, `okulno`, `cinsiyet`) VALUES
(1, 'mehmet ilkay memur', '49522461036', 'ilkaymemurr@gmail.com', '5464603944', 'ceng', '4', '201613709036', 'erkek'),
(2, 'sami kızılboğa', '123456', 'sami@gmail.com', '123', 'ceng', '2', '44', 'erkek'),
(3, 'onur alican', '123', 'onur@gmail.com', '5566', 'ceng', '2', '5656', 'erkek');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `etkinlik`
--
ALTER TABLE `etkinlik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `komite`
--
ALTER TABLE `komite`
  ADD PRIMARY KEY (`komiteID`);

--
-- Tablo için indeksler `uye_bilgiler`
--
ALTER TABLE `uye_bilgiler`
  ADD PRIMARY KEY (`sira`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `etkinlik`
--
ALTER TABLE `etkinlik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `komite`
--
ALTER TABLE `komite`
  MODIFY `komiteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `uye_bilgiler`
--
ALTER TABLE `uye_bilgiler`
  MODIFY `sira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
