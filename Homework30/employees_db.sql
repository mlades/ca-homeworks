-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for employees_db
CREATE DATABASE IF NOT EXISTS `employees_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `employees_db`;

-- Dumping structure for table employees_db.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `employee_id` int(11) DEFAULT NULL,
  `departments` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  KEY `FK__employees_salary` (`employee_id`),
  CONSTRAINT `FK__employees_salary` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.departments: ~5 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`employee_id`, `departments`, `from_date`, `to_date`) VALUES
	(1, 'House Stark ', '2020-02-28', NULL),
	(4, 'House Lannister', '2020-02-28', NULL),
	(2, 'House Stark ', '2020-02-28', NULL),
	(5, 'House Targaryen', '2020-02-28', NULL),
	(3, 'House Stark ', '2020-02-28', NULL);
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping structure for table employees_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(14) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `hire_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.employees: ~5 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `firstname`, `lastname`, `birthdate`, `gender`, `hire_date`) VALUES
	(1, 'Jon', 'Snow', '1990-05-28', 0, '2020-02-28'),
	(2, 'Arya', 'Stark', '1995-05-18', 1, '2020-02-28'),
	(3, 'Sansa', 'Stark', '1993-12-08', 1, '2020-02-28'),
	(4, 'Cersei ', 'Lannister', '1980-02-07', 1, '2020-02-28'),
	(5, 'Daenerys', 'Targaryen', '1992-02-22', 1, '2020-02-28');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table employees_db.salaries
CREATE TABLE IF NOT EXISTS `salaries` (
  `employee_id` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  KEY `FK__employees_department` (`employee_id`),
  CONSTRAINT `FK__employees_department` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.salaries: ~5 rows (approximately)
/*!40000 ALTER TABLE `salaries` DISABLE KEYS */;
INSERT INTO `salaries` (`employee_id`, `salary`, `from_date`, `to_date`) VALUES
	(2, 30000, '2020-02-28', NULL),
	(3, 20000, '2020-02-28', NULL),
	(4, 30000, '2020-02-28', NULL),
	(5, 60000, '2020-02-28', NULL),
	(1, 60000, '2020-02-28', NULL);
/*!40000 ALTER TABLE `salaries` ENABLE KEYS */;

-- Dumping structure for table employees_db.titles
CREATE TABLE IF NOT EXISTS `titles` (
  `employee_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  KEY `FK__employees_title` (`employee_id`),
  CONSTRAINT `FK__employees_title` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.titles: ~5 rows (approximately)
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;
INSERT INTO `titles` (`employee_id`, `title`, `from_date`, `to_date`) VALUES
	(1, 'Warden of the North', '2020-02-28', NULL),
	(5, 'Khaleesi', '2020-02-28', NULL),
	(3, 'Queen in the North', '2020-02-28', NULL),
	(2, 'Princess', '2020-02-28', NULL),
	(4, 'Protector of the Seven Kingdoms', '2020-02-28', NULL);
/*!40000 ALTER TABLE `titles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
