-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 04 jun 2017 om 10:46
-- Serverversie: 5.6.33
-- PHP-versie: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dcartek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `article`
--

CREATE TABLE `article` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `photo`, `date`) VALUES
(3, 'Porsche 718 Boxster', '<p>De nieuwe 718 Boxster was een groote verandering ondergaan. Ze hebben hun motoren veranderd naar 4 cilinder. Veel porsche fans vinden dat helemaal niet mooi.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Wat maakt de nieuwe 718 &nbsp;zo speciaal?</strong></p>\n\n<p>Ze hebben veel nieuwe technologien bedacht&nbsp;dat de auto veel sneller maakt. De sloomste model is 300pk. eerst was dat 240pk.&nbsp;</p>\n', 'jjVOxHaYWrjUTUbu1uwTCsi0x93ngbnAuio20y0W0jRTe3ogxU.jpg', '2017-06-03 19:41:41'),
(4, 'BMW I8', '<p>Voor het eerst hebben we beelden van de open versie van de BMW i8. Die lijkt aardig trouw te blijven aan de conceptversie.</p>\r\n\r\n<p>De komst van de&nbsp;BMW&nbsp;i8&nbsp;Spyder&nbsp;is al jaren een agendapuntje.&nbsp;Al in 2013 konden we melden dat de Spyder op de markt zou komen. Hoewel we toen nog mikten op een introductie in 2015, bleek dat nog wat te vroeg te zijn. Begin vorig jaar kregen we namelijk eerst nog&nbsp;een tweede conceptauto te zien, waar BMW vooral nieuwe technologie mee etaleerde. Het laatste bericht over de open versie van de&nbsp;hybride&nbsp;sportauto stamt uit oktober vorig jaar. Toen werden de berichten over een marktintroductie een stuk concreter:&nbsp;in 2018 moet de auto op de markt verschijnen.<br />\r\n<br />\r\nAls we de gecamoufleerde i8 Spyder naast de conceptauto&#39;s zetten, valt in eerste instantie op dat het ontwerp van het dak in grote lijnen hetzelfde blijft. De grootste verandering zit achter de stoffen kap, want daar lijkt vanaf de hoofdsteunen de heuppartij naar de achterkant iets subtieler te worden. Bij de conceptauto was er vanuit de cabine maar amper zicht naar achteren, de productieversie pakt dat met een brede achterruit iets praktischer aan.<br />\r\n<br />\r\nVerder lijkt deze test-Spyder ook de eerste zichtbare voorbode van een facelift voor de i8. Eerder hoorden we al&nbsp;dat de i8 mogelijk dit jaar nog gefacelift wordt. Net als bij&nbsp;de gisteren gespotte facelift voor de i3&nbsp;is het flink turen om verschillen te ontdekken. De grootste wijziging verwachten we in de techniek aan te treffen. Het gecombineerde vermogen van de driecilinder en de&nbsp;elektromotor&nbsp;zou volgens geruchten uitkomen op 375 pk en ook de actieradius - nu in theorie 600 km - moet dankzij een vernieuwde&nbsp;accu&nbsp;toenemen. We wachten af!</p>\r\n\r\n<p>Bron:&nbsp;<a href="http://www.autoweek.nl/nieuws/bmw-i8-spyder-voor-het-eerst-in-beeld/">Auto Week</a></p>\r\n', 'x3rkysXzPs6TBnJhChHNMRKHdktAiGBPK3aiw8SlBYeclYtYfa.png', '2017-06-03 14:29:12'),
(5, 'Audi R8', '<p><strong>Audi maakt het voor R8-kopers mogelijk om de &lsquo;side blades&rsquo; te voorzien van een eigen tekst. De bijzondere optie wordt in de toekomst ook voor kopers van minder exclusieve Audi&rsquo;s verkrijgbaar.</strong></p>\r\n\r\n<p>Met name de zogenaamde &#39;premium&#39; autobouwers hebben er een handje van om waar het maar kan personalisatiemogelijkheden aan te bieden. Speciale lakkleuren, bekledingsstoffen, wielen en stickers komen geregeld voorbij.&nbsp;Audi&nbsp;heeft nu iets nieuws bedacht: een tekst of tekening naar eigen ontwerp die middels een speciale laktechniek wordt aangebracht. Bij de toepassing van de gepatenteerde werkwijze wordt de blanke laklaag binnen het sjabloon van het gewenste ontwerp iets dunner gemaakt, waarna de vorm zichtbaar wordt. Het aangebrachte ontwerp is daarna mat, waardoor het opvalt in de hoogglansafwerking van de oppervlakken eromheen.</p>\r\n\r\n<p>Audi biedt deze bijzondere optie vooralsnog alleen aan binnen het Audi Exclusive-programma van de&nbsp;R8&nbsp;en R8&nbsp;Spyder, maar meldt nu al dat het in de toekomst mogelijk wordt om ook andere modellen van een persoonlijke &#39;touch&#39; te voorzien. Dat hoeft niet subtiel te zijn: ontwerpen met een formaat tot een vierkante meter zijn technisch mogelijk.</p>\r\n\r\n<p>Bron: <a href="http://www.autoweek.nl/nieuws/audi-personaliseert-met-laktechniek/">Auto Week</a></p>\r\n', 'kiji0TwjQmBRkRyq5CWN3AfOWUhGGwU0PejP7Q9YdLQxCoXI0U.png', '2017-06-03 19:27:36');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `permission` varchar(255) NOT NULL,
  `validated` int(2) NOT NULL,
  `respondscode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `profile_picture`, `permission`, `validated`, `respondscode`) VALUES
(1, 'steffalon', 'EE26B0DD4AF7E749AA1A8EE3C10AE9923F618980772E473F8819A5D4940E0DB27AC185F8A0E1D5F84F88BC887FD67B143732C304CC5FA9AD8E6F57F50028A8FF', 'Simon Boerrigter', 'simon.boerrigter@gmail.com', 'default.jpg', 'admin', 1, '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;