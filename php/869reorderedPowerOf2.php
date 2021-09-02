<?php
/**
 * 869. 重新排序得到 2 的幂
难度
中等

49

收藏

分享
切换为英文
接收动态
反馈
给定正整数 N ，我们按任何顺序（包括原始顺序）将数字重新排序，注意其前导数字不能为零。

如果我们可以通过上述方式得到 2 的幂，返回 true；否则，返回 false。



示例 1：

输入：1
输出：true
示例 2：

输入：10
输出：false
示例 3：

输入：16
输出：true
示例 4：

输入：24
输出：false
示例 5：

输入：46
输出：true


提示：

1 <= N <= 10^9
通过次数6,252提交次数11,359
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer $n
     * @return Boolean
     */
    function reorderedPowerOf2($n) {
        $result = [];
        for ($i=0; $i < 35; $i++) $result[] = pow(2,$i);
        var_dump($result);die;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = 16666;
$res = $object->reorderedPowerOf2($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
