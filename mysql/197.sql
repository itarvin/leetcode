/**
 * 197. 上升的温度
SQL架构
给定一个 Weather 表，编写一个 SQL 查询，来查找与之前（昨天的）日期相比温度更高的所有日期的 Id。

+---------+------------------+------------------+
| Id(INT) | RecordDate(DATE) | Temperature(INT) |
+---------+------------------+------------------+
|       1 |       2015-01-01 |               10 |
|       2 |       2015-01-02 |               25 |
|       3 |       2015-01-03 |               20 |
|       4 |       2015-01-04 |               30 |
+---------+------------------+------------------+
例如，根据上述给定的 Weather 表格，返回如下 Id:

+----+
| Id |
+----+
|  2 |
|  4 |
+----+
 * @type {[type]}
 */


 -- ----------------------------
 -- Table structure for Weather_197
 -- ----------------------------
 DROP TABLE IF EXISTS `Weather_197`;
 CREATE TABLE `Weather_197` (
   `Id` int(11) NOT NULL AUTO_INCREMENT,
   `RecordDate` datetime,
   `Temperature` int(10) DEFAULT 0,
   PRIMARY KEY (`Id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `chnitarvin`.`Weather_197` (`Id`, `RecordDate`, `Temperature`) VALUES ('1', '2015-01-01', '10');
INSERT INTO `chnitarvin`.`Weather_197` (`Id`, `RecordDate`, `Temperature`) VALUES ('2', '2015-01-02', '25');
INSERT INTO `chnitarvin`.`Weather_197` (`Id`, `RecordDate`, `Temperature`) VALUES ('3', '2015-01-03', '20');
INSERT INTO `chnitarvin`.`Weather_197` (`Id`, `RecordDate`, `Temperature`) VALUES ('4', '2015-01-04', '30');


-- 测试
{"headers": {"Weather": ["Id", "RecordDate", "Temperature"]}, "rows": {"Weather": [[1, "2015-01-01", 10], [2, "2015-01-02", 25], [3, "2015-01-03", 20], [4, "2015-01-04", 30]]}}

{"headers": {"Weather": ["Id", "RecordDate", "Temperature"]}, "rows": {"Weather": [[1, "2000-12-14", 3], [2, "2000-12-16", 5]]}}

-- 结论
{"headers": ["Id"], "values": [[2], [4]]}

{"headers":["Id"],"values":[]}

-- 解答
SELECT
	b.id
FROM
	Weather_197 AS A
INNER JOIN Weather_197 AS B ON A.Temperature < b.Temperature
AND DATEDIFF(b.recordDate, a.recordDate) = 1



SELECT
	b.id
FROM
	Weather AS A
INNER JOIN Weather AS B ON A.Temperature < b.Temperature
AND DATEDIFF(b.recordDate, a.recordDate) = 1
