-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2018 at 11:04 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Sr.no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `passcode` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Sr.no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sr.no`, `username`, `passcode`) VALUES
(1, 'admin', 'admin123'),
(2, 'kitchen', 'kitchen123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `tab` varchar(20) NOT NULL,
  `cat` varchar(50) NOT NULL,
  PRIMARY KEY (`tab`),
  UNIQUE KEY `tab` (`tab`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`tab`, `cat`) VALUES
('veg', 'Veg'),
('roti', 'Roti'),
('rice', 'Rice'),
('fastfood', 'Fastfood'),
('salads', 'Salads'),
('chinese', 'Chinese'),
('drinks', 'Drinks'),
('icecream', 'Icecream'),
('Desserts', 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `chinese`
--

CREATE TABLE IF NOT EXISTS `chinese` (
  `srno` int(11) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chinese`
--

INSERT INTO `chinese` (`srno`, `Dish`, `Price`, `pic`) VALUES
(1, 'Gobi Manchurian', 50, 'images/gobimanchuri.jpg\r\n'),
(2, 'Veg Manchaw Soup', 100, 'images/vegmanchow.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `Fb` varchar(50) NOT NULL,
  `Cmt` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Fb`, `Cmt`) VALUES
('3', ''),
('5', 'We loved ur service so much.\r\nBest luck for ur bright future.'),
('4', 'Happy to come here'),
('4', ''),
('4', 'Reduce serve time'),
('5', 'Awesome\r\n'),
('4', ''),
('4', ''),
('4', ''),
('1', ''),
('5', ''),
('5', 'Nice'),
('4', ''),
('4', 'Good'),
('1', '');

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

CREATE TABLE IF NOT EXISTS `desserts` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `Dish` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`srno`, `Dish`, `Price`, `pic`) VALUES
(1, 'Molten chocolate cake', 100, 'images/molten.jpeg'),
(2, 'Chocolate pudding', 80, 'images/pudding.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE IF NOT EXISTS `drinks` (
  `Srno` int(11) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` varchar(80) NOT NULL,
  PRIMARY KEY (`Srno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`Srno`, `Dish`, `Price`, `pic`) VALUES
(0, 'Pineapple juice', 80, 'images/pineapple-juice-2.jpg'),
(1, 'Kiwi Smoothie', 50, 'images/kiwi-smoothie.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fastfood`
--

CREATE TABLE IF NOT EXISTS `fastfood` (
  `srno` int(11) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` varchar(80) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fastfood`
--

INSERT INTO `fastfood` (`srno`, `Dish`, `Price`, `pic`) VALUES
(2, 'Aloo Tikki Burger', 70, 'images/alootikkiburger.jpg'),
(3, 'Cheese Burger', 80, 'images/Cheeseburger.jpg'),
(4, 'Marghertita Pizza', 280, 'images/PizzaMargherita.jpg'),
(5, 'OhillySteak Pizza', 260, 'images/OhillySteakPizza.jpg'),
(6, 'Papa Johns Pizza', 240, 'images/PapajohnsPizz.jpg'),
(7, 'Salad Pizza', 250, 'images/Saladpizza.jpg'),
(8, 'Cheese Nuggets', 80, 'images/Cheesenuggets.jpg'),
(9, 'Cheese Balls', 80, 'images/corn-cheese-balls-jain.jpg'),
(12, 'French Fries', 60, 'images/Frenchfries.jpg'),
(13, 'Samosa', 20, 'images/Samosa.jpg'),
(14, 'Vadapav', 20, 'images/vadaPav.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `icecream`
--

CREATE TABLE IF NOT EXISTS `icecream` (
  `srno` int(11) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icecream`
--

INSERT INTO `icecream` (`srno`, `Dish`, `Price`, `pic`) VALUES
(1, 'Blackcurrant', 160, 'images/blackcurrent.jpg\r\n'),
(2, 'Blue Berry ', 120, 'images/-Blueberry-Ice-Cream-.jpg'),
(3, 'Brownie ', 200, 'images/brownieicecream.jpg'),
(4, 'Butter Scotch', 150, 'images/butterscotch.jpg'),
(5, 'Oreo Ice-cream', 220, 'images/Oreo.jpg'),
(6, 'Rainbow', 200, 'images/rainbow.jpg'),
(7, 'Strawberry', 160, 'images/strawberry-.jpg'),
(8, 'Vanilla', 120, 'images/vanilla.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `italian`
--

CREATE TABLE IF NOT EXISTS `italian` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `Dish` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `italian`
--


-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `Srno` int(11) NOT NULL AUTO_INCREMENT,
  `Song` text NOT NULL,
  PRIMARY KEY (`Srno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`Srno`, `Song`) VALUES
(1, 'J:\\Xampp\\xampp\\htdocs\\try\\music\\1.mp3'),
(2, 'J:\\Xampp\\xampp\\htdocs\\try\\music\\2.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE IF NOT EXISTS `myorder` (
  `dish_no` int(11) NOT NULL AUTO_INCREMENT,
  `cust_no` int(11) NOT NULL,
  `tab` int(11) NOT NULL,
  `dish` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`dish_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=195 ;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`dish_no`, `cust_no`, `tab`, `dish`, `qty`, `price`, `type`, `Status`) VALUES
(137, 83, 50, 'Vegetable Makhanwala', 2, 100, 'Table', 0),
(138, 83, 50, 'Tandoori Roti', 4, 10, 'Table', 0),
(139, 84, 21, 'Jira Rice', 2, 110, 'Table', 0),
(140, 87, 20, 'Akkha Masur', 2, 110, 'Parcel', 0),
(141, 87, 20, 'Butter Naan', 2, 12, 'Table', 0),
(142, 90, 50, 'Akkha Masur', 2, 110, 'Table', 0),
(175, 94, 25, 'Cheese Burger', 4, 80, '', 0),
(176, 94, 25, 'French Fries', 2, 60, '', 0),
(177, 95, 20, 'Dal Fry', 2, 90, '', 0),
(178, 96, 2, 'Aloo Matar', 1, 90, '', 0),
(179, 95, 20, 'Kaju Curry', 2, 180, '', 0),
(181, 96, 2, 'Lachha Paratha', 2, 25, '', 0),
(182, 95, 20, 'Garlic Naan', 2, 18, '', 0),
(183, 98, 15, 'Jhunka Bhakar', 2, 80, 'Table', 0),
(184, 98, 15, 'Cheese Burger', 2, 80, 'Parcel', 0),
(185, 98, 15, 'French Fries', 1, 60, 'Table', 0),
(186, 100, 21, 'Gobi Manchurian', 0, 50, 'Table', 0),
(187, 100, 21, 'Veg Manchaw Soup', 0, 100, 'Parcel', 0),
(188, 118, 60, 'Akkha Masur', 2, 110, 'Table', 0),
(189, 119, 20, 'Butter Naan', 25, 12, 'Table', 0),
(190, 120, 5, 'Aloo Matar', 2, 90, 'Table', 0),
(191, 120, 5, 'Lachha Paratha', 3, 25, 'Table', 0),
(192, 121, 6, 'Aloo Tikki Burger', 2, 70, 'Table', 0),
(193, 121, 6, 'French Fries', 2, 60, 'Table', 0),
(194, 121, 6, 'Blackcurrant', 2, 160, 'Table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(100) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `tab` varchar(2) NOT NULL,
  `cust_no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cust_no`),
  KEY `name` (`name`),
  KEY `tab` (`tab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `mob`, `tab`, `cust_no`) VALUES
('Sajida', '9503408190', '01', 1),
('Shahid', '7775047199', '10', 35),
('Ruturaj Varne', '9730305641', '09', 36),
('vaishnavi rathi', '7588345898', '51', 37),
('kulkarni', '9049014276', '12', 38),
('Ruturaj Varne', '9730305641', '21', 41),
('Shado', '8888887777', '41', 42),
('vaishnavi rathi', '7588345898', '10', 43),
('ad', '9485125622', '09', 44),
('aditya  patil', '7588449449', '11', 45),
('Ruturaj Varne', '9730305641', '21', 46),
('aaa', '8585858585', '52', 52),
('Shado', '7775047199', '20', 53),
('shado1223', '1122222222', '20', 54),
('shado1223', '1122222222', '20', 55),
('vaishnavi rathi', '9623345777', '11', 56),
('s', 'd', '', 57),
('s', 'd', '', 58),
('s', 'd', '', 59),
('Nihal Jedhe', '7775047199', '21', 60),
('Shahid Rafik Mujawar', '7070707070', '23', 61),
('ss', '7775047199', '21', 62),
('Siddiq Jamadar', '7863139999', '03', 64),
('qwe', '7777777777', '21', 65),
('S M', '7775047199', '52', 66),
('S M', '7775047199', '52', 67),
('s', '4444444444', '21', 68),
('shado', '1223333333', '21', 69),
('shahid', '1111111111', '23', 70),
('Shado', '7775555555', '45', 71),
('shahid', '7775047199', '23', 72),
('34', '7775047199', '23', 73),
('siddika', '9999999999', '01', 74),
('shadp', '7775047199', '52', 75),
('ruturaj', '7777777777', '23', 76),
('shahid', '7775047199', '52', 77),
('Arshiya Momin', '7777777777', '20', 78),
('shado', '7775047199', '23', 79),
('d', '9999999999', '01', 80),
('s', '7775047199', '10', 81),
('sam', '8585858585', '20', 82),
('Khadijah Imran Makandar', '8454843051', '50', 83),
('Shahid', '7775047199', '21', 84),
('Shahdi', '7777777777', '21', 85),
('shahid', '8888888800', '36', 86),
('NJ', '9999999999', '20', 87),
('avadhut', '9049014276', '22', 88),
('aaa', '9999999999', '03', 89),
('Shahid', '7775047199', '50', 90),
('sss', '7777777777', '40', 91),
('shahid', '6666666666', '10', 92),
('Doremon', '9999999999', '50', 93),
('hi', '7777777777', '25', 94),
('Sajida Rafik Mujawar', '9503408190', '20', 95),
('Rafik Mujawar', '9370858007', '02', 96),
('sh', '7777777777', '23', 97),
('ABCD', '8888888800', '15', 98),
('shado', '7775047199', '25', 99),
('naeem momin', '8055151851', '21', 100),
('ram', '7777777777', '23', 101),
('s', '7777777777', '25', 102),
('s', '7777777777', '25', 103),
('hi', '7777777777', '25', 104),
('S', '7775047199', '23', 105),
('shado', '1234567891', '56', 106),
('vaishnavi', '7588345898', '98', 107),
('s', '7777777777', '25', 108),
('shadi', '1234567890', '25', 109),
('s', '7775047199', '50', 110),
('Shahid', '7775047199', '24', 111),
('Shahid', '9370858007', '24', 112),
('shahid', '8888888888', '26', 113),
('s', '7777777777', '55', 114),
('Sajida', '9503408190', '23', 115),
('Sajida', '9503408190', '20', 116),
('Shahid Mujawar', '7775047199', '55', 117),
('shubham', '8888888888', '60', 118),
('s', '9595465846', '20', 119),
('arshiya', '9874563210', '05', 120),
('ranjeet', '9874563210', '06', 121),
('arshiya', '9874563210', '05', 122),
('Shado', '8888888801', '52', 123);

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE IF NOT EXISTS `rice` (
  `Srno` int(11) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`Srno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rice`
--

INSERT INTO `rice` (`Srno`, `Dish`, `Price`, `pic`) VALUES
(1, 'Jira Rice', 110, 'images/jirarice.jpg\r\n'),
(2, 'Veg Biryani', 150, 'images/Veg-Biryani.jpg'),
(3, 'Spc. Curd Rice ', 80, 'images/curd-rice.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roti`
--

CREATE TABLE IF NOT EXISTS `roti` (
  `srno` int(11) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roti`
--

INSERT INTO `roti` (`srno`, `Dish`, `Price`, `pic`) VALUES
(1, 'Tandoori Roti', 10, 'images/roti.jpg'),
(2, 'Butter Naan', 12, 'images/indian-naan-roti-.jpg'),
(3, 'Garlic Naan', 18, 'images/Garlic-Naan_.jpg'),
(4, 'Missi Roti', 15, 'images/missiroti.jpg'),
(5, 'Soft Roti', 8, 'images/softroti1.jpg'),
(6, 'Lachha Paratha', 25, 'images/Lachha-paratha-Indian-Roti.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salads`
--

CREATE TABLE IF NOT EXISTS `salads` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `Dish` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `salads`
--

INSERT INTO `salads` (`srno`, `Dish`, `Price`, `pic`) VALUES
(2, 'Carrot Salad with Black Grape Dressing ', 50, 'images/carrot.jpg'),
(3, 'Green Bean Salad', 60, 'images/greenbean.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE IF NOT EXISTS `sample` (
  `Dish` varchar(50) NOT NULL,
  `Price` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`Dish`, `Price`) VALUES
('Tandoori Roti', '10'),
('Butter Naan', '12'),
('Aloo Paratha', '40'),
('Methi Paratha', '40');

-- --------------------------------------------------------

--
-- Table structure for table `statistic`
--

CREATE TABLE IF NOT EXISTS `statistic` (
  `Datee` date NOT NULL,
  `Sale` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistic`
--

INSERT INTO `statistic` (`Datee`, `Sale`) VALUES
('2018-03-18', 250),
('2018-03-18', 100),
('2018-03-17', 500),
('2018-03-17', 200),
('2018-02-17', 200),
('2018-02-17', 300),
('2017-12-17', 300),
('2017-12-10', 100),
('2018-03-18', 0),
('2018-03-18', 0),
('2018-03-19', 60),
('2018-03-19', 60),
('2018-03-23', 0),
('2018-03-23', 0),
('2018-03-23', 640),
('2018-03-23', 305),
('2018-03-23', 0),
('2018-03-23', 0),
('2018-03-23', 0),
('2018-03-23', 100),
('2018-03-24', 456),
('2018-08-17', 0),
('2018-03-27', 220),
('2018-03-27', 600),
('2018-08-17', 0),
('2018-08-17', 0),
('2018-03-27', 576),
('2018-03-27', 380),
('2018-03-27', 140);

-- --------------------------------------------------------

--
-- Table structure for table `veg`
--

CREATE TABLE IF NOT EXISTS `veg` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `Dish` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `veg`
--

INSERT INTO `veg` (`srno`, `Dish`, `Price`, `pic`) VALUES
(1, 'Paneer Tikka', 200, 'images/paneer.jpg\r\n'),
(2, 'Vegetable Makhanwala', 100, 'images/veggi.jpg'),
(3, 'Akkha Masur', 110, 'images/akkamasur.jpg'),
(4, 'Bhendi Masala', 80, 'images/bhindimasala.jpg'),
(5, 'Dal Fry', 90, 'images/dalfry.jpg'),
(6, 'Chana Masala', 70, 'images/chana-masala.jpg'),
(7, 'Chole Bhature', 120, 'images/Chole_Bhature-1.jpg'),
(8, 'Chilli Paneer', 160, 'images/chilli-paneer.jpg'),
(9, 'Paneer Butter Masala', 190, 'images/Paneerbuttermasala.jpg'),
(10, 'Palak Paneer', 140, 'images/palak-paneer.jpg'),
(11, 'Paneer Bhurji', 130, 'images/paneer-bhurji-recipe.jpg'),
(12, 'Mushroom Masala', 140, 'images/mashroom_masala.jpg'),
(13, 'Matar Mushroon', 150, 'images/MatarMushroon.jpg'),
(14, 'Mixed Vegetable', 130, 'images/mixedvegetables.jpg'),
(15, 'Aloo Matar', 90, 'images/dhaba-style-aloo-matar-290x190.jpg'),
(16, 'Veg Kurma', 100, 'images/Vegkurma.jpg'),
(17, 'Veg Handi', 110, 'images/veg-handi-recipe.jpg'),
(18, 'Dal Palak', 90, 'images/dal-palak.jpg'),
(19, 'Kaju Curry', 180, 'images/kaju-curry-cashew-indian-spices-63587652.jpg'),
(20, 'Kaju Butter Masala', 190, 'images/kaju-butter-masala-recipe-5.jpg'),
(21, 'Veg Plate(Thali)', 170, 'images/delecious-vegetable-thali.jpg'),
(22, 'South Plate(Thali)', 210, 'images/south-indian-thali-bangalore8.jpg'),
(23, 'Jhunka Bhakar', 80, 'images/jhunka.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
