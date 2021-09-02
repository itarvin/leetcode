<?php
/*
* 1351. 统计有序矩阵中的负数
给你一个 m * n 的矩阵 grid，矩阵中的元素无论是按行还是按列，都以非递增顺序排列。

请你统计并返回 grid 中 负数 的数目。



示例 1：

输入：grid = [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]]
输出：8
解释：矩阵中共有 8 个负数。
示例 2：

输入：grid = [[3,2],[1,0]]
输出：0
示例 3：

输入：grid = [[1,-1],[-1,-1]]
输出：3
示例 4：

输入：grid = [[-1]]
输出：1


提示：

m == grid.length
n == grid[i].length
1 <= m, n <= 100
-100 <= grid[i][j] <= 100
  * }
  */
class Solution {
    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        $count = 0;
        foreach ($grid as $key => $items) {
            foreach ($items as $key => $item) {
                if ($item < 0) {
                    $count += 1;
                }
            }
        }
        return $count;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$grid = [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]];
$res = $object->countNegatives($grid);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
