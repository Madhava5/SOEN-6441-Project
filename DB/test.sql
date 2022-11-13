-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2022 at 01:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `username`, `password`) VALUES
(1, 'atuny0', '9uQFF1Lh'),
(2, 'hbingley1', 'CQutx25i8r'),
(3, 'rshawe2', 'OWsTbMUgFc'),
(4, 'yraigatt3', 'sRQxjPfdS'),
(5, 'kmeus4', 'aUTdmmmbH'),
(6, 'jtreleven5', 'zY1nE46Zm'),
(7, 'dpettegre6', 'YVmhktgYVS'),
(8, 'ggude7', 'MWwlaeWcOoF6'),
(9, 'nloiterton8', 'HTQxxXV9Bq4'),
(10, 'umcgourty9', 'i0xzpX'),
(11, 'acharlota', 'M9lbMdydMN'),
(12, 'rhallawellb', 'esTkitT1r'),
(13, 'lgribbinc', 'ftGj8LZTtv9g'),
(14, 'mturleyd', 'GyLnCB8gNIp'),
(15, 'kminchelle', '0lelplR'),
(16, 'dpierrof', 'Vru55Y4tufI4'),
(17, 'vcholdcroftg', 'mSPzYZfR'),
(18, 'sberminghamh', 'cAjfb8vg'),
(19, 'bleveragei', 'UZGAiqPqWQHQ'),
(20, 'aeatockj', 'szWAG6hc'),
(21, 'ckensleyk', 'tq7kPXyf'),
(22, 'froachel', 'rfVSKImC'),
(23, 'beykelhofm', 'zQwaHTHbuZyr'),
(24, 'brickeardn', 'bMQnPttV'),
(25, 'dfundello', 'k9zgV68UKw8m'),
(26, 'lgronaverp', '4a1dAKDv9KB9'),
(27, 'fokillq', 'xZnWSWnqH'),
(28, 'xisherwoodr', 'HLDqN5vCF'),
(29, 'jissetts', 'ePawWgrnZR8L'),
(30, 'kdulyt', '5t6q4KC7O');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `discountPercentage` float NOT NULL,
  `brand` varchar(25) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `title`, `description`, `price`, `discountPercentage`, `brand`, `category`) VALUES
(1, 'iPhone 9', 'An apple mobile which is nothing like apple', 549, 12.96, 'Apple', 'smartphones'),
(2, 'iPhone X', 'SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...', 899, 17.94, 'Apple', 'smartphones'),
(3, 'Samsung Universe 9', 'Samsung\'s new variant which goes beyond Galaxy to the Universe', 1249, 15.46, 'Samsung', 'smartphones'),
(4, 'OPPOF19', 'OPPO F19 is officially announced on April 2021.', 280, 17.91, 'OPPO', 'smartphones'),
(5, 'Huawei P30', 'Huawei’s re-badged P30 Pro New Edition was officially unveiled yesterday in Germany and now the device has made its way to the UK.', 499, 10.58, 'Huawei', 'smartphones'),
(6, 'MacBook Pro', 'MacBook Pro 2021 with mini-LED display may launch between September, November', 1749, 11.02, 'APPle', 'laptops'),
(7, 'Samsung Galaxy Book', 'Samsung Galaxy Book S (2020) Laptop With Intel Lakefield Chip, 8GB of RAM Launched', 1499, 4.15, 'Samsung', 'laptops'),
(8, 'Microsoft Surface Laptop 4', 'Style and speed. Stand out on HD video calls backed by Studio Mics. Capture ideas on the vibrant touchscreen.', 1499, 10.23, 'Microsoft Surface', 'laptops'),
(9, 'Infinix INBOOK', 'Infinix Inbook X1 Ci3 10th 8GB 256GB 14 Win10 Grey – 1 Year Warranty', 1099, 11.83, 'Infinix', 'laptops'),
(10, 'HP Pavilion 15-DK1056WM', 'HP Pavilion 15-DK1056WM Gaming Laptop 10th Gen Core i5, 8GB, 256GB SSD, GTX 1650 4GB, Windows 10', 1099, 6.18, 'HP Pavilion', 'laptops'),
(12, 'Brown Perfume', 'Royal_Mirage Sport Brown Perfume for Men & Women - 120ml', 40, 15.66, 'Royal_Mirage', 'fragrances'),
(13, 'Fog Scent Xpressio Perfume', 'Product details of Best Fog Scent Xpressio Perfume 100ml For Men cool long lasting perfumes for Men', 13, 8.14, 'Fog Scent Xpressio', 'fragrances'),
(14, 'Non-Alcoholic Concentrated Perfume Oil', 'Original Al Munakh® by Mahal Al Musk | Our Impression of Climate | 6ml Non-Alcoholic Concentrated Perfume Oil', 120, 15.6, 'Al Munakh', 'fragrances'),
(15, 'Eau De Perfume Spray', 'Genuine  Al-Rehab spray perfume from UAE/Saudi Arabia/Yemen High Quality', 30, 10.99, 'Lord - Al-Rehab', 'fragrances'),
(16, 'Hyaluronic Acid Serum', 'L\'OrÃ©al Paris introduces Hyaluron Expert Replumping Serum formulated with 1.5% Hyaluronic Acid', 19, 13.31, 'L\'Oreal Paris', 'skincare'),
(17, 'Tree Oil 30ml', 'Tea tree oil contains a number of compounds, including terpinen-4-ol, that have been shown to kill certain bacteria,', 12, 4.09, 'Hemani Tea', 'skincare'),
(18, 'Oil Free Moisturizer 100ml', 'Dermive Oil Free Moisturizer with SPF 20 is specifically formulated with ceramides, hyaluronic acid & sunscreen.', 40, 13.1, 'Dermive', 'skincare'),
(19, 'Skin Beauty Serum.', 'Product name: rorec collagen hyaluronic acid white face serum riceNet weight: 15 m', 46, 10.68, 'ROREC White Rice', 'skincare'),
(20, 'Freckle Treatment Cream- 15gm', 'Fair & Clear is Pakistan\'s only pure Freckle cream which helpsfade Freckles, Darkspots and pigments. Mercury level is 0%, so there are no side effects.', 70, 16.99, 'Fair & Clear', 'skincare'),
(21, '- Daal Masoor 500 grams', 'Fine quality Branded Product Keep in a cool and dry place', 20, 4.81, 'Saaf & Khaas', 'groceries'),
(22, 'Elbow Macaroni - 400 gm', 'Product details of Bake Parlor Big Elbow Macaroni - 400 gm', 14, 15.58, 'Bake Parlor Big', 'groceries'),
(23, 'Orange Essence Food Flavou', 'Specifications of Orange Essence Food Flavour For Cakes and Baking Food Item', 14, 8.04, 'Baking Food Items', 'groceries'),
(24, 'cereals muesli fruit nuts', 'original fauji cereal muesli 250gm box pack original fauji cereals muesli fruit nuts flakes breakfast cereal break fast faujicereals cerels cerel foji fouji', 46, 16.8, 'fauji', 'groceries'),
(25, 'Gulab Powder 50 Gram', 'Dry Rose Flower Powder Gulab Powder 50 Gram • Treats Wounds', 70, 13.58, 'Dry Rose', 'groceries'),
(26, 'Plant Hanger For Home', 'Boho Decor Plant Hanger For Home Wall Decoration Macrame Wall Hanging Shelf', 41, 17.86, 'Boho Decor', 'home-decoration'),
(27, 'Flying Wooden Bird', 'Package Include 6 Birds with Adhesive Tape Shape: 3D Shaped Wooden Birds Material: Wooden MDF, Laminated 3.5mm', 51, 15.58, 'Flying Wooden', 'home-decoration'),
(28, '3D Embellishment Art Lamp', '3D led lamp sticker Wall sticker 3d wall art light on/off button  cell operated (included)', 20, 16.49, 'LED Lights', 'home-decoration'),
(29, 'Handcraft Chinese style', 'Handcraft Chinese style art luxury palace hotel villa mansion home decor ceramic vase with brass fruit plate', 60, 15.34, 'luxury palace', 'home-decoration'),
(30, 'Key Holder', 'Attractive DesignMetallic materialFour key hooksReliable & DurablePremium Quality', 30, 2.92, 'Golden', 'home-decoration');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `gender`, `email`, `phone`, `address`) VALUES
(1, 'Terry Medhurst Smitham', 'male', 'atuny0@sohu.com', '+63 791 675 8914', '1745 T Street Southeast Washington 20020 DC'),
(2, 'Sheldon Quigley Cole', 'male', 'hbingley1@plala.or.jp', '+7 813 117 7139', '6007 Applegate Lane Louisville 40219 KY'),
(3, 'Terrill Hills Hoeger', 'male', 'rshawe2@51.la', '+63 739 292 7942', '560 Penstock Drive Grass Valley 95945 CA'),
(4, 'Miles Cummerata Maggio', 'male', 'yraigatt3@nature.com', '+86 461 145 4186', '150 Carter Street Manchester 06040 CT'),
(5, 'Mavis Schultz Yundt', 'male', 'kmeus4@upenn.edu', '+372 285 771 1911', '2721 Lindsay Avenue Louisville 40206 KY'),
(6, 'Alison Reichert Franecki', 'female', 'jtreleven5@nhs.uk', '+351 527 735 3642', '18 Densmore Drive Essex 05452 VT'),
(7, 'Oleta Abbott Wyman', 'female', 'dpettegre6@columbia.edu', '+62 640 802 7111', '637 Britannia Drive Vallejo 94591 CA'),
(8, 'Ewell Mueller Durgan', 'male', 'ggude7@chron.com', '+86 946 297 2275', '5601 West Crocus Drive Glendale 85306 AZ'),
(9, 'Demetrius Corkery Gleason', 'male', 'nloiterton8@aol.com', '+86 356 590 9727', '5403 Illinois Avenue Nashville 37209 TN'),
(10, 'Eleanora Price Cummings', 'female', 'umcgourty9@jalbum.net', '+60 184 408 0824', '8821 West Myrtle Avenue Glendale 85305 AZ'),
(11, 'Marcel Jones Smith', 'male', 'acharlota@liveinternet.ru', '+967 253 210 0344', '2203 7th Street Road Louisville 40208 KY'),
(12, 'Assunta Rath Heller', 'female', 'rhallawellb@dropbox.com', '+380 962 542 6549', '6463 Vrain Street Arvada 80003 CO'),
(13, 'Trace Douglas Lemke', 'male', 'lgribbinc@posterous.com', '+1 609 937 3468', '87 Horseshoe Drive West Windsor 05037 VT'),
(14, 'Enoch Lynch Heidenreich', 'male', 'mturleyd@tumblr.com', '+94 912 100 5118', '60 Desousa Drive Manchester 06040 CT'),
(15, 'Jeanne Halvorson Cummerata', 'female', 'kminchelle@qq.com', '+86 581 108 7855', '4 Old Colony Way Yarmouth 02664 MA'),
(16, 'Trycia Fadel Rosenbaum', 'female', 'dpierrof@vimeo.com', '+420 833 708 0340', '314 South 17th Street Nashville 37206 TN'),
(17, 'Bradford Prohaska Bins', 'male', 'vcholdcroftg@ucoz.com', '+420 874 628 3710', '1649 Timberridge Court Fayetteville 72704 AR'),
(18, 'Arely Skiles Monahan', 'male', 'sberminghamh@chron.com', '+55 886 766 8617', '5461 West Shades Valley Drive Montgomery 36108 AL'),
(19, 'Gust Purdy Abshire', 'male', 'bleveragei@so-net.ne.jp', '+86 886 889 0258', '629 Debbie Drive Nashville 37076 TN'),
(20, 'Lenna Renner Schumm', 'female', 'aeatockj@psu.edu', '+1 904 601 7177', '22572 Toreador Drive Salinas 93908 CA'),
(21, 'Doyle Ernser Feeney', 'male', 'ckensleyk@pen.io', '+86 634 419 6839', '3034 Mica Street Fayetteville 72704 AR'),
(22, 'Tressa Weber Williamson', 'female', 'froachel@howstuffworks.com', '+34 517 104 6248', '3729 East Mission Boulevard Fayetteville 72703 AR'),
(23, 'Felicity O\'Reilly Rosenbaum', 'female', 'beykelhofm@wikispaces.com', '+63 919 564 1690', '5114 Greentree Drive Nashville 37211 TN'),
(24, 'Jocelyn Schuster Dooley', 'male', 'brickeardn@fema.gov', '+7 968 462 1292', '3466 Southview Avenue Montgomery 36111 AL'),
(25, 'Edwina Ernser Kiehn', 'female', 'dfundello@amazon.co.jp', '+86 376 986 8945', '1513 Cathy Street Savannah 31415 GA'),
(26, 'Griffin Braun Deckow', 'male', 'lgronaverp@cornell.edu', '+62 511 790 0161', '600 West 19th Avenue Anchorage 99503 AK'),
(27, 'Piper Schowalter Wuckert', 'female', 'fokillq@amazon.co.jp', '+60 785 960 7918', '1208 Elkader Court North Nashville 37013 TN'),
(28, 'Kody Terry Larkin', 'male', 'xisherwoodr@ask.com', '+81 859 545 8951', '210 Green Road Manchester 06042 CT'),
(29, 'Macy Greenfelder Koepp', 'female', 'jissetts@hostgator.com', '+81 915 649 2384', '49548 Road 200 O\'Neals 93645 CA'),
(30, 'Maurine Stracke Abshire', 'female', 'kdulyt@umich.edu', '+48 143 590 6847', '81 Seaton Place Northwest Washington 20001 DC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
