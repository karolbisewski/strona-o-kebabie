-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Sty 2019, 15:31
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pai_bisewski`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`) VALUES
(1, 'kebaby'),
(2, 'napoje'),
(15, 'przekąski'),
(21, 'piwo'),
(22, 'alkohole');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(11) NOT NULL,
  `kategoria_id` int(11) DEFAULT NULL,
  `nazwa` varchar(150) NOT NULL,
  `opis` text NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `kategoria_id`, `nazwa`, `opis`, `img`) VALUES
(1, 1, 'Standard Bułka', 'Standardowy kebab w bułce. Korzystamy z tajnej chińskiej repetury', 'kebabbulka.png'),
(2, 1, 'Standard Rolo', 'Standardowy kebab w roladzie. Korzystamy z tajnej murzyńskiej repetury', 'kebabrolo.png'),
(3, 2, 'Herbata', 'Przepyszna herbata ziołowa miodowa', 'herbatka.png'),
(4, 1, 'Hummus', 'Przepyszny kebab z humusem', 'hummus.png'),
(6, 15, 'HIT ', 'Przepyszne ciasteczka firmy hit', 'ciastka.png'),
(7, 21, 'Tyskie', 'Najlepsze piwo pod słońcem', 'tyskie.png'),
(8, 21, 'Harnas', 'Siała z g&oacute;r', 'harnas.png'),
(9, 21, 'Specjal', 'Perła Pomorza', 'specjal.png'),
(10, 22, 'Bols', 'wódka dla najbogatrzych', 'bols.jpg'),
(22, 2, 'pepsi', 'SUPER pepsi!', 'pepsi.jpg'),
(23, 2, 'KOLA', 'SUPER KOLA', 'kola.jpg'),
(25, 2, 'tymbark', 'multiwitamina, sok 10%', 'tymbark.jpg'),
(33, 1, 'Klopsy', 'super klopsy magdy gesler', 'klopsy.jpeg'),
(34, 1, 'Schabowy', 'najwiekszy schabowy', 'schabowy.jpg'),
(38, 22, 'Stock', 'wódka z Rosji', 'stock.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(150) NOT NULL,
  `haslo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `haslo`) VALUES
(1, 'andrzej', '123'),
(2, 'karol', '123');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(150) NOT NULL,
  `haslo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`) VALUES
(1, 'bisewski', '$2y$10$YTK3rIKE.tt6KsmV92AA2OHraqV3IOX2E4LBKSpMYj9MZECZo49Q6'),
(2, 'andrzej', '123');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoria_id` (`kategoria_id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_1` FOREIGN KEY (`kategoria_id`) REFERENCES `kategorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
