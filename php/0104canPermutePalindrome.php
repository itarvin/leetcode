<?php
/**
 * 面试题 01.04. 回文排列
难度
简单

55

收藏

分享
切换为英文
接收动态
反馈
给定一个字符串，编写一个函数判定其是否为某个回文串的排列之一。

回文串是指正反两个方向都一样的单词或短语。排列是指字母的重新排列。

回文串不一定是字典当中的单词。



示例1：

输入："tactcoa"
输出：true（排列有"tacocat"、"atcocta"，等等）
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @return Boolean
     */
    function canPermutePalindrome($s) {
        $array = array_count_values(str_split($s));
        $num = 0;
        foreach ($array as $key => $item) {
            if ($item % 2 == 1) $num += 1;
            if ($num > 1) return False;
        }
        return True;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "tactcoa";
$res = $object->canPermutePalindrome($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
