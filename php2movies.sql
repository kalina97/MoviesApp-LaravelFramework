-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 05:37 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivnost_korisnika`
--

CREATE TABLE `aktivnost_korisnika` (
  `idAktivnost` int(11) NOT NULL,
  `idKorisnik` int(11) NOT NULL,
  `aktivnost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `vreme` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aktivnost_korisnika`
--

INSERT INTO `aktivnost_korisnika` (`idAktivnost`, `idKorisnik`, `aktivnost`, `datum`, `vreme`) VALUES
(72, 1, ' User logged in', '2019-03-07', '17:15:39'),
(73, 1, ' User logged out', '2019-03-07', '17:16:30'),
(74, 2, ' the user has registered', '2019-03-07', '17:20:23'),
(75, 2, ' User logged in', '2019-03-07', '17:21:29'),
(76, 2, ' User logged out', '2019-03-07', '17:21:50'),
(77, 2, ' User logged in', '2019-03-07', '17:23:12'),
(78, 2, ' Contact for admin', '2019-03-07', '17:23:29'),
(79, 2, ' Contact for admin', '2019-03-07', '17:25:26'),
(80, 2, ' User logged out', '2019-03-07', '17:25:46'),
(81, 1, ' User logged in', '2019-03-07', '17:41:09'),
(82, 5, ' The user commented on news', '2019-03-07', '17:41:54'),
(83, 1, ' The user commented on news', '2019-03-07', '17:45:55'),
(84, 1, ' User logged out', '2019-03-07', '17:46:15'),
(85, 2, ' User logged in', '2019-03-07', '17:46:26'),
(86, 2, ' The user commented on news', '2019-03-07', '17:46:58'),
(87, 2, ' The user searching some movies', '2019-03-07', '17:50:41'),
(88, 2, ' User logged out', '2019-03-07', '17:51:11'),
(89, 1, ' User logged in', '2019-03-07', '18:21:05'),
(90, 1, ' Contact message for admin was sent', '2019-03-07', '18:21:45'),
(91, 1, ' Contact message for admin was sent', '2019-03-07', '18:23:36'),
(92, 3, ' The user has registered', '2019-03-07', '18:25:55'),
(93, 1, ' User logged out', '2019-03-07', '18:27:51'),
(94, 1, ' User logged in', '2019-03-07', '18:41:09'),
(95, 1, ' The user commented on news', '2019-03-07', '18:42:24'),
(96, 1, ' The user searching some movies', '2019-03-07', '18:42:51'),
(97, 1, ' User logged out', '2019-03-07', '18:42:54'),
(98, 1, ' User logged in', '2019-03-07', '18:57:12'),
(99, 1, ' User logged out', '2019-03-07', '18:57:24'),
(100, 2, ' User logged in', '2019-03-07', '18:57:40'),
(101, 2, ' User logged out', '2019-03-07', '18:57:44'),
(102, 1, ' User logged in', '2019-03-07', '19:07:58'),
(103, 1, ' The user searching some movies', '2019-03-07', '19:22:52'),
(104, 1, ' User logged out', '2019-03-07', '22:20:11'),
(105, 1, ' User logged in', '2019-03-07', '22:20:37'),
(106, 1, ' User logged out', '2019-03-07', '22:23:00'),
(107, 1, ' User logged in', '2019-03-08', '16:36:09'),
(108, 1, ' The user searching some movies', '2019-03-08', '16:37:26'),
(109, 1, ' The user searching some movies', '2019-03-08', '16:37:38'),
(110, 1, ' User logged out', '2019-03-08', '16:38:18'),
(111, 1, ' User logged in', '2019-03-09', '15:20:41'),
(112, 1, ' User logged out', '2019-03-09', '15:21:55'),
(113, 1, ' User logged in', '2019-03-09', '15:44:44'),
(114, 1, ' User logged out', '2019-03-09', '17:13:56'),
(115, 1, ' User logged in', '2019-03-09', '17:14:07'),
(116, 1, ' User logged out', '2019-03-09', '18:38:18'),
(117, 1, ' User logged in', '2019-03-09', '18:53:35'),
(118, 1, ' User logged out', '2019-03-09', '20:01:49'),
(119, 1, ' User logged in', '2019-03-09', '20:02:37'),
(120, 1, ' The user searching some movies', '2019-03-09', '20:08:14'),
(121, 1, ' The user searching some movies', '2019-03-09', '21:28:15'),
(122, 1, ' User logged out', '2019-03-09', '21:28:19'),
(123, 1, ' User logged in', '2019-03-13', '16:14:04'),
(127, 1, 'Admin added a new genre', '2019-03-13', '18:18:58'),
(128, 1, 'Admin added a new genre', '2019-03-13', '18:20:19'),
(129, 1, 'Admin added a new genre', '2019-03-13', '18:36:53'),
(130, 1, 'Admin added a new genre', '2019-03-13', '18:39:11'),
(131, 1, 'Admin added a new movie rating', '2019-03-13', '19:09:40'),
(132, 1, 'Admin added a new movie rating', '2019-03-13', '19:10:29'),
(133, 1, 'Admin added a new movie rating', '2019-03-13', '19:24:05'),
(134, 1, 'Admin deleted a movie rating', '2019-03-13', '19:25:10'),
(135, 1, 'Admin deleted an ip address', '2019-03-13', '19:34:35'),
(137, 1, 'Admin deleted some user activity', '2019-03-13', '19:38:27'),
(138, 1, 'Admin deleted a genre', '2019-03-13', '19:41:19'),
(139, 1, 'Admin deleted a comment', '2019-03-13', '20:02:09'),
(140, 1, 'Admin deleted a comment', '2019-03-13', '20:02:46'),
(141, 1, 'Admin added a new link to navigation', '2019-03-13', '20:28:24'),
(142, 1, 'Admin deleted a navigation link', '2019-03-13', '20:36:34'),
(143, 1, 'Admin added a new genre', '2019-03-13', '21:00:26'),
(144, 1, 'Admin deleted a genre', '2019-03-13', '21:00:32'),
(145, 1, 'Admin added a new movie rating', '2019-03-13', '21:10:38'),
(146, 1, 'Admin deleted a movie rating', '2019-03-13', '21:10:46'),
(147, 1, 'Admin added a new movie rating', '2019-03-13', '21:12:03'),
(148, 1, 'Admin deleted a movie rating', '2019-03-13', '21:12:13'),
(149, 1, 'Admin added a new movie rating', '2019-03-13', '21:12:27'),
(150, 1, 'Admin deleted a movie rating', '2019-03-13', '21:12:39'),
(151, 1, 'Admin added a new link to navigation', '2019-03-13', '21:22:41'),
(152, 1, 'Admin deleted a navigation link', '2019-03-13', '21:22:52'),
(153, 1, 'Admin added a new link to navigation', '2019-03-13', '21:27:39'),
(154, 1, 'Admin deleted a navigation link', '2019-03-13', '21:27:47'),
(155, 1, 'Admin added a new link to navigation', '2019-03-13', '21:27:57'),
(156, 1, 'Admin deleted a navigation link', '2019-03-13', '21:28:03'),
(157, 1, 'Admin deleted a comment', '2019-03-13', '21:31:48'),
(158, 1, 'Admin deleted an error', '2019-03-13', '21:33:11'),
(159, 1, 'Admin deleted an error', '2019-03-13', '21:33:38'),
(160, 1, 'Admin deleted an error', '2019-03-13', '21:33:54'),
(161, 1, 'Admin deleted an error', '2019-03-13', '21:34:10'),
(162, 1, ' The user commented on news', '2019-03-13', '21:42:57'),
(163, 1, ' The user searching some movies', '2019-03-13', '21:43:18'),
(164, 1, ' The user searching some movies', '2019-03-13', '21:43:26'),
(165, 1, ' User logged out', '2019-03-13', '21:43:43'),
(166, 4, ' The user has registered', '2019-03-13', '21:44:23'),
(167, 2, ' User logged in', '2019-03-13', '21:45:39'),
(168, 2, ' The user searching some movies', '2019-03-13', '21:45:54'),
(169, 2, ' User logged out', '2019-03-13', '21:46:18'),
(170, 1, ' User logged in', '2019-03-14', '20:43:08'),
(171, 1, 'Admin deleted an error', '2019-03-14', '20:44:54'),
(172, 1, 'Admin deleted an error', '2019-03-14', '20:47:22'),
(173, 1, 'Admin added a new user', '2019-03-14', '21:03:48'),
(174, 1, 'Admin edited an user', '2019-03-14', '22:32:46'),
(175, 1, 'Admin edited an user', '2019-03-14', '22:35:04'),
(176, 1, 'Admin edited an user', '2019-03-14', '22:37:15'),
(177, 1, 'Admin edited an user', '2019-03-14', '22:38:09'),
(178, 1, 'Admin edited an user', '2019-03-14', '22:39:16'),
(179, 1, 'Admin edited an user', '2019-03-14', '22:40:24'),
(180, 1, 'Admin edited an user', '2019-03-14', '22:41:16'),
(181, 1, 'Admin edited an user', '2019-03-14', '22:42:02'),
(182, 1, 'Admin edited an user', '2019-03-14', '22:44:38'),
(183, 1, 'Admin deleted an user', '2019-03-14', '22:50:46'),
(184, 1, 'Admin added a new user', '2019-03-14', '22:51:41'),
(185, 1, 'Admin deleted an user', '2019-03-14', '22:52:00'),
(186, 1, 'Admin deleted an error', '2019-03-14', '22:53:51'),
(187, 1, 'Admin deleted an error', '2019-03-14', '22:53:57'),
(188, 1, 'Admin deleted an error', '2019-03-14', '22:54:01'),
(189, 1, 'Admin edited an user', '2019-03-14', '23:01:21'),
(190, 1, 'Admin edited an user', '2019-03-14', '23:01:56'),
(191, 1, 'Admin edited an user', '2019-03-14', '23:02:24'),
(192, 1, 'Admin edited an user', '2019-03-14', '23:14:02'),
(193, 1, 'Admin edited an user', '2019-03-14', '23:17:25'),
(194, 1, ' User logged out', '2019-03-14', '23:18:21'),
(195, 1, ' User logged in', '2019-03-15', '09:09:04'),
(196, 1, 'Admin edited an user', '2019-03-15', '09:10:35'),
(197, 1, 'Admin edited an user', '2019-03-15', '09:10:49'),
(198, 1, 'Admin edited an user', '2019-03-15', '09:10:57'),
(199, 1, 'Admin deleted an user', '2019-03-15', '09:11:19'),
(200, 1, 'Admin added a new movie', '2019-03-15', '10:00:19'),
(201, 1, 'Admin added a new movie', '2019-03-15', '10:03:38'),
(202, 1, 'Admin added a new movie', '2019-03-15', '10:08:52'),
(203, 1, ' User logged out', '2019-03-15', '10:25:50'),
(204, 1, ' User logged in', '2019-03-15', '10:26:02'),
(205, 1, ' User logged out', '2019-03-15', '10:43:44'),
(206, 1, ' User logged in', '2019-03-15', '10:43:56'),
(207, 1, 'Admin added a new movie', '2019-03-15', '10:54:27'),
(208, 1, 'Admin added a new movie', '2019-03-15', '11:30:40'),
(209, 1, 'Admin added a new movie', '2019-03-15', '11:37:05'),
(210, 1, 'Admin deleted a movie', '2019-03-15', '11:37:30'),
(211, 1, 'Admin added a new movie', '2019-03-15', '11:39:30'),
(212, 1, 'Admin deleted a movie', '2019-03-15', '11:39:43'),
(213, 1, 'Admin added a new movie', '2019-03-15', '11:43:32'),
(214, 1, 'Admin deleted a movie', '2019-03-15', '11:44:22'),
(215, 1, 'Admin added a new movie', '2019-03-15', '11:50:51'),
(216, 1, 'Admin deleted a movie', '2019-03-15', '12:00:13'),
(217, 1, 'Admin added a new movie', '2019-03-15', '12:04:29'),
(218, 1, 'Admin deleted a movie', '2019-03-15', '12:04:53'),
(219, 1, 'Admin added a new movie', '2019-03-15', '12:06:55'),
(220, 1, 'Admin added a new movie', '2019-03-15', '12:09:02'),
(221, 1, 'Admin added a new movie', '2019-03-15', '12:18:36'),
(222, 1, ' User logged out', '2019-03-15', '12:20:44'),
(223, 1, ' User logged in', '2019-03-15', '12:20:57'),
(224, 1, 'Admin added a new movie', '2019-03-15', '12:21:30'),
(225, 1, 'Admin added a new movie', '2019-03-15', '12:24:43'),
(226, 1, 'Admin deleted a movie', '2019-03-15', '12:25:06'),
(227, 1, 'Admin deleted a comment', '2019-03-15', '12:25:35'),
(228, 1, 'Admin added some news', '2019-03-15', '12:45:43'),
(229, 1, 'Admin edited some news', '2019-03-15', '13:26:32'),
(230, 1, 'Admin edited some news', '2019-03-15', '13:28:49'),
(231, 1, 'Admin edited some news', '2019-03-15', '13:31:23'),
(232, 1, 'Admin edited some news', '2019-03-15', '13:35:04'),
(233, 1, 'Admin edited some news', '2019-03-15', '13:44:36'),
(234, 1, 'Admin deleted some news', '2019-03-15', '13:45:04'),
(235, 1, 'Admin added some news', '2019-03-15', '13:45:56'),
(236, 1, 'Admin deleted some news', '2019-03-15', '13:46:16'),
(237, 1, 'Admin added some news', '2019-03-15', '13:47:08'),
(238, 1, 'Admin edited some news', '2019-03-15', '13:47:29'),
(239, 1, 'Admin deleted some news', '2019-03-15', '13:47:43'),
(240, 1, 'Admin deleted an error', '2019-03-15', '13:48:55'),
(241, 1, 'Admin deleted an error', '2019-03-15', '13:49:00'),
(242, 1, 'Admin deleted an error', '2019-03-15', '13:49:04'),
(243, 1, 'Admin deleted a genre', '2019-03-15', '13:49:36'),
(244, 1, 'Admin added a new movie', '2019-03-15', '13:51:46'),
(245, 1, 'Admin deleted a movie', '2019-03-15', '13:54:30'),
(246, 1, 'Admin added a new movie', '2019-03-15', '13:56:11'),
(247, 1, 'Admin deleted a movie', '2019-03-15', '13:56:50'),
(248, 1, 'Admin added a new movie', '2019-03-15', '14:01:25'),
(249, 1, 'Admin deleted a movie', '2019-03-15', '14:02:21'),
(250, 1, 'Admin added a new genre', '2019-03-15', '14:08:18'),
(251, 1, 'Admin added a new genre', '2019-03-15', '14:08:42'),
(252, 1, 'Admin added a new genre', '2019-03-15', '14:09:07'),
(253, 1, 'Admin deleted a genre', '2019-03-15', '14:09:20'),
(254, 1, 'Admin deleted a genre', '2019-03-15', '14:09:24'),
(255, 1, 'Admin deleted a genre', '2019-03-15', '14:09:29'),
(256, 1, 'Admin added some news', '2019-03-15', '14:11:03'),
(257, 1, 'Admin deleted some news', '2019-03-15', '14:12:12'),
(258, 1, 'Admin added some news', '2019-03-15', '14:12:28'),
(259, 1, 'Admin deleted some news', '2019-03-15', '14:12:40'),
(260, 1, 'Admin added a new movie rating', '2019-03-15', '14:13:44'),
(261, 1, 'Admin deleted a movie rating', '2019-03-15', '14:13:55'),
(262, 1, 'Admin added a new link to navigation', '2019-03-15', '14:14:52'),
(263, 1, 'Admin deleted a navigation link', '2019-03-15', '14:14:58'),
(264, 1, 'Admin added a new user', '2019-03-15', '14:25:02'),
(265, 1, 'Admin added a new genre', '2019-03-15', '14:39:35'),
(266, 1, 'Admin edited a genre', '2019-03-15', '14:51:15'),
(267, 1, 'Admin added a new link to navigation', '2019-03-15', '14:57:02'),
(268, 1, 'Admin edited a navigation link', '2019-03-15', '15:12:55'),
(269, 1, 'Admin edited a navigation link', '2019-03-15', '15:14:13'),
(270, 1, 'Admin added a new link to navigation', '2019-03-15', '15:14:29'),
(271, 1, 'Admin deleted a navigation link', '2019-03-15', '15:14:40'),
(272, 1, 'Admin edited a navigation link', '2019-03-15', '15:14:54'),
(273, 1, 'Admin deleted a navigation link', '2019-03-15', '15:14:59'),
(274, 1, 'Admin deleted an error', '2019-03-15', '15:15:20'),
(275, 1, 'Admin deleted an error', '2019-03-15', '15:15:24'),
(276, 1, 'Admin deleted an error', '2019-03-15', '15:15:29'),
(277, 1, 'Admin deleted an error', '2019-03-15', '15:15:33'),
(278, 1, 'Admin deleted a comment', '2019-03-15', '15:19:57'),
(279, 1, 'Admin deleted a comment', '2019-03-15', '15:20:16'),
(280, 1, ' The user commented on news', '2019-03-15', '15:21:26'),
(281, 1, ' The user searching some movies', '2019-03-15', '15:23:52'),
(282, 1, ' User logged out', '2019-03-15', '15:24:16'),
(283, 2, ' User logged in', '2019-03-15', '15:24:36'),
(284, 2, ' User logged out', '2019-03-15', '15:24:45'),
(285, 1, ' User logged in', '2019-03-15', '15:37:41'),
(286, 1, ' The user searching some movies', '2019-03-15', '15:39:00'),
(287, 1, ' User logged out', '2019-03-15', '15:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `idFilm` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trajanjeMin` int(3) NOT NULL,
  `trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datumKreiranja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `glavneUloge` text COLLATE utf8_unicode_ci NOT NULL,
  `kreirao` int(11) NOT NULL DEFAULT '1',
  `idZanr` int(11) NOT NULL,
  `idOcena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`idFilm`, `naziv`, `opis`, `slika`, `trajanjeMin`, `trailer`, `datumKreiranja`, `glavneUloge`, `kreirao`, `idZanr`, `idOcena`) VALUES
(1, 'The Equalizer', 'A man believes he has put his mysterious past behind him and has dedicated himself to beginning a new, quiet life. But when he meets a young girl under the control of ultra-violent Russian gangsters, he can\'t stand idly by - he has to help her.', 'movie1.jpg', 132, 'https://www.youtube.com/embed/VjctHUEmutw', '2019-03-01 00:00:00', ' Denzel Washington, Marton Csokas, Chloë Grace Moretz', 1, 1, 1),
(2, 'Mad Max', 'In a post-apocalyptic wasteland, a woman rebels against a tyrannical ruler in search for her homeland with the aid of a group of female prisoners, a psychotic worshiper, and a drifter named Max.', 'movie2.jpg', 120, 'https://www.youtube.com/embed/hEJnMQG9ev8', '2019-03-01 10:20:36', ' Tom Hardy, Charlize Theron, Nicholas Hoult', 1, 1, 2),
(3, 'Black Panther', 'T\'Challa, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and must confront a challenger from his country\'s past.', 'movie3.jpg', 134, 'https://www.youtube.com/embed/xjDjIWPwcPU', '2019-03-01 09:28:35', ' Chadwick Boseman, Michael B. Jordan, Lupita Nyong\'o', 1, 1, 3),
(4, 'The Avengers', 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.', 'movie4.jpg', 143, 'https://www.youtube.com/embed/eOrNdBpGMv8', '2019-03-01 11:13:12', ' Robert Downey Jr., Chris Evans, Scarlett Johansson ', 1, 1, 2),
(5, 'Avatar', 'A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 'movie5.jpg', 162, 'https://www.youtube.com/embed/6ziBFh3V1aM', '2019-03-02 11:07:03', ' Sam Worthington, Zoe Saldana, Sigourney Weaver', 1, 1, 4),
(6, 'Driver', 'After being coerced into working for a crime boss, a young getaway driver finds himself taking part in a heist doomed to fail.', 'movie6.jpg', 112, 'https://www.youtube.com/embed/dw3F9lfA21Y', '2019-03-02 12:11:02', ' Ansel Elgort, Jon Bernthal, Jon Hamm ', 1, 1, 5),
(7, 'The Godfather', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'movie7.jpg', 175, 'https://www.youtube.com/embed/sY1S34973zA', '2019-03-04 10:02:01', ' Marlon Brando, Al Pacino, James Caan', 1, 2, 6),
(8, 'Heat', 'A group of professional bank robbers start to feel the heat from police when they unknowingly leave a clue at their latest heist.', 'movie8.jpg', 170, 'https://www.youtube.com/embed/2GfZl4kuVNI', '2019-03-04 08:20:00', ' Al Pacino, Robert De Niro, Val Kilmer', 1, 2, 7),
(9, 'The Hateful Eight', 'In the dead of a Wyoming winter, a bounty hunter and his prisoner find shelter in a cabin currently inhabited by a collection of nefarious characters.', 'movie9.jpg', 187, 'https://www.youtube.com/embed/nIOmotayDMY', '2019-03-03 11:17:00', ' Samuel L. Jackson, Kurt Russell, Jennifer Jason Leigh', 1, 2, 4),
(10, 'Prisoners', 'When Keller Dover\'s daughter and her friend go missing, he takes matters into his own hands as the police pursue multiple leads and the pressure mounts.', 'movie10.jpg', 153, 'https://www.youtube.com/embed/bpXfcTF6iVk', '2019-03-05 16:14:14', ' Hugh Jackman, Jake Gyllenhaal, Viola Davis', 1, 2, 2),
(11, 'Green Mile', 'The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.', 'movie11.jpg', 189, 'https://www.youtube.com/embed/Ki4haFrqSrw', '2019-03-06 08:19:00', ' Tom Hanks, Michael Clarke Duncan, David Morse', 1, 2, 8),
(12, 'The Conjuring 2', 'Ed and Lorraine Warren travel to North London to help a single mother raising 4 children alone in a house plagued by a supernatural spirit.', 'hr1.jpg', 134, 'https://www.youtube.com/embed/VFsmuRPClr4', '2019-03-04 07:28:00', 'Vera Farmiga, Patrick Wilson, Madison Wolfe ', 1, 3, 9),
(13, 'Don\'t Breathe', 'Hoping to walk away with a massive fortune, a trio of thieves break into the house of a blind man who isn\'t as helpless as he seems.', 'hr10.jpg', 88, 'https://www.youtube.com/embed/76yBTNDB6vU', '2019-03-13 07:33:18', ' Stephen Lang, Jane Levy, Dylan Minnette', 1, 3, 10),
(14, 'Sinister', 'Washed-up true-crime writer Ellison Oswalt finds a box of super 8 home movies that suggest the murder he is currently researching is the work of a serial killer whose work dates back to the 1960s.', 'movie12.jpg', 110, 'https://www.youtube.com/embed/_kbQAJR9YWQ', '2019-03-03 13:13:00', ' Ethan Hawke, Juliet Rylance, James Ransone', 1, 3, 11),
(15, 'Insidious', 'A family looks to prevent evil spirits from trapping their comatose child in a realm called The Further.', 'movie13.jpg', 103, 'https://www.youtube.com/embed/zuZnRUcoWos', '2019-03-06 11:10:00', ' Patrick Wilson, Rose Byrne, Ty Simpkins ', 1, 3, 12),
(16, 'Cabin In The Woods', 'Five friends go for a break at a remote cabin, where they get more than they bargained for, discovering the truth behind the cabin in the woods.', 'movie14.jpg', 95, 'https://www.youtube.com/embed/NsIilFNNmkY', '2019-03-05 10:14:00', ' Kristen Connolly, Chris Hemsworth, Anna Hutchison', 1, 3, 13),
(17, 'The Mr. Bean\'s Holliday', 'Mr. Bean wins a trip to Cannes where he unwittingly separates a young boy from his father and must help the two come back together. On the way he discovers France, bicycling, and true love, among other things.', 'movie15.jpg', 90, 'https://www.youtube.com/embed/hSxLUd8aly4', '2019-03-03 12:27:00', ' Rowan Atkinson, Willem Dafoe, Steve Pemberton ', 1, 4, 11),
(18, 'The Pink Panther', 'Bumbling Inspector Clouseau must solve the murder of a famous soccer coach and find out who stole the infamous Pink Panther diamond.', 'movie16.jpg', 93, 'https://www.youtube.com/embed/dKxgj5FxmZo', '2019-03-08 07:34:00', ' Steve Martin, Kevin Kline, Jean Reno ', 1, 4, 14),
(19, 'Mr. & Mrs. Smith', 'A bored married couple is surprised to learn that they are both assassins hired by competing agencies to kill each other.', 'movie17.jpg', 120, 'https://www.youtube.com/embed/CZ0B22z22pI', '2019-03-01 13:38:00', ' Brad Pitt, Angelina Jolie, Adam Brody', 1, 4, 15),
(20, 'The Medallion', 'A Hong Kong detective suffers a fatal accident involving a mysterious medallion and is transformed into an immortal warrior with superhuman powers.', 'movie18.jpg', 88, 'https://www.youtube.com/embed/tMKlfGxzZD4', '2019-03-07 17:29:00', ' Jackie Chan, Lee Evans, Claire Forlani', 1, 4, 16),
(21, 'Let\'s Be Cops', 'Two struggling pals dress as police officers for a costume party and become neighborhood sensations. But when these newly-minted \"heroes\" get tangled in a real life web of mobsters and dirty detectives, they must put their fake badges on the line.', 'movie19.jpg', 104, 'https://www.youtube.com/embed/UKIAZjs__Xc', '2019-03-09 17:12:00', ' Jake Johnson, Damon Wayans Jr., Rob Riggle', 1, 4, 11),
(22, 'Titanic', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'movie20.jpg', 194, 'https://www.youtube.com/embed/-iRajLSA8TA', '2019-03-11 14:20:00', ' Leonardo DiCaprio, Kate Winslet, Billy Zane', 1, 5, 4),
(23, 'The Sin City', 'A film that explores the dark and miserable town, Basin City, and tells the story of three different people, all caught up in violent corruption.', 'movie21.jpg', 124, 'https://www.youtube.com/embed/T2Dj6ktPU5c', '2019-03-12 18:24:00', 'Mickey Rourke, Clive Owen, Bruce Willis', 1, 5, 17),
(24, 'The Prestige', 'After a tragic accident, two stage magicians engage in a battle to create the ultimate illusion while sacrificing everything they have to outwit each other.', 'movie22.jpg', 130, 'https://www.youtube.com/embed/JucYLWfFiAs', '2019-03-06 09:14:00', ' Christian Bale, Hugh Jackman, Scarlett Johansson', 1, 5, 8),
(25, 'The Revenant', 'A frontiersman on a fur trading expedition in the 1820s fights for survival after being mauled by a bear and left for dead by members of his own hunting team.', 'movie23.jpg', 156, 'https://www.youtube.com/embed/LoebZZ8K5N0', '2019-03-01 13:04:00', ' Leonardo DiCaprio, Tom Hardy, Will Poulter', 1, 5, 17),
(26, 'Apocalypto', 'As the Mayan kingdom faces its decline, a young man is taken on a perilous journey to a world ruled by fear and oppression.', 'movie24.jpg', 139, 'https://www.youtube.com/embed/pXuwjdQx924', '2019-03-05 10:42:00', 'Gerardo Taracena, Raoul Max Trujillo, Dalia Hernández', 1, 5, 4),
(27, 'Shawshank Redemption', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'movie26.jpg', 142, 'https://www.youtube.com/embed/6hB3S9bIaco', '2019-03-08 08:37:00', 'Tim Robbins, Morgan Freeman, Bob Gunton ', 1, 6, 18),
(28, 'The Notebook', 'A poor yet passionate young man falls in love with a rich young woman, giving her a sense of freedom, but they are soon separated because of their social differences.', 'movie27.jpg', 123, 'https://www.youtube.com/embed/FC6biTjEyZw', '2019-03-03 12:11:00', 'Gena Rowlands, James Garner, Rachel McAdams', 1, 6, 19),
(29, 'Gladiator', 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.', 'movie29.jpg', 155, 'https://www.youtube.com/embed/owK1qxDselE', '2019-03-01 03:15:00', 'Russell Crowe, Joaquin Phoenix, Connie Nielsen', 1, 6, 8),
(30, 'The Beautiful Mind', 'After John Nash, a brilliant but asocial mathematician, accepts secret work in cryptography, his life takes a turn for the nightmarish.', 'movie30.jpg', 135, 'https://www.youtube.com/embed/9wZM7CQY130', '2019-03-07 10:08:00', 'Russell Crowe, Ed Harris, Jennifer Connelly', 1, 6, 7),
(31, 'The Lake House', 'A lonely doctor, who once occupied an unusual lakeside house, begins exchanging love letters with its former resident, a frustrated architect. They must try to unravel the mystery behind their extraordinary romance before it\'s too late.', 'movie31.jpg', 99, 'https://www.youtube.com/embed/fQ5lPbssHS8', '2019-03-04 07:19:00', ' Keanu Reeves, Sandra Bullock, Christopher Plummer', 1, 6, 20),
(32, 'Jungle Book', 'After a threat from the tiger Shere Khan forces him to flee the jungle, a man-cub named Mowgli embarks on a journey of self discovery with the help of panther Bagheera and free-spirited bear Baloo.', 'movie33.jpg', 106, 'https://www.youtube.com/embed/5mkm22yO-bs', '2019-03-04 08:31:00', ' Neel Sethi, Bill Murray, Ben Kingsley', 1, 7, 9),
(33, 'The Thor', 'The powerful, but arrogant god Thor, is cast out of Asgard to live amongst humans in Midgard (Earth), where he soon becomes one of their finest defenders.', 'movie35.jpg', 115, 'https://www.youtube.com/embed/JOddp-nlNvQ', '2019-03-03 14:15:00', ' Chris Hemsworth, Anthony Hopkins, Natalie Portman', 1, 7, 13),
(34, 'HellBoy', 'A demon, raised from infancy after being conjured by and rescued from the Nazis, grows up to become a defender against the forces of darkness.', 'movie36.jpg', 122, 'https://www.youtube.com/embed/15FHg6BnetE', '2019-03-03 15:12:00', ' Ron Perlman, Doug Jones, Selma Blair', 1, 7, 12),
(35, 'Lord Of The Rings - Fellowship of the ring', 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.', 'movie37.jpg', 178, 'https://www.youtube.com/embed/V75dMMIW2B4', '2019-03-03 06:11:00', ' Elijah Wood, Ian McKellen, Orlando Bloom ', 1, 7, 21),
(36, 'Mr Nobody', 'A boy stands on a station platform as a train is about to leave. Should he go with his mother or stay with his father? Infinite possibilities arise from this decision. As long as he doesn\'t choose, anything is possible.', 'movie39.jpg', 141, 'https://www.youtube.com/embed/9k8SoLS0KwU', '2019-03-13 09:31:00', ' Jared Leto, Sarah Polley, Diane Kruger ', 1, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ip_adresa`
--

CREATE TABLE `ip_adresa` (
  `idIp` int(11) NOT NULL,
  `ipAdresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ip_adresa`
--

INSERT INTO `ip_adresa` (`idIp`, `ipAdresa`) VALUES
(1, '127.0.0.1'),
(2, '127.0.0.1'),
(3, '127.0.0.1'),
(4, '127.0.0.1'),
(5, '127.0.0.1'),
(6, '127.0.0.1'),
(7, '127.0.0.1'),
(8, '127.0.0.1'),
(9, '127.0.0.1'),
(10, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `idKomentar` int(11) NOT NULL,
  `imeKorisnika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8_unicode_ci NOT NULL,
  `datumKom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idVest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`idKomentar`, `imeKorisnika`, `komentar`, `datumKom`, `idVest`) VALUES
(1, 'Nikola', 'Bas lepo...', '2019-03-05', 1),
(2, 'Nikola', 'Wow!!!', '2019-03-06', 6),
(3, 'Nikola', 'Awesome', '2019-03-07', 6),
(7, 'Nikola', 'fsdgfsdgsdg', '2019-03-08', 2),
(8, 'Nikola', 'fdshshshs', '2019-03-09', 2),
(9, 'Nikola', 'asdfgh', '2019-03-03', 2),
(10, 'Nikola', 'dadafafaaf', '2019-03-09', 4),
(11, 'Nikola', 'ajde sad', '2019-03-23', 4),
(12, 'Nikola', 'martovsaki', '2019-03-30', 4),
(13, 'Nikola', 'jos malo', '2019-03-31', 4),
(14, 'Nikola', 'Ajfeeeeeeelll', '2019-03-10', 1),
(15, 'Nikola', 'Molim te', '2019-03-22', 7),
(16, 'Nikola', 'Molim te', '2019-03-22', 7),
(17, 'Nikola', 'Molim te', '2019-03-22', 7),
(18, 'Nikola', 'dadada', '2019-03-17', 7),
(19, 'Nikola', 'rekaosam', '2019-03-14', 7),
(20, 'Nikola', 'dasdada', '2019-03-31', 7),
(21, 'Nikola', 'mirkoca', '2019-03-28', 7),
(22, 'Nikola', 'Martovksa', '2019-03-19', 7),
(23, 'Nikola', 'Danasnji komentar', '2019-03-05', 1),
(24, 'Nikola', 'Opet neki', '2019-03-29', 4),
(25, 'Nevena', 'Prvi april', '2019-04-01', 1),
(26, 'Nevena', 'Aprilski rok', '2019-04-03', 7),
(27, 'Nikola', 'Vudi Alen', '2019-03-06', 10),
(28, 'Nikola', 'aaaaaaa', '2019-03-23', 2),
(29, 'Nikola', 'Ajde ajde', '2019-03-07', 3),
(30, 'Kalina', 'dobar film', '2019-03-07', 1),
(37, 'Nikola', 'Comment added', '2019-03-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `aktivan` int(1) NOT NULL,
  `datum_registracije` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uloga_id` int(3) NOT NULL,
  `korisnicko_ime` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `lozinka`, `aktivan`, `datum_registracije`, `uloga_id`, `korisnicko_ime`, `token`) VALUES
(1, 'Nikola', 'Kalincevic', 'kalincevicnikola8@gmail.com', '79d4b4306b05ae785e12817466ef806a', 1, '2019-03-07 18:04:00', 1, 'kalina', '2e24b1BQZKqdp2CV3QV5nUEsqSg1ygegLmqRyge'),
(2, 'Kalina', 'Kalinic', 'nikola.kalincevic.40.16@ict.edu.rs', '9a923c29046531b1fb11c2db98662c97', 1, '2019-03-07 18:20:23', 2, 'kalinari', '876ee80fd113d36ef9744ff7f65b5ee0eff41ff1'),
(3, 'Neko', 'Nesto', 'nekoa123@gmail.com', '91ca82ccb1859088141587e9a506c1b9', 1, '2019-03-07 19:25:55', 2, 'neko', '216212aa9ecd1b992c9bf8355655fa4fe2cb27b0'),
(5, 'Nekoa', 'Dodata', 'vaki91@gmail.com', 'e4a4a92b43c5427a86836f2336eafc39', 0, '2019-03-15 15:25:02', 2, 'dada', '5500c4fc72b850a00607fa35d77d7a913e1f9f23');

-- --------------------------------------------------------

--
-- Table structure for table `linkovi`
--

CREATE TABLE `linkovi` (
  `idLink` int(10) NOT NULL,
  `imeLinka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `putanja` text COLLATE utf8_unicode_ci NOT NULL,
  `roditelj` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linkovi`
--

INSERT INTO `linkovi` (`idLink`, `imeLinka`, `putanja`, `roditelj`) VALUES
(1, 'Home', '/movies', 0),
(2, 'News', '/news', 0),
(3, 'Movie List', '/movie-list', 0),
(4, 'Contact', '/contact', 0),
(5, 'Register', '/register', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log_greske`
--

CREATE TABLE `log_greske` (
  `idGreska` int(11) NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `vreme` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log_greske`
--

INSERT INTO `log_greske` (`idGreska`, `tekst`, `datum`, `vreme`) VALUES
(11, 'Login failed - Unprocessable Entity', '2019-03-07', '18:40:50'),
(12, 'Login failed - Unprocessable Entity', '2019-03-07', '18:46:56'),
(13, 'Login failed - Unprocessable Entity', '2019-03-07', '18:47:37'),
(14, 'Login failed - Unprocessable Entity', '2019-03-07', '18:48:11'),
(15, 'Login failed - Unprocessable Entity', '2019-03-07', '18:56:38'),
(16, 'Login failed - Unprocessable Entity', '2019-03-07', '22:20:21'),
(17, 'Login failed - Unprocessable Entity', '2019-03-08', '16:35:56'),
(18, 'Login failed - Unprocessable Entity', '2019-03-09', '15:20:27'),
(19, 'The user with ip_address127.0.0.1trying to access', '2019-03-09', '15:22:00'),
(20, 'The user with ip_address 127.0.0.1 trying to access unauthorized to admin page!', '2019-03-09', '15:23:33'),
(21, 'The user with ip_address 127.0.0.1 trying to access unauthorized to admin page!', '2019-03-09', '15:23:40'),
(22, 'The user with ip_address 127.0.0.1 trying to access unauthorized to admin page!', '2019-03-09', '15:24:34'),
(23, 'The user with ip_address 127.0.0.1 trying to access unauthorized to admin page!', '2019-03-09', '15:37:11'),
(24, 'The user with ip_address 127.0.0.1 trying to access unauthorized to admin page!', '2019-03-09', '15:37:24'),
(26, 'The user with ip_address 127.0.0.1 trying unauthorized access to admin page!', '2019-03-09', '20:01:53'),
(35, 'Editing user failed', '2019-03-14', '21:54:12'),
(36, 'Editing user failed', '2019-03-14', '21:55:14'),
(37, 'Editing user failed', '2019-03-14', '21:57:51'),
(38, 'Editing user failed', '2019-03-14', '22:04:16'),
(39, 'Editing user failed', '2019-03-14', '22:08:44'),
(46, 'Editing user failed', '2019-03-14', '23:02:37'),
(47, 'Editing user failed', '2019-03-14', '23:03:00'),
(48, 'Editing user failed', '2019-03-14', '23:03:17'),
(49, 'Editing user failed', '2019-03-14', '23:04:05'),
(50, 'Editing user failed', '2019-03-14', '23:06:17'),
(52, 'Editing user failed', '2019-03-14', '23:09:51'),
(53, 'Editing user failed', '2019-03-14', '23:10:07'),
(54, 'Editing user failed', '2019-03-14', '23:12:10'),
(55, 'Editing user failed', '2019-03-14', '23:12:37'),
(56, 'Editing user failed', '2019-03-14', '23:12:54'),
(57, 'Editing user failed', '2019-03-14', '23:13:34'),
(58, 'Editing user failed', '2019-03-14', '23:14:14'),
(59, 'Editing user failed', '2019-03-14', '23:14:52'),
(60, 'Editing user failed', '2019-03-14', '23:15:03'),
(61, 'Editing user failed', '2019-03-14', '23:15:32'),
(62, 'Editing user failed', '2019-03-14', '23:16:19'),
(63, 'Editing user failed', '2019-03-14', '23:17:02'),
(64, 'Editing user failed', '2019-03-14', '23:17:34'),
(68, 'Adding movie failed', '2019-03-15', '10:11:42'),
(69, 'Adding movie failed', '2019-03-15', '10:16:23'),
(70, 'Adding movie failed', '2019-03-15', '10:17:26'),
(71, 'Adding movie failed', '2019-03-15', '10:19:06'),
(72, 'Adding movie failed', '2019-03-15', '10:22:13'),
(73, 'Adding movie failed', '2019-03-15', '10:27:14'),
(74, 'Adding movie failed', '2019-03-15', '10:30:12'),
(75, 'Adding movie failed', '2019-03-15', '10:34:53'),
(76, 'Adding movie failed', '2019-03-15', '10:40:32'),
(77, 'Adding movie failed', '2019-03-15', '10:44:41'),
(81, 'ErrorException: unlink(C:\\xampp\\htdocs\\sajtPhp2\\public\\images): Permission denied in C:\\xampp\\htdocs\\sajtPhp2\\app\\Http\\Controllers\\Admin\\MoviesController.php:148\nStack trace:\n#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'unlink(C:\\\\xampp...\', \'C:\\\\xampp\\\\htdocs...\', 148, Array)\n#1 C:\\xampp\\htdocs\\sajtPhp2\\app\\Http\\Controllers\\Admin\\MoviesController.php(148): unlink(\'C:\\\\xampp\\\\htdocs...\')\n#2 [internal function]: App\\Http\\Controllers\\Admin\\MoviesController->destroy(Object(Illuminate\\Http\\Request), \'46\')\n#3 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#4 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'destroy\', Array)\n#5 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(219): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\Admin\\MoviesController), \'destroy\')\n#6 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(176): Illuminate\\Routing\\Route->runController()\n#7 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(680): Illuminate\\Routing\\Route->run()\n#8 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#9 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#10 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#11 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#12 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(75): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#13 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#14 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#15 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#16 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#17 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#18 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(59): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(104): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(682): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#29 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(657): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#30 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(623): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#31 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(612): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#32 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))\n#33 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#34 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\fideloper\\proxy\\src\\TrustProxies.php(57): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#35 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Fideloper\\Proxy\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#36 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#37 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#38 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#39 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#40 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#43 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#46 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(62): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#47 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#48 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#49 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(104): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#50 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#51 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#52 C:\\xampp\\htdocs\\sajtPhp2\\public\\index.php(55): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#53 C:\\xampp\\htdocs\\sajtPhp2\\server.php(21): require_once(\'C:\\\\xampp\\\\htdocs...\')\n#54 {main}', '2019-03-15', '11:16:55'),
(82, 'ErrorException: unlink(C:\\xampp\\htdocs\\sajtPhp2\\public\\images): Permission denied in C:\\xampp\\htdocs\\sajtPhp2\\app\\Http\\Controllers\\Admin\\MoviesController.php:148\nStack trace:\n#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'unlink(C:\\\\xampp...\', \'C:\\\\xampp\\\\htdocs...\', 148, Array)\n#1 C:\\xampp\\htdocs\\sajtPhp2\\app\\Http\\Controllers\\Admin\\MoviesController.php(148): unlink(\'C:\\\\xampp\\\\htdocs...\')\n#2 [internal function]: App\\Http\\Controllers\\Admin\\MoviesController->destroy(Object(Illuminate\\Http\\Request), \'48\')\n#3 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#4 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'destroy\', Array)\n#5 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(219): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\Admin\\MoviesController), \'destroy\')\n#6 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(176): Illuminate\\Routing\\Route->runController()\n#7 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(680): Illuminate\\Routing\\Route->run()\n#8 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#9 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#10 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#11 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#12 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(75): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#13 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#14 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#15 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#16 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#17 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#18 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(59): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(104): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(682): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#29 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(657): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#30 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(623): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#31 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(612): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#32 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))\n#33 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#34 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\fideloper\\proxy\\src\\TrustProxies.php(57): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#35 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Fideloper\\Proxy\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#36 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#37 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#38 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#39 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#40 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#43 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#46 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(62): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#47 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#48 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#49 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(104): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#50 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#51 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#52 C:\\xampp\\htdocs\\sajtPhp2\\public\\index.php(55): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#53 C:\\xampp\\htdocs\\sajtPhp2\\server.php(21): require_once(\'C:\\\\xampp\\\\htdocs...\')\n#54 {main}', '2019-03-15', '11:20:05'),
(83, 'Movie deleting failed', '2019-03-15', '11:20:06'),
(86, 'Movie deleting failed', '2019-03-15', '11:23:55'),
(93, 'Movie deleting failed', '2019-03-15', '11:29:41'),
(94, 'ErrorException: unlink(C:\\xampp\\htdocs\\sajtPhp2\\public\\images1552649440_Ask.jpg): No such file or directory in C:\\xampp\\htdocs\\sajtPhp2\\app\\Http\\Controllers\\Admin\\MoviesController.php:149\nStack trace:\n#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'unlink(C:\\\\xampp...\', \'C:\\\\xampp\\\\htdocs...\', 149, Array)\n#1 C:\\xampp\\htdocs\\sajtPhp2\\app\\Http\\Controllers\\Admin\\MoviesController.php(149): unlink(\'C:\\\\xampp\\\\htdocs...\')\n#2 [internal function]: App\\Http\\Controllers\\Admin\\MoviesController->destroy(Object(Illuminate\\Http\\Request), \'50\')\n#3 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#4 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'destroy\', Array)\n#5 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(219): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\Admin\\MoviesController), \'destroy\')\n#6 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(176): Illuminate\\Routing\\Route->runController()\n#7 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(680): Illuminate\\Routing\\Route->run()\n#8 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#9 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#10 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#11 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#12 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(75): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#13 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#14 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#15 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#16 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#17 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#18 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(59): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(104): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(682): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#29 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(657): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#30 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(623): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#31 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(612): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#32 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))\n#33 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#34 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\fideloper\\proxy\\src\\TrustProxies.php(57): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#35 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Fideloper\\Proxy\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#36 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#37 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#38 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#39 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#40 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#41 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#43 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#44 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#45 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#46 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(62): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#47 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(163): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#48 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#49 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(104): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#50 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#51 C:\\xampp\\htdocs\\sajtPhp2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#52 C:\\xampp\\htdocs\\sajtPhp2\\public\\index.php(55): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#53 C:\\xampp\\htdocs\\sajtPhp2\\server.php(21): require_once(\'C:\\\\xampp\\\\htdocs...\')\n#54 {main}', '2019-03-15', '11:34:48'),
(98, 'Movie deleting failed', '2019-03-15', '12:07:23'),
(99, 'Movie deleting failed', '2019-03-15', '12:09:33'),
(102, 'Adding news failed', '2019-03-15', '12:44:27'),
(103, 'The user with ip_address 127.0.0.1 trying unauthorized access to admin page!', '2019-03-15', '15:29:48'),
(104, 'The user with ip_address 127.0.0.1 trying unauthorized access to admin page!', '2019-03-15', '15:30:06'),
(105, 'The user with ip_address 127.0.0.1 trying unauthorized access to admin page!', '2019-03-15', '15:30:52'),
(106, 'The user with ip_address 127.0.0.1 trying unauthorized access to admin page!', '2019-03-15', '15:31:08'),
(107, 'The user with ip_address 127.0.0.1 trying unauthorized access to admin page!', '2019-03-15', '15:31:42'),
(108, 'The user with ip_address 127.0.0.1 trying unauthorized access to admin page!', '2019-03-15', '15:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `ocenafilma`
--

CREATE TABLE `ocenafilma` (
  `idOcena` int(11) NOT NULL,
  `ocena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ocenafilma`
--

INSERT INTO `ocenafilma` (`idOcena`, `ocena`) VALUES
(1, 7.2),
(2, 8.1),
(3, 7.3),
(4, 7.8),
(5, 7.6),
(6, 9.2),
(7, 8.2),
(8, 8.5),
(9, 7.4),
(10, 7.1),
(11, 6.4),
(12, 6.9),
(13, 7),
(14, 5.6),
(15, 6.5),
(16, 5.2),
(17, 8),
(18, 9.3),
(19, 7.9),
(20, 6.8),
(21, 8.8);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `id` int(2) UNSIGNED NOT NULL,
  `naziv` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id`, `naziv`) VALUES
(1, 'admin'),
(2, 'korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `idVest` int(11) NOT NULL,
  `slikaVest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `naslovVest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`idVest`, `slikaVest`, `datum`, `naslovVest`, `tekst`) VALUES
(1, 'news1.jpg', '2019-03-02 10:17:00', 'Avengers: Endgame Trailer Shows The IMAX Difference', 'A side-by-side trailer comparison shows the considerable difference in screen size between the IMAX version of Avengers: Endgame and the standard version. The fourth Avengers film, whose title was only recently revealed after a long period of suspense, is set to arrive a year after the universe-shattering events of 2018\'s blockbuster Avengers: Infinity War.\r\nDetails about the new movie are being kept a closely guarded secret, but fan theories abound as to how the remaining Avengers and their friends will band together to reverse the tragic events brought about by the Mad Titan Thanos. '),
(2, 'news2.jpg', '2019-03-01 11:12:00', 'Watch The First 9 Minutes of Spider-Man: Into the Spider-Verse', 'To celebrate the release of Spider-Man: Into the Spider-Verse on Digital HD (not to mention its recent Oscar win), Sony Animation Pictures has released the first 9 minutes of the movie online. Directed by Bob Persichetti, Peter Ramsey, and Rodney Rothman, Into the Spider-Verse follows Brooklyn teen Miles Morales (Shameik Moore) as he gains incredible spider-powers and meets a collection of fellow spider-people who have been accidentally transported to his world from other dimensions.'),
(3, 'news3.jpg', '2019-03-05 13:29:00', 'Star Wars: Rise of the Resistance Is Disney Parks\' Most Ambitious Attraction Ever', ' Disney\'s Star Wars: Rise of the Resistance is shaping up to be one of their most ambitious attractions. Opening in both Anaheim, Calfiornia\'s Disneyland and Orlando, Florida\'s Disney World, the attraction\'s standout details are proving that Star Wars: Galaxy\'s Edge will be most impressive.\r\n\r\nSet within the fictional planet Batuu, Star Wars: Galaxy\'s Edge is a brand new addition to Disney theme parks offering an immersive Star Wars-inspired experience for guests. Aside from bumping into characters and creatures that might exists within the Star Wars universe, guests will also have the opportunity to experience two brand new rides - one being Millennium Falcon: Smuggler\'s Run, the other being Star Wars: Rise of the Resistance. And, while both attractions will no doubt live up to high expectations from fans, Rise of the Resistance is said to be slightly bolder in its approach.'),
(4, 'news4.jpg', '2019-03-08 14:07:00', 'X-Men: Dark Phoenix Director Is Prepared For It To Be The End', 'X-Men: Dark Phoenix writer/director Simon Kinberg says that he doesn\'t know exactly how the upcoming Disney-Fox merger will affect the franchise, but he approached the movie as \"the end\" for the current cast of characters. Dark Phoenix is the fourth movie in the current prequel series, the seventh movie featuring the main team of X-Men, and the twelfth release in the overall X-Men movie franchise (including the Deadpool movies). Along with New Mutants, it is one of the final X-Men movies to be produced prior to the Disney-Fox deal.'),
(5, 'news5.jpg', '2019-03-06 09:37:00', 'Are You Afraid of the Dark? Movie Loses Release Date', 'Paramount\'s adaptation of Nickelodeon series Are You Afraid of the Dark?, which was set for release in October 2019, is now without a release date. The film was set to hit theaters at the same time as a small screen miniseries revival of the TV show, and Paramount had only recently changed its release date to swap with Will Smith-led sci-fi action movie Gemini Man.\r\nRunning for seven seasons between 1990 and 2000, airing on YTV in its native Canada and on Nickelodeon in the U.S., Are You Afraid of the Dark? is a serious piece of nostalgia for nineties kids. The show\'s anthology horror stories were told around a campfire by a group of teens who dubbed themselves The Midnight Society, who would take it in turns to throw \"midnight dust\" into the fire and then tell the scariest story they could think of. D.J. Caruso was in talks to direct from a script by Gary Dauberman and BenDavid Grabinski.'),
(6, 'news6.jpg', '2019-03-07 17:18:00', 'Hotel Transylvania 4 Gets December 2021 Release', 'The hit franchise, Hotel Transylvania has another installment coming with the announcement of Hotel Transylvania 4 to be released in December 2021. Produced by Columbia and Sony Pictures Animation, the computer-animated comedy film series became wildly successful after the premiere of its first film, Hotel Transylvania in 2012.\r\nRiddled with world famous monsters and voice talents of Hollywood A-listers, Hotel Transylvania follows an ill-fated Dracula (Adam Sandler) whom upon the death of his beloved wife builds a hotel intended as a safe haven for monsters with him and his daughter, Mavis (Selena Gomez), living there full time. Dracula is joined by Frankenstein and his bride (Kevin James and Fran Drescher), a werewolf, the invisible man (David Spade) and a hunchback. Further, Andy Samberg plays the human Jonathan who falls in love with and marries Mavis. Originally created and developed by Todd Durham, the film was the directorial debut of Genndy Tartakovsky, who has a keen eye for translating story to animation with his work in Samurai Jack and Star Wars:Clone Wars.'),
(7, 'news7.jpg', '2019-03-08 19:08:00', 'Frozen 2 Plot Details Suggest Anna & Elsa’s Personal Mission', 'The plot of Disney\'s Frozen 2 is a closely-guarded secret - but a new report potentially explains why Elsa and Anna leave Arendelle. The first Frozen film released back in 2013, and took the world by storm. Elsa\'s iconic song cemented itself in popular culture, and it didn\'t take Disney long to commit to a sequel. To their credit, they\'ve spent several years crafting Frozen 2 rather than rushing it out, but it\'s finally due out later this year.\r\nThe first trailer for the sequel proved that the Frozen brand is still strong; it generated 116.4 million views during its first 24 hours online, setting an all-time record for an animated movie. But while the trailer gave excited viewers their first glimpse of an older Anna and Elsa, it deliberately avoided dropping any major plot hints. It was clear the stars were going on a quest beyond the confines of Arendelle, but it was impossible to say just why they\'d left their nation without its queen.'),
(8, 'news8.jpg', '2019-03-07 21:18:00', 'Oscars 2019 Winners List: Black Panther, Green Book & More', 'The winners of the 2019 Oscars have been announced by the Academy of Motion Picture Arts and Sciences. It\'s been a rather tumultous year for the Academy, all things considered. The organization announced several changes to the 2019 Oscars show over the past several months, as part of its efforts to battle the event\'s dwindling ratings over the last decade. However, pretty much each and every change they announced (the Best Popular Film category, not performing all of the Original Song nominees, moving awards like Best Editing and Cinematography to the commercial breaks) went over badly and the Academy was quick to back-track on them. And mind you, that\'s all on top of their failure to find a host for this year\'s show.'),
(9, 'news9.jpg', '2019-03-12 00:00:00', 'Deadpool, Scream, & Other Classic Movies Appear in Google Ad', 'Google has released a commercial that advertises the Google Assistant program by adding it into movies such as Deadpool and Scream, in order to show how useful it would be to the characters in those films.\r\nGoogle Assistant is a virtual assistant program that can be communicated with in order to issue commands to compatible devices, including the Google Home Hub and Google Home Mini, which are both shown in the commercial. Google Assistant is comparable to Alexa and Siri in terms of its functionality.\r\nGoogle\'s new commercial promotes Google Assistant by adding it into scenes from different movies and showing how useful it would have been for the characters to have had access to the program. The movie scenes used in the #HeyGoogle commercial include David Bowman using Google Assistant to bypass Hal in 2001: A Space Odyssey, Drew Barrymore\'s character in Scream using the Google Home Hub to alert the police to the fact that an assailant was outside her house, and Deadpool being reminded that he had to appear in a Google commercial.'),
(10, 'news10.jpg', '2019-03-11 00:00:00', 'Woody Allen Planning To Shoot New Movie In Spain', 'Director Woody Allen is shooting a new movie in Spain, just weeks after suing Amazon for shelving his last film A Rainy Day In New York. Allen shot Rainy Day In New York two years ago with Timothée Chalamet and Elle Fanning in starring roles, but the film has yet to see the light of day after Amazon elected not to release it. Chalamet has since apologized for working with Allen, and donated his salary from the film to Time’s Up.\r\nAmazon gave no official reason for shelving Allen’s film, but in his $68 million lawsuit the director claims they told him they were pulling the movie from release over concerns about ongoing sexual assault allegations against him, as well as Allen’s own controversial statements.');

-- --------------------------------------------------------

--
-- Table structure for table `zanr`
--

CREATE TABLE `zanr` (
  `idZanr` int(11) NOT NULL,
  `nazivZ` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zanr`
--

INSERT INTO `zanr` (`idZanr`, `nazivZ`) VALUES
(1, 'Action'),
(2, 'Crime'),
(3, 'Horror'),
(4, 'Comedy'),
(5, 'Thriller'),
(6, 'Drama'),
(7, 'Fantasy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivnost_korisnika`
--
ALTER TABLE `aktivnost_korisnika`
  ADD PRIMARY KEY (`idAktivnost`),
  ADD KEY `idKorisnik` (`idKorisnik`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idFilm`),
  ADD KEY `kreirao` (`kreirao`),
  ADD KEY `idZanr` (`idZanr`),
  ADD KEY `idOcena` (`idOcena`);

--
-- Indexes for table `ip_adresa`
--
ALTER TABLE `ip_adresa`
  ADD PRIMARY KEY (`idIp`);

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`idKomentar`),
  ADD KEY `idVest` (`idVest`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `uloga_id` (`uloga_id`);

--
-- Indexes for table `linkovi`
--
ALTER TABLE `linkovi`
  ADD PRIMARY KEY (`idLink`);

--
-- Indexes for table `log_greske`
--
ALTER TABLE `log_greske`
  ADD PRIMARY KEY (`idGreska`);

--
-- Indexes for table `ocenafilma`
--
ALTER TABLE `ocenafilma`
  ADD PRIMARY KEY (`idOcena`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `naziv` (`naziv`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`idVest`);

--
-- Indexes for table `zanr`
--
ALTER TABLE `zanr`
  ADD PRIMARY KEY (`idZanr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivnost_korisnika`
--
ALTER TABLE `aktivnost_korisnika`
  MODIFY `idAktivnost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `idFilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `ip_adresa`
--
ALTER TABLE `ip_adresa`
  MODIFY `idIp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `idKomentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `linkovi`
--
ALTER TABLE `linkovi`
  MODIFY `idLink` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `log_greske`
--
ALTER TABLE `log_greske`
  MODIFY `idGreska` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `ocenafilma`
--
ALTER TABLE `ocenafilma`
  MODIFY `idOcena` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `idVest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `zanr`
--
ALTER TABLE `zanr`
  MODIFY `idZanr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`idVest`) REFERENCES `vesti` (`idVest`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
