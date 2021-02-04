<?php


function sayName($name) // passing by value
{
    // new variable $name is created
    // given the value passed in the argument - 'Bob'
    // $name = 'Bob';

    echo $name;

    // when the function ends, all variables inside are destroyed
    // including $name
}

sayName('Jan');

$your_name = 'Bob';

sayName($your_name);


function sayLastname(&$name) // passing by reference
{
    // $name is an "alias" to the function's argument
    // $name is an alias of $last_name

    $name .= ' The great';

    return true;
}

$last_name = 'Polak';

sayLastname($last_name);

// sayLastname('Freeman'); // error

var_dump($last_name);


function headline($text, $importance = 1)
{
    return "<h{$importance}>{$text}</h{$importance}>";
}

echo headline('Foo', 2); // <h2>Foo</h2>
echo headline('Bar'); // <h1>Foo</h1>
