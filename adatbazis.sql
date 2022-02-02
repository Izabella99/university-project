-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Jan 05. 18:06
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szakdolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `diak`
--

CREATE TABLE `diak` (
  `CNP` varchar(13) NOT NULL,
  `CsaladNev` varchar(30) NOT NULL,
  `KeresztNev` varchar(30) NOT NULL,
  `MatricolSzam` int(10) NOT NULL,
  `Beiratkozas_Ev` year(4) NOT NULL,
  `Szak` varchar(5) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefonszam` varchar(12) NOT NULL,
  `Jelszo` varchar(40) NOT NULL,
  `Valaszt_hatarido` date NOT NULL,
  `TEmail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `diak`
--

INSERT INTO `diak` (`CNP`, `CsaladNev`, `KeresztNev`, `MatricolSzam`, `Beiratkozas_Ev`, `Szak`, `Email`, `Telefonszam`, `Jelszo`, `Valaszt_hatarido`, `TEmail`) VALUES
('1990225127354', 'Varga', 'Szabolcs-László', 3714, 2018, 'IEM', 'szabolcs.varga@stud.ubbcluj.ro', '0725896412', '3b04227ad6d984ba4ba8cea6081e6a8d0789632b', '2020-11-08', 'ildiko.cardos@econ.ubbcluj.ro'),
('1990806146856', 'Kozák', 'Loránd-Richárd', 3694, 2018, 'IEM', 'lorand.kozak@stud.ubbcluj.ro', '07569874521', '87d50bbc4360d22fc472f8a68648f4a508e4f66d', '2020-11-08', 'szilveszter.fekete@econ.ubbcluj.ro'),
('1990812074523', 'Rácz', 'Gábor', 3703, 2018, 'IEM', 'gabor.racz@stud.ubbcluj.ro', '0745892314', 'f496e2caeb229f71950c3115051f5a5d55237969', '2020-11-08', 'gyongyver.kovacs@econ.ubbcluj.ro'),
('1990921070597', 'Péter', 'Richard-Gothárd', 3702, 2018, 'IEM', 'richard.peter@stud.ubbcluj.ro', '07222222', '4b8373d016f277527198385ba72fda0feb5da015', '2020-11-08', NULL),
('2990625311247', 'Kiss', 'Andrea-Betáta', 3690, 2018, 'IEM', 'andrea.kiss@stud.ubbcluj.ro', '0722745968', '07a2e25662f8c794e07aa2ef31707338c26b8a89', '2020-11-08', 'mihai.avornicului@econ.ubbcluj.ro'),
('2990921080042', 'Raduly', 'Izabela-Andreea', 3704, 2018, 'IEM', 'izabela.raduly@stud.ubbcluj.ro', '0746896500', '2c3472232a8a9a4e373960bfbe97952523b996e0', '2020-11-08', 'gyongyver.kovacs@econ.ubbcluj.ro'),
('2991020068521', 'Reman', 'Ezsébet-Beáta', 3405, 2018, 'IEM', 'erzsebet.reman@stud.ubbcluj.ro', '0711111111', '8d792bfa5de9559fa5cf86428c3ba36a5323d68a', '2020-11-08', 'bela.racz@econ.ubbcluj.ro');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szakdolgozat`
--

CREATE TABLE `szakdolgozat` (
  `Szakdolgozat_Kod` int(10) NOT NULL,
  `Cim` varchar(250) NOT NULL,
  `Tartalom` varchar(50) NOT NULL,
  `Jegy` int(11) NOT NULL,
  `KutatasiTerv` varchar(30) NOT NULL,
  `KutatasiTerv_Jegy` int(11) NOT NULL,
  `Ev` year(4) NOT NULL,
  `CNP` varchar(13) NOT NULL,
  `TEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `szakdolgozat`
--

INSERT INTO `szakdolgozat` (`Szakdolgozat_Kod`, `Cim`, `Tartalom`, `Jegy`, `KutatasiTerv`, `KutatasiTerv_Jegy`, `Ev`, `CNP`, `TEmail`) VALUES
(38, '', '', 0, '', 0, 2021, '2990625311247', 'mihai.avornicului@econ.ubbcluj.ro'),
(39, '', '', 0, '', 0, 2021, '1990225127354', 'ildiko.cardos@econ.ubbcluj.ro'),
(40, '', '', 0, '', 0, 2021, '1990806146856', 'szilveszter.fekete@econ.ubbcluj.ro'),
(51, 'Egy GPS rendszer megtervezése és implementálása android telefonokra', '', 0, 'Reman Ezsébet-Beáta_KT.docx', 0, 2021, '2991020068521', 'bela.racz@econ.ubbcluj.ro'),
(52, 'Web alapú tartalomkezelő (CMS) rendszerek', '', 0, '', 0, 2021, '1990812074523', 'gyongyver.kovacs@econ.ubbcluj.ro'),
(92, 'Felhasználói élménytervezés webalkalmazások esetén', '', 0, 'Raduly Izabela-Andreea_KT.docx', 0, 2021, '2990921080042', 'gyongyver.kovacs@econ.ubbcluj.ro');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tanar`
--

CREATE TABLE `tanar` (
  `TEmail` varchar(50) NOT NULL,
  `Telefonszam` varchar(12) NOT NULL,
  `CsaladNev` varchar(30) NOT NULL,
  `KeresztNev` varchar(30) NOT NULL,
  `Titulus` varchar(20) NOT NULL,
  `Jelszo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `tanar`
--

INSERT INTO `tanar` (`TEmail`, `Telefonszam`, `CsaladNev`, `KeresztNev`, `Titulus`, `Jelszo`) VALUES
('admin@ubbcluj.ro', '', '', 'Admin', '', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
('bela.racz@econ.ubbcluj.ro', '07859641258', 'Rácz', 'Béla-Gergely', 'adjunktus', 'f496e2caeb229f71950c3115051f5a5d55237969'),
('gyongyver.kovacs@econ.ubbcluj.ro', '0745214789', 'Kovács', 'Gyöngyvér-Emese', 'adjunktus', 'e59aa4985cd7e492ead4e61c2f1745481d60e78c'),
('ildiko.cardos@econ.ubbcluj.ro', '0743698147', 'Cardoş', 'Ildikó-Réka', 'adjunktus', '834d6d3b33d975284157919105008aa28b8feb87'),
('mihai.avornicului@econ.ubbcluj.ro', '0722847698', 'Avornicului', 'Mihai-Constantin', ' docens', 'cd1aedd09183b40ab8e8a3816436f7232c8bbf13'),
('szilveszter.fekete@econ.ubbcluj.ro', '0726987412', 'Fekete-Pali-Pista', 'Szilveszter', 'adjunktus', 'b971ba9f67a81cb78406bd56ed397991725f8302');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tema`
--

CREATE TABLE `tema` (
  `TemaKod` varchar(10) NOT NULL,
  `Nev` varchar(100) NOT NULL,
  `TEmail` varchar(50) NOT NULL,
  `Javasol_Ev` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `tema`
--

INSERT INTO `tema` (`TemaKod`, `Nev`, `TEmail`, `Javasol_Ev`) VALUES
('AM1', 'Egy online áruház megtervezése objektumorientált módszerrel', 'mihai.avornicului@econ.ubbcluj.ro', 2018),
('AM2', 'Online marketing egy szállodalánc esetében a COVID–19-világjárvány idején', 'mihai.avornicului@econ.ubbcluj.ro', 2020),
('AM3', 'Egy GPS rendszer megtervezése és implementálása android telefonokra', 'mihai.avornicului@econ.ubbcluj.ro', 2020),
('CI1', 'A nyereségadó jellemzői, számítása, könyvelése és elemzése egy konkrét vállalkozás példáján', 'ildiko.cardos@econ.ubbcluj.ro', 2017),
('CI2', 'A vezetői számvitel kialakítása és működése egy adott vállalkozásnál', 'ildiko.cardos@econ.ubbcluj.ro', 2018),
('CI3', 'Mesterséges intelligencia alkalamzása a számviteli folyamatokban', 'ildiko.cardos@econ.ubbcluj.ro', 2020),
('FSZ1', 'Céltartalékok és értékhelyesbítések a román számviteli rendszerben. Empirikus viszgálat tőzsdei cége', 'szilveszter.fekete@econ.ubbcluj.ro', 2019),
('FSZ2', 'Kreatív számviteli technikák', 'szilveszter.fekete@econ.ubbcluj.ro', 2020),
('KGY1', 'Felhasználói élménytervezés webalkalmazások esetén', 'gyongyver.kovacs@econ.ubbcluj.ro', 2020),
('KGY2', 'Web alapú tartalomkezelő (CMS) rendszerek', 'gyongyver.kovacs@econ.ubbcluj.ro', 2018),
('KGY3', 'Mobil platformra való fejlesztés: iOS, Android vagy WindowsPhone OS', 'gyongyver.kovacs@econ.ubbcluj.ro', 2019),
('RB1', 'Egy vállalati beruházási projekt megvalósításának kiértékelése', 'bela.racz@econ.ubbcluj.ro', 2018),
('RB2', 'Gazdasági fejlődés és populációs dinamika kapcsolata a 21. században', 'bela.racz@econ.ubbcluj.ro', 2020),
('RB3', 'Tudástranszfer hatása a vállalat üzleti teljesítményére', 'bela.racz@econ.ubbcluj.ro', 2020);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `diak`
--
ALTER TABLE `diak`
  ADD PRIMARY KEY (`CNP`),
  ADD KEY `Tanar_Diak` (`TEmail`);

--
-- A tábla indexei `szakdolgozat`
--
ALTER TABLE `szakdolgozat`
  ADD PRIMARY KEY (`Szakdolgozat_Kod`),
  ADD UNIQUE KEY `Szakdolgozat_Diak` (`CNP`),
  ADD KEY `Szakdolgozat_Tanar` (`TEmail`);

--
-- A tábla indexei `tanar`
--
ALTER TABLE `tanar`
  ADD PRIMARY KEY (`TEmail`);

--
-- A tábla indexei `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`TemaKod`),
  ADD KEY `TEmail` (`TEmail`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `szakdolgozat`
--
ALTER TABLE `szakdolgozat`
  MODIFY `Szakdolgozat_Kod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `diak`
--
ALTER TABLE `diak`
  ADD CONSTRAINT `diak_ibfk_1` FOREIGN KEY (`TEmail`) REFERENCES `tanar` (`TEmail`);

--
-- Megkötések a táblához `szakdolgozat`
--
ALTER TABLE `szakdolgozat`
  ADD CONSTRAINT `szakdolgozat_ibfk_1` FOREIGN KEY (`TEmail`) REFERENCES `tanar` (`TEmail`),
  ADD CONSTRAINT `szakdolgozat_ibfk_2` FOREIGN KEY (`CNP`) REFERENCES `diak` (`CNP`);

--
-- Megkötések a táblához `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `tema_ibfk_1` FOREIGN KEY (`TEmail`) REFERENCES `tanar` (`TEmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
