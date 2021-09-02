<?php
/*
* 747. 至少是其他数字两倍的最大数
在一个给定的数组nums中，总是存在一个最大元素 。

查找数组中的最大元素是否至少是数组中每个其他数字的两倍。

如果是，则返回最大元素的索引，否则返回-1。

示例 1:

输入: nums = [3, 6, 1, 0]
输出: 1
解释: 6是最大的整数, 对于数组中的其他整数,
6大于数组中其他元素的两倍。6的索引是1, 所以我们返回1.


示例 2:

输入: nums = [1, 2, 3, 4]
输出: -1
解释: 4没有超过3的两倍大, 所以我们返回 -1.


提示:

nums 的长度范围在[1, 50].
每个 nums[i] 的整数范围在 [0, 100].
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function dominantIndex($nums) {
        $maxNumber = max($nums);
        foreach ($nums as $key => $item) {
            if (($item != $maxNumber) && ($item != 0)) {
                if ($maxNumber / 2 < $item) {
                    return -1;
                }
            }
        }
        return array_search($maxNumber, $nums);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [0, 0, 0, 4];
$res = $object->dominantIndex($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
