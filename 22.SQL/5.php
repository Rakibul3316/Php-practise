<?php

/*
দুইটা টেবিল থেকে ডেটা নিয়ে একজায়গায় দেখা যায়।

SELECT customer.CUST_ID, FIRST_NAME, LAST_NAME, BIRTH_DATE, CITY FROM customer, individual WHERE CITY = 'salem' AND customer.CUST_ID = individual.CUST_ID;

দুইটা টেবিল থেকে ডাটা আনার সময় খেয়াল রাখতে হবে, যদি একই ফিল্ড এর ডাটা দুইটা টেবিলেই থাকে তাহলে অবশ্যই ঐ ধরণের ফিল্ড দেখানোর জন্য তাদেরকে নির্দিষ্ট করে বলে দিতে হবে। CUST_ID দুইটা টেবিলেই আছে তাই এটাকে নির্দিষ্ট করতে হবে (customer.CUST_ID)।

good practise হলো tabelName.fieldname সবগুলোই জন্যই ব্যবহার করা।

SELECT customer.CUST_ID, individual.FIRST_NAME, individual.LAST_NAME, individual.BIRTH_DATE, customer.CITY FROM customer, individual WHERE CITY = 'salem' AND customer.CUST_ID = individual.CUST_ID;

 */
