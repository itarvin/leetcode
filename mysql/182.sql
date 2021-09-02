-- ----------------------------
-- Table structure for person_email
-- ----------------------------
DROP TABLE IF EXISTS `person_email`;
CREATE TABLE `person_email` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of person_email
-- ----------------------------
INSERT INTO `person_email` VALUES ('1', 'a@b.com');
INSERT INTO `person_email` VALUES ('2', 'c@d.com');
INSERT INTO `person_email` VALUES ('3', 'a@b.com');

-- 测试
{"headers": {"Person": ["Id", "Email"]}, "rows": {"Person": [[1, "a@b.com"], [2, "c@d.com"], [3, "a@b.com"]]}}


-- 结论
{"headers": ["Email"], "values": [["a@b.com"]]}

-- 解答
select Email from Person_email group by Email having count(*) > 1
