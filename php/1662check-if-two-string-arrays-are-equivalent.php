<?php
/**
 * 给你两个字符串数组 word1 和 word2 。如果两个数组表示的字符串相同，返回 true ；否则，返回 false 。
 * 数组表示的字符串 是由数组中的所有元素 按顺序 连接形成的字符串。
 * 示例 1：
 *
 * 输入：word1 = ["ab", "c"], word2 = ["a", "bc"]
 * 输出：true
 * 解释：
 * word1 表示的字符串为 "ab" + "c" -> "abc"
 * word2 表示的字符串为 "a" + "bc" -> "abc"
 * 两个字符串相同，返回 true
 * 示例 2：
 *
 * 输入：word1 = ["a", "cb"], word2 = ["ab", "c"]
 * 输出：false
 * 示例 3：
 *
 * 输入：word1  = ["abc", "d", "defg"], word2 = ["abcddefg"]
 * 输出：true
 *
 * 提示：
 *
 * 1 <= word1.length, word2.length <= 103
 * 1 <= word1[i].length, word2[i].length <= 103
 * 1 <= sum(word1[i].length), sum(word2[i].length) <= 103
 * word1[i] 和 word2[i] 由小写字母组成
 */
/*
*
*/
class Solution {

   /**
    * @param String[] $word1
    * @param String[] $word2
    * @return Boolean
    */
    function arrayStringsAreEqual($word1, $word2) {
        if (join('', $word1) == join('', $word2)) {
            return True;
        }else {
            return False;
        }
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$word1 = ["abc", "d", "defg"];
$word2 = ["abcddefg"];
$res = $object->arrayStringsAreEqual($word1, $word2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
