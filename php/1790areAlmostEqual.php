<?php
/**
 * 1790. 仅执行一次字符串交换能否使两个字符串相等
难度
简单

14

收藏

分享
切换为英文
接收动态
反馈
给你长度相等的两个字符串 s1 和 s2 。一次 字符串交换 操作的步骤如下：选出某个字符串中的两个下标（不必不同），并交换这两个下标所对应的字符。

如果对 其中一个字符串 执行 最多一次字符串交换 就可以使两个字符串相等，返回 true ；否则，返回 false 。



示例 1：

输入：s1 = "bank", s2 = "kanb"
输出：true
解释：例如，交换 s2 中的第一个和最后一个字符可以得到 "bank"
示例 2：

输入：s1 = "attack", s2 = "defend"
输出：false
解释：一次字符串交换无法使两个字符串相等
示例 3：

输入：s1 = "kelb", s2 = "kelb"
输出：true
解释：两个字符串已经相等，所以不需要进行字符串交换
示例 4：

输入：s1 = "abcd", s2 = "dcba"
输出：false


提示：

1 <= s1.length, s2.length <= 100
s1.length == s2.length
s1 和 s2 仅由小写英文字母组成
 */
class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function areAlmostEqual($s1, $s2) {
        if ($s1 == $s2) return True;
        $s1_array = str_split($s1);
        for ($i=0; $i < strlen($s1); $i++) {
            for ($j=$i + 1; $j < strlen($s1); $j++) {
                $temp = $s1_array;
                $temp[$i] = $s1_array[$j];
                $temp[$j] = $s1_array[$i];
                if (join("", $temp) == $s2) return True;
            }
        }
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s1 = "abcd";
$s2 = "dcba";
$res = $object->areAlmostEqual($s1, $s2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
