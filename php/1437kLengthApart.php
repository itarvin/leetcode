<?php
/**
 * 1437. 是否所有 1 都至少相隔 k 个元素
难度
简单

14

收藏

分享
切换为英文
接收动态
反馈
给你一个由若干 0 和 1 组成的数组 nums 以及整数 k。如果所有 1 都至少相隔 k 个元素，则返回 True ；否则，返回 False 。



示例 1：



输入：nums = [1,0,0,0,1,0,0,1], k = 2
输出：true
解释：每个 1 都至少相隔 2 个元素。
示例 2：



输入：nums = [1,0,0,1,0,1], k = 2
输出：false
解释：第二个 1 和第三个 1 之间只隔了 1 个元素。
示例 3：

输入：nums = [1,1,1,1,1], k = 0
输出：true
示例 4：

输入：nums = [0,1,0,1], k = 1
输出：true


提示：

1 <= nums.length <= 10^5
0 <= k <= nums.length
nums[i] 的值为 0 或 1
通过次数9,938提交次数16,861
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function kLengthApart($nums, $k) {
        $count= count($nums);
        $result = [];
        for ($i=0; $i < $count; $i++) {
            $findkey = array_search(1, $nums);
            if (is_numeric($findkey)) {
                $result[] = $findkey;
                unset($nums[$findkey]);
            }
        }
        $temp_count = count($result);
        if (!$temp_count) return False;
        for ($i=0; $i < $temp_count; $i++) for ($j= $i + 1; $j < $temp_count; $j++) if ($result[$j] - $result[$i] <= $k) return False;
        return True;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [0,0,0];
$k = 2;

$res = $object->kLengthApart($nums, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
