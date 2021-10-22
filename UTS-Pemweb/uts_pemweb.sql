-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table uts_pemweb.about
CREATE TABLE IF NOT EXISTS `about` (
  `Name` varchar(50) DEFAULT NULL,
  `Age` varchar(50) DEFAULT NULL,
  `Birthday` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Nationality` varchar(50) DEFAULT NULL,
  `text` text,
  `text2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.about: ~1 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`Name`, `Age`, `Birthday`, `City`, `Nationality`, `text`, `text2`) VALUES
	('Muhammad Bagoes Wicaksono', '20', '11 August 2001', 'Tangerang Selatan', 'Indonesia', 'Hello! My name is Muhammad Bagoes Wicaksono, i\'m currently attending college and majoring in computer science at Pembangunan Jaya University. I love designing and my dream is to become a game developer and build my own game studio!', 'I love design ever since I learned how to use illustrator, changing colors and making shapes for the first time was so much fun!');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;

-- Dumping structure for table uts_pemweb.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `Location` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Call` varchar(50) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`Location`, `Email`, `Call`, `text`) VALUES
	('Paradise Serpong City, South Tangerang', 'usernamewicak@gmail.com', '0856915917915', 'Here is my contact and address, Let\'s talk and be business partners!');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table uts_pemweb.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `text` text,
  `photo1` text,
  `photo2` text,
  `photo3` text,
  `photo4` text,
  `photo5` text,
  `photo6` text,
  `photo7` text,
  `photo8` text,
  `photo9` text,
  `photo10` text,
  `text2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.gallery: ~1 rows (approximately)
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` (`text`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `photo7`, `photo8`, `photo9`, `photo10`, `text2`) VALUES
	('You can contact me by clicking down below , thank you!', 'assets/img/portfolio/Soeguss.png', 'assets/img/portfolio/Snorlax.jpg', 'assets/img/portfolio/Violo.jpg', 'assets/img/portfolio/Beach.jpg', 'assets/img/portfolio/Mochi.jpg', 'assets/img/portfolio/Pochi.jpg', 'assets/img/portfolio/mogucat.jpg', 'assets/img/portfolio/Taro.jpg', 'assets/img/portfolio/Sahara.jpg', 'assets/img/portfolio/Worklance.jpg', 'The following is a collection of my works and designs consisting of logos, vector art, and digital art. I use sofware such as figma, illustrator, and photoshop.');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;

-- Dumping structure for table uts_pemweb.photos
CREATE TABLE IF NOT EXISTS `photos` (
  `images` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.photos: ~0 rows (approximately)
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` (`images`) VALUES
	('img/pp.jpg');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;

-- Dumping structure for table uts_pemweb.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `text` text,
  `illustrator` varchar(50) DEFAULT NULL,
  `figma` varchar(50) DEFAULT NULL,
  `photoshop` varchar(50) DEFAULT NULL,
  `premier` varchar(50) DEFAULT NULL,
  `blender` varchar(50) DEFAULT NULL,
  `after` varchar(50) DEFAULT NULL,
  `text2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts_pemweb.skills: ~1 rows (approximately)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`text`, `illustrator`, `figma`, `photoshop`, `premier`, `blender`, `after`, `text2`) VALUES
	('Here are some of the software that i use to create designs and artwork', '90', '85', '70', '80', '35', '55', 'If you are interested in seeing my design and artwork please click the button down below, thank you!');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
