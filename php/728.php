<?php
/*
* 728. 自除数
自除数 是指可以被它包含的每一位数除尽的数。

例如，128 是一个自除数，因为 128 % 1 == 0，128 % 2 == 0，128 % 8 == 0。

还有，自除数不允许包含 0 。

给定上边界和下边界数字，输出一个列表，列表的元素是边界（含边界）内所有的自除数。

示例 1：

输入：
上边界left = 1, 下边界right = 22
输出： [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 15, 22]
注意：

每个输入参数的边界满足 1 <= left <= right <= 10000。
  */
class Solution {
    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right) {

    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$s = "12345678910#11#12#13#14#15#16#17#18#19#20#21#22#23#24#25#26#";
$res = $object->freqAlphabets($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
