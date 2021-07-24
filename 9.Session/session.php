<?php

/*========= Part-1 =========*/

session_start();
$_SESSION['name'] = 'Rakibul';
echo $_SESSION['name'];
// session_destroy();

/*========= Part-2 =========*/

// session_name( 'myapp' );
// session_start( [
//     'cookie_lifetime' => 30,
// ] );
// session_destroy();
// $_SESSION['name'] = 'Rakibul';
// echo $_SESSION['name']; // যদি এই সেশনটাকে অন্যকোন ফাইল থেকে শুরু করতে হয় তাহলে আগে সেশন নাম এবং পরে session_start() করতে হবে। এবং এই লাইনটা একো করলেই হবে।
// যদি সেশন এর নাম থাকে তাহলে নাম দিতেই হবে, আর নাম না থাকলে দেওয়ার দরকার নেই।
