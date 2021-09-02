<?php
/*
* 1160. 拼写单词
给你一份『词汇表』（字符串数组） words 和一张『字母表』（字符串） chars。

假如你可以用 chars 中的『字母』（字符）拼写出 words 中的某个『单词』（字符串），那么我们就认为你掌握了这个单词。

注意：每次拼写（指拼写词汇表中的一个单词）时，chars 中的每个字母都只能用一次。

返回词汇表 words 中你掌握的所有单词的 长度之和。



示例 1：

输入：words = ["cat","bt","hat","tree"], chars = "atach"
输出：6
解释：
可以形成字符串 "cat" 和 "hat"，所以答案是 3 + 3 = 6。
示例 2：

输入：words = ["hello","world","leetcode"], chars = "welldonehoneyr"
输出：10
解释：
可以形成字符串 "hello" 和 "world"，所以答案是 5 + 5 = 10。


提示：

1 <= words.length <= 1000
1 <= words[i].length, chars.length <= 100
所有字符串中都仅包含小写英文字母
  */
class Solution {
    /**
     * @param String[] $words
     * @param String $chars
     * @return Integer
     */
    function countCharacters($words, $chars) {
        $charsArr = str_split($chars);
        $total = 0;
        foreach ($words as $key => $items) {
            $tempChars = $charsArr;
            $itemChars = str_split($items);
            $temp = '';
            for ($i=0; $i < strlen($items); $i++) {
                if (in_array($items[$i], $tempChars)) {
                    $temp .= $items[$i];
                    unset($tempChars[array_search($items[$i], $tempChars)]);
                }
            }
            if ($items == $temp) {
                $total += count($itemChars);
            }
        }
        return $total;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$words = ["hello","world","leetcode"];
$chars = "welldonehoneyr";
$res = $object->countCharacters($words, $chars);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
