<?php
/*
* 面试题 16.20. T9键盘
在老式手机上，用户通过数字键盘输入，手机将提供与这些数字相匹配的单词列表。每个数字映射到0至4个字母。给定一个数字序列，实现一个算法来返回匹配单词的列表。你会得到一张含有有效单词的列表。映射如下图所示：



示例 1:

输入: num = "8733", words = ["tree", "used"]
输出: ["tree", "used"]
示例 2:

输入: num = "2", words = ["a", "b", "c", "d"]
输出: ["a", "b", "c"]
提示：

num.length <= 1000
words.length <= 500
words[i].length == num.length
num中不会出现 0, 1 这两个数字
  */
class Solution {
    /**
     * @param String $num
     * @param String[] $words
     * @return String[]
     */
    function getValidT9Words($num, $words) {
        $letter = [2 => 'abc',3 => 'def',4 => 'ghi',5 => 'jkl',6 => 'mno',7 => 'pqrs',8 => 'tuv',9 => 'wxyz'];
        $result = [];
        foreach ($words as $key => $items) {
            $temp = '';
            foreach (str_split($items) as $k => $item) {
                if (in_array($item, str_split($letter[$num[$k]]))) {
                    $temp .= $item;
                }
            }
            if ($items == $temp) {
                $result[] = $items;
            }
        }
        return $result;
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$num = "2";
$words = ["a", "b", "c", "d"];
$res = $object->getValidT9Words($num, $words);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
