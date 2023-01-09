<?php


// function sayHello()
// {
//     echo 'Hello World' . PHP_EOL;
// }
// sayHello();

function tambah($input1, $input2)
{
    $total = $input1 + $input2;
    return $total;
}
$hasil = tambah(12, 15);
echo "$hasil \n";


$array1 = [];
function addData($data)
{
    $array1[] = $data;
    return $array1;
}
$hasilArray = addData('Doni');

foreach ($hasilArray as $value) {
    echo $value;
}
