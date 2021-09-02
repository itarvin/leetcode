<?php
/*
* 1773. 统计匹配检索规则的物品数量
难度
简单

14

收藏

分享
切换为英文
接收动态
反馈
给你一个数组 items ，其中 items[i] = [typei, colori, namei] ，描述第 i 件物品的类型、颜色以及名称。

另给你一条由两个字符串 ruleKey 和 ruleValue 表示的检索规则。

如果第 i 件物品能满足下述条件之一，则认为该物品与给定的检索规则 匹配 ：

ruleKey == "type" 且 ruleValue == typei 。
ruleKey == "color" 且 ruleValue == colori 。
ruleKey == "name" 且 ruleValue == namei 。
统计并返回 匹配检索规则的物品数量 。



示例 1：

输入：items = [["phone","blue","pixel"],["computer","silver","lenovo"],["phone","gold","iphone"]], ruleKey = "color", ruleValue = "silver"
输出：1
解释：只有一件物品匹配检索规则，这件物品是 ["computer","silver","lenovo"] 。
示例 2：

输入：items = [["phone","blue","pixel"],["computer","silver","phone"],["phone","gold","iphone"]], ruleKey = "type", ruleValue = "phone"
输出：2
解释：只有两件物品匹配检索规则，这两件物品分别是 ["phone","blue","pixel"] 和 ["phone","gold","iphone"] 。注意，["computer","silver","phone"] 未匹配检索规则。


提示：

1 <= items.length <= 104
1 <= typei.length, colori.length, namei.length, ruleValue.length <= 10
ruleKey 等于 "type"、"color" 或 "name"
所有字符串仅由小写字母组成
  */
class Solution {

    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue) {
        $data = [];
        foreach ($items as $key => $item_) {
            $data[$key]['type']     = $item_[0];
            $data[$key]['color']    = $item_[1];
            $data[$key]['name']     = $item_[2];
        }
        $count_array = array_count_values(array_column($data, $ruleKey));
        if (isset($count_array[$ruleValue])) return $count_array[$ruleValue];
        return 0;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$items = [["phone","blue","pixel"],["computer","silver","lenovo"],["phone","gold","iphone"]];
$ruleKey = "type";
$ruleValue = "phone";
$res = $object->countMatches($items, $ruleKey, $ruleValue);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
