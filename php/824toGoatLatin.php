<?php
/*
* 824. 山羊拉丁文
难度
简单

51

收藏

分享
切换为英文
接收动态
反馈
给定一个由空格分割单词的句子 S。每个单词只包含大写或小写字母。

我们要将句子转换为 “Goat Latin”（一种类似于 猪拉丁文 - Pig Latin 的虚构语言）。

山羊拉丁文的规则如下：

如果单词以元音开头（a, e, i, o, u），在单词后添加"ma"。
例如，单词"apple"变为"applema"。

如果单词以辅音字母开头（即非元音字母），移除第一个字符并将它放到末尾，之后再添加"ma"。
例如，单词"goat"变为"oatgma"。

根据单词在句子中的索引，在单词最后添加与索引相同数量的字母'a'，索引从1开始。
例如，在第一个单词后添加"a"，在第二个单词后添加"aa"，以此类推。
返回将 S 转换为山羊拉丁文后的句子。

示例 1:

输入: "I speak Goat Latin"
输出: "Imaa peaksmaaa oatGmaaaa atinLmaaaaa"
示例 2:

输入: "The quick brown fox jumped over the lazy dog"
输出: "heTmaa uickqmaaa rownbmaaaa oxfmaaaaa umpedjmaaaaaa overmaaaaaaa hetmaaaaaaaa azylmaaaaaaaaa ogdmaaaaaaaaaa"
说明:

S 中仅包含大小写字母和空格。单词间有且仅有一个空格。
1 <= S.length <= 150。
  */
class Solution {

    /**
     * @param String $sentence
     * @return String
     */
    function toGoatLatin($sentence) {
        $consonant = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z'];
        $s_array = explode(' ', $sentence);
        $news_  = [];
        foreach ($s_array as $key => $item) {
            if (in_array(strtolower($item[0]), $consonant)) $item = substr($item, 1).$item[0];
            $news_[] = $item.'ma'.str_repeat("a",$key + 1);
        }
        return join(' ', $news_);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$sentence = "I speak Goat Latin";
$res = $object->toGoatLatin($sentence);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
