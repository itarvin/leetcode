<?php
/*
* 763. 划分字母区间
字符串 S 由小写字母组成。我们要把这个字符串划分为尽可能多的片段，同一个字母只会出现在其中的一个片段。返回一个表示每个字符串片段的长度的列表。



示例 1：

输入：S = "ababcbacadefegdehijhklij"
输出：[9,7,8]
解释：
划分结果为 "ababcbaca", "defegde", "hijhklij"。
每个字母最多出现在一个片段中。
像 "ababcbacadefegde", "hijhklij" 的划分是错误的，因为划分的片段数较少。


提示：

S的长度在[1, 500]之间。
S只包含小写字母 'a' 到 'z' 。
  */
class Solution {
    /**
     * @param String $S
     * @return Integer[]
     */
    function partitionLabels($S) {
        $strArr = str_split($S);
        $result = [];
        foreach (array_unique($strArr) as $key => $item) {
            $result[$item] = [strpos($S, $item), strrpos($S, $item)];
        }

        foreach ($result as $key => $item) {
            $temp = $item;
        }

    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$S = "ababcbacadefegdehijhklij";
$res = $object->partitionLabels($S);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
