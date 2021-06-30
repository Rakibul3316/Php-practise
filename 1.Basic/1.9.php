<?php

// 4 types of number system
// 1.Binary base-2 (0,1)
// 2.Octal base-8 (0 - 7)
// 3.Decimal base-10 (0 - 9)
// 4.Hexadecimal base-16 (0 - 9 also a - f)

// %b = Binary
// %d = Decimal
// %o = Ocatal
// %x = Hexadecimal

// Octal number stats with 0.
// Example: 0133;

// Hexadecimal number stats with 0x.
// Example: 0x1b;

$d = 12;
$o = 0125;

printf("The Number is %o \n", $d);

printf("The Number is %d \n", $o);

printf("The binary equivalent number of %d is %b \n", 12, 12);

printf("The hexadeciaml equivalent number of %d is %x \n", 12667, 12667);