<?php
/*
* 48. 旋转图像
难度
中等

983

收藏

分享
切换为英文
接收动态
反馈
给定一个 n × n 的二维矩阵 matrix 表示一个图像。请你将图像顺时针旋转 90 度。

你必须在 原地 旋转图像，这意味着你需要直接修改输入的二维矩阵。请不要 使用另一个矩阵来旋转图像。



示例 1：


输入：matrix = [[1,2,3],[4,5,6],[7,8,9]]
输出：[[7,4,1],[8,5,2],[9,6,3]]
示例 2：


输入：matrix = [[5,1,9,11],[2,4,8,10],[13,3,6,7],[15,14,12,16]]
输出：[[15,13,2,5],[14,3,4,1],[12,6,8,9],[16,7,10,11]]
示例 3：

输入：matrix = [[1]]
输出：[[1]]
示例 4：

输入：matrix = [[1,2],[3,4]]
输出：[[3,1],[4,2]]


提示：

matrix.length == n
matrix[i].length == n
1 <= n <= 20
-1000 <= matrix[i][j] <= 1000
通过次数211,650提交次数288,002
  */
class Solution {
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $count= count($matrix);
        $result = [];
        for ($i=0; $i < $count; $i++) for ($j=$count - 1; $j >= 0 ; $j--) $result[$i][] = $matrix[$j][$i];
        for ($i=0; $i < $count; $i++) for ($j=0; $j < $count; $j++) $matrix[$i][$j] = $result[$i][$j];
        return $result;
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$matrix = [[5,1,9,11],[2,4,8,10],[13,3,6,7],[15,14,12,16]];
$res = $object->rotate($matrix);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
