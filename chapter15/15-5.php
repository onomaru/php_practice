<?php
echo '文字列s:';
$s = strval(trim(fgets(STDIN)));
// echo mb_detect_encoding($s);
// sprintf('%04x', $i);

for ($i = 0; $i < mb_strlen($s); $i++) {
    echo mb_substr($s, $i, 1, "UTF-8");
    echo "  ";
    echo bin2hex(mb_substr($s, $i, 1, "UTF-8"));
    echo "\n";
}
