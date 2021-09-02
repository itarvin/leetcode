<?php
/**
 * 剑指 Offer 40. 最小的k个数
难度
简单

286

收藏

分享
切换为英文
接收动态
反馈
输入整数数组 arr ，找出其中最小的 k 个数。例如，输入4、5、1、6、2、7、3、8这8个数字，则最小的4个数字是1、2、3、4。



示例 1：

输入：arr = [3,2,1], k = 2
输出：[1,2] 或者 [2,1]
示例 2：

输入：arr = [0,1,2,1], k = 1
输出：[0]


限制：

0 <= k <= arr.length <= 10000
0 <= arr[i] <= 10000
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer[]
     */
    function findRelativeRanks($score) {
        $temp = $score;
        arsort($temp);
        $temp = array_values($temp);
        $medal = ["Gold Medal", "Silver Medal", "Bronze Medal"];
        $result = [];
        for ($i=1; $i <= count($temp); $i++) $result[$i] = $temp[$i - 1];
        for ($i=0; $i < count($score); $i++) {
            $key = array_search($score[$i], $result);
            $score[$i] = isset($medal[$key - 1]) ? $medal[$key - 1] : (string)$key;
        }
        return $score;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$score = [10,3,8,9,4];
$res = $object->findRelativeRanks($score);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
