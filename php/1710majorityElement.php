<?php
/*
* 面试题 17.10. 主要元素
数组中占比超过一半的元素称之为主要元素。给定一个整数数组，找到它的主要元素。若没有，返回-1。

示例 1：

输入：[1,2,5,9,5,9,5,5,5]
输出：5


示例 2：

输入：[3,2]
输出：-1


示例 3：

输入：[2,2,1,1,1,2,2]
输出：2


说明：
你有办法在时间复杂度为 O(N)，空间复杂度为 O(1) 内完成吗？
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $countValues = array_count_values($nums);
        $count = count($nums);
        $max = max($countValues);
        return $max > $count / 2 ?  array_search($max, $countValues) : -1;
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [3,2];
$res = $object->majorityElement($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
