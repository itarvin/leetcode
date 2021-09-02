<?php
/*
* 867. 转置矩阵
给定一个矩阵 A， 返回 A 的转置矩阵。

矩阵的转置是指将矩阵的主对角线翻转，交换矩阵的行索引与列索引。



示例 1：

输入：[[1,2,3],[4,5,6],[7,8,9]]
输出：[[1,4,7],[2,5,8],[3,6,9]]
示例 2：

输入：[[1,2,3],[4,5,6]]
输出：[[1,4],[2,5],[3,6]]


提示：

1 <= A.length <= 1000
1 <= A[0].length <= 1000
  */
class Solution {
    /**
     * @param Integer[][] $A
     * @return Integer[][]
     */
    function transpose($A) {
        $result = [];
        foreach ($A as $item) {
            foreach ($item as $k => $v) {
                $result[$k][] = $v;
            }
        }
        return $result;
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$A = [[1,2,3],[4,5,6]];
$res = $object->transpose($A);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
