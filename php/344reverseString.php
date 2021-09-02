<?php
/*
* 344. 反转字符串
编写一个函数，其作用是将输入的字符串反转过来。输入字符串以字符数组 char[] 的形式给出。

不要给另外的数组分配额外的空间，你必须原地修改输入数组、使用 O(1) 的额外空间解决这一问题。

你可以假设数组中的所有字符都是 ASCII 码表中的可打印字符。



示例 1：

输入：["h","e","l","l","o"]
输出：["o","l","l","e","h"]
示例 2：

输入：["H","a","n","n","a","h"]
输出：["h","a","n","n","a","H"]
  * }
  */
 class Solution {

    /**
    * @param String[] $s
    * @return NULL
    */
    function reverseString(&$s) {
        $count = count($s);
        $left = 0;
        $right = $count - 1;
        while ($left < $right) {
            $tmp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $tmp;
            $left++;
            $right--;
        }
        return $s;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = ["h","e","l","l","o"];
$res = $object->reverseString($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
