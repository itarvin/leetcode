<?php
/*
* 1221. 分割平衡字符串
在一个「平衡字符串」中，'L' 和 'R' 字符的数量是相同的。

给出一个平衡字符串 s，请你将它分割成尽可能多的平衡字符串。

返回可以通过分割得到的平衡字符串的最大数量。



示例 1：

输入：s = "RLRRLLRLRL"
输出：4
解释：s 可以分割为 "RL", "RRLL", "RL", "RL", 每个子字符串中都包含相同数量的 'L' 和 'R'。
示例 2：

输入：s = "RLLLLRRRLR"
输出：3
解释：s 可以分割为 "RL", "LLLRRR", "LR", 每个子字符串中都包含相同数量的 'L' 和 'R'。
示例 3：

输入：s = "LLLLRRRR"
输出：1
解释：s 只能保持原样 "LLLLRRRR".


提示：

1 <= s.length <= 1000
s[i] = 'L' 或 'R'
分割得到的每个字符串都必须是平衡字符串。
  */
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit($s) {
        $sArr = str_split($s);
        $left = $right = $total = 0;
        foreach (str_split($s) as $key => $item) {
            if ($item == 'R') {
                $right += 1;
            }elseif ($item == 'L') {
                $left += 1;
            }
            if ($left == $right) {
                $total += 1;
            }
        }
        return $total;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "RLRRLLRLRL";
$res = $object->balancedStringSplit($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
