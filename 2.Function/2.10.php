<?php

function factorial ($n) {
    if($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5);

// না বুঝলে ভিডিওটা আবার দেখলেই হবে। 