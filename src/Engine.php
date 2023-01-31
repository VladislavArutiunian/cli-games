<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

const STEPS = 3;

function startGame(string $title, array $quizzes): void
{
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");
    line($title);
    $isUserCorrect = true;
    foreach ($quizzes as ['question' => $question, 'correctAnswer' => $correctAnswer]) {
        $userAnswer = prompt("Question: {$question}");
        line("Your answer: {$userAnswer}");
        if ($userAnswer !== $correctAnswer) {
            $isUserCorrect = false;
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            break;
        }
        line('Correct!');
    }
    if ($isUserCorrect) {
        line("Congratulations, {$userName}!");
    } else {
        line("Let's try again, {$userName}!");
    }
}
