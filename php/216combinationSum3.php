<?php
/*
* 216. 组合总和 III
找出所有相加之和为 n 的 k 个数的组合。组合中只允许含有 1 - 9 的正整数，并且每种组合中不存在重复的数字。

说明：

所有数字都是正整数。
解集不能包含重复的组合。
示例 1:

输入: k = 3, n = 7
输出: [[1,2,4]]
示例 2:

输入: k = 3, n = 9
输出: [[1,2,6], [1,3,5], [2,3,4]]
  * }
  */
class Solution {
    protected $ans = [];
   /**
    * @param Integer $k
    * @param Integer $n
    * @return Integer[][]
    */
   public function combinationSum3($k, $n)
   {
       $this->backtrack($k, $n, 1, []);
       return $this->ans;
   }

   private function backtrack($k, $target, $start, $path)
   {
       if ($target == 0 && count($path) == $k) {
           $this->ans[] = $path;
           return;
       }

       for ($i = $start; $i <= 9; ++$i) {
           if ($i > $target) continue;
           if (count($path) >= $k) continue;
           $path[] = $i;
           $this->backtrack($k, $target - $i, $i + 1, $path);
           array_pop($path);
       }
   }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$k = 9;
$n = 45;
$res = $object->combinationSum3($k, $n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
