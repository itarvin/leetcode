<?php
/**
 *学校在拍年度纪念照时，一般要求学生按照 非递减 的高度顺序排列。

请你返回能让所有学生以 非递减 高度排列的最小必要移动人数。

注意，当一组学生被选中时，他们之间可以以任何可能的方式重新排序，而未被选中的学生应该保持不动。

 

示例：

输入：heights = [1,1,4,2,1,3]
输出：3
解释：
当前数组：[1,1,4,2,1,3]
目标数组：[1,1,1,2,3,4]
在下标 2 处（从 0 开始计数）出现 4 vs 1 ，所以我们必须移动这名学生。
在下标 4 处（从 0 开始计数）出现 1 vs 3 ，所以我们必须移动这名学生。
在下标 5 处（从 0 开始计数）出现 3 vs 4 ，所以我们必须移动这名学生。
示例 2：

输入：heights = [5,1,2,3,4]
输出：5
示例 3：

输入：heights = [1,2,3,4,5]
输出：0
 

提示：

1 <= heights.length <= 100
1 <= heights[i] <= 100

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/height-checker
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
/*
*
*/
class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights) {
        return $this->checkArr($heights);
    }
    function checkArr($heights, $nums = 0){
        for ($i=0 ; $i <count($heights); $i++) {
    		$data = '';
    		for ($j=$i; $j < count($heights); $j++) {
    			if ($heights[$i] > $heights[$j+1]) {
    				$data          = $heights[$i];
    				$heights[$i]   = $heights[$j+1];
    				$heights[$j+1] = $data;
                    $nums += 1;
    			}
    		}
    	}
        return $nums;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$heights = [5,1,2,3,4];
$res = $object->heightChecker($heights);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
