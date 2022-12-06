<?php

namespace Hexlet\Code\Progression;

use function Hexlet\Code\Engine\engine;

use const Hexlet\Code\Engine\STEPS;

const TITLE = "What number is missing in the progression?";

function playProgression(): void
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
        $expression[$i] = $expression[$i - 1] + $progressionStep;
    }
    $correctAnswer = (string) $expression[$hidePosition];
    $expression[$hidePosition] = '..';
    return [implode(' ', $expression), $correctAnswer];
}
