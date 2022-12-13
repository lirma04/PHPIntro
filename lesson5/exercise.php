<?php

// //1UZD
// function dividesBy5 (int $valueA, int $valueB = 5): int
// {
//     return $valueA % $valueB;
// }

// var_dump(dividesBy5(109));

// //2UZD

// $arr = ["some text", "another text"];

// function arrayPrinter(array $list): void {
//     foreach ($list as $item) {
//         echo "'" . $item . "'";
//         echo PHP_EOL;
//     }
// }

// arrayPrinter ($arr); //iskviecia funkcija

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

// function stringModifier(string &$text, string $modifier): void //void nes nieko negrazina
// {
//     $text = $modifier . $text . $modifier;
// }

// $x = 'some text';
// echo $x.PHP_EOL;
// stringModifier($x, '$$');
// echo $x.PHP_EOL;


//5UZD

function textReplicator(string $text, ?int $multiplier): string {
    $result = $text;

    for ($i=0; $i< $multiplier; $i++) {
        $result = $result . '-' .$text;
    }

    return $result;
}

var_dump(textReplicator('some_text', 3));
var_dump(textReplicator('some_text', null));

// function textReplicator(string $text, ?int $multiplier):string { //?int - arba int(sk) arba null
//     return str_repeat($text, $multiplier);
// }

// var_dump(textReplicator('some text', 3));
// var_dump(textReplicator('some text', null));

//6UZD

