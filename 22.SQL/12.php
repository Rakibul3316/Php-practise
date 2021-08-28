<?php

/*

SELECT individual.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE, SUM(AVAIL_BALANCE) as Total FROM account JOIN individual ON individual.CUST_ID = account.CUST_ID GROUP BY account.CUST_ID HAVING Total > 5000;

SELECT * FROM(SELECT individual.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE, SUM(AVAIL_BALANCE) as Total FROM account JOIN individual ON individual.CUST_ID = account.CUST_ID GROUP BY account.CUST_ID) as balance WHERE Total > 500;

 */
