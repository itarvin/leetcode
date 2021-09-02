<?php
/*
* 821. 字符的最短距离
给定一个字符串 S 和一个字符 C。返回一个代表字符串 S 中每个字符到字符串 S 中的字符 C 的最短距离的数组。

示例 1:

输入: S = "loveleetcode", C = 'e'
输出: [3, 2, 1, 0, 1, 0, 0, 1, 2, 2, 1, 0]
说明:

字符串 S 的长度范围为 [1, 10000]。
C 是一个单字符，且保证是字符串 S 里的字符。
S 和 C 中的所有字母均为小写字母。
  */
class Solution {
    /**
     * @param String $S
     * @param String $C
     * @return Integer[]
     */
    function shortestToChar($S, $C) {
        $c_idx = [];
        $lenTotal = strlen($S);
        for ($i=0; $i < $lenTotal; $i++) {
            if ($S[$i] == $C) $c_idx[] = $i;
        }
        $result = [];
        for ($i=0; $i < $lenTotal; $i++) {
            $temp = [];
            for ($j=0; $j < count($c_idx); $j++) {
                $temp[] = abs($i - $c_idx[$j]);
            }
            $result[] = min($temp);
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$S = "loveleetcode";
$C = 'e';
$res = $object->shortestToChar($S, $C);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
