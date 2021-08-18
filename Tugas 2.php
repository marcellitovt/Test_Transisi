<?php
// Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah huruf kecil dalam sebuah string.
// Contoh : bila fungsi diberikan input “TranSISI” maka akan menghasilkan output : “TranSISI” mengandung 3 buah huruf kecil.

$s = "TranSISI";

function jumlahHurufKecil($string){

    $upperCase = strtoupper($string); // Sampel huruf uppercase

    $upperDiff = similar_text($string, $upperCase); //Menghitung jumlah uppercase

    
    return $string . " mengandung ". (strlen($string) - $upperDiff) . " buah huruf kecil."; 
}

echo jumlahHurufKecil($s);
?>