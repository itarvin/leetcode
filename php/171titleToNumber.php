<?php
/**
 * 171. Excel 表列序号
难度
简单

282

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 columnTitle ，表示 Excel 表格中的列名称。返回该列名称对应的列序号。



例如，

    A -> 1
    B -> 2
    C -> 3
    ...
    Z -> 26
    AA -> 27
    AB -> 28
    ...


示例 1:

输入: columnTitle = "A"
输出: 1
示例 2:

输入: columnTitle = "AB"
输出: 28
示例 3:

输入: columnTitle = "ZY"
输出: 701
示例 4:

输入: columnTitle = "FXSHRXW"
输出: 2147483647


提示：

1 <= columnTitle.length <= 7
columnTitle 仅由大写英文组成
columnTitle 在范围 ["A", "FXSHRXW"] 内
 */
/*
*
*/
 class Solution {

     /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $az = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $data = [];
        for ($i=1; $i < strlen($az) + 1; $i++) $data[$az[$i - 1]] = $i;
        $column = strrev($columnTitle);
        $res_number = 0;
        for ($i=0; $i < strlen($column); $i++) {
            if ($i) {
                $res_number += bcmul($data[$column[$i]], pow(26, $i));
            }else $res_number += $data[$column[$i]];
        }
        return $res_number;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$columnTitle = "RXW";
$res = $object->titleToNumber($columnTitle);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
