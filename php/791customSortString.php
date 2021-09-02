<?php
/**
 * 791. 自定义字符串排序
难度
中等

85

收藏

分享
切换为英文
接收动态
反馈
字符串S和 T 只包含小写字符。在S中，所有字符只会出现一次。

S 已经根据某种规则进行了排序。我们要根据S中的字符顺序对T进行排序。更具体地说，如果S中x在y之前出现，那么返回的字符串中x也应出现在y之前。

返回任意一种符合条件的字符串T。

示例:
输入:
S = "cba"
T = "abcd"
输出: "cbad"
解释:
S中出现了字符 "a", "b", "c", 所以 "a", "b", "c" 的顺序应该是 "c", "b", "a".
由于 "d" 没有在S中出现, 它可以放在T的任意位置. "dcba", "cdba", "cbda" 都是合法的输出。
注意:

S的最大长度为26，其中没有重复的字符。
T的最大长度为200。
S和T只包含小写字符。
通过次数10,921提交次数15,714
 */
/*
*
*/
 class Solution {

     /**
     * @param String $order
     * @param String $s
     * @return String
     */
    function customSortString($order, $s) {
        $result = [];
        $s_array = str_split($s);
        for ($i=0; $i < strlen($order); $i++) {
            $current = $order[$i];
            list($result, $s_array) = $this->deep($current, $s_array, $result);
        }
        return join('',$result).join('',$s_array);
    }
    function deep($current, $s_array, $result){
        if (in_array($current, $s_array)){
            $result[] = $current;
            unset($s_array[array_search($current, $s_array)]);
        }
        if (in_array($current, $s_array)) return $this->deep($current, $s_array, $result);
        return [$result, $s_array];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$S = "kqep";
$T = "pekeq";
$res = $object->customSortString($order, $s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
