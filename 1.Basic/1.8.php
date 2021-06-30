<?php 

$n = 7;
$m = $n++;

echo $m, "\n", $n;


//Behind the scene;

// $m = $n++;
// $m = $n;
// $n = $n + 1;

// $m = ++$n;
// $n = $n + 1;
// $m = $n; 