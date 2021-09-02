<?php
/* 关联268
* 面试题 17.04. 消失的数字
数组nums包含从0到n的所有整数，但其中缺了一个。请编写代码找出那个缺失的整数。你有办法在O(n)时间内完成吗？

注意：本题相对书上原题稍作改动

示例 1：

输入：[3,0,1]
输出：2


示例 2：

输入：[9,6,4,2,3,5,7,0,1]
输出：8
 */
class Solution {

	/**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
		// sort($nums);
		// $resKey = 0;
        // foreach ($nums as $key => $item) {
        //     if ($key != $item) {
        //         return $key;
        //     }else {
        //         $resKey =  $key;
        //     }
        // }
		// return $resKey + 1;
		//
		//
		sort($nums);
		$resKey = 0;
        for ($i=0; $i < count($nums); $i++) {
            if ($i != $nums[$i]) {
                return $i;
            }else {
                $resKey =  $i;
            }
        }
        return $resKey + 1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [3,0,1];
$res = $object->missingNumber($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
