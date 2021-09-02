<?php
/**
 * 599. 两个列表的最小索引总和
难度
简单

113

收藏

分享
切换为英文
接收动态
反馈
假设Andy和Doris想在晚餐时选择一家餐厅，并且他们都有一个表示最喜爱餐厅的列表，每个餐厅的名字用字符串表示。

你需要帮助他们用最少的索引和找出他们共同喜爱的餐厅。 如果答案不止一个，则输出所有答案并且不考虑顺序。 你可以假设总是存在一个答案。

示例 1:

输入:
["Shogun", "Tapioca Express", "Burger King", "KFC"]
["Piatti", "The Grill at Torrey Pines", "Hungry Hunter Steakhouse", "Shogun"]
输出: ["Shogun"]
解释: 他们唯一共同喜爱的餐厅是“Shogun”。
示例 2:

输入:
["Shogun", "Tapioca Express", "Burger King", "KFC"]
["KFC", "Shogun", "Burger King"]
输出: ["Shogun"]
解释: 他们共同喜爱且具有最小索引和的餐厅是“Shogun”，它有最小的索引和1(0+1)。
提示:

两个列表的长度范围都在 [1, 1000]内。
两个列表中的字符串的长度将在[1，30]的范围内。
下标从0开始，到列表的长度减1。
两个列表都没有重复的元素。
 */
/*
*
*/
 class Solution {

     /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $intersect = array_intersect($list1, $list2);
        $result = $res = [];
        foreach ($intersect as $key => $item) $result[$item] = array_search($item, $list1) + array_search($item, $list2);
        $min = min($result);
        foreach ($result as $key => $vm) if ($vm == $min) $res[] = $key;
        return $res;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$list1 = ["Shogun", "Tapioca Express", "Burger King", "KFC"];
$list2 = ["Piatti", "The Grill at Torrey Pines", "Hungry Hunter Steakhouse", "Shogun"];
$res = $object->findRestaurant($list1, $list2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
