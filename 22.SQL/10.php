<?php

/*
৫০০০ টাকার বেশি কতজন ইজারের আছে।

যখন group by ব্যবহার করা হবে তখন filter করার জন্য where ব্যবহার করা যাবে না। তখন ব্যবহার করতে হবে having.

SELECT CUST_ID, SUM(AVAIL_BALANCE) as Total FROM account GROUP BY CUST_ID HAVING Total > 5000;

or

SELECT CUST_ID, SUM(AVAIL_BALANCE) as Total FROM account GROUP BY CUST_ID HAVING SUM(AVAIL_BALANCE) > 5000;

 */
