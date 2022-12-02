<?php

namespace Hexlet\Code\Calc;

use Exception;

use function Hexlet\Code\Engine\logic;

use const Hexlet\Code\Engine\STEPS;

const TITLE = "What is the result of the expression?";

function playCalc(): void
{
    logic(...gameBuilder());
}

function gameBuilder(): array
{
    $expressions = [];
    $correctAnswers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $digit1 = rand(1, 99);
        $digit2 = rand(1, 99);
        $sign = array_rand(array_flip(['*', '-', '+']));
        $expressions[$i] = "{$digit1} {$sign} {$digit2}";
        $correctAnswers[$i] = expressionCorrectAnswer($digit1, $digit2, $sign);
    }
    return [TITLE, $expressions, $correctAnswers];
}

function expressionCorrectAnswer(int $digit1, int $digit2, string $sign): string
{
    switch ($sign) {
        case '+':
            return $digit1 + $digit2;
        case '-':
            return $digit1 - $digit2;
        case '*':
            return $digit1 * $digit2;
        default:
            throw new Exception("Неизвестный оператор '{$sign}'");
    }
}
