<?php
/*
* 1493. 删掉一个元素以后全为 1 的最长子数组
给你一个二进制数组 nums ，你需要从中删掉一个元素。

请你在删掉元素的结果数组中，返回最长的且只包含 1 的非空子数组的长度。

如果不存在这样的子数组，请返回 0 。



提示 1：

输入：nums = [1,1,0,1]
输出：3
解释：删掉位置 2 的数后，[1,1,1] 包含 3 个 1 。
示例 2：

输入：nums = [0,1,1,1,0,1,1,0,1]
输出：5
解释：删掉位置 4 的数字后，[0,1,1,1,1,1,0,1] 的最长全 1 子数组为 [1,1,1,1,1] 。
示例 3：

输入：nums = [1,1,1]
输出：2
解释：你必须要删除一个元素。
示例 4：

输入：nums = [1,1,0,0,1,1,1,0,1]
输出：4
示例 5：

输入：nums = [0,0,0]
输出：0


提示：

1 <= nums.length <= 10^5
nums[i] 要么是 0 要么是 1 。
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubarray($nums) {
        $i = $j = $count = $res = 0;
        for ($j=0; $j < count($nums); $j++) {
            if ($nums[$j] == 0){
                $count = $count + 1;
            }else $count;
            while ($i<$j && $count>1){
                if ($nums[$i] == 0) $count-=1;
                $i+=1;
            }
            $res = max($res, $j-$i);
        }
        return $res;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums =  [1,1,1];
$res = $object->longestSubarray($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
