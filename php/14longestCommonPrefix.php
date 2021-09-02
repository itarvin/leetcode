<?php
/*
* 14. 最长公共前缀
编写一个函数来查找字符串数组中的最长公共前缀。

如果不存在公共前缀，返回空字符串 ""。

示例 1:

输入: ["flower","flow","flight"]
输出: "fl"
示例 2:

输入: ["dog","racecar","car"]
输出: ""
解释: 输入不存在公共前缀。
说明:

所有输入只包含小写字母 a-z 。
  */
class Solution {
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $result = "";
        if (!$strs) {
            return $result;
        }
        //该字符数组为空，直接返回“”
        $i =0;
        //用第一个字串的长度来操作，因为无论他是否为最长还是最短的串，都不影响结果
        while($i < count(str_split($strs[0]))){
            //将第一个字串的第i个字符赋给temp
            $temp = $strs[0][$i];
            //通过j++来进行与剩下的字串的第i个字符进行比较
            for ($j=0; $j < count($strs); $j++) {
                //如果第j个字串的第i个字符与temp相等，则判断下一个字串（j+1）的第i 个字符
                if ($strs[$j][$i] == $temp) {
                    continue;
                }else{
                    //如果不相等，则返回“”
                    return $result;
                }
            }
            //将每次相等的字符加起来
            $result .= $temp;
            $i++;
        }
        //返回输出结果
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$strs =["flower","flow","flight"];
$res = $object->longestCommonPrefix($strs);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
