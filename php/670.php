<?php
/*
* 670. 最大交换
给定一个非负整数，你至多可以交换一次数字中的任意两位。返回你能得到的最大值。

示例 1 :

输入: 2736
输出: 7236
解释: 交换数字2和数字7。
示例 2 :

输入: 9973
输出: 9973
解释: 不需要交换。
注意:

给定数字的范围是 [0, 108]
  */
class Solution {
    /**
     * @param Integer $num
     * @return Integer
     */
    function maximumSwap($num) {
        $numArr = str_split($num);
        $max = max($numArr);
        $resKey = '';
        for ($i=0; $i < strlen($num); $i++) {
            if ($max > $num[$i]) {
                $resKey = $i;
                break;
            }
        }

        var_dump($resKey);die;
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$num = 2736;
$res = $object->maximumSwap($num);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
