<?php

echo '行列aの要素を入力せよ'."\n";
for($i = 0;$i <= 3;$i++){
    for($j = 0;$j <= 2;$j++){
        echo 'a['.$i.']['.$j.'] : ';
        $a[$i][$j] = intval(trim(fgets(STDIN)));
    }
}

echo '行列bの要素を入力せよ'."\n";
for($i = 0;$i <= 2;$i++){
    for($j = 0;$j <= 3;$j++){
        echo 'a['.$i.']['.$j.'] : ';
        $b[$i][$j] = intval(trim(fgets(STDIN)));
    }
}

echo '行列aとbの積'."\n";
for($i = 0;$i <= 3;$i++){
    for($j = 0;$j <= 3;$j++){
        for($k = 0;$k <= 2;$k++){
            $c[$i][$j] += $a[$i][$k] * $b[$k][$j]; 
        }
    }

}
for($i = 0;$i <= 3;$i++){
    for($j = 0;$j <= 3;$j++){
        echo $c[$i][$j]."  ";
    }
    echo "\n";
}
?>