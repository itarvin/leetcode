<?php
/**
 * 1324. 竖直打印单词
难度
中等

27

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 s。请你按照单词在 s 中的出现顺序将它们全部竖直返回。
单词应该以字符串列表的形式返回，必要时用空格补位，但输出尾部的空格需要删除（不允许尾随空格）。
每个单词只能放在一列上，每一列中也只能有一个单词。



示例 1：

输入：s = "HOW ARE YOU"
输出：["HAY","ORO","WEU"]
解释：每个单词都应该竖直打印。
 "HAY"
 "ORO"
 "WEU"
示例 2：

输入：s = "TO BE OR NOT TO BE"
输出：["TBONTB","OEROOE","   T"]
解释：题目允许使用空格补位，但不允许输出末尾出现空格。
"TBONTB"
"OEROOE"
"   T"
示例 3：

输入：s = "CONTEST IS COMING"
输出：["CIC","OSO","N M","T I","E N","S G","T"]


提示：

1 <= s.length <= 200
s 仅含大写英文字母。
题目数据保证两个单词之间只有一个空格。
通过次数5,707提交次数9,631
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @return String[]
     */
    function printVertically($s) {
        $result = $res = [];
        $s_array = explode(' ', $s);
        $count = count($s_array);
        for ($i=0; $i < $count; $i++) $res[] = strlen($s_array[$i]);
        $max = max($res);
        for ($i=0; $i < $count; $i++) {
            $item = $s_array[$i];
            $diff = $max - strlen($item);
            if ($diff > 0) $item .= str_repeat(' ', $diff);
            for ($j=0; $j < strlen($item); $j++) $result[$j] .= $item[$j];
        }
        for ($i=0; $i < count($result); $i++) $result[$i] = rtrim($result[$i]);
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "CONTEST IS COMING";
$res = $object->printVertically($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
