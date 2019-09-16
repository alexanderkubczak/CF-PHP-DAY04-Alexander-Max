-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Sep 2019 um 12:16
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_max_widhalm_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `media` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `authors`
--

INSERT INTO `authors` (`author_id`, `name`, `surname`, `media`, `genre`) VALUES
(123, 'Peter', 'Joseph', 'DVD', 'science&politics'),
(234, 'Jacque', 'Fresco', 'book', 'science&politics'),
(345, 'Daniele', 'Ganser', 'book', 'science&politics'),
(456, 'J.K.', 'Rowling', 'DVD', 'fantasy');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `fk_author_id` int(11) NOT NULL,
  `fk_publisher_id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `author` varchar(30) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `isbn` int(30) NOT NULL,
  `short_disc` varchar(60) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`media_id`, `title`, `fk_author_id`, `fk_publisher_id`, `img`, `author`, `type`, `isbn`, `short_disc`, `status`) VALUES
(3, 'Harry Potter 3', 456, 2, 'https://i.ytimg.com/vi/96W4e_pZJmw/maxresdefault.jpg', 'J.K. Rowling', 'Book', 356785, 'Harry Potter adventure', 'available'),
(4, 'Harry Potter 4', 456, 3, 'https://vignette.wikia.nocookie.net/harrypotter/images/6/61/Film_4.jpg/revision/latest?cb=20141003153528&path-prefix=de', 'J.K. Rowling', 'Book', 232237, 'Harry Potter adventure', 'reserved'),
(5, 'Harry Potter 6', 456, 1, 'https://vignette.wikia.nocookie.net/harrypotter/images/2/23/Hp6_poster_br.jpg/revision/latest?cb=20141215114252', 'J.K. Rowling', 'book', 234112, 'Harry Potter adventure', 'available'),
(6, 'Harry Potter 7', 456, 4, 'https://images-na.ssl-images-amazon.com/images/I/5127nEjSpkL._SY445_.jpg', 'J.K. Rowling', 'book', 456753, 'Harry Potter adventure', 'reserved'),
(7, 'Looking Forward', 234, 1, 'https://images-na.ssl-images-amazon.com/images/I/51-FgC6dqaL.jpg', 'Jacque Fresco', 'book', 345151, 'Book about a brighter future', 'available'),
(8, 'Natos Secret Armies', 345, 1, 'https://images-eu.ssl-images-amazon.com/images/I/511y3glY4kL.jpg', 'Daniele Ganser', 'book', 356735, 'Book about secrte armies', 'available'),
(9, 'Peak oil', 345, 2, 'https://images-eu.ssl-images-amazon.com/images/I/51j3qfBtFPL.jpg', 'Daniele Ganser', 'book', 262453, 'Book about peak oil and oil consumption', 'available'),
(10, 'The best that money can\'t buy', 234, 3, 'https://images-na.ssl-images-amazon.com/images/I/51mfWiIpzYL._SX367_BO1,204,203,200_.jpg', 'Jacque Fresco', 'book', 456364, 'Book about a world beyond poverty and conflict', 'available'),
(11, 'The venus project', 234, 3, '', 'Jacque Fresco', 'Book', 453764, '', 'available'),
(12, 'Zeitgeist', 123, 5, 'http://www.zeitgeistmovie.com/zeitgeist-the-movie.jpg', 'Peter Joseph', 'dvd', 14525, 'Movie about the social and economic problems in our world', 'available');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `address`, `size`) VALUES
(1, 'Coolbooks', 'Coolbooksstreet', 'big'),
(2, 'Nicebooks', 'Awesomestreet', 'mid'),
(3, 'Bestbooks', 'Wowstreet', 'mid'),
(4, 'Tinybooks', 'Smallstreet', 'small'),
(5, 'Nicemovies', 'Moviestreet', 'big'),
(6, 'Thismovies', 'Hollybrook', 'mid');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `fk_author_id` (`fk_author_id`),
  ADD KEY `fk_publisher_id` (`fk_publisher_id`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`fk_author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`fk_publisher_id`) REFERENCES `publisher` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
