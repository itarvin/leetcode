
DROP TABLE IF EXISTS `Person`;
CREATE TABLE `Person` (
  `PersonId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PersonId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `Address`;
CREATE TABLE `Address` (
  `AddressId` int(11) NOT NULL AUTO_INCREMENT,
  `PersonId` int(11) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`AddressId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 测试
{"headers": {"Person": ["PersonId", "LastName", "FirstName"], "Address": ["AddressId", "PersonId", "City", "State"]}, "rows": {"Person": [[1, "Wang", "Allen"]], "Address": [[1, 2, "New York City", "New York"]]}}


-- 结论
{"headers": ["FirstName", "LastName", "City", "State"], "values": [["Allen", "Wang", null, null]]}

-- 解答
SELECT FirstName,LastName,City,State FROM Person LEFT JOIN Address ON Person.PersonId = Address.PersonId;
