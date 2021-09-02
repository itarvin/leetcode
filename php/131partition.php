<?php
/*
* 131. 分割回文串
难度
中等

812

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 s，请你将 s 分割成一些子串，使每个子串都是 回文串 。返回 s 所有可能的分割方案。

回文串 是正着读和反着读都一样的字符串。



示例 1：

输入：s = "aab"
输出：[["a","a","b"],["aa","b"]]
示例 2：

输入：s = "a"
输出：[["a"]]


提示：

1 <= s.length <= 16
s 仅由小写英文字母组成
通过次数126,513提交次数174,787
  */
class Solution {

    /**
     * @param String $s
     * @return String[][]
     */
    function partition($s) {
        $data = [];
        $len = strlen($s);
        $data[] = str_split($s);
        for ($i=0; $i < $len; $i++) {
            $temp = [];
            $item0 = substr($s, 0, $i + 1);
            if ($item0 == strrev($item0)) {
                $temp[] = $item0;
            }
            $item1 = substr($s, $i, $len - $i);
            if ($item1 == strrev($item1)) {
                $temp[] = $item1;
            }
            if ($temp) $data[] = $temp;
        }
        var_dump($data);die;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "aab";
$res = $object->partition($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
