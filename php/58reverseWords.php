<?php
class Solution {

    /**
     * 左旋转字符串
     * 字符串的左旋转操作是把字符串前面的若干个字符转移到字符串的尾部。请定义一个函数实现字符串左旋转操作的功能。比如，输入字符串"abcdefg"和数字2，该函数将返回左旋转两位得到的结果"cdefgab"。
     *
     * 示例 1：
     * 输入: s = "abcdefg", k = 2
     * 输出: "cdefgab"
     * 示例 2：
     *
     * 输入: s = "lrloseumgh", k = 6
     * 输出: "umghlrlose"
     *
     *
     * 限制：
     *
     * 1 <= k < s.length <= 10000
     */

    /**
    * @param String $s
    * @param Integer $n
    * @return String
    */
    function reverseLeftWords($s, $n) {
        $newStr = '';
        for ($i=$n; $i < strlen($s); $i++) {
            $newStr .= $s[$i];
        }
        for ($i=0; $i < $n; $i++) {
            $newStr .= $s[$i];
        }
        return $newStr;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "lrloseumgh";
$k = 6;
$res = $object->reverseLeftWords($s, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
