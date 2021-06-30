<?php

//recursive function (এর অর্থ হলো, যে ফাংশন নিজে নিজেকেই কল করে।)

// print 0 - 9;

function printN($i)
{
    if ($i >= 10) { //২. মানটা এখানে কন্ডিশন অনুয়ায়ী চেক হবে। যতক্ষণ কন্ডিশন ঠিক থাকবে ততক্ষণ ফাংশনটা চলবে। 
        return;
    }

    echo $i . "\n"; //৩. মানটা চেক হবার পর এখানে প্রিন্ট হবে। 
    $i++;         //৪.  মানটা এক এক করে বারবে। 
    printN($i);   //৫. ফাংশনটা পুনরায় কল হবে এবং ১ নং এ চলে যাবে। 
}

//printN(0);        //১. প্রথমে এখান থেকে মানটা যাবে। 

// কিছু নির্দিষ্ট সংখ্যা প্রিন্ট করার ফাংশন। 

function printNumber($counter,$end) {
    if($counter>$end) {
        return;
    }

    echo $counter."\n";
    $counter++;
    print printNumber($counter,$end);
}

//printNumber(30, 50);

// কিছু নির্দিষ্ট সংখ্যা নির্দিষ্ট ব্যবধানে প্রিন্ট করার ফাংশন।

function printSteppingNumber($start,$end,$stepping=1) {
    if($start>$end){
        return;
    }

    echo $start. "\n";
    $start+= $stepping;
    printSteppingNumber($start,$end,$stepping);
}

printSteppingNumber(1,40,2);