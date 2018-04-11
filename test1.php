<?php
$str = "www.php100.com,ok!the string is € .我要转换他！⊙●○①⊕◎Θ⊙¤?";
echo '没有任何参数 : ', iconv("utf-8", "gbk", $str) . "\n";

// iconv有两个参数：分别是TRANSLIT 和IGNORE   ，分别的含义是TRANSLIT 表示如果目标编码里面不能翻译原编码，那么就直接找一个类似的最相近的字符或者字符串替代，例如€可能会被替换为EUR；而IGNORE   遇到目标字符集不能翻译的原始字符则直接跳过忽略，不返回false。
echo '没有任何参数 : ', iconv("utf-8", "gbk//TRANSLIT", $str) . "\n";
echo '没有任何参数 : ', iconv("utf-8", "gbk//IGNORE", $str) . "\n";

// 娌℃湁浠讳綍鍙傛暟 : www.php100.com,ok!the string is EUR .我要转换他！⊙●○①⊕◎Θ⊙¤?
// 娌℃湁浠讳綍鍙傛暟 : www.php100.com,ok!the string is  .我要转换他！⊙●○①⊕◎Θ⊙¤?