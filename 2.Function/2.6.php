<?php

//Bad Practice.

// function doTheLargeTask() {
//     echo "Step A Done \n";
//     echo "Step B Done \n";
//     echo "Step C Done \n";
//     echo "Step D Done \n";
//     echo "Step E Done \n";
// }

// doTheLargeTask();

//Good Practice.

function doTaskA() {
    echo "Step A Done \n";
}

function doTaskB() {
    echo "Step B Done \n";
}

function doTaskC() {
    echo "Step C Done \n";
}

function doTaskD() {
    echo "Step D Done \n";
}

function doTaskE() {
    echo "Step E Done \n";
}


function doTheLargeTask() {
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doTheLargeTask();