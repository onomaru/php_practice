<?php
echo '文字列：';
$s = strval(trim(fgets(STDIN)));
$s1 = "ABC";
$s2 = <<<EOD
こんにちはABC。
EOD;

echo "s = ".$s.PHP_EOL;
echo "s1 = ".$s1.PHP_EOL;
echo "s2 = ".$s2.PHP_EOL;
