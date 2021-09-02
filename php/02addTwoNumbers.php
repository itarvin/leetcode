<?php
/*
* 给出两个 非空 的链表用来表示两个非负的整数。其中，它们各自的位数是按照 逆序 的方式存储的，并且它们的每个节点只能存储 一位 数字。
* 如果，我们将这两个数相加起来，则会返回一个新的链表来表示它们的和。
* 您可以假设除了数字 0 之外，这两个数都不会以 0 开头。
*/

/**
 * 示例:
 * 输入：(2 -> 4 -> 3) + (5 -> 6 -> 4)
 * 输出：7 -> 0 -> 8
 * 原因：342 + 465 = 807
 */
 /**
  * Definition for a singly-linked list.
  * class ListNode {
  *     public $val = 0;
  *     public $next = null;
  *     function __construct($val) { $this->val = $val; }
  * }
  */
 class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        // $result = $l1 + $l2;
        // $result = (int)strrev($result);
        // $newResult = str_split($result);
        // foreach ($newResult as $key => $item) {
        //     $lian->$key = (string)$item;
        // }
        // return $lian;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
// $l1 = 342;
$l1 = 243;
// $l2 = 465;
$l2 = 564;
$res = $object->addTwoNumbers($l1, $l2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
