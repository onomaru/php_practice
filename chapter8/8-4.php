<?php

require '8-3.php';

$vitz = new Car('ビッツ', '福岡999ん99-99', 1600, 1500, 3640, 40.0, 35.0, 12.0);

$march = new Car('マーチ', '福岡999ん99-98', 1660, 1525, 3695, 41.0, 35.0, 12.0);
$vitz->putSpec();
echo "\n";
$march->putSpec();

/////////////////////////////////////////////////////

echo '名前';
$name = strval(trim(fgets(STDIN)));
echo 'ナンバー';
$number = strval(trim(fgets(STDIN)));
echo '車幅';
$width = strval(trim(fgets(STDIN)));
echo '車高';
$height = strval(trim(fgets(STDIN)));
echo '車長';
$length = strval(trim(fgets(STDIN)));
echo 'タンク容量';
$tankage = strval(trim(fgets(STDIN)));
echo 'ガソリン量';
$fuel = strval(trim(fgets(STDIN)));
echo '燃費';
$sfc = strval(trim(fgets(STDIN)));

$mycar = new Car($name, $number, $width, $height, $length, $tankage, $fuel, $sfc);

while (true) {
    printf("現在地：（%.2f,%.2f）\n", $mycar->getX(), $mycar->getY());
    printf("残り燃料：%.2f", $mycar->getFuel());
    echo '移動しますか？[0...No 1...Yes]';
    if (intval(trim(fgets(STDIN))) == 0) {
        break;
    }
    echo 'X方向の移動距離';
    $dx = doubleval(trim(fgets(STDIN)));
    echo 'Y方向の移動距離';
    $dy = doubleval(trim(fgets(STDIN)));

    if (!$mycar->move($dx, $dy)) {
        echo "燃料不足\n";
    }
}
