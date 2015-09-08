<?php

function fibonnaci($first, $second, $limit) {
    if ($first === 0) {
//        print 0 . PHP_EOL . 1 . PHP_EOL;
        $newFirst = 1;
        $newSecond = 1;
    } else {
//        print $first . PHP_EOL;
//        print ($first + $second) . PHP_EOL;
        $newFirst = $second;
        $newSecond = $first + $second;
    }

    if ($newSecond < $limit) {
        print $newFirst . ' ' . $newSecond . PHP_EOL;
        fibonnaci($newFirst, $newSecond, $limit);
    }
}

fibonnaci(0, 1, 3);