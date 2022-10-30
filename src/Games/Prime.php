<?php

namespace Hexlet\Code\Prime;

function expressionBuilder(): array
{
    $expressions = [];
    $correct_answers = [];
    for ($i = 0; $i <= 2; $i++) {
        $result = expressionMake();
        $expressions[$i] = $result[0];
        $correct_answers[$i] = $result[1];
    }
    return [$expressions, $correct_answers];
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
