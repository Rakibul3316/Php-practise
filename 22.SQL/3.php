<?php

/*
group by (single field)

SELECT COUNT(*) as Total_customer, CITY FROM customer GROUP BY CITY;
কোন কোন সিটেতে কতজন কাস্টমার আছে।
 */

/*
group by (multiple field)

SELECT COUNT(*) as Total_customer, CITY, POSTAL_CODE FROM customer GROUP BY CITY, POSTAL_CODE;
কোন কোন সিটি এবং পোস্টাল কোডে কতজন কাস্টমার আছে।
 */

// Total_customer is alias(উপনাম) of COUNT(*);
