<?php
/*
* 设计一个函数把两个数字相加。不得使用 + 或者其他算术运算符。
 */
class Solution {
    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function add($a, $b) {
        $tmpA =  decbin($a);
        $tmpB =  decbin($b);
        var_dump(bindec($tmpA + $tmpB));die;
        $lenA = strlen($tmpA);
        $lenB = strlen($tmpB);
        var_dump($tmpA, $tmpB);
        if ($lenA > $lenB) {
            var_dump(str_repeat('0', $lenA - $lenB).$tmpB);
            $count = str_repeat('0', $lenA - $lenB).$tmpB + $tmpA;
        }else {
            var_dump(str_repeat('0', $lenB - $lenA).$tmpA);
            $count = str_repeat('0', $lenB - $lenA).$tmpA + $tmpB;
        }

        var_dump($tmpA, $tmpB, bindec($count));die;
        if ($count < 0) {
            $count = - bindec($count);
        }else {
            $count = bindec($count);
        }
        return $count;
    }

}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$a = "1000000";
$b = "1";
$res = $object->add($a, $b);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
