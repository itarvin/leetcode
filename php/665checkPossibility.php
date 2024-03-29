<?php
/*
* 665. 非递减数列
给你一个长度为 n 的整数数组，请你判断在 最多 改变 1 个元素的情况下，该数组能否变成一个非递减数列。

我们是这样定义一个非递减数列的： 对于数组中所有的 i (0 <= i <= n-2)，总满足 nums[i] <= nums[i + 1]。



示例 1:

输入: nums = [4,2,3]
输出: true
解释: 你可以通过把第一个4变成1来使得它成为一个非递减数列。
示例 2:

输入: nums = [4,2,1]
输出: false
解释: 你不能在只改变一个元素的情况下将其变为非递减数列。


说明：

1 <= n <= 10 ^ 4
- 10 ^ 5 <= nums[i] <= 10 ^ 5
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function checkPossibility($nums) {
        $result = True;
        for($i = 1; $i < count($nums); $i++){
            if($nums[$i] < $nums[$i - 1]){
                if($result){
                    if($i > 1 && $nums[$i] < $nums[$i - 2]){
                           $nums[$i] = $nums[$i - 1];
                    }
                    $result = False;
                }else return False;
            }
        }
        return True;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [4,2,1];
$res = $object->checkPossibility($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
