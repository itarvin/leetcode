<?php
/**
 * 给定一个字符串，验证它是否是回文串，只考虑字母和数字字符，可以忽略字母的大小写。

 给你一个 从 0 开始的排列 nums（下标也从 0 开始）。请你构建一个 同样长度 的数组 ans ，其中，对于每个 i（0 <= i < nums.length），都满足 ans[i] = nums[nums[i]] 。返回构建好的数组 ans 。

 从 0 开始的排列 nums 是一个由 0 到 nums.length - 1（0 和 nums.length - 1 也包含在内）的不同整数组成的数组。

  

 示例 1：

 输入：nums = [0,2,1,5,3,4]
 输出：[0,1,2,4,5,3]
 解释：数组 ans 构建如下：
 ans = [nums[nums[0]], nums[nums[1]], nums[nums[2]], nums[nums[3]], nums[nums[4]], nums[nums[5]]]
     = [nums[0], nums[2], nums[1], nums[5], nums[3], nums[4]]
     = [0,1,2,4,5,3]
 示例 2：

 输入：nums = [5,0,1,2,3,4]
 输出：[4,5,0,1,2,3]
 解释：数组 ans 构建如下：
 ans = [nums[nums[0]], nums[nums[1]], nums[nums[2]], nums[nums[3]], nums[nums[4]], nums[nums[5]]]
     = [nums[5], nums[0], nums[1], nums[2], nums[3], nums[4]]
     = [4,5,0,1,2,3]
  

 提示：

 1 <= nums.length <= 1000
 0 <= nums[i] < nums.length
 nums 中的元素 互不相同

 来源：力扣（LeetCode）
 链接：https://leetcode-cn.com/problems/build-array-from-permutation
 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
/*
*
*/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProductDifference($nums) {
        rsort($nums);
        $max_nums = array_product(array_slice($nums,0,2));
        $min_nums = array_product(array_slice($nums,count($nums)-2));
        return $max_nums - $min_nums;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = [5,6,2,7,4];
$res = $object->maxProductDifference($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
