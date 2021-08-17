<?php

/*
I => Interface Segregation Principle
(একটা মোনলিখিক [monolithic = একঘেয়ে] ইন্টারফেস না লিখে নির্দিষ্ট কাজের জন্য যার যেটা দরকার সেইটুকু নিয়েই একটা ইন্টারফেস লেখা উচিত। )
 */

interface Vehicle {
    // function hasTwoTires();
    // function hasFourTires();
    // function hasSixTires();
    // function isDieselCompatible();
    // function isPetrolCompatible();
    function getMilege();
    function getName();
    function getPrice();
}

interface TwoWheelers {
    function hasTwoTires();
}

interface FourWheelers {
    function hasFourTires();
}

interface SixWheelers {
    function hasSixTires();
}

interface DieselCompatible {
    function isDieselCompatible();
}

interface PetrolCompatible {
    function isPetrolCompatible();
}

class MotorCycle implements Vehicle, TwoWheelers, PetrolCompatible {
    function getMilege() {}
    function getName() {}
    function getPrice() {}
    function hasTwoTires() {}
    function isPetrolCompatible() {}
}

class Truck implements Vehicle, SixWheelers, DieselCompatible {
    function getMilege() {}
    function getName() {}
    function getPrice() {}
    function hasSixTires() {}
    function isDieselCompatible() {}
}

// এখানে MotorCycle এবং Truck এর জন্য Vehicle থেকে সবধরণের ফাংশন implements করার কোন দরকার নেই। কারণ MotorCycle এবং Truck এর কেটাগরি আলাদা, এবং তাদের needs ও আলাদা আলাদা। MotorCycle এবং Truck এর ক্ষেত্রে সবগুলো ফাংশন implements না করে আলাদাভাবে নতুন ইন্টাফেস তৈরি করে সেগুলোকে implements করা।
