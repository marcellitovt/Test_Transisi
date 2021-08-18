<?php

// ● Diketahui sebuah array berikut :
// $arr = [
//  ['f', 'g', 'h', 'i'],
//  ['j', 'k', 'p', 'q'],
//  ['r', 's', 't', 'u']
// ];
// Buatlah sebuah fungsi dalam PHP untuk melakukan pencarian kata dalam array di atas.
// (perhatikan contoh di bawah ini)
// cari($arr, 'fghi'); // true
// cari($arr, 'fghp'); // true
// cari($arr, 'fjrstp'); // true

// PSEUDOCODE
// 1. Pisahkan huruf yang di input menjadi array
// 2. Periksa setiap huruf apakah ada dalam array 1 - n 
// 3. jika semua huruf ada dalam array, //True

Function cari($arrayInput, $wordInput){
    // Convert to flat array
    $flattenArr = array_merge(...$arrayInput);
    // Splitting input word
    $splitedWord = str_split($wordInput);
    $tmpWord = '';
    // Cek setiap huruf
    foreach ($splitedWord as $char){
        $key = array_search($char, $flattenArr);
        if (false !== $key){
            $tmpWord .= $char;
        }
    }

    if ($wordInput == $tmpWord){
        echo "True\n";
    }
    else{
        echo "False\n";
    }
}


$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
   ];

cari($arr, 'fghi'); // true
cari($arr, 'fghp'); // true
cari($arr, 'fjrstp'); // true
cari($arr, 'abc'); // false


?>