<?php
/**
 * 551. 学生出勤记录 I
难度
简单

76

收藏

分享
切换为英文
接收动态
反馈
给定一个字符串来代表一个学生的出勤记录，这个记录仅包含以下三个字符：

'A' : Absent，缺勤
'L' : Late，迟到
'P' : Present，到场
如果一个学生的出勤记录中不超过一个'A'(缺勤)并且不超过两个连续的'L'(迟到),那么这个学生会被奖赏。

你需要根据这个学生的出勤记录判断他是否会被奖赏。

示例 1:

输入: "PPALLP"
输出: True
示例 2:

输入: "PPALLL"
输出: False
 */
/*
*
*/
 class Solution {

     /**
      * @param Integer $n
      * @return Integer
      */
    function checkRecord($s) {
        if (empty($s)) return True;
        $isA = 0;
        $isL = 0;
        for ($i=0; $i < strlen($s); $i++) {
            if ($s[$i] == 'A'){
                $isA += 1;
            }else $isA = 0;
            if ($s[$i] == 'L'){
                $isL += 1;
            }else $isL = 0;
        }
        var_dump($isA, $isL);
        if ($isA > 1) return False;
        if ($isL > 2) return False;
        return True;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s ="AA";
$res = $object->checkRecord($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
