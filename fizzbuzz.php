<?php

function fizzBuzz($length, $markers) {
    $range = range(1, $length);
    $output = array_map(function($i) use ($markers) {
        $output = array_reduce($markers, function($output, $marker) use ($i)
        {
            if (0 === $i % $marker['number']) {
                $output .= $marker['term'];
            }
            return $output;
        }, '');
        if ('' === $output) {
            $output .= $i;
        }
        return $output;
    }, $range);
    array_walk($output, function($value) {
        echo $value . PHP_EOL;
    });
}

fizzBuzz(
    100,
    [
        ['number' => 3, 'term' => 'Fizz'],
        ['number' => 5, 'term' => 'Buzz'],
    ]
);
