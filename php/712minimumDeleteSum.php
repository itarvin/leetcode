<?php
/**
 * 890. 查找和替换模式
难度
中等

104

收藏

分享
切换为英文
接收动态
反馈
你有一个单词列表 words 和一个模式  pattern，你想知道 words 中的哪些单词与模式匹配。

如果存在字母的排列 p ，使得将模式中的每个字母 x 替换为 p(x) 之后，我们就得到了所需的单词，那么单词与模式是匹配的。

（回想一下，字母的排列是从字母到字母的双射：每个字母映射到另一个字母，没有两个字母映射到同一个字母。）

返回 words 中与给定模式匹配的单词列表。

你可以按任何顺序返回答案。



示例：

输入：words = ["abc","deq","mee","aqq","dkd","ccc"], pattern = "abb"
输出：["mee","aqq"]
解释：
"mee" 与模式匹配，因为存在排列 {a -> m, b -> e, ...}。
"ccc" 与模式不匹配，因为 {a -> c, b -> c, ...} 不是排列。
因为 a 和 b 映射到同一个字母。


提示：

1 <= words.length <= 50
1 <= pattern.length = words[i].length <= 20
通过次数8,560提交次数11,793
 */
/*
*
*/
 class Solution {
     /**
     * @param String $s1
     * @param String $s2
     * @return Integer
     */
    function minimumDeleteSum($s1, $s2) {
        $azs = [];
        for($i=ord('a'); $i<=ord('z'); $i++) $azs[chr($i)] = $i;

        $s1_array = $s2_array = [];
        for ($i=0; $i < strlen($s1); $i++) $s1_array[] = $azs[$s1[$i]];
        for ($i=0; $i < strlen($s2); $i++) $s2_array[] = $azs[$s2[$i]];
        var_dump($s1_array, $s2_array);die;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s1 = "sea";
$s2 = "eat";
$res = $object->minimumDeleteSum($s1, $s2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
