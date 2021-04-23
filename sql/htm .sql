-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Nis 2021, 13:13:06
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `htm`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_me`
--

CREATE TABLE `about_me` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitch` varchar(50) NOT NULL,
  `biyografi` varchar(250) NOT NULL,
  `picturee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `about_me`
--

INSERT INTO `about_me` (`about_id`, `about_title`, `github`, `twitter`, `youtube`, `instagram`, `facebook`, `twitch`, `biyografi`, `picturee`) VALUES
(1, 'Hakkımda', 'oguzhan-solmaz', 'oguzhansolmaz20', 'UCrm9kPTkH30kjhCnUqICDvw', 'oguz_solmaz', 'oguzhan.solmaz.353', 'redpappers', 'Merhaba ben Oğuzhan Solmaz 21 yaşındayım malatyada yaşıyorum. İnönü Üniversitesi Bilgisayar Mühendisliği bölümü birinci sınıf öğrencisiyim. Boş zamanlarımda kitap okumak, film izlemek ve oyun oynamaktan keyif alıyorum.', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `gsm` int(11) NOT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact_info`
--

INSERT INTO `contact_info` (`contact_id`, `content`, `email`, `copyright`, `gsm`, `adress`) VALUES
(1, 'İletişim Bilgilerim', 'oguzhan_solmazzz@hotmail.com', 'OGUZ', 2147483647, 'CENGİZ TOPEL Caddesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `education_info`
--

CREATE TABLE `education_info` (
  `edu_title` varchar(50) NOT NULL,
  `edu_id` int(11) NOT NULL,
  `high_school` varchar(150) NOT NULL,
  `universty` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `education_info`
--

INSERT INTO `education_info` (`edu_title`, `edu_id`, `high_school`, `universty`) VALUES
('Eğitim Bilgilerim', 1, 'Cumhuriyet Anadolu Lisesi', 'İnönü Üniversitesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_settings`
--

CREATE TABLE `site_settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `site_settings`
--

INSERT INTO `site_settings` (`settings_id`, `site_title`, `title`, `subtitle`) VALUES
(1, 'benim projem', 'Oğuzhan Solmaz', 'Merhaba ben Oğuzhan Solmaz. İnönü Üniversitesinde birinci sınıf, Bilgisayar Mühendisliği öğrencisiyim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `forth_skill` varchar(50) NOT NULL,
  `fifth_skill` varchar(50) NOT NULL,
  `sixth_skill` varchar(50) NOT NULL,
  `first_counter` varchar(10) NOT NULL,
  `second_counter` varchar(10) NOT NULL,
  `third_counter` varchar(10) NOT NULL,
  `forth_counter` varchar(10) NOT NULL,
  `fifth_counter` varchar(10) NOT NULL,
  `sixth_counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `skills`
--

INSERT INTO `skills` (`skill_id`, `title`, `first_skill`, `second_skill`, `third_skill`, `forth_skill`, `fifth_skill`, `sixth_skill`, `first_counter`, `second_counter`, `third_counter`, `forth_counter`, `fifth_counter`, `sixth_counter`) VALUES
(1, 'acıklama1', 'javaa', 'html', 'css', 'c', 'matlab', 'phytonn', '70', '50', '40', '70', '10', '10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(42, 'oğuzhan', 'oguzhan_solmazz@hotmail.com', '158520161');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `education_info`
--
ALTER TABLE `education_info`
  ADD PRIMARY KEY (`edu_id`);

--
-- Tablo için indeksler `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_me`
--
ALTER TABLE `about_me`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `education_info`
--
ALTER TABLE `education_info`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
