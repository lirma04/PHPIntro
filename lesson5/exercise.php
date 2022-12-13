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

// function stringEnhancer ( string $text, string $enhancer = '**'): string 
// {
//     return "$enhancer$text$enhancer";
// }

// var_dump(stringEnhancer('some text', '##')).PHP_EOL;
// var_dump(stringEnhancer('some text')).PHP_EOL;

//kitas budas PASIBANDYTI




//4UZD

// function stringModifier(string $text, string $modifier):string
// {
//     return $modifier . $text . $modifier;
// }

// $x = 'some text';
// $x = stringModifier($x, '$$');

// echo $x.PHP_EOL;

//kitas budas 

function stringModifier(string &$text, string $modifier): void
{
    $text = $modifier . $text . $modifier;
}

$x = 'some text';
echo $x.PHP_EOL;
stringModifier($x, '$$');
echo $x.PHP_EOL;


//5UZD

function textReplicator(string &$text, int $replicate = 1):void
{
    $text = $text * $replicate;
}

$x = 'some_text';
echo $x.PHP_EOL;
textReplicator($x, 3);
echo $x.'-'.PHP_EOL;