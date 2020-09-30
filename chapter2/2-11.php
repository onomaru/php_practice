<?php 

echo '乱数を生成';
echo '<br>';
echo '1桁の正の整数'.rand(1,9);
echo '<br>';
echo '1桁の負の整数'.rand(-9,-1);
echo '<br>';
echo '2桁の正の整数'.rand(10,99);
echo '<br>';


echo '乱数を生成(mt_rand)';
echo '<br>';
echo '1桁の正の整数'.mt_rand(1,9);
echo '<br>';
echo '1桁の負の整数'.mt_rand(-9,-1);
echo '<br>';
echo '2桁の正の整数'.mt_rand(10,99);


?>