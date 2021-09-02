<?php
/*
* 219. 存在重复元素 II
给定一个整数数组和一个整数 k，判断数组中是否存在两个不同的索引 i 和 j，使得 nums [i] = nums [j]，并且 i 和 j 的差的 绝对值 至多为 k。



示例 1:

输入: nums = [1,2,3,1], k = 3
输出: true
示例 2:

输入: nums = [1,0,1,1], k = 1
输出: true
示例 3:

输入: nums = [1,2,3,1,2,3], k = 2
输出: false
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $result = [];
        foreach($nums as $key=>$item){
            if(isset($result[$item]) && abs($key - $result[$item]) <= $k){
                return True;
            }
            $result[$item] = $key;
        }
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [1,2,3,1,2,3];
$k = 2;
$res = $object->containsNearbyDuplicate($nums, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
