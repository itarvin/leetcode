<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function countPrimes($n) {
		$arr = [];
		for ($i=2; $i < $n; $i++) {
			if ($this->isPrime($i)) {
				$arr[] = $i;
			}
		}
		return count($arr);
	}
	function isPrime($n) {
	    if ($n <= 3) {
	        return $n > 1;
	    } else if ($n % 2 === 0 || $n % 3 === 0) {
			// 排除能被2整除的数(2x)和被3整除的数(3x)
	        return false;
	    } else {
			// 排除能被6x+1和6x+5整除的数
	        for ($i = 5; $i * $i <= $n; $i += 6) {
	            if ($n % $i === 0 || $n % ($i + 2) === 0) {
	                return false;
	            }
	        }
	        return true;
	    }
	}
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = mt_rand(2, 1000);
$res = $object->countPrimes(2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($n, $res);
echo '<hr />';
var_dump('耗时'.($t2-$t1).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
