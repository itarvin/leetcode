<?php
/* 905. 按奇偶排序数组
给定一个非负整数数组 A，返回一个数组，在该数组中， A 的所有偶数元素之后跟着所有奇数元素。

你可以返回满足此条件的任何数组作为答案。



示例：

输入：[3,1,2,4]
输出：[2,4,3,1]
输出 [4,2,3,1]，[2,4,1,3] 和 [4,2,1,3] 也会被接受。


提示：

1 <= A.length <= 5000
0 <= A[i] <= 5000
 */
class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($A) {
        $result = [];
        // foreach ($A as $key => $item) {
        //     if ($item % 2 == 0) {
        //         array_unshift($result, $item);
        //     }else {
        //         $result[] = $item;
        //     }
        // }
        for ($i=0; $i < count($A); $i++) {
            if ($A[$i] % 2 == 0) {
                array_unshift($result, $A[$i]);
            }else {
                $result[] = $A[$i];
            }
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$A = [3,1,2,4];
$res = $object->sortArrayByParity($A);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
