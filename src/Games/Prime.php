<?php

namespace Hexlet\Code\Prime;

use const Hexlet\Code\Engine\STEPS;

function expressionBuilder(): array
{
    $title = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $expressions = [];
    $correct_answers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $result = expressionMake();
        $expressions[$i] = $result[0];
        $correct_answers[$i] = $result[1];
    }
    return [$title, $expressions, $correct_answers];
}

function expressionMake(): array
{
    $digit = rand(1, 200);

    $correct_answer = 'yes';
    for ($i = 2; $i < $digit; $i++) {
        if ($digit % $i === 0) {
            $correct_answer = 'no';
            break;
        }
    }
    return [$digit, $correct_answer];
}
