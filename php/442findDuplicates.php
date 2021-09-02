<?php
/*
* 442. 数组中重复的数据
给定一个整数数组 a，其中1 ≤ a[i] ≤ n （n为数组长度）, 其中有些元素出现两次而其他元素出现一次。

找到所有出现两次的元素。

你可以不用到任何额外空间并在O(n)时间复杂度内解决这个问题吗？

示例：

输入:
[4,3,2,7,8,2,3,1]

输出:
[2,3]
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDuplicates($nums) {
        $result = [];
        $newArr = array_count_values($nums);
        foreach ($newArr as $key => $item) {
            if ($item == 2) {
                $result[] = $key;
            }
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [4,3,2,7,8,2,3,1];
$res = $object->findDuplicates($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
