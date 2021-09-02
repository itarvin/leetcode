<?php
/**
 * 692. 前K个高频单词
难度
中等

379

收藏

分享
切换为英文
接收动态
反馈
给一非空的单词列表，返回前 k 个出现次数最多的单词。

返回的答案应该按单词出现频率由高到低排序。如果不同的单词有相同出现频率，按字母顺序排序。

示例 1：

输入: ["i", "love", "leetcode", "i", "love", "coding"], k = 2
输出: ["i", "love"]
解析: "i" 和 "love" 为出现次数最多的两个单词，均为2次。
    注意，按字母顺序 "i" 在 "love" 之前。


示例 2：

输入: ["the", "day", "is", "sunny", "the", "the", "the", "sunny", "is", "is"], k = 4
输出: ["the", "is", "sunny", "day"]
解析: "the", "is", "sunny" 和 "day" 是出现次数最多的四个单词，
    出现次数依次为 4, 3, 2 和 1 次。


注意：

假定 k 总为有效值， 1 ≤ k ≤ 集合元素数。
输入的单词均由小写字母组成。


扩展练习：

尝试以 O(n log k) 时间复杂度和 O(n) 空间复杂度解决。
通过次数65,301提交次数112,541
 */
/*
*
*/
 class Solution {

     /**
     * @param String[] $words
     * @param Integer $k
     * @return String[]
     */
    function topKFrequent($words, $k) {
        $words_array = array_count_values($words);
        arsort($words_array);
        $keys = array_keys($words_array);
        $values = array_values($words_array);
        for ($i=0; $i < count($words_array); $i++) $result[$values[$i]][] = $keys[$i];
        $res = [];
        foreach ($result as $key => $item) {
            sort($item);
            $res = array_merge($res, $item);
        }
        return array_slice($res, 0, $k);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$words = ["the","day","is","sunny","the","the","the","sunny","is","is"];
$k = 4;
$res = $object->topKFrequent($words, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
