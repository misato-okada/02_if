<?php

$num = 10;

$flg = true;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $flg = false; //$iで順番に割ったときに$num以外の数字で割り切れた場合、$flgはfalseになる
        break;
    }
}

if ($flg) { 
        echo $num . 'は素数です';
    } else { 
        echo $num . 'は素数ではありません';
    }
