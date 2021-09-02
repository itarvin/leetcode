<?php
/*
* 724. 寻找数组的中心索引
给定一个整数类型的数组 nums，请编写一个能够返回数组 “中心索引” 的方法。

我们是这样定义数组 中心索引 的：数组中心索引的左侧所有元素相加的和等于右侧所有元素相加的和。

如果数组不存在中心索引，那么我们应该返回 -1。如果数组有多个中心索引，那么我们应该返回最靠近左边的那一个。



示例 1：

输入：
nums = [1, 7, 3, 6, 5, 6]
输出：3
解释：
索引 3 (nums[3] = 6) 的左侧数之和 (1 + 7 + 3 = 11)，与右侧数之和 (5 + 6 = 11) 相等。
同时, 3 也是第一个符合要求的中心索引。
示例 2：

输入：
nums = [1, 2, 3]
输出：-1
解释：
数组中不存在满足此条件的中心索引。


说明：

nums 的长度范围为 [0, 10000]。
任何一个 nums[i] 将会是一个范围在 [-1000, 1000]的整数。
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $len = count($nums);
        if($len < 1) {
            return -1;
        }
        $allTotal = array_sum($nums);
        $index = 0;

        $leftTotal = 0;
        $rightTotal = $allTotal - $nums[$index];
        do {
            if($leftTotal == $rightTotal) {
                return $index;
            }
            $leftTotal += $nums[$index];
            $rightTotal -= $nums[$index+1];
            $index++;
        } while ($index < $len);
        return -1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [];
$res = $object->pivotIndex($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
