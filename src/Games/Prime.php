<?php

namespace Hexlet\Code\Prime;

use function Hexlet\Code\Engine\engine;

use const Hexlet\Code\Engine\STEPS;

const TITLE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function playPrime(): void
{
    $expressions = [];
    $correctAnswers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $result = makeExpression();
        $expressions[$i] = $result[0];
        $correctAnswers[$i] = $result[1];
    }
    engine(TITLE, $expressions, $correctAnswers);
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
    return [$digit, $correctAnswer];
}
