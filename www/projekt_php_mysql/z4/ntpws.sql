-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Dec 16, 2024 at 07:37 PM
-- Server version: 8.4.3
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntpws`
--

-- --------------------------------------------------------

--
-- Table structure for table `drzava`
--

CREATE TABLE `drzava` (
  `id` int NOT NULL,
  `naziv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `drzava`
--

INSERT INTO `drzava` (`id`, `naziv`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua and Barbuda'),
(7, 'Argentina'),
(8, 'Armenia'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bhutan'),
(21, 'Bolivia'),
(22, 'Bosnia and Herzegovina'),
(23, 'Botswana'),
(24, 'Brazil'),
(25, 'Brunei Darussalam'),
(26, 'Bulgaria'),
(27, 'Burkina Faso'),
(28, 'Burundi'),
(29, 'Cabo Verde'),
(30, 'Cambodia'),
(31, 'Cameroon'),
(32, 'Canada'),
(33, 'Central African Republic'),
(34, 'Chad'),
(35, 'Chile'),
(36, 'China'),
(37, 'Colombia'),
(38, 'Comoros'),
(39, 'Congo'),
(40, 'Congo (Democratic Republic of)'),
(41, 'Costa Rica'),
(42, 'Croatia'),
(43, 'Cuba'),
(44, 'Cyprus'),
(45, 'Czechia'),
(46, 'Denmark'),
(47, 'Djibouti'),
(48, 'Dominica'),
(49, 'Dominican Republic'),
(50, 'Ecuador'),
(51, 'Egypt'),
(52, 'El Salvador'),
(53, 'Equatorial Guinea'),
(54, 'Eritrea'),
(55, 'Estonia'),
(56, 'Eswatini'),
(57, 'Ethiopia'),
(58, 'Fiji'),
(59, 'Finland'),
(60, 'France'),
(61, 'Gabon'),
(62, 'Gambia'),
(63, 'Georgia'),
(64, 'Germany'),
(65, 'Ghana'),
(66, 'Greece'),
(67, 'Grenada'),
(68, 'Guatemala'),
(69, 'Guinea'),
(70, 'Guinea-Bissau'),
(71, 'Guyana'),
(72, 'Haiti'),
(73, 'Honduras'),
(74, 'Hungary'),
(75, 'Iceland'),
(76, 'India'),
(77, 'Indonesia'),
(78, 'Iran'),
(79, 'Iraq'),
(80, 'Ireland'),
(81, 'Israel'),
(82, 'Italy'),
(83, 'Jamaica'),
(84, 'Japan'),
(85, 'Jordan'),
(86, 'Kazakhstan'),
(87, 'Kenya'),
(88, 'Kiribati'),
(89, 'Korea (North)'),
(90, 'Korea (South)'),
(91, 'Kuwait'),
(92, 'Kyrgyzstan'),
(93, 'Lao PDR'),
(94, 'Latvia'),
(95, 'Lebanon'),
(96, 'Lesotho'),
(97, 'Liberia'),
(98, 'Libya'),
(99, 'Liechtenstein'),
(100, 'Lithuania'),
(101, 'Luxembourg'),
(102, 'Madagascar'),
(103, 'Malawi'),
(104, 'Malaysia'),
(105, 'Maldives'),
(106, 'Mali'),
(107, 'Malta'),
(108, 'Marshall Islands'),
(109, 'Mauritania'),
(110, 'Mauritius'),
(111, 'Mexico'),
(112, 'Micronesia'),
(113, 'Moldova'),
(114, 'Monaco'),
(115, 'Mongolia'),
(116, 'Montenegro'),
(117, 'Morocco'),
(118, 'Mozambique'),
(119, 'Myanmar'),
(120, 'Namibia'),
(121, 'Nauru'),
(122, 'Nepal'),
(123, 'Netherlands'),
(124, 'New Zealand'),
(125, 'Nicaragua'),
(126, 'Niger'),
(127, 'Nigeria'),
(128, 'North Macedonia'),
(129, 'Norway'),
(130, 'Oman'),
(131, 'Pakistan'),
(132, 'Palau'),
(133, 'Palestine'),
(134, 'Panama'),
(135, 'Papua New Guinea'),
(136, 'Paraguay'),
(137, 'Peru'),
(138, 'Philippines'),
(139, 'Poland'),
(140, 'Portugal'),
(141, 'Qatar'),
(142, 'Romania'),
(143, 'Russian Federation'),
(144, 'Rwanda'),
(145, 'Saint Kitts and Nevis'),
(146, 'Saint Lucia'),
(147, 'Saint Vincent and the Grenadines'),
(148, 'Samoa'),
(149, 'San Marino'),
(150, 'Sao Tome and Principe'),
(151, 'Saudi Arabia'),
(152, 'Senegal'),
(153, 'Serbia'),
(154, 'Seychelles'),
(155, 'Sierra Leone'),
(156, 'Singapore'),
(157, 'Slovakia'),
(158, 'Slovenia'),
(159, 'Solomon Islands'),
(160, 'Somalia'),
(161, 'South Africa'),
(162, 'South Sudan'),
(163, 'Spain'),
(164, 'Sri Lanka'),
(165, 'Sudan'),
(166, 'Suriname'),
(167, 'Sweden'),
(168, 'Switzerland'),
(169, 'Syrian Arab Republic'),
(170, 'Tajikistan'),
(171, 'Tanzania'),
(172, 'Thailand'),
(173, 'Timor-Leste'),
(174, 'Togo'),
(175, 'Tonga'),
(176, 'Trinidad and Tobago'),
(177, 'Tunisia'),
(178, 'Turkey'),
(179, 'Turkmenistan'),
(180, 'Tuvalu'),
(181, 'Uganda'),
(182, 'Ukraine'),
(183, 'United Arab Emirates'),
(184, 'United Kingdom'),
(185, 'United States of America'),
(186, 'Uruguay'),
(187, 'Uzbekistan'),
(188, 'Vanuatu'),
(189, 'Venezuela'),
(190, 'Viet Nam'),
(191, 'Yemen'),
(192, 'Zambia'),
(193, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `drzava_id` int NOT NULL,
  `grad` varchar(50) NOT NULL,
  `ulica` varchar(100) NOT NULL,
  `datum_rodjenja` date NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `datum_kreiranja` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `datum_azuriranja` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` enum('user','editor','administrator') DEFAULT 'user',
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `username`, `email`, `drzava_id`, `grad`, `ulica`, `datum_rodjenja`, `lozinka`, `datum_kreiranja`, `datum_azuriranja`, `role`, `active`) VALUES
(2, 'sadfg', 'safegji', 'eiojeigj', 'asije@gma.com', 5, 'eifj', 'geigj', '0023-12-04', '$2y$10$tbqDmJwo3d.vWfEq/LNSXujriVIr5EdFIo1bQDoZMxhIdMGEAwHz2', '2024-12-15 16:43:55', '2024-12-16 18:15:16', 'user', 0),
(6, 'safgr', 'safegeg', 'sifgeig2', 'eeigejisadg@asd.com', 5, 'sfjiegji', 'idgjrig', '0005-12-25', '$2y$10$rlPWKAlx0U3EAlerkzTrjuu8XxI17EUQQQ4DXtzloSeRHcI5dBmWi', '2024-12-15 16:51:18', '2024-12-15 19:01:28', 'administrator', 1),
(7, 'asdf', 'asdf', 'aasdf', 'eeigejisadg@asd.com2', 1, 'asd', 'asd', '0012-12-12', '$2y$10$raa/t7/8NR2aplPAfW3WaeIXusP1JSwk4RNTGWHNG1Gg3lXdsOR3.', '2024-12-16 19:34:59', '2024-12-16 19:36:16', 'editor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id` int NOT NULL,
  `vijest_id` int NOT NULL,
  `putanja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id`, `vijest_id`, `putanja`) VALUES
(1, 3, 'uploads/img5.jpg'),
(2, 3, 'uploads/img4.jpg'),
(3, 4, 'uploads/lion.webp'),
(4, 7, 'uploads/utjecaj-tehnologije.jpg'),
(5, 7, 'uploads/panda.webp'),
(6, 7, 'uploads/koala.jpg'),
(7, 8, 'uploads/elephant.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `tekst` text NOT NULL,
  `datum_unosa` datetime DEFAULT CURRENT_TIMESTAMP,
  `arhiva` tinyint(1) DEFAULT '0',
  `odobreno` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `naslov`, `tekst`, `datum_unosa`, `arhiva`, `odobreno`) VALUES
(3, 'sadf', 'safegg', '2024-12-16 17:15:36', 0, 0),
(4, '33dgrg2', 'grjgri23', '2024-12-16 17:16:13', 0, 1),
(5, 'sd', 'fsfsf', '2024-12-16 17:17:17', 0, 1),
(7, '2efrg', 'efege', '2024-12-16 19:23:01', 0, 1),
(8, 'sad', 'sfa', '2024-12-16 19:35:42', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drzava`
--
ALTER TABLE `drzava`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_drzava` (`drzava_id`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vijest_id` (`vijest_id`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drzava`
--
ALTER TABLE `drzava`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `fk_drzava` FOREIGN KEY (`drzava_id`) REFERENCES `drzava` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slike`
--
ALTER TABLE `slike`
  ADD CONSTRAINT `slike_ibfk_1` FOREIGN KEY (`vijest_id`) REFERENCES `vijesti` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
