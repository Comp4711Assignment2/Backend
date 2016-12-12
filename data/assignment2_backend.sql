-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2016 at 07:25 PM
-- Server version: 5.6.32
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment2_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` varchar(256) DEFAULT NULL,
  `description` varchar(256) NOT NULL,
  `receivingUnit` int(11) NOT NULL,
  `receivingCost` double NOT NULL,
  `stockingUnit` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `description`, `receivingUnit`, `receivingCost`, `stockingUnit`, `quantity`) VALUES
('shampoo', 'a liquid preparation containing detergent or soap for washing the hair', 2, 14.99, '300ml', 10),
('gel', 'a hairstyling product that is used to harden hair into a particular hairstyle', 2, 9.99, '200ml', 3),
('mousse', 'a hairstyling product added to hair for extra volume and shine', 1, 19.99, '150ml', 2),
('gowns', 'a cover to keep hair off of the client', 5, 37.99, '1gown', 10),
('scissors', 'an instrument used for cutting cloth, paper, and other thin material, consisting of two blades laid one on top of the other and fastened in the middle so as to allow them to be opened and closed by a thumb and finger inserted through rings on the end of th', 1, 11.99, '1pair', 9),
('buzzer', 'specialized implements used to cut human head hair', 2, 49.99, '1buzzer', 4),
('towel', 'a piece of thick absorbent cloth or paper used for drying oneself or wiping things dry', 2, 23.99, '1towel', 20),
('conditioner', 'a hair care product that changes the texture and appearance of hair', 2, 14.99, '300ml', 10),
('hairspray', 'a solution sprayed onto a person\'s hair to keep it in place', 1, 27.99, '190ml', 2),
('wax', 'a thick hairstyling product containing wax, used to assist with holding the hair', 1, 15.99, '100ml', 2),
('hair dryer', 'an electrical device for drying a person\'s hair by blowing warm air over it', 1, 44.99, '1dryer', 3),
('comb', 'a strip of plastic, metal, or wood with a row of narrow teeth, used for untangling or arranging the hair', 4, 12.99, '1comb', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
