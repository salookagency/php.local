<?php
function sum($num1 , $num2) {
    $sum = $num1 + $num2 ;
    return $sum ;
}


echo sum (5,6) ."<br>";
echo sum (55,0) . "<br>";
echo sum (11,1) . "<br>";

echo '<pre>';
print_r($GLOBALS) ;
echo '</pre>' ;
function factoril ($n){
    if ($n == 1) {
        return 1 ;
    }
    else {
        return factoril($n-1) * $n ;
    }
}

e (factoril(10)) ;
