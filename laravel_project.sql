-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 01:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardatas`
--

CREATE TABLE `cardatas` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `F_Img` varchar(191) NOT NULL,
  `B_Img` varchar(191) DEFAULT NULL,
  `S_Img` varchar(191) DEFAULT NULL,
  `Car_Name` varchar(191) NOT NULL,
  `Brand_Name` varchar(191) NOT NULL,
  `Price` int(11) NOT NULL,
  `Price_Words` varchar(191) NOT NULL,
  `Engine_Type` varchar(191) NOT NULL,
  `Top_Speed` varchar(191) NOT NULL,
  `Vehicle_Type` varchar(191) NOT NULL,
  `Doors` int(11) NOT NULL,
  `Seating_Capacity` int(11) NOT NULL,
  `Manufacturing_Year` int(11) NOT NULL,
  `Fuel_Type` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardatas`
--

INSERT INTO `cardatas` (`Id`, `F_Img`, `B_Img`, `S_Img`, `Car_Name`, `Brand_Name`, `Price`, `Price_Words`, `Engine_Type`, `Top_Speed`, `Vehicle_Type`, `Doors`, `Seating_Capacity`, `Manufacturing_Year`, `Fuel_Type`, `created_at`, `updated_at`) VALUES
(1, 'astonmartin_db12_front.jpg', 'astonmartin_db12_back.jpg', 'astonmartin_db12_side.jpg', 'aston Martin DB12', 'Aston Martin', 46000000, '4.60', 'V8', '325', 'Coupe', 2, 2, 2023, 'Petrol', NULL, NULL),
(2, 'LaFerrari_front.jpg', 'LaFerrari_back.jpg', 'LaFerrari_side.jpg', 'LaFerrari', 'Ferrari', 70000000, '7.00', 'V12', '352', 'Sports Car', 2, 2, 2006, 'Petrol', NULL, NULL),
(3, 'rolls_royce_phantom_front.jpg', 'rolls_royce_phantom_back.jpg', 'rolls_royce_phantom_side.jpg', 'rolls royce phantom', 'Rolls Royce', 100000000, '10.00', 'V12', '250', 'Luxury Car', 4, 4, 2017, 'Petrol', NULL, NULL),
(4, 'Porsche_911_GT3_RS_front.jpg', 'Porsche_911_GT3_RS_back.jpg', 'Porsche_911_GT3_RS_side.jpg', 'porsche 911 GT3RS', 'Porsche', 45000000, '4.50', 'V8', '296', 'Sports Car', 2, 2, 2020, 'Petrol', NULL, NULL),
(5, 'bmw_m5_front.jpg', 'bmw_m5_back.jpg', 'bmw_m5_side.jpg', 'BMW M5', 'Bmw', 18000000, '1.80', 'V8', '305', 'Sedan', 4, 4, 2015, 'Petrol', NULL, NULL),
(6, 'ford_mustang_gt_front.jpg', 'ford_mustang_gt_back.jpg', 'ford_mustang_gt_side.jpg', 'ford mustang gt', 'Ford', 10000000, '1.00', 'V8', '267', 'Sports Car', 2, 2, 2018, 'Petrol', NULL, NULL),
(7, 'audi_r8_front.jpg', 'audi_r8_back.jpg', 'audi_r8_side.jpg', 'AudiR8', 'Audi', 27500000, '2.75', 'V8', '316', 'Sports Car', 2, 2, 2014, 'Petrol', NULL, NULL),
(8, 'Bentley_Continental_GT_front.jpg', 'Bentley_Continental_GT_back.jpg', 'Bentley_Continental_GT_side.jpg', 'Bentley Continental GT', 'Bentley', 33000000, '3.30', 'W12', '335', 'Coupe', 2, 2, 2024, 'Petrol', NULL, NULL),
(9, 'bugatti-chiron_front.jpg', 'bugatti-chiron_back.jpg', 'bugatti-chiron_side.jpg', 'Bugatti Chiron', 'Bugatti', 200000000, '20.00', 'V12', '490', 'Hyper Car', 2, 2, 2016, 'Petrol', NULL, NULL),
(10, 'bugatti_veyron_front.jpg', 'bugatti_veyron_back.jpg', 'bugatti_veyron_side.jpg', 'Bugatti Veyron', 'Bugatti', 120000000, '12.00', 'W16', '408', 'Sports Car', 2, 2, 2010, 'Petrol', NULL, NULL),
(11, 'BMW_M4_competition.jpg', 'BMW_M4_competition_back.jpg', 'BMW_M4_competition_side.jpg', 'BMW M4 competition', 'Bmw', 14500000, '1.45', 'V8', '250', 'Coupe', 2, 4, 2014, 'Petrol', NULL, NULL),
(12, 'Chevrolet_Corvette_front.jpg', 'Chevrolet_Corvette_back.jpg', 'Chevrolet_Corvette_side.jpg', 'Chevrolet Corvette', 'Chevrolet', 55700000, '5.57', 'V6', '319', 'Sports Car', 2, 2, 2023, 'Petrol', NULL, NULL),
(13, 'ferrari_roma_front.jpg', 'ferrari_roma_back.jpg', 'ferrari_roma_side.jpg', 'Ferrari Roma', 'Ferrari', 37600000, '3.76', 'V8', '350', 'Sports Car', 2, 2, 2020, 'Petrol', NULL, NULL),
(14, 'ferrari_296_front.jpg', 'ferrari_296_back.jpg', 'ferrari_296_side.jpg', 'Ferrari 296', 'Ferrari', 54000000, '5.40', 'V6', '205', 'Sports Car', 2, 2, 2021, 'Petrol', NULL, NULL),
(15, 'bmw_x7_front.jpg', 'bmw_x7_back.jpg', 'bmw_x7_side.jpg', 'BMW X7', 'Bmw', 13000000, '1.30', 'V8', '245', 'Suv', 4, 4, 2023, 'Petrol', NULL, NULL),
(16, 'ford_gt_front.jpg', 'ford_gt_back.jpg', 'ford_gt_side.jpg', 'Ford GT', 'Ford', 90000000, '9.00', 'V8', '348', 'Sports Car', 2, 2, 2005, 'Petrol', NULL, NULL),
(17, 'ford_mustang_shelby_front.jpg', 'ford_mustang_shelby_back.jpg', 'ford_mustang_shelby_side.jpg', 'Ford Mustang Shalby', 'Ford', 10000000, '1.00', 'V6', '290', 'Sports Car', 2, 4, 1970, 'Petrol', NULL, NULL),
(18, 'jaguar_f_type_front.jpg', 'jaguar_f_type_back.jpg', 'jaguar_f_type_side.jpg', 'jaguar f-type', 'Jaguar', 15300000, '1.53', 'V8', '285', 'Sports Car', 2, 2, 2010, 'Petrol', NULL, NULL),
(19, 'voiture_noire_front.jpg', 'voiture_noire_back.jpg', 'voiture_noire_side.jpg', 'Bugatti la Voiture Noire', 'Bugatti', 1696000000, '169.60', 'W16', '420', 'Hyper Car', 2, 2, 2019, 'Petrol', NULL, NULL),
(20, 'Koenigsegg_Jesko_front.jpg', 'Koenigsegg_Jesko_back.jpg', 'Koenigsegg_Jesko_side.jpg', 'koenigsegg Jesko', 'Koenigsegg', 230000000, '23.00', 'V8', '531', 'Hyper Car', 2, 2, 2019, 'Petrol', NULL, NULL),
(22, 'Koenigsegg_Gemera_front.jpg', 'Koenigsegg_Gemera_back.jpg', 'Koenigsegg_Gemera_side.jpg', 'Koenigsegg Gemera', 'Koenigsegg', 130000000, '13.00', 'V8', '400', 'Sports Car', 2, 4, 2023, 'Petrol', NULL, NULL),
(23, 'Koenigsegg_Regera_front.jpg', 'Koenigsegg_Regera_back.jpg', 'Koenigsegg_Regera_side.jpg', 'Koenigsegg Regera', 'Koenigsegg', 170000000, '17.00', 'V8', '404', 'Hyper Car', 2, 2, 2016, 'Petrol', NULL, NULL),
(24, 'Lamborghini_Terzo_front.jpg', 'Lamborghini_Terzo_back.jpg', 'Lamborghini_Terzo_side.jpg', 'Lamborghini Terzo', 'Lamborghini', 40000000, '4.00', 'V8', '300', 'Hyper Car', 2, 2, 2017, 'Petrol', NULL, NULL),
(25, 'Lamborghini_Aventador.jpg', 'Lamborghini_Aventador_back.jpg', 'Lamborghini_Aventador_side.jpg', 'Lamborghini Aventador', 'Lamborghini', 50000000, '5.00', 'V12', '350', 'Sports Car', 2, 2, 2011, 'Petrol', NULL, NULL),
(26, 'Lamborghini_Urus_front.jpg', 'Lamborghini_Urus_back.jpg', 'Lamborghini_Urus_side.jpg', 'Lamborghini Urus', 'Lamborghini', 42000000, '4.20', 'V8', '305', 'Suv', 4, 4, 2017, 'Petrol', NULL, NULL),
(27, 'defender-exterior-front.jpg', 'defender-exterior-back.jpg', 'defender-exterior-side.jpg', 'Land Rover Defender 130', 'Land Rover', 14000000, '1.40', 'V8', '191', 'Suv', 2, 4, 2023, 'Petrol', NULL, NULL),
(28, 'Maserati_MC20_front.jpg', 'Maserati_MC20_back.jpg', 'Maserati_MC20_side.jpg', 'Maserati MC20', 'Maserati', 36500000, '3.65', 'V6', '325', 'Sports Car', 2, 2, 2023, 'Petrol', NULL, NULL),
(29, 'Maybach_S60_front.jpg', 'Maybach_S60_back.jpg', 'Maybach_S60_side.jpg', 'Maybach S60', 'Mercedes', 34000000, '3.40', 'V12', '250', 'Luxury Car', 4, 4, 2020, 'Petrol', NULL, NULL),
(30, 'Mercedes-Benz G-class_front.jpg', 'Mercedes-Benz G-class_back.jpg', 'Mercedes-Benz G-class_side.jpg', 'Mercedes-Benz G-class', 'Mercedes', 25500000, '2.55', 'V8', '220', 'Suv', 4, 4, 2015, 'Petrol', NULL, NULL),
(31, 'Mclaren 720S_front.jpg', 'Mclaren 720S_back.jpg', 'Mclaren 720S_side.jpg', 'Mclaren 720S', 'McLaren', 50000000, '5.00', 'V8', '341', 'Sports Car', 2, 2, 2018, 'Petrol', NULL, NULL),
(32, 'Nissan GTR_front.jpg', 'Nissan GTR_back.jpg', 'Nissan GTR_side.jpg', 'Nissan GTR', 'Nissan', 21500000, '2.51', 'V6', '330', 'Sports Car', 2, 2, 2010, 'Petrol', NULL, NULL),
(33, 'Porsche Taycan_front.jpg', 'Porsche Taycan_back.jpg', 'Porsche Taycan_side.jpg', 'Porsche Taycan', 'Porsche', 20000000, '2.00', 'No', '260', 'Electric Car', 2, 2, 2022, 'Battery', NULL, NULL),
(34, 'Porsche 718 Boxster_front.jpg', 'Porsche 718 Boxster_back.jpg', 'Porsche 718 Boxster_side.jpg', 'Porsche 718 Boxster', 'Porsche', 15200000, '1.52', 'No', '275', 'Sports Car', 2, 2, 2020, 'Petrol', NULL, NULL),
(35, 'Pagani Zonda_front.jpg', 'Pagani Zonda_back.jpg', 'Pagani Zonda_side.jpg', 'Pagani Zonda', 'Pagani', 1200000000, '120.00', 'V12', '355', 'Sports Car', 2, 2, 2019, 'Petrol', NULL, NULL),
(36, 'Rolls-Royce_ghost.jpg', 'Rolls-Royce_ghost_back.jpg', 'Rolls-Royce_ghost_side.jpg', 'Rolls Royce Ghost', 'Rolls Royce', 70000000, '7.00', 'V12', '250', 'Luxury Car', 4, 4, 2020, 'Petrol', NULL, NULL),
(37, 'Volvo X90_front.jpg', 'Volvo X90_back.jpg', 'Volvo X90_side.jpg', 'Volvo X90', 'Volvo', 12000000, '1.20', 'V8', '200', 'Suv', 4, 4, 2005, 'Petrol', NULL, NULL),
(38, 'Rolls Royce Boat Tail.jpg', 'Rolls Royce Boat Tail_back.jpg', 'Rolls Royce Boat Tail_side.jpg', 'Rolls-Royce Boat Tail', 'Rolls Royce', 2000000000, '200', 'V12', '341', 'Luxury Car', 2, 2, 2022, 'Petrol', NULL, NULL),
(39, 'lexus-lc_front.jpg', 'lexus-lc_back.jpg', 'lexus-lc_side.jpg', 'Lexus Lc', 'Lexus', 25000000, '2.50', 'V6', '270', 'Coupe', 2, 2, 2023, 'Petrol', NULL, NULL),
(40, 'ferrari_monza_front.jpg', 'ferrari_monza_back.jpg', 'ferrari_monza_side.jpg', 'Ferrari monza sp1', 'Ferrari', 945000000, '94.50', 'V12', '300', 'Sports Car', 1, 1, 2020, 'Petrol', NULL, NULL),
(41, 'maserati_quattroporte_front.jpg', 'maserati_quattroporte_back.jpg', 'maserati_quattroporte_side.jpg', 'Maserati Quattroporte', 'Maserati', 17800000, '1.75', 'V8', '330', 'Sedan', 4, 4, 2019, 'Petrol', NULL, NULL),
(42, 'rolls-royce-spectre-featured_front.jpg', 'rolls-royce-spectre-featured_back.jpg', 'rolls-royce-spectre-featured_side.jpg', 'rolls royce spectre', 'Rolls Royce', 75000000, '7.50', 'No', '258', 'Luxury Car', 2, 4, 2023, 'Battery', NULL, NULL),
(43, 'bmw_i8_front.jpg', 'bmw_i8_back.jpg', 'bmw_i8_side.jpg', 'Bmw i8', 'Bmw', 26200000, '2.62', 'No', '250', 'Electric Car', 2, 4, 2014, 'Battery', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Car_Name` varchar(191) NOT NULL,
  `Brand_Name` varchar(191) NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `Car_Name`, `Brand_Name`, `Price`, `created_at`, `updated_at`) VALUES
(1, 'Bugatti Chiron', 'Bugatti', 4454455, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expcars`
--

CREATE TABLE `expcars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `F_Img` varchar(191) NOT NULL,
  `B_Img` varchar(191) DEFAULT NULL,
  `S_Img` varchar(191) DEFAULT NULL,
  `Car_Name` varchar(191) NOT NULL,
  `Brand_Name` varchar(191) NOT NULL,
  `Price` int(11) NOT NULL,
  `Engine_Type` varchar(191) NOT NULL,
  `Top_Speed` varchar(191) NOT NULL,
  `Vehicle_Type` varchar(191) NOT NULL,
  `Doors` int(11) NOT NULL,
  `Seating_Capacity` int(11) NOT NULL,
  `Manufacturing_Year` int(11) NOT NULL,
  `Fuel_Type` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expcars`
--

INSERT INTO `expcars` (`id`, `F_Img`, `B_Img`, `S_Img`, `Car_Name`, `Brand_Name`, `Price`, `Engine_Type`, `Top_Speed`, `Vehicle_Type`, `Doors`, `Seating_Capacity`, `Manufacturing_Year`, `Fuel_Type`, `created_at`, `updated_at`) VALUES
(1, 'voiture_noire_front.jpg', 'voiture_noire_back.jpg', 'voiture_noire_side.jpg', 'BUGATTI LA VOITURE NOIRE', 'BUGATTI', 1696000000, 'W16', '420', 'Hyper Car', 2, 2, 2019, 'petrol', NULL, NULL),
(2, 'Rolls Royce Boat Tail.jpg', 'Rolls Royce Boat Tail_back.jpg', 'Rolls Royce Boat Tail_side.jpg', 'ROLLS-ROYCE BOAT TAIL', 'ROLLS ROYCE', 2000000000, 'V12', '341', 'Luxury Car', 2, 4, 2022, 'petrol', NULL, NULL),
(3, 'Pagani Zonda_front.jpg', 'Pagani Zonda_back.jpg', 'Pagani Zonda_side.jpg', 'PAGANI ZONDA', 'PAGANI', 1200000000, 'v12', '355', 'Sports Car', 2, 2, 1999, 'petrol', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feddback`
--

CREATE TABLE `feddback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Your_Name` varchar(191) NOT NULL,
  `Location` varchar(191) NOT NULL,
  `Email_Id` varchar(191) NOT NULL,
  `Phone` varchar(191) NOT NULL,
  `Message` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feddback`
--

INSERT INTO `feddback` (`id`, `Your_Name`, `Location`, `Email_Id`, `Phone`, `Message`, `created_at`, `updated_at`) VALUES
(1, 'Meet', 'ahmedabad', 'meet@gmail.com', '9725254775', 'this web is ok', NULL, NULL),
(5, 'Anand Yadav', 'Bopal', 'anand@hotmail.com', '4869411468', 'Our webShite Work Is Done\r\n\r\nNow Just Relex', NULL, NULL),
(6, 'Meet', 'Jivrajpark', 'meet@gmail.com', '1512545546', 'Ok', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loginclint`
--

CREATE TABLE `loginclint` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Full_Name` varchar(191) NOT NULL,
  `Email_Id` varchar(191) NOT NULL,
  `Phone_Number` varchar(191) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Gender` enum('Male','Female','Prefer not to say') NOT NULL,
  `Password` varchar(191) NOT NULL,
  `Role` varchar(191) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loginclint`
--

INSERT INTO `loginclint` (`id`, `Full_Name`, `Email_Id`, `Phone_Number`, `Birth_Date`, `Gender`, `Password`, `Role`, `created_at`, `updated_at`) VALUES
(1, 'Meet Patel', 'patelmeet@gmail.com', '9725254775', '2005-03-23', 'Male', '$2y$10$lbEDTVxUva1oxm/Pgl1apeTP.P35iXwne9n0sZWjr0u8I1w9YRdum', 'user', NULL, NULL),
(13, 'Admin', 'admin@gmail.com', '7824600489', '2005-03-23', 'Male', '$2y$10$F8IOuvLZaVRNnjLJh0sTUOAvjEHZeX5xvz3Yj91kQ2IUolmqOmO36', 'admin', NULL, NULL),
(14, 'Yash Shah', 'YashShah3201@hotmail.com', '7894561230', '2004-08-23', 'Male', '$2y$10$Np6b1EBUMXfW6UX3GKSQjergtB2/mYzpN3A17a6a4YnpIDs2t7tSG', 'user', NULL, NULL),
(15, 'Utsav Prajapati', 'utsav@gmail.com', '9313365413', '2004-11-28', 'Male', '$2y$10$1mWbYhjQ3iEInd7MdmFnYeAN8p6081F8jHiyVmD.jW4usslFwCCp2', 'user', NULL, NULL),
(16, 'Maheer Maheta', 'maheer@gmail.com', '9328621770', '2004-01-01', 'Male', '$2y$10$icRZC.IdvsvFmlh2bCD3FeNtzbWlFykMna8U/mCl0ODIxOicAoZiK', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2024_01_06_174315_create_loginclint_table', 1),
(22, '2024_01_10_071106_create_cardatas_table', 1),
(23, '2024_01_14_185350_create_user_cardatas_table', 2),
(24, '2024_01_16_161126_create_bookings_table', 3),
(25, '2024_01_16_170407_create_bookings_table', 4),
(26, '2023_12_30_052025_create__student__data_table', 5),
(27, '2024_01_18_035202_create_data_table', 6),
(28, '2024_01_18_051614_create_payments_table', 7),
(29, '2024_01_18_063759_create_feddback_table', 8),
(30, '2024_01_21_131752_create_payments_table', 9),
(31, '2024_01_21_140624_create_payments_table', 10),
(32, '2024_01_21_141725_create_payments_table', 11),
(33, '2024_01_22_151745_create_expcars_table', 12),
(34, '2024_01_23_151547_create_user_cardatas_table', 13),
(35, '2024_01_23_152810_create_user_user_cardatas_table', 14),
(36, '2024_01_23_154353_create_user_cardatas_table', 15),
(37, '2024_01_23_154902_create_user_cardatas_table', 16),
(38, '2024_01_23_160530_create_user_cardatas_table', 17),
(39, '2024_01_23_161407_create_user_cardatas_table', 18),
(40, '2024_02_02_052406_create_cardatas_table', 19),
(41, '2024_02_02_103129_create_payments_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Full_Name` varchar(191) NOT NULL,
  `Email_Id` varchar(191) NOT NULL,
  `Address` varchar(191) NOT NULL,
  `City` varchar(191) NOT NULL,
  `State` varchar(191) NOT NULL,
  `Zip` varchar(191) NOT NULL,
  `Car_Name` varchar(191) NOT NULL,
  `Price` varchar(191) NOT NULL,
  `Price_Words` varchar(191) NOT NULL,
  `Engine` varchar(191) NOT NULL,
  `Top_Speed` varchar(191) NOT NULL,
  `Fuel` varchar(191) NOT NULL,
  `Brand_Name` varchar(191) NOT NULL,
  `Vehicle_Type` varchar(191) NOT NULL,
  `Doors` varchar(191) NOT NULL,
  `Seating_Capacity` varchar(191) NOT NULL,
  `Manufacturing_Year` varchar(191) NOT NULL,
  `Card_Holder_Name` varchar(191) NOT NULL,
  `Card_Number` varchar(191) NOT NULL,
  `Exp_Month` varchar(191) NOT NULL,
  `Exp_Year` varchar(191) NOT NULL,
  `Cvv` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `Full_Name`, `Email_Id`, `Address`, `City`, `State`, `Zip`, `Car_Name`, `Price`, `Price_Words`, `Engine`, `Top_Speed`, `Fuel`, `Brand_Name`, `Vehicle_Type`, `Doors`, `Seating_Capacity`, `Manufacturing_Year`, `Card_Holder_Name`, `Card_Number`, `Exp_Month`, `Exp_Year`, `Cvv`, `created_at`, `updated_at`) VALUES
(2, 'Meet Patel', 'meet@gmail.com', 'shiavali Soc', 'Ahmedabad', 'Gujarat', '380051', 'Bmw i8', '26200000', '2.62', 'No', '250', 'Battery', 'Bmw', 'Electric Car', '2', '4', '2014', 'Meet Pareshbhai Patel', '1057100553589999', 'March', '2025', '350', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_student__data`
--

CREATE TABLE `_student__data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `gender` enum('M','F') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardatas`
--
ALTER TABLE `cardatas`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expcars`
--
ALTER TABLE `expcars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feddback`
--
ALTER TABLE `feddback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginclint`
--
ALTER TABLE `loginclint`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_student__data`
--
ALTER TABLE `_student__data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardatas`
--
ALTER TABLE `cardatas`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expcars`
--
ALTER TABLE `expcars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feddback`
--
ALTER TABLE `feddback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loginclint`
--
ALTER TABLE `loginclint`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_student__data`
--
ALTER TABLE `_student__data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
