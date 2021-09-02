<?php
/*
*面试题 01.02. 判定是否互为字符重排
给定两个字符串 s1 和 s2，请编写一个程序，确定其中一个字符串的字符重新排列后，能否变成另一个字符串。

示例 1：

输入: s1 = "abc", s2 = "bca"
输出: true
示例 2：

输入: s1 = "abc", s2 = "bad"
输出: false
说明：

0 <= len(s1) <= 100
0 <= len(s2) <= 100
 */
class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function getRow($rowIndex) {
        $triangle = [];
        for ($i = 0; $i <= $rowIndex; $i++) {
            $tmp = [1];
            for ($j = 0; $j < $i; $j++) {
                if ($j == $i - 1) {
                    $tmp[] = $triangle[$i - 1][$j];
                } else {
                    $tmp[] = $triangle[$i - 1][$j] + $triangle[$i - 1][$j + 1];
                }
            }
            $triangle[$i] = $tmp;
        }
        return $triangle[$rowIndex];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$rowIndex = 3;
$res = $object->getRow($rowIndex);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
