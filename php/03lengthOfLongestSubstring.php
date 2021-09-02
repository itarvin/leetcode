<?php
/*
* 给定一个字符串，请你找出其中不含有重复字符的 最长子串 的长度。
*/

/**
 *  示例 1:
 *  输入: "abcabcbb"
 *  输出: 3
 *  解释: 因为无重复字符的最长子串是 "abc"，所以其长度为 3。
 *  示例 2:
 *
 *  输入: "bbbbb"
 *  输出: 1
 *  解释: 因为无重复字符的最长子串是 "b"，所以其长度为 1。
 *  示例 3:
 *
 *  输入: "pwwkew"
 *  输出: 3
 *  解释: 因为无重复字符的最长子串是 "wke"，所以其长度为 3。
 *       请注意，你的答案必须是 子串 的长度，"pwke" 是一个子序列，不是子串。
 */
class Solution {
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        if ($len) {
            $arr = [];
            $arr[strlen($s)] = $s;
            for ($i = 1; $i <= $len; $i++) {
                for($j = 1; $j<= $len; $j++) {
                    //从第0个开始依次截取到最大长度，然后从第一个开始...依次截取
                    if ($tmp_str = substr($s,$i,$j)) {
                        if ($this->checks($tmp_str) !== false) {
                            $arr[strlen($tmp_str)] = $tmp_str;
                        }
                    }
                }
            }
            $maxLength = $arr[max(array_keys($arr))];
            return count(str_split($maxLength));
        }
        return 0;
    }

    //此方法用来验证是否包括重复的字符串
    function checks($str){

        $arr = str_split($str);
        $arr_len = count($arr);
        $tmp_len = count(array_unique($arr));

        if ($arr_len  == $tmp_len) {
            return true;
        }
        return false;

    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = 'au';
$res = $object->lengthOfLongestSubstring($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
