<?php 

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));
echo 'C:';
$c = intval(trim(fgets(STDIN)));

$ans = $a;
if($ans > $b){
    $ans = $b;
}
if($ans > $c){
    $ans = $c;
}
echo '最小値は'.$ans.'です。'."\n";

?>