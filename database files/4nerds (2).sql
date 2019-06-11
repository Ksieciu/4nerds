-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Cze 2019, 17:34
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
('1', 'Proin turpis arcu, faucibus non lorem non, tincidunt fermentum magna. Donec ullamcorper lectus tristique tortor consectetur blandit. Praesent vehicula volutpat consectetur.', 'images/gallery/1.jpg', 1),
('2', 'Curabitur non libero feugiat, imperdiet leo ac, semper leo. Phasellus eget ante mattis, rhoncus est in, mattis neque. Praesent vel mollis lacus. ', 'images/gallery/2.jpg', 2),
('3', 'Aliquam at est tincidunt, lacinia lectus ac, feugiat enim. In semper dolor at metus maximus, eu volutpat velit luctus. Proin erat arcu, ullamcorper non nibh in, blandit accumsan nulla. ', 'images/gallery/3.jpg', 3),
('4', 'Maecenas sed nisl tempus, aliquam odio eget, semper neque. ', 'images/gallery/4.jpg', 4),
('5', 'Ut feugiat facilisis libero, sed tristique mauris vulputate at.', 'images/gallery/5.jpg', 5),
('6', 'Morbi diam nulla, commodo nec hendrerit eu, ullamcorper a orci. Integer sodales tempor libero.', 'images/gallery/6.jpg', 6),
('7', 'Mauris pretium, diam vel scelerisque gravida, arcu enim fermentum nisl, quis tempor purus metus a tortor. ', 'images/gallery/7.jpg', 7),
('8', 'Maecenas eget sodales nibh.', 'images/gallery/8.jpg', 8),
('9', 'Sed ac velit vitae ligula bibendum malesuada eu nec turpis. Phasellus vel commodo dolor, non sodales nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Quisque pharetra enim ut laoreet lacinia. Sed finibus, dui eget viverra imperdiet, massa leo ultricies nulla, id pretium neque diam sollicitudin justo. Ut id mauris ligula. Phasellus tempus elementum accumsan.', 'images/gallery/9.jpg', 9),
('10', 'Ut id elementum nisi, in pharetra dui. Suspendisse in lectus vel justo pharetra finibus in a eros. Praesent sed tortor ac metus pretium maximus. Aenean congue ultricies tristique.', 'images/gallery/10.jpg', 10),
('11', 'Vivamus arcu ligula, feugiat a purus eu, dictum viverra ex.', 'images/gallery/11.jpg', 11),
('12', 'Nunc tortor lectus, posuere ac imperdiet id, congue pellentesque sapien. ', 'images/gallery/12.jpg', 12),
('13', 'Nullam at ultricies leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'images/gallery/13.jpg', 13),
('14', 'Suspendisse malesuada ante nec venenatis hendrerit. Proin et rutrum nisl, ut scelerisque lorem. ', 'images/gallery/14.jpg', 14),
('15', NULL, 'images/gallery/15.jpg', 15),
('16', 'Phasellus tempus placerat mi vel faucibus. Suspendisse id odio et nibh placerat elementum id sed eros. ', 'images/gallery/16.jpg', 16),
('17', 'Ut a mauris ac massa condimentum aliquam a quis ipsum.', 'images/gallery/17.jpg', 17),
('18', 'Cogito ergo sum.', 'images/gallery/18.jpg', 18),
('19', 'Suspendisse euismod magna vitae libero porta congue. ', 'images/gallery/19.jpg', 19),
('20', 'Ut vehicula purus sit amet magna volutpat eleifend.', 'images/gallery/20.jpg', 20),
('21', ' Vivamus vel congue nisi. ', 'images/gallery/21.jpg', 21);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
