<?php

declare(strict_types=1);

// //1 UZD

// echo 987+545-32*94;
// echo PHP_EOL;
// echo 32**3/3;
// echo PHP_EOL;
// echo 187%5;

// echo PHP_EOL;

// $num = 3;
// $num++;
// $num++;
// $num++;
// echo $num;

// echo PHP_EOL;

// $num=12;
// $num--;
// $num--;
// $num--;
// $num--;
// echo $num;

// echo PHP_EOL;

// //2UZD

// //1 budas

// $num=1;

// while($num<12){
//     echo $num;
//     echo PHP_EOL;
//     $num++;
// };

// //2 budas

// $num=1;

// do {
//     echo $num;
//     echo PHP_EOL;
//     $num++;
// }   while($num<12);

// //3budas

// for ($num=1; $num<12; $num++) {
//     echo $num . PHP_EOL;
// }

//3 UZD

// for ($num=15; $num>2; $num--) {
//     var_dump($num);
// }

//4 UZD

// for($num=1; $num < 21; $num += 2){
//     var_dump($num); //arba echo $num.PHP_EOL;
// }

//arba 


//5 UZD

// for($num = 1; $num <21; $num++){
//    if($num % 3) {
//     continue;
//    }
//    var_dump($num);
// }

//6 UZD

//dalinasi ir is 3 ir is 5;

//PASIZIURETI SCREENHOTUS IR RECAP 8:25 8TH DEC

// for($num = 1; $num <21; $num++){
//        if($num % 3) {
//         continue;
//        }
//        elseif($num % 5) {
//         continue;
//        }
//        var_dump($num);
//     }


//7 UZD

// function tenkina_pirma_sal ($num) : bool {
//     return $num % 3 == 0;
// }

// function tenkina_antra_sal ($num) : bool {
//     return $num % 5 ==0;
// }

// function tenkina_abi_sal ($num) : bool {
//     return tenkina_pirma_sal ($num) && tenkina_antra_sal ($num);
// }

// for ($num = 1; $num <21; $num++) {
//     if (tenkina_abi_sal ($num)) {
//     echo "HeyHo ";

// } elseif (tenkina_pirma_sal ($num)) {
//     echo "Hey ";
    
// } elseif(tenkina_antra_sal ($num)) {
//     echo "Ho ";
// } else {
//     echo "$num " ; //  $num . " ";
// }}

//8 UZD

for ($num = 1; $num <101; $num++) {
    if ($num % $num) {
        echo $num;
    }
}

//10 UZD


