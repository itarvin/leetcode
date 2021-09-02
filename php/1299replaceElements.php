<?php
/*
* 1299. 将每个元素替换为右侧最大元素
给你一个数组 arr ，请你将每个元素用它右边最大的元素替换，如果是最后一个元素，用 -1 替换。

完成所有替换操作后，请你返回这个数组。



示例：

输入：arr = [17,18,5,4,6,1]
输出：[18,6,6,6,1,-1]


提示：

1 <= arr.length <= 10^4
1 <= arr[i] <= 10^5
  */
class Solution {
    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function replaceElements($arr) {
        $temp = $arr;
        $result = [];
        for ($i=0; $i < count($arr); $i++) {
            unset($temp[$i]);
            $result[] = $temp ? max($temp) : -1;
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$arr = [17,18,5,4,6,1];
$res = $object->replaceElements($arr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
