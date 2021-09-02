<?php
/* 448. 找到所有数组中消失的数字
给定一个范围在  1 ≤ a[i] ≤ n ( n = 数组大小 ) 的 整型数组，数组中的元素一些出现了两次，另一些只出现一次。

找到所有在 [1, n] 范围之间没有出现在数组中的数字。

您能在不使用额外空间且时间复杂度为O(n)的情况下完成这个任务吗? 你可以假定返回的数组不算在额外空间内。

示例:

输入:
[4,3,2,7,8,2,3,1]

输出:
[5,6]
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        if (count($nums) == 0) {
            return $nums;
        }
        $newNums = array_unique($nums);
        sort($newNums);
        $max = max($newNums);
        if ($max < count($nums)) {
            $max = count($nums);
        }
        $arrNums = range(1, $max);
		return array_diff($arrNums, $nums);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [4,3,2,7,8,2,3,1];
$res = $object->findDisappearedNumbers($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
