<?php
do {
    $hand = ["グー","チョキ","パー"];
    $cp1 = mt_rand(0, 2);
    $cp2 = mt_rand(0, 2);
    echo 'ジャンケンポン!! 0...グー/1...チョキ/2...パー:';
    $user = intval(trim(fgets(STDIN)));


    echo "コンピュータ１は".$hand[$cp1]." コンピュータ2は".$hand[$cp2]." あなたは".$hand[$user]."です\n";

    $r1 = ($user - $cp1 + 3) % 3;
    $r2 = ($user - $cp2 + 3) % 3;

    if ($r1 == 2 && $r2 == 2) {
        echo "あなたの勝ちです\n";
    } elseif ($r1 == 1 && $r2 == 0) {
        echo "コンピュータ１の勝ちです\n";
    } elseif ($r1 == 0 && $r2 == 1) {
        echo "コンピュータ２の勝ちです\n";
    } elseif ($r1 == 0 && $r2 == 2) {
        echo "あなたとコンピュータ１勝ちです\n";
    } elseif ($r1 == 2 && $r2 == 0) {
        echo "あナタとコンピュータ２勝ちです\n";
    } elseif ($r1 == 1 && $r2 == 1) {
        echo "コンピュータ１と２の勝ちです\n";
    } else {
        echo "引き分けです\n";
    }

    do {
        echo 'もう一度？(0)いいえ(1)はい:';
        $retry = intval(trim(fgets(STDIN)));
    } while ($retry != 1 && $retry != 0);
} while ($retry == 1);
