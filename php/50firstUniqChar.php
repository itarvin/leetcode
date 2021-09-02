<?php
/*
* 剑指 Offer 50. 第一个只出现一次的字符
在字符串 s 中找出第一个只出现一次的字符。如果没有，返回一个单空格。 s 只包含小写字母。

示例:

s = "abaccdeff"
返回 "b"

s = ""
返回 " "


限制：

0 <= s 的长度 <= 50000
  * }
  */
class Solution {
    /**
     * @param String $s
     * @return String
     */
    function firstUniqChar($s) {
        if (!$s) {
            return ' ';
        }
        $strArr = str_split($s);
        $arrCount = array_count_values($strArr);
        foreach ($strArr as $key => $item) {
            if (array_key_exists($item, $arrCount)) {
                if ($arrCount[$item] == 1) {
                    return $item;
                }
            }
        }
        return ' ';
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$s = "cc";
$res = $object->firstUniqChar($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
