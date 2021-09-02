<?php
/*
* 面试题 10.02. 变位词组
编写一种方法，对字符串数组进行排序，将所有变位词组合在一起。变位词是指字母相同，但排列不同的字符串。

注意：本题相对原题稍作修改

示例:

输入: ["eat", "tea", "tan", "ate", "nat", "bat"],
输出:
[
  ["ate","eat","tea"],
  ["nat","tan"],
  ["bat"]
]
说明：

所有输入均为小写字母。
不考虑答案输出的顺序。
  */
class Solution {
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $result = [];
        foreach($strs as $k => $item) {
            $tmp = str_split($item);
            sort($tmp);
            $tmp = implode('', $tmp);
            $result[$tmp][] = $item;
        }
        return array_values($result);
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$strs = ["paw","dad","bog","day","day","mig","len","rat"];
$res = $object->groupAnagrams($strs);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
