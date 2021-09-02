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
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function CheckPermutation($s1, $s2) {
		$s1Arr = array_count_values(str_split($s1));
		$s2Arr = array_count_values(str_split($s2));
		ksort($s1Arr);
		ksort($s2Arr);
		return count(array_diff_assoc($s1Arr, $s2Arr)) == 0 ? True : False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s1="abb";
$s2="aab";
$res = $object->CheckPermutation($s1, $s2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
