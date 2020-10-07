<?php

echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    echo '$a['.$i.'] = ';
    $a[$i] = intval(trim(fgets(STDIN)));
}

$j = $n-1;
for($i = 0;$i < $n;$i++){
    $b[$j] = $a[$i];
    $j--;
}
echo 'aの要素を逆順にbにコピーしました。'."\n";

for($i = 0;$i < $n;$i++){
    echo '$b['.$i.'] = '.$b[$i]."\n";
}

//////////////////////////////////////////

echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    echo '$a['.$i.'] = ';
    $a[$i] = intval(trim(fgets(STDIN)));
}


for($i = 0;$i < $n;$i++){
    $b[$i] = $a[$n - $i - 1];
}
echo 'aの要素を逆順にbにコピーしました。'."\n";

for($i = 0;$i < $n;$i++){
    echo '$b['.$i.'] = '.$b[$i]."\n";
}
?>