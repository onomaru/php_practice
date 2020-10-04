<?php
//2桁の整数値(10~99)を当てさせる数当てゲーム

$rand = mt_rand(10,99);
echo '数当てゲーム'."\n";
echo '10~99の数を当ててください'."\n";

do{
    echo 'いくつかな：';
    $ans = intval(trim(fgets(STDIN)));
    if($ans > $rand){
        echo 'もっと小さな数だよ'."\n";
    }else if($ans < $rand){
        echo 'もっと大きな数だよ'."\n";
    }
}while($ans != $rand);

echo '正解！'."\n";

?>