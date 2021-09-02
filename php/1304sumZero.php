<?php
/*
* 1304. 和为零的N个唯一整数
给你一个整数 n，请你返回 任意 一个由 n 个 各不相同 的整数组成的数组，并且这 n 个数相加和为 0 。



示例 1：

输入：n = 5
输出：[-7,-1,1,3,4]
解释：这些数组也是正确的 [-5,-1,1,2,3]，[-3,-1,2,-2,4]。
示例 2：

输入：n = 3
输出：[-1,0,1]
示例 3：

输入：n = 1
输出：[0]


提示：

1 <= n <= 1000
  * }
  */
class Solution {
    /**
     * @param Integer $n
     * @return Integer[]
     */
    function sumZero($n) {
        $result = [];
        if ($n % 2 != 0) {
            $result[] = 0;
            for ($i=1; $i < $n / 2; $i++) {
                $result[] = $i;
                $result[] = -$i;
            }
        }else {
            for ($i=1; $i <= $n / 2; $i++) {
                $result[] = $i;
                $result[] = -$i;
            }
        }

        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = 50;
$res = $object->sumZero($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
