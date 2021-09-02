<?php
/*
* 1438. 绝对差不超过限制的最长连续子数组
给你一个整数数组 nums ，和一个表示限制的整数 limit，请你返回最长连续子数组的长度，该子数组中的任意两个元素之间的绝对差必须小于或者等于 limit 。

如果不存在满足条件的子数组，则返回 0 。



示例 1：

输入：nums = [8,2,4,7], limit = 4
输出：2
解释：所有子数组如下：
[8] 最大绝对差 |8-8| = 0 <= 4.
[8,2] 最大绝对差 |8-2| = 6 > 4.
[8,2,4] 最大绝对差 |8-2| = 6 > 4.
[8,2,4,7] 最大绝对差 |8-2| = 6 > 4.
[2] 最大绝对差 |2-2| = 0 <= 4.
[2,4] 最大绝对差 |2-4| = 2 <= 4.
[2,4,7] 最大绝对差 |2-7| = 5 > 4.
[4] 最大绝对差 |4-4| = 0 <= 4.
[4,7] 最大绝对差 |4-7| = 3 <= 4.
[7] 最大绝对差 |7-7| = 0 <= 4.
因此，满足题意的最长子数组的长度为 2 。
示例 2：

输入：nums = [10,1,2,4,7,2], limit = 5
输出：4
解释：满足题意的最长子数组是 [2,4,7,2]，其最大绝对差 |2-7| = 5 <= 5 。
示例 3：

输入：nums = [4,2,2,2,4,4,2,2], limit = 0
输出：3


提示：

1 <= nums.length <= 10^5
1 <= nums[i] <= 10^9
0 <= limit <= 10^9
  */
 class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $limit
    * @return Integer
    */
    function longestSubarray($nums, $limit) {
        $result[] = $nums;
        for ($i = 0; $i < count($nums); $i++) {
            $temp = $nums;
            if ($i) array_shift($temp);
            for ($j=1; $j < count($nums); $j++) {
                $result = array_merge($result, array_chunk($temp, $j));
            }
        }
        $newArr = array_values(array_unique($result, SORT_REGULAR));
        $total = 0;
        foreach ($newArr as $key => $item) {
            var_dump(max($item), min($item), abs(max($item) - min($item)), '4444');
            if (abs(max($item) - min($item)) > $limit) $total += 1;
        }
        return $total;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [8,2,4,7];
$limit = 4;
$res = $object->longestSubarray($nums, $limit);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
