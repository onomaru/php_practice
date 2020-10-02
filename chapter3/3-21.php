<?php 

echo '何月ですか：';
$month = intval(trim(fgets(STDIN)));

switch($month){
    case 12:
        echo '冬'."\n";
        break;  
    case 1:
        echo '冬'."\n"; 
        break;     
    case 2:
        echo '冬'."\n";
        break;  
    case 3:
        echo '春'."\n";
        break;  
    case 4:
        echo '春'."\n";
        break;      
    case 5:
        echo '春'."\n";
        break;  
    case 6:
        echo '夏'."\n";
        break;  
    case 7:
        echo '夏'."\n";    
        break;  
    case 8:
        echo '夏'."\n";    
        break;  
    case 9:
        echo '秋'."\n";
        break;  
    case 10:
        echo '秋'."\n";    
        break;  
    case 11:
        echo '秋'."\n";
        break;  
    default:
        echo 'そんな月はありません。'."\n";
        break;  
}

echo '何月ですか：';
$month = intval(trim(fgets(STDIN)));

switch($month){
    case 12:
    case 1: 
    case 2:
        echo '冬'."\n";
        break;  
    case 3:
    case 4:   
    case 5:
        echo '春'."\n";
        break;  
    case 6: 
    case 7:
    case 8:
        echo '夏'."\n";    
        break;  
    case 9:
    case 10:
    case 11:
        echo '秋'."\n";
        break;  
    default:
        echo 'そんな月はありません。'."\n";
        break;  
}
?>