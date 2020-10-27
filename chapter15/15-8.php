<?php

echo '文字列s1:';
$s1 = strval(trim(fgets(STDIN)));
echo '文字列s2:';
$s2 = strval(trim(fgets(STDIN)));
$ans = strcmp($s1, $s2);
if ($ans === 0) {
    echo "s1 == s2\n";
} elseif ($ans > 0) {
    echo "s1 > s2\n";
} else {
    echo "s1 < s2\n";
}

//文字列1と文字列2が同じ場合、0を返します。

//文字列1より文字列2が大きい場合、プラスの数値を返します。

//文字列1より文字列2が小さい場合、マイナスの数値を返します。
