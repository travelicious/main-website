-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2017 at 03:47 PM
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
  `id` int(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_robot` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `url`, `title`, `image`, `description`, `meta_title`, `meta_robot`, `meta_description`, `author`, `created_at`, `modified_at`) VALUES
(1, 'delhi', 'Delhi Tour', 'Noida.jpg', '<p style=\"text-align: justify;\"><span style=\"color: #373a3c; font-family: Raleway, sans-serif; font-size: medium;\">Agra has popularly known as &ldquo;THE GOD&rsquo;s OWN COUNTRY&rdquo;. This southern state of India is famous for the soothing whispers of the beaches, tranquil environs of the backwaters and ethereal charm of the lush green tea gardens and scenic beauty which attracts a lot of tourists every year. What can one really think to get rid of the chaos of the hectic city..</span></p>', '', '', '', 'Gourav Rajput', '2017-06-24 08:00:33', '2017-06-24 08:00:33'),
(3, 'aagra', 'Agra Tour', 'red-fort.jpg', '<p style=\"text-align: justify;\"><span style=\"color: #373a3c; font-family: Raleway, sans-serif; font-size: medium;\">Agra has popularly known as &ldquo;THE GOD&rsquo;s OWN COUNTRY&rdquo;. This southern state of India is famous for the soothing whispers of the beaches, tranquil environs of the backwaters and ethereal charm of the lush green tea gardens and scenic beauty which attracts a lot of tourists every year. What can one really think to get rid of the chaos of the hectic city..</span></p>', '', '', '', 'Saket.', '2017-06-20 07:19:15', '2017-06-20 07:19:15'),
(6, 'delhi-tour', 'Delhi Tour', 'Delhi-main.jpg', '<p style=\"text-align: justify;\"><span style=\"color: #373a3c; font-family: Raleway, sans-serif; font-size: medium;\">Agra has popularly known as &ldquo;THE GOD&rsquo;s OWN COUNTRY&rdquo;. This southern state of India is famous for the soothing whispers of the beaches, tranquil environs of the backwaters and ethereal charm of the lush green tea gardens and scenic beauty which attracts a lot of tourists every year. What can one really think to get rid of the chaos of the hectic city..</span></p>', '', '', '', 'G.R', '2017-06-21 07:33:55', '2017-06-21 07:33:55'),
(28, 'najibabad', 'Najibabad Tour', '668aee1b6e04514028c6d6540e08a49a.jpg', '<p style=\"text-align: justify;\"><span style=\"color: #373a3c; font-family: Raleway, sans-serif; font-size: medium;\">Agra has popularly known as &ldquo;THE GOD&rsquo;s OWN COUNTRY&rdquo;. This southern state of India is famous for the soothing whispers of the beaches, tranquil environs of the backwaters and ethereal charm of the lush green tea gardens and scenic beauty which attracts a lot of tourists every year. What can one really think to get rid of the chaos of the hectic city..</span></p>', 'najibabad', 'naji', '<p>Najibabad find in google</p>', 'Najiyavadi', '2017-06-20 07:19:46', '2017-06-20 07:19:46'),
(29, 'title', 'Banglore Tour', '03bacdd92186de44a3238a0af27efdae.jpg', '<p style=\"text-align: justify;\"><span style=\"color: #373a3c; font-family: Raleway, sans-serif; font-size: medium; text-align: justify;\">Agra has popularly known as &ldquo;THE GOD&rsquo;s OWN COUNTRY&rdquo;. This southern state of India is famous for the soothing whispers of the beaches, tranquil environs of the backwaters and ethereal charm of the lush green tea gardens and scenic beauty which attracts a lot of tourists every year. What can one really think to get rid of the chaos of the hectic city..</span></p>', 'meta_title', 'NOINDEX , FOLLOW', '<p style=\"text-align: justify;\"><span style=\"color: #373a3c; font-family: Raleway, sans-serif; font-size: medium; text-align: justify;\">Agra has popularly known as &ldquo;THE GOD&rsquo;s OWN COUNTRY&rdquo;. This southern state of India is famous for the soothing whispers of the beaches, tranquil environs of the backwaters an</span></p>', 'J.S', '2017-06-20 07:20:01', '2017-06-20 07:20:01'),
(30, 'najibabad-bijnor', 'Najibabad', '69f840ce58bb8ff18e012fb02df8feba.jpg', '<p style=\"text-align: justify;\"><span style=\"color: #373a3c; font-family: Raleway, sans-serif; font-size: medium;\">Agra has popularly known as &ldquo;THE GOD&rsquo;s OWN COUNTRY&rdquo;. This southern state of India is famous for the soothing whispers of the beaches, tranquil environs of the backwaters and ethereal charm of the lush green tea gardens and scenic beauty which attracts a lot of tourists every year. What can one really think to get rid of the chaos of the hectic city..</span></p>', 'najibabad', 'NOINDEX , FOLLOW', '<p>Najibabad find in google</p>', 'Najiyavadi', '2017-06-21 07:34:07', '2017-06-21 07:34:07'),
(31, 'rajasthan', 'Rajasthan Udaypur Tour', '3a0de2e44c2506ea1624c221ababa969.jpg', '<p style=\"text-align: justify;\"><span style=\"color: #222222; font-family: arial, sans-serif; font-size: 13px;\">Rajasthan is a northern Indian state bordering Pakistan. Its palaces and forts are reminders of the many kingdoms that historically vied for the region. In its capital, Jaipur (the \"Pink City\"), are the 18th-century City Palace and Hawa Mahal, a former cloister for royal women, fronted by a 5-story pink-sandstone screen. Amer Fort, atop a nearby hill, was built by a Rajput prince in the early 1600s.</span></p>', 'rajasthan', 'NOINDEX , FOLLOW', '<p style=\"text-align: justify;\"><span style=\"color: #222222; font-family: arial, sans-serif; font-size: 13px; text-align: justify;\">5-story pink-sandstone screen. Amer Fort, atop a nearby hill, was built by a Rajput prince in the early 1600s.</span></p>', 'By-Gourav', '2017-06-22 05:48:43', '2017-06-22 05:48:43'),
(33, 'rajasthan-tour', 'Rajasthan Udaypur Tour', 'a89dbaff9e89d9af5d85f6ee4b8e68c0.jpg', '<p style=\"text-align: justify;\"><span style=\"color: #222222; font-family: arial, sans-serif; font-size: 13px;\">Rajasthan is a northern Indian state bordering Pakistan. Its palaces and forts are reminders of the many kingdoms that historically vied for the region. In its capital, Jaipur (the \"Pink City\"), are the 18th-century City Palace and Hawa Mahal, a former cloister for royal women, fronted by a 5-story pink-sandstone screen. Amer Fort, atop a nearby hill, was built by a Rajput prince in the early 1600s.</span></p>', 'rajasthan', 'NOINDEX , FOLLOW', '<p style=\"text-align: justify;\"><span style=\"color: #222222; font-family: arial, sans-serif; font-size: 13px; text-align: justify;\">5-story pink-sandstone screen. Amer Fort, atop a nearby hill, was built by a Rajput prince in the early 1600s.</span></p>', 'By-Gourav', '2017-06-22 05:49:35', '2017-06-22 05:49:35'),
(34, 'www.helloworld.com', 'World', '9d1b921b79b75f38a8448b1e9d661edc.jpg', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p>&nbsp;</p>', 'dk', 'INDEX , NOFOLLOW', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p>&nbsp;</p>', 'Alamgir', '2017-06-22 08:36:37', '2017-06-22 08:36:37'),
(35, 'sxvb', 'fdz', '6a26c80404b9020252e5870126627d48.jpg', '<p><span style=\"color: #464e55; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16.068px; text-align: center; word-spacing: 2px; background-color: #f9fbfd;\">Stack Overflow is a community of 7.3 million programmers, just like you, helping each other.&nbsp;</span><br style=\"color: #464e55; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16.068px; text-align: center; word-spacing: 2px; background-color: #f9fbfd;\" /><span style=\"color: #464e55; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16.068px; text-align: center; word-spacing: 2px; background-color: #f9fbfd;\">Join them; it only takes a minute:&nbsp;</span></p>', 'dk', 'NOINDEX , NOFOLLOW', '<p><span style=\"color: #464e55; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16.068px; text-align: center; word-spacing: 2px; background-color: #f9fbfd;\">Stack Overflow is a community of 7.3 million programmers, just like you, helping each other.&nbsp;</span><br style=\"color: #464e55; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16.068px; text-align: center; word-spacing: 2px; background-color: #f9fbfd;\" /><span style=\"color: #464e55; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16.068px; text-align: center; word-spacing: 2px; background-color: #f9fbfd;\">Join them; it only takes a minute:&nbsp;</span></p>', 'maa', '2017-06-22 08:37:25', '2017-06-22 08:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `url`, `comment`, `name`, `email`, `created_at`) VALUES
(13, 'najibabad', 'This Is new Blog', 'Deepika', 'delhi@gmail.com', '2017-06-21 11:47:06'),
(14, 'delhi', 'This Is Delhi Blog', 'Delhi', 'delhi@gmail.com', '2017-06-21 12:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `callback_requested`
--

CREATE TABLE `callback_requested` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_number` varchar(500) NOT NULL,
  `email_id` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `callback_requested`
--

INSERT INTO `callback_requested` (`id`, `name`, `address`, `contact_number`, `email_id`, `created_at`) VALUES
(1, 'Aditya', 'Delhi', '9890977876', 'abc@gmail.com', '2017-06-20 22:53:59'),
(2, 'Ramesh', 'Delhi', '9890977876', 'abc@gmail.com', '2017-06-20 22:54:46'),
(3, 'Rajiv', 'delhi', '7898786766', 'abca@gmail.com', '2017-06-20 22:56:10'),
(4, 'gdsgwse', 'ggr', '3474734', 'asbca@gmail.com', '2017-06-20 23:00:14'),
(5, 'gdsgwse', 'ggr', '3474734', 'asbca@gmail.com', '2017-06-20 23:04:39'),
(6, 'gdsgwse', 'ggr', '3474734', 'asbca@gmail.com', '2017-06-20 23:04:42'),
(7, 'dfewf', 'her', '4575475474', 'asbca@gmail.com', '2017-06-20 23:08:10'),
(8, 'yuiop', 'delhi', '9890977876', 'asbca@gmail.com', '2017-06-20 23:13:47'),
(9, 'yuiop', 'delhi', '9890977876', 'asbca@gmail.com', '2017-06-20 23:15:57'),
(10, 'oooo', 'oooooo', '6666666666666', 'abc@gmail.com', '2017-06-20 23:18:19'),
(11, 'sdhkgdaghs', 'kjfkh', '897987987', 'asbca@gmail.com', '2017-06-20 23:22:54'),
(12, 'ghjj', 'gjr', '65568568', 'abc@gmail.com', '2017-06-20 23:34:52'),
(13, 'ghjj', 'gjr', '65568568', 'abc@gmail.com', '2017-06-20 23:36:26'),
(14, 'jhjhg', 'jrjq', '656546', 'abc@gmail.com', '2017-06-20 23:36:44'),
(15, 'jhjhg', 'jrjq', '656546', 'abc@gmail.com', '2017-06-20 23:37:26'),
(16, 'jtruj', 'hreheryh', '3463466', 'abc@gmail.com', '2017-06-20 23:37:42'),
(17, 'tjtyjty', 'urtu', '546547457', 'abc@gmail.com', '2017-06-20 23:38:23'),
(18, 'iuyiuyiuy', 'hhrt', '547547547547', 'abc@gmail.com', '2017-06-20 23:39:46'),
(19, 'ghgfhfgh', 'hgfhfgh', 'hfghfgh', 'hgfhgf', '2017-06-20 23:47:22'),
(20, 'gjrjufg', 'jgjtg', '899809890809', 'abc@gmail.com', '2017-06-20 23:49:26'),
(21, 'fedfsd', 'gerg', '636346', 'abc@gmail.com', '2017-06-20 23:55:30'),
(22, 'rahul', 'delhi', '797979979', 'abc@gmail.com', '2017-06-21 01:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_date`) VALUES
(1, 'winter Holiday', '2017-06-23 19:38:31'),
(2, 'Summer Holiday', '2017-06-23 19:38:24'),
(12, 'Honneymoon Holiday', '2017-06-23 21:37:04'),
(13, 'Weekend Holiday', '2017-06-23 21:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `category_mapping`
--

CREATE TABLE `category_mapping` (
  `id` int(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_mapping`
--

INSERT INTO `category_mapping` (`id`, `package_id`, `category_id`) VALUES
(1, 6, 1),
(2, 8, 2),
(3, 8, 1),
(4, 9, 13),
(5, 9, 1);

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
  `flag` int(1) DEFAULT '0',
  `latitude` varchar(63) NOT NULL,
  `longitude` varchar(63) NOT NULL
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
  `image_name` varchar(100) NOT NULL,
  `image_tiltle` varchar(500) NOT NULL,
  `img_alt` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `image_tiltle`, `img_alt`, `created_at`) VALUES
(1, '1a5721dbcb62893c7a531868c3df481f.jpg', 'oiuoiuoiuoiu', '', '2017-06-21 20:56:40'),
(2, '71c5c21a7b7f3531896864d098cfd471.jpg', 'tertertert', '', '2017-06-21 21:34:53'),
(4, 'a06ee4cce6c51bb9b0ce47c38983f897.jpg', 'dhdfh', '', '2017-06-21 22:43:50'),
(5, 'ff71de7c92beb7029e10714b6f1d6216.jpg', 'fsdfsd', 'fsdfsdfs', '2017-06-22 00:07:56'),
(6, '36d0648ad5647d86b1ed551704181f6d.jpg', 'gdgdsfgds', 'twewer', '2017-06-22 00:18:50'),
(7, 'ed884a0a0a66daebbba9c41dbd261bbf.jpg', 'gdsg', 'gdsgdsg', '2017-06-22 00:31:25'),
(8, '4b42a247fb256563f0f14ed9bf4925b6.jpg', 'fdh', 'hg', '2017-06-22 10:00:06'),
(9, 'b0fb34ba1584620c0c0b7394a056337d.jpg', 'aa', 'aa', '2017-06-22 10:04:31'),
(10, '98d66cd13b4b1cfaec7a7d1622c0f8e7.jpg', 'y', 'y', '2017-06-23 11:36:19');

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
  `meta_title` varchar(99) NOT NULL,
  `meta_robots` varchar(99) NOT NULL,
  `meta_description` varchar(99) NOT NULL,
  `view_count` int(99) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `url`, `title`, `image`, `description`, `author`, `meta_title`, `meta_robots`, `meta_description`, `view_count`, `created_at`, `modified_at`) VALUES
(0, 'top', 'gvd', 'news-left.jpg', '<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 20px; line-height: 32px; color: #212121; font-family: \'PT Serif\', serif; text-align: justify;\">For New Delhi, the likely appointment of US President Donald Trump aide Kenneth Juster as the ambassador could be a relief from the &ldquo;unknown unknown&rdquo; factors so frequently associated with the new American dispensation.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 20px; line-height: 32px; color: #212121; font-family: \'PT Serif\', serif;\">White House officials said Juster is set to be the next occupant of the Roosevelt House, the residence of United States ambassador to New Delhi, to succeed Richard Verma, the first Indian-origin US envoy to the country.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 20px; line-height: 32px; color: #212121; font-family: \'PT Serif\', serif;\">The Trump administration has kept the world capital buzzing on various issues &mdash; resetting the terms of the way the US engages with the world to pull out of the Paris climate deal and to showing no hurry in appointing envoys in many capitals.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 20px; line-height: 32px; color: #212121; font-family: \'PT Serif\', serif;\">&ldquo; ... Someone like Juster, who is a known entity will be good for India. He knows the country and region well,&rdquo; said a government source.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 20px; line-height: 32px; color: #212121; font-family: \'PT Serif\', serif;\">Juster, 62, is a senior official in the National Economic Council of the White House. But he played a key role in fostering India-US ties during George Bush&rsquo;s presidency. He served as the US chair of the US-India High Technology Cooperation Group (HTCG), a key initiative of Bush administration in advancing strategic ties with India, especially in the context of India-US nuclear deal.For New Delhi, the likely appointment of US President Donald Trump aide Kenneth Juster as the ambassador could be a relief from the &ldquo;unknown unknown&rdquo; factors so frequently associated with the new American dispensation.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-size: 20px; line-height: 32px; color: #212121; font-family: \'PT Serif\', serif;\">White House officials said Juster is set to be the next occupant of the Roosevelt House, the residence of United States ambassador to New Delhi, to succeed Richard Verma, the first Indian-origin US envoy to the country.</p>\r\n<div class=\"def-block pad-indent\" style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; position: relative; padding-left: 30px; margin-bottom: 20px; color: #292929; font-family: Arial, Helvetica, sans-serif; font-size: 16px; letter-spacing: 0.16px;\" data-wordlist-entryid=\"tour\" data-wordlist-senseid=\"tour-1-2\">&nbsp;</div>', 'ehd', 'dhf', '0', 'dh', 49, '2017-06-22 07:31:12', '2017-06-24 09:46:41'),
(21, 'hoo', 'Hoo', 'news_594bc9d2d502f.jpg', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p>&nbsp;</p>', 'Md Alamgir ', 'Hoo', '0', 'The Hoo is the planet Earth and all life upon it, including human civilization.[1] In a philosophic', 55, '2017-06-07 09:55:17', '2017-06-24 10:28:05'),
(22, 'www.url.com', 'NEWS URL ', 'news_594bc9c6989ce.jpg', '<p>Hi, this is versatile</p>', 'Alamgir Hussain', '', '0', '', 17, '2017-06-08 09:25:35', '2017-06-24 05:57:25'),
(32, 'cvn', 'cnv', '594b75c36075b.jpg', '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'cvxn', 'cnv', '0', 'cnv', 5, '2017-06-22 07:46:11', '2017-06-24 07:45:59'),
(33, 'www.helloworld.com', 'World Tour', '594b7c7290b8d.jpg', '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'Alamgir', 'World Tour', 'NOINDEX', 'The world is the planet Earth and all life upon it, including human civilization.[1] In a philosoph', 15, '2017-06-22 08:14:42', '2017-06-24 10:00:27'),
(34, 'newdelhi.com', 'New Delhi', '594b979e59e00.jpg', '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'MAH', 'New Delhi', '0', 'New Delhi', 28, '2017-06-22 10:10:38', '2017-06-24 09:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `news_comment`
--

CREATE TABLE `news_comment` (
  `id` int(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_comment`
--

INSERT INTO `news_comment` (`id`, `url`, `u_name`, `u_email`, `message`, `created_at`) VALUES
(1, '', 'xcb', 'bcx@fdb', 'zxcv', '2017-06-22 06:24:06'),
(4, '', 'maa', 'maa@maa', 'maaa', '2017-06-22 06:30:49'),
(5, '', 'fg', 'fgj@vgb', 'gfjh', '2017-06-22 06:34:15'),
(6, '', 'mg', 'ghm@vbn', 'gcmh', '2017-06-22 06:36:29'),
(7, '', 'dfh', 'dhf@dfg', 'dfxzb', '2017-06-22 07:33:50'),
(12, 'dsfz', 'dfftyjdrt6drttttt', 'dfh@dfshfgyjftm', 'adsgft7oluykgvufj67drt6', '2017-06-22 07:52:42'),
(13, 'cvn', 'fgj', 'jfgj@vfhngf', 'fgjfg', '2017-06-22 07:52:55'),
(14, 'hoo', 'Sam', 'sam@gmail.com', 'Very good place.', '2017-06-22 08:04:10'),
(15, 'www.helloworld.com', 'dh', 'h@gmail.com', 'dfzsh', '2017-06-22 08:16:16'),
(16, 'www.newdelhi.com', 'hh', 'hh@dd', 'fhghfg', '2017-06-22 10:11:04'),
(17, 'newdelhi.com', 'dfh', 'hfd@th', 'dsgdf', '2017-06-22 11:12:26'),
(18, 'top', 'bxc', 'bxc@fg', 'cbbcx', '2017-06-22 11:46:58'),
(19, 'hoo', 'bb', 'bb@vvb', 'xcvb', '2017-06-22 13:25:22'),
(20, 'www.url.com', 'b', 'bbbb@bbbbbbbbbbbbbbbbbbbbb', 'bcv', '2017-06-23 05:39:21'),
(21, 'top', 'khdv', 'a@v', 'lsnadlvlk jbkjsa jkbksdbv jkbskdjv kjsdb vk', '2017-06-24 05:34:22');

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
  `view_count` int(99) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `url`, `title`, `image`, `duration`, `description`, `meta_title`, `meta_robots`, `meta_description`, `price`, `view_count`, `created_at`, `modified_at`, `flag`) VALUES
(1, '123', 'Packages', 'pkg2.jpg', 3, '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'Packages', 'Packages', 'Packages', 50000, 0, '2017-06-24 09:26:02', '2017-06-24 11:34:39', 0),
(2, 'dgj', 'hfgh', 'a1bd0dc6c68424951473436a3f2c378c.jpg', 111, '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'fghfgh', '0', 'fgh', 21345, 0, '2017-06-24 09:27:17', '2017-06-24 09:27:26', 0),
(3, 'fgd', 'j', '5c21fc0278e3513194e047625743d0c5.jpg', 222, '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'jg', '0', 'j', 22222, 0, '2017-06-24 09:28:05', '2017-06-24 09:28:13', 0),
(4, 'efash', 'dfh', 'f6d3e5c9d0cb59d7ce895b55a2cd76c4.jpg', 22, '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'dasfh', '0', 'df', 3333, 0, '2017-06-24 09:28:56', '2017-06-24 09:29:03', 0),
(5, 'sdghng', 'hgg', 'c41710db2e73e7b57af234448d81a171.jpg', 333, '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'gsgs', '0', 'gh', 333333, 0, '2017-06-24 09:29:29', '2017-06-24 09:29:34', 0),
(6, '234', 'Best Package', 'f012c1b91b19dd5eb8e6db1a1fcda3f9.jpg', 0, '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '', '', '', NULL, 0, '2017-06-24 09:29:59', '2017-06-24 11:34:00', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `service_name` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date on which service is created'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `created_at`) VALUES
(1, 'tyu', '2017-06-20 01:38:17'),
(3, 'oops', '2017-06-20 20:51:32'),
(4, 'ytuytuytuytu', '2017-06-20 20:51:48'),
(5, 'ad', '2017-06-22 18:37:43'),
(6, 'adfghtryuioopp', '2017-06-22 18:37:53'),
(7, 'rty', '2017-06-22 18:57:19'),
(8, 'uiuouop', '2017-06-22 18:57:26'),
(9, 'ioipiopi', '2017-06-22 18:57:32'),
(10, 'hdheryeryer', '2017-06-22 18:57:38'),
(11, 'dhdfhdhjdfjh', '2017-06-22 18:59:24'),
(12, 'poeripeorkiterl;jkgldkjgr', '2017-06-22 18:59:31'),
(13, 'plkfashgosg', '2017-06-22 18:59:39'),
(14, 'iuewrpowuiroqwewlne', '2017-06-22 18:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `services_inclusion`
--

CREATE TABLE `services_inclusion` (
  `id` int(255) NOT NULL,
  `service_id` int(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_inclusion`
--

INSERT INTO `services_inclusion` (`id`, `service_id`, `package_id`, `created_at`) VALUES
(1, 14, 2, '2017-06-23 20:16:27'),
(2, 12, 2, '2017-06-23 20:16:27'),
(3, 11, 7, '2017-06-23 20:26:01'),
(4, 9, 7, '2017-06-23 20:26:01'),
(5, 11, 8, '2017-06-23 20:26:32'),
(6, 9, 8, '2017-06-23 20:26:32'),
(7, 10, 9, '2017-06-23 21:45:28'),
(8, 9, 9, '2017-06-23 21:45:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callback_requested`
--
ALTER TABLE `callback_requested`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_mapping`
--
ALTER TABLE `category_mapping`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `news_comment`
--
ALTER TABLE `news_comment`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_inclusion`
--
ALTER TABLE `services_inclusion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `callback_requested`
--
ALTER TABLE `callback_requested`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category_mapping`
--
ALTER TABLE `category_mapping`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `destination_images`
--
ALTER TABLE `destination_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `inclusion_exclusion`
--
ALTER TABLE `inclusion_exclusion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `news_comment`
--
ALTER TABLE `news_comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `packages_destination`
--
ALTER TABLE `packages_destination`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `services_inclusion`
--
ALTER TABLE `services_inclusion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
