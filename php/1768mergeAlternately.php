<?php
/**
 * 1768. 交替合并字符串
难度
简单

10

收藏

分享
切换为英文
接收动态
反馈
给你两个字符串 word1 和 word2 。请你从 word1 开始，通过交替添加字母来合并字符串。如果一个字符串比另一个字符串长，就将多出来的字母追加到合并后字符串的末尾。

返回 合并后的字符串 。



示例 1：

输入：word1 = "abc", word2 = "pqr"
输出："apbqcr"
解释：字符串合并情况如下所示：
word1：  a   b   c
word2：    p   q   r
合并后：  a p b q c r
示例 2：

输入：word1 = "ab", word2 = "pqrs"
输出："apbqrs"
解释：注意，word2 比 word1 长，"rs" 需要追加到合并后字符串的末尾。
word1：  a   b
word2：    p   q   r   s
合并后：  a p b q   r   s
示例 3：

输入：word1 = "abcd", word2 = "pq"
输出："apbqcd"
解释：注意，word1 比 word2 长，"cd" 需要追加到合并后字符串的末尾。
word1：  a   b   c   d
word2：    p   q
合并后：  a p b q c   d


提示：

1 <= word1.length, word2.length <= 100
word1 和 word2 由小写英文字母组成
 */
/*
*
*/
 class Solution {

     /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $end = 0;
        $result = '';
        $len1 = strlen($word1);
        $len2 = strlen($word2);
        if ($len1 <= $len2) {
            for ($i=0; $i < $len1; $i++) {
                $result .= $word1[$i];
                $result .= $word2[$i];
                $end = $i;
            }
            if ($end < $len2) for ($i=$end + 1; $i < $len2; $i++) $result .= $word2[$i];
        }else{
            for ($i=0; $i < $len2; $i++) {
                $result .= $word1[$i];
                $result .= $word2[$i];
                $end = $i;
            }
            if ($end < $len1) for ($i=$end + 1; $i < $len1; $i++) $result .= $word1[$i];
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$word1 = "abc";
$word2 = "pqr";
$res = $object->mergeAlternately($word1, $word2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
