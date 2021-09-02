<?php
/*
* 520. 检测大写字母
给定一个单词，你需要判断单词的大写使用是否正确。

我们定义，在以下情况时，单词的大写用法是正确的：

全部字母都是大写，比如"USA"。
单词中所有字母都不是大写，比如"leetcode"。
如果单词不只含有一个字母，只有首字母大写， 比如 "Google"。
否则，我们定义这个单词没有正确使用大写字母。

示例 1:

输入: "USA"
输出: True
示例 2:

输入: "FlaG"
输出: False
注意: 输入是由大写和小写拉丁字母组成的非空单词。
  * }
  */
class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        if (!$word) {
            return False;
        }
        // 拆分字符串
        $wordArr = str_split($word);
        $letters = [];
        foreach ($wordArr as $key => $item) {
            if (preg_match('/[A-Z]/',$item, $matchs)) {
                $letters[$key] = $item;
            }
        }
        if (count($wordArr) == count($letters)) {
            return True;
        }
        if ($letters) {
            foreach ($letters as $key => $item) {
                if ($key) {
                    return False;
                }
            }
        }
        return True;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$word = "leetcode";
$res = $object->detectCapitalUse($word);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
