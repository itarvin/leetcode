<?php
/**
 * 面试题 01.03. URL化
难度
简单

47

收藏

分享
切换为英文
接收动态
反馈
URL化。编写一种方法，将字符串中的空格全部替换为%20。假定该字符串尾部有足够的空间存放新增字符，并且知道字符串的“真实”长度。（注：用Java实现的话，请使用字符数组实现，以便直接在数组上操作。）



示例 1：

输入："Mr John Smith    ", 13
输出："Mr%20John%20Smith"
示例 2：

输入："               ", 5
输出："%20%20%20%20%20"


提示：

字符串长度在 [0, 500000] 范围内。
 */
class Solution {

    /**
     * @param String $S
     * @param Integer $length
     * @return String
     */
    function replaceSpaces($S, $length) {
        $new_s = '';
        $num = 0;
        for ($i=0; $i < strlen($S); $i++) {
            $num += 1;
            $new_s .= $S[$i];
            if ($num == $length) break;
        }
        $string = str_replace(" ", "%20", $new_s);
        return $string;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$S = "Mr John Smith    ";
$length = 13;
$res = $object->replaceSpaces($S, $length);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
