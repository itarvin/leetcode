<?php
/*
* 1550. 存在连续三个奇数的数组
给你一个整数数组 arr，请你判断数组中是否存在连续三个元素都是奇数的情况：如果存在，请返回 true ；否则，返回 false 。



示例 1：

输入：arr = [2,6,4,1]
输出：false
解释：不存在连续三个元素都是奇数的情况。
示例 2：

输入：arr = [1,2,34,3,4,5,7,23,12]
输出：true
解释：存在连续三个元素都是奇数的情况，即 [5,7,23] 。


提示：

1 <= arr.length <= 1000
1 <= arr[i] <= 1000
  * }
  */
class Solution {
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function threeConsecutiveOdds($arr) {
        // 判断奇偶性
        $parity = 0;
        foreach ($arr as $key => $item) {
            if($item % 2 == 0){
                $parity = 0;
            }else{
                $parity += 1;
                if ($parity >= 3) {
                    return True;
                }
            }
        }
        return $parity >= 3 ? True : False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$arr = [1,2,34,3,4,5,7,23,12];
$res = $object->threeConsecutiveOdds($arr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
