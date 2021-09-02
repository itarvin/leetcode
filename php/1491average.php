<?php
class Solution {

    /**
     * 去掉最低工资和最高工资后的工资平均值
     * 给你一个整数数组 salary ，数组里每个数都是 唯一 的，其中 salary[i] 是第 i 个员工的工资。
     * 请你返回去掉最低工资和最高工资以后，剩下员工工资的平均值。
     *
     * 示例 1：

     * 输入：salary = [4000,3000,1000,2000]
     * 输出：2500.00000
     * 解释：最低工资和最高工资分别是 1000 和 4000 。
     * 去掉最低工资和最高工资以后的平均工资是 (2000+3000)/2= 2500
     * 示例 2：

     * 输入：salary = [1000,2000,3000]
     * 输出：2000.00000
     * 解释：最低工资和最高工资分别是 1000 和 3000 。
     * 去掉最低工资和最高工资以后的平均工资是 (2000)/1= 2000
     * 示例 3：

     * 输入：salary = [6000,5000,4000,3000,2000,1000]
     * 输出：3500.00000
     * 示例 4：

     * 输入：salary = [8000,9000,2000,3000,6000,1000]
     * 输出：4750.00000
     *
     *
     * 提示：
     *  3 <= salary.length <= 100
     *  10^3 <= salary[i] <= 10^6
     *  salary[i] 是唯一的。
     *  与真实值误差在 10^-5 以内的结果都将视为正确答案。
     */
    /**
    * @param Integer[] $salary
    * @return Float
    */
    function average($salary) {
        $newSalary = [];
        foreach ($salary as $key => $item) {
            if ($item >= 1000 && $item <= 1000000) {
                $newSalary[] = $item;
            }
        }
        $newSalary = array_unique($newSalary);
        if (count($newSalary) >= 3 && count($newSalary) <= 100) {
            arsort($newSalary);
            array_pop($newSalary);
            array_shift($newSalary);
            $median = array_sum($newSalary) / count($newSalary);
            return $median;
        }
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$salary = [412000,386000,392000,393000,389000,325000,132000,157000,395000,154000,25000,117000,65000,27000,97000,448000,323000,49000,71000,103000,114000,355000,182000,423000,383000,203000,153000,167000,278000];
$res = $object->average($salary);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
