<?php
/*
* 1387. 将整数按权重排序
难度
中等

37

收藏

分享
切换为英文
接收动态
反馈
我们将整数 x 的 权重 定义为按照下述规则将 x 变成 1 所需要的步数：

如果 x 是偶数，那么 x = x / 2
如果 x 是奇数，那么 x = 3 * x + 1
比方说，x=3 的权重为 7 。因为 3 需要 7 步变成 1 （3 --> 10 --> 5 --> 16 --> 8 --> 4 --> 2 --> 1）。

给你三个整数 lo， hi 和 k 。你的任务是将区间 [lo, hi] 之间的整数按照它们的权重 升序排序 ，如果大于等于 2 个整数有 相同 的权重，那么按照数字自身的数值 升序排序 。

请你返回区间 [lo, hi] 之间的整数按权重排序后的第 k 个数。

注意，题目保证对于任意整数 x （lo <= x <= hi） ，它变成 1 所需要的步数是一个 32 位有符号整数。



示例 1：

输入：lo = 12, hi = 15, k = 2
输出：13
解释：12 的权重为 9（12 --> 6 --> 3 --> 10 --> 5 --> 16 --> 8 --> 4 --> 2 --> 1）
13 的权重为 9
14 的权重为 17
15 的权重为 17
区间内的数按权重排序以后的结果为 [12,13,14,15] 。对于 k = 2 ，答案是第二个整数也就是 13 。
注意，12 和 13 有相同的权重，所以我们按照它们本身升序排序。14 和 15 同理。
示例 2：

输入：lo = 1, hi = 1, k = 1
输出：1
示例 3：

输入：lo = 7, hi = 11, k = 4
输出：7
解释：区间内整数 [7, 8, 9, 10, 11] 对应的权重为 [16, 3, 19, 6, 14] 。
按权重排序后得到的结果为 [8, 10, 11, 7, 9] 。
排序后数组中第 4 个数字为 7 。
示例 4：

输入：lo = 10, hi = 20, k = 5
输出：13
示例 5：

输入：lo = 1, hi = 1000, k = 777
输出：570


提示：

1 <= lo <= hi <= 1000
1 <= k <= hi - lo + 1
通过次数9,495提交次数13,668
  */
class Solution {

    /**
     * @param Integer $lo
     * @param Integer $hi
     * @param Integer $k
     * @return Integer
     */
    function getKth($lo, $hi, $k) {
        $result = [];
        for ($i=$lo; $i <= $hi; $i++) $result[] = ['weight' => $this->deep($i), 'key' => $i];
        array_multisort($result, SORT_ASC);
        $res = array_column($result, 'key');
        return $res[$k - 1];
    }

    function deep($x, $num = 0){
        if ($x % 2 == 0) {
            $x = $x / 2;
        }else $x = 3 * $x + 1;
        $num += 1;
        if ($x != 1) return $this->deep($x, $num);
        return $num;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$lo = 12;
$hi = 15;
$k = 2;
$res = $object->getKth($lo, $hi, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
