SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `asgard` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `asgard`;

CREATE TABLE IF NOT EXISTS `acronyms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `acronyms` (`id`, `name`) VALUES
(1, 'ARC');

CREATE TABLE IF NOT EXISTS `details` (
  `acronym_id` int(11) NOT NULL,
  `expansion` text NOT NULL,
  `description` text NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `description_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`description_id`),
  KEY `acronym_id` (`acronym_id`),
  KEY `description_id` (`description_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `details` (`acronym_id`, `expansion`, `description`, `confirmed`, `description_id`) VALUES
(1, 'Advanced RISC Computing', 'Computer architecture type', 1, 1),
(1, 'American Recording Company', 'Record label', 0, 2);


ALTER TABLE `details`
  ADD CONSTRAINT `fk_acronym_id` FOREIGN KEY (`acronym_id`) REFERENCES `acronyms` (`id`);
