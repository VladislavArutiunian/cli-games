<?php

namespace Hexlet\Code\Games\Even;

use function Hexlet\Code\Engine\startGame;

use const Hexlet\Code\Engine\STEPS;

const TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function playEven(): void
{
    $quizzes = [];
    for ($i = 0; $i < STEPS; $i++) {
        $quiz = [];
        $figure = rand(1, 99);
        $quiz['question'] = $figure;
        $quiz['correctAnswer'] = $figure % 2 === 0 ? 'yes' : 'no';
        $quizzes[] = $quiz;
    }
    startGame(TASK, $quizzes);
}
