<?php

const FILENAME = 'd:\PHP-Practise\8.CRUD-Project\assets\js\script.js';

echo "BaseName => " . pathinfo( FILENAME, PATHINFO_BASENAME ) . "\n";
echo "FileName extension => " . pathinfo( FILENAME, PATHINFO_EXTENSION ) . "\n";
echo "FileName => " . pathinfo( FILENAME, PATHINFO_FILENAME ) . "\n";
echo pathinfo( pathinfo( FILENAME, PATHINFO_DIRNAME ), PATHINFO_BASENAME ) . "\n"; // current directory name.
echo "Directory Name => " . pathinfo( FILENAME, PATHINFO_DIRNAME ) . "\n";
