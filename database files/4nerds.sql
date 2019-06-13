-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Cze 2019, 18:26
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
-- Struktura tabeli dla tabeli `graphics`
--

CREATE TABLE `graphics` (
  `name` varchar(50) NOT NULL,
  `source` varchar(200) NOT NULL,
  `class` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `alt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `graphics`
--

INSERT INTO `graphics` (`name`, `source`, `class`, `id`, `alt`) VALUES
('close_button', 'images/close.svg', '', '', 'Close'),
('eventy', 'images/eventy.jpg', 'wide-pics', '', NULL),
('komiksy', 'images/komiksy.JPG', 'wide-pics', '', NULL),
('landing_logo', 'images/logo.jpg', '', 'Landing-logo', 'Logo-4Nerds.pl'),
('nerd_photo', 'images/nerd-photo.png', 'nerd', '', NULL),
('n_image', 'images/n-photo.jpg', 'nerd', '', NULL),
('ubrania', 'images/ubrania.jpg', 'wide-pics', '', NULL);

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
(3, 'Vladimir', 'Putin', 'Vladek@Putin.ru', 'Proszu o kontakt'),
(4, 'Pierdzioch', 'BrzÄ™czyszczykiewisz', 'PB@gmail.com', 'Wololo'),
(5, 'Grzegorz', 'dscsdc', 'svmksdc@GMAIL.COM', 'vsadcasdfasdcas'),
(6, 'Chrz?szczygrzeboszyce', 'Gmina', 'lekolody@gmail.com', 'sadfsavaasdvasd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `linking`
--

CREATE TABLE `linking` (
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `source` varchar(200) NOT NULL,
  `class` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `linking`
--

INSERT INTO `linking` (`name`, `source`, `class`) VALUES
('Galeria', 'gallery.php', NULL),
('Home', 'main_page.php', NULL),
('Kontakt', 'contact_page.php', 'right-elem'),
('O Firmie', 'o_firmie.php', NULL),
('Produkty', 'produkty.php', NULL),
('Szukaj sklepu', 'search_page.php', NULL);

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tekst`
--

CREATE TABLE `tekst` (
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tekst`
--

INSERT INTO `tekst` (`name`, `text`) VALUES
('contact_page_opis', '<p> Siedziba naszej firmy znajduje się w Józebolestanisłarakowie przy ulicy Pilota Telewizyjnego Karola Plusa 4/20.</p>\r\n        <p>Wypełnij formularz kontaktowy, a my w ciągu 24 godzin odpowiemy!</p><br><br>'),
('eventy_opis', '<h1>Eventy</h1>\r\n<p>Jedną z trzech głównych działalności prowadzonych przez 4nerds.pl jest organizacja eventów. W ramach współpracy proponujemy wszelkiego rodzaju organizacje spotkań autorski dla dzieci, młodzieży oraz dorosłych, organizacje koncertów, warsztatów, premier filmowych, oprawy targów branżowych i wielu innych</p>\r\n<p>Napisz do nas, aby dowiedzieć się więcej</p>           \r\n<br>\r\n</p>\r\n </p> \r\n            '),
('h1_powitanie', '<h1>Witajcie w 4nerds.pl - miejscu w którym zawsze możesz być sobą!</h1>'),
('header', '<header>Zadzwon do nas: 794 506 899 albo napisz <a href=\"mailto:kontakt@4nerds.pl\">kontakt@4nerds.pl</a></header>'),
('komiksy_opis', '<h1>Komiksy</h1>\r\n<p>Zajmujemy się także sprzedażą, oraz sprowadzaniem unikalnych egzemplarzy krajowych oraz zagranicznych komiksów. Wśród naszej załogi znajdują się wysoce wykwalifikowani rzeczoznawcy oraz doświadczeni handlarze.</p>     \r\n<br></p></p> '),
('main_page_opis', '<p>     4nerds.pl powstało z myślą o połączeniu pasji do nauki, komiksów, filmów i gier planszowych z pracą zarobkowa.\r\n          Z pasją oraz duma szerzymy na terenie kraju szeroko pojętą kultur nerdowska poprzez sprzedaż komiksów, gier oraz nerdowski gadżetów. W swoim asortymencie posiadamy wysokiej jakości, wyselekcjonowany towar krajowy, jak i kolekcjonerskie importowane perełki. \r\n            </p>  <p>Jako pasjonaci, z wieloletnim doświadczeniem, prowadzimy także wiele eventów na terenie całego kraju, nasze stanowiska najdziecie między innymi na festiwalach takich jak Pyrkon, Polcon czy Comic Con.\r\n            W życiu i biznesie kierujemy się zasadą, że bycie sobą w każdej sytuacji to podstawa, dlatego 4nerds.pl to miejsce, w którym zawsze możesz być sobą!<br><br><br>'),
('o_firmie', '<h1>Firma założona została w 2017 roku, w Poznaniu, jej założycielami są dwa najtęższe mózgi tej strony świata.</h1>\r\n                <p>Sebastian Winiarski, specjalista od liczb, tęgi umysł technologiczny oraz twardo stąpający po ziemi przedsiębiorca. Osoba uznawana za mistrza od załatwiania spraw nie do załatwienia, sympatyk ziołolecznictwa, altruista, jedyna osoba, na świecie która zdołała ukończyć TES: Oblivion bez zamykania żadnej z bram, betatester Half-Life’a 3. Jego osiągnięcia są tak rozległe, że są widoczne z obity około ziemskiej; z niepotwierdzonych informacji wynika, że Robert Downey Jr kreował postać Tonego Starka wzorując się właśnie na Sebastianie Winiarskim.</p>\r\n                <p>Drugim założycielem, współtwórcą idei 4nerds.pl jest Piotr Wróblewski. Wybitny mówca, menadżer, wizjoner, człowiek renesansu. Osoba o niesamowitej charyzmie oraz wewnętrznej werwie, ponoć potrafi wygrać dyskusje nie biorąc w jej udziału. Sylwetkowy dubler Chrisa Hemswortha w Avengers – Endgame.</p>\r\n                <p>Z połączenia dwóch tak tęgich umysłów, w roku 2017 powstała idea a następnie prężny start-up, który do dziś odnosi sukcesy na rynku lokalnym i międzynarodowym.</p>'),
('title_text', '<title>4Nerd.pl - The place where you can be yourself</title>'),
('ubrania_opis', '<h1>Ubrania</h1>\r\n                <p>Jedną z naszych działalności jest przygotowywanie tematycznych linii odzieżowych, związanych ściśle z subkultura geekowską. W naszym asortymencie znajdziecie zarówno autorskie projekty, jak i licencjonowane linie znanych marek filmowych.</p>');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `graphics`
--
ALTER TABLE `graphics`
  ADD PRIMARY KEY (`name`);

--
-- Indeksy dla tabeli `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `linking`
--
ALTER TABLE `linking`
  ADD PRIMARY KEY (`name`);

--
-- Indeksy dla tabeli `sklepy`
--
ALTER TABLE `sklepy`
  ADD PRIMARY KEY (`ShopID`);

--
-- Indeksy dla tabeli `tekst`
--
ALTER TABLE `tekst`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `sklepy`
--
ALTER TABLE `sklepy`
  MODIFY `ShopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
