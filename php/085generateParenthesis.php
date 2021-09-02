<?php
/**
 * 剑指 Offer II 085. 生成匹配的括号
难度
中等

1

收藏

分享
切换为英文
接收动态
反馈
正整数 n 代表生成括号的对数，请设计一个函数，用于能够生成所有可能的并且 有效的 括号组合。



示例 1：

输入：n = 3
输出：["((()))","(()())","(())()","()(())","()()()"]
示例 2：

输入：n = 1
输出：["()"]


提示：

1 <= n <= 8


注意：本题与主站 22 题相同： https://leetcode-cn.com/problems/generate-parentheses/
 */
/*
*
*/
 class Solution {
     /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $ans = [];
        $ans = $this->dfs("", $n, $n, $ans);
        return $ans;
    }
    function dfs($tem, $left, $right, $ans = []){
        if ($left == 0 && $right == 0) $ans[] = $tem;
        if ($left < 0 || $right < 0 || $left > $right) return $ans;
        $this->dfs($tem . "(", $left-1, $right);
        $this->dfs($tem . ")", $left, $right-1);
        return $ans;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = 3;
$res = $object->generateParenthesis($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
