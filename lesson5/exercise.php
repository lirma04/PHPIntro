<?php

//1UZD
function dividesBy5 (int $valueA, int $valueB = 5): int
{
    return $valueA % $valueB;
}

var_dump(dividesBy5(109));

//2UZD

$arr = ["some text", "another text"];

function arrayPrinter(array $list): void {
    foreach ($list as $item) {
        echo "'" . $item . "'";
        echo PHP_EOL;
    }
}

