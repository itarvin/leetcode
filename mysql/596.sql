-- ----------------------------
-- Table structure for courses
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('1', 'A', 'Math');
INSERT INTO `courses` VALUES ('2', 'B', 'English');
INSERT INTO `courses` VALUES ('3', 'C', 'Math');
INSERT INTO `courses` VALUES ('4', 'D', 'Biology');
INSERT INTO `courses` VALUES ('5', 'E', 'Math');
INSERT INTO `courses` VALUES ('6', 'F', 'Computer');
INSERT INTO `courses` VALUES ('7', 'G', 'Math');
INSERT INTO `courses` VALUES ('8', 'H', 'Math');
INSERT INTO `courses` VALUES ('9', 'I', 'Math');



["A", "Math"],
["B", "English"],
["C", "Math"],
["D", "Biology"],
["E", "Math"],
["F", "Math"],
["A", "Math"]


SELECT
	class
FROM
	(
		SELECT
			class,
			COUNT
		FROM
			(
				SELECT
					class,
					count(*) COUNT
				FROM
					courses
				GROUP BY
					class
			) cc
		ORDER BY
			COUNT DESC
		LIMIT 1
	) bb
