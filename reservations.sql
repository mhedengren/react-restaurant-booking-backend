-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 13 sep 2019 kl 12:37
-- Serverversion: 5.7.23
-- PHP-version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `Restaurant`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `res_guests` int(11) NOT NULL,
  `res_date` varchar(50) NOT NULL,
  `res_time` int(11) NOT NULL,
  `res_name` varchar(500) NOT NULL,
  `res_email` varchar(10000) NOT NULL,
  `res_tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `reservations`
--

INSERT INTO `reservations` (`res_id`, `res_guests`, `res_date`, `res_time`, `res_name`, `res_email`, `res_tel`) VALUES
(188, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(189, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(190, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(191, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(192, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(193, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(194, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(195, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(196, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(197, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(198, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(199, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(200, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(201, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(202, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(203, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050'),
(204, 4, '2019-09-20', 18, 'Frida', 'frida@person.se', '070-5055050');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
