<?php

namespace Hexlet\Code\Progression;

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
    $expression = [];
    $correct_answer = '';
    $progression_length = rand(5, 10);
    $hide_position = rand(0, $progression_length - 1);
    $progression_step = rand(1, 49);
    for ($i = 0; $i < $progression_length; $i++) {
        if ($i === 0) {
            $expression[$i] = rand(1, 49);
            continue;
        }
        $expression[$i] = $expression[$i - 1] + $progression_step;
    }
    $correct_answer = (string) $expression[$hide_position];
    $expression[$hide_position] = '..';
    return [implode(' ', $expression), $correct_answer];
}