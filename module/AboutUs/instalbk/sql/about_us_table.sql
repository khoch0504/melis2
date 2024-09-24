-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 04:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redex`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `link_url` varchar(255) DEFAULT NULL,
  `section_id` int(11) DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `section_name`, `title`, `content`, `file`, `link_url`, `section_id`, `updated_at`) VALUES
(1, 'Hero Banner', 'Your Digital Advisors', 'Envision, Enable , Empower.', '/media/RedexAboutUs/RedexAboutUs_66cefac2f40d53_21802519.png', NULL, 1, '2024-08-29 09:48:44'),
(2, 'Abou Block', 'Who We Are', 'We are a digital consultancy with a clear purpose: to help decision-makers and ambitious innovators leverage expert insights and technology to achieve their business goals. / We bring expert knowledge to empower your strategic decision and transform your objectives into digital solutions.', NULL, NULL, 2, '2024-08-28 10:43:45'),
(3, 'About OUR', 'Our Vision', 'Provide expertise knowledge and operation solutions to support Business Growth.', NULL, NULL, 3, '2024-08-28 10:46:32'),
(4, 'About OUR', 'Our Purpose', 'Fill the gap between new technology (Gen AI - machine learning), rigid &amp; political organization, lack of expertise and project governance.&nbsp; / We want to build sustainable businesses, helping organizations and people to get the best of technology evolution and privilege human collaboration toward a business goal.', NULL, NULL, 3, '2024-08-29 09:50:00'),
(5, 'About OUR', 'Our Mission', 'Empower the key players, challengers, and innovators in the sector in making differentiated, long-term, and significant changes in their performance,&nbsp; as well as to construct a great organization that recruits, develops, excites, and keeps people to conquer new opportunities.', NULL, NULL, 3, '2024-08-29 09:50:49'),
(6, 'Our Growth', NULL, NULL, '/media/RedexAboutUs/RedexAboutUs_66cf266f7b6d60_50238964.png', NULL, 4, '2024-08-28 13:30:23'),
(7, 'Our Team', 'Naquan Afumba', 'Chief Executive Officer', '/media/RedexAboutUs/RedexAboutUs_66cf272b021032_28008983.png', NULL, 5, '2024-08-28 13:33:31'),
(8, 'Our Team', 'Vuong Duyen Duyen', 'Chief Product Officer', '/media/RedexAboutUs/RedexAboutUs_66cf27739397d7_95963825.png', NULL, 5, '2024-08-28 13:34:43'),
(9, 'Our Team', 'Naquan Afumba', 'Chief Executive Officer', '/media/RedexAboutUs/RedexAboutUs_66cf272b021032_28008983.png', NULL, 5, '2024-08-28 13:33:31'),
(10, 'Our Team', 'Vuong Duyen Duyen', 'Chief Product Officer', '/media/RedexAboutUs/RedexAboutUs_66cf27739397d7_95963825.png', NULL, 5, '2024-08-28 13:34:43'),
(11, 'Our Team', 'Naquan Afumba', 'Chief Executive Officer', '/media/RedexAboutUs/RedexAboutUs_66cf272b021032_28008983.png', NULL, 5, '2024-08-28 13:33:31'),
(12, 'Our Team', 'Vuong Duyen Duyen', 'Chief Product Officer', '/media/RedexAboutUs/RedexAboutUs_66cf27739397d7_95963825.png', NULL, 5, '2024-08-28 13:34:43'),
(13, 'Our Clients', 'Largest Technology Firms', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5bd98ce6b2_45577368.png', NULL, 6, '2024-08-28 17:18:17'),
(14, 'Our Clients', 'Leading Airlines', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5bfbc61ed3_91108846.png', NULL, 6, '2024-08-28 17:18:51'),
(15, 'Our Clients', 'Leading F&B', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5c30860bc7_46870129.png', NULL, 6, '2024-08-28 17:19:44'),
(16, 'Our Clients', 'Leading Manufactures/ Industries', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5c6466ad58_86992801.png', NULL, 6, '2024-08-28 17:20:36'),
(17, 'Our Clients', 'Leading Retailers', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5c8762c819_41550901.png', NULL, 6, '2024-08-28 17:21:11'),
(18, 'Our Clients', 'Leading FS', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5caad3d796_39931836.png', NULL, 6, '2024-08-29 09:47:46'),
(19, 'Our Purpose', 'Our Purpose & Values', 'RedEx consulting was born from strong convictions, nourished by our 25+ years of collective experience in Digital consulting and solutions. / We believe that professional decision-makers are seeking an independent and agnostic strategic partner, independent from market and political influencers.', NULL, NULL, 7, '2024-08-29 08:20:46'),
(20, 'Our Client2', 'We start with business objectives', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5eadf27b75_26974705.png', NULL, 8, '2024-08-28 17:30:21'),
(21, 'Our Client2', 'We leverage expert insights for decisions', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5eadf27b75_26974705.png', NULL, 8, '2024-08-28 17:31:25'),
(22, 'Our Client2', 'We define your digital transformation roadmap', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5eadf27b75_26974705.png', NULL, 8, '2024-08-28 17:31:37'),
(23, 'Our Client2', 'We plan, execute and deliver', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5eadf27b75_26974705.png', NULL, 8, '2024-08-28 17:31:49'),
(24, 'Our Client2', 'We monitor, optimize and enhance', NULL, '/media/RedexAboutUs/RedexAboutUs_66cf5eadf27b75_26974705.png', NULL, 8, '2024-08-28 17:32:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
