<?php
/**
 * 面试题 17.11. 单词距离
难度
中等

30

收藏

分享
切换为英文
接收动态
反馈
有个内含单词的超大文本文件，给定任意两个单词，找出在这个文件中这两个单词的最短距离(相隔单词数)。如果寻找过程在这个文件中会重复多次，而每次寻找的单词不同，你能对此优化吗?

示例：

输入：words = ["I","am","a","student","from","a","university","in","a","city"], word1 = "a", word2 = "student"
输出：1
提示：

words.length <= 100000
通过次数13,934提交次数20,304
 */
/*
*
*/
 class Solution {

     /**
     * @param String[] $words
     * @param String $word1
     * @param String $word2
     * @return Integer
     */
    function findClosest($words, $word1, $word2) {
        $count  = count($words);
        $res = $result = [];
        for ($i=0; $i < $count; $i++) if ($word1 == $words[$i] || $word2 == $words[$i]) $res[] = $i;
        $count_temp = count($res);
        for ($i=0; $i < $count_temp; $i++) for ($j=$i + 1; $j < $count_temp; $j++) $result[] = abs($res[$i] - $res[$j]);
        return min($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$words = ["k","c","ur","jm","jh","dl","sa","qw","tqr","b","kl","hns","g","y","au","ksw","zy","mi","u","hne","n","ub","irq","na","k","sg","np","fi","hyd","p","aoi","ixp","ve","ll","yh","dh","qc","yg","ic","ef","ho","ueq","w","pb","b","bnd","ahe","jbf","gui","jsu","wo","m","pzj","g","o","xoa","l","uwm","kdp","ra","v","p","mq","s","cpm","f","ma","vyd","p","kzw","oa","k","qm","ifg","dlw","y","y","ml","adg","mkw","vjr","yxw","x","s","rfv","pb","w","rq","gun","aaf","x","jj","lp","lb","nk","q","xa","r","ku","ecq","m","zd","zra","zee","x","klx","tzb","lwe","d","y","r","u","o","y","n","ah","pcv","g","y","uj","pu","pyz","ee","gc","n","t","r","lhu","f","uw","h","gfc","s","j","ixi","zvk","uyy","ga","b","wzn","u","pst","vq","u","pdn","zsn","vxk","msn","in","ev","ozq","w","p","u","p","f","hg","iab","gu","a","cih","m","qai","mzs","ol","wu","xhm","sch","hf","kfw","iq","opa","t","g","ym","il","z","a","xw","noo","jxk","th","j","ifi","kx","nas","m","xvy","g","jcn","sg","t","g","hz","z","oc","kvy","j","x","t","vel","tf","vw","fvq","l","u","uml","ksy","tbl","xan","o","s","v","zhe","oo","u","bc","je","xo","k","ame","me","tux","to","vzk","v","k","khz","hng","cg","thb","qt","vez","x","gbh","d","csc","sc","vl","cky","zb","g","wn","snn","de","syl","rl","cah","p","nj","vs","u","id","zx","v","lb","w","qxg","urw","yt","q","dyo","yxo","fi","p","iyi","cyk","ys","ff","os","uuc","p","egr","dra","hb","cpi","rll","j","o","dez","zq","z","ny","hc","jq","cpz","ih","n","qo","xv","gm","rg","vfi","rj","apy","c","x","cca","y","w","bf","d","sj","iyp","qb","mb","p","sbc","q","gp","wrv","v","nt","xw","e","x","uvy","wgm","i","w","uyg","z","py","ybd","gew","uzp","y","a","bwd","a","h","hpa","fid","q","d","t","n","ik","gm","lo","suo","wfe","vaj","l","vkp","yw","v","jr","psn","bu","o","p","zf","ej","d","yan","x","x","tkw","xxy","ehr","b","ds","z","ncq","l","qm","qb","uzc","do","k","f","kz","je","r","b","aq","hz","k","ipv","v","bai","c","fu","s","pg","ctn","i","fw","vu","hej","xl","qtv","nn","wal","fd","iay","kf","t","vv","fu","b","z","udg","ypg","rx","e","wus","fh","c","f","q","ijv","vl","hh","po","sf","sl","t","acm","hp","m","z","rrx","r","b","na","g","bt","nmx","edo","gau","s","j","k","y","ph","fl","xv","n","hua","i","kzo","lgz","fpq","mvh","yf","jvc","out","uv","w","bpk","k","xx","gbn","kj","yq","z","ul","mz","dxr","onc","nfu","mla","kyw","n","v","l","nly","qz","t","kbz","bj","ovy","xmr","k","ugo","ri","s","wt","l","muf","k","b","gs","w","dj","vb","ieu","b","c","kj","vr","q","dy","udj","v","vwx","ny","m","if","xbr","yar","q","erl","wl","o","xsb","b","zx","gqs","jz","ozd","h","ny","ogm","qor","bg","her","hqt","qe","o","g","ov","iqv","p","p","cgh","oxx","j","m","ii","mw","itg","uo","i","ua","r","j","dch","wwb","nf","euf","em","x","huo","m","ro","quu","zl","i","tf","a","fx","x","kif","vx","l","rtx","kwf","w","yr","rkx","uur","m","ooz","co","dz","s","zs","ac","r","ty","jn","x","fti","j","tk","g","bff","p","dy","e","wr","tj","h","ee","bx","kw","rvs","xpz","yb","f","f","yym","hf","owh","mdz","thg","lb","f","erz","hjh","cy","tv","w","k","dsb","pa","j","q","pip","vmf","zet","k","gzs","pee","y","zgu","b","xf","pte","l","pq","pj","lzu","jwy","wgw","v","xfm","jyk","piy","gvo","pur","hzc","g","nvz","ox","kkr","do","kop","r","pd","ixk","y","qio","hf","yq","tnk","ga","g","dkj","yj","w","j","bl","e","g","ki","s","pwj","j","ju","sji","kh","mvq","hsh","k","d","qtq","rb","k","gd","n","xei","q","w","wz","esa","blf","kqk","l","bp","z","t","s","p","thx","jl","y","la","du","vdd","x","a","xhx","rp","hi","pb","b","z","aa","pug","us","tkt","y","w","tre","ie","mss","u","tg","dfj","h","ulo","dkp","o","bd","bqh","qx","fl","xm","a","uxm","nt","p","wc","tk","fr","sd","f","xj","eds","gc","xz","qqq","nfn","x","lm","q","ofr","jm","l","coh","pl","nx","x","yg","t","aip","zg","jtc","u","er","i","j","ph","z","j","ynt","wq","imb","gpe","til","ns","pyy","hq","qm","k","lp","o","j","vup","qfd","ohj","z","gg","bw","m","fii","fa","y","p","yaz","i","ig","of","p","ws","orp","arf","ru","urq","g","u","zg","zmh","wgx","l","b","bc","th","pe","d","juo","qq","jeu","w","j","yl","l","q","vki","al","n","hpb","pjo","ft","x","aal","hx","n","y","wgl","u","avy","l","wlw","bc","iik","hxj","icx","lp","qf","f","jay","eqs","nlf","yol","umb","s","ir","em","z","o","bip","f","syg","ep","wfy","ct","wuc","ccs","wsp","wej","en","g","bg","msi","yo","ba","s","iqw","mcs","kua","z","mwv","aa","tf","cvt","aox","q","my","g","h","gha","oz","g","l","iu","sza","td","pf","mi","mz","me","pt","bje","r","q","l","xcp","wz","bhc","sa","hq","or","qi","rv","x","vgx","q","es","fj","j","p","m","q","nqx","ay","hb","vn","km","zw","pxz","j","l","zx","aa","t","a","rr","glo","iqn","gm","s","nbu","e","pf","tfs","i","ly","rkv","a","pz","hl","okl","qfn","wr","zu","qg","a","a","dl","euz","lqi","egm","bgs","zv","bo","s","dx","m","r","xf","ij","gu","h","dm","qor","lne","ln","kz","s","ry","ml","n","kq","sz","nyx","m","s","pa","w","sbz","kxz","muz","bbw","fa","b","mb","oe","wve","tga","qi","re","hkf","jlj","vx","gg","glm","o","kvl","vvk","yfn","lt","c","kz","p","bq"];
$word1 = "bx";
$word2 = "rx";
$res = $object->findClosest($words, $word1, $word2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
