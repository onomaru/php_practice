<?php


//キーボードから読み込んだ整数値から０までのカウントダウンを表示するプログラムを作成せよ
//カウントダウン終了後の変数を値を確認できるようすること --$aの場合
do{
    echo '正の整数値：';
    $a = intval(trim(fgets(STDIN)));
}while($a <= 0);

do{
    echo --$a."\n";
}while($a >= 0);
echo 'aの値は'.$a."\n";
?>