<?php
/**
 * 1288. 删除被覆盖区间
难度
中等

51

收藏

分享
切换为英文
接收动态
反馈
给你一个区间列表，请你删除列表中被其他区间所覆盖的区间。

只有当 c <= a 且 b <= d 时，我们才认为区间 [a,b) 被区间 [c,d) 覆盖。

在完成所有删除操作后，请你返回列表中剩余区间的数目。



示例：

输入：intervals = [[1,4],[3,6],[2,8]]
输出：2
解释：区间 [3,6] 被区间 [2,8] 覆盖，所以它被删除了。


提示：​​​​​​

1 <= intervals.length <= 1000
0 <= intervals[i][0] < intervals[i][1] <= 10^5
对于所有的 i != j：intervals[i] != intervals[j]
通过次数12,798提交次数22,706
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function removeCoveredIntervals($intervals) {
        $count = count($intervals);
        for ($i=0; $i < $count; $i++) {
            for ($j= $i + 1; $j < $count; $j++) {
                if ($intervals[$j][0] <= $intervals[$i][0] && $intervals[$i][1] <= $intervals[$j][1]) unset($intervals[$i]);
                if ($intervals[$i][0] <= $intervals[$j][0] && $intervals[$j][1] <= $intervals[$i][1]) unset($intervals[$j]);
            }
        }
        return count($intervals);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$intervals = [[1,4],[2,3]];
$res = $object->removeCoveredIntervals($intervals);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
