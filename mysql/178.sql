/**
 * 178. 分数排名
SQL架构
编写一个 SQL 查询来实现分数排名。

如果两个分数相同，则两个分数排名（Rank）相同。请注意，平分后的下一个名次应该是下一个连续的整数值。换句话说，名次之间不应该有“间隔”。

+----+-------+
| Id | Score |
+----+-------+
| 1  | 3.50  |
| 2  | 3.65  |
| 3  | 4.00  |
| 4  | 3.85  |
| 5  | 4.00  |
| 6  | 3.65  |
+----+-------+
例如，根据上述给定的 Scores 表，你的查询应该返回（按分数从高到低排列）：

+-------+------+
| Score | Rank |
+-------+------+
| 4.00  | 1    |
| 4.00  | 1    |
| 3.85  | 2    |
| 3.65  | 3    |
| 3.65  | 3    |
| 3.50  | 4    |
+-------+------+
重要提示：对于 MySQL 解决方案，如果要转义用作列名的保留字，可以在关键字之前和之后使用撇号。例如 `Rank`
 * @type {[type]}
 */



DROP TABLE IF EXISTS `Scores_178`;
CREATE TABLE `Scores_178` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Score` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `chnitarvin`.`Scores_178` (`id`, `Score`) VALUES ('1', '3.50');
INSERT INTO `chnitarvin`.`Scores_178` (`id`, `Score`) VALUES ('2', '3.65');
INSERT INTO `chnitarvin`.`Scores_178` (`id`, `Score`) VALUES ('3', '4.00');
INSERT INTO `chnitarvin`.`Scores_178` (`id`, `Score`) VALUES ('4', '3.85');
INSERT INTO `chnitarvin`.`Scores_178` (`id`, `Score`) VALUES ('5', '4.00');
INSERT INTO `chnitarvin`.`Scores_178` (`id`, `Score`) VALUES ('6', '3.65');


-- 测试
{"headers": {"Person": ["PersonId", "LastName", "FirstName"], "Address": ["AddressId", "PersonId", "City", "State"]}, "rows": {"Person": [[1, "Wang", "Allen"]], "Address": [[1, 2, "New York City", "New York"]]}}


-- 结论
{"headers": ["FirstName", "LastName", "City", "State"], "values": [["Allen", "Wang", null, null]]}

-- 解答

SELECT
	u.Id,
	u.Score,
	(@rank := @rank + 1) AS Rank
FROM
	(
		SELECT
			*
		FROM
			Scores_178
		ORDER BY
			Score DESC
	) u,
	(SELECT @rank := 0) r;

-- 详解
SELECT
	u.Score,
	CASE
WHEN @last_score = u.Score THEN
	@rank
WHEN @last_score := u.Score THEN
	@rank := @rank + 1
END AS "Rank"
FROM
	(
		SELECT
			*
		FROM
			Scores_178
		ORDER BY
			Score DESC
	) u,
	(SELECT @rank := 0) r;
