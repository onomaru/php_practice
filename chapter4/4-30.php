<?php
// $rand = mt_rand(0,99);
// $rand = 62;
// echo '数当てゲーム'."\n";
// echo '0~99の数を当ててください'."\n";

// for($i = 6;$i > 0;$i--){
//     echo '残り'.$i.'回。';
//     echo 'いくつかな：';
//     $ans = intval(trim(fgets(STDIN)));
//     if($rand == $ans){
//         echo '正解！'.(6-$i+1).'回で当たりましたね'."\n";
//         break;
//     }else if($ans > $rand){
//         echo 'もっと小さな数だよ'."\n";
//     }else if($ans < $rand){
//         echo 'もっと大きな数だよ'."\n";
//     }

// }

// echo '正解は'.$rand.'でした。';

///////////////////////////////////////////////////////

$rand = mt_rand(0,99);
$rand = 62;
echo '数当てゲーム'."\n";
echo '0~99の数を当ててください'."\n";
$i = 6;
$loop = 0;
do{

    echo '残り'.$i.'回。';
    $i--;
    echo 'いくつかな：';
    $ans = intval(trim(fgets(STDIN)));
    if($ans > $rand){
        echo 'もっと小さな数だよ'."\n";
    }else if($ans < $rand){
        echo 'もっと大きな数だよ'."\n";
    }

    $loop++;

//&&
}while($ans != $rand && $i > 0);

if($ans == $rand){
    echo '正解！'.$loop.'回で当たりましたね'."\n";
}else{
    echo '正解は'.$rand.'でした。';
}
?>