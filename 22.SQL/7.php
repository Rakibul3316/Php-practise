<?php

/*

একটা কন্ডিশনের মাধ্যমে সমস্ত ইউজার দের দেখানে।

// Old style

SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE, customer.CITY FROM customer, individual WHERE customer.CUST_ID = individual.CUST_ID;

// New style

SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE FROM customer JOIN individual ON customer.CUST_ID = individual.CUST_ID;

 */
