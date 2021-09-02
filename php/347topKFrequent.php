<?php
/**
 * 347. 前 K 个高频元素
难度
中等

850

收藏

分享
切换为英文
接收动态
反馈
给你一个整数数组 nums 和一个整数 k ，请你返回其中出现频率前 k 高的元素。你可以按 任意顺序 返回答案。



示例 1:

输入: nums = [1,1,1,2,2,3], k = 2
输出: [1,2]
示例 2:

输入: nums = [1], k = 1
输出: [1]


提示：

1 <= nums.length <= 105
k 的取值范围是 [1, 数组中不相同的元素的个数]
题目数据保证答案唯一，换句话说，数组中前 k 个高频元素的集合是唯一的


进阶：你所设计算法的时间复杂度 必须 优于 O(n log n) ，其中 n 是数组大小。

通过次数192,420提交次数309,278
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $count_array = array_count_values($nums);
        arsort($count_array);
        $result = array_keys($count_array);
        $res = [];
        for ($i=0; $i < $k; $i++) $res[] = $result[$i];
        return $res;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [1,1,1,2,2,3];
$k = 2;
$res = $object->topKFrequent($nums, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
