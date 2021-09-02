<?php
/**
 * 766. 托普利茨矩阵
难度
简单

239

收藏

分享
切换为英文
接收动态
反馈
给你一个 m x n 的矩阵 matrix 。如果这个矩阵是托普利茨矩阵，返回 true ；否则，返回 false 。

如果矩阵上每一条由左上到右下的对角线上的元素都相同，那么这个矩阵是 托普利茨矩阵 。



示例 1：


输入：matrix = [[1,2,3,4],[5,1,2,3],[9,5,1,2]]
输出：true
解释：
在上述矩阵中, 其对角线为:
"[9]", "[5, 5]", "[1, 1, 1]", "[2, 2, 2]", "[3, 3]", "[4]"。
各条对角线上的所有元素均相同, 因此答案是 True 。
示例 2：


输入：matrix = [[1,2],[2,2]]
输出：false
解释：
对角线 "[1, 2]" 上的元素不同。


提示：

m == matrix.length
n == matrix[i].length
1 <= m, n <= 20
0 <= matrix[i][j] <= 99


进阶：

如果矩阵存储在磁盘上，并且内存有限，以至于一次最多只能将矩阵的一行加载到内存中，该怎么办？
如果矩阵太大，以至于一次只能将不完整的一行加载到内存中，该怎么办？
 */
/*
*
*/
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    function isToeplitzMatrix($matrix) {
        // 行
        $line = count($matrix);
        // 列
        $column = count($matrix[0]);
        // 最大行列
        $max = $line > $column ? $line : $column;
        $result = [];
        for ($i=0; $i < $column; $i++) for ($j=0; $j < $line; $j++) if ($i == 0 || $j == 0) $result[] = [$j,$i];
        $cut_arr = [];
        foreach ($result as $key => $keys) {
            $leftkey = $keys[0];
            $rightkey = $keys[1];
            $temp = [];
            for ($i=0; $i < $max; $i++) {
                $left = $leftkey + $i;
                $right = $rightkey + $i;
                if ($left < $line && $right < $column) $temp[] = $matrix[$left][$right];
            }
            if (count(array_unique($temp)) == 1){
                $cut_arr[] = True;
            } else $cut_arr[] = False;
        }
        if (count(array_unique($cut_arr)) == 1) return True;
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$matrix = [[1,2],[2,2]];
$res = $object->isToeplitzMatrix($matrix);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
