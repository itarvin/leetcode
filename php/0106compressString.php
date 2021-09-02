<?php
/**
 * 面试题 01.06. 字符串压缩
难度
简单

93

收藏

分享
切换为英文
接收动态
反馈
字符串压缩。利用字符重复出现的次数，编写一种方法，实现基本的字符串压缩功能。比如，字符串aabcccccaaa会变为a2b1c5a3。若“压缩”后的字符串没有变短，则返回原先的字符串。你可以假设字符串中只包含大小写英文字母（a至z）。

示例1:

 输入："aabcccccaaa"
 输出："a2b1c5a3"
示例2:

 输入："abbccd"
 输出："abbccd"
 解释："abbccd"压缩后为"a1b2c2d1"，比原字符串长度更长。
提示：

字符串长度在[0, 50000]范围内。
 */
/*
*
*/
 class Solution {

    /**
     * @param String $S
     * @return String
     */
    function compressString($S) {
        $result = '';
        $start = $S[0];
        $num = 1;

        for ($i=0; $i < strlen($S); $i++) {
            $next = $S[$i+1];
            if ($start != $next) {
                $result = $result.$start.$num;
                $num = 1;
                $start = $next;
            }else{
                $num += 1;
            }
            if ($i == strlen($S) - 1 && $next != '') $result = $result.$start.$num;
        }
        if (strlen($result) >= strlen($S)) return $S;
        return $result;
    }
    // function compressString($S) {
    //     $result_str = $this->check($S);
    //     if (strlen($result_str) >= strlen($S)) return $S;
    //     return $result_str;
    // }
    //
    // function check($S, $result = ''){
    //     $start = $S[0];
    //     $num = 0;
    //     $end = 0;
    //     for ($i=0; $i < strlen($S); $i++) {
    //         if ($start != $S[$i]){
    //             $end = $i;
    //             break;
    //         }
    //         $num += 1;
    //     }
    //     $result = $result.$start.$num;
    //     $next = substr($S, $end);
    //     if ($next == $S)  return $result;
    //     if (strlen($next)) return $this->check($next, $result);
    // }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$S = "a";
$res = $object->compressString($S);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
