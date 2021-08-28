<?php

namespace App\Http\Controllers;

class MainController extends Controller {
    function sayHi() {
        return "hello world";
    }

    function sayDaynamicName( $name ) {
        return "Hello {$name}";
    }
}
