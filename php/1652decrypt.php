<?php
/**
 * 1652. 拆炸弹
难度
简单

13

收藏

分享
切换为英文
接收动态
反馈
你有一个炸弹需要拆除，时间紧迫！你的情报员会给你一个长度为 n 的 循环 数组 code 以及一个密钥 k 。

为了获得正确的密码，你需要替换掉每一个数字。所有数字会 同时 被替换。

如果 k > 0 ，将第 i 个数字用 接下来 k 个数字之和替换。
如果 k < 0 ，将第 i 个数字用 之前 k 个数字之和替换。
如果 k == 0 ，将第 i 个数字用 0 替换。
由于 code 是循环的， code[n-1] 下一个元素是 code[0] ，且 code[0] 前一个元素是 code[n-1] 。

给你 循环 数组 code 和整数密钥 k ，请你返回解密后的结果来拆除炸弹！



示例 1：

输入：code = [5,7,1,4], k = 3
输出：[12,10,16,13]
解释：每个数字都被接下来 3 个数字之和替换。解密后的密码为 [7+1+4, 1+4+5, 4+5+7, 5+7+1]。注意到数组是循环连接的。
示例 2：

输入：code = [1,2,3,4], k = 0
输出：[0,0,0,0]
解释：当 k 为 0 时，所有数字都被 0 替换。
示例 3：

输入：code = [2,4,9,3], k = -2
输出：[12,5,6,13]
解释：解密后的密码为 [3+9, 2+3, 4+2, 9+4] 。注意到数组是循环连接的。如果 k 是负数，那么和为 之前 的数字。


提示：

n == code.length
1 <= n <= 100
1 <= code[i] <= 100
-(n - 1) <= k <= n - 1
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $code
     * @param Integer $k
     * @return Integer[]
     */
    function decrypt($code, $k) {
        $codes = join('', $code);
        $len = strlen($codes);
        // var_dump($codes);
        for ($i=0; $i < $len; $i++) {
            if ($k + $i < $len) {
                var_dump($len - 1, $i, 'ddddfddd');
            }else {
                var_dump($i, $i - $k, 'dddd');
            }
            // if ($i + $k < $len) {
            //     $d = substr($codes, $i + 1, $i + $k);
            //     var_dump($d);
            // }else {
            //     $diff = $len - $k - $i;
            //     var_dump($diff);
            //     $d = substr($codes, $i + 1).substr($codes, $diff);
            //     var_dump($d, ';dddddd');
            // }
            // $diff = $i + $k - $len;
            // // var_dump($diff);
            // if ($diff) {
            // }
        }
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$code = [5,7,1,4];
$k = 3;
$res = $object->decrypt($code, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
