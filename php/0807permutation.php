<?php
/*
* 442. 数组中重复的数据
给定一个整数数组 a，其中1 ≤ a[i] ≤ n （n为数组长度）, 其中有些元素出现两次而其他元素出现一次。

找到所有出现两次的元素。

你可以不用到任何额外空间并在O(n)时间复杂度内解决这个问题吗？

示例：

输入:
[4,3,2,7,8,2,3,1]

输出:
[2,3]
  */
class Solution {
    /**
     * @param String $S
     * @return String[]
     */
    function permutation($S) {
        $sArr = str_split($S);
        $sKey = array_keys($sArr);
        $res = $this->permute($sKey);
        $result = [];
        foreach ($res as $key => $items) {
            $temp = '';
            foreach ($items as $ky => $item) $temp .= $sArr[$item];
            $result[] = $temp;
        }
        return $result;
    }

    function permute($nums){
        $count = count($nums);
        if ($count == 1) return [$nums];
        $last = $x = $count - 1;
        $result[] = $nums;
        while (true) {
            $y = $x--;
            if ($nums[$x] < $nums[$y]) {
                $z = $last;
                while ($nums[$x] > $nums[$z]) $z--;
                list($nums[$x], $nums[$z]) = array($nums[$z], $nums[$x]);
                for ($i = $last; $i > $y; $i--, $y++) {
                    list($nums[$i], $nums[$y]) = array($nums[$y], $nums[$i]);
                }
                $x = $last;
                $result[] = $nums;
            }
            if ($x == 0) break;
        }
        return $result;
    }
}


$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$S = "qwe";
$res = $object->permutation($S);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
