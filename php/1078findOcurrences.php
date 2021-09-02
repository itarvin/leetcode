<?php
/*
* 1078. Bigram 分词
难度
简单

20

收藏

分享
切换为英文
接收动态
反馈
给出第一个词 first 和第二个词 second，考虑在某些文本 text 中可能以 "first second third" 形式出现的情况，其中 second 紧随 first 出现，third 紧随 second 出现。

对于每种这样的情况，将第三个词 "third" 添加到答案中，并返回答案。



示例 1：

输入：text = "alice is a good girl she is a good student", first = "a", second = "good"
输出：["girl","student"]
示例 2：

输入：text = "we will we will rock you", first = "we", second = "will"
输出：["we","rock"]


提示：

1 <= text.length <= 1000
text 由一些用空格分隔的单词组成，每个单词都由小写英文字母组成
1 <= first.length, second.length <= 10
first 和 second 由小写英文字母组成
  */
class Solution {

    /**
    * @param String $text
    * @param String $first
    * @param String $second
    * @return String[]
    */
    function findOcurrences($text, $first, $second) {
        $text_array = explode(' ', $text);
        $start = $text_array[0];
        $result = [];
        for ($i=0; $i < count($text_array); $i++) {
            $next = $text_array[$i+1];
            $thirdKey = isset($text_array[$i+2]) ?  $i + 2 : 0;
            if (($start == $first) && ($second == $next) && $thirdKey) $result[] = $text_array[$thirdKey];
            $start = $next;
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$text = "alice is a good girl she is a good studen";
$first = "a";
$second = "good";
$res = $object->findOcurrences($text, $first, $second);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
