<?php

namespace Hexlet\Code\Prime;

use const Hexlet\Code\Engine\STEPS;

const TITLE = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function gameBuilder(): array
{
    $expressions = [];
    $correctAnswers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $result = expressionMake();
        $expressions[$i] = $result[0];
        $correctAnswers[$i] = $result[1];
    }
    return [TITLE, $expressions, $correctAnswers];
}

function expressionMake(): array
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
