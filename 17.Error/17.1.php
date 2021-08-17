<?php

ini_set( "display_errors", 0 ); // এভাবেও php.ini এর error off করা যায়।
// error_reporting( 0 ); // এটা রাখলে সার্ভারে error show করে না। এখানে আমরা চাইলে কোন চাইপের error সেটা দেখতে পারি।
// error_reporting(E_WARNING)
// error_reporting(E_ALL)
// error_reporting(E_NOTICE)
// error_reporting(E_NOTICE | E_WARNING)
// echo $book;
// echo "Rakibul";
echo 12 / 0;

// echo get_cfg_var( "cfg_file_path" ); // find the php.in file
