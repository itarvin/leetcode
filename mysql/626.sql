/**
 * 626. 换座位
SQL架构
小美是一所中学的信息科技老师，她有一张 seat 座位表，平时用来储存学生名字和与他们相对应的座位 id。

其中纵列的 id 是连续递增的

小美想改变相邻俩学生的座位。

你能不能帮她写一个 SQL query 来输出小美想要的结果呢？



示例：

+---------+---------+
|    id   | student |
+---------+---------+
|    1    | Abbot   |
|    2    | Doris   |
|    3    | Emerson |
|    4    | Green   |
|    5    | Jeames  |
+---------+---------+
假如数据输入的是上表，则输出结果如下：

+---------+---------+
|    id   | student |
+---------+---------+
|    1    | Doris   |
|    2    | Abbot   |
|    3    | Green   |
|    4    | Emerson |
|    5    | Jeames  |
+---------+---------+
注意：

如果学生人数是奇数，则不需要改变最后一个同学的座位。
 * @type {[type]}
 */



DROP TABLE IF EXISTS `seat_626`;
CREATE TABLE `seat_626` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `chnitarvin`.`seat_626` (`id`, `student`) VALUES ('1', 'Abbot');
INSERT INTO `chnitarvin`.`seat_626` (`id`, `student`) VALUES ('2', 'Doris');
INSERT INTO `chnitarvin`.`seat_626` (`id`, `student`) VALUES ('3', 'Emerson');
INSERT INTO `chnitarvin`.`seat_626` (`id`, `student`) VALUES ('4', 'Green');
INSERT INTO `chnitarvin`.`seat_626` (`id`, `student`) VALUES ('5', 'Jeames');


-- 测试
{"headers": {"Person": ["PersonId", "LastName", "FirstName"], "Address": ["AddressId", "PersonId", "City", "State"]}, "rows": {"Person": [[1, "Wang", "Allen"]], "Address": [[1, 2, "New York City", "New York"]]}}


-- 结论
{"headers": ["FirstName", "LastName", "City", "State"], "values": [["Allen", "Wang", null, null]]}

-- 解答

SELECT
    (CASE
        WHEN MOD(id,2)!=0 AND counts!=id THEN id+1
        WHEN MOD(ID,2)!=0 AND counts=id THEN id
        ELSE id-1
    END) AS id,student
FROM
    seat_626,
    (SELECT
        COUNT(*) AS counts
     FROM
        seat_626) AS seat_counts
ORDER BY id ASC;


SELECT
    (CASE
        WHEN MOD(id,2)!=0 AND counts!=id THEN id+1
        WHEN MOD(ID,2)!=0 AND counts=id THEN id
        ELSE id-1
    END) AS id,student
FROM
    seat,
    (SELECT
        COUNT(*) AS counts
     FROM
        seat) AS seat_counts
ORDER BY id ASC;
