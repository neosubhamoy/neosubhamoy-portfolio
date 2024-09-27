-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 08:54 PM
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
-- Database: `neosubhamoy`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT 'Untitled',
  `icon` varchar(100) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `stag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `icon`, `link`, `stag`) VALUES
(1, 'Home', 'Subhamoy Biswas - Portfolio | @neo_subhamoy', 'cnpvyndp.json', '', NULL),
(2, 'Projects', 'My Projects - @neo_subhamoy', 'utpmnzxz.json', '/projects', NULL),
(3, 'Blog', 'My Blog - @neo_subhamoy', 'lyrrgrsl.json', '/blog', NULL),
(4, 'Contact', 'Contact Me - @neo_subhamoy', 'kthelypq.json', '/contact', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `stag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `description`, `link`, `photo`, `stag`) VALUES
(1, 'Subhamoy Biswas', 'Personal Profile', 'https://github.com/neosubhamoy', './assets/images/neosubhamoy.jpg', NULL),
(2, 'The TechishFellow', 'Organization Profile', 'https://github.com/techishfellow', './assets/images/techishfellow.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `shortdes` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `thumbnail` varchar(200) NOT NULL DEFAULT './assets/images/projects/default.jpg',
  `stag` varchar(100) DEFAULT NULL,
  `platform` varchar(100) DEFAULT NULL,
  `stack` varchar(200) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `is_featured` int(1) NOT NULL DEFAULT 0,
  `is_open_sourced` int(1) NOT NULL DEFAULT 0,
  `repo` varchar(100) DEFAULT NULL,
  `user_count` bigint(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `shortdes`, `description`, `link`, `year`, `thumbnail`, `stag`, `platform`, `stack`, `status`, `is_featured`, `is_open_sourced`, `repo`, `user_count`) VALUES
(1, 'Techishfellow Website', 'Landingpage', 'A static landing page for The Techishfellow Foundation', 'https://techishfellow.weebly.com', 2018, './assets/images/projects/techishfellow_website.jpg', NULL, 'website', 'weebly,html,css,javascript', 'inactive', 0, 0, NULL, 1023),
(2, 'HTML Video Player', 'Script', 'A simple to use browser based local video player', 'https://techishfellow.github.io/html_videoplayer/', 2018, './assets/images/projects/html_videoplayer_script.jpg', NULL, 'website', 'html,css,javascript', 'archived', 0, 1, 'techishfellow/techishfellow.github.io', NULL),
(3, 'NeoMods', 'Android App Store', 'An online App Store for modified android apps', 'https://neomods.ml', 2019, './assets/images/projects/neomods.jpg', NULL, 'website', 'wordpress,php,mysql,html,css,javascript', 'inactive', 0, 0, NULL, 2371),
(4, 'QuikLink', 'Link Shortener', 'A database less link shortener webapp', 'https://quik.ml', 2019, './assets/images/projects/quiklink.jpg', NULL, 'website', 'php,html,css,javascript', 'inactive', 0, 0, NULL, 500),
(5, 'NxtCountry', 'Android VPN App', 'A multi-layered OpenVPN protocol based VPN app for android', 'https://nxtcountryvpn.ml', 2020, './assets/images/projects/nxtvpn.jpg', NULL, 'android', 'java,xml,open vpn', 'inactive', 0, 0, NULL, 1056),
(6, 'TechishNews', 'Trending News Website', 'A trending tech news provider web platform', 'https://techishnews.ml', 2020, './assets/images/projects/techishnews.jpg', NULL, 'website', 'php,mysql,html,css,javascript', 'inactive', 0, 0, NULL, 1769),
(7, 'EzyBlog', 'Blogging Script', 'A simple and easy to deploy blogging website script', 'https://ezyblog.tk', 2021, './assets/images/projects/ezyblog.jpg', NULL, 'website', 'php,mysql,html,css,javascript', 'inactive', 0, 0, NULL, 900),
(8, 'QteeStream', 'P2P Video Streaming', 'A peer-to-peer video sharing platform webapp', 'https://qtee.ml', 2021, './assets/images/projects/qtee_stream.jpg', NULL, 'website', 'html,tailwindcss,jquery,php,mysql', 'archived', 0, 0, NULL, 2461),
(9, 'FantasyWalls', 'Wallpaper App', 'A cloud-based handcrafted wallpaper collection app for android', 'https://techishfellow.weebly.com/fantasywalls-official.html', 2021, './assets/images/projects/fantasywalls.jpg', NULL, 'android', 'java,xml', 'archived', 1, 0, NULL, 1253),
(10, 'ProURL', 'URL Management Tool', 'A powerful all-in-one link shortener and management tool webapp', 'https://prourl.eu.org', 2022, './assets/images/projects/prourl.jpg', NULL, 'website', 'html,sass,jquery,php,mysql', 'active', 1, 0, NULL, 3799),
(11, 'AdlinkflyBot', 'Telegram Bot Script', 'A Python based Telegram Bot Script for Adlinlfly PHP Link Shortener Websites', 'https://github.com/techishfellow/adlinkfly-telegram-bot', 2022, './assets/images/projects/adlinkfly_tgbot.jpg', NULL, 'bot', 'python', 'active', 1, 1, 'techishfellow/adlinkfly-telegram-bot', NULL),
(12, 'POCO X3 Pro Splasher', 'CLI Tool', 'A CLI tool to create Custom Splash Screen Logo for POCO X3 Pro (vayu) device', 'https://github.com/neosubhamoy/poco-x3-pro-custom-logo-image-maker', 2023, './assets/images/projects/x3p_splasher.jpg', NULL, 'crossplatform', 'batchfile,shell script', 'active', 0, 1, 'neosubhamoy/poco-x3-pro-custom-logo-image-maker', NULL),
(13, 'Subhamoy Biswas Portfolio', 'Website', 'Official portfolio website of Subhamoy Biswas (@neo_subhamoy)', 'https://neosubhamoy.com', 2023, './assets/images/projects/neosubhamoy_portfolio.jpg', NULL, 'website', 'html,tailwindcss,javascript,php,mysql', 'active', 0, 1, 'neosubhamoy/neosubhamoy-portfolio', NULL),
(14, 'PytubePP', 'YT Video Downloader', 'A Simple CLI Tool to Download Your Favourite YouTube Videos Effortlessly!', 'https://github.com/neosubhamoy/pytubepp', 2024, './assets/images/projects/pytubepp.jpg', NULL, 'crossplatform', 'python', 'active', 0, 1, 'neosubhamoy/pytubepp', NULL),
(15, 'PytubePP Helper', 'Desktop App', 'A Helper App for PytubePP Extension/Addon to Communicate with Pytube Post Processor CLI', 'https://github.com/neosubhamoy/pytubepp-helper', 2024, './assets/images/projects/pytubepp_helper.jpg', NULL, 'crossplatform', 'rust,tauri,react,typescript', 'active', 0, 1, 'neosubhamoy/pytubepp-helper', NULL),
(16, 'PytubePP Extension', 'Browser Addon', 'A Chrome/Firefox Extension/Addon to Download your Favourite YouTube Videos Effortlessly using Pytube Post Processor CLI', 'https://github.com/neosubhamoy/pytubepp-extension', 2024, './assets/images/projects/pytubepp_extension.jpg', NULL, 'extension', 'html,css,javascript', 'active', 0, 1, 'neosubhamoy/pytubepp-extension', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quick_actions`
--

CREATE TABLE `quick_actions` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `stag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quick_actions`
--

INSERT INTO `quick_actions` (`id`, `name`, `icon`, `link`, `stag`) VALUES
(1, 'Send Email', 'xtnsvhie.json', 'mailto:hey@neosubhamoy.com', 'contact'),
(2, 'Chat Online', 'fdxqrdfe.json', 'https://www.t.me/neo_subhamoy', 'contact'),
(3, 'Source Code', 'lzgmgrnn.json', 'https://github.com/neosubhamoy/neosubhamoy-portfolio', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `stag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `platform`, `icon`, `link`, `stag`) VALUES
(1, 'Instagram', 'fa-brands fa-instagram', 'https://instagram.com/neo_subhamoy', 'ig'),
(2, 'Github', 'fa-brands fa-github', 'https://github.com/neosubhamoy', NULL),
(3, 'Linkedin', 'fa-brands fa-linkedin', 'https://www.linkedin.com/in/neo-subhamoy', NULL),
(4, 'Facebook', 'fa-brands fa-facebook', 'https://www.facebook.com/profile.php?id=100076097318726', 'fb'),
(5, 'Twitter', 'fa-brands fa-x-twitter', 'https://twitter.com/neo_subhamoy', 'x'),
(6, 'Mastodon', 'fa-brands fa-mastodon', 'https://mastodon.social/@neo_subhamoy', NULL),
(7, 'XDA Forums', 'fa-solid fa-meteor', 'https://xdaforums.com/m/neo_subhamoy.12646695/', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `working_on`
--

CREATE TABLE `working_on` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `icon_color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `working_on`
--

INSERT INTO `working_on` (`id`, `title`, `icon`, `icon_color`) VALUES
(1, 'React Web Development', 'fa-brands fa-react', '#38BDF8'),
(2, 'Android OS & Apps', 'fa-brands fa-android', '#3FF989'),
(3, 'Automation & Python', 'fa-brands fa-python', '#CD6CFB'),
(4, 'Javascript Library', 'fa-brands fa-js', '#DCDF3F'),
(5, 'AI & ML', 'fa-solid fa-robot', '#EC4B4B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_actions`
--
ALTER TABLE `quick_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_on`
--
ALTER TABLE `working_on`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quick_actions`
--
ALTER TABLE `quick_actions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `working_on`
--
ALTER TABLE `working_on`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
