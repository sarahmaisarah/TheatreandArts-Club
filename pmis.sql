-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2024 at 08:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int NOT NULL,
  `activity_name` varchar(200) NOT NULL,
  `activity_date` date NOT NULL,
  `club_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_date`, `club_id`) VALUES
(1, 'Program Solat Hajat', '2023-10-20', 1),
(2, 'Bacaan yassin', '2023-10-20', 1),
(3, 'zumba', '2023-10-28', 62),
(4, 'Muzikal Night', '2023-11-01', 8),
(5, 'Pameran seni dan galeri', '2023-11-10', 12),
(6, 'Short Film Contest', '2023-11-18', 34),
(7, 'Bengkel Mc', '2023-11-07', 4),
(8, 'Bollywood Night Dinner', '2023-11-23', 15),
(9, 'Kursus Teater', '2023-12-01', 64),
(10, 'Konsert Muzikal Tradisional', '2023-12-09', 15),
(11, 'Bengkel Puisi', '2023-12-13', 21),
(12, 'Hip Hop Night', '2023-12-26', 5),
(13, 'Aerodance Day', '2024-01-01', 10),
(14, 'Zomba Zombie', '2024-01-13', 6),
(15, 'Neon Run', '2024-01-25', 8);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int NOT NULL,
  `club_name` varchar(200) NOT NULL,
  `club_owner` varchar(200) NOT NULL,
  `club_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_owner`, `club_type`) VALUES
(1, 'Society of Information System Management (SISMA)', 'Information Science Studies', 'Academic Club'),
(2, 'Association of Information Scientist (AIS)', 'Information Science Studies', 'Academic Club'),
(3, 'Books Assosiation Club', 'Syaza Mohd Yusuf', 'Non-Academic Club'),
(4, 'Persatuan Ekonomi Perniagaan', 'Encik Nik Mustapha', 'Academic Club'),
(5, 'Bowlerz Club', 'Liyana Jasmay', 'Non-Academic Club'),
(6, 'Kelab Keusahawanan', 'Puan Azleena ', 'Non-Academic Club'),
(7, 'Community of Bachelor In Statistics', 'Puan Munirah ', 'Academic Club'),
(8, 'Kelab D lensa', 'Encik Farid', 'Non-Academic Club'),
(9, 'Inspiration Club', 'Puan Mariam', 'Non-Academic Club'),
(10, 'Marketing Assosiation Club', 'Puan Hazikah', 'Academic Club'),
(11, 'Prime Movers', 'Encik Zaffian', 'Non-Academic Club'),
(12, 'Go Green Club', 'Miss Ainun ', 'Non-Academic Club'),
(13, 'Club Evolusis', 'Encik Imran', 'Non-Academic Club'),
(14, 'Cute Club', 'Puan Melor', 'Non-Academic Club'),
(15, 'Intellectual Members of Muslim Nation', 'Puan Khadijah', 'Non-Academic Club'),
(16, 'Kelab Keusahawanan', 'Fatin', 'Non-Academic Club');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_studid` int NOT NULL,
  `contact_desc` longtext NOT NULL,
  `contact_email` varchar(150) NOT NULL,
  `contact_phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_studid`, `contact_desc`, `contact_email`, `contact_phone`) VALUES
(1, 'zahaifi', 201986381, 'be creative', 'jepi@gmail.com', '0199116520'),
(2, 'Anis Mazlan', 2019554281, 'take your time', 'annisss@gmail.com', '0137552910'),
(3, 'Wafi Azman', 2020922101, 'Break a leg', 'wafiman@gmail.com', '0111998550'),
(4, 'Aina ', 2019521774, 'time to shine', 'ainamai@gmail.com', '0116629004'),
(5, 'Nik Harith', 2020122793, 'Heals take times', 'nik_harith@gmilcom', '0199337201'),
(6, 'rabiatul ', 2020370015, 'Be positive', 'abby_99@gmail.com', '0136220986'),
(7, 'Ahmad Ishak', 2019233011, 'Keep Strong ', 'ishak97@gmail.com', '0130013662'),
(8, 'Siti Salleha', 2021620921, 'Never judge me', 'leha_980@gmilcom', '0112810755'),
(9, 'Fariz ', 2020689925, 'Take responsible ', 'Farkim@gmail.com', '0138772609'),
(10, 'Nik Fattah', 2020093712, 'Up and down', 'nik_fattah@gmail.com', '0197675201'),
(11, 'Farah', 2021638201, 'Keep it simple', 'farah_athirah@gmail.com', '0113772986'),
(12, 'Iskandar', 2021350288, 'Target your future', 'Iskandar_29@gmail.com', '0139002182'),
(13, 'Batrisya ', 2012183099, 'Love being me', 'batrisya_71@gmail.com', '0172655109'),
(14, 'Nur Maisarah', 2021846734, 'Spoil me', 'maisarah_@gmail.com', '0199801680'),
(15, 'Aiman Hakim', 2020538290, 'Find happiness', 'aime99@gmail.com', '0116221034'),
(16, 'Bella', 2021739201, 'Be happy always', 'bella_09@gmail.com', '0138775201');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `gender`, `username`, `password`) VALUES
(1, 'Mohd Zaffian ', 'Mohd Zawawi', 'zaffian@gmail.comm', 'male', 'zaffian', '123'),
(2, 'Albery', 'Enstain', 'mohdzafian@gmail.com', 'male', '', ''),
(3, 'Nur Shairah Atikah', 'Mohd Hamzar', 'shairah@gmail.com', 'female', 'shahirah', '123'),
(4, 'Muhammad Izlan', 'Mohamed Nor', 'izlan@gmail.com', 'male', '', ''),
(5, 'Siti ', 'Adawiyah', 'rabiatuladawiyah99@gmail.com', 'female', 'abby', 'rabiatul'),
(6, 'Muhammad Hafiz', 'Hafiz', 'hafiz@gmail.com', 'male', 'apih', 'hafiz'),
(7, 'Ahmad', 'Anas', 'anas00@gmail.com', 'male', 'anas', 'ahmad'),
(8, 'Nur Anis', 'Zaip', 'anis_@gmail.com', 'female', 'anis', 'anissa'),
(9, 'Munirah ', 'Nik Arifin', 'aina10@gmail.com', 'female', 'na', 'aina'),
(10, 'Huda', 'Amna', 'nurhuda@gmail.com', 'female', 'nur', 'hudaamna'),
(11, 'kimiey', 'zul', 'kimiey@gmail.com', 'male', '', ''),
(13, 'Nik Asyikin', 'Zamani', 'syikin19@gmail.com', 'female', 'kin', 'kin'),
(14, 'Muhammad ', 'Iskandar', 'is89@gmail.com', 'male', '', ''),
(15, 'Atiqah', 'Shaari', 'tiqah00@gmail.com', 'female', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
