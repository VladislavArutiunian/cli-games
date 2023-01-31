<?php

namespace Hexlet\Code\Games\Progression;

use function Hexlet\Code\Engine\startGame;

use const Hexlet\Code\Engine\STEPS;

const TASK = "What number is missing in the progression?";

function playProgression(): void
{
    $quizzes = [];
    for ($i = 0; $i < STEPS; $i++) {
        $quiz = [];
        [$question, $correctAnswer] = makeProgression();
        $quiz['question'] = $question;
        $quiz['correctAnswer'] = $correctAnswer;
        $quizzes[] = $quiz;
    }
    startGame(TASK, $quizzes);
}

function makeProgression(): array
{
    $expression = [];
    $correctAnswer = '';
    $progressionLength = rand(5, 10);
    $hidePosition = rand(0, $progressionLength - 1);
    $progressionStep = rand(1, 49);
    for ($i = 0; $i < $progressionLength; $i++) {
        if ($i === 0) {
            $expression[$i] = rand(1, 49);
            continue;
        }
        $begin = $expression[0];
        $expression[$i] = $begin + ($i * $progressionStep);
    }
    $correctAnswer = (string) $expression[$hidePosition];
    $expression[$hidePosition] = '..';
    return [implode(' ', $expression), $correctAnswer];
}
