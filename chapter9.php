<?php
/*引数を2つ受け取り、
以下の挙動をする関数「 myFuncStringAdd() 」を作成しなさい。

2つの引数はそれぞれ 文字列（string）とする
戻り値は 文字列（string）とする
2つの引数を文字列結合した結果を戻り値とする*/

function myFuncStringAdd(string $s, string $t): string
{

    $ret = "{$s}{$t}";

    return $ret;
}
echo myFuncStringAdd("Hello", "world");