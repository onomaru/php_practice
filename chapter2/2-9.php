<?

echo '底辺:';
$width = floatval(trim(fgets(STDIN)));
echo '高さ:';
$height = floatval(trim(fgets(STDIN)));

echo '面積は:'.($width*$height/2);
echo "\n";

?>