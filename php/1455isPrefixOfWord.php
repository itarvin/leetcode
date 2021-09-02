<?php
/**
 * 1455. 检查单词是否为句中其他单词的前缀
难度
简单

18

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 sentence 作为句子并指定检索词为 searchWord ，其中句子由若干用 单个空格 分隔的单词组成。

请你检查检索词 searchWord 是否为句子 sentence 中任意单词的前缀。

如果 searchWord 是某一个单词的前缀，则返回句子 sentence 中该单词所对应的下标（下标从 1 开始）。
如果 searchWord 是多个单词的前缀，则返回匹配的第一个单词的下标（最小下标）。
如果 searchWord 不是任何单词的前缀，则返回 -1 。
字符串 S 的 前缀 是 S 的任何前导连续子字符串。



示例 1：

输入：sentence = "i love eating burger", searchWord = "burg"
输出：4
解释："burg" 是 "burger" 的前缀，而 "burger" 是句子中第 4 个单词。
示例 2：

输入：sentence = "this problem is an easy problem", searchWord = "pro"
输出：2
解释："pro" 是 "problem" 的前缀，而 "problem" 是句子中第 2 个也是第 6 个单词，但是应该返回最小下标 2 。
示例 3：

输入：sentence = "i am tired", searchWord = "you"
输出：-1
解释："you" 不是句子中任何单词的前缀。
示例 4：

输入：sentence = "i use triple pillow", searchWord = "pill"
输出：4
示例 5：

输入：sentence = "hello from the other side", searchWord = "they"
输出：-1


提示：

1 <= sentence.length <= 100
1 <= searchWord.length <= 10
sentence 由小写英文字母和空格组成。
searchWord 由小写英文字母组成。
前缀就是紧密附着于词根的语素，中间不能插入其它成分，并且它的位置是固定的——-位于词根之前。（引用自 前缀_百度百科 ）
 */
/*
*
*/
 class Solution {

     /**
     * @param String $sentence
     * @param String $searchWord
     * @return Integer
     */
    function isPrefixOfWord($sentence, $searchWord) {
        $sentence_array = explode(" ", $sentence);
        foreach ($sentence_array as $key => $item) if (strpos($item, $searchWord) === 0) return $key + 1;
        return -1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$sentence = "i love eating burger";
$searchWord = "burg";
$res = $object->isPrefixOfWord($sentence, $searchWord);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
