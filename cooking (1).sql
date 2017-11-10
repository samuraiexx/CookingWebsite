-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Fev-2016 às 18:38
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cooking`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL,
  `comment` varchar(600) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `answer` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`ID`, `comment`, `nickname`, `answer`) VALUES
(1, 'I love all your recipes, please post more, i''ll be glad to try most of them !!!', 'FatPerson', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `ID` int(11) NOT NULL,
  `ingredients` varchar(2000) NOT NULL,
  `recipe` varchar(3000) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(300) NOT NULL,
  `likes` int(11) DEFAULT '0',
  `deslikes` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `recipes`
--

INSERT INTO `recipes` (`ID`, `ingredients`, `recipe`, `name`, `description`, `likes`, `deslikes`, `views`) VALUES
(1, '1/4 xícaras de farinha trigo\r\n1/2 colher xa canela\r\n2 tabletes manteiga temperatura ambiente\r\n1 xícara açúcar refinado\r\n1/2 xicara açúcar mascavo\r\n1 colher xá fermento em pó\r\n1 Colher xá sal\r\n1 Colher xá baunilha\r\n1 colher xá bicarbonato\r\n2 ovos grandes na temperatura ambiente\r\nBater tudo sem a farinha\r\nColocar farinha e bater\r\n2 xícaras gotas 1/2 amargo\r\n1/2 xícara gotas chocolate ao leite', 'PREPARATION:\r\nPreheat oven 350°, middle rack. In a bowl, whisk cinnamon into flour. In a stand mixer with paddle, put butter, both sugars, baking soda, salt and vanilla. Beat medium just until ingredients come together as a mass.\r\nAdd eggs, one at a time, until fully incorporated, stopping to scrape sides as needed. On low, add flour and cinnamon and beat just until incorporated. Add chips and beat just until incorporated.\r\nOn 1-2 baking sheets lined with parchment, drop batter by heaping tablespoon, up to 15 per sheet. Bake 13-15 minutes, turning midway until just golden brown on edges. Let cool on rackes', 'Tacos', 'Really tasty tacos, it''s unbeliveble... you must try', 486, 42, 511),
(43, 'Ingredientes:\r\nEggs\r\nFlour\r\nWater\r\nMilk\r\nVanilla Extract', 'Mix all those things then bake it.', 'Cake', 'Tasty', 4, 5, 37),
(96, 'Bolo', 'Mistur tudo', 'Bolo Tatu Pixuleco', 'Feito especialmente para meu sobrinho Felipe quando do seu 37o. aniversário', 1, 0, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
