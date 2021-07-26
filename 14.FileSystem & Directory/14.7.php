<?php

const FILENAME = 'd:\PHP-Practise\8.CRUD-Project\assets\js\script.js';

echo pathinfo( FILENAME, PATHINFO_BASENAME ) . "\n";
echo pathinfo( FILENAME, PATHINFO_EXTENSION ) . "\n";
echo pathinfo( FILENAME, PATHINFO_FILENAME ) . "\n";
echo pathinfo( pathinfo( FILENAME, PATHINFO_DIRNAME ), PATHINFO_BASENAME ) . "\n"; // current directory name.
echo pathinfo( FILENAME, PATHINFO_DIRNAME ) . "\n";
