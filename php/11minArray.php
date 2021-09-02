<?php
class Solution {

    /**
     * 旋转数组的最小数字
     * 小扣注意到秋日市集上有一个创作黑白方格画的摊位。摊主给每个顾客提供一个固定在墙上的白色画板，画板不能转动。画板上有 n * n 的网格。绘画规则为，小扣可以选择任意多行以及任意多列的格子涂成黑色，所选行数、列数均可为 0。
     * 把一个数组最开始的若干个元素搬到数组的末尾，我们称之为数组的旋转。输入一个递增排序的数组的一个旋转，输出旋转数组的最小元素。例如，数组 [3,4,5,1,2] 为 [1,2,3,4,5] 的一个旋转，该数组的最小值为1。  
     * 示例 1：
     *
     * 输入：[3,4,5,1,2]
     * 输出：1
     * 示例 2：
     *
     * 输入：[2,2,2,0,1]
     * 输出：0
     */

    /**
    * @param Integer[] $numbers
    * @return Integer
    */
    function minArray($numbers) {
        arsort($numbers);
        return array_pop($numbers);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$numbers = [2,2,2,0,1];
$res = $object->minArray($numbers);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
