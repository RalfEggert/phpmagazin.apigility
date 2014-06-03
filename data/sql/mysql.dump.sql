SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `bets`;

CREATE TABLE IF NOT EXISTS `bets` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `match` smallint(5) unsigned NOT NULL,
  `goals1` smallint(5) unsigned NOT NULL,
  `goals2` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `match` (`match`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='FIFA WM 2014 Bets' AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `matches`;

CREATE TABLE IF NOT EXISTS `matches` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `team1` char(3) NOT NULL,
  `team2` char(3) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team1` (`team1`),
  KEY `team2` (`team2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='FIFA WM 2014 Matches' AUTO_INCREMENT=49 ;

INSERT INTO `matches` (`id`, `team1`, `team2`, `date`) VALUES
(1, 'bra', 'cro', '2014-06-12'),
(2, 'mex', 'cmr', '2014-06-13'),
(3, 'esp', 'ned', '2014-06-13'),
(4, 'chi', 'aus', '2014-06-13'),
(5, 'col', 'gre', '2014-06-14'),
(6, 'civ', 'jpn', '2014-06-14'),
(7, 'uru', 'crc', '2014-06-14'),
(8, 'eng', 'ita', '2014-06-14'),
(9, 'sui', 'ecu', '2014-06-15'),
(10, 'fra', 'hon', '2014-06-15'),
(11, 'arg', 'bih', '2014-06-15'),
(12, 'irn', 'nga', '2014-06-16'),
(13, 'ger', 'por', '2014-06-16'),
(14, 'gha', 'usa', '2014-06-16'),
(15, 'bel', 'alg', '2014-06-17'),
(16, 'rus', 'kor', '2014-06-17'),
(17, 'bra', 'mex', '2014-06-17'),
(18, 'cmr', 'cro', '2014-06-18'),
(19, 'esp', 'chi', '2014-06-18'),
(20, 'aus', 'ned', '2014-06-18'),
(21, 'col', 'civ', '2014-06-19'),
(22, 'jpn', 'gre', '2014-06-19'),
(23, 'uru', 'eng', '2014-06-19'),
(24, 'ita', 'crc', '2014-06-20'),
(25, 'sui', 'fra', '2014-06-20'),
(26, 'hon', 'ecu', '2014-06-20'),
(27, 'arg', 'irn', '2014-06-21'),
(28, 'nga', 'bih', '2014-06-21'),
(29, 'ger', 'gha', '2014-06-21'),
(30, 'usa', 'por', '2014-06-22'),
(31, 'bel', 'rus', '2014-06-22'),
(32, 'kor', 'alg', '2014-06-22'),
(33, 'cmr', 'bra', '2014-06-23'),
(34, 'cro', 'mex', '2014-06-23'),
(35, 'aus', 'esp', '2014-06-23'),
(36, 'ned', 'chi', '2014-06-23'),
(37, 'jpn', 'col', '2014-06-24'),
(38, 'civ', 'gre', '2014-06-24'),
(39, 'ita', 'uru', '2014-06-24'),
(40, 'crc', 'eng', '2014-06-24'),
(41, 'hon', 'sui', '2014-06-25'),
(42, 'ecu', 'fra', '2014-06-25'),
(43, 'nga', 'arg', '2014-06-25'),
(44, 'bih', 'irn', '2014-06-25'),
(45, 'usa', 'ger', '2014-06-26'),
(46, 'por', 'gha', '2014-06-26'),
(47, 'kor', 'bel', '2014-06-26'),
(48, 'alg', 'rus', '2014-06-26');

DROP TABLE IF EXISTS `teams`;

CREATE TABLE IF NOT EXISTS `teams` (
  `id` char(3) NOT NULL,
  `title` varchar(36) NOT NULL,
  `code` char(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='FIFA WM 2014 Teams ';

INSERT INTO `teams` (`id`, `title`, `code`) VALUES
('alg', 'Algerien', 'ALG'),
('arg', 'Argentinien', 'ARG'),
('aus', 'Australien', 'AUS'),
('bel', 'Belgien', 'BEL'),
('bih', 'Bosnien-Herzegowina', 'BIH'),
('bra', 'Brasilien', 'BRA'),
('chi', 'Chile', 'CHI'),
('civ', 'Elfenbeinküste', 'CIV'),
('cmr', 'Kamerun', 'CMR'),
('col', 'Kolumbien', 'COL'),
('crc', 'Costa Rica', 'CRC'),
('cro', 'Kroatien', 'CRO'),
('ecu', 'Ecuador', 'ECU'),
('eng', 'England', 'ENG'),
('esp', 'Spanien', 'ESP'),
('fra', 'Frankreich', 'FRA'),
('ger', 'Deutschland', 'GER'),
('gha', 'Ghana', 'GHA'),
('gre', 'Griechenland', 'GRE'),
('hon', 'Honduras', 'HON'),
('irn', 'Iran', 'IRN'),
('ita', 'Italien', 'ITA'),
('jpn', 'Japan', 'JPN'),
('kor', 'Südkorea', 'KOR'),
('mex', 'Mexiko', 'MEX'),
('ned', 'Niederlande', 'NED'),
('nga', 'Nigeria', 'NGA'),
('por', 'Portugal', 'POR'),
('rus', 'Russland', 'RUS'),
('sui', 'Schweiz', 'SUI'),
('uru', 'Uruguay', 'URU'),
('usa', 'USA', 'USA');

ALTER TABLE `bets`
  ADD CONSTRAINT `bets_ibfk_1` FOREIGN KEY (`match`) REFERENCES `matches` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`team1`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`team2`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

SET FOREIGN_KEY_CHECKS=1;
