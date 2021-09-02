<?php
/**
 * 1869. 哪种连续子字符串更长
难度
简单

10

收藏

分享
切换为英文
接收动态
反馈
给你一个二进制字符串 s 。如果字符串中由 1 组成的 最长 连续子字符串 严格长于 由 0 组成的 最长 连续子字符串，返回 true ；否则，返回 false 。

例如，s = "110100010" 中，由 1 组成的最长连续子字符串的长度是 2 ，由 0 组成的最长连续子字符串的长度是 3 。
注意，如果字符串中不存在 0 ，此时认为由 0 组成的最长连续子字符串的长度是 0 。字符串中不存在 1 的情况也适用此规则。



示例 1：

输入：s = "1101"
输出：true
解释：
由 1 组成的最长连续子字符串的长度是 2："1101"
由 0 组成的最长连续子字符串的长度是 1："1101"
由 1 组成的子字符串更长，故返回 true 。
示例 2：

输入：s = "111000"
输出：false
解释：
由 1 组成的最长连续子字符串的长度是 3："111000"
由 0 组成的最长连续子字符串的长度是 3："111000"
由 1 组成的子字符串不比由 0 组成的子字符串长，故返回 false 。
示例 3：

输入：s = "110100010"
输出：false
解释：
由 1 组成的最长连续子字符串的长度是 2："110100010"
由 0 组成的最长连续子字符串的长度是 3："110100010"
由 1 组成的子字符串不比由 0 组成的子字符串长，故返回 false 。


提示：

1 <= s.length <= 100
s[i] 不是 '0' 就是 '1'
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @return Boolean
     */
    function checkZeroOnes($s) {
        $zero = $this->deep($s, 0);
        $ones = $this->deep($s, 1);
        var_dump($ones, $zero);die;
        if ($ones > $zero) return True;
        return False;
    }

    function deep($s, $hit){
        $len = strlen($s);
        $result = [0];
        $temp = 0;
        for ($i=0; $i < $len; $i++) {
            $left = $s[$i];
            if ($len > 1) {
                for ($j=$i + 1; $j < $len; $j++) {
                    $right = $s[$j];
                    if ($left == $right && $right == $hit) {
                        $temp += 1;
                        $result[] = $temp;
                    }else $temp = 0; break;
                }
            }elseif ($left == $hit) $result[] = 1;
        }
        return max($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "1";
$res = $object->checkZeroOnes($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
