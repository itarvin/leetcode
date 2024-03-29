<?php
/*
* 844. 比较含退格的字符串
难度
简单

298

收藏

分享
切换为英文
接收动态
反馈
给定 S 和 T 两个字符串，当它们分别被输入到空白的文本编辑器后，判断二者是否相等，并返回结果。 # 代表退格字符。

注意：如果对空文本输入退格字符，文本继续为空。



示例 1：

输入：S = "ab#c", T = "ad#c"
输出：true
解释：S 和 T 都会变成 “ac”。
示例 2：

输入：S = "ab##", T = "c#d#"
输出：true
解释：S 和 T 都会变成 “”。
示例 3：

输入：S = "a##c", T = "#a#c"
输出：true
解释：S 和 T 都会变成 “c”。
示例 4：

输入：S = "a#c", T = "b"
输出：false
解释：S 会变成 “c”，但 T 仍然是 “b”。


提示：

1 <= S.length <= 200
1 <= T.length <= 200
S 和 T 只含有小写字母以及字符 '#'。


进阶：

你可以用 O(N) 的时间复杂度和 O(1) 的空间复杂度解决该问题吗？
  */
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function backspaceCompare($s, $t) {
        $s_new_ = $this->deep($s);
        $t_new_ = $this->deep($t);
        if ($s_new_  == $t_new_) return True;
        return False;
    }

    function deep($string){
        $findkey = strpos($string, '#');
        if ($findkey) {
            $string = substr($string, 0, $findkey - 1).substr($string, $findkey + 1);
        }elseif (is_numeric($findkey)) $string = substr($string, $findkey + 1);
        if (is_numeric(strpos($string, '#'))) return $this->deep($string);
        return $string;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "xywrrmp";
$t = "xywrrmu#p";
$res = $object->backspaceCompare($s, $t);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
