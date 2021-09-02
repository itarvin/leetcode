<?php
/*
* 1309. 解码字母到整数映射
给你一个字符串 s，它由数字（'0' - '9'）和 '#' 组成。我们希望按下述规则将 s 映射为一些小写英文字符：

字符（'a' - 'i'）分别用（'1' - '9'）表示。
字符（'j' - 'z'）分别用（'10#' - '26#'）表示。
返回映射之后形成的新字符串。

题目数据保证映射始终唯一。



示例 1：

输入：s = "10#11#12"
输出："jkab"
解释："j" -> "10#" , "k" -> "11#" , "a" -> "1" , "b" -> "2".
示例 2：

输入：s = "1326#"
输出："acz"
示例 3：

输入：s = "25#"
输出："y"
示例 4：

输入：s = "12345678910#11#12#13#14#15#16#17#18#19#20#21#22#23#24#25#26#"
输出："abcdefghijklmnopqrstuvwxyz"


提示：

1 <= s.length <= 1000
s[i] 只包含数字（'0'-'9'）和 '#' 字符。
s 是映射始终存在的有效字符串。
  */
class Solution {
    /**
     * @param String $s
     * @return String
     */
    function freqAlphabets($s) {
        $all = [];
        foreach (range('a','z') as $key => $item) {
            $all[$item] = $key < 10 ? $key + 1 : $key + 1 . '#';
        }
        $result = '';
        //根据#切割字符串
        $strArr = explode('#', $s);
        //循环切割的数组
        foreach ($strArr as $key => $item) {
            //每个数组的值，进行循环
            for ($i = 0; $i < strlen($item); $i++) {
                //长度大于2并且不是最后一个数组（最后一个数组说明没有#）
                if (strlen($item) - $i == 2 && end($strArr) != $item) {
                    //最后2位+#，获取$a $arr2值
                    $result .= $all[$item[strlen($item)-2] . $item[strlen($item)-1].'#'];
                    break;
                } else {
                    //获取$a $arr1值
                    $result .= $all[$item[$i]];
                }
            }
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$s = "12345678910#11#12#13#14#15#16#17#18#19#20#21#22#23#24#25#26#";
$res = $object->freqAlphabets($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
