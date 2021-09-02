<?php
/**
 * 1979. 找出数组的最大公约数
难度
简单

2

收藏

分享
切换为英文
接收动态
反馈
给你一个整数数组 nums ，返回数组中最大数和最小数的 最大公约数 。

两个数的 最大公约数 是能够被两个数整除的最大正整数。



示例 1：

输入：nums = [2,5,6,9,10]
输出：2
解释：
nums 中最小的数是 2
nums 中最大的数是 10
2 和 10 的最大公约数是 2
示例 2：

输入：nums = [7,5,6,8,3]
输出：1
解释：
nums 中最小的数是 3
nums 中最大的数是 8
3 和 8 的最大公约数是 1
示例 3：

输入：nums = [3,3]
输出：3
解释：
nums 中最小的数是 3
nums 中最大的数是 3
3 和 3 的最大公约数是 3


提示：

2 <= nums.length <= 1000
1 <= nums[i] <= 1000
通过次数5,702提交次数6,834
/*
*
*/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findGCD($nums) {
        $min_array = $this->deep(min($nums));
        $max_array = $this->deep(max($nums));
        $intersect = array_intersect($min_array, $max_array);
        return max($intersect);
    }

    function deep($num){
        $result = [];
        for ($i=1; $i <= $num; $i++) {
            $maxC = $num / $i;
            if (is_numeric($maxC) && strpos($maxC, '.') === False && !in_array($maxC, $result)) $result[] = $maxC;
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [6,7,9];
$res = $object->findGCD($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
