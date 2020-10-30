<?php
function printStringArray($s)
{
    for ($i = 0;$i < count($s);$i++) {
        for ($j = 0;$j < strlen($s[$i]);$j++) {
            echo substr($s[$i], $j, 1);
        }
        echo "\n";
    }
}

echo '文字列の個数：';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '$s['.$i.'] = ';
    $s[$i] = strval(trim(fgets(STDIN)));
}

print_r($s);
printStringArray($s);
