<?php
/*
* 771. 宝石与石头
 给定字符串J 代表石头中宝石的类型，和字符串 S代表你拥有的石头。 S 中每个字符代表了一种你拥有的石头的类型，你想知道你拥有的石头中有多少是宝石。

J 中的字母不重复，J 和 S中的所有字符都是字母。字母区分大小写，因此"a"和"A"是不同类型的石头。

示例 1:

输入: J = "aA", S = "aAAbbbb"
输出: 3
示例 2:

输入: J = "z", S = "ZZ"
输出: 0
注意:

S 和 J 最多含有50个字母。
 J 中的字符不重复。
  */
class Solution {
    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        $jArr = array_unique(str_split($J));
        $total = 0;
        foreach (str_split($S) as $key => $item) {
            if (in_array($item, $jArr)) {
                $total += 1;
            }
        }
        return $total;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$J = "aA";
$S = "aAAbbbb";
$res = $object->numJewelsInStones($J, $S);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
