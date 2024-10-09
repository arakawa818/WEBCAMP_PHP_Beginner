<?php
if(true){
    echo"true だとここを通る？ \n";
}
if (false) {
    echo "false だとここを通る? \n";
}
/*ifの次に()を付けて記述します。また、その()の中が
「trueならば、if() に続く波括弧の中の処理が行なわれる」
「falseならば、if() に続く波括弧の中の処理が行なわれない」
という動きになります。*/

$age = 20;
if ($age >= 20) {
    echo "成人です \n";
}
if ($age < 20) {
    echo "未成年です \n";
}

// elseで書き換え
if ($age >= 20) {
    echo "成人です \n";
} else {
    echo "未成年です \n";
}

// elseif付き
if ($age > 20) {  //年齢が20歳を超えていたら "成人" と表示
    echo "成人 \n";
} else if($age === 20) {  //年齢がちょうど20歳ならば「新成人おめでとう！！」と表示
    echo "新成人おめでとう！！ \n";
} else {
    echo "未成年 \n";  //上記以外ならば "未成年" と表示
}
/* else ifは「ひとつ前のifはfalseだったけれど、ここの条件がtrueならば」
という意味合いになります。
else ifを何度も繰り返し書くことも、書式としては可能です
（何回も重ねて書くのはあまり好まれませんが）*/