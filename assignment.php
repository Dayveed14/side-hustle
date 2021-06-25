<?php
//Assignment 1.

function myrange($start, $end)  {
    $numbers = range($start, $end);
    return $numbers;
};

$new = myrange(0,9);
echo "<pre>";
print_r ($new);

// Assignment 2 done using a static function and global variable
$array = array(1,2,3,4,5,6,7,8,9);
function mysumfunc(){
    global $array;
    $sum = array_sum($array);
    return $sum;
};
echo mysumfunc();

;
echo "</br>";

//Assignment 2 done using a dynamic function.

function mysumfunc2(...$val){   
    $sum = 0;
    foreach ($val as $number) {
        $sum += $number;
    }
    return $sum;
};
echo mysumfunc2(1,2,3,4,5,6,7,8,9);
?>