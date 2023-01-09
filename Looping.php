<?php

// $arraySiswa = ['Rio', 'Aldo', 'Dzakwan', 'Zaki'];

// foreach ($arraySiswa as $value) {
//     echo "Value : $value\n";
// }

// // For pake index
// for ($i = 0; $i < count($arraySiswa); $i++) {
//     echo "$arraySiswa[$i] \n";
// }

// $array2 = [
//     'first_name' => 'IDN',
//     'last_name' => 'Hebat',
// ];

// foreach ($array2 as $key => $value) {
//     echo "Key : $key\nValue : $value\n";
// }

$data = ['Robi', 'Doni'];
$index = 0;

while (count($data) > 5) {
    echo "$data[$index]\n";
    $index++;
    if ($index > 1) {
        break;
    }
}

do {
    echo "Running \n";
    $index++;
} while (count($data) > 5);
