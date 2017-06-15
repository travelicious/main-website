-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 07:11 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(7) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(7) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_robots` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destination_images`
--

CREATE TABLE `destination_images` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `destinations_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_title` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_title`, `image_name`, `status`) VALUES
(3, 'dfh', '01.jpg', 0),
(4, 'dfh', '12.jpg', 0),
(5, 'Alam', '05.jpg', 0),
(6, 'Alam', '16.jpg', 0),
(7, 'dfhsdj', '019.jpg', 0),
(8, 'dfhsdj', '120.jpg', 0),
(9, 'dfhsdj', '221.jpg', 0),
(10, 'Mohd Alamgir', 'news_593a81acec210.', 0),
(11, 'Mohd Alamgir', 'news_593a81acec9e0.', 0),
(12, 'Mohd Alamgir', 'news_593a81aced980.', 0),
(13, 'Mohd Alamgir', 'news_593a81acee150.', 0),
(18, 'Alamgir', 'news_593a85d3c1dcc.', 0),
(19, 'Alamgir', 'news_593a85d3c3154.', 0),
(20, 'Alamgir', 'news_593a85d3c3d0c.', 0),
(21, 'Hussain', 'news_593a86867302b.', 0),
(22, 'Hussain', 'news_593a868673fcc.', 0),
(24, 'md', 'news_593a872d4aca5.jpg', 0),
(25, 'md', 'news_593a872d4c02d.jpg', 0),
(26, 'md', 'news_593a872d4c7fd.jpg', 0),
(27, '', 'news_593aa1b14ffd5.', 0),
(28, '', 'news_593aa1be6932a.', 0),
(29, '', 'news_593aa1d195e6c.', 0),
(30, 'xbg', 'news_593aa1e44ef7d.jpg', 0),
(31, 'xbg', 'news_593aa1e44f74d.jpg', 0),
(32, ' bvn', 'news_593aa64fbbf67.jpg', 0),
(33, ' bvn', 'news_593aa64fbc737.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inclusion_exclusion`
--

CREATE TABLE `inclusion_exclusion` (
  `id` int(11) NOT NULL,
  `text` longtext NOT NULL,
  `type` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inclusion_exclusion`
--

INSERT INTO `inclusion_exclusion` (`id`, `text`, `type`) VALUES
(1, '<i class=\"fa fa-plane\" style=\"color:red\" aria-hidden=\"true\"></i> flight ', 'inclusion'),
(3, '<i class=\"fa fa-bed\" style=\"color:red\" aria-hidden=\"true\"></i> Hotel ', 'inclusion'),
(4, '<i class=\"fa fa-car\" style=\"color:red\" aria-hidden=\"true\"></i> Transfer ', 'inclusion'),
(6, '<i class=\"fa fa-tripadvisor\" style=\"color:red\" aria-hidden=\"true\"></i> sightseeing ', 'inclusion'),
(7, '<i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Meals', 'inclusion'),
(15, '<i class=\"fa fa-plane\" style=\"color:red\" aria-hidden=\"true\"></i>    Shtyle                                                       ', 'exclusion'),
(18, '<i class=\"fa fa-cutlery\" style=\"color:red\" aria-hidden=\"true\"></i>  Recipe                    ', 'exclusion');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(7) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `url`, `title`, `image`, `description`, `author`, `created_at`, `modified_at`) VALUES
(2, ' New url', 'title', 'news_593919e39ab16.jpg', 'description                                                         ', 'admin', '2017-06-07 07:41:17', '2017-06-08 12:07:19'),
(21, 'hoo', 'ha', 'news_59391e111e83b.jpg', 'this is fine for all                                                                                                                                                    ', 'Md Alamgir ', '2017-06-07 09:55:17', '2017-06-08 12:04:30'),
(22, 'www.url.com', 'NEWS URL ', 'news_5939203c3bfbb.jpg', '            Hi, this is versatile                                                                                    ', 'Alamgir Hussain', '2017-06-08 09:25:35', '2017-06-08 12:05:48'),
(24, 'g', 'gh', 'news_59393c676d85f.jpg', 'I am not using model                                             ', 'fl ', '2017-06-08 10:47:01', '2017-06-09 11:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE `news_images` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(7) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_robots` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `price` int(7) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages_destination`
--

CREATE TABLE `packages_destination` (
  `id` int(7) NOT NULL,
  `package_id` int(7) NOT NULL,
  `destination_id` int(7) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_images`
--
ALTER TABLE `destination_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inclusion_exclusion`
--
ALTER TABLE `inclusion_exclusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_images`
--
ALTER TABLE `news_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_destination`
--
ALTER TABLE `packages_destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `destination_images`
--
ALTER TABLE `destination_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `inclusion_exclusion`
--
ALTER TABLE `inclusion_exclusion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `packages_destination`
--
ALTER TABLE `packages_destination`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `packages_destination`
--
ALTER TABLE `packages_destination`
  ADD CONSTRAINT `packages_destination_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`),
  ADD CONSTRAINT `packages_destination_ibfk_2` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
