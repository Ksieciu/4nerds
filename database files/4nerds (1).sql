-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Cze 2019, 17:32
-- Wersja serwera: 10.1.40-MariaDB
-- Wersja PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `4nerds`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `galeria`
--

CREATE TABLE `galeria` (
  `name` varchar(20) NOT NULL,
  `description` text,
  `link` varchar(200) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `galeria`
--

INSERT INTO `galeria` (`name`, `description`, `link`, `ID`) VALUES
('1', NULL, 'images/gallery/1.jpg', 1),
('2', NULL, 'images/gallery/2.jpg', 2),
('3', NULL, 'images/gallery/3.jpg', 3),
('4', NULL, 'images/gallery/4.jpg', 4),
('5', NULL, 'images/gallery/5.jpg', 5),
('6', NULL, 'images/gallery/6.jpg', 6),
('7', NULL, 'images/gallery/7.jpg', 7),
('8', NULL, 'images/gallery/8.jpg', 8),
('9', NULL, 'images/gallery/9.jpg', 9),
('10', NULL, 'images/gallery/10.jpg', 10),
('11', NULL, 'images/gallery/11.jpg', 11),
('12', NULL, 'images/gallery/12.jpg', 12),
('13', NULL, 'images/gallery/13.jpg', 13),
('14', NULL, 'images/gallery/14.jpg', 14),
('15', NULL, 'images/gallery/15.jpg', 15),
('16', NULL, 'images/gallery/16.jpg', 16),
('17', NULL, 'images/gallery/17.jpg', 17),
('18', NULL, 'images/gallery/18.jpg', 18),
('19', NULL, 'images/gallery/19.jpg', 19),
('20', NULL, 'images/gallery/19.jpg', 20);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontakt`
--

CREATE TABLE `kontakt` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kontakt`
--

INSERT INTO `kontakt` (`ID`, `name`, `surname`, `email`, `text`) VALUES
(1, 'Sebastian', 'Winiarski', 'kekkerinho@porfavor.com', 'Lorem Ipsum terefere zadzwoÅ„cie do mnie pÃ³kim miÅ‚y.'),
(2, 'vadsc', 'ascasx', 'xasxa@gmail.com', 'wfvwdfvwdfvcdsvsdfvsd dfv sdfv sf vsdf sdf sdfvdsfvs sf sdfv sdfv sv'),
(3, 'Vladimir', 'Putin', 'Vladek@Putin.ru', 'Proszu o kontakt');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `links`
--

CREATE TABLE `links` (
  `ID` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `link` varchar(200) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sklepy`
--

CREATE TABLE `sklepy` (
  `ShopID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `street` varchar(150) NOT NULL,
  `postcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `sklepy`
--

INSERT INTO `sklepy` (`ShopID`, `name`, `city`, `street`, `postcode`) VALUES
(9, 'Zielony', 'Poznan', 'Buforowa 15', '60-000'),
(10, 'Super nerdowo', 'Warszawa', 'Plomienna 123/12', '00-001'),
(11, 'Ugabuga entertainment', 'Poznan', 'Grunwaldzka 41', '60-001'),
(12, 'Piotr i Pawel Wroclaw', 'Wroclaw', 'Drukarska 1', '51-123'),
(13, 'Otomato', 'Wroclaw', 'Gandolfa Amlera 1', '52-192'),
(14, 'Wirenkowo', 'Poznan', 'Nad Muszyna 4', '60-101'),
(15, 'Cienamon', 'Poznan', 'Magnezowa 412', '60-054'),
(16, 'Brakpomyslowo', 'Poznan', 'Gliniana 21', '60-032');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `sklepy`
--
ALTER TABLE `sklepy`
  ADD PRIMARY KEY (`ShopID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `galeria`
--
ALTER TABLE `galeria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `links`
--
ALTER TABLE `links`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `sklepy`
--
ALTER TABLE `sklepy`
  MODIFY `ShopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
