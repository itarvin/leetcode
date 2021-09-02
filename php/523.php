<?php
/*
* 523. 连续的子数组和
给定一个包含 非负数 的数组和一个目标 整数 k，编写一个函数来判断该数组是否含有连续的子数组，其大小至少为 2，且总和为 k 的倍数，即总和为 n*k，其中 n 也是一个整数。



示例 1：

输入：[23,2,4,6,7], k = 6
输出：True
解释：[2,4] 是一个大小为 2 的子数组，并且和为 6。
示例 2：

输入：[23,2,6,4,7], k = 6
输出：True
解释：[23,2,6,4,7]是大小为 5 的子数组，并且和为 42。


说明：

数组的长度不会超过 10,000 。
你可以认为所有数字总和在 32 位有符号整数范围内。
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function checkSubarraySum($nums, $k) {
        $result = $this->newSubarray($nums);
        $result = $this->newSubarray($nums, $result, false);
        $result = array_unique($result, SORT_REGULAR);
        foreach ($result as $key => $item) {
            if (array_sum($item) % $k == 0) {
                return True;
            }
        }
        return False;
    }
    function newSubarray($nums, $result = [], $isShift = true){
        $tempNums = $nums;
        for ($i=0; $i < count($nums); $i++) {
            if ($isShift) {
                array_shift($tempNums);
            }else {
                array_pop($tempNums);
            }
            for ($j=2; $j <= count($tempNums); $j++) {
                $tempNewArr = array_chunk($tempNums, $j);
                foreach ($tempNewArr as $key => $item) {
                    if (count($item) > 1) {
                        $result[] = $item;
                    }
                }
            }
        }
        return $result;
    }

}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [23,2,4,6,7];
$k = 6;
$res = $object->checkSubarraySum($nums, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
