<?php
/**
 * 剑指 Offer II 092. 翻转字符
难度
中等

1

收藏

分享
切换为英文
接收动态
反馈
如果一个由 '0' 和 '1' 组成的字符串，是以一些 '0'（可能没有 '0'）后面跟着一些 '1'（也可能没有 '1'）的形式组成的，那么该字符串是 单调递增 的。

我们给出一个由字符 '0' 和 '1' 组成的字符串 s，我们可以将任何 '0' 翻转为 '1' 或者将 '1' 翻转为 '0'。

返回使 s 单调递增 的最小翻转次数。



示例 1：

输入：s = "00110"
输出：1
解释：我们翻转最后一位得到 00111.
示例 2：

输入：s = "010110"
输出：2
解释：我们翻转得到 011111，或者是 000111。
示例 3：

输入：s = "00011000"
输出：2
解释：我们翻转得到 00000000。


提示：

1 <= s.length <= 20000
s 中只包含字符 '0' 和 '1'


注意：本题与主站 926 题相同： https://leetcode-cn.com/problems/flip-string-to-monotone-increasing/
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @return Integer
     */
    function minFlipsMonoIncr($s) {
        $flips = 0;
        $count = [0 => 0, 1 => 0];
        for ($i=0; $i < strlen($s); $i++) {
            $count[$s[$i]] += 1;
            if ($count[0] >= $count[1]){
                $flips += $count[1];
                $count[0] = 0;
                $count[1] = 0;
            }
        }
        return $flips + $count[0];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "cbca";
$wordDict = ["bc","ca"];
$res = $object->wordBreak($s, $wordDict);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
