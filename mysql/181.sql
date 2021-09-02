-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ManagerId` int(11) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', 'Joe', '3', '70000.00');
INSERT INTO `employee` VALUES ('2', 'Henry', '4', '80000.00');
INSERT INTO `employee` VALUES ('3', 'Sam', null, '60000.00');
INSERT INTO `employee` VALUES ('4', 'Max', null, '90000.00');


Select e1.Name as Employee from Employee e1 join Employee e2  on e1.ManagerId = e2.Id and e1.Salary > e2.Salary
