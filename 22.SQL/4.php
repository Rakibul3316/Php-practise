<?php

/*
grouping

using where ‍

SELECT * FROM customer WHERE CITY='salem';
নির্দিষ্ট সিটিতে কতজন কাস্টমার আছে।

 */

/*
using where ‍& and or condition

SELECT * FROM customer WHERE CITY='salem' AND POSTAL_CODE='03079';
নির্দিষ্ট সিটিতে এবং পোস্টাল কোডে কতজন কাস্টমার আছে।

SELECT * FROM customer WHERE (CITY='salem' AND POSTAL_CODE='03079') OR CITY = 'Wilmington';
সালেম অথবা উইলমিংটন এ কত জন কাস্টমার আছে।

SELECT * FROM customer WHERE (CITY='salem' AND POSTAL_CODE IN ('03079', '03080')) OR (CITY = 'Wilmington' AND POSTAL_CODE='01887');
সিটি সালেম এবং পোস্টাল কোড দুইটার মধ্যে একটা অথবা উইলমিংটন এবং পোস্টাল কোড।

SELECT * FROM customer WHERE (CITY='salem' AND POSTAL_CODE IN ('03079', '03080')) OR CITY = 'Wilmington'
সিটি সালেম এবং পোস্টাল কোড দুইটার মধ্যে একটা অথবা উইলমিংটন ।
(just run two query to understand the perpose).

 */
