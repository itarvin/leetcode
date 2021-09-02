<?php
/*
* 1734. 解码异或后的排列
难度
中等

137

收藏

分享
切换为英文
接收动态
反馈
给你一个整数数组 perm ，它是前 n 个正整数的排列，且 n 是个 奇数 。

它被加密成另一个长度为 n - 1 的整数数组 encoded ，满足 encoded[i] = perm[i] XOR perm[i + 1] 。比方说，如果 perm = [1,3,2] ，那么 encoded = [2,1] 。

给你 encoded 数组，请你返回原始数组 perm 。题目保证答案存在且唯一。



示例 1：

输入：encoded = [3,1]
输出：[1,2,3]
解释：如果 perm = [1,2,3] ，那么 encoded = [1 XOR 2,2 XOR 3] = [3,1]
示例 2：

输入：encoded = [6,5,4,6]
输出：[2,4,1,5,3]


提示：

3 <= n < 105
n 是奇数。
encoded.length == n - 1
通过次数27,806提交次数38,444
  */
class Solution {
    /**
     * @param Integer[] $encoded
     * @return Integer[]
     */
    function decode($encoded) {
        $count = count($encoded);
        $temp_encode = array_reverse($encoded);
        $first = $temp_encode[$count - 1];
        // var_dump($first);die;
        $result[] = $first;
        for ($i=0; $i < $count; $i++) {
            $temp = $first ^ $temp_encode[$i];
            // var_dump($temp, $first ,$temp_encode[$i], $first ^ $temp_encode[$i]);
            $result[] = $temp;
            $first = $temp;
        }
        var_dump($result);die;
        return $result;
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$encoded = [6,5,4,6];
$res = $object->decode($encoded);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
