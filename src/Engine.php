<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

const STEPS = 3;

function engine(string $title, array $pairs): bool
{
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");
    line($title);

    foreach ($pairs as ['question' => $question, 'correctAnswer' => $correctAnswer]) {
        $userAnswer = prompt("Question: {$question}");
        line("Your answer: {$userAnswer}");
        if ($userAnswer !== $correctAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$userName}!");
            return false;
        }
        line('Correct!');
    }

    line("Congratulations, {$userName}!");
    return true;
}
