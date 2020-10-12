<?php


function retry()
{
    do {
        echo 'もう一度？<yes...1/No...0>';
        $again = intval(trim(fgets(STDIN)));
    } while ($again != 0 && $again != 1);
    return $again == 1; //1だったらtrue 0だったらfalseを返す
}


echo '暗算トレーニング'."\n";

do {
    $x = mt_rand(1, 999);
    $y = mt_rand(1, 999);
    $z = mt_rand(1, 999);
    $pattern = mt_rand(0, 3);

    switch ($pattern) {
        case 0:
            $ans = $x + $y + $z;
            break;
        case 1:
            $ans = $x + $y - $z;
            break;
        case 2:
            $ans = $x - $y + $z;
            break;
        default:
            $ans = $x - $y - $z;
            break;
            
    }
    while (true) {
        $text = $x.(($pattern < 2) ? '+':'-').$y.(($pattern % 2 == 0) ? '+':'-').$z.' = ';
        echo $text;
        $k = intval(trim(fgets(STDIN)));
        if ($k == $ans) {
            break;
        }
        echo '違います'."\n";
    }
} while (retry());
