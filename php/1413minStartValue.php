<?php
/*
* 1413. 逐步求和得到正数的最小值
给你一个整数数组 nums 。你可以选定任意的 正数 startValue 作为初始值。

你需要从左到右遍历 nums 数组，并将 startValue 依次累加上 nums 数组中的值。

请你在确保累加和始终大于等于 1 的前提下，选出一个最小的 正数 作为 startValue 。



示例 1：

输入：nums = [-3,2,-3,4,2]
输出：5
解释：如果你选择 startValue = 4，在第三次累加时，和小于 1 。
                累加求和
                startValue = 4 | startValue = 5 | nums
                  (4 -3 ) = 1  | (5 -3 ) = 2    |  -3
                  (1 +2 ) = 3  | (2 +2 ) = 4    |   2
                  (3 -3 ) = 0  | (4 -3 ) = 1    |  -3
                  (0 +4 ) = 4  | (1 +4 ) = 5    |   4
                  (4 +2 ) = 6  | (5 +2 ) = 7    |   2
示例 2：

输入：nums = [1,2]
输出：1
解释：最小的 startValue 需要是正数。
示例 3：

输入：nums = [1,-2,-3]
输出：5


提示：

1 <= nums.length <= 100
-100 <= nums[i] <= 100
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minStartValue($nums) {
        $min = $nums[0];
        $sum = 0;
        foreach($nums as $k => $item){
            $sum += $item;
            if ($min > $sum) $min = $sum;
        }
        if ($min >= 0) return 1;
        return $min *- 1 + 1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
// [-30,88,59,-11,-90,-95,-4,9,17,-43,98,-78,8,-75,-99,-78,-82,-42,43,72,82,-98,16,-12,-62,-27,-80,-49,-85,48,-59,12,-85,15,-48,-60,38,71,-56,53,-29,51,-40,33,-95,-50,-5,-41,-20,55,-29,-21,-2,-98,26,59,65,-40,24,-2,-47,90,-86,-90,-62,75,-80,-87,-15,5,-96,-27,-9,-55,37,-44,-49,-85,-77,28,-34,-80,-19,-98,-26,-72,64]
$nums = [-3,2,-3,4,2];
$res = $object->minStartValue($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());