<?php
/**
 * 1796. 字符串中第二大的数字
难度
简单

3

收藏

分享
切换为英文
接收动态
反馈
给你一个混合字符串 s ，请你返回 s 中 第二大 的数字，如果不存在第二大的数字，请你返回 -1 。

混合字符串 由小写英文字母和数字组成。



示例 1：

输入：s = "dfa12321afd"
输出：2
解释：出现在 s 中的数字包括 [1, 2, 3] 。第二大的数字是 2 。
示例 2：

输入：s = "abc1111"
输出：-1
解释：出现在 s 中的数字只包含 [1] 。没有第二大的数字。


提示：

1 <= s.length <= 500
s 只包含小写英文字母和（或）数字。
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function secondHighest($s) {
        $nums = [];
        for ($i=0; $i < strlen($s); $i++) if (is_numeric($s[$i]) && !in_array($s[$i], $nums)) $nums[] = $s[$i];
        arsort($nums);
        $nums_new = array_values($nums);
        if (isset($nums_new[1])) return $nums_new[1];
        return -1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "sjhtz8344";
$res = $object->secondHighest($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
