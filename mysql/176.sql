/**
 * 176. 第二高的薪水
SQL架构
编写一个 SQL 查询，获取 Employee 表中第二高的薪水（Salary） 。

+----+--------+
| Id | Salary |
+----+--------+
| 1  | 100    |
| 2  | 200    |
| 3  | 300    |
+----+--------+
例如上述 Employee 表，SQL查询应该返回 200 作为第二高的薪水。如果不存在第二高的薪水，那么查询应返回 null。

+---------------------+
| SecondHighestSalary |
+---------------------+
| 200                 |
+---------------------+
 * @type {[type]}
 */


 -- ----------------------------
 -- Table structure for employee_176
 -- ----------------------------
 DROP TABLE IF EXISTS `employee_176`;
 CREATE TABLE `employee_176` (
   `Id` int(11) NOT NULL AUTO_INCREMENT,
   `Salary` decimal(10,2) DEFAULT NULL,
   PRIMARY KEY (`Id`)
 ) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

 -- ----------------------------
 -- Records of employee_176
 -- ----------------------------
 INSERT INTO `employee_176` VALUES ('1', '100.00');
 INSERT INTO `employee_176` VALUES ('2', '200.00');
 INSERT INTO `employee_176` VALUES ('3', '300.00');



-- 测试
{"headers": {"Employee": ["Id", "Salary"]}, "rows": {"Employee": [[1, 100], [2, 200], [3, 300]]}}

-- 结论
{"headers": ["SecondHighestSalary"], "values": [[200]]}

-- 解答
SELECT
	max(Salary) SecondHighestSalary
FROM
	Employee_176
WHERE
	salary < (
		SELECT
			max(Salary)
		FROM
			Employee_176
	)
