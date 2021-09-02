<?php
/*
* 896. 单调数列
如果数组是单调递增或单调递减的，那么它是单调的。

如果对于所有 i <= j，A[i] <= A[j]，那么数组 A 是单调递增的。 如果对于所有 i <= j，A[i]> = A[j]，那么数组 A 是单调递减的。

当给定的数组 A 是单调数组时返回 true，否则返回 false。



示例 1：

输入：[1,2,2,3]
输出：true
示例 2：

输入：[6,5,4,4]
输出：true
示例 3：

输入：[1,3,2]
输出：false
示例 4：

输入：[1,2,4,5]
输出：true
示例 5：

输入：[1,1,1]
输出：true


提示：

1 <= A.length <= 50000
-100000 <= A[i] <= 100000
  */
 class Solution {

    /**
    * @param Integer[] $A
    * @return Boolean
    */
    function isMonotonic($A) {
        $result = [];
        $temp = $A[0];
        for ($i=1; $i < count($A); $i++) {
            if ($A[$i] >= $temp) {
                $result[] = 1;
            }else {
                $result[] = 2;
            }
            $temp = $A[$i];
        }
        var_dump($result);die;
        return count(array_unique($result)) > 1 ? True : False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$A = [6,5,4,4];
$res = $object->isMonotonic($A);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
