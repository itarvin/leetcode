<?php
/*
* 39. 组合总和
给定一个无重复元素的数组 candidates 和一个目标数 target ，找出 candidates 中所有可以使数字和为 target 的组合。

candidates 中的数字可以无限制重复被选取。

说明：

所有数字（包括 target）都是正整数。
解集不能包含重复的组合。
示例 1：

输入：candidates = [2,3,6,7], target = 7,
所求解集为：
[
  [7],
  [2,2,3]
]
示例 2：

输入：candidates = [2,3,5], target = 8,
所求解集为：
[
  [2,2,2,2],
  [2,3,3],
  [3,5]
]


提示：

1 <= candidates.length <= 30
1 <= candidates[i] <= 200
candidate 中的每个元素都是独一无二的。
1 <= target <= 500
  */
class Solution {
    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        $result = [];
        $count = count($candidates);
        for ($i=0; $i < $count; $i++) {
            $temp = [];
            $temp_i = $candidates[$i];
            $temp[] = $temp_i;
            if ($target % $temp_i == 0) $result[] = str_split(str_repeat($temp_i, $target / $temp_i));
            for ($j=$i + 1; $j < $count; $j++) {
                $temp_i += $candidates[$j];
                if ($temp_i === $target) {
                    $temp[] = $candidates[$j];
                }
            }
            if (array_sum($temp) == $target) {
                $result[] = $temp;
            }
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$candidates = [2,7,6,3,5,1];
$target = 9;
$res = $object->combinationSum($candidates, $target);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
