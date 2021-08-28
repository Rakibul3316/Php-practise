<?php

/*
sub select এর মাধ্যমে ৫০০০ টাকার বেশি কতজন ইজারের আছে তা দেখা।

(SELECT CUST_ID, SUM(AVAIL_BALANCE) as Total FROM account GROUP BY CUST_ID) => এই অংশটুকুকে আমরা virtual table হিসেবে কল্পনা করবো এবং এর উপর আবার select ব্যবহার করবো।

SELECT * FROM (SELECT CUST_ID, SUM(AVAIL_BALANCE) as Total FROM account GROUP BY CUST_ID) as balance WHERE Total > 7000;

virtual tabel এর অবশ্যই একটা alias name দিতে হবে।

SELECT OPEN_BRANCH_ID, Total FROM (SELECT CUST_ID, SUM(AVAIL_BALANCE) as Total, OPEN_BRANCH_ID FROM account GROUP BY CUST_ID, OPEN_BRANCH_ID) as balance WHERE Total > 7000;

 */
