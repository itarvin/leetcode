<?php
/*
* 1108. IP 地址无效化
给你一个有效的 IPv4 地址 address，返回这个 IP 地址的无效化版本。

所谓无效化 IP 地址，其实就是用 "[.]" 代替了每个 "."。



示例 1：

输入：address = "1.1.1.1"
输出："1[.]1[.]1[.]1"
示例 2：

输入：address = "255.100.50.0"
输出："255[.]100[.]50[.]0"


提示：

给出的 address 是一个有效的 IPv4 地址
  * }
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $result = [];
        for ($i=0; $i < $n; $i++) {
            $result[] = $nums[$i];
            $result[] = $nums[$i + $n];
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [1,1,2,2];
$n = 2;
$res = $object->shuffle($nums, $n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
