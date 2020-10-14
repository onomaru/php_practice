<?php

function minmin()
{
    $args = func_num_args();// 引数の数を数える
    $num = func_get_args();// 引数一覧を配列へ変換する

    if ($args == 1) {
        $min = $num[0][0];
        for ($i = 0;$i < count($num[0]);$i++) {
            if ($min > $num[0][$i]) {
                $min = $num[0][$i];
            }
        }
        return $min;
    } elseif ($args == 2) {
        $min = $num[0];
        if ($min > $num[1]) {
            $min = $num[1];
        }
        return $min;
    } elseif ($args === 3) {
        $min = $num[0];
        if ($min > $num[1]) {
            $min = $num[1];
        }
        if ($min > $num[2]) {
            $min = $num[2];
        }
        return $min;
    }
}

echo 'xの値';
$x = intval(trim(fgets(STDIN)));
echo 'yの値';
$y = intval(trim(fgets(STDIN)));
echo 'zの値';
$z = intval(trim(fgets(STDIN)));

echo '配列aの要素数';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i.']';
    $a[$i] = intval(trim(fgets(STDIN)));
}

echo 'x,yの最小値は'.minmin($x, $y)."です\n";
echo 'x,y,zの最小値は'.minmin($x, $y, $z)."です\n";
echo '配列aの最小値は'.minmin($a)."です\n";
