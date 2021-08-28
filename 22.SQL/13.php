<?php

/*

Join more table

SELECT account.CUST_ID, SUM(AVAIL_BALANCE) as Total, account.OPEN_BRANCH_ID, individual.FIRST_NAME, branch.`NAME`  FROM account
JOIN individual on individual.CUST_ID = account.CUST_ID
JOIN branch on branch.BRANCH_ID = account.OPEN_BRANCH_ID
GROUP BY account.CUST_ID, account.OPEN_BRANCH_ID;

 */
