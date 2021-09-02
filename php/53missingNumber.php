<?php
/*
* 剑指 Offer 53 - II. 0～n-1中缺失的数字
一个长度为n-1的递增排序数组中的所有数字都是唯一的，并且每个数字都在范围0～n-1之内。在范围0～n-1内的n个数字中有且只有一个数字不在该数组中，请找出这个数字。



示例 1:

输入: [0,1,3]
输出: 2
示例 2:

输入: [0,1,2,3,4,5,6,7,9]
输出: 8


限制：

1 <= 数组长度 <= 10000
  * }
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $resKey = 0;
        foreach ($nums as $key => $item) {
            if ($key != $item) {
                return $key;
            }else {
                $resKey =  $key;
            }
        }
        return $resKey + 1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [0,1,3];
$res = $object->missingNumber($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
