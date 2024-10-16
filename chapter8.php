<?php
/*
色の名前「Red」「Yellow」「Green」「Blue」「Black」をそれぞれ要素に含む、
1つの配列を作成しなさい。
また、それをforeachを使って出力しなさい。
*/
$colors = [
    "Red",
    "Yellow",
    "Green",
    "Blue",
    "Black",
];
//
foreach($colors as $v) {
    echo "{$v} \n";
}

/*
色の名前をkey（添字）に、16進数カラーコードをvalu（値）にもつ
連想配列を作成しなさい。
また、foreachを使って「色の名前と16進数カラーコード」を出力しなさい。
*/
$colors = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];
//
foreach($colors as $k => $v) {
    echo "{$k}: {$v} \n";
}
