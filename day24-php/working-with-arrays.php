<?php

$students = [];

$students[] = 'Thomas'; // index 0
$students[] = 'Kathy';  // index 1
$students[] = 'Eve';    // index 2
$students[] = 'Bernard'; // index 3

foreach ($students as $name) {
    echo $name . '<br>';
}


$divisible_by_seven = [];

for ($number = 0; $number <= 100; $number++) {

    if ($number % 7 == 0) {

        $divisible_by_seven[] = $number;

    }

}

foreach ($divisible_by_seven as $number) {
    echo $number . '<br>';
}

$cast_crew = [];

$cast_crew['cast'] = []; // not required

$cast_crew['cast'][] = 'John David Washington';
$cast_crew['cast'][] = 'Robert Pattinson';
$cast_crew['cast'][] = 'Elizabeth Debicki';

// echo $cast_crew['cast'][1]; // Robert Pattinson

$cast_crew['director'][] = 'Christopher Nolan';

foreach ($cast_crew['cast'] as $name) {
    echo $name . '<br>';
}

$cast_crew = [

    'cast' => [
        'John David Washington', // 0
        'Robert Pattinson',      // 1
        'Elizabeth Debicki'      // 2
    ],

    'director' => [
        'Christopher Nolan'      // 0
    ]

];

