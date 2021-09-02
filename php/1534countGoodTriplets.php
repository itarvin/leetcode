<?php
/*
* 1534. 统计好三元组
给你一个整数数组 arr ，以及 a、b 、c 三个整数。请你统计其中好三元组的数量。

如果三元组 (arr[i], arr[j], arr[k]) 满足下列全部条件，则认为它是一个 好三元组 。

0 <= i < j < k < arr.length
|arr[i] - arr[j]| <= a
|arr[j] - arr[k]| <= b
|arr[i] - arr[k]| <= c
其中 |x| 表示 x 的绝对值。

返回 好三元组的数量 。



示例 1：

输入：arr = [3,0,1,1,9,7], a = 7, b = 2, c = 3
输出：4
解释：一共有 4 个好三元组：[(3,0,1), (3,0,1), (3,1,1), (0,1,1)] 。
示例 2：

输入：arr = [1,1,2,2,3], a = 0, b = 0, c = 1
输出：0
解释：不存在满足所有条件的三元组。


提示：

3 <= arr.length <= 100
0 <= arr[i] <= 1000
0 <= a, b, c <= 1000
  */
class Solution {
    /**
     * @param Integer[] $arr
     * @param Integer $a
     * @param Integer $b
     * @param Integer $c
     * @return Integer
     */
    function countGoodTriplets($arr, $a, $b, $c) {
        // $result = [];
        // for ($i=0; $i < count($arr); $i++) {
        //     for ($j=$i + 1; $j < count($arr); $j++) {
        //         for ($z=$j + 1; $z < count($arr); $z++) {
        //             if ((abs($arr[$i] - $arr[$j]) <= $a) && (abs($arr[$j] - $arr[$z]) <= $b) && (abs($arr[$i] - $arr[$z]) <= $c)) {
        //                 $result[] = [$arr[$i], $arr[$j], $arr[$z]];
        //             }
        //         }
        //     }
        // }
        // return count($result);


        $count = 0;
        for ($i=0; $i < count($arr); $i++) {
            for ($j=$i + 1; $j < count($arr); $j++) {
                for ($z=$j + 1; $z < count($arr); $z++) {
                    if ((abs($arr[$i] - $arr[$j]) <= $a) && (abs($arr[$j] - $arr[$z]) <= $b) && (abs($arr[$i] - $arr[$z]) <= $c)) {
                        $count += 1;
                    }
                }
            }
        }
        return $count;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$arr = [3,0,1,1,9,7];
$a = 7;
$b = 2;
$c = 3;
$res = $object->countGoodTriplets($arr, $a, $b, $c);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
