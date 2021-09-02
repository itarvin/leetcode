<?php
/**
 *1945. 字符串转化后的各位数字之和
难度
简单

4

收藏

分享
切换为英文
接收动态
反馈
给你一个由小写字母组成的字符串 s ，以及一个整数 k 。

首先，用字母在字母表中的位置替换该字母，将 s 转化 为一个整数（也就是，'a' 用 1 替换，'b' 用 2 替换，... 'z' 用 26 替换）。接着，将整数 转换 为其 各位数字之和 。共重复 转换 操作 k 次 。

例如，如果 s = "zbax" 且 k = 2 ，那么执行下述步骤后得到的结果是整数 8 ：

转化："zbax" ➝ "(26)(2)(1)(24)" ➝ "262124" ➝ 262124
转换 #1：262124 ➝ 2 + 6 + 2 + 1 + 2 + 4 ➝ 17
转换 #2：17 ➝ 1 + 7 ➝ 8
返回执行上述操作后得到的结果整数。



示例 1：

输入：s = "iiii", k = 1
输出：36
解释：操作如下：
- 转化："iiii" ➝ "(9)(9)(9)(9)" ➝ "9999" ➝ 9999
- 转换 #1：9999 ➝ 9 + 9 + 9 + 9 ➝ 36
因此，结果整数为 36 。
示例 2：

输入：s = "leetcode", k = 2
输出：6
解释：操作如下：
- 转化："leetcode" ➝ "(12)(5)(5)(20)(3)(15)(4)(5)" ➝ "12552031545" ➝ 12552031545
- 转换 #1：12552031545 ➝ 1 + 2 + 5 + 5 + 2 + 0 + 3 + 1 + 5 + 4 + 5 ➝ 33
- 转换 #2：33 ➝ 3 + 3 ➝ 6
因此，结果整数为 6 。


提示：

1 <= s.length <= 100
1 <= k <= 10
s 由小写英文字母组成
 */
/*
*
*/
class Solution {

    /**
    * @param String $s
    * @param Integer $k
    * @return Integer
    */
    function getLucky($s, $k) {
        $s_array = str_split($s);
        $az = 'abcdefghijklmnopqrstuvwxyz';
        for ($i=1; $i < strlen($az) + 1; $i++) $azs[$az[$i - 1]] = $i;
        foreach ($s_array as $key => $item) $string_num .= $azs[$item];
        $count = $this->deep($string_num, $k);
        return $count;
    }
    function deep($string, $k)
    {
        if ($k) $count = array_sum(str_split($string));
        $k -= 1;
        if ($k > 0) return $this->deep($count, $k);
        return $count;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "leetcode";
$k = 2;
$res = $object->getLucky($s, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
