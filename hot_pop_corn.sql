-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2020 at 10:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hot_pop_corn`
--

-- --------------------------------------------------------

--
-- Table structure for table `comming_soon`
--

CREATE TABLE `comming_soon` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `star_cast` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comming_soon`
--

INSERT INTO `comming_soon` (`id`, `movie_name`, `star_cast`) VALUES
(1, 'Avengers: Endgame', 'Ed Harris,Saoirse Ronan'),
(2, 'SCOOB!', 'Frank Welker,Zac Efron'),
(3, 'Trolls World Tour', 'Anna Kendrick,Jamie Dornan'),
(4, 'The New Mutants', 'Anya Taylor-Joy,Zenry Zaga');

-- --------------------------------------------------------

--
-- Table structure for table `movies_opening`
--

CREATE TABLE `movies_opening` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `five_star` int(11) NOT NULL,
  `four_star` int(11) NOT NULL,
  `three_star` int(11) NOT NULL,
  `two_star` int(11) NOT NULL,
  `one_star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies_opening`
--

INSERT INTO `movies_opening` (`id`, `image`, `title`, `description`, `five_star`, `four_star`, `three_star`, `two_star`, `one_star`) VALUES
(1, 'image1.jpg', 'The Invisible Man', 'The Invisible Man is a 2020 science fiction horror film written and directed by Leigh Whannell. A contemporary adaptation of the novel of the same name by H. G. Wells and a reboot of The Invisible Man film series, it follows a woman who believes she is being stalked by her abusive partner, despite him apparently having died. The film stars Elisabeth Moss, Aldis Hodge, Satorm Reid, Harriet Dyer, Michael Dorman, and Oliver Jackson-Cohen. It is an international co-production of the United States and Australia.', 150, 63, 15, 6, 20),
(2, 'image2.jpg', 'Avengers: Endgame', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 234, 98, 9, 7, 1),
(8, 'image3.jpg', 'Perfume: The Story of a Murderer', 'With his incredible talent for discerning scents, Jean Baptiste Grenouille Ben Whishaw is one of 18th century Frances finest perfumers. He becomes obsessed with capturing an elusive aroma, the scent of young womanhood. His search takes a deadly turn, and when the bodies of 12 young females are found, panic breaks out, with families rushing to lock up their daughters.', 234, 98, 189, 7, 1),
(9, 'image4.jpg', 'Batman & Robin', 'Batman and Robin try to prevent the evil pair of Mr Freeze and Poison Ivy from freezing the town. While doing so, they also try hard to continue their partnership.', 5, 4, 234, 250, 67);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `releasing_year` int(11) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `name`, `releasing_year`, `rating`) VALUES
(1, 'Money Heist Season 4', 2020, 9.5),
(2, 'Money Heist Season 2', 2018, 9.5),
(3, 'Money Heist Season 3', 2019, 9),
(4, 'Money Heist Season 1', 2017, 8),
(5, 'Sherlock Season 1', 2010, 9.1),
(13, 'Sherlock Season 2', 2012, 9.5),
(14, 'Sherlock Season 3', 2014, 8.5),
(16, 'Sherlock Season 4', 2017, 8.2);

-- --------------------------------------------------------

--
-- Table structure for table `top_box_office`
--

CREATE TABLE `top_box_office` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `earnings` varchar(100) NOT NULL,
  `releasing_year` int(11) NOT NULL,
  `star_cast` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_box_office`
--

INSERT INTO `top_box_office` (`id`, `movie_name`, `earnings`, `releasing_year`, `star_cast`) VALUES
(1, 'Avengers: Endgame', '$2,797,800,564', 2019, 'Robart Downey Jr., Cris Evans'),
(2, 'Avatar', '$2,788,701,337', 2009, 'Zoe Saldana,Sam Worthington\r\n'),
(3, 'Titanic', '$2,208,208,395', 1997, 'Kate Winslet,Leonardo DiCaprio'),
(4, 'Star Wars Ep. VII: The Force Awakens', '$2,068,223,624', 2015, 'Daisy Ridley,Adam Driver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comming_soon`
--
ALTER TABLE `comming_soon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_opening`
--
ALTER TABLE `movies_opening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_box_office`
--
ALTER TABLE `top_box_office`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comming_soon`
--
ALTER TABLE `comming_soon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies_opening`
--
ALTER TABLE `movies_opening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `top_box_office`
--
ALTER TABLE `top_box_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
