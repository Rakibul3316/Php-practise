<?php

/*
using JOIN for better lesson:5

SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE, customer.CITY FROM customer JOIN individual ON customer.CUST_ID = individual.CUST_ID WHERE CITY = 'salem';

আমরা লেশন-৫ এর মত query না চালিয়ে এইভাবে query চালাবো, এটাই suggested way.
 */
