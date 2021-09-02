<?php
/**
 * 数组中重复的数字
 *
 * 找出数组中重复的数字。
 * 在一个长度为 n 的数组 nums 里的所有数字都在 0～n-1 的范围内。数组中某些数字是重复的，但不知道有几个数字重复了，也不知道每个数字重复了几次。请找出数组中任意一个重复的数字。

 * 示例 1：

 * 输入：
 * [2, 3, 1, 0, 2, 5, 3]
 * 输出：2 或 3
 */
class Solution {


    /**
    * @param Integer[] $nums
    * @return Integer
    */
    function findRepeatNumber($nums) {
        $arrCount = array_count_values($nums);
        $checkCount = [];
        foreach ($arrCount as $key => $item) {
            if ($item > 1) {
                $checkCount[] = $key;
            }
        }
        return $checkCount[array_rand($checkCount)];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [1, 1, 1];
$res = $object->findRepeatNumber($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
