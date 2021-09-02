<?php
class Solution {

    /**
     * 替换空格
     * 示例 1：
     * 请实现一个函数，把字符串 s 中的每个空格替换成"%20"。
     * 输入：s = "We are happy."
     * 输出："We%20are%20happy."
     */
    /**
    * @param String $s
    * @return String
    */
    function replaceSpace($s) {
        return str_replace(" ", "%20", $s);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "We are happy.";
$res = $object->replaceSpace($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
