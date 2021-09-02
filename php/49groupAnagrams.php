<?php
/**
 * 49. 字母异位词分组
难度
中等

822

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串数组，请你将 字母异位词 组合在一起。可以按任意顺序返回结果列表。

字母异位词 是由重新排列源单词的字母得到的一个新单词，所有源单词中的字母都恰好只用一次。



示例 1:

输入: strs = ["eat", "tea", "tan", "ate", "nat", "bat"]
输出: [["bat"],["nat","tan"],["ate","eat","tea"]]
示例 2:

输入: strs = [""]
输出: [[""]]
示例 3:

输入: strs = ["a"]
输出: [["a"]]


提示：

1 <= strs.length <= 104
0 <= strs[i].length <= 100
strs[i] 仅包含小写字母
通过次数222,625提交次数335,455
 */
/*
*
*/
 class Solution {

     /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $data = $result = [];
        for ($i=0; $i < count($strs); $i++) {
            $key = $strs[$i];
            $item = str_split($key);
            sort($item);
            $res_key = join('',$item);
            $data[$res_key][] = $key;
        }
        $result = array_values($data);
        var_dump($result);die;
        foreach ($data as $key => $item) $result[] = $item;
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
$res = $object->groupAnagrams($strs);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
