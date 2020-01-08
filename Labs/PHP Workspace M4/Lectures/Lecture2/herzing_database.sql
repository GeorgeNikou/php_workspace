-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2019 at 01:37 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herzing`
--
CREATE DATABASE IF NOT EXISTS `herzing` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `herzing`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_firstname` varchar(100) NOT NULL,
  `student_lastname` varchar(100) NOT NULL,
  `student_age` tinyint(3) UNSIGNED NOT NULL,
  `student_gender` varchar(10) NOT NULL,
  `student_location` varchar(150) NOT NULL,
  `student_program` varchar(150) NOT NULL,
  `student_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_firstname`, `student_lastname`, `student_age`, `student_gender`, `student_location`, `student_program`, `student_status`) VALUES
(1, 'Unity', 'Adkins', 60, 'Other', 'Nanaimo', 'Programming', 1),
(2, 'Joshua', 'Farrell', 89, 'Male', 'Newbury', 'ECE', 1),
(3, 'Bert', 'Maddox', 54, 'Female', 'Tokoroa', 'ECE', 1),
(5, 'Isaiah', 'Russo', 82, 'Male', 'Nanded', 'Business', 1),
(6, 'Chantale', 'Sharp', 30, 'Female', 'Mottola', 'Business', 1),
(7, 'Tanek', 'Higgins', 18, 'Male', 'Saint-Nicolas', 'Programming', 1),
(8, 'Tana', 'Dyer', 88, 'Other', 'Lawton', 'Networking', 1),
(9, 'Winter', 'Pittman', 52, 'Female', 'Donstiennes', 'Computer Support', 1),
(10, 'Kiona', 'Obrien', 34, 'Other', 'Ville-en-Hesbaye', 'Computer Support', 1),
(11, 'Shad', 'Mcneil', 92, 'Other', 'Angers', 'Computer Support', 1),
(12, 'Elmo', 'Edwards', 26, 'Other', 'Christchurch', 'Programming', 1),
(13, 'Declan', 'Dyer', 94, 'Other', 'Santa Rita', 'Computer Support', 1),
(14, 'Rogan', 'Little', 62, 'Male', 'Langenburg', 'Networking', 1),
(15, 'Dean', 'Workman', 24, 'Other', 'Tracadie-Shelia', 'Programming', 1),
(16, 'Virginia', 'Bullock', 97, 'Male', 'Ravensburg', 'Business', 1),
(17, 'Upton', 'Velasquez', 62, 'Male', 'Tomaszow Mazowiecki', 'Business', 1),
(18, 'Raphael', 'Richard', 27, 'Male', 'Bharuch', 'Business', 1),
(19, 'Cyrus', 'Cooley', 68, 'Male', 'Wrigley', 'Networking', 1),
(20, 'Kennedy', 'Webster', 29, 'Male', 'Mombaruzzo', 'Business', 1),
(21, 'Iona', 'Guzman', 66, 'Female', 'South Perth', 'Networking', 1),
(22, 'Rosalyn', 'Cantrell', 30, 'Male', 'Fairbanks', 'Networking', 1),
(23, 'Philip', 'Carey', 60, 'Male', 'Bearberry', 'Business', 1),
(24, 'Brittany', 'Fitzpatrick', 72, 'Male', 'Stralsund', 'Networking', 1),
(25, 'Bruno', 'Buck', 69, 'Other', 'Rochester', 'Business', 1),
(26, 'Beatrice', 'Ross', 90, 'Other', 'Bostaniçi', 'Programming', 1),
(27, 'Adria', 'Bender', 69, 'Other', 'Coaldale', 'ECE', 1),
(28, 'Keaton', 'Floyd', 41, 'Male', 'Westmount', 'Computer Support', 1),
(29, 'Lacota', 'Brock', 40, 'Female', 'Riparbella', 'Programming', 1),
(30, 'Melvin', 'Huffman', 20, 'Other', 'Denderwindeke', 'ECE', 1),
(31, 'Naida', 'Taylor', 21, 'Male', 'Santomenna', 'Business', 1),
(32, 'Marny', 'Pugh', 21, 'Male', 'Coalville', 'Networking', 1),
(33, 'Lee', 'Barron', 98, 'Other', 'Treppo Carnico', 'Networking', 1),
(34, 'Brett', 'Snyder', 54, 'Male', 'Barrhead', 'Programming', 1),
(35, 'Inga', 'Mckee', 89, 'Female', 'Cagnes-sur-Mer', 'ECE', 1),
(36, 'Hop', 'Erickson', 83, 'Male', 'Godhra', 'Programming', 1),
(37, 'Rhea', 'Shepard', 62, 'Other', 'Bathurst', 'Networking', 1),
(38, 'Dorian', 'Monroe', 49, 'Female', 'Zele', 'Business', 1),
(39, 'Steel', 'Rosales', 50, 'Female', 'Vihari', 'Programming', 1),
(40, 'Leslie', 'Hart', 62, 'Male', 'Sint-Gillis-Waas', 'Business', 1),
(41, 'Keaton', 'Marks', 65, 'Other', 'Ruisbroek', 'Computer Support', 1),
(42, 'Cameron', 'Vasquez', 80, 'Other', 'Martello/Martell', 'ECE', 1),
(43, 'Rahim', 'Mccormick', 36, 'Female', 'Coalhurst', 'Business', 1),
(44, 'Noah', 'Sims', 96, 'Female', 'Carahue', 'Computer Support', 1),
(45, 'Sacha', 'Pollard', 83, 'Female', 'St. Andrews', 'ECE', 1),
(46, 'Hall', 'Winters', 71, 'Other', 'Afsnee', 'Programming', 1),
(47, 'Erin', 'Buckner', 41, 'Female', 'Hoorn', 'Business', 1),
(48, 'Dominique', 'Foreman', 28, 'Other', 'Arendonk', 'Programming', 1),
(49, 'Jolene', 'Gilmore', 37, 'Other', 'Glendon', 'Networking', 1),
(50, 'Brandon', 'Delacruz', 86, 'Male', 'Bhubaneswar', 'Networking', 1),
(51, 'Blythe', 'Bond', 49, 'Male', 'Doetinchem', 'ECE', 1),
(52, 'Dorian', 'Middleton', 90, 'Other', 'Kortessem', 'Networking', 1),
(53, 'Erica', 'Brewer', 22, 'Female', 'Purulia', 'Computer Support', 1),
(54, 'Cassidy', 'Navarro', 76, 'Male', 'Mogi das Cruzes', 'Networking', 1),
(55, 'Shafira', 'Potter', 96, 'Female', 'Ruddervoorde', 'ECE', 1),
(56, 'Uriah', 'Adams', 86, 'Other', 'Sunset Point', 'Networking', 1),
(57, 'Kirestin', 'Buck', 88, 'Female', 'Great Falls', 'Programming', 1),
(58, 'Medge', 'Murphy', 50, 'Male', 'Munger', 'Computer Support', 1),
(59, 'Raya', 'Forbes', 83, 'Other', 'Ceyhan', 'Computer Support', 1),
(60, 'Kylie', 'Case', 99, 'Male', 'Aurora', 'Business', 1),
(61, 'Gareth', 'Yates', 84, 'Female', 'Tione di Trento', 'Programming', 1),
(62, 'Jasper', 'Cotton', 49, 'Other', 'Dos Hermanas', 'Computer Support', 1),
(63, 'Davis', 'Frost', 33, 'Male', 'Avellino', 'Business', 1),
(64, 'Harlan', 'Manning', 99, 'Other', 'Memphis', 'Programming', 1),
(65, 'Leo', 'Crawford', 46, 'Other', 'Nagpur', 'Programming', 1),
(66, 'Madonna', 'Melton', 87, 'Female', 'Contagem', 'Business', 1),
(67, 'Armand', 'Glenn', 80, 'Other', 'Harrisburg', 'Computer Support', 1),
(68, 'Adria', 'House', 91, 'Female', 'Noicattaro', 'Computer Support', 1),
(69, 'Jameson', 'Sanders', 68, 'Male', 'Lingen', 'Programming', 1),
(70, 'Laith', 'Carr', 35, 'Male', 'Rouen', 'ECE', 1),
(71, 'Axel', 'Alvarado', 29, 'Male', 'Brecon', 'ECE', 1),
(72, 'Sawyer', 'Pruitt', 72, 'Male', 'Sala Baganza', 'Networking', 1),
(73, 'Kiona', 'Moses', 56, 'Female', 'Rum', 'Programming', 1),
(74, 'Knox', 'Riggs', 22, 'Female', 'Sesto Campano', 'Computer Support', 1),
(75, 'Armand', 'Hess', 23, 'Other', 'Mayerthorpe', 'Programming', 1),
(76, 'Elaine', 'Joseph', 63, 'Female', 'Campochiaro', 'ECE', 1),
(77, 'Lacota', 'Rivas', 87, 'Female', 'Arlon', 'ECE', 1),
(78, 'Cecilia', 'Huff', 47, 'Other', 'Colomiers', 'Business', 1),
(79, 'Armando', 'Kent', 43, 'Male', 'Fort Saskatchewan', 'Computer Support', 1),
(80, 'Roth', 'Fulton', 55, 'Other', 'Zeveneken', 'Programming', 1),
(81, 'Clark', 'Pena', 42, 'Male', 'Caloundra', 'Programming', 1),
(82, 'Zorita', 'Abbott', 91, 'Male', 'Troyes', 'ECE', 1),
(83, 'Jasmine', 'Bailey', 79, 'Other', 'Baardegem', 'Computer Support', 1),
(84, 'Madaline', 'Robertson', 63, 'Other', 'Portsmouth', 'ECE', 1),
(85, 'Camden', 'Crosby', 45, 'Male', 'Galzignano Terme', 'Networking', 1),
(86, 'Indira', 'Chang', 59, 'Male', 'Courbevoie', 'Programming', 1),
(87, 'Nicole', 'Stark', 31, 'Other', 'Salon-de-Provence', 'Business', 1),
(88, 'Courtney', 'Richardson', 63, 'Male', 'Uitkerke', 'Computer Support', 1),
(89, 'Mariam', 'Wilkins', 80, 'Male', 'North Cowichan', 'Computer Support', 1),
(90, 'Dillon', 'Chang', 28, 'Female', 'Le Havre', 'Business', 1),
(91, 'Nevada', 'Gross', 64, 'Female', 'Castel Baronia', 'Networking', 1),
(92, 'Omar', 'Compton', 21, 'Female', 'Wiener Neustadt', 'Programming', 1),
(93, 'Nehru', 'Carney', 83, 'Male', 'Pont-ˆ-Celles', 'Programming', 1),
(94, 'Idona', 'Lindsey', 36, 'Other', 'Cessnock', 'Networking', 1),
(95, 'Finn', 'Hayden', 70, 'Other', 'Gravelbourg', 'ECE', 1),
(96, 'Raphael', 'Francis', 26, 'Other', 'Bhind', 'Programming', 1),
(97, 'Keelie', 'Pace', 78, 'Other', 'Beuzet', 'Computer Support', 1),
(98, 'Mary', 'Bullock', 31, 'Male', 'Pietraroja', 'ECE', 1),
(99, 'Nevada', 'Atkins', 45, 'Male', 'Pau', 'Networking', 1),
(100, 'Louis', 'Hebert', 61, 'Male', 'Gavirate', 'Networking', 1),
(101, 'Brock', 'Stein', 68, 'Male', 'Nazilli', 'Networking', 1),
(102, 'Brianna', 'Hatfield', 29, 'Other', 'Rea', 'Computer Support', 1),
(103, 'Daryl', 'Tanner', 96, 'Other', 'Wichita', 'Networking', 1),
(104, 'Teegan', 'Pearson', 32, 'Male', 'Koolkerke', 'Computer Support', 1),
(105, 'Brianna', 'Short', 96, 'Male', 'Essex', 'Networking', 1),
(106, 'Cherokee', 'Wall', 21, 'Female', 'Vielsalm', 'Programming', 1),
(107, 'Lionel', 'Carroll', 97, 'Other', 'Prestatyn', 'Computer Support', 1),
(108, 'Amal', 'Padilla', 78, 'Other', 'Frankfurt am Main', 'Business', 1),
(109, 'Breanna', 'Cochran', 72, 'Male', 'Bracknell', 'Computer Support', 1),
(110, 'Matthew', 'Fowler', 67, 'Female', 'La Higuera', 'Business', 1),
(111, 'Lacota', 'Graham', 61, 'Male', 'Lidingo', 'Business', 1),
(112, 'Petra', 'Fuller', 77, 'Male', 'Tenali', 'Programming', 1),
(113, 'Gage', 'Hahn', 72, 'Male', 'Biarritz', 'Programming', 1),
(114, 'Doris', 'Pittman', 49, 'Male', 'Halberstadt', 'Programming', 1),
(115, 'Otto', 'Sweeney', 34, 'Other', 'ThimŽon', 'ECE', 1),
(116, 'Hoyt', 'Jensen', 78, 'Male', 'Meerut', 'Business', 1),
(117, 'Dale', 'Kelley', 33, 'Male', 'Cambrai', 'Business', 1),
(118, 'Curran', 'Lara', 34, 'Male', 'LamontzŽe', 'ECE', 1),
(119, 'Marvin', 'Atkinson', 36, 'Other', 'Abbateggio', 'Computer Support', 1),
(120, 'Isabelle', 'Carr', 92, 'Female', 'Wolvertem', 'Networking', 1),
(121, 'Petra', 'Miller', 57, 'Male', 'Placanica', 'Networking', 1),
(122, 'Trevor', 'Zimmerman', 63, 'Male', 'Galzignano Terme', 'ECE', 1),
(123, 'Edward', 'Chang', 50, 'Other', 'Mathura', 'ECE', 1),
(124, 'Benedict', 'Buck', 53, 'Other', 'Wilhelmshaven', 'Business', 1),
(125, 'Raymond', 'Prince', 41, 'Male', 'Kontich', 'Computer Support', 1),
(126, 'Melissa', 'Alford', 19, 'Other', 'Wepion', 'Programming', 1),
(127, 'Keane', 'Porter', 100, 'Male', 'Kinross', 'Networking', 1),
(128, 'Jessica', 'Serrano', 43, 'Male', 'Bankura', 'Programming', 1),
(129, 'Inga', 'Giles', 90, 'Female', 'Lebu', 'Networking', 1),
(130, 'Lunea', 'Witt', 91, 'Female', 'Machalí', 'Programming', 1),
(131, 'Kenyon', 'Ballard', 42, 'Other', 'Frutillar', 'ECE', 1),
(132, 'Marvin', 'Perkins', 64, 'Female', 'Timkur', 'Networking', 1),
(133, 'Cailin', 'Gillespie', 66, 'Male', 'Bitterfeld-Wolfen', 'ECE', 1),
(134, 'Lillith', 'Mercer', 33, 'Female', 'Zeist', 'Computer Support', 1),
(135, 'Raja', 'Lamb', 24, 'Female', 'Kansas City', 'Networking', 1),
(136, 'Victor', 'Bradshaw', 84, 'Other', 'Völklingen', 'Computer Support', 1),
(137, 'Jonah', 'Sargent', 40, 'Male', 'Oostakker', 'Business', 1),
(138, 'Cadman', 'Rice', 37, 'Male', 'Nieuwkerken-Waas', 'ECE', 1),
(139, 'Jared', 'Riddle', 20, 'Female', 'Bastia Umbra', 'ECE', 1),
(140, 'Cameron', 'Coffey', 79, 'Female', 'McCallum', 'Programming', 1),
(141, 'Linda', 'Foley', 64, 'Other', 'Eisleben', 'Business', 1),
(142, 'Colt', 'Price', 27, 'Male', 'Portland', 'ECE', 1),
(143, 'Phoebe', 'Reilly', 57, 'Other', 'Macon', 'Programming', 1),
(144, 'Imani', 'Miller', 56, 'Male', 'Wah', 'ECE', 1),
(145, 'Blake', 'Dennis', 75, 'Other', 'Fino Mornasco', 'Computer Support', 1),
(146, 'Leandra', 'Blackburn', 78, 'Male', 'Walhain-Saint-Paul', 'Business', 1),
(147, 'Amela', 'Chaney', 83, 'Female', 'Freital', 'ECE', 1),
(148, 'Cody', 'Snyder', 57, 'Male', 'CŽroux-Mousty', 'ECE', 1),
(149, 'James', 'Warren', 60, 'Female', 'Krishnanagar', 'ECE', 1),
(150, 'Austin', 'Shelton', 23, 'Other', 'Koersel', 'Computer Support', 1),
(151, 'Hermione', 'Fischer', 39, 'Other', 'Gölcük', 'Programming', 1),
(152, 'Abdul', 'Burnett', 32, 'Male', 'Riksingen', 'Computer Support', 1),
(153, 'Ginger', 'Dale', 58, 'Female', 'Oswestry', 'ECE', 1),
(154, 'Emerald', 'Barron', 69, 'Female', 'Wabamun', 'Programming', 1),
(155, 'Hector', 'Peterson', 29, 'Female', 'Malartic', 'Programming', 1),
(156, 'Henry', 'Brady', 93, 'Female', 'Quinta Normal', 'ECE', 1),
(157, 'Kaseem', 'Dalton', 52, 'Male', 'Nakusp', 'Programming', 1),
(158, 'Cole', 'Pruitt', 63, 'Other', 'Dewas', 'Business', 1),
(159, 'Nissim', 'Savage', 88, 'Female', 'Nimy', 'Business', 1),
(160, 'Tanek', 'Ellis', 40, 'Other', 'Rocca d\'Arazzo', 'Computer Support', 1),
(161, 'Giacomo', 'Morris', 37, 'Female', 'Compiègne', 'Computer Support', 1),
(162, 'Demetrius', 'Atkins', 77, 'Female', 'Nordhorn', 'Business', 1),
(163, 'Michael', 'Waller', 31, 'Male', 'Wageningen', 'Business', 1),
(164, 'Odysseus', 'Gill', 70, 'Other', 'Camrose', 'Programming', 1),
(165, 'Otto', 'Rodgers', 59, 'Male', 'Wijshagen', 'Computer Support', 1),
(166, 'Chastity', 'Potter', 30, 'Other', 'Parrano', 'Business', 1),
(167, 'Hedda', 'Pratt', 38, 'Male', 'Puerto Varas', 'Computer Support', 1),
(168, 'Indigo', 'Pate', 32, 'Other', 'Roma', 'Computer Support', 1),
(169, 'Dolan', 'Ayala', 69, 'Male', 'Värnamo', 'Business', 1),
(170, 'Kareem', 'Simpson', 57, 'Other', 'North Shore', 'Business', 1),
(171, 'Wanda', 'Welch', 81, 'Female', 'Fort Worth', 'Business', 1),
(172, 'Naomi', 'Flores', 35, 'Other', 'Seborga', 'Programming', 1),
(173, 'Clinton', 'Banks', 48, 'Other', 'Mont', 'ECE', 1),
(174, 'Quail', 'Wiley', 51, 'Male', 'Pettineo', 'Programming', 1),
(175, 'Dieter', 'Henson', 95, 'Other', 'Akhisar', 'Networking', 1),
(176, 'Oscar', 'Burnett', 71, 'Female', 'Barnstaple', 'ECE', 1),
(177, 'Wallace', 'Stevens', 47, 'Other', 'Pimpri-Chinchwad', 'Computer Support', 1),
(178, 'Brennan', 'Potts', 75, 'Male', 'Chiusa/Klausen', 'Programming', 1),
(179, 'Melissa', 'Villarreal', 86, 'Male', 'Lévis', 'Computer Support', 1),
(180, 'Zahir', 'Hooper', 72, 'Female', 'Stonewall', 'Business', 1),
(181, 'Colby', 'Maynard', 19, 'Male', 'Rock Springs', 'Computer Support', 1),
(182, 'Haviva', 'Howell', 35, 'Male', 'Grado', 'Business', 1),
(183, 'Kristen', 'Randall', 41, 'Male', 'Municipal District', 'ECE', 1),
(184, 'Breanna', 'Hardin', 61, 'Female', 'Kirkby Lonsdale', 'Programming', 1),
(185, 'Brett', 'Armstrong', 20, 'Female', 'Termes', 'Networking', 1),
(186, 'Rhoda', 'Rice', 32, 'Female', 'Pavone del Mella', 'Programming', 1),
(187, 'Daphne', 'Walsh', 78, 'Female', 'Greater Sudbury', 'ECE', 1),
(188, 'Adara', 'Nunez', 71, 'Other', 'Cartago', 'Business', 1),
(189, 'Charles', 'Burns', 72, 'Female', 'Montreal', 'Business', 1),
(190, 'Harper', 'Cunningham', 70, 'Male', 'Quebec', 'ECE', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
