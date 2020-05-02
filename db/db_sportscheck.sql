-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Abr-2020 às 22:07
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_sportscheck`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_items`
--

DROP TABLE IF EXISTS `tbl_items`;
CREATE TABLE IF NOT EXISTS `tbl_items` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(40) NOT NULL,
  `Item_rate` varchar(10) NOT NULL DEFAULT '0',
  `item_price` varchar(10) NOT NULL,
  `item_details` varchar(140) NOT NULL,
  `item_image` varchar(200) NOT NULL,
  `item_type` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_items`
--

INSERT INTO `tbl_items` (`ID`, `item_name`, `Item_rate`, `item_price`, `item_details`, `item_image`, `item_type`) VALUES
(1, 'Sport Chek Tritan Shaker Bottle - Black', '2', '9.99', 'Unlock your full workout potential with the H20 Tritan Shaker Bottle. ', 'b1.png', 'Bottles'),
(2, 'Nike 24 oz TR Hypercharge Shaker Bottle', '3', '$23.00', 'The Nike Hypercharge Shaker Bottle evenly blends powders.\r\n', 'b2.png', 'Bottles'),
(3, 'Sport Chek Tritan Shaker Bottle - Green', '4', '$9.99', 'Unlock your full workout potential with the H20 Tritan Shaker Bottle. ', 'b3.png', 'Bottles'),
(4, 'Nike 24 oz Hypercharge Twist', '3', '$6.97', 'Stay hydrated while you work out with the Nike Hypercharge 24oz Twist Bottle. ', 'b4.png', 'Bottles'),
(5, 'Nike 32 oz Hyperfuel Water Bottle - Red', '2', '$16.99', 'The Nike 32oz Hyperfuel Water Bottle is made with an anti-leak valve.', 'b5.png', 'Bottles'),
(6, 'Nike Golf TW Aerobill Classic 99 Hat', '5.0', '$40.00', 'The TW AeroBill Classic 99 Fitted ', 'h1.png', 'Hats'),
(7, 'Nike Women\'s Sportswear Futura Classic', '4', '$22.00', 'Classic and comfortable, the Nike Sporwear', 'h2.png', 'Hats'),
(8, 'Nike Golf AeroBill Classic99 Hat', '3.6', '$40', 'Unisex Nike AeroBill Classic99 Golf ', 'h3.png', 'Hats'),
(9, 'Nike Men\'s Swoosh Flex Hat', '2.5', '$20.97', 'This flex fit hat features an iconic Nike swoosh and hockey callout.', 'h4.png', 'Hats'),
(10, 'Nike Men\'s Wild Run Trucker Hat - Black', '3.4', '$32.00', 'Packing sweat-wicking technology, \r\n', 'h5.png', 'Hats'),
(11, 'Under Armour Women\'s HeatGear® Anklette', '3.5', '$35.88', 'With compression fabric for a locked-in feel and an on-trend ankle length', 'p1.png', 'Pants'),
(12, 'Columbia Women\'s Glacial Legging Pant', '4.0', '$21.98', 'Constructed of light yet durable featherweight microfleece, the Columbia Glacial leggings are incredibly soft and comfortable.', 'p2.png', 'Pants'),
(13, 'O\'Neill Women\'s Arrela Camo Print Pants', '5.0', '$64.99', 'Stand out from the crowd and stay cozy with the help of the O’Neill Women’s Arrela Camo Print Pants.', 'p3.png', 'Pants'),
(14, 'adidas Women\'s ID Knit Pants', '3.8', '$48.88', 'Innovative knit patterns alternate down these adidas women’s ID Knit Pants, which take on a soccer-inspired look with tapered legs. ', 'p4.png', 'Pants'),
(15, 'Nike Women\'s Air Pants', '3.4', '$100.00', 'Move naturally through your run in the stretch-woven flexibility of the Nike Air Pants. ', 'p5.png', 'Pants'),
(16, 'adidas Men\'s Essentials Linear ', '4.5', '$25.97', 'This men’s t-shirt gives you comfy coverage. The classic fit allows for a bit of extra room.', 't1.png', 'Shirts'),
(17, 'Under Armour Men\'s Tech™ 2.0 T Shirt', '4.0', '$29.99', 'The UA Tech™ Tees have quick-drying fabric for long lasting comfort while crushing new goals at the gym or in the studio.', 't2.png', 'Shirts'),
(18, 'Champion Men\'s Classic Jersey Screen', '3.7', '$29.99', 'Champion cotton short sleeve T Shirt is a great everyday on trend comfort tee. ', 't3.png', 'Shirts'),
(19, 'Converse Men\'s Star Chevron T-Shirt', '4.3', '$29.99', 'Without this shirt you will not want to leave the house anymore. A simple round neckline provides visual support for this short-sleeved top.', 't4.png', 'Shirts'),
(20, 'Nike Dry Men\'s T Shirt', '4.0', '$35.97', 'Powered by sweat-wicking technology, the Nike Dri-FIT Top fits closely to your body', 't5.png', 'Shirts'),
(21, 'Nike Women\'s Revolution 5 Running Shoes', '3.5', '87.99', 'The Nike Women’s Revolution 5 Running Shoe cushions your stride with soft foam to keep you running in comfort. ', 's1.png', 'Shoes'),
(22, 'Nike Women\'s Downshifter 9 ', '5', '$79.99', 'The Nike Women’s Downshifter 9 Running Shoe features soft, lightweight cushioning in the midsole.', 's2.png', 'Shoes'),
(23, 'Nike Women\'s Flex RN 2018', '3.5', '$114.99', 'Top to bottom, the Nike Flex RN 2018 Women’s Running Shoe is built to flex. Its circular-knit upper stretches in key areas', 's3.png', 'Shoes'),
(24, 'Top to bottom, the Nike Flex', '4.3', '$119.99', 'Crush your miles with the Nike Women’s Zoom Winflo 6 Running Shoes.', 's4.png', 'Shoes'),
(25, 'Nike Women\'s React Infinity', '4.0', '$215.00', 'The Nike Women’s React Infinity Run Flyknit Running Shoe will keep you running.', 's5.png', 'Shoes'),
(26, 'Nike Sportswear Women\'s Plush ', '3.0', '49.97', 'When you want to be cozy, reach for the Nike Sportswear Crop Top.', 'sw1.png', 'Sweaters'),
(27, 'Toronto Raptors Crew Neck Sweater', '5', '$58.97', 'Stay warm and stylsih while repping your 2019 NBA Champs with this Toronto Raptors 2019 Champions Crew Neck Sweater', 'sw2.png', 'Sweaters'),
(28, 'Nike Golf Men\'s Dry Top Crew Sweater', '4.0', '$76.97', 'Crafted from soft knit fabric, the Nike Dri-FIT Top sets you up with extra warmth during chilly rounds.', 'sw3.png', 'Sweaters'),
(29, 'adidas Men\'s Golf UV Lightweight', '4.3', '$75.00', 'Adidas Golf designs award-winning products across apparel, footwear and accessories for every golfer.', 'sw4.png', 'Sweaters'),
(30, 'Adicross Men\'s Tech Cardigan - Black', '4.0', '$104.97', 'This men’s golf cardigan offers a sophisticated approach to a chilly day on the links.', 'sw5.png', 'Sweaters'),
(31, 'Apple Watch Series 4 GPS', '3.5', '$559.00', 'The New Apple Watch Series 4 is here! Fundamentally redesigned and re-engineered. ', 'w1.png', 'Watches'),
(32, 'Polar Ignite GPS ', '5', '$329.99', 'Polar Ignite is a waterproof fitness watch with advanced wrist-based heart rate and integrated GPS.', 'w2.png', 'Watches'),
(33, 'Polar Vantage M GPS Running', '3.5', '$389.99', 'Challenge your limits with Polar Vantage M, an all-round multisport & running GPS watch for anyone who loves setting new records.', 'w3.png', 'Watches'),
(34, 'Polar M430 GPS Running Watch', '4.3', '$197.99', 'The Polar M430 is a GPS running watch with wrist-based heart rate, advanced training.', 'w4.png', 'Watches'),
(35, 'Suunto 3 Fitness Watch', '4.0', '$299.99', 'Suunto 3 Fitness is a beautifully robust fitness watch with smart features.', 'w5.png', 'Watches');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_blocked` tinyint(1) DEFAULT NULL,
  `first_time` tinyint(1) NOT NULL DEFAULT 1,
  `user_tryCount` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_blocked`, `first_time`, `user_tryCount`) VALUES
(2, 'guilherme', 'gui', 'nLLr', '12351', '2020-02-12 19:36:23', '::1', 0, 0, 0),
(28, 'foo', 'foo', 'bar', 'foo@bar', '2020-04-01 02:51:32', '::1', NULL, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
