/**
 * 183. 从不订购的客户
SQL架构
某网站包含两个表，Customers 表和 Orders 表。编写一个 SQL 查询，找出所有从不订购任何东西的客户。

Customers 表：

+----+-------+
| Id | Name  |
+----+-------+
| 1  | Joe   |
| 2  | Henry |
| 3  | Sam   |
| 4  | Max   |
+----+-------+
Orders 表：

+----+------------+
| Id | CustomerId |
+----+------------+
| 1  | 3          |
| 2  | 1          |
+----+------------+
例如给定上述表格，你的查询应返回：

+-----------+
| Customers |
+-----------+
| Henry     |
| Max       |
+-----------+
 * @type {[type]}
 */


 -- ----------------------------
 -- Table structure for Customers_183
 -- ----------------------------
 DROP TABLE IF EXISTS `Customers_183`;
 CREATE TABLE `Customers_183` (
   `Id` int(11) NOT NULL AUTO_INCREMENT,
   `Name` varchar(10) DEFAULT NULL,
   PRIMARY KEY (`Id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8;

 DROP TABLE IF EXISTS `Orders_183`;
 CREATE TABLE `Orders_183` (
   `Id` int(11) NOT NULL AUTO_INCREMENT,
   `CustomerId` int(10) DEFAULT 0,
   PRIMARY KEY (`Id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `chnitarvin`.`Customers_183` (`Id`, `Name`) VALUES ('1', 'Joe');
INSERT INTO `chnitarvin`.`Customers_183` (`Id`, `Name`) VALUES ('2', 'Henry');
INSERT INTO `chnitarvin`.`Customers_183` (`Id`, `Name`) VALUES ('3', 'Sam');
INSERT INTO `chnitarvin`.`Customers_183` (`Id`, `Name`) VALUES ('4', 'Max');



INSERT INTO `chnitarvin`.`Orders_183` (`Id`, `CustomerId`) VALUES ('1', '3');
INSERT INTO `chnitarvin`.`Orders_183` (`Id`, `CustomerId`) VALUES ('2', '1');


{"headers": {"Customers": ["Id", "Name"], "Orders": ["Id", "CustomerId"]}, "rows": {"Customers": [[1, "James"], [2, "James"]], "Orders": [[1, 1]]}}


-- 测试
{"headers": {"Customers": ["Id", "Name"], "Orders": ["Id", "CustomerId"]}, "rows": {"Customers": [[1, "Joe"], [2, "Henry"], [3, "Sam"], [4, "Max"]], "Orders": [[1, 3], [2, 1]]}}

-- 结论
{"headers": ["Customers"], "values": [["Henry"], ["Max"]]}

-- 解答
SELECT Name as Customers FROM Customers_183 where Id NOT IN (SELECT Customers_183.Id FROM Customers_183 RIGHT JOIN Orders_183 ON Customers_183.Id = Orders_183.CustomerId);
