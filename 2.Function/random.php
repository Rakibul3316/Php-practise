<?php

/*********************************
Class => 2.5 (function defination)
**********************************/

// function sum (...$numbers) {
//     $result = 0;
//     print_r($numbers);

//     for ($i = 0; $i < count($numbers); $i++) {
//         $result += $numbers[$i];
//     }
//     return $result;
// }

// echo "Sum of the all numbers are ".sum(74, 83, 845, 94);

/******************************** 
Class => 2.7 (recusive function)
********************************/

// function printN($n) {
//     // break point
//     if($n >= 11) {
//         return;
//     }
//     echo "{$n} \n";
//     $n++;
//     printN($n);
// }

// printN(1);

/* Print even or odd number */

// function even_or_odd_number($start, $end, $stepping) {
//     if($start > $end) {
//         return;
//     }
//     echo "{$start} \n";
//     $start += $stepping;
//     even_or_odd_number($start, $end, $stepping);
// }

// even_or_odd_number(1, 20, 2);

/********************************
Class => 2.8 (fibonacci serise) 
********************************/

// function fibonacci ($old, $new, $howManyNumber) {
//     static $start;
//     $start = $start ?? 1;

//     if($start > $howManyNumber) {
//         return;
//     }
//     $start++;

//     echo $old." ";
//     $_temp = $old + $new;
//     $old = $new;
//     $new = $_temp;
//     fibonacci ($old, $new, $howManyNumber);
// }

// fibonacci (0, 1, 20);

/********************************
Class => 2.9 (variable scope) 
********************************/

// $name = 'Rakibul';

// function doSomething() {
//     $name = 'Rakibul';
//     echo $name;
//     echo $GLOBALS['name']; // super gloabl variable.
// }

// doSomething();
// echo $name;


// function staticScope () {
//     static $i;
//     $i = $i ?? 0;
//     $i++;
//     echo $i."\n";
// }

// staticScope();
// staticScope();
// staticScope();



// function factorial ($n) {
//     if ($n <= 1) {
//         return 1;
//     }
//     return $n * factorial($n - 1);

// }

// $x = 5;

// echo "Factorial of {$x} is ".factorial($x);


