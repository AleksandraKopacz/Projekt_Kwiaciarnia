-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Cze 2023, 18:43
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kwiaciarnia1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kwiaty`
--

CREATE TABLE `kwiaty` (
  `id_kwiaty` int(11) NOT NULL,
  `img` varchar(45) NOT NULL,
  `kwiat` varchar(45) NOT NULL,
  `kolory` text NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `kwiaty`
--

INSERT INTO `kwiaty` (`id_kwiaty`, `img`, `kwiat`, `kolory`, `cena`) VALUES
(1, 'aster.png', 'Aster chiński', 'Różowy, fioletowy, biały, żółty, czerwony', 4),
(2, 'jaskier.png', 'Jaskier', 'Czerwony, pomarańczowy, biały, żółty, różowy', 10),
(3, 'jasmin.png', 'Jaśmin', 'Biały', 15),
(4, 'tulipan.png', 'Tulipan', 'Fioletowy, żółty, czerwony, biały, różowy', 7),
(5, 'dalia.png', 'Dalia', 'Czerwony, bordowy, różowy, biały, żółty', 5),
(6, 'roza.png', 'Róża', 'Czerwona, biała, herbaciana, żółta, różowa', 10),
(7, 'bez.png', 'Bez', 'Fioletowy, biały', 6),
(8, 'gozdzik.png', 'Goździk', 'Różowy, fioletowy, czerwony', 3),
(9, 'niezapominajka.png', 'Niezapominajka', 'Niebieski', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `symbole`
--

CREATE TABLE `symbole` (
  `id_symbole` int(11) NOT NULL,
  `symbol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `symbole`
--

INSERT INTO `symbole` (`id_symbole`, `symbol`) VALUES
(1, 'Będę o tobie myśleć'),
(2, 'Bogactwo i dobrobyt'),
(3, 'Deklaracja miłości'),
(4, 'Godność'),
(5, 'Miłość'),
(6, 'Młodość'),
(7, 'Perfekcja'),
(8, 'Szczęście'),
(9, 'Wspomnienia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `symbole_kwiaty`
--

CREATE TABLE `symbole_kwiaty` (
  `id_symbole` int(11) NOT NULL,
  `id_kwiaty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `symbole_kwiaty`
--

INSERT INTO `symbole_kwiaty` (`id_symbole`, `id_kwiaty`) VALUES
(1, 1),
(2, 2),
(2, 3),
(3, 4),
(4, 4),
(4, 5),
(5, 1),
(5, 6),
(6, 7),
(7, 6),
(7, 4),
(8, 8),
(5, 8),
(9, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id_uslugi` int(11) NOT NULL,
  `img` varchar(45) NOT NULL,
  `usluga` varchar(45) NOT NULL,
  `opis` text NOT NULL,
  `cena_uslugi` double NOT NULL,
  `typ` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id_uslugi`, `img`, `usluga`, `opis`, `cena_uslugi`, `typ`) VALUES
(1, 'box-odcien-rozu.png', 'Box \"Odcień Różu\"', 'Box \"Odcień różu\" to kompozycja ułożona w welurowym boxie z sezonowych kwiatów.', 209, 'Box'),
(2, 'bukiet-pachnacy-ogrod.png', 'Bukiet \"Pachnący Ogród\"', 'Bukiet \"Pachnący ogród\" to piękna pastelowa kompozycja ułożona z sezonowych kwiatów i dodatków otulonych wiosennym zapachem.', 169, 'Bukiet'),
(3, 'box-smietankowy.png', 'Box \"Śmietankowy\"', 'Box \"Śmietankowy\" to delikatne połączenie kremowych różyczek z gałązkami limonium i eukaliptusa. Całość upięta w welurowym boxie.', 159, 'Box'),
(4, 'bukiet-kocham-cie.png', 'Bukiet \"Kocham Cię\"', 'Bukiet \"Kocham Cię\" to wyjątkowa kompozycja ułożona z czerwonych róż odmiany Red Naomi. Bukiet zdobią dwa czerwone serduszka, całość otulona naturalną kryzą.', 199, 'Bukiet'),
(5, 'bukiet-z-rozanego-ogrodu.png', 'Bukiet \"Z różanego ogrodu\"', 'Bukiet \"Z różanego ogrodu\" to kompozycja utrzymana w delikatnej pudrowo-różowej tonacji, ułożona z róży i róży gałązkowej. Bukiet wypełniają sezonowe dodatki.', 169, 'Bukiet'),
(7, 'gozdziki-karmelove.png', 'Goździki KarmeLove', 'Goździki KarmeLove  to klasyczna kompozycja ułożona z goździków gałązkowych oraz eukaliptusa, owinięta papierem.', 149, 'Bukiet'),
(8, 'flowers-box.png', 'Flowers Box', '\"Flowers Box\" to kompozycja ułożona z pastelowych kwiatów i eukaliptusa w welurowym boxie.', 159, 'Box');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id_uzytkownik` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `haslo` varchar(45) NOT NULL,
  `rola` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_uzytkownik`, `email`, `haslo`, `rola`) VALUES
(1, 'admin@admin.pl', 'admin', 1),
(2, 'user@user.pl', 'user', 0),
(3, 'test@test.pl', 'test', 0),
(4, 'ola@ola.pl', 'user', 0),
(6, 'testowy@email.pl', 'testowy', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id_zamowienie` int(11) NOT NULL,
  `szczegoly` text NOT NULL,
  `id_uzytkownik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `zamowienie`
--

INSERT INTO `zamowienie` (`id_zamowienie`, `szczegoly`, `id_uzytkownik`) VALUES
(2, 'Box Róże', 2),
(3, 'Goździki', 2),
(4, 'Box Goździki', 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kwiaty`
--
ALTER TABLE `kwiaty`
  ADD PRIMARY KEY (`id_kwiaty`);

--
-- Indeksy dla tabeli `symbole`
--
ALTER TABLE `symbole`
  ADD PRIMARY KEY (`id_symbole`);

--
-- Indeksy dla tabeli `symbole_kwiaty`
--
ALTER TABLE `symbole_kwiaty`
  ADD KEY `id_kwiaty` (`id_kwiaty`),
  ADD KEY `id_symbole` (`id_symbole`);

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id_uslugi`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id_uzytkownik`);

--
-- Indeksy dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id_zamowienie`),
  ADD KEY `id_uzytkownik` (`id_uzytkownik`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kwiaty`
--
ALTER TABLE `kwiaty`
  MODIFY `id_kwiaty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `symbole`
--
ALTER TABLE `symbole`
  MODIFY `id_symbole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id_uslugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_uzytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id_zamowienie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `symbole_kwiaty`
--
ALTER TABLE `symbole_kwiaty`
  ADD CONSTRAINT `symbole_kwiaty_ibfk_1` FOREIGN KEY (`id_kwiaty`) REFERENCES `kwiaty` (`id_kwiaty`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `symbole_kwiaty_ibfk_2` FOREIGN KEY (`id_symbole`) REFERENCES `symbole` (`id_symbole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `zamowienie_ibfk_1` FOREIGN KEY (`id_uzytkownik`) REFERENCES `uzytkownik` (`id_uzytkownik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
