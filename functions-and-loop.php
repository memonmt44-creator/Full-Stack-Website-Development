<?php  


// for ($i = 0; $i <10; $i++) {

    // echo $i . "<br>";
// } 

// Loops

// $i = 1;


// while( $i <= 10 ){

// echo $i . "Loop is running" . "<br>";
// $i++;

// }


// functions

// function addNumbers ( $num1, $num2 ){

//     return $num1 + $num2;
// }

// echo addNumbers(25, 70);

// functions & Loops Combine 

function printTable( $number){

for ($i=1; $i <= 10; $i++) { 
    
echo $number . " X" . $i . " =" . $number*$i . "<br>";
}

}

printTable(7);