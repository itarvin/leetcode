<?php
/**
 * 474. 一和零
难度
中等

543

收藏

分享
切换为英文
接收动态
反馈
给你一个二进制字符串数组 strs 和两个整数 m 和 n 。

请你找出并返回 strs 的最大子集的大小，该子集中 最多 有 m 个 0 和 n 个 1 。

如果 x 的所有元素也是 y 的元素，集合 x 是集合 y 的 子集 。



示例 1：

输入：strs = ["10", "0001", "111001", "1", "0"], m = 5, n = 3
输出：4
解释：最多有 5 个 0 和 3 个 1 的最大子集是 {"10","0001","1","0"} ，因此答案是 4 。
其他满足题意但较小的子集包括 {"0001","1"} 和 {"10","1","0"} 。{"111001"} 不满足题意，因为它含 4 个 1 ，大于 n 的值 3 。
示例 2：

输入：strs = ["10", "0", "1"], m = 1, n = 1
输出：2
解释：最大的子集是 {"0", "1"} ，所以答案是 2 。


提示：

1 <= strs.length <= 600
1 <= strs[i].length <= 100
strs[i] 仅由 '0' 和 '1' 组成
1 <= m, n <= 100
通过次数71,695提交次数117,582
 */
/*
*
*/
 class Solution {

     /**
     * @param String[] $strs
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function findMaxForm($strs, $m, $n) {
        $num = 0;
        for ($i=0; $i < count($strs); $i++) {
            $item = $strs[$i];
            $m_ = substr_count($item, '0');
            $n_ = substr_count($item, '1');
            if ($m_ <= $m && $n_ <= $n) $num += 1;
        }
        return $num;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$strs = ["10", "0001", "111001", "1", "0"];
$m = 5;
$n = 3;
$res = $object->findMaxForm($strs, $m, $n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
