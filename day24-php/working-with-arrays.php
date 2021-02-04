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

echo '<ul>';
foreach ($cast_crew as $job => $job_names) {

    foreach ($job_names as $name) {
        echo '<li>' . $name . '</li>';
    }

}
echo '</ul>';

?>

<ul>
<?php foreach ($cast_crew as $job => $job_names) : ?>

    <?php foreach ($job_names as $name) : ?>
        <li><?= $name ?></li>
    <?php endforeach; ?>

<?php endforeach; ?>
</ul>

<?php

// $cast_crew = [

//     'cast' => [
//         'John David Washington', // 0
//         'Robert Pattinson',      // 1
//         'Elizabeth Debicki'      // 2
//     ],

//     'director' => [
//         'Christopher Nolan'      // 0
//     ]

// ];

$people = [
    [
        'name' => 'John David Washington',
        'job' => 'actor'
    ],
    [
        'name' => 'Robert Pattinson',
        'job' => 'actor'
    ],
    [
        'name' => 'Christopher Nolan',
        'job' => 'director'
    ],
    [
        'name' => 'Steven Spielberg',
        'job' => 'director'
    ],
    [
        'name' => 'Michael Caine',
        'job' => 'actor'
    ]
];

$cast_crew = [];

foreach ($people as $person) {

    if ($person['job'] == 'actor') {
        $cast_crew['actors'][] = $person['name'];
    } else if ($person['job'] == 'director') {
        $cast_crew['directors'][] = $person['name'];
    }
}

var_dump($cast_crew);


$default_values = [
    'title' => null,
    'year' => null,
    'plot' => null,
    'duration' => null
];

echo '<br><br>';
var_dump($default_values);

$movie = [
    'title' => 'Tenet',
    'year' => 2020,
    'rating' => 7.5,
    'duration' => 150
];

echo '<br><br>';
var_dump($movie);

$movie = array_merge($default_values, $movie);
echo '<br><br>';
var_dump($movie);


$movies = [
    [
        'title' => 'Dunkerk',
        'year' => 2017,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Tenet',
        'year' => 2020,
        'pg' => 13
    ],
    [
        'title' => 'Interstellar',
        'year' => 2014,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Inception',
        'year' => 2010,
        'pg' => 13,
        'favourite' => true
    ],
    [
        'title' => 'The Prestige',
        'year' => 2006,
        'pg' => 13
    ],
    [
        'title' => 'Batman begins',
        'year' => 2005,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight',
        'year' => 2008,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight Rises',
        'year' => 2012,
        'pg' => 12,
        'favourite' => false
    ],
];


$favourite_movies = [];

foreach ($movies as $movie) {
    if (array_key_exists('favourite', $movie) && $movie['favourite'] === true) {
    // if (isset($movie['favourite']) && $movie['favourite'] === true) {
    // if (!empty($movie['favourite'])) {

        $favourite_movies[] = $movie['title'];

    }
}

echo '<br><br>';
var_dump($favourite_movies);
