<?php
/**
 * 1200. 最小绝对差
难度
简单

47

收藏

分享
切换为英文
接收动态
反馈
给你个整数数组 arr，其中每个元素都 不相同。

请你找到所有具有最小绝对差的元素对，并且按升序的顺序返回。



示例 1：

输入：arr = [4,2,1,3]
输出：[[1,2],[2,3],[3,4]]
示例 2：

输入：arr = [1,3,6,10,15]
输出：[[1,3]]
示例 3：

输入：arr = [3,8,-10,23,19,-4,-14,27]
输出：[[-14,-10],[19,23],[23,27]]


提示：

2 <= arr.length <= 10^5
-10^6 <= arr[i] <= 10^6
通过次数17,266提交次数25,166
 */
/*
*
*/
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[][]
     */
    function minimumAbsDifference($arr) {
        sort($arr);
        $data = $result = [];
        $count = count($arr);
        for ($i=0; $i < $count; $i++) {
            $nextkey = $i+1;
            if ($nextkey < $count) $data[] = ['min' => $arr[$nextkey] - $arr[$i], 'array' => [$arr[$i], $arr[$nextkey]]];
        }
        $min = min(array_column($data, 'min'));
        for ($i=0; $i < count($data); $i++) if ($data[$i]['min'] == $min) $result[] = $data[$i]['array'];
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$arr = [3,8,-10,23,19,-4,-14,27];
$res = $object->minimumAbsDifference($arr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
