/**
 * 627. 交换工资
SQL架构
给定一个 salary 表，如下所示，有 m = 男性 和 f = 女性 的值。交换所有的 f 和 m 值（例如，将所有 f 值更改为 m，反之亦然）。要求只使用一个更新（Update）语句，并且没有中间的临时表。

注意，您必只能写一个 Update 语句，请不要编写任何 Select 语句。

例如：

| id | name | sex | salary |
|----|------|-----|--------|
| 1  | A    | m   | 2500   |
| 2  | B    | f   | 1500   |
| 3  | C    | m   | 5500   |
| 4  | D    | f   | 500    |
运行你所编写的更新语句之后，将会得到以下表:

| id | name | sex | salary |
|----|------|-----|--------|
| 1  | A    | f   | 2500   |
| 2  | B    | m   | 1500   |
| 3  | C    | f   | 5500   |
| 4  | D    | m   | 500    |
 * @type {[type]}
 */


 -- ----------------------------
 -- Table structure for salary_627
 -- ----------------------------
 DROP TABLE IF EXISTS `salary_627`;
 CREATE TABLE `salary_627` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `name` varchar(10) DEFAULT NULL,
   `sex` varchar(10) DEFAULT NULL,
   `salary` decimal(10,2) DEFAULT NULL,
   PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `chnitarvin`.`salary_627` (`id`, `name`, `sex`, `salary`) VALUES ('1', 'A', 'm', '2500.00');
INSERT INTO `chnitarvin`.`salary_627` (`id`, `name`, `sex`, `salary`) VALUES ('2', 'B', 'f', '1500.00');
INSERT INTO `chnitarvin`.`salary_627` (`id`, `name`, `sex`, `salary`) VALUES ('3', 'C', 'm', '5500.00');
INSERT INTO `chnitarvin`.`salary_627` (`id`, `name`, `sex`, `salary`) VALUES ('4', 'D', 'f', '500.00');


-- 测试
{"headers":{"salary":["id","name","sex","salary"]},"rows":{"salary":[[1,"A","m",2500],[2,"B","f",1500],[3,"C","m",5500],[4,"D","f",500]]}}

-- 结论
{"headers": ["id", "name", "sex", "salary"], "values": [[1, "A", "f", 2500], [2, "B", "m", 1500], [3, "C", "f", 5500], [4, "D", "m", 500]]}

-- 解答
update salary_627 set sex = case sex when "m" then "f" else "m" end;
