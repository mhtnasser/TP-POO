-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `communaute`;
CREATE TABLE `communaute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `communaute` (`id`, `name`) VALUES
(1,	'PHP'),
(2,	'HTML/CSS'),
(3,	'JavaScript'),
(4,	'Symfony');

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `id_communaute` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_communaute` (`id_communaute`),
  CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`id_communaute`) REFERENCES `communaute` (`id`),
  CONSTRAINT `meeting_ibfk_3` FOREIGN KEY (`id_communaute`) REFERENCES `communaute` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `meeting` (`id`, `titre`, `description`, `start_date`, `end_date`, `id_communaute`) VALUES
(1,	'PHP 7',	'PHP 7 Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles.',	'2017-02-17 10:30:22',	'2017-02-21 12:30:22',	1),
(2,	'meeting HTML/CSS',	'HTML CSS Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles.',	'2017-01-02 10:30:22',	'2017-01-12 12:30:22',	2),
(3,	'meeting JavaScript',	'JavaSript Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique.',	'2017-03-02 10:30:22',	'2017-03-21 12:30:22',	3),
(4,	'meeting Symfony',	'Symfony Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles.',	'2017-04-02 10:30:22',	'2017-04-21 12:30:22',	4);

DROP TABLE IF EXISTS `organisateur`;
CREATE TABLE `organisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `id_meeting` int(11) NOT NULL,
  `badge` varchar(255) NOT NULL,
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_meeting` (`id_meeting`),
  CONSTRAINT `organisateur_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  CONSTRAINT `organisateur_ibfk_2` FOREIGN KEY (`id_meeting`) REFERENCES `meeting` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `organisateur` (`id_utilisateur`, `id_meeting`, `badge`) VALUES
(1,	1,	'badge meeting PHP7 - 1'),
(2,	1,	'badge meeting PHP7 - 2'),
(3,	2,	'badge meeting HTML/CSS - 1'),
(4,	2,	'badge meeting HTML/CSS - 2'),
(8,	3,	'badge meeting JavaScript - 1'),
(9,	3,	'badge meeting JavaScript - 2'),
(4,	4,	'badge meeting Symfony - 1'),
(5,	4,	'badge meeting Symfony - 2');

DROP TABLE IF EXISTS `Participe`;
CREATE TABLE `Participe` (
  `id_utilisateur` int(11) NOT NULL,
  `id_meeting` int(11) NOT NULL,
  `invitation` varchar(255) NOT NULL,
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_meeting` (`id_meeting`),
  CONSTRAINT `Participe_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  CONSTRAINT `Participe_ibfk_2` FOREIGN KEY (`id_meeting`) REFERENCES `meeting` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Participe` (`id_utilisateur`, `id_meeting`, `invitation`) VALUES
(3,	1,	'2'),
(4,	1,	'2'),
(5,	1,	'2'),
(6,	1,	'2'),
(7,	1,	'2'),
(8,	1,	'2'),
(9,	1,	'2'),
(10,	1,	'2'),
(1,	2,	'2'),
(2,	2,	'2'),
(5,	2,	'2'),
(6,	2,	'2'),
(7,	2,	'2'),
(10,	3,	'2'),
(1,	3,	'2'),
(2,	3,	'2'),
(3,	3,	'2'),
(6,	4,	'2'),
(7,	4,	'2'),
(8,	4,	'2'),
(9,	4,	'2'),
(10,	4,	'2');

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `utilisateur` (`id`, `first_name`, `last_name`) VALUES
(1,	'John',	'Doe'),
(2,	'Thomas',	'Dutron'),
(3,	'Grafikart',	'you tuber'),
(4,	'Gary',	'McKinnon'),
(5,	'rob',	'Allen'),
(6,	'Gary ',	'hockin'),
(7,	'Mattieu',	'Napoli'),
(8,	'Chis ',	'Cornutt'),
(9,	'Rafaël ',	'Goetter'),
(10,	'Alexandro ',	'Celaya ');

-- 2017-12-22 22:53:00