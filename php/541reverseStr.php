<?php
/**
 * 541. 反转字符串 II
难度
简单

139

收藏

分享
切换为英文
接收动态
反馈
给定一个字符串 s 和一个整数 k，从字符串开头算起，每 2k 个字符反转前 k 个字符。

如果剩余字符少于 k 个，则将剩余字符全部反转。
如果剩余字符小于 2k 但大于或等于 k 个，则反转前 k 个字符，其余字符保持原样。


示例 1：

输入：s = "abcdefg", k = 2
输出："bacdfeg"
示例 2：

输入：s = "abcd", k = 2
输出："bacd"


提示：

1 <= s.length <= 104
s 仅由小写英文组成
1 <= k <= 104
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        $len = strlen($s);
        for ($i=0; $i < $k; $i++) {
            $endkey = $k * $i + $k;
            var_dump($endkey);
        }

    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "abcdefg";
$k = 2;
$res = $object->reverseStr($s, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
