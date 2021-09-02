<?php
/**
 * 283. 移动零
难度
简单

1187

收藏

分享
切换为英文
接收动态
反馈
给定一个数组 nums，编写一个函数将所有 0 移动到数组的末尾，同时保持非零元素的相对顺序。

示例:

输入: [0,1,0,3,12]
输出: [1,3,12,0,0]
说明:

必须在原数组上操作，不能拷贝额外的数组。
尽量减少操作次数。
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $count = count($nums);
        for ($i=0; $i < $count; $i++) {
            for ($j=$i + 1; $j < $count; $j++) {
                $left = $nums[$i];
                $right = $nums[$j];
                if ($left == 0 && $right != 0) {
                    $nums[$i] = $right;
                    $nums[$j] = $left;
                    break;
                }
            }
        }
        return $nums;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [0,1,0,3,12];
$res = $object->moveZeroes($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
