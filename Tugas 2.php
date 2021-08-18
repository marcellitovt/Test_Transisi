<?php
// Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah huruf kecil dalam sebuah string.
// Contoh : bila fungsi diberikan input “TranSISI” maka akan menghasilkan output : “TranSISI” mengandung 3 buah huruf kecil.

$s = "TranSISI";

function jumlahHurufKecil($string){

    $upperCase = strtoupper($string);
    $upperDiff = similar_text($string, $upperCase);
    return (strlen($string) - $upperDiff);
}


// echo "Lowercase: " . jumlahHurufKecil($s);
echo $s . " mengandung ". jumlahHurufKecil($s) . " buah huruf kecil.";
?>