<?php
/*
* 1002. 查找常用字符
给定仅有小写字母组成的字符串数组 A，返回列表中的每个字符串中都显示的全部字符（包括重复字符）组成的列表。例如，如果一个字符在每个字符串中出现 3 次，但不是 4 次，则需要在最终答案中包含该字符 3 次。

你可以按任意顺序返回答案。



示例 1：

输入：["bella","label","roller"]
输出：["e","l","l"]
示例 2：

输入：["cool","lock","cook"]
输出：["c","o"]


提示：

1 <= A.length <= 100
1 <= A[i].length <= 100
A[i][j] 是小写字母
  * }
  */
class Solution {
    /**
     * @param String[] $A
     * @return String[]
     */
    function commonChars($A) {
        $array = [];
        $len = sizeof($A);
        foreach ($A as $key => $item){
            $temp1 = str_split($item);
            $temp2 = array_count_values($temp1);
            foreach ($temp2 as $k => $v){
                if (isset($array[$k])){
                    $array[$k] = [min($array[$k][0] ,$v), $array[$k][1]+1];
                }else {
                    $array[$k] = [$v,1];
                }
            }
        }
        $result = [];
        foreach ($array as $k => $v){
            if ($v[1] == $len){
                for ($i = 0; $i < $v[0]; $i++){
                    $result[] = $k;
                }
            }
        }
        return $result;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$A = ["cool","lock","cook"];
$res = $object->commonChars($A);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
