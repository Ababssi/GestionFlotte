#!/usr/bin/env php
<?php


function fizzBuzz($number)
{
    if ($number % 15 == 0) {
        return 'FizzBuzz';
    }
    if ($number % 3 == 0) {
        return 'Fizz';
    }
    if ($number % 5 == 0) {
        return 'Buzz';
    }
    return $number;
}


//fizzBuzz() de 1 à n
function fizzBuzzList($n)
{
    $list = [];
    for ($i = 1; $i <= $n; $i++) {
        $list[] = fizzBuzz($i);
    }
    return $list;
}

print_r(fizzBuzzList($argv[1]));
