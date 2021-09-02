<?php
/*
* 面试题 16.02. 单词频率
设计一个方法，找出任意指定单词在一本书中的出现频率。

你的实现应该支持如下操作：

WordsFrequency(book)构造函数，参数为字符串数组构成的一本书
get(word)查询指定单词在书中出现的频率
示例：

WordsFrequency wordsFrequency = new WordsFrequency({"i", "have", "an", "apple", "he", "have", "a", "pen"});
wordsFrequency.get("you"); //返回0，"you"没有出现过
wordsFrequency.get("have"); //返回2，"have"出现2次
wordsFrequency.get("an"); //返回1
wordsFrequency.get("apple"); //返回1
wordsFrequency.get("pen"); //返回1
提示：

book[i]中只包含小写字母
1 <= book.length <= 100000
1 <= book[i].length <= 10
get函数的调用次数不会超过100000
  */
class WordsFrequency {
    /**
    * @param String[] $book
    */
    function __construct($book) {
        $this->book = array_count_values($book);
    }

    /**
    * @param String $word
    * @return Integer
    */
    function get($word) {
        return intval($this->book[$word]);
    }
}

  /**
   * Your WordsFrequency object will be instantiated and called as such:
   * $obj = WordsFrequency($book);
   * $ret_1 = $obj->get($word);
   */

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new WordsFrequency(["WordsFrequency","get","get","get","get","get"]);
$res = $object->get('have');
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
