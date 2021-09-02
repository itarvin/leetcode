<?php
/*
784. 字母大小写全排列
给定一个字符串S，通过将字符串S中的每个字母转变大小写，我们可以获得一个新的字符串。返回所有可能得到的字符串集合。



示例：
输入：S = "a1b2"
输出：["a1b2", "a1B2", "A1b2", "A1B2"]

输入：S = "3z4"
输出：["3z4", "3Z4"]

输入：S = "12345"
输出：["12345"]


提示：

S 的长度不超过12。
S 仅由数字和字母组成。
 */
class Solution {
    /**
     * @param String $S
     * @return String[]
     */
    function letterCasePermutation($S) {
        
        $count = 0;
        for ($i=0; $i < strlen($S); $i++) {
            if (is_numeric($S[$i])) $count += 1;
        }
        $diff = strlen($S) - $count;
    }

}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$S = "a1b2";
$res = $object->letterCasePermutation($S);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
