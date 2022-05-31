-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 11:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Clients_id` int(11) NOT NULL,
  `Name_Client` varchar(255) NOT NULL,
  `Image_client` varchar(255) NOT NULL,
  `Created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Clients_id`, `Name_Client`, `Image_client`, `Created_on`) VALUES
(1, 'Hwawi', 'IMG-Defult-Male.jpg', '2022-04-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `Catagory_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_fr` varchar(255) NOT NULL,
  `Description_EN` varchar(255) NOT NULL,
  `Description_AR` varchar(255) NOT NULL,
  `Description_Fr` varchar(255) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Catagory_id`, `User_id`, `Thumbnail`, `title_en`, `title_ar`, `title_fr`, `Description_EN`, `Description_AR`, `Description_Fr`, `Created_on`, `Slug`) VALUES
(1, 1, 1, '.IMG-Defult-Male.jpg', 'hady', 'هاجي', 'hady', 'hady', 'هاجي', 'Hady', '2022-05-15 00:00:00', 'slug');

-- --------------------------------------------------------

--
-- Table structure for table `events_catagory`
--

CREATE TABLE `events_catagory` (
  `post_catagory_id` int(11) NOT NULL,
  `title_cat_en` varchar(255) NOT NULL,
  `title_cat_ar` varchar(255) NOT NULL,
  `title_cat_fr` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events_catagory`
--

INSERT INTO `events_catagory` (`post_catagory_id`, `title_cat_en`, `title_cat_ar`, `title_cat_fr`, `Created_on`) VALUES
(1, 'Title', 'هالو ', 'tatale', '2022-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `Catagory_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_fr` varchar(255) NOT NULL,
  `Description_EN` varchar(255) NOT NULL,
  `Description_AR` varchar(255) NOT NULL,
  `Description_Fr` varchar(255) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Catagory_id`, `User_id`, `Thumbnail`, `title_en`, `title_ar`, `title_fr`, `Description_EN`, `Description_AR`, `Description_Fr`, `Created_on`, `Slug`) VALUES
(2, 1, 1, '.IMG-Defult-Male.jpg', 'hady', 'هادي', 'hady', 'hady', 'Hady', 'Mohamed', '2022-05-15 00:00:00', 'slug'),
(3, 1, 1, '.IMG-Defult-Male.jpg', 'Hello', 'هالو', 'Hallo', 'asdasd', 'asdsd', 'asdasd', '2022-05-15 00:00:00', 'slug');

-- --------------------------------------------------------

--
-- Table structure for table `news_catagory`
--

CREATE TABLE `news_catagory` (
  `post_catagory_id` int(11) NOT NULL,
  `title_cat_en` varchar(255) NOT NULL,
  `title_cat_ar` varchar(255) NOT NULL,
  `title_cat_fr` varchar(255) NOT NULL,
  `Created_on` date NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_catagory`
--

INSERT INTO `news_catagory` (`post_catagory_id`, `title_cat_en`, `title_cat_ar`, `title_cat_fr`, `Created_on`, `slug`) VALUES
(1, 'Title', 'قلب الحدث ناو ', 'Title', '2022-05-15', 'Title');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Catagory_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_fr` varchar(255) NOT NULL,
  `Description_EN` varchar(255) NOT NULL,
  `Description_AR` varchar(255) NOT NULL,
  `Description_Fr` varchar(255) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Catagory_id`, `User_id`, `Thumbnail`, `title_en`, `title_ar`, `title_fr`, `Description_EN`, `Description_AR`, `Description_Fr`, `Created_on`, `Slug`) VALUES
(12, 1, 2, '.IMG-Defult-Male.jpg', 'Hello ', 'ولا', 'Hello', 'Hello How Are U doing', 'هالو هاو ار يو دزج&nbsp;', '<i>123al nonsoaloa&nbsp;</i>', '2022-05-28 00:00:00', 'slug');

-- --------------------------------------------------------

--
-- Table structure for table `posts_catagory`
--

CREATE TABLE `posts_catagory` (
  `post_catagory_id` int(11) NOT NULL,
  `title_cat_en` varchar(255) NOT NULL,
  `title_cat_ar` varchar(255) NOT NULL,
  `title_cat_fr` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts_catagory`
--

INSERT INTO `posts_catagory` (`post_catagory_id`, `title_cat_en`, `title_cat_ar`, `title_cat_fr`, `Created_on`) VALUES
(1, 'Title', 'عنوان', 'title', '2022-04-24'),
(2, 'title-test', 'تايتل تيست', 'title-french', '2022-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Team_id` int(11) NOT NULL,
  `name_team` varchar(255) NOT NULL,
  `Description_en` varchar(255) NOT NULL,
  `Description_ar` varchar(255) NOT NULL,
  `Description_fr` varchar(255) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Job_title` varchar(255) NOT NULL,
  `Job_title_ar` varchar(255) NOT NULL,
  `Job_title_fr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testemonials`
--

CREATE TABLE `testemonials` (
  `Testemonial_id` int(11) NOT NULL,
  `Catagory_id` int(11) NOT NULL,
  `Description_en` varchar(255) NOT NULL,
  `Description_ar` varchar(255) NOT NULL,
  `Description_fr` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` bigint(20) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_on` varchar(255) NOT NULL,
  `Employer` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `SecoundName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `Work_id` int(11) NOT NULL,
  `Title_work_en` varchar(255) NOT NULL,
  `Title_work_ar` varchar(255) NOT NULL,
  `Title_work_fr` varchar(255) NOT NULL,
  `Catagory_id` int(11) NOT NULL,
  `Image_work` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Clients_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_catagory`
--
ALTER TABLE `events_catagory`
  ADD PRIMARY KEY (`post_catagory_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_catagory`
--
ALTER TABLE `news_catagory`
  ADD PRIMARY KEY (`post_catagory_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_catagory`
--
ALTER TABLE `posts_catagory`
  ADD PRIMARY KEY (`post_catagory_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Team_id`);

--
-- Indexes for table `testemonials`
--
ALTER TABLE `testemonials`
  ADD PRIMARY KEY (`Testemonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `User_id` (`User_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`Work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Clients_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_catagory`
--
ALTER TABLE `events_catagory`
  MODIFY `post_catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_catagory`
--
ALTER TABLE `news_catagory`
  MODIFY `post_catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts_catagory`
--
ALTER TABLE `posts_catagory`
  MODIFY `post_catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `Team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testemonials`
--
ALTER TABLE `testemonials`
  MODIFY `Testemonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `Work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
