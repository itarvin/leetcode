<?php
/**
 * 884. 两句话中的不常见单词
难度
简单

92

收藏

分享
切换为英文
接收动态
反馈
给定两个句子 A 和 B 。 （句子是一串由空格分隔的单词。每个单词仅由小写字母组成。）

如果一个单词在其中一个句子中只出现一次，在另一个句子中却没有出现，那么这个单词就是不常见的。

返回所有不常用单词的列表。

您可以按任何顺序返回列表。



示例 1：

输入：A = "this apple is sweet", B = "this apple is sour"
输出：["sweet","sour"]
示例 2：

输入：A = "apple apple", B = "banana"
输出：["banana"]


提示：

0 <= A.length <= 200
0 <= B.length <= 200
A 和 B 都只包含空格和小写字母。
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    function uncommonFromSentences($s1, $s2) {
        $s1_array = explode(' ', $s1);
        $s2_array = explode(' ', $s2);
        $s1_s = array_values(array_diff($s1_array, $s2_array));
        foreach ($s1_s as $key => $item) $diff[] = $item;
        $s2_s = array_values(array_diff($s2_array, $s1_array));
        foreach ($s2_s as $key => $item) $diff[] = $item;
        $result = [];
        foreach (array_count_values($diff) as $key => $item) if ($item == 1) $result[] = $key;
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s1 = "apple apple";
$s2 = "banana";
$res = $object->uncommonFromSentences($s1, $s2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
