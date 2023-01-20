<?php


// 1. Išspausdinkite kas antrą skaičių nuo 100 iki 500 naudodamiesi for ciklu.
//    Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
//    100
//    102
//    104
//    ...



// 2. Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 555 ir grąžinkite tą reikšmę iš funkcijos.

    //    $numbers = [
    //        [0, 1],
    //        [1, 0, 2],
    //        [
    //            0,
    //            [
    //                0, 1, 99,
    //                [
    //                   10, 44, 555,
    //                ],
    //            ],
    //        ],
    //    ];

// var_dump($numbers[2][1][3][2]);

// function find_path(array $haystack, $needle): array {
//     foreach ($haystack as $i => $value) {
//         if (!is_array($value) === $needle) {
//             return [$i];
//         }

//         if(is_array($value)) {
//             $deeperIndices = find_path($value, $needle);

//             if($deeperIndices !== null)
//             return array_merge([$i], $deeperIndices);
//         }
//     }

//     return null;
// }

// var_dump(find_path($numbers, 555));

// 3.     Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 55. Jeigu paduotas skaičius mažesnis nei 0,
//        funkcija paverčia šį skaičių pliusiniu.
//        Funkcijos kvietimas: exercise10(60)

// function task3 (int $number) : void {

// $number = abs($number);

// for ($i = $number -1; $i>= 55; $i--) {
//     if ($i % 55 === 0) {
//         echo $i . PHP_EOL;
//         }
//     }
// }
// task3(100);



// 4.   Išveskite žodžių statistiką.
//          Funkcija kviečiama:
//          exercise2(['hello', 'you'])
//          Funkcijos outputas:
        //  $word = [
        //      'hello' => [
        //          'vowels' => 2,
        //          'consonants' => 3,
        //          'length' => 5,
        //          'starts_with' => 'h',
        //          'ends_with' => 'o',
        //      ],
        //      'you' => [
        //          'vowels' => 3,
        //          'consonants' => 0,
        //          'length' => 3,
        //          'starts_with' => 'y',
        //          'ends_with' => 'u',
        //      ]
        //      ];

        function exercise(array $word_check):array {
            $newArr = [];
            foreach ($word_check as $word) {
                $vowels = preg_match_all('/[aeiou]/',$word);
                $consonants = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/', $word);
                $length = strlen($word);
                $startsWith = substr($word, 0, 1);
                $endsWith = substr($word, -1, 1);
        
                $newArr[$word] = [
                    'vowels' => $vowels,
                    'consonants' => $consonants,
                    'length' => $length,
                    'starts_with' => $startsWith,
                    'ends_with' => $endsWith,
                ];
            }
            return $newArr;
        }
        var_dump(exercise(['irma', 'you']));



// Sis array bus naudojamas 5 ir 6 uzduociai :

    // [
    //     'products' => [
    //         'Comfy chair' => 'no data',
    //         'Yellow lamp' => [
    //             'price' => 15.3,
    //             'quantity' => 2,
    //         ],
    //         'Didzioji sofa' => [
    //             'pavadinimas' => 'Didzioji sofa',
    //             'kaina' => 'trylika eurų'
    //         ],
    //         'Softest rug' => [
    //             'price' => 27.3,
    //             'quantity' => 3,
    //             'discount' => 13,
    //         ],
    //         'Blue shelf' => [],
    //     ],
    //     'cartDiscounts' => [5, 16, 15],
    // ];


// 5. Atspausdinkite statistika - pavadinima, kokia kaina ir koks likutis.
    // Jeigu produkte truksta numatytu parametru, vietoje ju naudokite N/A
    // Pvz.:
    //     - Pavadinimas - Softest rug, Kaina - 27.3, Likutis - 3
    //     - Pavadinimas - Didzioji sofa, Kaina - N/A, Likutis - N/A

// 6. Parašykite funkciją kuri priimti prekės pavadinimą ir kokį kiekį norima nusipirkti, jeigu kiekio užtenka mūsų sandelyje (masyve)
//     tuomet atspausdinama - Jums parduota tokio pavadinimo - PREKES_PAVADINIMAS, prekė, kuri kainuoja - 55.55
//     Kitu atveju turi buti spausdinama - atsiprasau, bet tokio likucio sandelyje nebeturime.