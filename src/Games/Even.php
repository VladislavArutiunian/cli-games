<?php

namespace Hexlet\Code\Even;

use function Hexlet\Code\Engine\logic;

use const Hexlet\Code\Engine\STEPS;

const TITLE = 'Answer "yes" if the number is even, otherwise answer "no".';

function playEven(): void
{
    logic(...gameBuilder());
}

function gameBuilder(): array
{
    $expressions = [];
    $correctAnswers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $digit = rand(1, 99);
        $expressions[$i] = $digit;
        $correctAnswers[$i] = $digit % 2 === 0 ? 'yes' : 'no';
    }
    return [TITLE, $expressions, $correctAnswers];
}
