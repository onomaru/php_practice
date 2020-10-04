<?php

echo '季節を求めます'."\n";
do{
    do{
        echo '何月ですか：';
        $month = intval(trim(fgets(STDIN)));
    }while($month < 1 || $month > 12);
    
    switch($month){
        case 12:
        case 1:
        case 2:
            echo 'それは冬です'."\n";
            break;
        case 3:
        case 4:
        case 5:
            echo 'それは春です'."\n";
            break;
        case 6:
        case 7:
        case 8:
            echo 'それは夏です'."\n";
            break;
        case 9:
        case 10:
        case 11:
            echo 'それは秋です'."\n";
            break;
    }
    echo 'もう一度？1...yes 0...no :';
    $ans = intval(trim(fgets(STDIN)));
}while($ans == 1);

?>