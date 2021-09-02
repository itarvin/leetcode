<?php
/*
* 1248. 统计「优美子数组」
给你一个整数数组 nums 和一个整数 k。

如果某个 连续 子数组中恰好有 k 个奇数数字，我们就认为这个子数组是「优美子数组」。

请返回这个数组中「优美子数组」的数目。



示例 1：

输入：nums = [1,1,2,1,1], k = 3
输出：2
解释：包含 3 个奇数的子数组是 [1,1,2,1] 和 [1,2,1,1] 。
示例 2：

输入：nums = [2,4,6], k = 1
输出：0
解释：数列中不包含任何奇数，所以不存在优美子数组。
示例 3：

输入：nums = [2,2,2,1,2,2,1,2,2,2], k = 2
输出：16


提示：

1 <= nums.length <= 50000
1 <= nums[i] <= 10^5
1 <= k <= nums.length
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function numberOfSubarrays($nums, $k) {
        $newNums = $this->getSubarrays($nums);
        $result = [];
        foreach ($newNums as $key => $itemArr) {
            $temp = 0;
            foreach ($itemArr as $key => $item) {
                if ($item % 2 == 1) $temp += 1;
            }
            if ($temp == $k){
                $result[] = $itemArr;
            }
        }
        return count($result);
    }

    function getSubarrays($array = []){
        $result = [];
        $count = count($array);
        // 这种亦可
        for ($i=2; $i < $count + 1; $i++) {
            for ($j=0; $j < $count - $n; $j++) {
                $result[] = array_slice($array, $j, $i);
            }
        }
        // 这种亦可
        // foreach (range(1, $count) as $key => $n) {
        //     foreach (range(0, $count - $n) as $ky => $i) {
        //         $result[] = array_slice($array, $ky, $n);
        //     }
        // }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums =  [1,1,1,1,1];
$k = 1;
$res = $object->numberOfSubarrays($nums, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
