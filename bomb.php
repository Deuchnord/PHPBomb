<?php

header('Content-Type: application/octet-stream');

$i = 0;

while(true) {
    for($j = 0; $j < 1000; $j++) {
        echo '0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000';
    }

    if(++$i % 1000 == 0) {
        flush();
        sleep(0.2);
    }
}

