<?php
/*
* 剑指 Offer 39. 数组中出现次数超过一半的数字
数组中有一个数字出现的次数超过数组长度的一半，请找出这个数字。



你可以假设数组是非空的，并且给定的数组总是存在多数元素。



示例 1:

输入: [1, 2, 3, 2, 2, 2, 5, 4, 2]
输出: 2


限制：

1 <= 数组长度 <= 50000
  * }
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = count($nums);
        if ($count) {
            $numsCount = array_count_values($nums);
            foreach ($numsCount as $key => $item) {
                if ($item >= ceil($count / 2) ) {
                    return $key;
                }
            }
        }

    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [1, 2, 3, 2, 2, 2, 5, 4, 2];
$res = $object->majorityElement($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
