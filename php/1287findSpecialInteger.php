<?php
/* 1287. 有序数组中出现次数超过25%的元素
给你一个非递减的 有序 整数数组，已知这个数组中恰好有一个整数，它的出现次数超过数组元素总数的 25%。

请你找到并返回这个整数



示例：

输入：arr = [1,2,2,6,6,6,6,7,10]
输出：6


提示：

1 <= arr.length <= 10^4
0 <= arr[i] <= 10^5
 */
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findSpecialInteger($arr) {
        $count = count($arr);
        $arrayCount = array_count_values($arr);
        $max = max($arrayCount);
        if ($max / $count > ($count / 4) / $count) {
            return array_search($max, $arrayCount);
        }
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$arr = [1,2,2,6,6,6,6,7,10];
$res = $object->findSpecialInteger($arr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
