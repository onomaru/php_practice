<?php 

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));
if($a >= $b){
    echo 'A >= Bになるようにソートしました。'."\n";
    echo '変数Aは'.$a.'です。'."\n";
    echo '変数Bは'.$b.'です。'."\n";
}else if($a < $b){
    $max = $b;
    $min = $a;
    echo 'A >= Bになるようにソートしました。'."\n";
    echo '変数Aは'.$max.'です。'."\n";
    echo '変数Bは'.$min.'です。'."\n";
}

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));
if($a < $b){
    $t = $a;
    $a = $b;
    $b = $t;
}
echo 'A >= Bになるようにソートしました。'."\n";
echo '変数Aは'.$a.'です。'."\n";
echo '変数Bは'.$b.'です。'."\n";

?>