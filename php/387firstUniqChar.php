<?php
/**
 * 387. 字符串中的第一个唯一字符
难度
简单

426

收藏

分享
切换为英文
接收动态
反馈
给定一个字符串，找到它的第一个不重复的字符，并返回它的索引。如果不存在，则返回 -1。



示例：

s = "leetcode"
返回 0

s = "loveleetcode"
返回 2


提示：你可以假定该字符串只包含小写字母。

 */
class Solution {


    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $keys = [];
        foreach (array_count_values(str_split($s)) as $key => $item) if ($item == 1 && !in_array($key, $keys)) $keys[] = $key;
        if (!count($keys)) return -1;
        $result = [];
        foreach ($keys as $key => $vm) {
            $temp = $s;
            $_ = str_replace($vm, '', $temp, $k);
            if ($k == 1) $result[] = strpos($s, $vm);
        }
        return min($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "loveleetcode";
$res = $object->firstUniqChar($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
