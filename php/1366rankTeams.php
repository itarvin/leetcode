<?php
/**
 * 1366. 通过投票对团队排名
难度
中等

56

收藏

分享
切换为英文
接收动态
反馈
现在有一个特殊的排名系统，依据参赛团队在投票人心中的次序进行排名，每个投票者都需要按从高到低的顺序对参与排名的所有团队进行排位。

排名规则如下：

参赛团队的排名次序依照其所获「排位第一」的票的多少决定。如果存在多个团队并列的情况，将继续考虑其「排位第二」的票的数量。以此类推，直到不再存在并列的情况。
如果在考虑完所有投票情况后仍然出现并列现象，则根据团队字母的字母顺序进行排名。
给你一个字符串数组 votes 代表全体投票者给出的排位情况，请你根据上述排名规则对所有参赛团队进行排名。

请你返回能表示按排名系统 排序后 的所有团队排名的字符串。



示例 1：

输入：votes = ["ABC","ACB","ABC","ACB","ACB"]
输出："ACB"
解释：A 队获得五票「排位第一」，没有其他队获得「排位第一」，所以 A 队排名第一。
B 队获得两票「排位第二」，三票「排位第三」。
C 队获得三票「排位第二」，两票「排位第三」。
由于 C 队「排位第二」的票数较多，所以 C 队排第二，B 队排第三。
示例 2：

输入：votes = ["WXYZ","XYZW"]
输出："XWYZ"
解释：X 队在并列僵局打破后成为排名第一的团队。X 队和 W 队的「排位第一」票数一样，但是 X 队有一票「排位第二」，而 W 没有获得「排位第二」。
示例 3：

输入：votes = ["ZMNAGUEDSJYLBOPHRQICWFXTVK"]
输出："ZMNAGUEDSJYLBOPHRQICWFXTVK"
解释：只有一个投票者，所以排名完全按照他的意愿。
示例 4：

输入：votes = ["BCA","CAB","CBA","ABC","ACB","BAC"]
输出："ABC"
解释：
A 队获得两票「排位第一」，两票「排位第二」，两票「排位第三」。
B 队获得两票「排位第一」，两票「排位第二」，两票「排位第三」。
C 队获得两票「排位第一」，两票「排位第二」，两票「排位第三」。
完全并列，所以我们需要按照字母升序排名。
示例 5：

输入：votes = ["M","M","M","M"]
输出："M"
解释：只有 M 队参赛，所以它排名第一。


提示：

1 <= votes.length <= 1000
1 <= votes[i].length <= 26
votes[i].length == votes[j].length for 0 <= i, j < votes.length
votes[i][j] 是英文 大写 字母
votes[i] 中的所有字母都是唯一的
votes[0] 中出现的所有字母 同样也 出现在 votes[j] 中，其中 1 <= j < votes.length
通过次数6,831提交次数12,738
 */
/*
*
*/
 class Solution {

     /**
     * @param String[] $votes
     * @return String
     */
    function rankTeams($votes) {
        $result = [];
        for ($i=0; $i < count($votes); $i++){
            for ($j=0; $j < strlen($votes[$i]); $j++){
                $result[$votes[$i][$j]][] = $j;
            }
        }
        $res_new = [];
        foreach ($result as $key => $vm) $res_new[] = ['sort' => array_count_values($vm), 'data' => $key];
        // var_dump($res_new);die;
        array_multisort($res_new, SORT_DESC);
        var_dump($res_new);die;
        $res = join('', array_column($res_new, 'data'));
        return $res;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$votes = [
    "FVSHJIEMNGYPTQOURLWCZKAX",
    "AITFQORCEHPVJMXGKSLNZWUY",
    "OTERVXFZUMHNIYSCQAWGPKJL",
    "VMSERIJYLZNWCPQTOKFUHAXG",
    "VNHOZWKQCEFYPSGLAMXJIUTR",
    "ANPHQIJMXCWOSKTYGULFVERZ",
    "RFYUXJEWCKQOMGATHZVILNSP",
    "SCPYUMQJTVEXKRNLIOWGHAFZ",
    "VIKTSJCEYQGLOMPZWAHFXURN",
    "SVJICLXKHQZTFWNPYRGMEUAO",
    "JRCTHYKIGSXPOZLUQAVNEWFM",
    "NGMSWJITREHFZVQCUKXYAPOL",
    "WUXJOQKGNSYLHEZAFIPMRCVT",
    "PKYQIOLXFCRGHZNAMJVUTWES",
    "FERSGNMJVZXWAYLIKCPUQHTO",
    "HPLRIUQMTSGYJVAXWNOCZEKF",
    "JUVWPTEGCOFYSKXNRMHQALIZ",
    "MWPIAZCNSLEYRTHFKQXUOVGJ",
    "EZXLUNFVCMORSIWKTYHJAQPG",
    "HRQNLTKJFIEGMCSXAZPYOVUW",
    "LOHXVYGWRIJMCPSQENUAKTZF",
    "XKUTWPRGHOAQFLVYMJSNEIZC",
    "WTCRQMVKPHOSLGAXZUEFYNJI"
];
$res = $object->rankTeams($votes);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
