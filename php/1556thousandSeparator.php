<?php
/**
 * 1556. 千位分隔数
难度
简单

10

收藏

分享
切换为英文
接收动态
反馈
给你一个整数 n，请你每隔三位添加点（即 "." 符号）作为千位分隔符，并将结果以字符串格式返回。



示例 1：

输入：n = 987
输出："987"
示例 2：

输入：n = 1234
输出："1.234"
示例 3：

输入：n = 123456789
输出："123.456.789"
示例 4：

输入：n = 0
输出："0"


提示：

0 <= n < 2^31
 */
class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function thousandSeparator($n) {
        $s_rev = strrev($n);
        $num = 0;
        $new_ = '';
        for ($i=0; $i < strlen($s_rev); $i++) {
            if ($num && ($num % 3) === 0) $new_ .= '.';
            $num += 1;
            $new_ .= $s_rev[$i];
        }
        return strrev($new_);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = 123456789;
$res = $object->thousandSeparator($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
