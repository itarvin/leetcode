<?php
/*
* 921. 使括号有效的最少添加
难度
中等

95

收藏

分享
切换为英文
接收动态
反馈
给定一个由 '(' 和 ')' 括号组成的字符串 S，我们需要添加最少的括号（ '(' 或是 ')'，可以在任何位置），以使得到的括号字符串有效。

从形式上讲，只有满足下面几点之一，括号字符串才是有效的：

它是一个空字符串，或者
它可以被写成 AB （A 与 B 连接）, 其中 A 和 B 都是有效字符串，或者
它可以被写作 (A)，其中 A 是有效字符串。
给定一个括号字符串，返回为使结果字符串有效而必须添加的最少括号数。



示例 1：

输入："())"
输出：1
示例 2：

输入："((("
输出：3
示例 3：

输入："()"
输出：0
示例 4：

输入："()))(("
输出：4


提示：

S.length <= 1000
S 只包含 '(' 和 ')' 字符。


通过次数20,039提交次数27,261
  */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minAddToMakeValid($s) {
        for ($i=0; $i < strlen($s); $i++) $s = str_replace('()', '', $s);
        if (is_numeric(strpos($s, "()"))) return $this->minAddToMakeValid($s);
        return strlen($s);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "())((((()((((((()()(()))(()())()()()))))()))()())";
$res = $object->minAddToMakeValid($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
