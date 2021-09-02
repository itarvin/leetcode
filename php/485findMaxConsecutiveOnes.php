<?php
/**
 * 485. 最大连续 1 的个数
难度
简单

257

收藏

分享
切换为英文
接收动态
反馈
给定一个二进制数组， 计算其中最大连续 1 的个数。



示例：

输入：[1,1,0,1,1,1]
输出：3
解释：开头的两位和最后的三位都是连续 1 ，所以最大连续 1 的个数是 3.


提示：

输入的数组只包含 0 和 1 。
输入数组的长度是正整数，且不超过 10,000。
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $nums_ = [];
        $num = 0;
        for ($i=0; $i < count($nums); $i++) {
            if ($nums[$i]) {
                $num += 1;
            }else $num = 0;
            $nums_[]  = $num;
        }
        return max($nums_);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [1,1,0,1,1,1];
$res = $object->findMaxConsecutiveOnes($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
