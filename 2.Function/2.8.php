<?php

function fibonacci($old,$new,$end) {

    static $start; // static var. সম্পর্কে জানতে ২.৯ নম্বর ভিডিওটা দেখতে হবে। 
    $start = $start ?? 1; // এই লাইনটির মানে হলো যদি $start এর মান না থাকে তাহলে ১ কে নাও। যখন কোন মান থাকে তখন ঐ মানকে নাও। তাই যখন $start++ থেকে মান আসবে তখন সে ঐ মানকেই নিবে। 
    // “??” => এই অপারেটরের নাম হলো “নালকোলেস” অপারেটর। 

    if ($start>$end) {
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old+$new; // $_temp var. হলো private var. যা শুধুমাত্র এই ফাংশনের ভিতরেরই কাজ করবে। একে এই ফাংশনের বাইরে অন্য কোথাও ব্যবহার করলে এটি কাজ করবে না। 
    $old = $new; 
    $new = $_temp;

    fibonacci($old,$new,$end);
}

fibonacci(0,1,15);