<?php 

echo 'A:';
$a = intval(trim(fgets(STDIN)));
echo 'B:';
$b = intval(trim(fgets(STDIN)));

if($a % $b == 0){
    echo 'BはAの約数です。'."\n";
}else{
    echo 'BはAの約数ではありません。'."\n";
}

?>