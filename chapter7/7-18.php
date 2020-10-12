<?php

// function aryRmv($a, $idx)
// {
//     if ($idx >= 0 && $idx < count($a)) {
//         for ($i = $idx;$i < count($a)-1;$i++) {
//             echo $a[$i].$a[$i+1];
//             $a[$i] = $a[$i+1];
//             echo $a[$i]."\n";
//         }
//     }
// }

// echo '要素数：';
// $n = intval(trim(fgets(STDIN)));
// for ($i = 0;$i < $n;$i++) {
//     echo '$a['.$i."] :";
//     $a[$i] = intval(trim(fgets(STDIN)));
// }

// echo '削除する要素のインデックス：';
// $idx = intval(trim(fgets(STDIN)));

// aryRmv($a, $idx);

// for ($i = 0;$i < $n;$i++) {
//     echo '$a['.$i."] =".$a[$i]."\n";
// }

////////////////////////////////////////

function aryRmv($a, $idx)
{
    if ($idx >= 0 && $idx < count($a)) {
        for ($i = $idx;$i < count($a)-1;$i++) {
            $a[$i] = $a[$i+1];
        }
    }
    return $a;
}

echo '要素数：';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i."] :";
    $a[$i] = intval(trim(fgets(STDIN)));
}

echo '削除する要素のインデックス：';
$idx = intval(trim(fgets(STDIN)));

$x = aryRmv($a, $idx);

for ($i = 0;$i < $n;$i++) {
    echo '$a['.$i."] =".$x[$i]."\n";
}
