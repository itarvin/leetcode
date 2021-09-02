<?php
/**
 * 1812. 判断国际象棋棋盘中一个格子的颜色
难度
简单

6

收藏

分享
切换为英文
接收动态
反馈
给你一个坐标 coordinates ，它是一个字符串，表示国际象棋棋盘中一个格子的坐标。下图是国际象棋棋盘示意图。



如果所给格子的颜色是白色，请你返回 true，如果是黑色，请返回 false 。

给定坐标一定代表国际象棋棋盘上一个存在的格子。坐标第一个字符是字母，第二个字符是数字。



示例 1：

输入：coordinates = "a1"
输出：false
解释：如上图棋盘所示，"a1" 坐标的格子是黑色的，所以返回 false 。
示例 2：

输入：coordinates = "h3"
输出：true
解释：如上图棋盘所示，"h3" 坐标的格子是白色的，所以返回 true 。
示例 3：

输入：coordinates = "c7"
输出：false


提示：

coordinates.length == 2
'a' <= coordinates[0] <= 'h'
'1' <= coordinates[1] <= '8'
 */
/*
*
*/
 class Solution {

     /**
     * @param String $coordinates
     * @return Boolean
     */
    function squareIsWhite($coordinates) {
        $az = 'abcdefgh';
        for ($i=1; $i < strlen($az) + 1; $i++) $azs[$i] = $az[$i-1];
        for ($i=1; $i <= 8; $i++) for ($j=1; $j <= 8; $j++) if (($i % 2 == 1 && $j % 2 == 0) || ($i % 2 == 0 && $j % 2 == 1)) $result[] = $azs[$i].$j;
        if (in_array($coordinates, $result)) return True;
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$coordinates = 'a1';
$res = $object->squareIsWhite($coordinates);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
