<?php
/*
* 1295. 统计位数为偶数的数字
给你一个整数数组 nums，请你返回其中位数为 偶数 的数字的个数。



示例 1：

输入：nums = [12,345,2,6,7896]
输出：2
解释：
12 是 2 位数字（位数为偶数）
345 是 3 位数字（位数为奇数）
2 是 1 位数字（位数为奇数）
6 是 1 位数字 位数为奇数）
7896 是 4 位数字（位数为偶数）
因此只有 12 和 7896 是位数为偶数的数字
示例 2：

输入：nums = [555,901,482,1771]
输出：1
解释：
只有 1771 是位数为偶数的数字。


提示：

1 <= nums.length <= 500
1 <= nums[i] <= 10^5
  * }
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        // 判断奇偶性
        $parity = 0;
        foreach ($nums as $key => $item) {
            if(count(str_split($item)) % 2 == 0){
                $parity += 1;
            }
        }
        return $parity;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [0,0,1,2,5];
$res = $object->findNumbers($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
