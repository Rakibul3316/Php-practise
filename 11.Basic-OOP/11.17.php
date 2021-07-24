<?php

class Student {
    private $name;
    private $age;
    private $roll;

    function __construct( $name = '', $age = '', $roll = '' ) {
        $this->name = $name;
        $this->age  = $age;
        $this->roll = $roll;
    }

    public function __get( $property ) {
        return $this->$property;
    }

    public function __set( $property, $value ) {
        $this->$property = strtoupper( $value );
    }

    // function getName() {
    //     return $this->name;
    // }

    // function setName( $name ) {
    //     $this->name = $name;
    // }

    // function getAge() {
    //     return $this->age;
    // }

    // function setAge( $age ) {
    //     $this->age = $age;
    // }

    // function getRoll() {
    //     return $this->roll;
    // }

    // function setRoll( $roll ) {
    //     $this->roll = $roll;
    // }
    // এতগুলো getter setter এর পরিবর্তে আমরা মাত্র দুইটি ফাংশন এর সাহায্যে এই কাজগুলো করতে পারি।
}

$r = new Student( 'Rahim', '15', '7' );

$r->name = 'kamal';
echo $r->name;

// echo $Rahim->getName() . "\n";
// echo $Rahim->getAge() . "\n";
// echo $Rahim->getRoll() . "\n";
