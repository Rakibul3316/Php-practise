<?php 

// String to Array
// use build in method "explode" explode(delimeter, string);

$vegetables = explode(', ','brinjal, carrot, brocolli, capsicum');

var_dump($vegetables);


// Array to string
// use build in method "join" join(glue, array)
$vegetablesString = join(', ', $vegetables);

var_dump($vegetablesString);

// যদি একাধিক ডেলিমিটারের মাধ্যমে str কে arr তে রূপান্তর করতে হয় তাহলে preg_split ব্যবহার করা হয়। 
// String to Array
$fruits = preg_split('/, |,/',"orange, banana, grap, lemon,watermelon, guava,coconut");

var_dump($fruits);
print_r($fruits);



