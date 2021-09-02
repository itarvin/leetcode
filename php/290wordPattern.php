<?php
/*
* 290. 单词规律
难度
简单

369

收藏

分享
切换为英文
接收动态
反馈
给定一种规律 pattern 和一个字符串 str ，判断 str 是否遵循相同的规律。

这里的 遵循 指完全匹配，例如， pattern 里的每个字母和字符串 str 中的每个非空单词之间存在着双向连接的对应规律。

示例1:

输入: pattern = "abba", str = "dog cat cat dog"
输出: true
示例 2:

输入:pattern = "abba", str = "dog cat cat fish"
输出: false
示例 3:

输入: pattern = "aaaa", str = "dog cat cat dog"
输出: false
示例 4:

输入: pattern = "abba", str = "dog dog dog dog"
输出: false
说明:
你可以假设 pattern 只包含小写字母， str 包含了由单个空格分隔的小写字母。
  */
class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $s_array = explode(' ', $s);
        $data = [];
        foreach ($s_array as $key => $item) $data[] = ['key' => $s[$i], 'word' => $item];
        var_dump($data);die;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$pattern = "abba";
$str = "dog cat cat dog";
$res = $object->wordPattern($patterns, $str);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
