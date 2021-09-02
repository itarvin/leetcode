DELETE
FROM
	Person
WHERE
	Id NOT IN (
		SELECT
			Id
		FROM
			(
				SELECT
					MIN(Id) id
				FROM
					Person
				GROUP BY
					`Email`
			) cc
	);
