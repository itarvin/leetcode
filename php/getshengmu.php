<?php
/**
 * 给定两个字符串形式的非负整数 num1 和num2 ，计算它们的和。
 *   提示：
 *
 *   num1 和num2 的长度都小于 5100
 *   num1 和num2 都只包含数字 0-9
 *   num1 和num2 都不包含任何前导零
 *   你不能使用任何內建 BigInteger 库， 也不能直接将输入的字符串转换为整数形式
 */
/*
*
*/
 class Solution {

    /**
    * @param String $astr
    * @return Boolean
    */
    function get_initials($s) {
        $initials = ['b','p','m','f','d','t','n','l','g','k','h','j','q','x','zh','ch','sh','r','z','c','s','y', 'w'];
        foreach ($initials as $key => $item_) {
            if ($this->startsWith($s, $item_))  return $item_;
        }
        return $s;
    }
    function startsWith($haystack, $needle) {
        return substr_compare($haystack, $needle, 0, strlen($needle)) === 0;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$astr = "";
$list = ['zhào','qián','sūn','lǐ','zhōu','wú','zhèng','wáng','féng','chén','chǔ','wèi','jiǎng','shěn','hán','yáng','zhū','qín','yóu','xǔ','hé','lǚ','shī','zhāng','kǒng','cáo','yán','huá','jīn','wèi','táo','jiāng','qī','xiè','zōu','yù','bǎi','shuǐ','dòu','zhāng','yún','sū','pān','gé','xī','fàn','péng','láng','lǔ','wéi','chāng','mǎ','miáo','fèng','huā','fāng','yú','rèn','yuán','liǔ','fēng','bào','shǐ','táng','fèi','lián','cén','xuē','léi','hè','ní','tāng','téng','yīn','luō','bì','hǎo','wū','ān','cháng','lè','yú','shí','fù','pí','biàn','qí'];
$pin = ['z','q','s','l','z','w','z','w','f','c','c','w','j','s','h','y','z','q','y','x','h','l','s','z','k','c','y','h','j','w','t','j','q','x','z','y','b','s','d','z','y','s','p','g','x','f','p','l','l','w','c','m','m','f','h','f','y','r','y','l','f','b','s','t','f','l','c','x','l','h','n','t','t','y','l','b','h','w','a','c','l','y','s','f','p','b','q','k','w','y','y','b','g','m','p','h','h','m','x','y','y','s','z','w','q','m','y','d','m','b','m','z','j','f','c','d','t','s','m','p','x','j','s','q','x','z','d','l','d','r','l','m','x','j','m','q','j','l','l','w','j','t','y','g','m','s','l','d','z','x','q','l','g','x','c','t','f','h','l','h','y','w','z','k','z','g','l','m','j','f','q','m','g','j','y','z','d','x','b','d','y','d','h','h','b','z','z','s','c','j','n','g','c','j','x','h','p','l','r','w','x','y','y','h','z','q','j','f','r','y','c','j','j','b','m','s','j','d','f','w','w','j','b','g','m','k','s','g','c','h','m','p','q','x','b','y','q','z','y'];
for ($i=0; $i < count($list); $i++) {
    $res = $object->get_initials($list[$i]);
    echo('处理的：'.$res. '原有：'.$pin[$i]);
    echo('<hr/>');
}
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
