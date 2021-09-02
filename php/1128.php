<?php
/* 1128. 等价多米诺骨牌对的数量
给你一个由一些多米诺骨牌组成的列表 dominoes。

如果其中某一张多米诺骨牌可以通过旋转 0 度或 180 度得到另一张多米诺骨牌，我们就认为这两张牌是等价的。

形式上，dominoes[i] = [a, b] 和 dominoes[j] = [c, d] 等价的前提是 a==c 且 b==d，或是 a==d 且 b==c。

在 0 <= i < j < dominoes.length 的前提下，找出满足 dominoes[i] 和 dominoes[j] 等价的骨牌对 (i, j) 的数量。



示例：

输入：dominoes = [[1,2],[2,1],[3,4],[5,6]]
输出：1


提示：

1 <= dominoes.length <= 40000
1 <= dominoes[i][j] <= 9
 */
class Solution {

    /**
     * @param Integer[][] $dominoes
     * @return Integer
     */
    function numEquivDominoPairs($dominoes) {
        $count = count($dominoes);
        $total = 0;
        for ($i=0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if (count(array_diff($dominoes[$i], array_reverse($dominoes[$j]))) == 0 ) {
                    var_dump($dominoes[$i], array_reverse($dominoes[$j]), 'dddd');
                    $total += 1;
                }
            }
        }
        return $total;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$dominoes = [[1,2],[1,2],[1,1],[1,2],[2,2]];
$res = $object->numEquivDominoPairs($dominoes);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
