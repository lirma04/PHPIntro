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

arrayPrinter ($arr); //iskviecia funkcija

//3UZD //uzbaigt

function stringEnhancer ( string $text, string $enhancer = '**'): string 
{
    return "$enhancer$text$enhancer";
}





