<?php

$i = 1;
echo "等しいかどうか \n ";
var_dump($i === 1);   //bool(true)
var_dump($i === 2);   //bool(false)
/* === は、「左辺と右辺が等しいか？」を問う比較演算子です。
=「イコール」1つですと代入になってしまうので、=「イコール」を複数重ねています。*/

echo "\n" ;
echo "等しくないかどうか \n" ;
var_dump($i !== 1);  //bool(false)
var_dump($i !== 2);  //bool(true)
/* !==  は、「左辺と右辺が等しくないか？」を問う演算子です。*/

echo "\n";
echo "等しいかどうか（文字列）\n";
$s = 'abc' ;
var_dump($s === 'abc');
var_dump($s === 'ABC');
var_dump($s === 'a');

// === と == の確認 その1
echo "\n";
echo "== と === の確認 その1 \n";
var_dump($i == 1);
var_dump($i === 1);

// === と == の確認 その2
echo "\n";
echo "== と === の確認 その2 \n";
var_dump($i == '1');
var_dump($i === '1');
/*
=== には左辺／右辺の型を確認し、
型が違ったらその時点でfalseとするというルールがあります。
一方、== には左辺／右辺で型が異なる場合は、
PHPで定められたルールに基づいて型を変更してから比較するというルールがあるのです。
「実際の実務の現場」の多くでは、「比較には === を用いる」*/