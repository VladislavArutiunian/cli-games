<?php

namespace Hexlet\Code\Games\Gcd;

use function Hexlet\Code\Engine\startGame;

use const Hexlet\Code\Engine\STEPS;

const TASK = "Find the greatest common divisor of given numbers.";

function playGcd(): void
{
    $quizzes = [];
    for ($i = 0; $i < STEPS; $i++) {
        $quiz = [];
        $figure1 = rand(1, 99);
        $figure2 = rand(1, 99);
        $quiz['question'] = "{$figure1} {$figure2}";
        $quiz['correctAnswer'] = sprintf('%s', getCorrectAnswer($figure1, $figure2));
        $quizzes[] = $quiz;
    }
    startGame(TASK, $quizzes);
}

function getCorrectAnswer(int $figure1, int $figure2): int
{
    $answer = 1;
    for ($i = 1, $minDigit = min($figure1, $figure2); $i <= $minDigit; $i++) {
        if ($figure1 % $i === 0 && $figure2 % $i === 0) {
            $answer = $i;
        }
    }
    return $answer;
}
