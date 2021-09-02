<?php
/*
* 1309. 解码字母到整数映射
难度
简单

44

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 s，它由数字（'0' - '9'）和 '#' 组成。我们希望按下述规则将 s 映射为一些小写英文字符：

字符（'a' - 'i'）分别用（'1' - '9'）表示。
字符（'j' - 'z'）分别用（'10#' - '26#'）表示。
返回映射之后形成的新字符串。

题目数据保证映射始终唯一。



示例 1：

输入：s = "10#11#12"
输出："jkab"
解释："j" -> "10#" , "k" -> "11#" , "a" -> "1" , "b" -> "2".
示例 2：

输入：s = "1326#"
输出："acz"
示例 3：

输入：s = "25#"
输出："y"
示例 4：

输入：s = "12345678910#11#12#13#14#15#16#17#18#19#20#21#22#23#24#25#26#"
输出："abcdefghijklmnopqrstuvwxyz"


提示：

1 <= s.length <= 1000
s[i] 只包含数字（'0'-'9'）和 '#' 字符。
s 是映射始终存在的有效字符串。
  */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function freqAlphabets($s) {
        // for($i=ord('a');$i<=ord('z');$i++) $azs .= chr($i);
        $azs_array = [];
        $azs = 'abcdefghijklmnopqrstuvwxyz';
        for ($i=strlen($azs); $i > 0 ; $i--) $azs_array[$azs[$i - 1]] = strlen($i) == 2 ? $i.'#' : $i;
        foreach ($azs_array as $key => $item) $s = str_replace($item, $key, $s);
        return $s;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "12345678910#11#12#13#14#15#16#17#18#19#20#21#22#23#24#25#26#";
$res = $object->freqAlphabets($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
