<?php
class Solution {

    /**
     * 黑白方格画
     * 小扣注意到秋日市集上有一个创作黑白方格画的摊位。摊主给每个顾客提供一个固定在墙上的白色画板，画板不能转动。画板上有 n * n 的网格。绘画规则为，小扣可以选择任意多行以及任意多列的格子涂成黑色，所选行数、列数均可为 0。

     * 小扣希望最终的成品上需要有 k 个黑色格子，请返回小扣共有多少种涂色方案。
     *
     * 注意：两个方案中任意一个相同位置的格子颜色不同，就视为不同的方案。
     *
     * 示例 1：
     *
     * 输入：n = 2, k = 2
     *
     * 输出：4
     *
     * 解释：一共有四种不同的方案：
     * 第一种方案：涂第一列；
     * 第二种方案：涂第二列；
     * 第三种方案：涂第一行；
     * 第四种方案：涂第二行。
     *
     * 示例 2：
     *
     * 输入：n = 2, k = 1
     *
     * 输出：0
     *
     * 解释：不可行，因为第一次涂色至少会涂两个黑格。
     *
     * 示例 3：
     *
     * 输入：n = 2, k = 4
     *
     * 输出：1
     *
     * 解释：共有 2*2=4 个格子，仅有一种涂色方案。
     *
     * 限制：
     *
     * 1 <= n <= 6
     * 0 <= k <= n * n
     */

    /**
    * @param Integer $n
    * @param Integer $k
    * @return Integer
    */
    function paintingPlan($n, $k) {
        $x = $y = $ans = 0;
        //肯定只有一种方案
        if($n * $n == $k) return 1;
        for ($x = 0; $x < $n; $x++) {
            for ($y = 0; $y < $n; $y++) {
                if (($x + $y) * $n - $x * $y == $k) {
                    $ans += $this->mulOfCombin($n, $x) * $this->mulOfCombin($n, $y);
                }
            }
        }
        return $ans;
    }
    //两个方向的组合数相乘
    function mulOfCombin($n, $x)
    {
        $up = 1;
        $t = $x;
        $down = 1;
        while($t--)
        {
            $up *= $n--;
            $down *= $x--;
        }
        return $up/$down;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = 3;
$k = 3;
$res = $object->paintingPlan($n, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
