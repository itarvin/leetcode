<?php
/**
 * 17. 电话号码的字母组合
难度
中等

1464

收藏

分享
切换为英文
接收动态
反馈
给定一个仅包含数字 2-9 的字符串，返回所有它能表示的字母组合。答案可以按 任意顺序 返回。

给出数字到字母的映射如下（与电话按键相同）。注意 1 不对应任何字母。





示例 1：

输入：digits = "23"
输出：["ad","ae","af","bd","be","bf","cd","ce","cf"]
示例 2：

输入：digits = ""
输出：[]
示例 3：

输入：digits = "2"
输出：["a","b","c"]


提示：

0 <= digits.length <= 4
digits[i] 是范围 ['2', '9'] 的一个数字。
通过次数321,395提交次数562,368
 */
/*
*
*/
 class Solution {

     /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        $data = [
            '2' => ['a', 'b', 'c'],
            '3' => ['d', 'e', 'f'],
            '4' => ['g', 'h', 'i'],
            '5' => ['j', 'k', 'l'],
            '6' => ['m', 'n', 'o'],
            '7' => ['p', 'q', 'r', 's'],
            '8' => ['t', 'u', 'v'],
            '9' => ['w', 'x', 'y', 'z']
        ];
        $res = $result = [];
        for ($i=0; $i < strlen($digits); $i++) $res[] = $data[$digits[$i]];
        foreach ($res as $key => $item) $result = $this->deep($item, $result);
        return $result;
    }
    function deep($array, $result = []){
        if (!$result) return $array;
        $result_new = [];
        foreach ($result as $key => $item) for ($i=0; $i < count($array); $i++) $result_new[] = $item.$array[$i];
        return $result_new;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$digits = "2346";
$res = $object->letterCombinations($digits);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
