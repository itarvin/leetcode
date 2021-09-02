<?php
/*
* 给定一组不含重复元素的整数数组 nums，返回该数组所有可能的子集（幂集）。

说明：解集不能包含重复的子集。

示例:

输入: nums = [1,2,3]
输出:
[
  [3],
  [1],
  [2],
  [1,2,3],
  [1,3],
  [2,3],
  [1,2],
  []
]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/subsets
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $result = [];
        $result = array_reduce($nums, function($carry, $item){
            $temp = $carry;
            foreach($carry as $key => $row){
                $carry[$key][] = $item;
            }
            $carry[] = [$item];
            return array_merge($temp, $carry);
        }, []);
        $result[] = [];
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [1,2,3];
$res = $object->subsets($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
