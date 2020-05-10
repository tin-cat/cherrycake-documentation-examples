SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `directors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthYear` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `directors` (`id`, `name`, `birthYear`) VALUES
(1, 'Robert Wise', 1914),
(2, 'Byron Haskin', 1899),
(3, 'Stanley Kubrick', 1928),
(4, 'Franklin J. Schaffner', 1920),
(5, 'Douglas Trumbull', 1942),
(6, 'Steven Spielberg', 1946),
(7, 'Ridley Scott', 1937),
(8, 'John Carpenter', 1948),
(9, 'Steven Lisberger', 1951),
(10, 'John Badham', 1939),
(11, 'David Lynch', 1946),
(12, 'Nick Castle', 1947),
(13, 'Wolfgang Petersen', 1941),
(14, 'Joe Dante', 1946),
(15, 'James Cameron', 1954),
(16, 'Robert Zemeckis', 1951),
(17, 'Garth Jennings', 1972),
(18, 'Richard Schenkman', 1958),
(19, 'Duncan Jones', 1971),
(20, 'J.J. Abrams', 1966),
(21, 'Christopher Nolan', 1970),
(22, 'Alex Garland', 1970),
(23, 'Denis Villeneuve', 1967);


ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `directors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
