<?php

/*
JOIN = inner join, LEFT JOIN = left outer join, RIGHT JOIN = right outer join

inner join means দুইটা টেবিলের মধ্যে যে জিনিসগুলো কমন সেগুলো।

SELECT individual.CUST_ID, FIRST_NAME, LAST_NAME, orders.PRICE, orders.`NAME` FROM individual JOIN orders ON orders.CUST_ID = individual.CUST_ID;

 */
