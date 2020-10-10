<?php

function readPlusInt()
{
    do {
        echo '正の整数値：';
        $x = intval(trim(fgets(STDIN)));
    } while ($x <= 0);
    return $x;
}

do {
    $n = readPlusInt();
    echo '逆から読むと';
    while ($n > 0) {
        echo($n % 10);
        $n = intdiv($n, 10);
    }
    echo "です\n";

    do {
        echo 'もう一度？<yes...1/No...0>';
        $again = intval(trim(fgets(STDIN)));
    } while ($again != 0 && $again != 1);
} while ($again == 1);
