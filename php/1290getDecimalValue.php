<?php
/*
* 1290. 二进制链表转整数
难度
简单

93

收藏

分享
切换为英文
接收动态
反馈
给你一个单链表的引用结点 head。链表中每个结点的值不是 0 就是 1。已知此链表是一个整数数字的二进制表示形式。

请你返回该链表所表示数字的 十进制值 。



示例 1：



输入：head = [1,0,1]
输出：5
解释：二进制数 (101) 转化为十进制数 (5)
示例 2：

输入：head = [0]
输出：0
示例 3：

输入：head = [1]
输出：1
示例 4：

输入：head = [1,0,0,1,0,0,1,1,1,0,0,0,0,0,0]
输出：18880
示例 5：

输入：head = [0,0]
输出：0


提示：

链表不为空。
链表的结点总数不超过 30。
每个结点的值不是 0 就是 1。
通过次数52,343提交次数64,693
  */
class Solution {
    /**
     * @param ListNode $head
     * @return Integer
     */
    function getDecimalValue($head) {
        return bindec(join('', $head));
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$head = [1,0,0,1,0,0,1,1,1,0,0,0,0,0,0];
$res = $object->getDecimalValue($head);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
