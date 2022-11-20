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

for ($i = 1; $i <= 20; $i++) {
    echo fizzBuzz($i);
    echo "\n";
}
