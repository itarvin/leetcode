<?php
/*
* 剑指 Offer 42. 连续子数组的最大和
输入一个整型数组，数组中的一个或连续多个整数组成一个子数组。求所有子数组的和的最大值。

要求时间复杂度为O(n)。



示例1:

输入: nums = [-2,1,-3,4,-1,2,1,-5,4]
输出: 6
解释: 连续子数组 [4,-1,2,1] 的和最大，为 6。


提示：

1 <= arr.length <= 10^5
-100 <= arr[i] <= 100
  * }
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $curSum = $nums[0];
        $maxSum = $nums[0];
        for($i = 1; $i < count($nums); $i++) {
            // 当前数大于0，是正数，则向后累加，否则重新赋值
            if($curSum > 0) {
                $curSum += $nums[$i];
            }else {
                $curSum = $nums[$i];
            }
            // 这个值如果比最大的数还大，说明当前数是最大的
            if($curSum > $maxSum){
                $maxSum = $curSum;
            }
        }
        return $maxSum;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [-2,1,-3,4,-1,2,1,-5,4];
$res = $object->maxSubArray($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
