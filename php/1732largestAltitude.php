<?php
/**
 * 1732. 找到最高海拔
难度
简单

6

收藏

分享
切换为英文
接收动态
反馈
有一个自行车手打算进行一场公路骑行，这条路线总共由 n + 1 个不同海拔的点组成。自行车手从海拔为 0 的点 0 开始骑行。

给你一个长度为 n 的整数数组 gain ，其中 gain[i] 是点 i 和点 i + 1 的 净海拔高度差（0 <= i < n）。请你返回 最高点的海拔 。



示例 1：

输入：gain = [-5,1,5,0,-7]
输出：1
解释：海拔高度依次为 [0,-5,-4,1,1,-6] 。最高海拔为 1 。
示例 2：

输入：gain = [-4,-3,-2,-1,4,3,2]
输出：0
解释：海拔高度依次为 [0,-4,-7,-9,-10,-6,-3,-1] 。最高海拔为 0 。


提示：

n == gain.length
1 <= n <= 100
-100 <= gain[i] <= 100
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        array_unshift($gain, 0);
        $first = 0;
        foreach ($gain as $key => $item) {
            $first += $item;
            $result[] = $first;
        }
        return max($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$gain = [-5,1,5,0,-7];
$res = $object->largestAltitude($gain);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
