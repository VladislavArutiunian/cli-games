<?php

namespace Hexlet\Code\Even;

use function Hexlet\Code\Engine\engine;

use const Hexlet\Code\Engine\STEPS;

const TITLE = 'Answer "yes" if the number is even, otherwise answer "no".';

function playEven(): void
{
    $pairs = [];
    for ($i = 0; $i < STEPS; $i++) {
        $pair = [];
        $digit = rand(1, 99);
        $pair['question'] = $digit;
        $pair['correctAnswer'] = $digit % 2 === 0 ? 'yes' : 'no';
        $pairs[] = $pair;
    }
    engine(TITLE, $pairs);
}
