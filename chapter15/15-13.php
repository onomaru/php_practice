<?php
for ($i = 1;$i < count($argv);$i++) {
    echo '$argv['.$i.'] = ';
    for ($j = 0;$j < mb_strlen($argv[$i]);$j++) {
        echo substr($argv[$i], $j, 1);
    }
    echo "\n";
}
