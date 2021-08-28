<?php

/*

LEFT JOIN = ১ম টেবিলের সবডাটা এবং দ্বিতীয় টেবিলের সেই ডাটাগুলো যেগুলো শুধুমাত্র ১ম টেবিলের সাথে মিলেছে।

SELECT orders.*, order_notes.NOTE FROM orders LEFT JOIN order_notes ON orders.ID = order_notes.ORDER_ID;

SELECT orders.*, order_notes.NOTE FROM orders LEFT JOIN order_notes ON orders.ID = order_notes.ORDER_ID WHERE order_notes.ORDER_ID IS NOT NULL;

SELECT orders.*, order_notes.NOTE FROM orders LEFT JOIN order_notes ON orders.ID = order_notes.ORDER_ID WHERE order_notes.ORDER_ID IS NULL;

 */
