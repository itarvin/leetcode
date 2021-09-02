<?php
/*
* 507. 完美数
对于一个 正整数，如果它和除了它自身以外的所有 正因子 之和相等，我们称它为 「完美数」。

给定一个 整数 n， 如果是完美数，返回 true，否则返回 false



示例 1：

输入：28
输出：True
解释：28 = 1 + 2 + 4 + 7 + 14
1, 2, 4, 7, 和 14 是 28 的所有正因子。
示例 2：

输入：num = 6
输出：true
示例 3：

输入：num = 496
输出：true
示例 4：

输入：num = 8128
输出：true
示例 5：

输入：num = 2
输出：false


提示：

1 <= num <= 108
  * }
  */
class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function checkPerfectNumber($num) {
        if ($num <= 1) {
            return false;
        }
        $factors = [];
        $factors[] = 1;
        for ($i=2; $i * $i <= $num; $i++) {
            if (!in_array($i, $factors)) {
                if ($num % $i == 0) {
                    $factors[] = $i;
                    $factors[] = $num / $i;
                }
            }
        }
        return array_sum($factors) == $num ? true : false;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$num = 20996011;
$res = $object->checkPerfectNumber($num);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
