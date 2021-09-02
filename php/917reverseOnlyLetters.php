<?php
/*
* 917. 仅仅反转字母
给定一个字符串 S，返回 “反转后的” 字符串，其中不是字母的字符都保留在原地，而所有字母的位置发生反转。



示例 1：

输入："ab-cd"
输出："dc-ba"
示例 2：

输入："a-bC-dEf-ghIj"
输出："j-Ih-gfE-dCba"
示例 3：

输入："Test1ng-Leet=code-Q!"
输出："Qedo1ct-eeLg=ntse-T!"


提示：

S.length <= 100
33 <= S[i].ASCIIcode <= 122
S 中不包含 \ or "
  * }
  */
 class Solution {

    /**
    * @param String $S
    * @return String
    */
    function reverseOnlyLetters($S) {
        $newArr = [];
        $cutString = [];
        // 过滤出对应点的字母和非字母的
        foreach (str_split($S) as $key => $item) {
            if (preg_match('/[a-zA-Z]/',$item, $matchs)) {
                $newArr[] = $item;
            }else {
                // 存储非非字母的位置
                $cutString[$key] = $item;
            }
        }
        // 反转数组
        $reverseArr = array_reverse($newArr);
        // 遍历插入到对应的位置
        foreach ($cutString as $key => $item) {
            array_splice($reverseArr, $key, 0, $item);
        }
        // 转字符串
        return implode('', $reverseArr);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = 'Test1ng-Leet=code-Q!';
$res = $object->reverseOnlyLetters($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
