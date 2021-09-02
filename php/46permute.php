<?php
/*
* 46. 全排列
给定一个 没有重复 数字的序列，返回其所有可能的全排列。

示例:

输入: [1,2,3]
输出:
[
  [1,2,3],
  [1,3,2],
  [2,1,3],
  [2,3,1],
  [3,1,2],
  [3,2,1]
]
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $count = count($nums);
        if ($count == 1) return [$nums];
        //保证初始数组是有序的
        sort($nums);
        //$nums尾部元素下标
        $last = $count - 1;
        $x = $last;
        $result[] = $nums;

        //组合个数统计
        // $count = 1;
        while (true) {
            //相邻的两个元素
            $y = $x--;
            //如果前一个元素的值小于后一个元素的值
            if ($nums[$x] < $nums[$y]) {
                $z = $last;
                //从尾部开始，找到第一个大于 $x 元素的值
                while ($nums[$x] > $nums[$z]) {
                    $z--;
                }
                /* 交换 $x 和 $z 元素的值 */
                list($nums[$x], $nums[$z]) = array($nums[$z], $nums[$x]);
                /* 将 $y 之后的元素全部逆向排列 */
                for ($i = $last; $i > $y; $i--, $y++) {
                    list($nums[$i], $nums[$y]) = array($nums[$y], $nums[$i]);
                }
                $x = $last;
                $result[] = $nums;
            }
            //全部组合完毕
            if ($x == 0) {
                break;
            }
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [1];
$res = $object->permute($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
