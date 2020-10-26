<?php

    for ($i = 0x21; $i <= 0x7E; $i++) {
        echo mb_chr($i) . " " .  sprintf('%04x', $i)  . PHP_EOL;
        // printf("%c,%04x\n", $i, $i);
    }
