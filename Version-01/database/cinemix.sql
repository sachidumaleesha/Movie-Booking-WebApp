-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 03:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `firstName`, `lastName`, `username`, `email`, `password`, `mobileNumber`, `gender`) VALUES
(1, 'Diwan', 'Sachidu', 'admin', 'admin@gmail.com', '$2y$10$xUFOU9lOJEX8Jwpr6qh5De2RiGIPH3YBhAjLgBf3zD8sxJPKcl5Vm', '0766598143', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(11) NOT NULL,
  `bookedDate` date DEFAULT NULL,
  `showTime` varchar(10) DEFAULT NULL,
  `ticketCount` varchar(10) DEFAULT NULL,
  `price` varchar(5) DEFAULT NULL,
  `movieID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `managerID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `bookedDate`, `showTime`, `ticketCount`, `price`, `movieID`, `userID`, `managerID`) VALUES
(1, '2022-05-24', '09:00 AM', '4', '1400', 2, 5, 1),
(2, '2022-05-28', '09:00 AM', '1', '350', 4, 5, 1),
(3, '2022-05-20', '03:00 AM', '5', '1750', 5, 5, 1),
(4, '2022-05-20', '09:00 AM', '2', '700', 2, 11, 1),
(5, '2022-05-21', '03:00 AM', '5', '1750', 4, 5, 1),
(6, '2022-05-20', '09:00 AM', '2', '700', 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coming_soon_movies`
--

CREATE TABLE `coming_soon_movies` (
  `movieID` int(11) NOT NULL,
  `movieName` varchar(255) NOT NULL,
  `movieCategory` varchar(255) NOT NULL,
  `movieDirector` varchar(255) NOT NULL,
  `movieWriters` varchar(255) NOT NULL,
  `movieCast` varchar(255) NOT NULL,
  `movieDuration` varchar(10) NOT NULL,
  `moviePlot` varchar(700) NOT NULL,
  `releaseDate` date DEFAULT NULL,
  `trailerUrl` varchar(255) NOT NULL,
  `movieImage` varchar(255) DEFAULT NULL,
  `bannerImage` varchar(255) DEFAULT NULL,
  `adminID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coming_soon_movies`
--

INSERT INTO `coming_soon_movies` (`movieID`, `movieName`, `movieCategory`, `movieDirector`, `movieWriters`, `movieCast`, `movieDuration`, `moviePlot`, `releaseDate`, `trailerUrl`, `movieImage`, `bannerImage`, `adminID`) VALUES
(1, 'Minions: The Rise of Gru', 'Action/Adventure/Animation/Comedy', 'Kyle Balda', 'Matt Fogel,Cinco Paul,Brian Lynch', 'Steve Carell,Pierre Coffin,Russell Brand', '128 Min', 'A fanboy of a supervillain supergroup known as the Vicious 6, Gru hatches a plan to become evil enough to join them, with the backup of his followers, the Minions.', '2022-05-25', 'https://www.youtube.com/embed/6DxjJzmYsXo', 'images/comingSoonMovies/movieImages/minionsiimg.jpg', 'images/comingSoonMovies/bannerImages/minionsbanner.jpg', 1),
(2, 'Jurassic World Dominion', 'Action/Adventure/Science Fiction/Thriller', 'Colin Trevorrow', 'Colin Trevorrow,Derek Connolly,Emily Carmichael', 'Sam Neill,Laura Dern,Jeff Goldblum', '152 Min', 'Four years after Isla Nublar was destroyed, dinosaurs now live—and hunt—alongside humans all over the world. This fragile balance will reshape the future and determine, once and for all, whether human beings are to remain the apex predators on a planet they now share with history’s most fearsome creatures.', '2022-06-10', 'https://www.youtube.com/embed/fb5ELWi-ekk', 'images/comingSoonMovies/movieImages/jurasicworldimg.jpg', 'images/comingSoonMovies/bannerImages/jurasicworldbanner.jpg', 1),
(3, 'Yaksha: Ruthless Operations', 'Action', 'Na Hyun', 'Na Hyun,Ahn Sang-hoon', 'Sol Kyung-gu,Park Hae-soo,Hiroyuki Ikeuchi', '110 Min', 'Nicknamed after a human-devouring spirit, the ruthless leader of an overseas black ops team takes up a dangerous mission in a city riddled with spies.', '2022-06-09', 'https://www.youtube.com/embed/8QBBPqwFHHM', 'images/comingSoonMovies/movieImages/RuthlessOperationsimg.jpg', 'images/comingSoonMovies/bannerImages/RuthlessOperationshbanner.jpg', 1),
(4, 'The Adam Project', 'Action/Adventure/Comedy/Science Fiction', 'Shawn Levy', 'Jennifer Flackett,Mark Levin,T.S. Nowlin', 'Ryan Reynolds,Walker Scobell,Mark Ruffalo', '115 Min', 'After accidentally crash-landing in 2022, time-traveling fighter pilot Adam Reed teams up with his 12-year-old self on a mission to save the future.', '2022-06-10', 'https://www.youtube.com/embed/IE8HIsIrq4o', 'images/comingSoonMovies/movieImages/TheAdamProjectimg.jpg', 'images/comingSoonMovies/bannerImages/TheAdamProjectbanner.jpg', 1),
(5, 'Fistful of Vengeance', 'Action/Crime/Fantasy', 'Roel Reine', 'Cameron Litvack,Yalun Tu', 'Iko Uwais,Lewis Tan,Jason Tobin', '128 Min', 'A revenge mission becomes a fight to save the world from an ancient threat when superpowered assassin Kai tracks a killer to Bangkok.', '2022-06-30', 'https://www.youtube.com/embed/IQi8AX67UG4', 'images/comingSoonMovies/movieImages/FistfulofVengeanceimg.jpg', 'images/comingSoonMovies/bannerImages/FistfulofVengeancebanner.jpg', 1),
(6, 'Raya and the Last Dragon', 'Action/Adventure/Animation/Family', 'Carlos López Estrada,Don Hall', 'Qui Nguyen,Carlos López Estrada,Don Hall', 'Kelly Marie Tran,Awkwafina,Izaac Wang', '152 Min', 'Long ago, in the fantasy world of Kumandra, humans, and dragons lived together in harmony. But when an evil force threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, that same evil has returned and it’s up to a lone warrior, Raya, to track down the legendary last dragon to restore the fractured land and its divided people.', '2022-07-20', 'https://www.youtube.com/embed/1VIZ89FEjYI', 'images/comingSoonMovies/movieImages/RayaandtheLastDragonimg.jpg', 'images/comingSoonMovies/bannerImages/RayaandtheLastDragonbanner.jpg', 1),
(7, 'No Exit', 'Horror/Thriller', 'Damien Power', 'Taylor Adams,Andrew Barrer,Gabriel Ferrari', 'Havana Rose Liu,Danny Ramirez,Dennis Haysbert', '115 Min', 'Stranded at a rest stop in the mountains during a blizzard, a recovering addict discovers a kidnapped child hidden in a car belonging to one of the people inside the building which sets her on a terrifying struggle to identify who among them is the kidnapper.', '2022-05-19', 'https://www.youtube.com/embed/jA_DEfhoaSs', 'images/comingSoonMovies/movieImages/NoExitimg.jpg', 'images/comingSoonMovies/bannerImages/NoExitbanner.jpg', 1),
(8, 'The Lost City', 'Action/Adventure/Comedy/Romance', 'Adam Nee,Aaron Nee', 'Adam Nee,Aaron Nee,Oren Uziel', 'Sandra Bullock,Channing Tatum,Daniel Radcliffe', '152 Min', 'Follows a reclusive romance novelist who was sure nothing could be worse than getting stuck on a book tour with her cover model, until a kidnapping attempt sweeps them both into a cutthroat jungle adventure, proving life can be so much stranger, and more romantic, than any of her paperback fictions', '2022-06-05', 'https://www.youtube.com/embed/nfKO9rYDmE8', 'images/comingSoonMovies/movieImages/TheLostCityimg.jpg', 'images/comingSoonMovies/bannerImages/TheLostCitybanner.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactusID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `message` varchar(700) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `managerID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactusID`, `fullName`, `email`, `mobileNumber`, `message`, `userID`, `managerID`) VALUES
(1, 'Diwan Sachidu', 'diwansachidu2000@gmail.com', '0766598143', 'demo', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `message` varchar(700) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `managerID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `fullName`, `email`, `mobileNumber`, `rating`, `message`, `userID`, `managerID`) VALUES
(2, 'Diwan Sachidu', 'diwansachidu@gmail.com', '0766598143', 'excellent', 'Demo', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `adminID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerID`, `firstName`, `lastName`, `username`, `email`, `password`, `mobileNumber`, `gender`, `adminID`) VALUES
(1, 'Kasun', 'Chamara', 'manager', 'manager@gmail.com', '$2y$10$Awh4A1.aiB757GKdlIMS0..iYcSc/qmL1r6puV4ZbPEfIdqpHW1su', '0774501859', 'Male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `now_showing_movies`
--

CREATE TABLE `now_showing_movies` (
  `movieID` int(11) NOT NULL,
  `movieName` varchar(255) NOT NULL,
  `movieCategory` varchar(255) NOT NULL,
  `movieDirector` varchar(255) NOT NULL,
  `movieWriters` varchar(255) NOT NULL,
  `movieCast` varchar(255) NOT NULL,
  `movieDuration` varchar(10) NOT NULL,
  `moviePlot` varchar(700) NOT NULL,
  `endDate` date DEFAULT NULL,
  `trailerUrl` varchar(255) NOT NULL,
  `movieImage` varchar(255) DEFAULT NULL,
  `bannerImage` varchar(255) DEFAULT NULL,
  `adminID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `now_showing_movies`
--

INSERT INTO `now_showing_movies` (`movieID`, `movieName`, `movieCategory`, `movieDirector`, `movieWriters`, `movieCast`, `movieDuration`, `moviePlot`, `endDate`, `trailerUrl`, `movieImage`, `bannerImage`, `adminID`) VALUES
(2, 'Sonic the Hedgehog 2', 'Action/Comedy/Family/Science Fiction', 'Jeff Fowler', 'Josh Miller,Patrick Casey,John Whittington', 'Ben Schwartz,Idris Elba,Colleen OShaughnessey', '128 Min', 'After settling in Green Hills, Sonic is eager to prove he has what it takes to be a true hero. His test comes when Dr. Robotnik returns, this time with a new partner, Knuckles, searching for an emerald that has the power to destroy civilizations. Sonic teams up with his own sidekick, Tails, and they embark on a globe-trotting journey to find the emerald before it falls into the wrong hands.', '2022-05-30', 'https://www.youtube.com/embed/47r8FXYZWNU', 'images/nowShowingMovies/movieImages/SonictheHedgehog2img.jpg', 'images/nowShowingMovies/bannerImages/SonictheHedgehog2banner.jpg', 1),
(3, 'Uncharted', 'Action/Adventure/Family', 'Ruben Fleischer', 'Jon Hanley Rosenberg,Art Marcum,Matt Holloway', 'Tom Holland,Mark Wahlberg,Antonio Banderas', '152 Min', 'A young street-smart, Nathan Drake, and his wisecracking partner Victor Sully Sullivan embark on a dangerous pursuit of the greatest treasure never found while also tracking clues that may lead to Nathans long-lost brother.', '2022-06-10', 'https://www.youtube.com/embed/eHp3MbsCbMg', 'images/nowShowingMovies/movieImages/Unchartedimg.jpg', 'images/nowShowingMovies/bannerImages/Unchartedbanner.jpg', 1),
(4, 'The Batman', 'Crime/Mystery/Thriller', 'Matt Reeves', 'Bob Kane,Matt Reeves,Bill Finger', 'Robert Pattinson,Zoe Kravitz,Paul Dano', '152 Min', 'In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as The Riddler.', '2022-05-25', 'https://www.youtube.com/embed/mqqft2x_Aa4', 'images/nowShowingMovies/movieImages/TheBatmanimg.jpg', 'images/nowShowingMovies/bannerImages/TheBatmanbanner.jpg', 1),
(5, 'Spider-Man: No Way Home', 'Action/Adventure/Science Fiction', 'Jon Watts', 'Erik Sommers,Stan Lee,Steve Ditko', 'Tom Holland,Zendaya,Benedict Cumberbatch', '115 Min', 'Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.', '2022-06-20', 'https://www.youtube.com/embed/JfVOs4VSpmA', 'images/nowShowingMovies/movieImages/SpiderManNoWayHomeimg.jpg', 'images/nowShowingMovies/bannerImages/SpiderManNoWayHomebanner.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `nameOnTheCard` varchar(255) DEFAULT NULL,
  `cardNumber` varchar(255) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `managerID` int(11) DEFAULT 1,
  `paymentDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `nameOnTheCard`, `cardNumber`, `amount`, `userID`, `managerID`, `paymentDate`) VALUES
(1, 'Diwan Sachidu', '784525495621', '1400', 5, 1, '2022-05-14 15:06:29'),
(2, 'Diwan Sachidu', '7845951265874512', '350', 5, 1, '2022-05-14 16:00:46'),
(3, 'Sachidu Maleesha', '7845956215', '1750', 5, 1, '2022-05-16 10:34:48'),
(4, 'Diwan Sachidu', '8525789541', '700', 11, 1, '2022-05-16 12:10:41'),
(5, 'Sachidu Maleesha', '8745951256', '1750', 5, 1, '2022-05-17 05:23:26'),
(6, 'Diwan Sachidu', '7845122548', '700', 5, 1, '2022-05-17 05:43:38'),
(10, 'Diwan Sachidu', '7845952158623574', '700', 11, 1, '2022-05-18 10:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `managerID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `username`, `email`, `password`, `mobileNumber`, `gender`, `managerID`) VALUES
(1, 'Diwan', 'Sachidu', 'diwansachidu', 'diwansachidu@gmail.com', '$2y$10$TLbU//53BFmblDeaPfTGVucV9YHu7BswAUtt8uv2v8Wj1OVOqfN9a ', '0766598143', 'Male', 1),
(5, 'sanath', 'jayathunga', 'sanath1', 'sanath@gmail.com', '$2y$10$U8/8FLg1.vYYD7eDIwKs9eJ7kBhw.sppwVyke5riD1Mv1L0RN8PgK', '0784956230', 'Male', 1),
(11, 'Tharinda', 'Maleesha', 'user', 'user@gmail.com', '$2y$10$GdtCK0vlKvLaTOFr22XUSOJKSDF8P04rN5xnH7OgSK78y7SqAtaJu', '0768954218', 'Male', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `movieID` (`movieID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `coming_soon_movies`
--
ALTER TABLE `coming_soon_movies`
  ADD PRIMARY KEY (`movieID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactusID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `managerID` (`managerID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `managerID` (`managerID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerID`),
  ADD KEY `AdminID` (`adminID`);

--
-- Indexes for table `now_showing_movies`
--
ALTER TABLE `now_showing_movies`
  ADD PRIMARY KEY (`movieID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `managerID` (`managerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `ManagerID` (`managerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coming_soon_movies`
--
ALTER TABLE `coming_soon_movies`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `now_showing_movies`
--
ALTER TABLE `now_showing_movies`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`movieID`) REFERENCES `now_showing_movies` (`movieID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `coming_soon_movies`
--
ALTER TABLE `coming_soon_movies`
  ADD CONSTRAINT `coming_soon_movies_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`);

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `contactus_ibfk_2` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`);

--
-- Constraints for table `now_showing_movies`
--
ALTER TABLE `now_showing_movies`
  ADD CONSTRAINT `now_showing_movies_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
