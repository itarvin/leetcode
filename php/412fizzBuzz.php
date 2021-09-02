<?php
/*
* 412. Fizz Buzz
难度
简单

103

收藏

分享
切换为英文
接收动态
反馈
写一个程序，输出从 1 到 n 数字的字符串表示。

1. 如果 n 是3的倍数，输出“Fizz”；

2. 如果 n 是5的倍数，输出“Buzz”；

3.如果 n 同时是3和5的倍数，输出 “FizzBuzz”。

示例：

n = 15,

返回:
[
    "1",
    "2",
    "Fizz",
    "4",
    "Buzz",
    "Fizz",
    "7",
    "8",
    "Fizz",
    "Buzz",
    "11",
    "Fizz",
    "13",
    "14",
    "FizzBuzz"
]
  */
class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $result = [];
        // for ($i=1; $i <= $n; $i++) {
        //     if (($i % 3 == 0) && ($i % 5 == 0)) {
        //         $result[] = 'FizzBuzz';
        //     }elseif (($i % 3 == 0) && ($i % 5 !== 0)) {
        //         $result[] = 'Fizz';
        //     }elseif (($i % 3 !== 0) && ($i % 5 == 0)) {
        //         $result[] = 'Buzz';
        //     }else $result[] = (string)$i;
        // }
        $result = [];
        $i = 1;
        while ($i <= $n) {
            if (($i % 3 == 0) && ($i % 5 == 0)) {
                $result[] = 'FizzBuzz';
            }elseif (($i % 3 == 0) && ($i % 5 !== 0)) {
                $result[] = 'Fizz';
            }elseif (($i % 3 !== 0) && ($i % 5 == 0)) {
                $result[] = 'Buzz';
            }else $result[] = (string)$i;
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = 1;
$res = $object->fizzBuzz($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
