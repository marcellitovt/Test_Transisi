<?php
// String top Int
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$intNilai = array_map('intval', explode(' ', $nilai));


// Rata-rata 
$mean = array_sum($intNilai)/count($intNilai);
echo "Rata-rata : " . number_format($mean,2);

// Tertinggi
rsort($intNilai); 
echo "\n7 Nilai Tertinggi : ";
for($x = 0; $x < 7; $x++) {
    echo $intNilai[$x];
    echo " ";}

// Terendah
sort($intNilai); 
echo "\n7 Nilai Terendah : ";
for($x = 0; $x < 7; $x++) {
    echo $intNilai[$x];
    echo " ";}

?>
