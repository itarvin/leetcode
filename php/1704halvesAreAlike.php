<?php
/**
 * 1704. 判断字符串的两半是否相似
难度
简单

2

收藏

分享
切换为英文
接收动态
反馈
给你一个偶数长度的字符串 s 。将其拆分成长度相同的两半，前一半为 a ，后一半为 b 。

两个字符串 相似 的前提是它们都含有相同数目的元音（'a'，'e'，'i'，'o'，'u'，'A'，'E'，'I'，'O'，'U'）。注意，s 可能同时含有大写和小写字母。

如果 a 和 b 相似，返回 true ；否则，返回 false 。



示例 1：

输入：s = "book"
输出：true
解释：a = "bo" 且 b = "ok" 。a 中有 1 个元音，b 也有 1 个元音。所以，a 和 b 相似。
示例 2：

输入：s = "textbook"
输出：false
解释：a = "text" 且 b = "book" 。a 中有 1 个元音，b 中有 2 个元音。因此，a 和 b 不相似。
注意，元音 o 在 b 中出现两次，记为 2 个。
示例 3：

输入：s = "MerryChristmas"
输出：false
示例 4：

输入：s = "AbCdEfGh"
输出：true


提示：

2 <= s.length <= 1000
s.length 是偶数
s 由 大写和小写 字母组成
 */
class Solution {

	/**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike($s) {
		$yuanyin = ['a','e','i','o','u','A','E','I','O','U'];
		$count = strlen($s);
		$cut = $count / 2;
		$left = $right = 0;
		for ($i=0; $i < $count; $i++) {
			if ($i < $cut) {
				if (in_array($s[$i], $yuanyin)) $left += 1;
			}else{
				if (in_array($s[$i], $yuanyin)) $right += 1;
			}
		}
		if ($left == $right) return True;
		return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "textbook";
$k = 5;
$res = $object->halvesAreAlike($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
