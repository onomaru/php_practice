<?php
//キーボードから読み込んだ値の個数だけ*を表示するプログラムを作成せよ
//最後に改行文字を出力すること。ただし読み込んだ値が１未満であれば改行文字を表示してはいけない
echo '何個*を表示しますか：';
$a = intval(trim(fgets(STDIN)));
if($a > 0){
    for($i = 0;$i < $a;$i++){
        echo '*';
    }
    echo "\n";
}

echo '何個*を表示しますか：';
$a = intval(trim(fgets(STDIN)));

$i = 0;
do{
    echo '*';
    $i ++;
}while($a > $i);
?>