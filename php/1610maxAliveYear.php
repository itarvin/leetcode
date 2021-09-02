<?php
/*
* 面试题 16.10. 生存人数
给定N个人的出生年份和死亡年份，第i个人的出生年份为birth[i]，死亡年份为death[i]，实现一个方法以计算生存人数最多的年份。

你可以假设所有人都出生于1900年至2000年（含1900和2000）之间。如果一个人在某一年的任意时期都处于生存状态，那么他们应该被纳入那一年的统计中。例如，生于1908年、死于1909年的人应当被列入1908年和1909年的计数。

如果有多个年份生存人数相同且均为最大值，输出其中最小的年份。

示例：

输入：
birth = {1900, 1901, 1950}
death = {1948, 1951, 2000}
输出： 1901
提示：

0 < birth.length == death.length <= 10000
birth[i] <= death[i]
  */
class Solution {
    /**
     * @param Integer[] $birth
     * @param Integer[] $death
     * @return Integer
     */
    function maxAliveYear($birth, $death) {
        for ($i=1900; $i <= 2000; $i++) {
            $allYear[$i] = 0;
        }
        for ($i=0; $i < count($birth); $i++) {
            foreach (range($birth[$i], $death[$i]) as $key => $range) {
                $allYear[$range] += 1;
            }
        }
        return array_search(max($allYear), $allYear);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$birth = [1972,1908,1915,1957,1960,1948,1912,1903,1949,1977,1900,1957,1934,1929,1913,1902,1903,1901];
$death = [1997,1932,1963,1997,1983,2000,1926,1962,1955,1997,1998,1989,1992,1975,1940,1903,1983,1969];
$res = $object->maxAliveYear($birth, $death);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
