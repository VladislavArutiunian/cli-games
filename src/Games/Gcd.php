<?php

namespace Hexlet\Code\Gcd;

function expressionBuilder(): array
{
    $expressions = [];
    $correct_answers = [];
    for ($i = 0; $i <= 2; $i++) {
        $digit1 = rand(1, 99);
        $digit2 = rand(1, 99);
        $expressions[$i] = $digit1 . " " . $digit2;
        $correct_answers[$i] = expressionCorrectAnswer($digit1, $digit2);
    }
    return [$expressions, $correct_answers];
}

function expressionCorrectAnswer($digit1, $digit2): string
{
    $answer = 1;
    for ($i = 1, $min_digit = min($digit1, $digit2); $i <= $min_digit; $i++) {
        if ($digit1 % $i === 0 & $digit2 % $i === 0) {
            $answer = $i;
        }
    }
    return $answer;
}
