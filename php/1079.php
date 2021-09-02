<?php
/*
* 216. 组合总和 III
找出所有相加之和为 n 的 k 个数的组合。组合中只允许含有 1 - 9 的正整数，并且每种组合中不存在重复的数字。

说明：

所有数字都是正整数。
解集不能包含重复的组合。
示例 1:

输入: k = 3, n = 7
输出: [[1,2,4]]
示例 2:

输入: k = 3, n = 9
输出: [[1,2,6], [1,3,5], [2,3,4]]
  * }
  */
class Solution {
    /**
     * @param String $tiles
     * @return Integer
     */
    function numTilePossibilities($tiles) {
        $arr = str_split($tiles);
        $result = [];
        $tempArr = $arr;
        for ($i=0; $i < count($arr); $i++) {
            $tempArr = $this->check($tempArr);
            $res = $this->getSubs($tempArr);
            $result = array_merge($res, $result);
        }
        $res = [];
        foreach ($result as $key => $item) {
            $res[] = implode("", $item);
        }
        var_dump(count(array_unique($res)));die;
    }

    function check($tempArr){
        $temp = [];
        foreach ($tempArr as $key => $item) {
            $nowkey = $key + 1;
            if ($nowkey >= count($tempArr)) $nowkey = 0;
            $temp[$nowkey] = $item;
        }
        ksort($temp);
        return $temp;
    }

    function getSubs($arr){
        $result = [];
        $count = count($arr);
        foreach (range(1, $count, 1) as $key => $n) {
            foreach (range(0, $count - $n) as $ky => $i) {
                $result[] = array_slice($arr, $ky, $n);
            }
        }
        return array_unique($result, SORT_REGULAR);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$tiles = "AAABBC";
$res = $object->numTilePossibilities($tiles);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
