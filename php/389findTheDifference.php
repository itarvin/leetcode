<?php
/*
* 389. 找不同
给定两个字符串 s 和 t，它们只包含小写字母。

字符串 t 由字符串 s 随机重排，然后在随机位置添加一个字母。

请找出在 t 中被添加的字母。



示例 1：

输入：s = "abcd", t = "abcde"
输出："e"
解释：'e' 是那个被添加的字母。
示例 2：

输入：s = "", t = "y"
输出："y"
示例 3：

输入：s = "a", t = "aa"
输出："a"
示例 4：

输入：s = "ae", t = "aea"
输出："a"


提示：

0 <= s.length <= 1000
t.length == s.length + 1
s 和 t 只包含小写字母
  * }
  */
class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $sArr = str_split($s);
        $tArr = str_split($t);
        $tempA = [];
        $tempB = [];
        if (count($sArr) > count($tArr)) {
            $tempA = $sArr;
            $tempB = $tArr;
        }else {
            $tempA = $tArr;
            $tempB = $sArr;
        }
        foreach ($tempB as $key => $item) {
            if (in_array($item, $tempA)) {
                unset($tempA[array_search($item, $tempA)]);
            }
        }
        return implode('', $tempA);
        // 试下array_count_values
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "a";
$t = "ae";
$res = $object->findTheDifference($s, $t);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
