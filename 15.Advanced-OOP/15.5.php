<?php

/* S => Single Responsibility Principle.
(একটা ক্লাস যেন নির্দিষ্ট একটা কাজই করে। একটা অবজেক্ট দিয়ে একটা কাজই করা হোক। একটা single class এর single resposibilty
থাকবে। ) */

class Student {
    function checkAttendenc() {}
    function calculateGrade() {}
    function collectFee() {}
}

//এখানে Student class একসাথে তিনটা কাজ করতেছে। এটা আসলে Single Responsibility Principle কে সম্বর্থন করে না।

class GradeCalculate {}

class Attendence {}

class StudentsPayment {}

// কিন্তু এখানে তিনটা ক্লাস আলাদা আলাদা তিন ধরণের কাজ করতেছে। এইটা আসলে Single Responsibility Principle।
