<?php
/**
 *1189. “气球” 的最大数量
难度
简单

52

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 text，你需要使用 text 中的字母来拼凑尽可能多的单词 "balloon"（气球）。

字符串 text 中的每个字母最多只能被使用一次。请你返回最多可以拼凑出多少个单词 "balloon"。



示例 1：



输入：text = "nlaebolko"
输出：1
示例 2：



输入：text = "loonbalxballpoon"
输出：2
示例 3：

输入：text = "leetcode"
输出：0


提示：

1 <= text.length <= 10^4
text 全部由小写英文字母组成
 */
/*
*
*/
class Solution {

    /**
     * @param String $text
     * @return Integer
     */
    function maxNumberOfBalloons($text) {
        $num = $this->deep(str_split($text));
        return $num;
    }

    function deep($array, $num = 0){
        $unkey = [];
        foreach (str_split('balloon') as $key => $vm) {
            $findKey = array_search($vm, $array);
            if ($findKey === false) return $num;
            unset($array[$findKey]);
        }
        $num += 1;
        return $this->deep($array, $num);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$text = "loonbalxballpoon";
$res = $object->maxNumberOfBalloons($text);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
