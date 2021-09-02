<?php
/**
 * 779. 第K个语法符号
难度
中等

133

收藏

分享
切换为英文
接收动态
反馈
在第一行我们写上一个 0。接下来的每一行，将前一行中的0替换为01，1替换为10。

给定行数 N 和序数 K，返回第 N 行中第 K个字符。（K从1开始）


例子:

输入: N = 1, K = 1
输出: 0

输入: N = 2, K = 1
输出: 0

输入: N = 2, K = 2
输出: 1

输入: N = 4, K = 5
输出: 1

解释:
第一行: 0
第二行: 01
第三行: 0110
第四行: 01101001

注意：

N 的范围 [1, 30].
K 的范围 [1, 2^(N-1)].
通过次数18,566提交次数42,607
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $count1 = count($nums1);
        $count2 = count($nums2);
        if (count($count1) > $count2) {
            $result = $this->deep($nums1, $nums2);
        }else $result = $this->deep($nums1, $nums2);
        return $result;
    }
    function deep($nums0, $nums1){
        $result = [];
        for ($i=0; $i < count($nums0); $i++) if (in_array($nums0[$i], $nums1)) $result[] = $nums0[$i];
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = 2;
$k = 5;
$res = $object->kthGrammar($n, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
