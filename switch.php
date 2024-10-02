<?php
$i = 1;
switch($i) {
    case 0:
        echo "i は 0です \n";
        break;

    case 1:
        echo "i は 1です \n";
        break;

    default:
        echo "i は 0と1 以外です \n";
        break;
}
/*
比較演算子が == のときの代替えとして使える
case の後ろに「比較したい値」を書く
caseの処理の終わりには「break;」を書く
else に該当するのが「default:」
*/

// PHP 8未満だと特に注意が必要なコード
$i = 2;
switch($i) {
    case '2a':
        echo "i は '2a'です \n";
        break;

    case '2':
        echo "i は '2'(string)です \n";
        break;

    case 2:
        echo "i は 2(int)です \n";
        break;

}