<?php
/**
 * 961. 重复 N 次的元素
难度
简单

97

收藏

分享
切换为英文
接收动态
反馈
在大小为 2N 的数组 A 中有 N+1 个不同的元素，其中有一个元素重复了 N 次。

返回重复了 N 次的那个元素。



示例 1：

输入：[1,2,3,3]
输出：3
示例 2：

输入：[2,1,2,5,3,2]
输出：2
示例 3：

输入：[5,1,5,2,5,3,5,4]
输出：5


提示：

4 <= A.length <= 10000
0 <= A[i] < 10000
A.length 为偶数
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @return Integer
     */
    function repeatedNTimes($nums) {
        $count_array = array_count_values($nums);
        return array_search(max($count_array), $count_array);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [5,1,5,2,5,3,5,4];
$res = $object->repeatedNTimes($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
