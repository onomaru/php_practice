<?php

function ddd(){
    $adf = 1; $dfkj = 9;
}

echo '凸凹な2次元配列を作ります。'."\n";
echo '行数：';
$height = intval(trim(fgets(STDIN)));
for($i = 0;$i < $height;$i++){
    echo $i.'行目の列数:';
    $width[$i] = intval(trim(fgets(STDIN)));

}

echo '各要素の値を入力せよ。'."\n";
for($i = 0;$i < $height;$i++){
    for($j = 0;$j < $width[$i];$j++){
        echo 'c['.$i.']['.$j.'] :';
        $c[$i][$j] = intval(trim(fgets(STDIN)));
    }
}

echo '配列cの各要素の値は次のようになっています。'."\n";
for($i = 0;$i < $height;$i++){
    for($j = 0;$j < $width[$i];$j++){
        printf("%3d",$c[$i][$j]);
    }
    echo "\n";
}
?>