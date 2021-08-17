<?php

/*
group by (single field)

SELECT COUNT(*) as Total_customer, CITY FROM customer GROUP BY CITY;
 */

/*
group by (multiple field)

SELECT COUNT(*) as Total_customer, CITY, POSTAL_CODE FROM customer GROUP BY CITY, POSTAL_CODE;
 */

// Total_customer is alias(উপনাম) of COUNT(*);
