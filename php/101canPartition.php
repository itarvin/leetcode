<?php
/**
 * 剑指 Offer II 101. 分割等和子串
难度
简单

1

收藏

分享
切换为英文
接收动态
反馈
给定一个非空的正整数数组 nums ，请判断能否将这些数字分成元素和相等的两部分。



示例 1：

输入：nums = [1,5,11,5]
输出：true
解释：nums 可以分割成 [1, 5, 5] 和 [11] 。
示例 2：

输入：nums = [1,2,3,5]
输出：false
解释：nums 不可以分为和相等的两部分


提示：

1 <= nums.length <= 200
1 <= nums[i] <= 100


注意：本题与主站 416 题相同： https://leetcode-cn.com/problems/partition-equal-subset-sum/

通过次数487提交次数1,035
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canPartition($nums) {
        $total = array_sum($nums);
        if ($total % 2) return False;
        $half = $total / 2;
        if (in_array($half, $nums)) return True;
        $count_a = count($nums);
        for ($i=0; $i < $count_a; $i++) {
            $temp_array = $
            $temp = $nums[$i];
            for ($j=$i + 1; $j < $count_a; $j++) {
                $temp += $nums[$j];
                var_dump($nums[$j]);
                if ($temp == $half){
                    return True;
                }elseif ($temp > $half) $temp -= $nums[$j];
            }
            var_dump($temp);
        }
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [1,1,2,5,5,5,5];
$res = $object->canPartition($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
