<?php
/*
* 剑指 Offer II 032. 有效的变位词
难度
简单

2

收藏

分享
切换为英文
接收动态
反馈
给定两个字符串 s 和 t ，编写一个函数来判断它们是不是一组变位词（字母异位词）。

注意：若 s 和 t 中每个字符出现的次数都相同且字符顺序不完全相同，则称 s 和 t 互为变位词（字母异位词）。



示例 1:

输入: s = "anagram", t = "nagaram"
输出: true
示例 2:

输入: s = "rat", t = "car"
输出: false
示例 3:

输入: s = "a", t = "a"
输出: false


提示:

1 <= s.length, t.length <= 5 * 104
s and t 仅包含小写字母


进阶: 如果输入字符串包含 unicode 字符怎么办？你能否调整你的解法来应对这种情况？



注意：本题与主站 242 题相似（字母异位词定义不同）：https://leetcode-cn.com/problems/valid-anagram/

通过次数1,192提交次数1,983
  */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function specialArray($nums) {
        $count = count($nums);
        $result = [];
        for ($i=0; $i < ($count + 1); $i++) {
            $num = 0;
            for ($j=0; $j < $count; $j++) if ($nums[$j] >= $i) $num+= 1;
            if ($num == $i) $result[] = $i;
        }
        if (count($result) > 0) return max($result);
        return -1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$data = [
    [3,5],
    [0,4,3,0,4],
    [3,6,7,7,0],
    [0,0],
    [3,9,7,8,3,8,6,6]
];
for ($i=0; $i < count($data); $i++) {
    $res = $object->specialArray($data[$i]);
    $t2 = microtime(true);
    /****************************... 执行代码结束 ...****************************/
    var_dump($res);
    echo '<hr />';
    var_dump('耗时'.round($t2-$t1,3).'秒');
    echo '<hr />';
    var_dump('Now memory_get_usage: ' . memory_get_usage());
}
