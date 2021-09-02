<?php
/*
* 830. 较大分组的位置
难度
简单

118

收藏

分享
切换为英文
接收动态
反馈
在一个由小写字母构成的字符串 s 中，包含由一些连续的相同字符所构成的分组。

例如，在字符串 s = "abbxxxxzyy" 中，就含有 "a", "bb", "xxxx", "z" 和 "yy" 这样的一些分组。

分组可以用区间 [start, end] 表示，其中 start 和 end 分别表示该分组的起始和终止位置的下标。上例中的 "xxxx" 分组用区间表示为 [3,6] 。

我们称所有包含大于或等于三个连续字符的分组为 较大分组 。

找到每一个 较大分组 的区间，按起始位置下标递增顺序排序后，返回结果。



示例 1：

输入：s = "abbxxxxzzy"
输出：[[3,6]]
解释："xxxx" 是一个起始于 3 且终止于 6 的较大分组。
示例 2：

输入：s = "abc"
输出：[]
解释："a","b" 和 "c" 均不是符合要求的较大分组。
示例 3：

输入：s = "abcdddeeeeaabbbcd"
输出：[[3,5],[6,9],[12,14]]
解释：较大分组为 "ddd", "eeee" 和 "bbb"
示例 4：

输入：s = "aba"
输出：[]

提示：

1 <= s.length <= 1000
s 仅含小写英文字母
  */
class Solution {

    /**
     * @param String $s
     * @return Integer[][]
     */
    function largeGroupPositions($s) {
        $result = [];
        $len = strlen($s);
        $count = 0;

        $left = '';
        for ($i=0; $i < $len; $i++) {
            $start = $s[$i];
            $endkey = $i + 1;
            $next = $endkey < $len ? $s[$endkey] : '';
            if ($start == $next) {
                $left = $i;
            }else $right = $endkey;
            if ($endkey - $i > 2) {
                $result[] = [$i, $endkey];
            }



        //     $tempmin = [];
        //     $tempmax = [];
        //     for ($j=$i + 1; $j < $len; $j++) {
        //         $left = $s[$i];
        //         $right = $s[$j];
        //         // var_dump($left ,$right, '4444');
        //         // if ($left !== $right) {
        //         //     var_dump($i, $j);
        //         //     break;
        //         // }
        //         if ($left == $right) {
        //             if ($j - $i > 3){
        //                 $tempmin[] = $i;
        //                 $tempmax[] = $j;
        //             }
        //             // $i = $j;
        //         }else {
        //             break;
        //         }
        //     }
        //     // var_dump($tempmin, $tempmax);die;
        //     if (count($tempmin) && count($tempmax)) $result[] = [min($tempmin), max($tempmax)];
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "abcdddeeeeaabbbcd";
$res = $object->largeGroupPositions($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
