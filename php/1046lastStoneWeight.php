<?php
/**
 * 1046. 最后一块石头的重量
难度
简单

172

收藏

分享
切换为英文
接收动态
反馈
有一堆石头，每块石头的重量都是正整数。

每一回合，从中选出两块 最重的 石头，然后将它们一起粉碎。假设石头的重量分别为 x 和 y，且 x <= y。那么粉碎的可能结果如下：

如果 x == y，那么两块石头都会被完全粉碎；
如果 x != y，那么重量为 x 的石头将会完全粉碎，而重量为 y 的石头新重量为 y-x。
最后，最多只会剩下一块石头。返回此石头的重量。如果没有石头剩下，就返回 0。



示例：

输入：[2,7,4,1,8,1]
输出：1
解释：
先选出 7 和 8，得到 1，所以数组转换为 [2,4,1,1,1]，
再选出 2 和 4，得到 2，所以数组转换为 [2,1,1,1]，
接着是 2 和 1，得到 1，所以数组转换为 [1,1,1]，
最后选出 1 和 1，得到 0，最终数组转换为 [1]，这就是最后剩下那块石头的重量。


提示：

1 <= stones.length <= 30
1 <= stones[i] <= 1000
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones) {
        arsort($stones);
        $stones = array_values($stones);
        $abs = abs($stones[0] - $stones[1]);
        var_dump($stones);
        if (count($stones) > 2) {
            $new = [];
            for ($i = 2; $i < count($stones); $i++) $new[] = $stones[$i];
            if ($new && $abs) $new[] = $abs;
            if ($new) return $this->lastStoneWeight($new);
        }
        return $abs;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$stones = [3,7,2];
$res = $object->lastStoneWeight($stones);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
