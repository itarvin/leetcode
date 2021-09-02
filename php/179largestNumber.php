<?php
/*
* 179. 最大数
给定一组非负整数 nums，重新排列它们每位数字的顺序使之组成一个最大的整数。

注意：输出结果可能非常大，所以你需要返回一个字符串而不是整数。



示例 1：

输入：nums = [10,2]
输出："210"
示例 2：

输入：nums = [3,30,34,5,9]
输出："9534330"
示例 3：

输入：nums = [1]
输出："1"
示例 4：

输入：nums = [10]
输出："10"


提示：

1 <= nums.length <= 100
0 <= nums[i] <= 109
  */
class Solution {

    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums) {
        // 防止[0, 0, 0] 输出000
        if(array_sum($nums) == 0) {
            return '0';
        }
        usort($nums, function($a, $b) {
            return intval($a.$b) < intval($b.$a);
        });
        return implode($nums, '');
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [10,2];
$res = $object->largestNumber($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
