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
     * @param Integer $n
     * @return Integer[]
     */
    function kthGrammar($n, $k) {
        $data[1] = '0';
        $temp = 0;
        for ($i=2; $i <= 10; $i++) {
            $temp = $this->deep($temp);
            // var_dump($temp);die;
            $data[$i] = $temp;
        }
        var_dump($data);die;
    }
    function deep($temp){
        $new_ = '';
        for ($i=0; $i < strlen($temp); $i++) {
            if ($temp[$i] == 0) {
                $new_ .= '01';
            } elseif ($temp[$i] == 1) $new_ .= '10';
        }
        return $new_;
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
