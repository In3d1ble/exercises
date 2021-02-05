<?php

$movies = [
    'The Shawshank redemption',
    'The Godfather',
    'The Godfather II',
    'Dark Knight',
    '12 angry men',
    'Schindler\'s list',
    'Pulp fiction',
    'Lord of the Rings: Return of the King',
    'The good, the bad and the ugly',
    'Fight club'
  ];

  sort($movies);

?>

<ol>

    <?php foreach ($movies as $title) : ?>

        <li><?= $title ?></li>

    <?php endforeach; ?>

</ol>

<ol>

    <?php for ($i = 0; $i < count($movies); $i++) : ?>

        <li><?= $movies[$i] ?></li>

    <?php endfor; ?>

</ol>

<?php

$movie_names = [
    'tt0468569' => 'Dark Knight',
    'tt0050083' => '12 angry men',
    'tt0108052' => 'Schindler\'s list',
    'tt0110912' => 'Pulp fiction',
    'tt0167260' => 'Lord of the Rings: Return of the King',
    'tt0111161' => 'The Shawshank redemption',
    'tt0071562' => 'The Godfather II',
    'tt0060196' => 'The good, the bad and the ugly',
    'tt0137523' => 'Fight club',
    'tt0068646' => 'The Godfather',
  ];
  $movie_ratings = [
    'tt0111161' => 9.2,
    'tt0068646' => 9.2,
    'tt0071562' => 9.0,
    'tt0468569' => 8.9,
    'tt0050083' => 8.9,
    'tt0108052' => 8.9,
    'tt0110912' => 8.9,
    'tt0167260' => 8.9,
    'tt0060196' => 8.9,
    'tt0137523' => 8.8
  ];

asort($movie_ratings);
// arsort($movie_ratings);

?>

<ol>

    <?php foreach ($movie_ratings as $movie_key => $rating) : ?>

        <li><?= $movie_names[$movie_key] ?> (<?= $rating ?> / 10)</li>

    <?php endforeach; ?>

</ol>

<?php

$movies = [];

foreach ($movie_names as $movie_key => $title) {
    $movies[$movie_key] = [
        'name' => $title,
        'rating' => $movie_ratings[$movie_key]
    ];
}

$messages = [
    'error' => [
        'Something went wrong',
        'Something went REALLY wrong',
        'There is no end to this!'
    ],
    'warning' => [
        'This is your first warning',
        'This is your final warning'
    ],
    'success' => [
        'Finally, something was successful.'
    ]
];

?>

<div class="messages">
    <?php foreach ($messages as $type => $type_messages) : ?>
        <?php foreach ($type_messages as $text) : ?>
            <div class="message <?= $type ?>"><?= $text ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
<div>

<?php

function do_something_risky() {
    // pretend to do the risky stuff

    // return new messages
    return [
        'error' => [
            'I knew this would happen!',
            'This always happens.'
        ],
        'warning' => [
            'You should fix this before proceeding'
        ],
        'success' => []
    ];
}

// let's try it
$new_messages = do_something_risky();

foreach ($new_messages as $type => $type_messages) {
    $messages[$type] = array_merge($messages[$type], $type_messages);
}