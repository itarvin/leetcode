<?php
/**
 * 1957. 删除字符使字符串变好
难度
简单

3

收藏

分享
切换为英文
接收动态
反馈
一个字符串如果没有 三个连续 相同字符，那么它就是一个 好字符串 。

给你一个字符串 s ，请你从 s 删除 最少 的字符，使它变成一个 好字符串 。

请你返回删除后的字符串。题目数据保证答案总是 唯一的 。



示例 1：

输入：s = "leeetcode"
输出："leetcode"
解释：
从第一组 'e' 里面删除一个 'e' ，得到 "leetcode" 。
没有连续三个相同字符，所以返回 "leetcode" 。
示例 2：

输入：s = "aaabaaaa"
输出："aabaa"
解释：
从第一组 'a' 里面删除一个 'a' ，得到 "aabaaaa" 。
从第二组 'a' 里面删除两个 'a' ，得到 "aabaa" 。
没有连续三个相同字符，所以返回 "aabaa" 。
示例 3：

输入：s = "aab"
输出："aab"
解释：没有连续三个相同字符，所以返回 "aab" 。


提示：

1 <= s.length <= 105
s 只包含小写英文字母。
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function makeFancyString($s) {
        $result = $start = $s[0];
        $num = 0;

        for ($i=0; $i < strlen($s); $i++) {
            $next = $s[$i+1];
            if ($start == $next) {
                $num += 1;
                if ($num < 2) $result = $result.$start;
            }else {
                $num = 0;
                $start = $next;
                $result = $result.$next;
            }
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "leeetcode";
$res = $object->makeFancyString($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
