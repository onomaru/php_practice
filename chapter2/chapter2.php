<?php
define('STDIN', fopen('php://stdin', 'r'));

//1
echo 82 + 17;
echo "<br>\n";
echo 82 - 17;
echo "<br>\n";

echo '<script>console.log(82 + 17)</script>';
echo '<script>console.log(82 - 17)</script>';


//2
$x = 100;
$y = 1000;
echo '合計は'.($x + $y);
echo '平均は'.($x + $y)/2;
echo "<br>\n";

//3
$x = 100.04;
$y = 1000.4;
echo '合計は'.($x + $y);
echo '平均は'.($x + $y)/2;
echo "<br>\n";

//4
$x = 10;
$y = 100;
$z = 1000;
echo '合計は'.($x+$y+$z);
echo '平均は'.($x+$y+$z)/3;
echo "<br>\n";

//5
$stdin = trim(fgets(STDIN));  
echo $stdin;

$ans = fgets(STDIN);
echo $ans;

//6
$stdin = intval(trim(fgets(STDIN)));
echo $stdin.'+10='.($stdin+10);
echo "<br>\n";
echo $stdin.'-10='.($stdin-10);
echo "<br>\n";

//7
//桁数が一桁だった場合0ではなくなしではないか
echo '整数値：';
$stdin = intval(trim(fgets(STDIN)));
echo '最下位桁を除いた値は'.(floor($stdin/10)).'です';
echo "<br>\n";
echo '最下位桁は'.($stdin%10).'です';
echo "<br>\n";

//8
echo 'x:';
$x = floatval(trim(fgets(STDIN)));
echo 'y:';
$y = floatval(trim(fgets(STDIN)));
echo '合計は'.($x + $y);
echo "<br>\n";
echo '平均は'.($x + $y)/2;
echo "<br>\n";

//9
echo '高さ:';
$x = floatval(trim(fgets(STDIN)));
echo '底辺:';
$y = floatval(trim(fgets(STDIN)));
echo '面積は'.($y * $x / 2).'です';
echo "<br>\n";

//10
echo '半径:';
$r = floatval(trim(fgets(STDIN)));
echo '表面積は'.(4*3.14*$r*$r);
echo '体積は'.(4/3*3.14*$r*$r*$r);
echo "<br>\n";
?>