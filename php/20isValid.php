<?php
/*
* 20. 有效的括号
难度
简单

2584

收藏

分享
切换为英文
接收动态
反馈
给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串 s ，判断字符串是否有效。

有效字符串需满足：

左括号必须用相同类型的右括号闭合。
左括号必须以正确的顺序闭合。


示例 1：

输入：s = "()"
输出：true
示例 2：

输入：s = "()[]{}"
输出：true
示例 3：

输入：s = "(]"
输出：false
示例 4：

输入：s = "([)]"
输出：false
示例 5：

输入：s = "{[]}"
输出：true


提示：

1 <= s.length <= 104
s 仅由括号 '()[]{}' 组成
  */
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {

    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$number = ['(',')','{','}','[',']'];
$res = $object->isValid($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
