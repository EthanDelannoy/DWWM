<?php

// EXERCIE 1--------------------------------------------

// $T = [     
//     [3, 1, 4, 1, 5, 9, 2, 6],
//     [5, 3, 5, 8, 9, 7, 9, 3],     
//     [2, 3, 8, 4, 6, 2, 6, 4],     
//     [3, 3, 8, 3, 2, 7, 9, 5],     
//     [1, 0, 2, 5, 3, 5, 8, 9],     
//     [7, 9, 3, 2, 3, 8, 4, 6],     
//     [2, 7, 1, 0, 2, 8, 4, 1],     
//     [4, 2, 9, 1, 6, 5, 3, 5],     
//     [8, 9, 7, 9, 3, 2, 3, 8],     
//     [4, 6, 2, 6, 4, 7, 3, 1],     
//     [5, 9, 2, 7, 1, 4, 6, 5],     
//     [9, 7, 9, 3, 2, 1, 0, 8]
// ];

// $valeursMax = null;

// foreach ($T as $values) {
//     $valeursTab = max($values);
//     if ($valeursMax === null || $valeursTab > $valeursMax) {
//         $valeursMax = $valeursTab;
//     }
// }

// echo $valeursMax;  

// EXERCIE 2--------------------------------------------

// function figure($tab){
// $tab = array();

// for ($i = 1; $i <= 7; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         $tab[$i][$j] = "*"." ";
//         echo $tab[$i][$j];
//     }
//     echo "\n";
// }

// for ($i = 6; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         $tab[$i][$j] = "*"." ";
//         echo $tab[$i][$j];
//     }
//     echo "\n";
// }
// }


// for ($i = 1; $i <= 8; $i++) {
//     if ($i == 8) {
//         for ($j = 1; $j <= $i; $j++) {
//             echo "X";
//         }
//     } else {
//         echo "X";
//         if ($i > 1) {
//             for ($j = 1; $j <= $i - 2; $j++) {
//                 echo "0";
//             }
//             echo "X";
//         }
//     }
//     echo "\n";
// }