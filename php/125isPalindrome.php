<?php
/**
 * 给定一个字符串，验证它是否是回文串，只考虑字母和数字字符，可以忽略字母的大小写。

说明：本题中，我们将空字符串定义为有效的回文串。

 

示例 1:

输入: "A man, a plan, a canal: Panama"
输出: true
解释："amanaplanacanalpanama" 是回文串
示例 2:

输入: "race a car"
输出: false
解释："raceacar" 不是回文串
 

提示：

1 <= s.length <= 2 * 105
字符串 s 由 ASCII 字符组成

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/valid-palindrome
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
/*
*
*/
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        preg_match_all("/[a-z|A-Z|0-9]/", $s ,$result);
        $old_ = strtolower(join('', $result[0]));
        if ($old_ == strrev($old_)) return True;
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "  ";
$res = $object->isPalindrome($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
