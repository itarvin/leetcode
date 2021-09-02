<?php
/**
 * 1266. 访问所有点的最小时间
难度
简单

72

收藏

分享
切换为英文
接收动态
反馈
平面上有 n 个点，点的位置用整数坐标表示 points[i] = [xi, yi] 。请你计算访问所有这些点需要的 最小时间（以秒为单位）。

你需要按照下面的规则在平面上移动：

每一秒内，你可以：
沿水平方向移动一个单位长度，或者
沿竖直方向移动一个单位长度，或者
跨过对角线移动 sqrt(2) 个单位长度（可以看作在一秒内向水平和竖直方向各移动一个单位长度）。
必须按照数组中出现的顺序来访问这些点。
在访问某个点时，可以经过该点后面出现的点，但经过的那些点不算作有效访问。


示例 1：



输入：points = [[1,1],[3,4],[-1,0]]
输出：7
解释：一条最佳的访问路径是： [1,1] -> [2,2] -> [3,3] -> [3,4] -> [2,3] -> [1,2] -> [0,1] -> [-1,0]
从 [1,1] 到 [3,4] 需要 3 秒
从 [3,4] 到 [-1,0] 需要 4 秒
一共需要 7 秒
示例 2：

输入：points = [[3,2],[-2,2]]
输出：5


提示：

points.length == n
1 <= n <= 100
points[i].length == 2
-1000 <= points[i][0], points[i][1] <= 1000
 */
/*
*
*/
class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function minTimeToVisitAllPoints($points) {
        $count = count($points);
        $result = [];
        for ($i=0; $i < $count; $i++) {
            $j = $i + 1;
            if ($j < $count) {
                $left = $points[$i];
                $right = $points[$j];
                $leftmax = abs($left[0] - $right[0]);
                $rightmax = abs($left[1] - $right[1]);
                $result[] = $leftmax > $rightmax ? $leftmax : $rightmax;
            }
        }
        return array_sum($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$points = [[3,2],[-2,2]];
$res = $object->minTimeToVisitAllPoints($points);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
