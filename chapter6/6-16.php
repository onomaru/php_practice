<?php

$week = ['sunday','monday','tuesday','wednesday','thursday','friday','saturday'];
$japWeek = ['日','月','火','水','木','金','土'];
echo '英語の曜日名を小文字で入力してください'."\n";

do{
    do{
        $n = mt_rand(0,6);

    }while($n == $last);

    do{
        $last = $n;
        echo $japWeek[$n].'曜日:';
        $ans = strval(trim(fgets(STDIN)));
        if($ans == $week[$n]){
            echo '正解！';
            break;
        }
        
        echo '違います'."\n";
        do{
            echo 'どうする？1...再入力/0..答えを見る';
            $action = intval(trim(fgets(STDIN)));

        }while($action != 0 && $action != 1);
        
        if($action == 0){
            echo '正解は'.$japWeek[$n].'曜日は'.$week[$n]."\n";
        }

    }while($action == 1);

    echo 'もう一度？1...Yes/0...No';
    $again = intval(trim(fgets(STDIN)));

}while($again == 1);

?>