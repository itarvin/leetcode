<?php
/*
* 1389. 按既定顺序创建目标数组
给你两个整数数组 nums 和 index。你需要按照以下规则创建目标数组：

目标数组 target 最初为空。
按从左到右的顺序依次读取 nums[i] 和 index[i]，在 target 数组中的下标 index[i] 处插入值 nums[i] 。
重复上一步，直到在 nums 和 index 中都没有要读取的元素。
请你返回目标数组。

题目保证数字插入位置总是存在。



示例 1：

输入：nums = [0,1,2,3,4], index = [0,1,2,2,1]
输出：[0,4,1,3,2]
解释：
nums       index     target
0            0        [0]
1            1        [0,1]
2            2        [0,1,2]
3            2        [0,1,3,2]
4            1        [0,4,1,3,2]
示例 2：

输入：nums = [1,2,3,4,0], index = [0,1,2,3,0]
输出：[0,1,2,3,4]
解释：
nums       index     target
1            0        [1]
2            1        [1,2]
3            2        [1,2,3]
4            3        [1,2,3,4]
0            0        [0,1,2,3,4]
示例 3：

输入：nums = [1], index = [0]
输出：[1]


提示：

1 <= nums.length, index.length <= 100
nums.length == index.length
0 <= nums[i] <= 100
0 <= index[i] <= i
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index) {
        $result = [];
        foreach ($nums as $key => $item) {
            array_splice($result, array_shift($index), 0, $item);
        }
        return $result;
        var_dump($result);die;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [0,1,2,3,4];
$index = [0,1,2,2,1];
$res = $object->createTargetArray($nums, $index);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
