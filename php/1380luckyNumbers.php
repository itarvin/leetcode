<?php
/**
 * 1380. 矩阵中的幸运数
难度
简单

42

收藏

分享
切换为英文
接收动态
反馈
给你一个 m * n 的矩阵，矩阵中的数字 各不相同 。请你按 任意 顺序返回矩阵中的所有幸运数。

幸运数是指矩阵中满足同时下列两个条件的元素：

在同一行的所有元素中最小
在同一列的所有元素中最大


示例 1：

输入：matrix = [[3,7,8],[9,11,13],[15,16,17]]
输出：[15]
解释：15 是唯一的幸运数，因为它是其所在行中的最小值，也是所在列中的最大值。
示例 2：

输入：matrix = [[1,10,4,2],[9,3,8,7],[15,16,17,12]]
输出：[12]
解释：12 是唯一的幸运数，因为它是其所在行中的最小值，也是所在列中的最大值。
示例 3：

输入：matrix = [[7,8],[1,2]]
输出：[7]


提示：

m == mat.length
n == mat[i].length
1 <= n, m <= 50
1 <= matrix[i][j] <= 10^5
矩阵中的所有元素都是不同的
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function luckyNumbers ($matrix) {
        $result = $min = $max= [];
        foreach ($matrix as $key => $item){
            for ($i=0; $i < count($item); $i++) $result[$i][] = $item[$i];
            $min[] = min($item);
        }
        foreach ($result as $key => $item) $max[] = max($item);
        return array_intersect($max,$min);

    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$matrix = [[3,7,8],[9,11,13],[15,16,17]];
$res = $object->luckyNumbers($matrix);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
