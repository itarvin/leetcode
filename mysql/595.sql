-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `World`;
CREATE TABLE `World` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `continent` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `population` varchar(255) DEFAULT NULL,
  `gdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


INSERT INTO `chnitarvin`.`World` (`Id`, `name`, `continent`, `area`, `population`, `gdp`) VALUES ('1', 'Afghanistan', 'Asia', ' 652230', ' 25500100', ' 20343000');
INSERT INTO `chnitarvin`.`World` (`Id`, `name`, `continent`, `area`, `population`, `gdp`) VALUES ('2', 'Albania', 'Europe', '28748', '2831741', '12960000');
INSERT INTO `chnitarvin`.`World` (`Id`, `name`, `continent`, `area`, `population`, `gdp`) VALUES ('3', 'Algeria', 'Africa', '2381741', '37100000', '188681000');
INSERT INTO `chnitarvin`.`World` (`Id`, `name`, `continent`, `area`, `population`, `gdp`) VALUES ('4', 'Andorra', 'Europe', '468', '78115', '3712000');
INSERT INTO `chnitarvin`.`World` (`Id`, `name`, `continent`, `area`, `population`, `gdp`) VALUES ('5', 'Angola', 'Africa', '1246700', '20609294', '100990000');



SELECT name, population, area FROM `World` WHERE `population` >= '25000000' OR NOT `area` >= '3000000';
