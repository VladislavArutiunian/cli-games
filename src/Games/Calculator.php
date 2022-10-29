<?php

namespace Hexlet\Code\Calc;

function expressionBuilder(): array
{
    $expressions = [];
    $correct_answers = [];
    for ($i = 0; $i <= 2; $i++) {
        $digit1 = rand(1, 99);
        $digit2 = rand(1, 99);
        $sign = array_rand(array_flip(['+', '-', '*']));
        $expressions[$i] = $digit1 . $sign . $digit2;
        $correct_answers[$i] = expressionCorrectAnswer($digit1, $digit2, $sign);
    }
    return [$expressions, $correct_answers];
}

function expressionCorrectAnswer($digit1, $digit2, $sign): string
{
    $answer = 0;
    switch ($sign) {
        case '+':
            $answer = $digit1 + $digit2;
            break;
        case '-':
            $answer = $digit1 - $digit2;
            break;
        case '*':
            $answer = $digit1 * $digit2;
            break;
    }
    return $answer;
}
