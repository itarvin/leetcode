<?php
/**
 * 75. 颜色分类
难度
中等

987

收藏

分享
切换为英文
接收动态
反馈
给定一个包含红色、白色和蓝色，一共 n 个元素的数组，原地对它们进行排序，使得相同颜色的元素相邻，并按照红色、白色、蓝色顺序排列。

此题中，我们使用整数 0、 1 和 2 分别表示红色、白色和蓝色。



示例 1：

输入：nums = [2,0,2,1,1,0]
输出：[0,0,1,1,2,2]
示例 2：

输入：nums = [2,0,1]
输出：[0,1,2]
示例 3：

输入：nums = [0]
输出：[0]
示例 4：

输入：nums = [1]
输出：[1]


提示：

n == nums.length
1 <= n <= 300
nums[i] 为 0、1 或 2


进阶：

你可以不使用代码库中的排序函数来解决这道题吗？
你能想出一个仅使用常数空间的一趟扫描算法吗？
通过次数255,592提交次数430,183
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $count = count($nums);
        $res = [];
        for ($i=0; $i < $count; $i++) {
            $temp_i = $nums[$i];
            $j = $i + 1;
            if ($j < $count) {
                $temp_j = $nums[$j];
                if ($temp_j <= $temp_i) {
                    $nums[$i] = $temp_j;
                    $nums[$j] = $temp_i;
                }
            }
        }
        var_dump($nums);die;
        if (count(array_unique($res)) !== 1) return $this->sortColors($nums);
        return $nums;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [2,0,2,1,1,0];
$res = $object->sortColors($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
