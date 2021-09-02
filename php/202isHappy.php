<?php
/*
* 202. 快乐数
// 编写一个算法来判断一个数 n 是不是快乐数。
//
// 「快乐数」定义为：对于一个正整数，每一次将该数替换为它每个位置上的数字的平方和，然后重复这个过程直到这个数变为 1，也可能是 无限循环 但始终变不到 1。如果 可以变为  1，那么这个数就是快乐数。
//
// 如果 n 是快乐数就返回 True ；不是，则返回 False 。
//
//
//
// 示例：
//
// 输入：19
// 输出：true
// 解释：
// 1的平方 + 9的平方 = 82
// 8的平方 + 2的平方 = 68
// 6的平方 + 8的平方 = 100
// 1的平方 + 0的平方 + 0的平方 = 1
  * }
  */
class Solution {

    /**
    * @param Integer $n
    * @return Boolean
    */
    function isHappy($n) {
        return $this->checkNumber($n);
    }

    /**
     * [function description]
     * @var [type]
     */
    function checkNumber($n, $count = 0)
    {
        // 先拆分数字
        $numberArr = str_split($n);
        $total = 0;
        foreach ($numberArr as $key => $item) {
            $total += $item * $item;
        }
        if ($total == 1) {
            return true;
        }else {
            return $count > 50 ?  false : $this->checkNumber($total, $count + 1);
        }
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = '17';
$res = $object->isHappy($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
