<?php
/**
 * 1016. 子串能表示从 1 到 N 数字的二进制串
难度
中等

30

收藏

分享
切换为英文
接收动态
反馈
给定一个二进制字符串 S（一个仅由若干 '0' 和 '1' 构成的字符串）和一个正整数 N，如果对于从 1 到 N 的每个整数 X，其二进制表示都是 S 的子串，就返回 true，否则返回 false。



示例 1：

输入：S = "0110", N = 3
输出：true
示例 2：

输入：S = "0110", N = 4
输出：false


提示：

1 <= S.length <= 1000
1 <= N <= 10^9
通过次数5,058提交次数8,671
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @param Integer $n
     * @return Boolean
     */
    function queryString($s, $n) {
        for ($i = floor($n/2) + 1; $i < $n+1; $i++) if (strpos($s, decbin($i)) === False) return False;
        return True;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "0110";
$n = 3;
$res = $object->queryString($s, $n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
