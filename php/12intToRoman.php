<?php
/**
 * 剑指 Offer II 087. 复原 IP
难度
中等

3

收藏

分享
切换为英文
接收动态
反馈
给定一个只包含数字的字符串 s ，用以表示一个 IP 地址，返回所有可能从 s 获得的 有效 IP 地址 。你可以按任何顺序返回答案。

有效 IP 地址 正好由四个整数（每个整数位于 0 到 255 之间组成，且不能含有前导 0），整数之间用 '.' 分隔。

例如："0.1.2.201" 和 "192.168.1.1" 是 有效 IP 地址，但是 "0.011.255.245"、"192.168.1.312" 和 "192.168@1.1" 是 无效 IP 地址。



示例 1：

输入：s = "25525511135"
输出：["255.255.11.135","255.255.111.35"]
示例 2：

输入：s = "0000"
输出：["0.0.0.0"]
示例 3：

输入：s = "1111"
输出：["1.1.1.1"]
示例 4：

输入：s = "010010"
输出：["0.10.0.10","0.100.1.0"]
示例 5：

输入：s = "10203040"
输出：["10.20.30.40","102.0.30.40","10.203.0.40"]


提示：

0 <= s.length <= 3000
s 仅由数字组成


注意：本题与主站 93 题相同：https://leetcode-cn.com/problems/restore-ip-addresses/
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $num = (string)$num;
        $result = '';
        $len = strlen($num);
        for ($i = 0; $i <= $len; $i++) {
            $key = $len - $i - 1;
            $pow = $key > 0 ? pow(10, $key) : 0;
            $item = $pow ? $num[$i] * $pow : $num[$i];
            $result .= $this->deep($item);
        }
        return $result;
    }

    function deep($num, $res = ''){
        $data = ['M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];
        foreach ($data as $key => $item) {
            if ($num && $num - $item >= 0){
                $num -= $item;
                $res .= array_search($item, $data);
                break;
            }
        }
        if ($num > 0) return $this->deep($num, $res);
        return $res;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$num = 332;
$res = $object->intToRoman($num);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
