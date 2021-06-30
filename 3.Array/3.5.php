<?php

// Multidimentional Array

$foods = [
    'vegetables' => explode(', ',"tomato, capsicum, brinjal, carrot"),
    'fruits' => explode(', ',"mango, papaya, water-lemon, guava"),
    'drinks' => explode(', ',"7up, fanta, zira-pani")
];

// print_r($foods);

// echo $foods['vegetables'][3];

// array_push($foods['fruits'], 'grape');

// print_r($foods);

$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ]
];

// print_r($sample);

echo $sample['test']['test-again'][3];