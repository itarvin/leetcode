<?php
/*
* 557. 反转字符串中的单词 III
给定一个字符串，你需要反转字符串中每个单词的字符顺序，同时仍保留空格和单词的初始顺序。



示例：

输入："Let's take LeetCode contest"
输出："s'teL ekat edoCteeL tsetnoc"


提示：

在字符串中，每个单词由单个空格分隔，并且字符串中不会有任何额外的空格。
  */
class Solution {
    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $sArr = explode(' ', $s);
        foreach ($sArr as $key => $item) {
            $sArr[$key] = strrev($item);
        }
        return implode(' ', $sArr);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = "Let's take LeetCode contest";
$res = $object->reverseWords($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
