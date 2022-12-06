<?php

namespace Hexlet\Code\Even;

use function Hexlet\Code\Engine\engine;

use const Hexlet\Code\Engine\STEPS;

const TITLE = 'Answer "yes" if the number is even, otherwise answer "no".';

function playEven(): void
{
    $expressions = [];
    $correctAnswers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $digit = rand(1, 99);
        $expressions[$i] = $digit;
        $correctAnswers[$i] = $digit % 2 === 0 ? 'yes' : 'no';
    }
    engine(TITLE, $expressions, $correctAnswers);
}
