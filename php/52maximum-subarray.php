<?php
/**
 * 20. 有效的括号
 * 给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串 s ，判断字符串是否*有效。
 *有效字符串需满足：
 *左括号必须用相同类型的右括号闭合。
 *左括号必须以正确的顺序闭合。
 * 
 *示例 1：
 *输入：s = "()"
 *输出：true
 *示例 2：
 *输入：s = "()[]{}"
 *输出：true
 *示例 3：
 *输入：s = "(]"
 *输出：false
 *示例 4：
 *输入：s = "([)]"
 *输出：false
 *示例 5：
 *输入：s = "{[]}"
 *输出：true
 * 

 *提示：

 *1 <= s.length <= 104
 *s 仅由括号 '()[]{}' 组成
 */
/*
*
*/
 class Solution {

    /**
    * @param String $astr
    * @return Boolean
    */
    function maxSubArray($nums) {
        $array = [];
        if (count($nums) == 1) {
            return $nums[0];
        }
        for ($i=1; $i < count($nums); $i++) {
            $array[] = array_chunk($nums, $i);
        }
        var_dump($array);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$astr = [-2,1,-3,4,-1,2,1,-5,4];
$res = $object->maxSubArray($astr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
