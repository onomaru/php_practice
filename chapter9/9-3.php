<?php

require_once '/Applications/MAMP/htdocs/php_practice/chapter8/8-2.php';

function printHumanArray($a)
{
    for ($i = 0;$i < count($a);$i++) {
        printf("No.%d %s %3dcm %3dkg\n", $i, $a[$i]->getName(), $a[$i]->getHeight(), $a[$i]->getWeight());
    }
}

$p = [new Human('桑野慎一郎', 170, 70),new Human('高原徹也', 160, 59)];

printHumanArray($p);

echo '配列qの要素数:';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '名前:';
    $name = strval(trim(fgets(STDIN)));
    echo '身長:';
    $height = intval(trim(fgets(STDIN)));
    echo '体重:';
    $weight = intval(trim(fgets(STDIN)));
    $q[$i] = new Human($name, $height, $weight);
}

$x = [[new Human('竹田祥平', 175, 52),new Human('橋川智之', 169, 60)],
[new Human('三宅秀樹', 178, 70),new Human('小林佑介', 172, 61)],
[new Human('白水祐亮', 168, 59),new Human('田中大嬉', 165, 59)],];

// print_r($x);
echo '配列yの要素数:';
$n = intval(trim(fgets(STDIN)));
for ($i = 0;$i < $n;$i++) {
    echo '配列y['.$i.']の列数:';
    $n2 = intval(trim(fgets(STDIN)));
    for ($j = 0;$j < $n2;$j++) {
        echo '名前:';
        $name = strval(trim(fgets(STDIN)));
        echo '身長:';
        $height = intval(trim(fgets(STDIN)));
        echo '体重:';
        $weight = intval(trim(fgets(STDIN)));
        $y[$i][$j] = new Human($name, $height, $weight);
    }
}
print_r($y);
//////////////////////////////////////////////////////

echo '■配列p:'."\n";
printHumanArray($p);


echo '■配列q:'."\n";
printHumanArray($q);

echo '■配列x:'."\n";
for ($i = 0;$i < count($x);$i++) {
    echo '■'.$i."行\n";
    printHumanArray($x[$i]);
}

echo '■配列y:'."\n";
for ($i = 0;$i < count($y);$i++) {
    echo '■'.$i."行\n";
    printHumanArray($y[$i]);
}
