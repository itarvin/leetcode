<?php
/*
* 136. 只出现一次的数字
给定一个非空整数数组，除了某个元素只出现一次以外，其余每个元素均出现两次。找出那个只出现了一次的元素。

说明：

你的算法应该具有线性时间复杂度。 你可以不使用额外空间来实现吗？

示例 1:

输入: [2,2,1]
输出: 1
示例 2:

输入: [4,1,2,1,2]
输出: 4
  * }
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $arrayCount = array_count_values($nums);
        foreach ($arrayCount as $key => $item) {
            if ($item == 1) {
                return $key;
            }
        }

    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [4,1,2,1,2];
$res = $object->singleNumber($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
