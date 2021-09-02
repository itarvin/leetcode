<?php
/*
* 给定一个正整数，返回它在 Excel 表中相对应的列名称。

例如，

    1 -> A
    2 -> B
    3 -> C
    ...
    26 -> Z
    27 -> AA
    28 -> AB
    ...
示例 1:

输入: 1
输出: "A"
示例 2:

输入: 28
输出: "AB"
示例 3:

输入: 701
输出: "ZY"
  */
class Solution {
    /**
     * @param Integer $n
     * @return String
     */
    function convertToTitle($n) {
        if($n<=0) return "";
        $myDict = range('A','Z');
        $myDicts = [];
        foreach ($myDict as $key => $item) {
            $myDicts[$key + 1] = $item;
        }
        $result = '';
        while ($n > 26){
            $auxiliary1 = $n % 26;
            if ($auxiliary1 == 0){
                $result = $result . $myDicts[26];
                $n = $n / 26 - 1;
            }else {
                $result = $result . $myDicts[$auxiliary1];
                $n = $n / 26;
            }
        }
        $result = $result . $myDicts[$n];
        return strrev($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = 28;
$res = $object->convertToTitle($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
