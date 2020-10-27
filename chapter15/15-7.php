<?php
echo '文字列s1:';
$s1 = strval(trim(fgets(STDIN)));
echo '文字列s2:';
$s2 = strval(trim(fgets(STDIN)));
if ($s1 === $s2) {//参照？
    echo "s1 == s2\n";
} else {
    echo "s1 != s2\n";
}
if (strcmp($s1, $s2) == 0) {//文字列？
    echo "s1 == s2\n";
} else {
    echo "s1 != s2\n";
}

//「 == 」を使用すると 異なるデータ型間でも自動的にデータ型を揃えて値の比較が行われ、「 === 」を使用すると データ型を含めて比較が行われます。

//文字列型の「 1 」と数値型の「 1 」を比較する場合、「 == 」を使用すると判定は true となり、「 === 」を使用すると判定は false となります。
