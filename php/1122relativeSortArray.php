<?php
/**
 * 1122. 数组的相对排序
难度
简单

181

收藏

分享
切换为英文
接收动态
反馈
给你两个数组，arr1 和 arr2，

arr2 中的元素各不相同
arr2 中的每个元素都出现在 arr1 中
对 arr1 中的元素进行排序，使 arr1 中项的相对顺序和 arr2 中的相对顺序相同。未在 arr2 中出现过的元素需要按照升序放在 arr1 的末尾。



示例：

输入：arr1 = [2,3,1,3,2,4,6,7,9,2,19], arr2 = [2,1,4,3,9,6]
输出：[2,2,2,1,4,3,3,9,6,7,19]


提示：

1 <= arr1.length, arr2.length <= 1000
0 <= arr1[i], arr2[i] <= 1000
arr2 中的元素 arr2[i] 各不相同
arr2 中的每个元素 arr2[i] 都出现在 arr1 中
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    function relativeSortArray($arr1, $arr2) {
        sort($arr1);
        $result = [];
        foreach ($arr2 as $key => $item) foreach ($arr1 as $ke => $vm) if ($item == $vm) $result[] = $vm;
        $diif_array = array_diff($arr1, $arr2);
        return array_merge($result, $diif_array);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$arr1 = [2,3,1,3,2,4,6,7,9,2,19];
$arr2 = [2,1,4,3,9,6];
$res = $object->relativeSortArray($arr1, $arr2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
