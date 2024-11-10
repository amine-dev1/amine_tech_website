-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 juin 2024 à 20:47
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aminetech`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom_produit`, `description`, `image`, `price`) VALUES
(1, 'Iphone 15 Pro max', 'The iPhone 15 Pro Max 256 GB in blue is a high-end smartphone from Apple featuring a 6.7-inch Super Retina XDR display, an A17 Bionic chip, an advanced triple-camera system, and a titanium design.', 'css\\iphone_15_pro_max_blue.jpg', 15499),
(2, 'Iphone 14 Pro max', 'The iPhone 14 Pro Max 256 GB in purple is a high-end smartphone from Apple featuring a 6.7-inch Super Retina XDR display, an A16 Bionic chip, an advanced triple-camera system, and a sleek design.', 'css\\iphone_14_pro_max_violet.jpeg', 14990),
(3, 'Iphone 14 Normal', 'The iPhone 14 features groundbreaking advancements, boasting a sleek design, powerful A16 chip, immersive ProMotion display, enhanced camera system, and expanded 256GB storage for seamless performance and boundless creativity.', 'css\\iphone_14.jpeg', 13000),
(4, 'Iphone 15 Normal', 'The iPhone 15, boasting 256GB storage, revolutionizes professional mobility with its A17 chip, ProMotion display, advanced camera system, and seamless productivity integration.', 'css\\iphone_15.jpeg', 10990),
(5, 'MacBook Air M2 (13 inches)', 'Redesigned around the next-generation M2 chip, the MacBook Air combines incredible slimness, lightning-fast power, and exemplary energy efficiency in an ultra-durable all-aluminum enclosure. It goes everywhere, does everything, and allows you to work, pla', 'css\\macbook_air.jpg', 15990),
(6, 'MacBook Pro 16 inches (Puce M1 Pro)', 'The M1 Pro or M1 Max chip  with lightning-fast speed  for exceptional performance and incredible battery life. A stunning Liquid Retina XDR display and all the ports you need. The laptop you ve been waiting for has arrived', 'css\\macbook_pro.jpeg', 29990),
(7, 'iMac 24 Pouces (Puce M1)', 'The iMac 24-inch (Puce M1) is a computer made by Apple. It was released in 2020 and is powered by the M1 chip, which is a new type of processor that Apple has developed. The iMac 24-inch (Puce M1) is a desktop computer that is designed to be used with a m', 'css\\imac24pcs.jpeg', 17990),
(8, 'Studio Display 27 Pouces 5K - Verre standard - Inclinaison', 'The Studio Display is a 27-inch 5K monitor from Apple, with a standard glass screen and an adjustable stand. It has a high resolution of 5120 x 3072 pixels and supports a wide range of color gamuts, including P3 and ProPhoto RGB. The stand is designed to ', 'css\\studiodisp.jpeg', 21990),
(9, 'Apple Watch SE 2', 'Your ultimate partner just got even better. Temperature sensor◊See legal for a more comprehensive view of women\'s health◊See legal. Accident detection to call for help in emergencies. Sleep stages for a better understanding of your sleep cycles◊See legal.', 'css\\appwatch_se.jpeg', 2990),
(10, 'Apple Watch Series 8', 'Your ultimate partner just got even better. Temperature sensor◊See legal for a more comprehensive view of women\'s health◊See legal. Accident detection to call for help in emergencies. Sleep stages for a better understanding of your sleep cycles◊See legal.', 'css\\applewatch_8.jpeg', 3990),
(11, 'Apple Watch Ultra 2 GPS + Cellular Titanium Case', 'The Apple Watch Ultra 2 GPS + Cellular Titanium Case is a high-end smartwatch that combines advanced features with sleek, durable design. Here are some important things to know about this watch:It features two GPS+Cellular models that allow you to receive', 'css\\applewatchultra.jpg', 10990),
(12, 'Apple Watch Series 9 Alluminium 45mm', 'The Apple Watch Series 9 offers various features, including heart rate monitoring, workout tracking, GPS navigation, and the ability to receive notifications from your phone. It is available in a range of colors and materials, including aluminum. The 45mm', 'css\\applewatch9.jpg', 5849),
(13, 'Apple Watch Series 9 Alluminium 41mm', 'The Apple Watch Series 9 is a smartwatch released in September 2015. It is available in 38mm and 41mm sizes, with an aluminum case option. It features a Retina HD display, protected by scratch-resistant sapphire crystal, and runs on the watchOS 1 operatin', 'css\\applewatch941.jpg', 5490),
(14, 'Apple AirPods Max', 'Apple AirPods Max is the latest wireless noise-canceling earbuds released by Apple in 2019. It features a large 49mm driver with Apple Vision Pro during optical and AR content, a customizable fit design, an elevated bass and clear mids, a 5-hour battery l', 'css\\appleairpodsmax.jpeg', 6990),
(15, 'AirPods Pro (2nd Generation)', 'The AirPods Pro (2nd Generation) is a pair of wireless earbuds developed by Apple. They were released in October 2019 and are available in four colors: White, Black, Green, and Blue. Some of the features of the AirPods Pro include active noise cancellatio', 'css\\airpods1.jpeg', 2990),
(16, 'Apple AirPods 3', 'The Apple AirPods 3 is a wireless noise-canceling earbud with a heart rate sensor. It was released in October 2018 and features include Touch ID controls, AirPods case that doubles as a wireless charging base, and a battery life of up to 5 hours. The earb', 'css\\apple-airpods-3-gen-uno-maroc3.jpeg', 2590),
(17, 'Apple TV 4K (2022) Wi-Fi', 'The Apple TV 4K (2022) is a media streaming device developed by Apple. It supports 4K resolution and comes with built-in Wi-Fi. The device allows you to stream content from your Apple ID account, as well as from other popular streaming services such as Ne', 'css\\appletv.jpeg', 2590),
(18, 'iPad Pro 12.9 Inch (M2 Chip)', 'The iPad Pro 12.9 inch (M2 chip) is the latest offering from Apple. It features a powerful M2 chip that delivers incredible performance and efficiency. The device also comes with a high-resolution 12.9-inch display, Wi-Fi 6, and a range of connectivity op', 'css\\ipad12.jpeg', 17990),
(19, 'iPad Pro 11 Inch (M2 Chip)', 'The iPad Pro 11 inch (M2 chip) is the latest offering from Apple. It features a powerful M2 chip that delivers incredible performance and efficiency. The device also comes with a high-resolution 12.9-inch display, Wi-Fi 6, and a range of connectivity opti', 'css\\ipad11.jpeg', 11990),
(20, 'iPad Air 2022 10.9 Inch (M1 Chip)', 'The iPad Air 2022 is an Apple device introduced in 2021 featuring a 10.9-inch display and the M1 chip, which delivers improved speed and efficiency. It runs on Apple\'s iPadOS operating system and is available in various storage and connectivity options. T', 'css\\ipad10.jpeg', 8990);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
