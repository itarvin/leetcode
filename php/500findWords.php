<?php
/*
* 500. 键盘行
给定一个单词列表，只返回可以使用在键盘同一行的字母打印出来的单词。键盘如下图所示。



American keyboard



示例：

输入: ["Hello", "Alaska", "Dad", "Peace"]
输出: ["Alaska", "Dad"]


注意：

你可以重复使用键盘上同一字符。
你可以假设输入的字符串将只包含字母。
  * }
  */
class Solution {
    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $letters = ['qwertyuiop', 'asdfghjkl', 'zxcvbnm'];
        $result = [];
        foreach ($letters as $k => $letterItem) {
            $letters[$k] = str_split($letterItem);
        }
        foreach ($words as $key => $item) {
            // 单词转小写且分割
            $words[$key] = str_split($item);
        }
        $result = [];
        foreach ($words as $key => $items) {
            $totalItem = [];
            foreach ($items as $k => $item) {
                if (in_array($item, $letters[0])) {
                    $totalItem[$k] = '1';
                }elseif (in_array($item, $letters[1])) {
                    $totalItem[$k] = '2';
                }elseif (in_array($item, $letters[2])) {
                    $totalItem[$k] = '3';
                }
            }
            if (count(array_unique($totalItem)) == 1) {
                $result[] = implode('', $items);
            }
        }
        return $result;
        var_dump($res);die;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$words = ["Hello", "Alaska", "Dad", "Peace"];
$res = $object->findWords($words);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
