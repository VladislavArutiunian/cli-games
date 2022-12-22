<?php

namespace Hexlet\Code\Gcd;

use function Hexlet\Code\Engine\engine;

use const Hexlet\Code\Engine\STEPS;

const TITLE = "Find the greatest common divisor of given numbers.";

function playGcd(): void
{
    $pairs = [];
    for ($i = 0; $i < STEPS; $i++) {
        $pair = [];
        $digit1 = rand(1, 99);
        $digit2 = rand(1, 99);
        $pair['question'] = "{$digit1} {$digit2}";
        $pair['correctAnswer'] = expressionCorrectAnswer($digit1, $digit2);
        $pairs[] = $pair;
    }
    engine(TITLE, $pairs);
}

function expressionCorrectAnswer(int $digit1, int $digit2): string
{
    $answer = 1;
    for ($i = 1, $minDigit = min($digit1, $digit2); $i <= $minDigit; $i++) {
        $exp1 = $digit1 % $i === 0;
        $exp2 = $digit2 % $i === 0;
        if ($exp1 && $exp2) {
            $answer = $i;
        }
    }
    return (string) $answer;
}
