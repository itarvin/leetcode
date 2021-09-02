<?php
/*
* 数组中数字出现的次数 II
* 在一个数组 nums 中除一个数字只出现一次之外，其他数字都出现了三次。请找出那个只出现一次的数字。
* 示例 1：
*
* 输入：nums = [3,4,3,3]
* 输出：4
* 示例 2：
*
* 输入：nums = [9,1,7,9,7,9,7]
* 输出：1
*
*
* 限制：
*
* 1 <= nums.length <= 10000
* 1 <= nums[i] < 2^31
  */
 class Solution {

    /**
    * @param Integer[] $nums
    * @return Integer
    */
    function singleNumber($nums) {
        $arrCount = array_count_values($nums);
        arsort($arrCount);
        foreach ($arrCount as $key => $item) {
            if ($item == 1) {
                return $key;
            }
        }
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [9,1,7,9,7,9,7];
$res = $object->singleNumber($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
