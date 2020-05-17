SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `users` (
  `id` int(9) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordHash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`, `email`, `passwordHash`) VALUES
(1, 'Douglas Engelbart', 'doug@berkeley.edu', 'sha512:100000:+IWHhrngEBLl0BMu+19sZZLFBKnT99O1:Pm7SsGpfs/2Oghd4vrKPhOrzqR7lbYAW'), /* TheMotherOfAllDemos413 */
(2, 'John Horton Conway', 'johnny@princeton.org', 'sha512:100000:VXJhDy/XW/sarOJZXpAt6Gk5GIKP/Wmv:jcKVOHjJwH5MTyTKvITzhI+L/5YAShaa'), /* lavidaloca */
(3, 'Frank Abagnale', 'frank.abagnale@united.com', 'sha512:100000:dkzRTBp/el2mFpnZcYqp/J3A1GpQu2Ni:/7r9u96lWW4F9LXfNDxfKoxarlyUvtXQ'), /* catch_me_?_you_can */
(4, 'Carl Sagan', 'carl@cosmos.org', 'sha512:100000:bnZnpmVgTD8Asd9x+JJxAHPlfcsCb4Fy:P4TzQV+/dtN+e/GlUZXAkXtrZ9esZy1Z'), /* palebluedot34 */
(5, 'Richard Feynmann', 'ricky@mit.edu', 'sha512:100000:a2+OoczrhLgcGnuSUZDvi2axzY8MF08q:fnhKL87OZfnG+ZtwSjWuK9T2sYba48sq'); /* 137 */


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`(191));


ALTER TABLE `users`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
