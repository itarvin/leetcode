<?php
/**
 * 166. 分数到小数
难度
中等

246

收藏

分享
切换为英文
接收动态
反馈
给定两个整数，分别表示分数的分子 numerator 和分母 denominator，以 字符串形式返回小数 。

如果小数部分为循环小数，则将循环的部分括在括号内。

如果存在多个答案，只需返回 任意一个 。

对于所有给定的输入，保证 答案字符串的长度小于 104 。



示例 1：

输入：numerator = 1, denominator = 2
输出："0.5"
示例 2：

输入：numerator = 2, denominator = 1
输出："2"
示例 3：

输入：numerator = 2, denominator = 3
输出："0.(6)"
示例 4：

输入：numerator = 4, denominator = 333
输出："0.(012)"
示例 5：

输入：numerator = 1, denominator = 5
输出："0.2"


提示：

-231 <= numerator, denominator <= 231 - 1
denominator != 0
通过次数25,620提交次数85,839
/*
*
*/
 class Solution {

     /**
     * @param Integer $numerator
     * @param Integer $denominator
     * @return String
     */
    function fractionToDecimal($numerator, $denominator) {
        $result = $numerator / $denominator;
        if (strlen($result) > 10 && strpos($result, '.') !== false) {
            $result_new = [];
            $result = number_format($numerator / $denominator, 20);
            $result_array = explode('.', $result);
            $right = $result_array[1];
            $left = $result_array[0];
            $result_new[] = $left.".";
            $temp_ = $temp_new = '';
            for ($i=0; $i < strlen($right); $i++) {
                $temp_ .= $right[$i];
                $temp_new = $right[$i];
                if (strpos($right, str_repeat($temp_, 2)) !== false){
                    $result_new[] = '('.$temp_ .')';
                    return join("", $result_new);
                }
                $result_new[] = $right[$i];
                if (strpos($right, str_repeat($temp_new, 3) !== false)) {
                    $result_new[] = '('.$temp_new .')';
                    return join("", $result_new);
                }

            }
        }
        return (string)$result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$numerator = 1;
$denominator = 6;
$res = $object->fractionToDecimal($numerator, $denominator);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
