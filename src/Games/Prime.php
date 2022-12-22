<?php

namespace Hexlet\Code\Prime;

use function Hexlet\Code\Engine\engine;

use const Hexlet\Code\Engine\STEPS;

const TITLE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function playPrime(): void
{
    $pairs = [];
    for ($i = 0; $i < STEPS; $i++) {
        $pair = [];
        [$question, $correctAnswer] = makeExpression();
        $pair['question'] = $question;
        $pair['correctAnswer'] = $correctAnswer;
        $pairs[] = $pair;
    }
    engine(TITLE, $pairs);
}

function makeExpression(): array
{
    $digit = rand(1, 200);
    $correctAnswer = 'yes';
    for ($i = 2; $i < $digit; $i++) {
        if ($digit % $i === 0) {
            $correctAnswer = 'no';
            break;
        }
    }
    $correctAnswer = $digit === 1 ? 'no' : $correctAnswer;
    return [$digit, $correctAnswer];
}
