<?php

require '9-1.php';

function compCoordinate($c1, $c2)
{
    return $c1->getX() == $c2->getX() && $c1->getY() == $c2->getY();
}

echo '座標pを入力せよ'."\n";
echo 'X座標';
$x = doubleval(trim(fgets(STDIN)));
echo 'Y座標';
$y = doubleval(trim(fgets(STDIN)));
$p = new Coordinate($x, $y);

echo '座標qを入力せよ'."\n";
echo 'X座標';
$x = doubleval(trim(fgets(STDIN)));
echo 'Y座標';
$y = doubleval(trim(fgets(STDIN)));
$q = new Coordinate($x, $y);

echo ($p==$q)?'p==qです。':'p!=qです';
echo "\n";
echo ($p->getX() == $q->getX() && $p->getY() == $p->getY())?'pとqは等しいです':'pとqは等しくありません';
echo "\n";
echo (compCoordinate($p, $q))?'pとqは等しいです':'pとqは等しくありません';
echo "\n";
