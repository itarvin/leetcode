<?php
/**
 * 139. 单词拆分
难度
中等

1135

收藏

分享
切换为英文
接收动态
反馈
给定一个非空字符串 s 和一个包含非空单词的列表 wordDict，判定 s 是否可以被空格拆分为一个或多个在字典中出现的单词。

说明：

拆分时可以重复使用字典中的单词。
你可以假设字典中没有重复的单词。
示例 1：

输入: s = "leetcode", wordDict = ["leet", "code"]
输出: true
解释: 返回 true 因为 "leetcode" 可以被拆分成 "leet code"。
示例 2：

输入: s = "applepenapple", wordDict = ["apple", "pen"]
输出: true
解释: 返回 true 因为 "applepenapple" 可以被拆分成 "apple pen apple"。
     注意你可以重复使用字典中的单词。
示例 3：

输入: s = "catsandog", wordDict = ["cats", "dog", "sand", "and", "cat"]
输出: false
通过次数179,963提交次数350,997
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    function wordBreak($s, $wordDict) {
        $wordDict0 = $wordDict;
        sort($wordDict0);
        $temp = $temp0 = $s;
        $num = 0;
        for ($i=0; $i < count($wordDict); $i++) {
            $item = $wordDict[$i];
            $item0 = $wordDict0[$i];
            if (strpos($temp, $item) !== False) $temp = str_replace($item, '', $temp, $k);
            $num += $k;
        }
        if ($temp == '' || $temp0 == '' && $num) return True;
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "cbca";
$wordDict = ["bc","ca"];
$res = $object->wordBreak($s, $wordDict);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
