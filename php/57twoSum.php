<?php
/**
 * 1446. 连续字符
难度
简单

19

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 s ，字符串的「能量」定义为：只包含一种字符的最长非空子字符串的长度。

请你返回字符串的能量。



示例 1：

输入：s = "leetcode"
输出：2
解释：子字符串 "ee" 长度为 2 ，只包含字符 'e' 。
示例 2：

输入：s = "abbcccddddeeeeedcba"
输出：5
解释：子字符串 "eeeee" 长度为 5 ，只包含字符 'e' 。
示例 3：

输入：s = "triplepillooooow"
输出：5
示例 4：

输入：s = "hooraaaaaaaaaaay"
输出：11
示例 5：

输入：s = "tourist"
输出：1


提示：

1 <= s.length <= 500
s 只包含小写英文字母。
 */
/*
*
*/
 class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for ($i=0; $i < count($nums); $i++) {
            for ($j=count($nums); $j > 0 ; $j--) {
                if ($nums[$i] + $nums[$j] == $target) return [$nums[$i], $nums[$j]];
            }
        }
        return [];
    }
    /*function twoSum($nums, $target) {
        for ($i=0; $i < count($nums); $i++) {
            $item_ = $nums[$i];
            $diff = array_search(($target - $item_), $nums);
            if ($diff) return [$nums[$diff], $item_];
        }
        return [];
    }*/
    // function twoSum($nums, $target) {
    //     for ($i=0; $i < count($nums); $i++) {
    //         for ($j=$i + 1; $j < count($nums); $j++) {
    //             if ($nums[$i] + $nums[$j] == $target) return [$nums[$i], $nums[$j]];
    //         }
    //     }
    //     return [];
    // }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [2,7,11,15];
$target = 9;
$res = $object->twoSum($nums, $target);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
