<?php
/**
 * 1710. 卡车上的最大单元数
难度
简单

21

收藏

分享
切换为英文
接收动态
反馈
请你将一些箱子装在 一辆卡车 上。给你一个二维数组 boxTypes ，其中 boxTypes[i] = [numberOfBoxesi, numberOfUnitsPerBoxi] ：

numberOfBoxesi 是类型 i 的箱子的数量。
numberOfUnitsPerBoxi 是类型 i 每个箱子可以装载的单元数量。
整数 truckSize 表示卡车上可以装载 箱子 的 最大数量 。只要箱子数量不超过 truckSize ，你就可以选择任意箱子装到卡车上。

返回卡车可以装载 单元 的 最大 总数。



示例 1：

输入：boxTypes = [[1,3],[2,2],[3,1]], truckSize = 4
输出：8
解释：箱子的情况如下：
- 1 个第一类的箱子，里面含 3 个单元。
- 2 个第二类的箱子，每个里面含 2 个单元。
- 3 个第三类的箱子，每个里面含 1 个单元。
可以选择第一类和第二类的所有箱子，以及第三类的一个箱子。
单元总数 = (1 * 3) + (2 * 2) + (1 * 1) = 8
示例 2：

输入：boxTypes = [[5,10],[2,5],[4,7],[3,9]], truckSize = 10
输出：91


提示：

1 <= boxTypes.length <= 1000
1 <= numberOfBoxesi, numberOfUnitsPerBoxi <= 1000
1 <= truckSize <= 106
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[][] $boxTypes
     * @param Integer $truckSize
     * @return Integer
     */
    function maximumUnits($boxTypes, $truckSize) {
        $boxtypes_new = [];
        foreach ($boxTypes as $key => $item) {
            $boxtypes_new[$key]['per'] = $item[1];
            $boxtypes_new[$key]['number'] = $item[0];
        }
        array_multisort($boxtypes_new, SORT_DESC);
        $max = 0;
        $temp_size = 0;
        foreach ($boxtypes_new as $key => $item) {
            $temp_size += $item['number'];
            if ($temp_size <= $truckSize) {
                $max = $max + $item['number'] * $item['per'];
            }else{
                $number = $truckSize - ($temp_size - $item['number']);
                $max = $max + $item['per'] * $number;
                break;
            }
        }
        return $max;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$boxTypes = [[5,10],[2,5],[4,7],[3,9]];
$truckSize = 10;
$res = $object->maximumUnits($boxTypes, $truckSize);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
