<?php
/*
* 给定两个字符串形式的非负整数 num1 和num2 ，计算它们的和。
* 提示：
*
* num1 和num2 的长度都小于 5100
* num1 和num2 都只包含数字 0-9
* num1 和num2 都不包含任何前导零
* 你不能使用任何內建 BigInteger 库， 也不能直接将输入的字符串转换为整数形式
  * }
  */
 class Solution {

    /**
    * @param String $haystack
    * @param String $needle
    * @return Integer
    */
    function strStr($haystack, $needle) {
        if(!$needle) return 0;
        $foundKey = strpos($haystack, $needle);
        if ($foundKey === false) return -1;
        return $foundKey;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$haystack = "";
$needle  = "a";
$res = $object->strStr($haystack, $needle);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
