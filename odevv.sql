-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Haz 2021, 20:09:39
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odevv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `icerikId` int(11) NOT NULL,
  `icerik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `anaBolumIndex` int(11) NOT NULL,
  `linkId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerikId`, `icerik`, `anaBolumIndex`, `linkId`) VALUES
(1, '../resimler/logomm.png', 1, 0),
(2, 'MAVİŞ AVM', 2, 0),
(3, 'Yıldız Fırsatlar', 3, 0),
(4, 'Tüm Kampanyalar', 3, 0),
(5, 'Üye Ol', 3, 0),
(6, 'Giriş Yap', 3, 0),
(7, 'BEYAZ EŞYA', 4, 0),
(8, '<< Geri >>', 5, 1),
(9, ' Çamaşır Makinesi', 6, 0),
(10, 'Samsung WF16J6500EV/AH A+ 1200 Devir 16 kg Çamaşır Makinesi', 6, 0),
(11, 'urunler/BeyazEşya/ÇamaşırMakinasi.jpg', 6, 0),
(12, 'Yıkama Kapasitesi: 16 kg\r\n								Ses Seviyesi: 60 dB\r\n								Enerji Verimliliği Sınıfı: A++\r\n								Ürün Boyutları: 686 x 984 x 870 mm\r\n								Su Tüketimi: 16500 L', 6, 0),
(13, '9.599,00 TL', 6, 0),
(14, '8.549,05 TL', 6, 0),
(15, 'Detaylar', 6, 2),
(16, 'Bulaşık Makinası', 6, 0),
(17, 'Hotpoint Bm4260Eg A+ 4 Programlı Bulaşık MakinasıGarantili)', 6, 0),
(18, 'urunler/BeyazEşya/bulaşikmakinasi.jpg', 6, 0),
(19, 'Kapasite: 12 kişilik\r\nEnerji sınıfı: A+\r\nTest referans programı: Eko 50°C. Yıllık ortalama 280 yıkamada 290 kWh enerji tüketimi\r\nEko 50°C programında: enerji tüketimi 1.02 kWh', 6, 0),
(20, '4.499,00 TL', 6, 0),
(21, '3.599,00 TL', 6, 0),
(22, 'Detaylar', 6, 3),
(23, 'Buzdolabı', 6, 0),
(24, 'Arçelik 5088 A+++ NFGS No Frost Buzdolabı (Siyah) BUZDL-ARC-0052', 6, 0),
(25, 'urunler/BeyazEşya/buzdolabı.jpg', 6, 0),
(26, 'Toplam Hacim (L) : 532 L						Ürün Rengi : Dark Inox						FullFresh+ Teknolojisi :  nem kontrolü ve saklama koşulunu sağlayarak sebze ve meyvelerinizi 30 güne kadar taze tutar.', 6, 0),
(27, '11.299,00 TL', 6, 0),
(28, '10.699 T', 6, 0),
(29, 'Detaylar', 6, 4),
(30, 'Ankastre Set', 6, 0),
(31, 'Luxell Kristal Serisi Siyah Cam Üçlü Ankastre Set', 6, 0),
(32, 'urunler/BeyazEşya/fırın.jpg', 6, 0),
(33, '%40 Enerji Tasarrufu Sağlayan Harr Teknoloji(Hareketli Açık Rezistans)				A+ Enerji Sınıfı				4 Pişirme Fonksiyonu						Turbo Fan						Siyah Cam Panel						Ayarlanabilir Termostat Ve Zaman Ayarı', 6, 0),
(34, '1.880,00  TL', 6, 0),
(35, '1.795,21 TL', 6, 0),
(36, 'Detaylar', 6, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `linkler`
--

CREATE TABLE `linkler` (
  `linkId` int(11) NOT NULL,
  `sayfa` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `linkler`
--

INSERT INTO `linkler` (`linkId`, `sayfa`) VALUES
(1, '../anaSayfa.php'),
(2, 'samsunGçamaşırmakinası.html'),
(3, 'ProfiloBulaşıkMakinası.html'),
(4, 'ArçelikBuzdolabı.html'),
(5, 'Ankastre.html');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`icerikId`);

--
-- Tablo için indeksler `linkler`
--
ALTER TABLE `linkler`
  ADD PRIMARY KEY (`linkId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `icerikId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `linkler`
--
ALTER TABLE `linkler`
  MODIFY `linkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
