-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 05:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE `teacherinfo` (
  `ID_NUMBER` varchar(50) NOT NULL,
  `EMAIL_ADDRESS` varchar(50) NOT NULL,
  `DEPT_NAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`ID_NUMBER`, `EMAIL_ADDRESS`, `DEPT_NAME`, `PASSWORD`) VALUES
('CS_01', 'FAHAD IQBAL', 'CSE', '1059'),
('CS_02', 'RAMESH KUMAR', 'CSE', '2059'),
('CS_03', 'MARIA ABDULLAH', 'CSE', '3059'),
('CS_04', 'SHAHID SULEMAN', 'CSE', '4059'),
('CS_05', 'SHAFQUAT LASHARI', 'CSE', '5059');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 05:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undergraduate`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch 19`
--

CREATE TABLE `batch 19` (
  `ID NUMBER` varchar(50) NOT NULL,
  `EMAIL ADDRESS` varchar(50) NOT NULL,
  `BATCH NUMBER` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch 19`
--

INSERT INTO `batch 19` (`ID NUMBER`, `EMAIL ADDRESS`, `BATCH NUMBER`, `PASSWORD`) VALUES
('', '', '', ''),
('D-19-CS-01', 'areebamuhammadsaeed@gmail.com', '19', '24680'),
('D-19-CS-04', 'umaima.siddiqui2000@gmail.com', '19', '08642'),
('D-19-CS-05', 'haseeb.ahmed456123@gmail.com', '19', '13579'),
('D-19-CS-06', '1155JamalAhmed@gmail.com', '19', '97531'),
('D-19-CS-07', 'khanJaba12@gmail.com', '19', '59220'),
('D-19-CS-09', 'tanveer_hussain852@outlook.com', '19', '38072'),
('D-19-CS-11', 'ms12lion@gmail.com', '19', '56745'),
('D-19-CS-12', 'ifrasaleemcsengineer12@gmail.com', '19', '90034'),
('D-19-CS-13', 'umerohma592@gmail.com', '19', '58633'),
('D-19-CS-14', 'sagarrangwani23@gmail.com', '19', '45679'),
('D-19-CS-16', 'Hiraarain100@gmail.com', '19', '34890'),
('D-19-CS-17', 'azizullahkhanauk1@gmail.com', '19', '98701'),
('D-19-CS-21', 'Haidersaqib26@gmail.com', '19', '45612'),
('D-19-CS-23', 'Dorarizvi@gmail.com', '19', '40455'),
('D-19-CS-26', 'tehreemkamal0@gmail.com', '19', '56239'),
('D-19-CS-30', 'mkmalhi983@gmail.com', '19', '33669'),
('D-19-CS-41', 'Hibbabatool84@gmail.com', '19', '77005'),
('D-19-CS-43', 'sb081211@gmail.com', '19', '44088'),
('D-19-CS-44', 'Iqranisar096@gmail.com', '19', '11933'),
('D-19-CS-45', 'zoobiajaib12@gmail.com', '19', '09126'),
('D-19-CS-48', 'alaminsaram@gmail.com', '19', '90857');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch 19`
--
ALTER TABLE `batch 19`
  ADD PRIMARY KEY (`ID NUMBER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
