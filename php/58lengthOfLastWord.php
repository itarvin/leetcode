<?php
/*
* 58. 最后一个单词的长度
给定一个仅包含大小写字母和空格 ' ' 的字符串 s，返回其最后一个单词的长度。如果字符串从左向右滚动显示，那么最后一个单词就是最后出现的单词。

如果不存在最后一个单词，请返回 0 。

说明：一个单词是指仅由字母组成、不包含任何空格字符的 最大子字符串。



示例:

输入: "Hello World"
输出: 5
  * }
  */
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        if (!$s) {
            return 0;
        }
        $stringArr = array_filter(explode(' ', $s));
        if (!count($stringArr)) {
            return 0;
        }
        foreach ($stringArr as $key => $item) {
            $stringArr[$key] = count(str_split($item));
        }
        $stringArr = array_values($stringArr);
        return count($stringArr) ? $stringArr[count($stringArr) - 1] : $stringArr[0];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$s = "   ";
$res = $object->lengthOfLastWord($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
