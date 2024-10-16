<?php
/*
abs(int|float $num): int|float
関数名は、abs
引数は、「intまたはfloat型」の、変数名 $num
戻り値は、intまたはfloat型
この書式は、「関数名(引数の型 引き数名): 戻り値の型」の書式です。
ちなみに、引数が2つ以上ある場合は ,「カンマ」で区切ってつなげて書いていきます。
*/

declare(strict_types=1); // 厳格な型 モード
$i = random_int('1', '999');
echo "{$i} \n";