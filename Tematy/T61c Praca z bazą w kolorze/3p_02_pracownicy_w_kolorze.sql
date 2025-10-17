-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 17, 2025 at 11:21 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3p_02_pracownicy_w_kolorze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mock_data`
--

CREATE TABLE `mock_data` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mock_data`
--

INSERT INTO `mock_data` (`id`, `first_name`, `last_name`, `email`, `gender`, `ip_address`, `color`) VALUES
(1, 'Emile', 'Hyder', 'ehyder0@sohu.com', 'Male', '23.83.224.152', '#55678f'),
(2, 'Karola', 'Roderigo', 'kroderigo1@ebay.com', 'Female', '112.78.186.58', '#e446d1'),
(3, 'Ganny', 'Simacek', 'gsimacek2@msn.com', 'Male', '2.61.109.180', '#a77d80'),
(4, 'Jeri', 'Filyakov', 'jfilyakov3@unc.edu', 'Female', '132.218.57.28', '#a1c37f'),
(5, 'Emmye', 'Caldaro', 'ecaldaro4@irs.gov', 'Female', '16.217.134.94', '#46a9ec'),
(6, 'Theadora', 'Wigglesworth', 'twigglesworth5@com.com', 'Female', '147.155.30.34', '#f54b3e'),
(7, 'Drusie', 'Stocking', 'dstocking6@army.mil', 'Genderfluid', '65.118.122.5', '#873edb'),
(8, 'Earl', 'Fozzard', 'efozzard7@stumbleupon.com', 'Male', '155.60.108.229', '#ea090c'),
(9, 'Cristen', 'Husher', 'chusher8@ed.gov', 'Female', '79.107.25.44', '#af9b1c'),
(10, 'Rudiger', 'Lister', 'rlister9@simplemachines.org', 'Male', '67.95.199.130', '#091435'),
(11, 'Gaylene', 'Blenkharn', 'gblenkharna@cnn.com', 'Female', '28.241.44.225', '#268ea8'),
(12, 'Minnie', 'Mauchlen', 'mmauchlenb@ox.ac.uk', 'Female', '219.77.208.55', '#89f547'),
(13, 'Theresita', 'Jewar', 'tjewarc@angelfire.com', 'Female', '64.231.18.48', '#d716ee'),
(14, 'Lucius', 'Anchor', 'lanchord@wordpress.org', 'Male', '45.171.231.138', '#a46883'),
(15, 'Glynnis', 'Beedom', 'gbeedome@arizona.edu', 'Female', '96.121.199.59', '#90da5a'),
(16, 'Janaye', 'Siney', 'jsineyf@creativecommons.org', 'Female', '189.150.196.59', '#5accee'),
(17, 'Bart', 'Stopp', 'bstoppg@imageshack.us', 'Male', '152.87.105.20', '#8683b2'),
(18, 'Jo', 'Reuter', 'jreuterh@fotki.com', 'Male', '146.59.208.117', '#388de8'),
(19, 'Louisa', 'MacAllaster', 'lmacallasteri@nydailynews.com', 'Female', '52.207.172.144', '#09b58a'),
(20, 'Robinett', 'Korlat', 'rkorlatj@quantcast.com', 'Female', '243.165.198.157', '#01b588'),
(21, 'Tadd', 'Weeks', 'tweeksk@whitehouse.gov', 'Male', '20.184.15.89', '#af4626'),
(22, 'Shanda', 'MacKerley', 'smackerleyl@squidoo.com', 'Female', '163.125.45.66', '#554ced'),
(23, 'Garvey', 'Mathelin', 'gmathelinm@moonfruit.com', 'Male', '97.138.155.14', '#df8a26'),
(24, 'Isabeau', 'O\'Bradane', 'iobradanen@house.gov', 'Female', '16.3.11.191', '#e24f1b'),
(25, 'Godwin', 'Pickworth', 'gpickwortho@live.com', 'Male', '18.153.128.56', '#364d1a'),
(26, 'Dar', 'Eayres', 'deayresp@bbc.co.uk', 'Male', '30.138.137.125', '#6246a6'),
(27, 'Con', 'Huggens', 'chuggensq@wix.com', 'Female', '227.170.37.63', '#c35908'),
(28, 'Jacquenetta', 'Lorente', 'jlorenter@tamu.edu', 'Female', '184.194.255.112', '#30566e'),
(29, 'Ives', 'Sager', 'isagers@ebay.com', 'Male', '38.166.29.107', '#6cb5dc'),
(30, 'Morse', 'Walter', 'mwaltert@senate.gov', 'Male', '178.4.25.46', '#2c25de'),
(31, 'Cornelia', 'MacNeilly', 'cmacneillyu@arstechnica.com', 'Female', '233.225.182.172', '#ac47a5'),
(32, 'Nigel', 'Witty', 'nwittyv@github.com', 'Male', '239.9.13.185', '#ae18cc'),
(33, 'Tadeo', 'Flay', 'tflayw@dion.ne.jp', 'Male', '47.35.27.158', '#9fa210'),
(34, 'Rossy', 'Bondy', 'rbondyx@feedburner.com', 'Male', '248.118.193.98', '#eef521'),
(35, 'Adele', 'Trethewey', 'atretheweyy@tiny.cc', 'Female', '227.142.116.130', '#7360a2'),
(36, 'Tanitansy', 'Finnan', 'tfinnanz@360.cn', 'Female', '151.123.81.105', '#77e19c'),
(37, 'Brade', 'Kuhnwald', 'bkuhnwald10@deviantart.com', 'Male', '214.212.67.132', '#7430da'),
(38, 'Tadd', 'Bridal', 'tbridal11@usa.gov', 'Male', '181.27.246.15', '#a90540'),
(39, 'Ramon', 'Cromblehome', 'rcromblehome12@aboutads.info', 'Male', '100.27.79.143', '#215608'),
(40, 'Dillie', 'Alfonsetto', 'dalfonsetto13@cornell.edu', 'Male', '42.0.139.183', '#631a4f'),
(41, 'Kerri', 'Ricciardello', 'kricciardello14@pinterest.com', 'Female', '135.201.85.117', '#60f2d7'),
(42, 'Tansy', 'Hince', 'thince15@nsw.gov.au', 'Female', '64.50.187.254', '#b52104'),
(43, 'Bethena', 'Huffey', 'bhuffey16@paginegialle.it', 'Bigender', '59.144.104.106', '#fe482d'),
(44, 'Aryn', 'Micco', 'amicco17@wordpress.com', 'Female', '234.4.62.78', '#964da6'),
(45, 'Rory', 'Sedger', 'rsedger18@noaa.gov', 'Female', '0.50.64.45', '#6cbe52'),
(46, 'Delano', 'Heathfield', 'dheathfield19@time.com', 'Male', '180.24.13.153', '#320c23'),
(47, 'Jania', 'Petrulis', 'jpetrulis1a@princeton.edu', 'Female', '104.123.10.162', '#83b641'),
(48, 'Mikaela', 'Beadman', 'mbeadman1b@msn.com', 'Female', '181.67.42.120', '#9662af'),
(49, 'Alister', 'Tofanelli', 'atofanelli1c@over-blog.com', 'Male', '201.112.245.245', '#692f23'),
(50, 'Mallory', 'Althorp', 'malthorp1d@bloglovin.com', 'Female', '82.30.234.238', '#2b62f9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
