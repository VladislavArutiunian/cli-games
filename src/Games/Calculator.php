<?php

namespace Hexlet\Code\Calc;

use Exception;
use const Hexlet\Code\Engine\STEPS;

function gameBuilder(): array
{
    $title = "What is the result of the expression?";
    $expressions = [];
    $correct_answers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $digit1 = rand(1, 99);
        $digit2 = rand(1, 99);
        $sign = array_rand(array_flip(['*', '-', '+']));
        $expressions[$i] = $digit1 . ' ' . $sign . ' ' . $digit2;
        $correct_answers[$i] = expressionCorrectAnswer($digit1, $digit2, $sign);
    }
    return [$title, $expressions, $correct_answers];
}

function expressionCorrectAnswer(int $digit1, int $digit2, string $sign): string
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
        default:
            throw new Exception("the function receives values other than '*', '-', '+'");
    }
    return $answer;
}
