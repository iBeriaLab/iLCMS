-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 04:06 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'ტესტ კატეგორია', 'პირველი ტესტ კატეგორია', NULL, '2017-08-28 19:43:36', '2017-08-28 19:43:36'),
(2, 'ტესტ კატეგორია 2', 'მეორე ტესტ კატეგორია', 1, '2017-08-28 20:11:32', '2017-08-28 20:11:32'),
(3, 'სხვადასხვა', 'კატეგორიის გარეშე', NULL, '2017-08-28 21:20:07', '2017-08-28 21:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `country_capitals`
--

CREATE TABLE `country_capitals` (
  `id` int(11) NOT NULL,
  `countryname` varchar(255) DEFAULT NULL,
  `capitalname` varchar(255) DEFAULT NULL,
  `capitallatitude` varchar(255) DEFAULT NULL,
  `capitallongitude` varchar(255) DEFAULT NULL,
  `countrycode` varchar(255) DEFAULT NULL,
  `continentname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_capitals`
--

INSERT INTO `country_capitals` (`id`, `countryname`, `capitalname`, `capitallatitude`, `capitallongitude`, `countrycode`, `continentname`) VALUES
(1, 'Georgia', 'Tbilisi', '41.68333333333333', '44.833333', 'GE', 'Europe'),
(2, 'Somaliland', 'Hargeisa', '9.55', '44.050000', 'SO', 'Africa'),
(3, 'French Southern and Antarctic Lands', 'Port-aux-FranÃ§ais', '-49.35', '70.216667', 'TF', 'Antarctica'),
(4, 'Palestine', 'Jerusalem', '31.766666666666666', '35.233333', 'PS', 'Asia'),
(5, 'Aland Islands', 'Mariehamn', '60.116667', '19.900000', 'AX', 'Europe'),
(6, 'Nauru', 'Yaren', '-0.5477', '166.920867', 'NR', 'Australia'),
(7, 'Saint Martin', 'Marigot', '18.0731', '-63.082200', 'MF', 'North America'),
(8, 'Tokelau', 'Atafu', '-9.166667', '-171.833333', 'TK', 'Australia'),
(9, 'Western Sahara', 'El-AaiÃºn', '27.153611', '-13.203333', 'EH', 'Africa'),
(10, 'Afghanistan', 'Kabul', '34.516666666666666', '69.183333', 'AF', 'Asia'),
(11, 'Albania', 'Tirana', '41.31666666666667', '19.816667', 'AL', 'Europe'),
(12, 'Algeria', 'Algiers', '36.75', '3.050000', 'DZ', 'Africa'),
(13, 'American Samoa', 'Pago Pago', '-14.266666666666667', '-170.700000', 'AS', 'Australia'),
(14, 'Andorra', 'Andorra la Vella', '42.5', '1.516667', 'AD', 'Europe'),
(15, 'Angola', 'Luanda', '-8.833333333333334', '13.216667', 'AO', 'Africa'),
(16, 'Anguilla', 'The Valley', '18.216666666666665', '-63.050000', 'AI', 'North America'),
(17, 'Antigua and Barbuda', 'Saint John\'s', '17.116666666666667', '-61.850000', 'AG', 'North America'),
(18, 'Argentina', 'Buenos Aires', '-34.583333333333336', '-58.666667', 'AR', 'South America'),
(19, 'Armenia', 'Yerevan', '40.166666666666664', '44.500000', 'AM', 'Europe'),
(20, 'Aruba', 'Oranjestad', '12.516666666666667', '-70.033333', 'AW', 'North America'),
(21, 'Australia', 'Canberra', '-35.266666666666666', '149.133333', 'AU', 'Australia'),
(22, 'Austria', 'Vienna', '48.2', '16.366667', 'AT', 'Europe'),
(23, 'Azerbaijan', 'Baku', '40.38333333333333', '49.866667', 'AZ', 'Europe'),
(24, 'Bahamas', 'Nassau', '25.083333333333332', '-77.350000', 'BS', 'North America'),
(25, 'Bahrain', 'Manama', '26.233333333333334', '50.566667', 'BH', 'Asia'),
(26, 'Bangladesh', 'Dhaka', '23.716666666666665', '90.400000', 'BD', 'Asia'),
(27, 'Barbados', 'Bridgetown', '13.1', '-59.616667', 'BB', 'North America'),
(28, 'Belarus', 'Minsk', '53.9', '27.566667', 'BY', 'Europe'),
(29, 'Belgium', 'Brussels', '50.833333333333336', '4.333333', 'BE', 'Europe'),
(30, 'Belize', 'Belmopan', '17.25', '-88.766667', 'BZ', 'Central America'),
(31, 'Benin', 'Porto-Novo', '6.483333333333333', '2.616667', 'BJ', 'Africa'),
(32, 'Bermuda', 'Hamilton', '32.28333333333333', '-64.783333', 'BM', 'North America'),
(33, 'Bhutan', 'Thimphu', '27.466666666666665', '89.633333', 'BT', 'Asia'),
(34, 'Bolivia', 'La Paz', '-16.5', '-68.150000', 'BO', 'South America'),
(35, 'Bosnia and Herzegovina', 'Sarajevo', '43.86666666666667', '18.416667', 'BA', 'Europe'),
(36, 'Botswana', 'Gaborone', '-24.633333333333333', '25.900000', 'BW', 'Africa'),
(37, 'Brazil', 'Brasilia', '-15.783333333333333', '-47.916667', 'BR', 'South America'),
(38, 'British Virgin Islands', 'Road Town', '18.416666666666668', '-64.616667', 'VG', 'North America'),
(39, 'Brunei Darussalam', 'Bandar Seri Begawan', '4.883333333333333', '114.933333', 'BN', 'Asia'),
(40, 'Bulgaria', 'Sofia', '42.68333333333333', '23.316667', 'BG', 'Europe'),
(41, 'Burkina Faso', 'Ouagadougou', '12.366666666666667', '-1.516667', 'BF', 'Africa'),
(42, 'Myanmar', 'Rangoon', '16.8', '96.150000', 'MM', 'Asia'),
(43, 'Burundi', 'Bujumbura', '-3.3666666666666667', '29.350000', 'BI', 'Africa'),
(44, 'Cambodia', 'Phnom Penh', '11.55', '104.916667', 'KH', 'Asia'),
(45, 'Cameroon', 'Yaounde', '3.8666666666666667', '11.516667', 'CM', 'Africa'),
(46, 'Canada', 'Ottawa', '45.416666666666664', '-75.700000', 'CA', 'Central America'),
(47, 'Cape Verde', 'Praia', '14.916666666666666', '-23.516667', 'CV', 'Africa'),
(48, 'Cayman Islands', 'George Town', '19.3', '-81.383333', 'KY', 'North America'),
(49, 'Central African Republic', 'Bangui', '4.366666666666666', '18.583333', 'CF', 'Africa'),
(50, 'Chad', 'N\'Djamena', '12.1', '15.033333', 'TD', 'Africa'),
(51, 'Chile', 'Santiago', '-33.45', '-70.666667', 'CL', 'South America'),
(52, 'China', 'Beijing', '39.916666666666664', '116.383333', 'CN', 'Asia'),
(53, 'Christmas Island', 'The Settlement', '-10.416666666666666', '105.716667', 'CX', 'Australia'),
(54, 'Cocos Islands', 'West Island', '-12.166666666666666', '96.833333', 'CC', 'Australia'),
(55, 'Colombia', 'Bogota', '4.6', '-74.083333', 'CO', 'South America'),
(56, 'Comoros', 'Moroni', '-11.7', '43.233333', 'KM', 'Africa'),
(57, 'Democratic Republic of the Congo', 'Kinshasa', '-4.316666666666666', '15.300000', 'CD', 'Africa'),
(58, 'Republic of Congo', 'Brazzaville', '-4.25', '15.283333', 'CG', 'Africa'),
(59, 'Cook Islands', 'Avarua', '-21.2', '-159.766667', 'CK', 'Australia'),
(60, 'Costa Rica', 'San Jose', '9.933333333333334', '-84.083333', 'CR', 'Central America'),
(61, 'Cote d\'Ivoire', 'Yamoussoukro', '6.816666666666666', '-5.266667', 'CI', 'Africa'),
(62, 'Croatia', 'Zagreb', '45.8', '16.000000', 'HR', 'Europe'),
(63, 'Cuba', 'Havana', '23.116666666666667', '-82.350000', 'CU', 'North America'),
(64, 'CuraÃ§ao', 'Willemstad', '12.1', '-68.916667', 'CW', 'North America'),
(65, 'Cyprus', 'Nicosia', '35.166666666666664', '33.366667', 'CY', 'Europe'),
(66, 'Czech Republic', 'Prague', '50.083333333333336', '14.466667', 'CZ', 'Europe'),
(67, 'Denmark', 'Copenhagen', '55.666666666666664', '12.583333', 'DK', 'Europe'),
(68, 'Djibouti', 'Djibouti', '11.583333333333334', '43.150000', 'DJ', 'Africa'),
(69, 'Dominica', 'Roseau', '15.3', '-61.400000', 'DM', 'North America'),
(70, 'Dominican Republic', 'Santo Domingo', '18.466666666666665', '-69.900000', 'DO', 'North America'),
(71, 'Ecuador', 'Quito', '-0.21666666666666667', '-78.500000', 'EC', 'South America'),
(72, 'Egypt', 'Cairo', '30.05', '31.250000', 'EG', 'Africa'),
(73, 'El Salvador', 'San Salvador', '13.7', '-89.200000', 'SV', 'Central America'),
(74, 'Equatorial Guinea', 'Malabo', '3.75', '8.783333', 'GQ', 'Africa'),
(75, 'Eritrea', 'Asmara', '15.333333333333334', '38.933333', 'ER', 'Africa'),
(76, 'Estonia', 'Tallinn', '59.43333333333333', '24.716667', 'EE', 'Europe'),
(77, 'Ethiopia', 'Addis Ababa', '9.033333333333333', '38.700000', 'ET', 'Africa'),
(78, 'Falkland Islands', 'Stanley', '-51.7', '-57.850000', 'FK', 'South America'),
(79, 'Faroe Islands', 'Torshavn', '62', '-6.766667', 'FO', 'Europe'),
(80, 'Fiji', 'Suva', '-18.133333333333333', '178.416667', 'FJ', 'Australia'),
(81, 'Finland', 'Helsinki', '60.166666666666664', '24.933333', 'FI', 'Europe'),
(82, 'France', 'Paris', '48.86666666666667', '2.333333', 'FR', 'Europe'),
(83, 'French Polynesia', 'Papeete', '-17.533333333333335', '-149.566667', 'PF', 'Australia'),
(84, 'Gabon', 'Libreville', '0.38333333333333336', '9.450000', 'GA', 'Africa'),
(85, 'The Gambia', 'Banjul', '13.45', '-16.566667', 'GM', 'Africa'),
(87, 'Germany', 'Berlin', '52.516666666666666', '13.400000', 'DE', 'Europe'),
(88, 'Ghana', 'Accra', '5.55', '-0.216667', 'GH', 'Africa'),
(89, 'Gibraltar', 'Gibraltar', '36.13333333333333', '-5.350000', 'GI', 'Europe'),
(90, 'Greece', 'Athens', '37.983333333333334', '23.733333', 'GR', 'Europe'),
(91, 'Greenland', 'Nuuk', '64.18333333333334', '-51.750000', 'GL', 'Central America'),
(92, 'Grenada', 'Saint George\'s', '12.05', '-61.750000', 'GD', 'North America'),
(93, 'Guam', 'Hagatna', '13.466666666666667', '144.733333', 'GU', 'Australia'),
(94, 'Guatemala', 'Guatemala City', '14.616666666666667', '-90.516667', 'GT', 'Central America'),
(95, 'Guernsey', 'Saint Peter Port', '49.45', '-2.533333', 'GG', 'Europe'),
(96, 'Guinea', 'Conakry', '9.5', '-13.700000', 'GN', 'Africa'),
(97, 'Guinea-Bissau', 'Bissau', '11.85', '-15.583333', 'GW', 'Africa'),
(98, 'Guyana', 'Georgetown', '6.8', '-58.150000', 'GY', 'South America'),
(99, 'Haiti', 'Port-au-Prince', '18.533333333333335', '-72.333333', 'HT', 'North America'),
(100, 'Vatican City', 'Vatican City', '41.9', '12.450000', 'VA', 'Europe'),
(101, 'Honduras', 'Tegucigalpa', '14.1', '-87.216667', 'HN', 'Central America'),
(102, 'Hungary', 'Budapest', '47.5', '19.083333', 'HU', 'Europe'),
(103, 'Iceland', 'Reykjavik', '64.15', '-21.950000', 'IS', 'Europe'),
(104, 'India', 'New Delhi', '28.6', '77.200000', 'IN', 'Asia'),
(105, 'Indonesia', 'Jakarta', '-6.166666666666667', '106.816667', 'ID', 'Asia'),
(106, 'Iran', 'Tehran', '35.7', '51.416667', 'IR', 'Asia'),
(107, 'Iraq', 'Baghdad', '33.333333333333336', '44.400000', 'IQ', 'Asia'),
(108, 'Ireland', 'Dublin', '53.31666666666667', '-6.233333', 'IE', 'Europe'),
(109, 'Isle of Man', 'Douglas', '54.15', '-4.483333', 'IM', 'Europe'),
(110, 'Israel', 'Jerusalem', '31.766666666666666', '35.233333', 'IL', 'Asia'),
(111, 'Italy', 'Rome', '41.9', '12.483333', 'IT', 'Europe'),
(112, 'Jamaica', 'Kingston', '18', '-76.800000', 'JM', 'North America'),
(113, 'Japan', 'Tokyo', '35.68333333333333', '139.750000', 'JP', 'Asia'),
(114, 'Jersey', 'Saint Helier', '49.18333333333333', '-2.100000', 'JE', 'Europe'),
(115, 'Jordan', 'Amman', '31.95', '35.933333', 'JO', 'Asia'),
(116, 'Kazakhstan', 'Astana', '51.166666666666664', '71.416667', 'KZ', 'Asia'),
(117, 'Kenya', 'Nairobi', '-1.2833333333333332', '36.816667', 'KE', 'Africa'),
(118, 'Kiribati', 'Tarawa', '-0.8833333333333333', '169.533333', 'KI', 'Australia'),
(119, 'North Korea', 'Pyongyang', '39.016666666666666', '125.750000', 'KP', 'Asia'),
(120, 'South Korea', 'Seoul', '37.55', '126.983333', 'KR', 'Asia'),
(121, 'Kosovo', 'Pristina', '42.666666666666664', '21.166667', 'KO', 'Europe'),
(122, 'Kuwait', 'Kuwait City', '29.366666666666667', '47.966667', 'KW', 'Asia'),
(123, 'Kyrgyzstan', 'Bishkek', '42.86666666666667', '74.600000', 'KG', 'Asia'),
(124, 'Laos', 'Vientiane', '17.966666666666665', '102.600000', 'LA', 'Asia'),
(125, 'Latvia', 'Riga', '56.95', '24.100000', 'LV', 'Europe'),
(126, 'Lebanon', 'Beirut', '33.86666666666667', '35.500000', 'LB', 'Asia'),
(127, 'Lesotho', 'Maseru', '-29.316666666666666', '27.483333', 'LS', 'Africa'),
(128, 'Liberia', 'Monrovia', '6.3', '-10.800000', 'LR', 'Africa'),
(129, 'Libya', 'Tripoli', '32.88333333333333', '13.166667', 'LY', 'Africa'),
(130, 'Liechtenstein', 'Vaduz', '47.13333333333333', '9.516667', 'LI', 'Europe'),
(131, 'Lithuania', 'Vilnius', '54.68333333333333', '25.316667', 'LT', 'Europe'),
(132, 'Luxembourg', 'Luxembourg', '49.6', '6.116667', 'LU', 'Europe'),
(133, 'Macedonia', 'Skopje', '42', '21.433333', 'MK', 'Europe'),
(134, 'Madagascar', 'Antananarivo', '-18.916666666666668', '47.516667', 'MG', 'Africa'),
(135, 'Malawi', 'Lilongwe', '-13.966666666666667', '33.783333', 'MW', 'Africa'),
(136, 'Malaysia', 'Kuala Lumpur', '3.1666666666666665', '101.700000', 'MY', 'Asia'),
(137, 'Maldives', 'Male', '4.166666666666667', '73.500000', 'MV', 'Asia'),
(138, 'Mali', 'Bamako', '12.65', '-8.000000', 'ML', 'Africa'),
(139, 'Malta', 'Valletta', '35.88333333333333', '14.500000', 'MT', 'Europe'),
(140, 'Marshall Islands', 'Majuro', '7.1', '171.383333', 'MH', 'Australia'),
(141, 'Mauritania', 'Nouakchott', '18.066666666666666', '-15.966667', 'MR', 'Africa'),
(142, 'Mauritius', 'Port Louis', '-20.15', '57.483333', 'MU', 'Africa'),
(143, 'Mexico', 'Mexico City', '19.433333333333334', '-99.133333', 'MX', 'Central America'),
(144, 'Federated States of Micronesia', 'Palikir', '6.916666666666667', '158.150000', 'FM', 'Australia'),
(145, 'Moldova', 'Chisinau', '47', '28.850000', 'MD', 'Europe'),
(146, 'Monaco', 'Monaco', '43.733333333333334', '7.416667', 'MC', 'Europe'),
(147, 'Mongolia', 'Ulaanbaatar', '47.916666666666664', '106.916667', 'MN', 'Asia'),
(148, 'Montenegro', 'Podgorica', '42.43333333333333', '19.266667', 'ME', 'Europe'),
(149, 'Montserrat', 'Plymouth', '16.7', '-62.216667', 'MS', 'North America'),
(150, 'Morocco', 'Rabat', '34.016666666666666', '-6.816667', 'MA', 'Africa'),
(151, 'Mozambique', 'Maputo', '-25.95', '32.583333', 'MZ', 'Africa'),
(152, 'Namibia', 'Windhoek', '-22.566666666666666', '17.083333', 'NA', 'Africa'),
(153, 'Nepal', 'Kathmandu', '27.716666666666665', '85.316667', 'NP', 'Asia'),
(154, 'Netherlands', 'Amsterdam', '52.35', '4.916667', 'NL', 'Europe'),
(155, 'New Caledonia', 'Noumea', '-22.266666666666666', '166.450000', 'NC', 'Australia'),
(156, 'New Zealand', 'Wellington', '-41.3', '174.783333', 'NZ', 'Australia'),
(157, 'Nicaragua', 'Managua', '12.133333333333333', '-86.250000', 'NI', 'Central America'),
(158, 'Niger', 'Niamey', '13.516666666666667', '2.116667', 'NE', 'Africa'),
(159, 'Nigeria', 'Abuja', '9.083333333333334', '7.533333', 'NG', 'Africa'),
(160, 'Niue', 'Alofi', '-19.016666666666666', '-169.916667', 'NU', 'Australia'),
(161, 'Norfolk Island', 'Kingston', '-29.05', '167.966667', 'NF', 'Australia'),
(162, 'Northern Mariana Islands', 'Saipan', '15.2', '145.750000', 'MP', 'Australia'),
(163, 'Norway', 'Oslo', '59.916666666666664', '10.750000', 'NO', 'Europe'),
(164, 'Oman', 'Muscat', '23.616666666666667', '58.583333', 'OM', 'Asia'),
(165, 'Pakistan', 'Islamabad', '33.68333333333333', '73.050000', 'PK', 'Asia'),
(166, 'Palau', 'Melekeok', '7.483333333333333', '134.633333', 'PW', 'Australia'),
(167, 'Panama', 'Panama City', '8.966666666666667', '-79.533333', 'PA', 'Central America'),
(168, 'Papua New Guinea', 'Port Moresby', '-9.45', '147.183333', 'PG', 'Australia'),
(169, 'Paraguay', 'Asuncion', '-25.266666666666666', '-57.666667', 'PY', 'South America'),
(170, 'Peru', 'Lima', '-12.05', '-77.050000', 'PE', 'South America'),
(171, 'Philippines', 'Manila', '14.6', '120.966667', 'PH', 'Asia'),
(172, 'Pitcairn Islands', 'Adamstown', '-25.066666666666666', '-130.083333', 'PN', 'Australia'),
(173, 'Poland', 'Warsaw', '52.25', '21.000000', 'PL', 'Europe'),
(174, 'Portugal', 'Lisbon', '38.71666666666667', '-9.133333', 'PT', 'Europe'),
(175, 'Puerto Rico', 'San Juan', '18.466666666666665', '-66.116667', 'PR', 'North America'),
(176, 'Qatar', 'Doha', '25.283333333333335', '51.533333', 'QA', 'Asia'),
(177, 'Romania', 'Bucharest', '44.43333333333333', '26.100000', 'RO', 'Europe'),
(178, 'Russia', 'Moscow', '55.75', '37.600000', 'RU', 'Europe'),
(179, 'Rwanda', 'Kigali', '-1.95', '30.050000', 'RW', 'Africa'),
(180, 'Saint Barthelemy', 'Gustavia', '17.883333333333333', '-62.850000', 'BL', 'North America'),
(181, 'Saint Helena', 'Jamestown', '-15.933333333333334', '-5.716667', 'SH', 'Africa'),
(182, 'Saint Kitts and Nevis', 'Basseterre', '17.3', '-62.716667', 'KN', 'North America'),
(183, 'Saint Lucia', 'Castries', '14', '-61.000000', 'LC', 'North America'),
(184, 'Saint Pierre and Miquelon', 'Saint-Pierre', '46.766666666666666', '-56.183333', 'PM', 'Central America'),
(185, 'Saint Vincent and the Grenadines', 'Kingstown', '13.133333333333333', '-61.216667', 'VC', 'Central America'),
(186, 'Samoa', 'Apia', '-13.816666666666666', '-171.766667', 'WS', 'Australia'),
(187, 'San Marino', 'San Marino', '43.93333333333333', '12.416667', 'SM', 'Europe'),
(188, 'Sao Tome and Principe', 'Sao Tome', '0.3333333333333333', '6.733333', 'ST', 'Africa'),
(189, 'Saudi Arabia', 'Riyadh', '24.65', '46.700000', 'SA', 'Asia'),
(190, 'Senegal', 'Dakar', '14.733333333333333', '-17.633333', 'SN', 'Africa'),
(191, 'Serbia', 'Belgrade', '44.833333333333336', '20.500000', 'RS', 'Europe'),
(192, 'Seychelles', 'Victoria', '-4.616666666666667', '55.450000', 'SC', 'Africa'),
(193, 'Sierra Leone', 'Freetown', '8.483333333333333', '-13.233333', 'SL', 'Africa'),
(194, 'Singapore', 'Singapore', '1.2833333333333332', '103.850000', 'SG', 'Asia'),
(195, 'Sint Maarten', 'Philipsburg', '18.016666666666666', '-63.033333', 'SX', 'North America'),
(196, 'Slovakia', 'Bratislava', '48.15', '17.116667', 'SK', 'Europe'),
(197, 'Slovenia', 'Ljubljana', '46.05', '14.516667', 'SI', 'Europe'),
(198, 'Solomon Islands', 'Honiara', '-9.433333333333334', '159.950000', 'SB', 'Australia'),
(199, 'Somalia', 'Mogadishu', '2.066666666666667', '45.333333', 'SO', 'Africa'),
(200, 'South Africa', 'Pretoria', '-25.7', '28.216667', 'ZA', 'Africa'),
(201, 'South Sudan', 'Juba', '4.85', '31.616667', 'SS', 'Africa'),
(202, 'Spain', 'Madrid', '40.4', '-3.683333', 'ES', 'Europe'),
(203, 'Sri Lanka', 'Colombo', '6.916666666666667', '79.833333', 'LK', 'Asia'),
(204, 'Sudan', 'Khartoum', '15.6', '32.533333', 'SD', 'Africa'),
(205, 'Suriname', 'Paramaribo', '5.833333333333333', '-55.166667', 'SR', 'South America'),
(206, 'Svalbard', 'Longyearbyen', '78.21666666666667', '15.633333', 'SJ', 'Europe'),
(207, 'Swaziland', 'Mbabane', '-26.316666666666666', '31.133333', 'SZ', 'Africa'),
(208, 'Sweden', 'Stockholm', '59.333333333333336', '18.050000', 'SE', 'Europe'),
(209, 'Switzerland', 'Bern', '46.916666666666664', '7.466667', 'CH', 'Europe'),
(210, 'Syria', 'Damascus', '33.5', '36.300000', 'SY', 'Asia'),
(211, 'Taiwan', 'Taipei', '25.033333333333335', '121.516667', 'TW', 'Asia'),
(212, 'Tajikistan', 'Dushanbe', '38.55', '68.766667', 'TJ', 'Asia'),
(213, 'Tanzania', 'Dar es Salaam', '-6.8', '39.283333', 'TZ', 'Africa'),
(214, 'Thailand', 'Bangkok', '13.75', '100.516667', 'TH', 'Asia'),
(215, 'Timor-Leste', 'Dili', '-8.583333333333334', '125.600000', 'TL', 'Asia'),
(216, 'Togo', 'Lome', '6.116666666666666', '1.216667', 'TG', 'Africa'),
(217, 'Tonga', 'Nuku\'alofa', '-21.133333333333333', '-175.200000', 'TO', 'Australia'),
(218, 'Trinidad and Tobago', 'Port of Spain', '10.65', '-61.516667', 'TT', 'North America'),
(219, 'Tunisia', 'Tunis', '36.8', '10.183333', 'TN', 'Africa'),
(220, 'Turkey', 'Ankara', '39.93333333333333', '32.866667', 'TR', 'Europe'),
(221, 'Turkmenistan', 'Ashgabat', '37.95', '58.383333', 'TM', 'Asia'),
(222, 'Turks and Caicos Islands', 'Grand Turk', '21.466666666666665', '-71.133333', 'TC', 'North America'),
(223, 'Tuvalu', 'Funafuti', '-8.516666666666667', '179.216667', 'TV', 'Australia'),
(224, 'Uganda', 'Kampala', '0.31666666666666665', '32.550000', 'UG', 'Africa'),
(225, 'Ukraine', 'Kyiv', '50.43333333333333', '30.516667', 'UA', 'Europe'),
(226, 'United Arab Emirates', 'Abu Dhabi', '24.466666666666665', '54.366667', 'AE', 'Asia'),
(227, 'United Kingdom', 'London', '51.5', '-0.083333', 'GB', 'Europe'),
(228, 'United States', 'Washington', ' D.C.', '38.883333', 'US', 'South America'),
(229, 'Uruguay', 'Montevideo', '-34.85', '-56.166667', 'UY', 'South America'),
(230, 'Uzbekistan', 'Tashkent', '41.31666666666667', '69.250000', 'UZ', 'Asia'),
(231, 'Vanuatu', 'Port-Vila', '-17.733333333333334', '168.316667', 'VU', 'Australia'),
(232, 'Venezuela', 'Caracas', '10.483333333333333', '-66.866667', 'VE', 'South America'),
(233, 'Vietnam', 'Hanoi', '21.033333333333335', '105.850000', 'VN', 'Asia'),
(234, 'US Virgin Islands', 'Charlotte Amalie', '18.35', '-64.933333', 'VI', 'North America'),
(235, 'Wallis and Futuna', 'Mata-Utu', '-13.95', '-171.933333', 'WF', 'Australia'),
(236, 'Yemen', 'Sanaa', '15.35', '44.200000', 'YE', 'Asia'),
(237, 'Zambia', 'Lusaka', '-15.416666666666666', '28.283333', 'ZM', 'Africa'),
(238, 'Zimbabwe', 'Harare', '-17.816666666666666', '31.033333', 'ZW', 'Africa'),
(239, 'US Minor Outlying Islands', 'Washington', ' D.C.', '38.883333', 'UM', ''),
(240, 'Antarctica', 'N/A', '0', '0.000000', 'AQ', 'Antarctica'),
(241, 'Northern Cyprus', 'North Nicosia', '35.183333', '33.366667', 'TRNC', 'Europe'),
(242, 'Hong Kong', 'N/A', '0', '0.000000', 'HK', 'Asia'),
(243, 'Heard Island and McDonald Islands', 'N/A', '0', '0.000000', 'HM', 'Antarctica'),
(244, 'British Indian Ocean Territory', 'Diego Garcia', '-7.3', '72.400000', 'IO', 'Africa'),
(245, 'Macau', 'N/A', '0', '0.000000', 'MO', 'Asia');

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_page`
--

CREATE TABLE `kryptonit3_counter_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kryptonit3_counter_page`
--

INSERT INTO `kryptonit3_counter_page` (`id`, `page`) VALUES
(3, '02507f50-b613-5269-a783-6393890702d1'),
(2, '05d7328e-5b63-5e52-bbcb-6fb0d96ea181'),
(1, '4593e822-385a-510c-8c18-68bad2fe2719'),
(5, '83d2bf80-e87f-5262-a71e-7bdb31a971bb'),
(4, '96743880-bfa9-5c7c-9752-9c4068361cbb'),
(8, 'bbaada07-9aa7-51f5-99e3-7da17a6c8760'),
(7, 'home'),
(6, 'post');

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_page_visitor`
--

CREATE TABLE `kryptonit3_counter_page_visitor` (
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `visitor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kryptonit3_counter_page_visitor`
--

INSERT INTO `kryptonit3_counter_page_visitor` (`page_id`, `visitor_id`, `created_at`) VALUES
(1, 1, '2017-08-28 22:59:52'),
(2, 1, '2017-08-28 22:59:58'),
(3, 1, '2017-08-28 21:52:14'),
(4, 1, '2017-08-28 23:00:06'),
(2, 2, '2017-08-29 07:46:24'),
(3, 2, '2017-08-28 01:04:09'),
(1, 2, '2017-08-29 08:10:11'),
(5, 1, '2017-08-29 22:48:47'),
(5, 2, '2017-08-29 08:10:48'),
(4, 2, '2017-08-28 01:04:09'),
(5, 3, '2017-08-29 08:16:39'),
(1, 3, '2017-08-28 00:39:02'),
(2, 3, '2017-08-28 00:46:21'),
(7, 1, '2017-08-28 01:02:07'),
(7, 2, '2017-08-28 00:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_visitor`
--

CREATE TABLE `kryptonit3_counter_visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kryptonit3_counter_visitor`
--

INSERT INTO `kryptonit3_counter_visitor` (`id`, `visitor`) VALUES
(1, '39cdb15e813c7a4a9298f6b136f74de56732ed47436f8e08a53d494b9e213b05'),
(2, '650cf24e58a158540cd8390f569dd15b6fec0b2a4ecdcaa8fb0c0cd4f5623f68'),
(3, '73d652f0d2a5d57fcc728b6910ba9e7eff0ee4e2f1db90aadec1fd193473353f');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `like` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `like`, `created_at`, `updated_at`) VALUES
(155, 2, 1, 1, '2017-08-22 19:18:24', '2017-08-22 19:18:24'),
(156, 2, 20, 1, '2017-08-22 19:18:52', '2017-08-22 19:19:01'),
(161, 3, 1, 1, '2017-08-22 20:16:14', '2017-08-22 20:16:14'),
(162, 3, 20, 1, '2017-08-22 20:16:20', '2017-08-22 20:16:35'),
(165, 1, 1, 0, '2017-08-24 23:06:17', '2017-08-24 23:06:17'),
(167, 1, 22, 1, '2017-08-26 04:55:23', '2017-08-26 04:55:23'),
(171, 1, 21, 1, '2017-08-28 00:12:00', '2017-08-28 00:15:38'),
(173, 1, 20, 1, '2017-08-28 00:15:23', '2017-08-28 00:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `thread_id`, `user_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'asdasdasd', '2017-08-26 18:08:37', '2017-08-26 18:08:37', NULL),
(2, 2, 1, 'sadasd', '2017-08-26 18:11:10', '2017-08-26 18:11:10', NULL),
(3, 3, 1, 'zcxzczxczxc', '2017-08-26 18:16:31', '2017-08-26 18:16:31', NULL),
(4, 4, 1, 'sdsdsd', '2017-08-26 18:22:45', '2017-08-26 18:22:45', NULL),
(5, 5, 1, 'sdsdsd', '2017-08-26 18:23:08', '2017-08-26 18:23:08', NULL),
(6, 1, 2, 'asdsdasd', '2017-08-26 18:42:22', '2017-08-26 18:42:22', NULL),
(7, 1, 1, 'ssadasdasdasd', '2017-08-26 19:06:14', '2017-08-26 19:06:14', NULL),
(8, 1, 2, 'გამარჯობა, ეს არის ტესტ შეტყობინება', '2017-08-26 19:22:46', '2017-08-26 19:22:46', NULL),
(9, 1, 1, '<?php\r\nRoute::group([\'prefix\' => \'messages\'], function () {\r\n    Route::get(\'/\', [\'as\' => \'messages\', \'uses\' => \'MessagesController@index\']);\r\n    Route::get(\'create\', [\'as\' => \'messages.create\', \'uses\' => \'MessagesController@create\']);\r\n    Route::post(\'/\', [\'as\' => \'messages.store\', \'uses\' => \'MessagesController@store\']);\r\n    Route::get(\'{id}\', [\'as\' => \'messages.show\', \'uses\' => \'MessagesController@show\']);\r\n    Route::put(\'{id}\', [\'as\' => \'messages.update\', \'uses\' => \'MessagesController@update\']);\r\n});', '2017-08-26 19:25:49', '2017-08-26 19:25:49', NULL),
(10, 6, 2, 'ეს არის ტესტ შეტყობინება', '2017-08-26 19:35:40', '2017-08-26 19:35:40', NULL),
(11, 2, 2, 'class=\"media-heading\"', '2017-08-26 19:59:30', '2017-08-26 19:59:30', NULL),
(12, 2, 1, 'dddddddddd', '2017-08-28 04:04:04', '2017-08-28 04:04:04', NULL),
(13, 7, 1, '<h1><strong>ცხვცვხცვხცვ</strong></h1>', '2017-08-29 08:15:59', '2017-08-29 08:15:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_08_05_010744_create_posts_table', 1),
(2, '2017_08_08_010110_create_roles_table', 2),
(3, '2017_08_08_141432_create_permission_tables', 3),
(5, '2016_09_12_99999_create_visitlogs_table', 4),
(7, '2017_08_18_142623_create_post_hearts_table', 5),
(8, '2017_08_18_144012_create_post_likes_table', 5),
(10, '2017_08_18_144114_create_likeables_table', 6),
(11, '2014_02_09_225721_create_visitor_registry', 7),
(13, '2017_08_22_013827_create_likes_table', 8),
(14, '2017_08_22_220224_create_settings_table', 9),
(15, '2014_10_28_175635_create_threads_table', 10),
(16, '2014_10_28_175710_create_messages_table', 10),
(17, '2014_10_28_180224_create_participants_table', 10),
(18, '2014_11_03_154831_add_soft_deletes_to_participants_table', 10),
(19, '2014_12_04_124531_add_softdeletes_to_threads_table', 10),
(20, '2017_03_30_152742_add_soft_deletes_to_messages_table', 10),
(21, '2015_06_21_181359_create_kryptonit3_counter_page_table', 11),
(22, '2015_06_21_193003_create_kryptonit3_counter_visitor_table', 11),
(23, '2015_06_21_193059_create_kryptonit3_counter_page_visitor_table', 11),
(24, '2017_08_28_211622_create_categories_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_id`, `model_type`) VALUES
(8, 1, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(1, 2, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `thread_id`, `user_id`, `last_read`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2017-08-27 20:57:44', '2017-08-26 18:08:38', '2017-08-27 20:57:44', NULL),
(2, 1, 3, NULL, '2017-08-26 18:08:38', '2017-08-26 18:08:38', NULL),
(3, 2, 1, '2017-08-28 04:04:13', '2017-08-26 18:11:10', '2017-08-28 04:04:13', NULL),
(4, 2, 2, '2017-08-26 20:51:22', '2017-08-26 18:11:10', '2017-08-26 20:51:22', NULL),
(5, 2, 3, '2017-08-29 08:32:30', '2017-08-26 18:11:10', '2017-08-29 08:32:30', NULL),
(6, 3, 1, '2017-08-26 18:16:31', '2017-08-26 18:16:31', '2017-08-26 18:16:31', NULL),
(7, 3, 2, '2017-08-26 19:10:53', '2017-08-26 18:16:31', '2017-08-26 19:10:53', NULL),
(8, 4, 1, '2017-08-26 18:22:46', '2017-08-26 18:22:46', '2017-08-26 18:22:46', NULL),
(9, 4, 2, '2017-08-26 18:50:15', '2017-08-26 18:22:46', '2017-08-26 18:50:15', NULL),
(10, 5, 1, '2017-08-26 18:42:43', '2017-08-26 18:23:08', '2017-08-26 18:42:43', NULL),
(11, 1, 2, '2017-08-26 19:28:09', '2017-08-26 18:42:22', '2017-08-26 19:28:09', NULL),
(12, 6, 2, '2017-08-26 19:35:40', '2017-08-26 19:35:40', '2017-08-26 19:35:40', NULL),
(13, 6, 1, '2017-08-29 07:45:07', '2017-08-26 19:35:40', '2017-08-29 07:45:07', NULL),
(14, 7, 1, '2017-08-29 08:15:59', '2017-08-29 08:15:59', '2017-08-29 08:15:59', NULL),
(15, 7, 2, '2017-08-29 08:21:12', '2017-08-29 08:15:59', '2017-08-29 08:21:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'write-posts', 'web', '2017-08-08 12:37:31', '2017-08-08 22:53:30'),
(2, 'access_backend', 'web', '2017-08-08 12:41:41', '2017-08-08 12:41:41'),
(7, 'countries', 'web', '2017-08-08 16:17:56', '2017-08-08 16:17:56'),
(8, 'Administer roles & permissions', 'web', '2017-08-08 16:27:42', '2017-08-08 16:27:42'),
(9, 'post edit', 'web', '2017-08-12 22:06:45', '2017-08-12 22:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `meta`, `body`, `category_id`, `image`, `author_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ტესტ პოსტი', 'ტესტპოსტი', '<p>ეს არის ტესტ პოსტი</p>', '1', 'angelina-jolie-vf-december-2014-ss02.jpg', '1', 1, NULL, '2017-08-04 04:10:00', '2017-08-18 03:34:06'),
(20, 'ტესტ სათაური 2', 'test', '<p>sssssssssssddddddddddddd</p>', '2', '546454.jpg', '1', 0, NULL, '2017-08-18 03:54:24', '2017-08-18 03:54:24'),
(21, 'ტესტ სათაური 3', 'ssssssss', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat volutpat libero, at condimentum ipsum congue at. Etiam et enim ultricies, condimentum ex efficitur, tristique ligula. Sed in est sed risus ultrices dictum id id urna. Donec vestibulum massa vitae egestas laoreet. Vestibulum a hendrerit arcu. Quisque a dolor urna. Nulla ac arcu congue, faucibus odio quis, pharetra felis. In quam libero, laoreet sed accumsan in, aliquet at dolor. Aenean suscipit faucibus arcu faucibus sagittis. Vivamus vulputate odio ac massa efficitur bibendum. Ut tincidunt ex lacus, et mattis mauris rutrum id.</p>\r\n\r\n<p>Phasellus scelerisque turpis ac sem ultricies, eu luctus nulla hendrerit. Sed at enim sit amet erat imperdiet gravida. Suspendisse id tortor eu nunc euismod elementum. Nullam vel ex hendrerit, suscipit augue vel, molestie nibh. Integer a mollis elit. Curabitur euismod rutrum pharetra. Curabitur nibh ante, tincidunt eget purus et, commodo fringilla lectus. Cras ac pellentesque urna. Phasellus sollicitudin porttitor facilisis. Nullam semper elementum dictum. Nulla sem magna, tincidunt ut metus vel, scelerisque facilisis magna. Cras eget sapien faucibus, mattis massa eu, bibendum quam. Aenean eget ipsum scelerisque, rutrum nunc quis, tempor lectus. Integer augue sem, mollis a diam pharetra, tristique mattis magna.</p>\r\n\r\n<p>Cras iaculis, diam ut auctor pellentesque, tortor velit mollis mauris, quis suscipit felis mauris a orci. Fusce ac elementum magna. Fusce semper faucibus venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque fermentum mi non dolor blandit consequat. Vestibulum eget odio ut mi scelerisque elementum. Sed porta turpis ac nibh malesuada, in venenatis tortor bibendum. Aenean sodales vehicula mauris, ut pulvinar dolor porttitor ac. Suspendisse dictum congue quam, vel placerat augue aliquam ac. Maecenas felis libero, ornare eu ultricies vel, porttitor vel leo.</p>\r\n\r\n<p>Cras pharetra est vel ex dictum bibendum. Vestibulum semper lorem in nibh ultricies suscipit. Donec scelerisque rhoncus massa at tempus. Suspendisse vitae accumsan odio. Aliquam eu eleifend odio, eget volutpat est. Nulla quis tortor suscipit est tempus lobortis ac ut enim. Phasellus sed vehicula velit. Maecenas a est eu lorem sodales tincidunt. Morbi a lectus nec ex tincidunt congue ut sit amet mauris.</p>\r\n\r\n<p>Fusce sollicitudin, nisi in dictum scelerisque, felis nisl rutrum diam, in finibus eros ante in quam. Cras tempus ipsum sem, et luctus mauris venenatis quis. Morbi sit amet lorem vitae ante eleifend sagittis. Ut molestie ex vitae est viverra, sit amet auctor erat posuere. Integer vel felis sit amet velit consectetur congue. Integer volutpat erat a imperdiet semper. Proin cursus faucibus lectus vitae finibus. Ut id mattis eros, ut venenatis lacus. In bibendum feugiat sem vel tincidunt. Donec luctus tincidunt eros at ultrices. Proin elementum ac lectus tincidunt varius.</p>', '3', 'metal-texture-7.jpg', '1', 0, NULL, '2017-08-25 18:50:05', '2017-08-25 18:50:05'),
(22, 'სატესტო ბლოგპოსტი', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat volutpat libero, at condimentum ipsum congue at. Etiam et enim ultricies, condimentum ex efficitur, tristique ligula. Sed in est sed risus ultrices dictum id id urna. Donec vestibulum massa vitae egestas laoreet. Vestibulum a hendrerit arcu. Quisque a dolor urna. Nulla ac arcu congue, faucibus odio quis, pharetra felis. In quam libero, laoreet sed accumsan in, aliquet at dolor. Aenean suscipit faucibus arcu faucibus sagittis. Vivamus vulputate odio ac massa efficitur bibendum. Ut tincidunt ex lacus, et mattis mauris rutrum id.</p>\r\n\r\n<p>Phasellus scelerisque turpis ac sem ultricies, eu luctus nulla hendrerit. Sed at enim sit amet erat imperdiet gravida. Suspendisse id tortor eu nunc euismod elementum. Nullam vel ex hendrerit, suscipit augue vel, molestie nibh. Integer a mollis elit. Curabitur euismod rutrum pharetra. Curabitur nibh ante, tincidunt eget purus et, commodo fringilla lectus. Cras ac pellentesque urna. Phasellus sollicitudin porttitor facilisis. Nullam semper elementum dictum. Nulla sem magna, tincidunt ut metus vel, scelerisque facilisis magna. Cras eget sapien faucibus, mattis massa eu, bibendum quam. Aenean eget ipsum scelerisque, rutrum nunc quis, tempor lectus. Integer augue sem, mollis a diam pharetra, tristique mattis magna.</p>\r\n\r\n<pre>\r\nCras iaculis, diam ut auctor pellentesque, tortor velit mollis mauris, quis suscipit felis mauris a orci. Fusce ac elementum magna. Fusce semper faucibus venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque fermentum mi non dolor blandit consequat. Vestibulum eget odio ut mi scelerisque elementum. Sed porta turpis ac nibh malesuada, in venenatis tortor bibendum. Aenean sodales vehicula mauris, ut pulvinar dolor porttitor ac. Suspendisse dictum congue quam, vel placerat augue aliquam ac. Maecenas felis libero, ornare eu ultricies vel, porttitor vel leo.</pre>\r\n\r\n<p>Cras pharetra est vel ex dictum bibendum. Vestibulum semper lorem in nibh ultricies suscipit. Donec scelerisque rhoncus massa at tempus. Suspendisse vitae accumsan odio. Aliquam eu eleifend odio, eget volutpat est. Nulla quis tortor suscipit est tempus lobortis ac ut enim. Phasellus sed vehicula velit. Maecenas a est eu lorem sodales tincidunt. Morbi a lectus nec ex tincidunt congue ut sit amet mauris.</p>\r\n\r\n<p>Fusce sollicitudin, nisi in dictum scelerisque, felis nisl rutrum diam, in finibus eros ante in quam. Cras tempus ipsum sem, et luctus mauris venenatis quis. Morbi sit amet lorem vitae ante eleifend sagittis. Ut molestie ex vitae est viverra, sit amet auctor erat posuere. Integer vel felis sit amet velit consectetur congue. Integer volutpat erat a imperdiet semper. Proin cursus faucibus lectus vitae finibus. Ut id mattis eros, ut venenatis lacus. In bibendum feugiat sem vel tincidunt. Donec luctus tincidunt eros at ultrices. Proin elementum ac lectus tincidunt varius.</p>', '3', 'brick-background.jpg', '1', 0, NULL, '2017-08-25 19:26:41', '2017-08-25 19:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2017-08-08 12:37:17', '2017-08-08 12:37:17'),
(2, 'moderator', 'web', '2017-08-08 12:37:23', '2017-08-08 12:37:23'),
(3, 'user', 'web', '2017-08-08 12:37:27', '2017-08-08 12:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 1),
(7, 1),
(8, 1),
(9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bg-purple-400',
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.png',
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_api_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_api_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `meta`, `description`, `color`, `logo`, `user_id`, `language`, `facebook_api_key`, `facebook_api_secret`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf', 'sdfsdf', 'dfsdf', 'bg-indigo-400', 'logo_light.png', '1', 'georgian', 'sdf', 'sdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asdasd', '2017-08-26 18:08:37', '2017-08-26 19:25:49', NULL),
(2, 'asdasd', '2017-08-26 18:11:10', '2017-08-28 04:04:04', NULL),
(3, 'cxzcx', '2017-08-26 18:16:31', '2017-08-26 18:16:31', NULL),
(4, 'sdsd', '2017-08-26 18:22:45', '2017-08-26 18:22:46', NULL),
(5, 'sdsd', '2017-08-26 18:23:08', '2017-08-26 18:23:08', NULL),
(6, 'გამარჯობა', '2017-08-26 19:35:40', '2017-08-26 19:35:40', NULL),
(7, 'გიორგი მაღრაძე', '2017-08-29 08:15:59', '2017-08-29 08:15:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `avatar`, `email`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'გიორგი', 'მაღრაძე', '1503174669.jpg', 'giomagra@gmail.com', '$2y$10$I/6xWu2wUsA0cjML0cqtPOQXpeWXPQeNTktMhd7PGinse..u/3v32', 'orX1ZrNh4RyM3gHKGGWnsy5RnglUxOaiujnDhvl9tIn5ASJO9myMvvH7UQEw', '1', '2017-08-04 10:10:56', '2017-08-19 18:31:10'),
(2, 'ლუკა', 'რაზიკაშვილი', '1502742287.png', 'giorgitmogveli@gmail.com', '$2y$10$I/6xWu2wUsA0cjML0cqtPOQXpeWXPQeNTktMhd7PGinse..u/3v32', 'esoQUIdi7vCyefewqQ5b8qj42B8MsBeJG77ksgmtlMAM22xJryYXBB9tIGQ0', '2', '2017-08-07 22:58:46', '2017-08-14 18:24:47'),
(3, 'აკაკი', NULL, 'default.png', 'haze90@mail.ru', '$2y$10$2gMZoo5Y3eXgYyaDe5jkWOLmyjahsmI206eWLBOnciVPx83xpuz5C', 'y2MdX01MCdvsPD2gpRnOkH2P8Z99T6rfNTFRMKGyMSaZB122i2qH2L2lyXkX', '3', '2017-08-22 19:23:25', '2017-08-22 19:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_registry`
--

CREATE TABLE `visitor_registry` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clicks` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_capitals`
--
ALTER TABLE `country_capitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kryptonit3_counter_page`
--
ALTER TABLE `kryptonit3_counter_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kryptonit3_counter_page_page_unique` (`page`);

--
-- Indexes for table `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD KEY `kryptonit3_counter_page_visitor_page_id_index` (`page_id`),
  ADD KEY `kryptonit3_counter_page_visitor_visitor_id_index` (`visitor_id`);

--
-- Indexes for table `kryptonit3_counter_visitor`
--
ALTER TABLE `kryptonit3_counter_visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kryptonit3_counter_visitor_visitor_unique` (`visitor`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_registry`
--
ALTER TABLE `visitor_registry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `country_capitals`
--
ALTER TABLE `country_capitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `kryptonit3_counter_page`
--
ALTER TABLE `kryptonit3_counter_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kryptonit3_counter_visitor`
--
ALTER TABLE `kryptonit3_counter_visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `visitor_registry`
--
ALTER TABLE `visitor_registry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `kryptonit3_counter_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_visitor_id_foreign` FOREIGN KEY (`visitor_id`) REFERENCES `kryptonit3_counter_visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
