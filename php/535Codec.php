<?php
/*
* 535. TinyURL 的加密与解密
TinyURL是一种URL简化服务， 比如：当你输入一个URL https://leetcode.com/problems/design-tinyurl 时，它将返回一个简化的URL http://tinyurl.com/4e9iAk.

要求：设计一个 TinyURL 的加密 encode 和解密 decode 的方法。你的加密和解密算法如何设计和运作是没有限制的，你只需要保证一个URL可以被加密成一个TinyURL，并且这个TinyURL可以用解密方法恢复成原本的URL。
  */
class Codec {
    static $url_dics = [];
    /**
    * Encodes a URL to a shortened URL.
    * @param String $longUrl
    * @return String
    */
    function encode($longUrl) {
        $ukey = $this->from10to62(rand(100, 999).time());
        $this->url_dics[$ukey] = $longUrl;
        return 'http://tinyurl.com/'.$ukey;
    }

    /**
    * Decodes a shortened URL to its original URL.
    * @param String $shortUrl
    * @return String
    */
    function decode($shortUrl) {
        return $this->url_dics[str_replace("http://tinyurl.com/", "", $shortUrl)];
    }

    function from10to62($num)
    {
        $to = 62;
        $dict = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ret = '';
        do {
            $ret = $dict[bcmod($num, $to)] . $ret;
            $num = bcdiv($num, $to);
        } while ($num > 0);
        return $ret;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Codec();
$longUrl = 'https://leetcode.com/problems/design-tinyurl';
$shortUrl = $object->encode($longUrl);
// var_dump($shortUrl);die;
$longUrl = $object->decode($shortUrl);

$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($longUrl);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
