<?php
/*
*1013. 将数组分成和相等的三个部分
给你一个整数数组 A，只有可以将其划分为三个和相等的非空部分时才返回 true，否则返回 false。

形式上，如果可以找出索引 i+1 < j 且满足 A[0] + A[1] + ... + A[i] == A[i+1] + A[i+2] + ... + A[j-1] == A[j] + A[j-1] + ... + A[A.length - 1] 就可以将数组三等分。



示例 1：

输入：[0,2,1,-6,6,-7,9,1,2,0,1]
输出：true
解释：0 + 2 + 1 = -6 + 6 - 7 + 9 + 1 = 2 + 0 + 1
示例 2：

输入：[0,2,1,-6,6,7,9,-1,2,0,1]
输出：false
示例 3：

输入：[3,3,6,5,-2,2,5,1,-9,4]
输出：true
解释：3 + 3 = 6 = 5 - 2 + 2 + 5 + 1 - 9 + 4


提示：

3 <= A.length <= 50000
-10^4 <= A[i] <= 10^4
  */
class Solution {
    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function canThreePartsEqualSum($A) {
        $amount = array_sum($A);
        $single = $amount / 3;
        if ($single % 1 == 0) {
            $s = 0;
            $l = [];
            for ($i=0; $i < count($A); $i++) {
                $s += $A[$i];
                if ($s == $single) {
                    $l[] = $s;
                    $s = 0;
                    if (count($l) == 2 && $i != count($A) -1 ) {
                        $c = array_sum(array_slice($A, $i+1));
                        $l[] = $c;
                        if ($l[1] == $l[0] && $l[0] == $l[2]) {
                            return True;
                        }else {
                            return False;
                        }
                    }
                }
            }
        }
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$A = [10,-10,10,-10,10,-10,10,-10];
$res = $object->canThreePartsEqualSum($A);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
