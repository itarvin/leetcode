<?php
/**
 * 1844. 将所有数字用字符替换
难度
简单

8

收藏

分享
切换为英文
接收动态
反馈
给你一个下标从 0 开始的字符串 s ，它的 偶数 下标处为小写英文字母，奇数 下标处为数字。

定义一个函数 shift(c, x) ，其中 c 是一个字符且 x 是一个数字，函数返回字母表中 c 后面第 x 个字符。

比方说，shift('a', 5) = 'f' 和 shift('x', 0) = 'x' 。
对于每个 奇数 下标 i ，你需要将数字 s[i] 用 shift(s[i-1], s[i]) 替换。

请你替换所有数字以后，将字符串 s 返回。题目 保证 shift(s[i-1], s[i]) 不会超过 'z' 。



示例 1：

输入：s = "a1c1e1"
输出："abcdef"
解释：数字被替换结果如下：
- s[1] -> shift('a',1) = 'b'
- s[3] -> shift('c',1) = 'd'
- s[5] -> shift('e',1) = 'f'
示例 2：

输入：s = "a1b2c3d4e"
输出："abbdcfdhe"
解释：数字被替换结果如下：
- s[1] -> shift('a',1) = 'b'
- s[3] -> shift('b',2) = 'd'
- s[5] -> shift('c',3) = 'f'
- s[7] -> shift('d',4) = 'h'


提示：

1 <= s.length <= 100
s 只包含小写英文字母和数字。
对所有 奇数 下标处的 i ，满足 shift(s[i-1], s[i]) <= 'z' 。
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
    function replaceDigits($s) {
        $nums = preg_split("/[a-z]+?/", $s);
        $items = preg_split("/[\d+]+?/", $s);
        $result = '';
        for ($i=0; $i < count($items); $i++) $result.=  $items[$i].$this->deep($items[$i], $nums[$i + 1]);
        return $result;
    }
    function deep($item, $shifting = 0){
        if ($shifting == '') return '';
        $s_array = str_split($s);
        $azs = [];
        for($i=ord('a'); $i<=ord('z'); $i++) $azs[] = chr($i);
        $shiftkey = array_search($item, $azs) + $shifting;
        return $azs[$shiftkey];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "v0g6s4d";
$res = $object->replaceDigits($s, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
