<?php
/*
* 104. 二叉树的最大深度
给定一个二叉树，找出其最大深度。

二叉树的深度为根节点到最远叶子节点的最长路径上的节点数。

说明: 叶子节点是指没有子节点的节点。

示例：
给定二叉树 [3,9,20,null,null,15,7]，

    3
   / \
  9  20
    /  \
   15   7
返回它的最大深度 3 。
  */

class Solution {
    /**
    * @param TreeNode $root
    * @return Integer
    */
    function maxDepth($root) {
        if ($root === null) return 0;
        $left = $this->maxDepth($root->left);
        $right = $this->maxDepth($root->right);
        return max($left, $right) + 1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$root = [3,9,20,null,null,15,7];
$res = $object->maxDepth($root);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
