<?php

// IF ELSE
$sambutan = '';
$nilai = 8;
if ($nilai > 9) {
    $sambutan = 'Great' . PHP_EOL;
} else {
    $sambutan = 'Good' . PHP_EOL;
}
echo $sambutan;


// ELSE IF

$status = '';
// if ($nilai == 3) {
//     $status = 'Bad';
// } else if ($nilai == 7) {
//     $status = 'Ok';
// } else {
//     $status = 'GREAT One';
// }
// echo $status;


// SWITCH CASE

switch ($nilai) {
    case 3:
        $status = 'Bad';

        break;
    case 7:
        $status = 'Ok';
        break;
    default:
        $status = 'GREAT One';
        break;
}
echo $status;
