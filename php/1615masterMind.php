<?php
/**
 * 面试题 16.15. 珠玑妙算
难度
简单

26

收藏

分享
切换为英文
接收动态
反馈
珠玑妙算游戏（the game of master mind）的玩法如下。

计算机有4个槽，每个槽放一个球，颜色可能是红色（R）、黄色（Y）、绿色（G）或蓝色（B）。例如，计算机可能有RGGB 4种（槽1为红色，槽2、3为绿色，槽4为蓝色）。作为用户，你试图猜出颜色组合。打个比方，你可能会猜YRGB。要是猜对某个槽的颜色，则算一次“猜中”；要是只猜对颜色但槽位猜错了，则算一次“伪猜中”。注意，“猜中”不能算入“伪猜中”。

给定一种颜色组合solution和一个猜测guess，编写一个方法，返回猜中和伪猜中的次数answer，其中answer[0]为猜中的次数，answer[1]为伪猜中的次数。

示例：

输入： solution="RGBY",guess="GGRR"
输出： [1,1]
解释： 猜中1次，伪猜中1次。
提示：

len(solution) = len(guess) = 4
solution和guess仅包含"R","G","B","Y"这4种字符
 */
/*
*
*/
 class Solution {

     /**
     * @param String $solution
     * @param String $guess
     * @return Integer[]
     */
    function masterMind($solution, $guess) {
        $len = strlen($solution);
        $fake_array = $hit_array =  [];
        for ($i=0; $i < $len ; $i++) {
            if ($solution[$i] == $guess[$i]) $hit_array[] = $solution[$i];
            for ($j=$i + 1; $j < $len ; $j++) if ($solution[$i] == $guess[$j] && $i !== $j && !in_array($solution[$i], $hit_array)) $fake_array[] = $solution[$i];
        }
        var_dump($fake_array);die;
        return [count($hit_array), count($fake_array)];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$solution="YBBY";
$guess="GYYB";
$res = $object->masterMind($solution, $guess);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
