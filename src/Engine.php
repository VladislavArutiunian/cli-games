<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

const STEPS = 3;

function logic(string $title, array $questions, array $correctAnswers): void
{
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");
    line($title);
    $pairs = array_combine($questions, $correctAnswers);
    foreach ($pairs as $question => $correctAnswer) {
        $userAnswer = prompt("Question: {$question}");
        line("Your answer: {$userAnswer}");
        if (isUserCorrect($userAnswer, $correctAnswer)) {
            line("Congratulations, {$userName}!");
        } else {
            line("Let's try again, {$userName}!");
            break;
        }
    }
}

function isUserCorrect(string $userAnswer, string $correctAnswer): bool
{
    if ($userAnswer !== $correctAnswer) {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        return false;
    }
    line('Correct!');
    return true;
}
