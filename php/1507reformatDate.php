<?php
/*
* 1507. 转变日期格式
给你一个字符串 date ，它的格式为 Day Month Year ，其中：

Day 是集合 {"1st", "2nd", "3rd", "4th", ..., "30th", "31st"} 中的一个元素。
Month 是集合 {"Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"} 中的一个元素。
Year 的范围在 ​[1900, 2100] 之间。
请你将字符串转变为 YYYY-MM-DD 的格式，其中：

YYYY 表示 4 位的年份。
MM 表示 2 位的月份。
DD 表示 2 位的天数。


示例 1：

输入：date = "20th Oct 2052"
输出："2052-10-20"
示例 2：

输入：date = "6th Jun 1933"
输出："1933-06-06"
示例 3：

输入：date = "26th May 1960"
输出："1960-05-26"


提示：

给定日期保证是合法的，所以不需要处理异常输入。
  * }
  */
class Solution {
    /**
     * @param String $date
     * @return String
     */
    function reformatDate($date) {
        // 拆分字符串
        $dateArr = explode(' ', $date);
        $day = intval($dateArr[0]);
        if ($day < 10) {
            $day = '0'.$day;
        }

        $months = [
            '01' => "Jan",
            '02' => "Feb",
            '03' => "Mar",
            '04' => "Apr",
            '05' => "May",
            '06' => "Jun",
            '07' => "Jul",
            '08' => "Aug",
            '09' => "Sep",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Dec"
        ];
        $month = array_search($dateArr[1], $months);
        return $dateArr[2].'-'.$month.'-'.$day;
    }

    function getMonth($month) {
        $months = [
            '01' => "Jan",
            '02' => "Feb",
            '03' => "Mar",
            '04' => "Apr",
            '05' => "May",
            '06' => "Jun",
            '07' => "Jul",
            '08' => "Aug",
            '09' => "Sep",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Dec"
        ];
        return array_search($month, $months);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$date = "6th Jun 1933";
$res = $object->reformatDate($date);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
