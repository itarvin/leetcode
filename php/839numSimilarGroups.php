<?php
/**
 * 839. 相似字符串组
难度
困难

125

收藏

分享
切换为英文
接收动态
反馈
如果交换字符串 X 中的两个不同位置的字母，使得它和字符串 Y 相等，那么称 X 和 Y 两个字符串相似。如果这两个字符串本身是相等的，那它们也是相似的。

例如，"tars" 和 "rats" 是相似的 (交换 0 与 2 的位置)； "rats" 和 "arts" 也是相似的，但是 "star" 不与 "tars"，"rats"，或 "arts" 相似。

总之，它们通过相似性形成了两个关联组：{"tars", "rats", "arts"} 和 {"star"}。注意，"tars" 和 "arts" 是在同一组中，即使它们并不相似。形式上，对每个组而言，要确定一个单词在组中，只需要这个词和该组中至少一个单词相似。

给你一个字符串列表 strs。列表中的每个字符串都是 strs 中其它所有字符串的一个字母异位词。请问 strs 中有多少个相似字符串组？



示例 1：

输入：strs = ["tars","rats","arts","star"]
输出：2
示例 2：

输入：strs = ["omv","ovm"]
输出：1


提示：

1 <= strs.length <= 300
1 <= strs[i].length <= 300
strs[i] 只包含小写字母。
strs 中的所有单词都具有相同的长度，且是彼此的字母异位词。


备注：

      字母异位词（anagram），一种把某个字符串的字母的位置（顺序）加以改换所形成的新词。

通过次数18,827提交次数32,767
 */
/*
*
*/
 class Solution {

     /**
     * @param String[] $strs
     * @return Integer
     */
    function numSimilarGroups($strs) {
        $data = [];
        for ($i=0; $i < count($strs); $i++) {
            $temp = $strs[$i];
            $temp_array = str_split($temp);
            sort($temp_array);
            var_dump($temp_array);
        }
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$strs = ["tars","rats","arts","star"];
$res = $object->numSimilarGroups($strs);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
