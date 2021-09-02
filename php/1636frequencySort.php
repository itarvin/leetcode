<?php
/**
 * 1636. 按照频率将数组升序排序
难度
简单

24

收藏

分享
切换为英文
接收动态
反馈
给你一个整数数组 nums ，请你将数组按照每个值的频率 升序 排序。如果有多个值的频率相同，请你按照数值本身将它们 降序 排序。

请你返回排序后的数组。



示例 1：

输入：nums = [1,1,2,2,2,3]
输出：[3,1,1,2,2,2]
解释：'3' 频率为 1，'1' 频率为 2，'2' 频率为 3 。
示例 2：

输入：nums = [2,3,1,3,2]
输出：[1,3,3,2,2]
解释：'2' 和 '3' 频率都为 2 ，所以它们之间按照数值本身降序排序。
示例 3：

输入：nums = [-1,1,-6,4,5,-6,1,4,1]
输出：[5,-1,4,4,-6,-6,1,1,1]


提示：

1 <= nums.length <= 100
-100 <= nums[i] <= 100
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function frequencySort($nums) {
        $count_nums = array_count_values($nums);
        krsort($count_nums);
        $sort = $result = [];
        foreach ($count_nums as $key => $item) {
            $key = array_search(min($count_nums),$count_nums);
            $sort[$key] = $count_nums[$key];
            unset($count_nums[$key]);
        }
        foreach ($sort as $key => $item) {
            $temp = [];
            for ($i=0; $i < $item; $i++) $temp[] = $key;
            $result = array_merge($result, $temp);
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [-1,1,-6,4,5,-6,1,4,1];
$res = $object->frequencySort($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
