<?php

echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    echo 'a['.$i.'] = ';
    $array = intval(trim(fgets(STDIN)));
    $a[$i] = $array;
}
print_r($a);

echo '探す数値';
$find = intval(trim(fgets(STDIN)));


for($i = 0;$i < $n;$i++){

    if($a[$i] == $find){
        $ans = $i;
        break;
    }
}


if(isset($ans)){
    echo 'それはa['.$ans.']にあります'."\n";
    
}else{
    echo 'それはありません'."\n";
}
////////////////////////////////////////////////
echo '要素数：';
$n = intval(trim(fgets(STDIN)));

for($i = 0;$i < $n;$i++){
    echo 'a['.$i.'] = ';
    $array = intval(trim(fgets(STDIN)));
    $a[$i] = $array;
}
print_r($a);

echo '探す数値';
$find = intval(trim(fgets(STDIN)));


for($i = 0;$i < $n;$i++){

    if($a[$i] == $find){
        $ans = $i;
    }
}
if(isset($ans)){
    echo 'それはa['.$ans.']にあります'."\n";
    
}else{
    echo 'それはありません'."\n";
}

?>