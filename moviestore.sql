-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 05:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `member` varchar(1) NOT NULL,
  `initials` varchar(20) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `degree` varchar(40) NOT NULL,
  `university` varchar(40) NOT NULL,
  `aLevel` varchar(100) NOT NULL,
  `oLevel` varchar(150) NOT NULL,
  `school` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `exp` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`member`, `initials`, `fName`, `dob`, `gender`, `nationality`, `phone`, `email`, `status`, `degree`, `university`, `aLevel`, `oLevel`, `school`, `company`, `exp`) VALUES
('a', 'U.L.D.A.D.Gunasinghe', 'Urala Liyange Don Anuradha Denuwan Gunasinghe', '16th of August 1992', 'Male', 'Sri Lankan', '94711363830', 'anuradha.2014277@iit.ac.lk', 'Married', 'BEng(Hon''s) in Software Engineering', 'University Of Westminster', 'Biology = A<br>\r\nChemistry =A<br>\r\nPhysics = A<br>', 'Maths = A<br>\r\nScience = A<br>\r\nEnglish = A<br>\r\nHistory = A<br>\r\nICT = A<br>\r\nReligion = A<br>\r\nE.Lit= A<br>\r\nSinhala = A<br>\r\nCommerce = A<br>', 'Ananda College, Mathugama', 'Kith Inc.', '5'),
('k', 'W.M.K.M.Perera', 'Wijeratne Mahavidanelage Kith Marius Perera ', '5th of March 1994', 'Male', 'Sri Lankan', '94776279987', 'kith.2012123@iit.ac.lk', 'Married', 'BEng(Hon''''s) in Software Engineering', 'University Of Westminster', 'Maths = A<br>\r\nPhysics = A<br>\r\nChemistry = A<br>', 'Maths = A<br>\r\nScience = A<br>\r\nEnglish = A<br>\r\nHistory = A<br>\r\nDrama = A<br>\r\nReligion = A<br>\r\nFrench = A<br>\r\nSinhala = A<br>\r\nCommerce = A<br>', 'Holy Cross College, Kalutara', 'Kith Inc.', '22'),
('l', 'T.P.T.L.Kumara', 'T.P.Thilan Lasith Kumara', '1st of Sept. 1995', 'Male', 'Sri Lankan', '94713628642', 'thilan.2015275@iit.ac.lk', 'Single', 'BEng(Hon''s) in Software Engineering', 'University Of Westminster', 'Biology = A<br>\r\nChemistry =A<br>\r\nPhysics = A<br>', 'Maths = A<br>\r\nScience = A<br>\r\nEnglish = A<br>\r\nHistory = A<br>\r\nICT = A<br>\r\nReligion = A<br>\r\nE.Lit= A<br>\r\nSinhala = A<br>\r\nCommerce = A<br>', 'Sri Sumangala College, Panadura', 'Kith Inc.', '5'),
('p', 'S.P.Kulasekara', 'Sashika Piumal Kulasekara', '31st of July 1995', 'Male', 'Sri Lankan', '94771501156', 'piumal.2015309@iit.ac.lk', 'Single', 'BEng(Hon''s) in Software Engineering', 'University Of Westminster', 'Biology = A<br>\r\nChemistry =A<br>\r\nPhysics = A<br>', 'Maths = A<br>\r\nScience = A<br>\r\nEnglish = A<br>\r\nHistory = A<br>\r\nICT = A<br>\r\nReligion = A<br>\r\nE.Lit= A<br>\r\nSinhala = A<br>\r\nCommerce = A<br>', 'Prince of Wales'' College , Moratuwa', 'Kith Inc.', '5'),
('t', 'R.P.T.K.Abeysekara', 'rmanayaka Pathirannehalage Thushan Kavishka Abeysekara', '28th June 1996', 'Male', 'Sri Lankan', '94712119385', 'thushan.2015250@iit.ac.lk', 'Devorced', 'BEng(Hon''s) in Software Engineering', 'University Of Westminster', 'Maths= A<br>\r\nChemistry =A<br>\r\nPhysics = A<br>', 'Maths = A<br>\r\nScience = A<br>\r\nEnglish = A<br>\r\nHistory = A<br>\r\nICT = A<br>\r\nReligion = A<br>\r\nE.Lit= A<br>\r\nSinhala = A<br>\r\nCommerce = A<br>', 'Bandaranayeka Central College, Veyangoda', 'Paala Spa & Kith Inc.', '20');

-- --------------------------------------------------------

--
-- Table structure for table `feddback`
--

CREATE TABLE `feddback` (
  `commentNo` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `updates` varchar(5) DEFAULT NULL,
  `rating` varchar(10) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feddback`
--

INSERT INTO `feddback` (`commentNo`, `name`, `email`, `updates`, `rating`, `comments`) VALUES
(1, 'Kith Marius Perera', 'kith.2012123@iit.ac.lk', 'true', 'Perfect', 'This is the best online movie store I"ve ever seen.'),
(2, 'Brion Mario', 'brionbmp@gmail.com', 'true', 'Perfect', 'Better than our site.'),
(3, 'Janath Francisco', 'janath@gmail.com', 'true', 'Perfect', 'Great effort guys.\r\nKeep it up.......'),
(4, 'Walter O"Brion', '', '', 'Good', 'Marvelous Website with great tech features <br><br>\r\nAll the best people, I see something in you.'),
(5, 'Bruce Wayne', '', 'false', 'Perfect', 'Nice and Clean');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginID`, `password`) VALUES
('anuradha', '1234'),
('kith', '1234'),
('piumal', '1234'),
('thilan', '1234'),
('thushan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `prodIds` varchar(100) NOT NULL,
  `prodNames` varchar(250) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL,
  `totalCost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `username`, `prodIds`, `prodNames`, `name`, `email`, `telephone`, `address`, `status`, `totalCost`) VALUES
(6256, 'piumal', '1', 'Entourage', 'Piumal', 'piumal@gmail.com', 771501156, 'No.284/D7,Kalutara,\r\nSriLanka', 'In Transit', 6400);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodId` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `prodName` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodId`, `category`, `prodName`, `stock`, `description`, `price`, `image`) VALUES
(1, 'comedy', 'Entourage (2015)', 7, 'Movie star Vincent Chase, together with his boys Eric, Turtle, and Johnny, are back – and back in business with super agent-turned-studio head Ari Gold on a risky project that will serve as Vince’s di', 800, 'img/cart/1.jpg'),
(2, 'comedy', 'Get Hard (2015)', 4, 'When millionaire James King is jailed for fraud and bound for San Quentin, he turns to Darnell Lewis to prep him to go behind bars.', 1000, 'img/cart/2.jpg'),
(3, 'comedy', 'The DUFF (2015)', 7, 'A high school senior instigates a social pecking order revolution after finding out that she has been labeled the DUFF - Designated Ugly Fat Friend - by her prettier, more popular counterparts.', 1500, 'img/cart/3.jpg'),
(4, 'comedy', 'The Wedding Ringer (2015)', 10, 'Two weeks shy of his wedding, a socially awkward guy enters into a charade by hiring the owner of a company that provides best men for grooms in need.', 500, 'img/cart/4.jpg'),
(5, 'horror', 'Annabelle (2014)', 9, 'A couple begins to experience terrifying supernatural occurrences involving a vintage doll shortly after their home is invaded by satanic cultists.', 900, 'img/cart/5.jpg'),
(6, 'horror', 'Dead Snow 2: Red vs. Dead (2014)', 4, 'Still on the run from a group of Nazi zombies, a man seeks the aid of a group of American zombie enthusiasts, and discovers new techniques for fighting the zombies.', 996, 'img/cart/6.jpg'),
(7, 'horror', 'It Follows (2014)', 6, 'A young woman is followed by an unknown supernatural force after a sexual encounter.', 749, 'img/cart/7.jpg'),
(8, 'horror', 'Jessabelle (2014)', 10, 'Returning to her childhood home in Louisiana to recuperate from a horrific car accident, Jessabelle comes face to face with a long-tormented spirit that has been seeking her return and has no intentio', 807, 'img/cart/8.jpg'),
(9, 'romance', 'If I Stay (2014)', 10, 'Life changes in an instant for young Mia Hall after a car accident puts her in a coma. During an out-of-body experience, she must decide whether to wake up and live a life far different than she had i', 800, 'img/cart/9.jpg'),
(10, 'romance', 'Love, Rosie (2014)', 10, 'Rosie and Alex have been best friends since they were 5, so they couldnot possibly be right for one another...or could they? When it comes to love, life and making the right choices, these two are the', 1000, 'img/cart/10.jpg'),
(11, 'romance', 'Fifty Shades of Grey (2015)', 10, 'Literature student Anastasia Steele"s life changes forever when she meets handsome, yet tormented, billionaire Christian Grey.', 1000, 'img/cart/11.jpg'),
(12, 'romance', 'One Night Stand (2016)', 10, 'The story is about Urvil Raisingh and Celina who meet at an event and a memorable night later. Returning back home they continue with their lives. The memories of Celina haunt Urvil. What happens next', 900, 'img/cart/12.jpg'),
(13, 'science', 'Lucy (2014)', 10, 'A woman, accidentally caught in a dark deal, turns the tables on her captors and transforms into a merciless warrior evolved beyond human logic.', 1200, 'img/cart/13.jpg'),
(14, 'science', 'Interstellar (2014)', 10, 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity"s survival.', 1000, 'img/cart/14.jpg'),
(15, 'science', 'Project Almanac (2015)', 10, 'A group of teens discover secret plans of a time machine, and construct one. However, things start to get out of control.', 1000, 'img/cart/15.jpg'),
(16, 'science', 'Transcendence (2014)', 12, 'A scientist"s drive for artificial intelligence, takes on dangerous implications when his consciousness is uploaded into one such program.', 800, 'img/cart/16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feddback`
--
ALTER TABLE `feddback`
  ADD PRIMARY KEY (`commentNo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feddback`
--
ALTER TABLE `feddback`
  MODIFY `commentNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
