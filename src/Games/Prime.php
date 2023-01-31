<?php

namespace Hexlet\Code\Games\Prime;

use function Hexlet\Code\Engine\startGame;

use const Hexlet\Code\Engine\STEPS;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function playPrime(): void
{
    $quizzes = [];
    for ($i = 0; $i < STEPS; $i++) {
        $quiz = [];
        $figure = rand(1, 200);
        $correctAnswer = getCorrectAnswer($figure);
        $quiz['question'] = $figure;
        $quiz['correctAnswer'] = $correctAnswer;
        $quizzes[] = $quiz;
    }
    startGame(TASK, $quizzes);
}

function getCorrectAnswer(int $figure): string
{
    $correctAnswer = 'yes';
    for ($i = 2; $i < $figure; $i++) {
        if ($figure % $i === 0) {
            $correctAnswer = 'no';
            break;
        }
    }
    return $figure === 1 ? 'no' : $correctAnswer;
}
