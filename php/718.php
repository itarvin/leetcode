<?php
/*
* 718. 最长重复子数组
给两个整数数组 A 和 B ，返回两个数组中公共的、长度最长的子数组的长度。



示例：

输入：
A: [1,2,3,2,1]
B: [3,2,1,4,7]
输出：3
解释：
长度最长的公共子数组是 [3, 2, 1] 。


提示：

1 <= len(A), len(B) <= 1000
0 <= A[i], B[i] < 100
  */
class Solution {
    /**
     * @param Integer[] $A
     * @param Integer[] $B
     * @return Integer
     */
    function findLength($A, $B) {
        $newAArr = $this->getSubarrays($A);
        $newBArr = $this->getSubarrays($B);
        $maxLength = 0;
        foreach ($newAArr as $akey => $aitem) {
            foreach ($newBArr as $bkey => $bitem) {
                $aCount= count($aitem);
                if (count($aitem) == count($bitem)) {
                    $diff = array_diff_assoc($aitem, $bitem);
                    if (empty($diff)) $maxLength = max($aCount, $maxLength);
                }
            }
        }
        return $maxLength;
    }

    function getSubarrays($array = []){
        $result = [];
        $count = count($array);
        // 这种亦可
        for ($i=1; $i < $count + 1; $i++) {
            for ($j=0; $j < $count - $n; $j++) {
                $result[] = array_slice($array, $j, $i);
            }
        }
        // 这种亦可
        // foreach (range(1, $count) as $key => $n) {
        //     foreach (range(0, $count - $n) as $ky => $i) {
        //         $result[] = array_slice($array, $ky, $n);
        //     }
        // }
        return array_values(array_unique($result, SORT_REGULAR));
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$A = [1,0,1,0,0,1,0,0,1,1,0,1,0,1,1,1,1,1,0,0,0,1,1,0,0,1,0,0,0,1,0,1,1,1,1,0,1,0,0,1,1,0,1,1,1,0,1,0,1,0,0,0,0,0,1,0,1,0,1,1,1,0,1,0,1,1,0,0,0,1,1,1,1,1,0,1,1,1,1,0,1,0,0,0,0,0,0,1,1,0,1,1,1,0,1,0,1,1,1,0];
$B = [0,0,0,1,0,1,1,0,0,0,1,0,1,0,0,0,0,1,1,1,1,1,1,1,0,1,0,1,1,0,1,0,0,1,1,0,1,1,1,1,1,1,0,0,0,0,0,0,1,1,0,0,1,0,0,1,1,1,0,0,0,0,0,0,1,1,0,0,0,0,1,1,0,1,0,0,1,0,0,1,1,0,1,0,1,1,1,1,1,0,0,0,1,1,0,0,1,1,0,0];
$res = $object->findLength($A, $B);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
