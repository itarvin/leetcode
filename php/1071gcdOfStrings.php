<?php
/**
 * 1071. 字符串的最大公因子
难度
简单

205

收藏

分享
切换为英文
接收动态
反馈
对于字符串 S 和 T，只有在 S = T + ... + T（T 自身连接 1 次或多次）时，我们才认定 “T 能除尽 S”。

返回最长字符串 X，要求满足 X 能除尽 str1 且 X 能除尽 str2。



示例 1：

输入：str1 = "ABCABC", str2 = "ABC"
输出："ABC"
示例 2：

输入：str1 = "ABABAB", str2 = "ABAB"
输出："AB"
示例 3：

输入：str1 = "LEET", str2 = "CODE"
输出：""


提示：

1 <= str1.length <= 1000
1 <= str2.length <= 1000
str1[i] 和 str2[i] 为大写英文字母
 */
/*
*
*/
 class Solution {

     /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        $res_str = '';
        for ($i=0; $i < strlen($str2); $i++) {
            $res_str .= $str2[$i];
            $last1_str = str_replace($res_str, "", $str1);
            $last2_str = str_replace($res_str, "", $str2);
            if (($last1_str == '') && ($last1_str == $last2_str)) return $res_str;
        }
        return '';
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$str1 = "TAUXXTAUXXTAUXXTAUXXTAUXX";
$str2 = "TAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXX";
$res = $object->gcdOfStrings($str1, $str2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
