<?php

namespace Hexlet\Code\Gcd;

use const Hexlet\Code\Engine\STEPS;

function expressionBuilder(): array
{
    $title = "Find the greatest common divisor of given numbers.";
    $expressions = [];
    $correct_answers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $digit1 = rand(1, 99);
        $digit2 = rand(1, 99);
        $expressions[$i] = $digit1 . " " . $digit2;
        $correct_answers[$i] = expressionCorrectAnswer($digit1, $digit2);
    }
    return [$title, $expressions, $correct_answers];
}

function expressionCorrectAnswer(int $digit1, int $digit2): string
{
    $answer = 1;
    for ($i = 1, $min_digit = min($digit1, $digit2); $i <= $min_digit; $i++) {
        $exp1 = $digit1 % $i === 0;
        $exp2 = $digit2 % $i === 0;
        if ($exp1 && $exp2) {
            $answer = $i;
        }
    }
    return (string) $answer;
}
