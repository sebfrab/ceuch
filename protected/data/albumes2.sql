-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-12-2013 a las 10:13:30
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ceuchnew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE IF NOT EXISTS `albumes` (
  `idalbumes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `ano` varchar(7) DEFAULT NULL,
  `portada` varchar(250) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`idalbumes`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Volcar la base de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`idalbumes`, `titulo`, `ano`, `portada`, `fecha`) VALUES
(1, 'Old School', '-2004', '23543_102563853118658_100000951315648_18168_748812_n.jpg', '2013-12-23 13:36:04'),
(2, 'Varias', '2004', '5530_120882509597_631904597_2159507_1915824_n.jpg', '2013-12-23 13:52:58'),
(3, 'Varias', '2005', '5530_120882544597_631904597_2159513_1964486_n.jpg', '2013-12-23 13:54:54'),
(4, 'Campamento', '2005', '197367_1019086402544_1386661173_50298_1764_n.jpg', '2013-12-23 13:55:35'),
(5, 'Imposiciones', '2005', '45677_139510936090616_100000951315648_180336_2225055_n.jpg', '2013-12-23 13:57:36'),
(6, 'Campamento', '2006', '13063_205724884597_631904597_2808245_4843120_n.jpg', '2013-12-23 13:59:29'),
(7, 'Varias', '2006', 'a631904597_523062_36.jpg', '2013-12-23 14:00:04'),
(8, 'Campamento', '2007', '205435_1019078962358_1386661173_50209_759_n.jpg', '2013-12-23 14:03:24'),
(9, 'Imposiciones', '2007', '198899_1019082322442_1386661173_50261_3245_n.jpg', '2013-12-23 14:03:50'),
(10, 'Varias', '2007', '1194230760_f.jpg', '2013-12-23 14:04:15'),
(11, 'Campamento', '2008', '199747_1021304851325_1186291491_59692_3423_n.jpg', '2013-12-23 14:10:16'),
(12, 'Imposiciones', '2008', 'n633299132_694006_9610.jpg', '2013-12-23 14:10:42'),
(13, 'Planificación guias', '2008', '217250_1034237494633_1186291491_93058_5104_n.jpg', '2013-12-23 14:13:23'),
(14, 'Varias', '2008', '206236_1028883883157_1257136978_78288_6484_n.jpg', '2013-12-23 14:13:51'),
(15, 'Campamento', '2009', 'n1255718590_248900_8552.jpg', '2013-12-23 14:17:18'),
(16, 'Caminata', '2009', '16158_1276662674564_1169891162_30873128_5293432_n.jpg', '2013-12-23 14:17:41'),
(17, 'Fiesta drisfraces', '2009', '6369_115229294560_631254560_1955739_2637470_n.jpg', '2013-12-23 14:18:20'),
(18, 'Futbol', '2009', '14338_210514134560_631254560_2857183_6041854_n.jpg', '2013-12-23 14:19:07'),
(19, 'Imposiciones', '2009', '6927_139423814654_630909654_2443196_6777866_n.jpg', '2013-12-23 14:23:46'),
(20, 'Paseo fin de año', '2009', '20357_259282089126_633359126_3241798_3118706_n.jpg', '2013-12-23 14:25:18'),
(21, 'Vis crucis', '2009', 'a1255718590_378944_7738812.jpg', '2013-12-23 14:26:34'),
(22, 'Act. post ceuch', '2010', '28481_388950839654_630909654_3798858_3582259_n.jpg', '2013-12-23 14:37:05'),
(23, 'Ayuda al Sur', '2010', '26799_1434265936486_1228069141_31300536_2468666_n.jpg', '2013-12-23 14:38:03'),
(24, 'Bienvenida', '2010', '25407_1433482114952_1169891162_31305509_1387403_n.jpg', '2013-12-23 14:40:05'),
(25, 'Caminata', '2010', '73445_157947977580245_100000951315648_256346_7079486_n.jpg', '2013-12-23 14:40:37'),
(26, 'Fiesta de disfraces', '2010', '37473_1533268772534_1259235197_1501048_1415377_n.jpg', '2013-12-23 14:43:00'),
(27, 'Imposiciones', '2010', '35947_440303338608_662388608_4741052_5146720_n.jpg', '2013-12-23 14:43:26'),
(28, 'Niños', '2010', '67287_152714514770258_100000951315648_233003_4358532_n.jpg', '2013-12-23 14:45:32'),
(29, 'Jardin Botanico', '2010', '62971_1638703689764_1301912784_1718746_2164789_n.jpg', '2013-12-23 14:46:04'),
(30, 'Sábado santo', '2010', '28481_388961209654_630909654_3799132_415956_n.jpg', '2013-12-23 14:48:30'),
(31, 'Teletón', '2010', '65797_164524726922570_100000951315648_289390_30942_n.jpg', '2013-12-23 14:48:57'),
(32, 'Varias', '2010', '69425_1576418883546_1027827968_3363529_5639468_n.jpg', '2013-12-23 14:51:14'),
(33, 'Vía crucis', '2010', '28481_388968044654_630909654_3799536_5648173_n.jpg', '2013-12-23 14:52:15'),
(34, 'Aniversario parroquia', '2011', 'IMG272.jpg', '2013-12-23 15:03:09'),
(35, 'Campamento, bautizo', '2011', '180430_1837289977435_1396065689_3995732_1356806_n.jpg', '2013-12-23 15:03:43'),
(36, 'Campamento, show', '2011', '167148_1837270216941_1396065689_3995630_7223027_n.jpg', '2013-12-23 15:04:15'),
(37, 'Varias', '2011', '190062_2876370227459_1206060217_101465475_8008074_n.jpg', '2013-12-23 15:05:18'),
(38, 'Día de la mamá', '2011', '230683_2051989898997_1222005974_2466618_1905897_n.jpg', '2013-12-23 15:07:30'),
(39, 'Domingo de ramos', '2011', '215817_10150168687414598_631904597_6556354_621157_n.jpg', '2013-12-24 10:29:48'),
(40, 'Fin primer semestre', '2011', '262212_10150254877429127_633359126_7449220_2653297_n.jpg', '2013-12-24 10:30:48'),
(41, 'Jornada guías', '2011', '281225_10150261957224127_633359126_7509581_3019244_n.jpg', '2013-12-24 10:31:59'),
(42, 'Junta ahijados', '2011', '181937_1874976753055_1200289490_32275894_6677240_n.jpg', '2013-12-24 10:32:26'),
(43, 'Otra junta más', '2011', '179996_10150106557214655_630909654_6200514_5448423_n.jpg', '2013-12-24 10:33:36'),
(44, 'Misa a la Chilena', '2011', 'IMG_2337.jpg', '2013-12-24 10:34:02'),
(45, 'Paseo zoologico', '2011', 'IMG554.jpg', '2013-12-24 10:34:55'),
(46, 'Mes de María', '2011', 'DSC00348.jpg', '2013-12-24 10:35:28'),
(47, 'Taller actuación', '2011', 'IMG702.jpg', '2013-12-24 10:35:59'),
(48, 'Taller de Música', '2011', 'DSC00325.jpg', '2013-12-24 10:36:44'),
(49, 'Varias', '2011', '200467_1992185283938_1222579250_32473121_8191937_n.jpg', '2013-12-24 10:37:20'),
(50, 'Viernes Santo', '2011', '223347_2946327576349_1206060217_101540367_3049936_n.jpg', '2013-12-24 10:38:08'),
(51, 'Caminata juvenil', '2012', 'DSC05222.jpg', '2013-12-24 11:00:06'),
(52, 'Colliguay', '2012', '109.jpg', '2013-12-24 11:01:38'),
(53, 'Extreme makeover', '2012', 'DSC02400.jpg', '2013-12-24 11:02:36'),
(54, 'Imposiciones', '2012', 'DSC04546.jpg', '2013-12-24 11:03:07'),
(55, 'Jueves Santo', '2012', 'DSC02958.jpg', '2013-12-24 11:03:47'),
(56, 'Partido vs Scout', '2012', 'DSC03403.jpg', '2013-12-24 11:04:09'),
(57, 'Planificación campamento', '2012', 'DSC01139.jpg', '2013-12-24 11:04:58'),
(58, 'P. Victor Godoy', '2012', 'DSC03677.jpg', '2013-12-24 11:05:26'),
(59, 'Sábado santo', '2012', 'DSC03239.jpg', '2013-12-24 11:06:04'),
(60, 'Viernes Santo', '2012', 'DSC02994.jpg', '2013-12-24 11:06:29'),
(61, 'Vigilia Pascual', '2012', 'DSC03303.jpg', '2013-12-24 11:07:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
