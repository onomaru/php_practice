<?php
$r = $argv[1];
printf("半径%.2fの円周は%.2fで面積は%.2fです\n", $r, $r*2*M_PI, $r*$r*M_PI);
