<?php
/*
* 914. 卡牌分组
给定一副牌，每张牌上都写着一个整数。

此时，你需要选定一个数字 X，使我们可以将整副牌按下述规则分成 1 组或更多组：

每组都有 X 张牌。
组内所有的牌上都写着相同的整数。
仅当你可选的 X >= 2 时返回 true。



示例 1：

输入：[1,2,3,4,4,3,2,1]
输出：true
解释：可行的分组是 [1,1]，[2,2]，[3,3]，[4,4]
示例 2：

输入：[1,1,1,2,2,2,3,3]
输出：false
解释：没有满足要求的分组。
示例 3：

输入：[1]
输出：false
解释：没有满足要求的分组。
示例 4：

输入：[1,1]
输出：true
解释：可行的分组是 [1,1]
示例 5：

输入：[1,1,2,2,2,2]
输出：true
解释：可行的分组是 [1,1]，[2,2]，[2,2]

提示：

1 <= deck.length <= 10000
0 <= deck[i] < 10000
  */
class Solution {
    /**
     * @param Integer[] $deck
     * @return Boolean
     */
    function hasGroupsSizeX($deck) {
        $countDeck = array_count_values($deck);
        $x = 0;
        foreach ($countDeck as $n) {
            $x = $this->gcd($x, $n);
            if ($x == 1) return false;
        }

        return $x >= 2;
    }

    private function gcd($a, $b)
   {
       return $b == 0 ? $a : $this->gcd($b, $a % $b);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$deck = [0,0,0,1,1,1,2,2,2];
$res = $object->hasGroupsSizeX($deck);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
