<?php

$allInAll = 'Quick brown fox jumps over the lazy dog';

$replace = str_replace( 'fox', 'dog', $allInAll, $count );

echo $allInAll . "\n";
echo $replace . "\n";
echo "Total replacement: {$count}";