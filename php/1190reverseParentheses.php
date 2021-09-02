<?php
/*
* 1190. 反转每对括号间的子串
难度
中等

194

收藏

分享
切换为英文
接收动态
反馈
给出一个字符串 s（仅含有小写英文字母和括号）。

请你按照从括号内到外的顺序，逐层反转每对匹配括号中的字符串，并返回最终的结果。

注意，您的结果中 不应 包含任何括号。



示例 1：

输入：s = "(abcd)"
输出："dcba"
示例 2：

输入：s = "(u(love)i)"
输出："iloveu"
解释：先反转子字符串 "love" ，然后反转整个字符串。
示例 3：

输入：s = "(ed(et(oc))el)"
输出："leetcode"
解释：先反转子字符串 "oc" ，接着反转 "etco" ，然后反转整个字符串。
示例 4：

输入：s = "a(bcdefghijkl(mno)p)q"
输出："apmnolkjihgfedcbq"


提示：

0 <= s.length <= 2000
s 中只有小写英文字母和括号
题目测试用例确保所有括号都是成对出现的
通过次数43,077提交次数66,149
  */
class Solution {
    /**
     * @param String $s
     * @return String
     */
    function reverseParentheses($s) {
        $s = str_replace('()', '', $s);
        $data = [];
        for ($i=0; $i < strlen($s); $i++) if ($s[$i] == '(' || $s[$i] == ')') $data[] = $i;
        var_dump($data);die;
        for ($i=0; $i < count($left); $i++) {
            $temp = substr($s, $left[$i] + 1, ($right[$i] - $left[$i]) - 1);
            $s = str_replace('('.$temp.')', '-'.strrev($temp).'-', $s);
        }
        return str_replace('-', '', $s);
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "ta()usw((((a))))";
$res = $object->reverseParentheses($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
