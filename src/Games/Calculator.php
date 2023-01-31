<?php

namespace Hexlet\Code\Games\Calc;

use Exception;

use function Hexlet\Code\Engine\startGame;

use const Hexlet\Code\Engine\STEPS;

const TASK = "What is the result of the expression?";

function playCalc(): void
{
    $quizzes = [];
    for ($i = 0; $i < STEPS; $i++) {
        $quiz = [];
        $figure1 = rand(1, 99);
        $figure2 = rand(1, 99);
        $sign = array_rand(array_flip(['*', '-', '+']));
        $quiz['question'] = "{$figure1} {$sign} {$figure2}";
        $quiz['correctAnswer'] = sprintf('%s', calculateExpression($figure1, $figure2, $sign));
        $quizzes[] = $quiz;
    }
    startGame(TASK, $quizzes);
}

function calculateExpression(int $figure1, int $figure2, string $sign): int
{
    switch ($sign) {
        case '+':
            return $figure1 + $figure2;
        case '-':
            return $figure1 - $figure2;
        case '*':
            return $figure1 * $figure2;
        default:
            throw new Exception("Неизвестный оператор '{$sign}'");
    }
}
