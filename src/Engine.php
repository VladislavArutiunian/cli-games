<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

const STEPS = 3;

function logic(string $title, array $expressions, array $correctAnswers): void
{
    $user_name = cliHelloAndAskName();
    cliTitle($title);
    $userCorrect = true;
    $i = 0;
    do {
        $expression = $expressions[$i];
        $correctAnswer = $correctAnswers[$i];
        $userAnswer = cliAskAndGetAnswer($expression);
        $userCorrect = cliAnswerChecker($userAnswer, $correctAnswer);
        $i++;
    } while ($userCorrect & $i < STEPS);

    if ($userCorrect) {
        cliSuccess($user_name);
    }
    cliUnSuccess($user_name);
}

function cliAnswerChecker(string $userAnswer, string $correctAnswer): bool
{
    if ($userAnswer !== $correctAnswer) {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        return false;
    }
    line('Correct!');
    return true;
}

function cliHelloAndAskName(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function cliAskAndGetAnswer(string $question): string
{
    $userAnswer = prompt("Question: {$question}");
    line("Your answer: {$userAnswer}");
    return $userAnswer;
}

function cliTitle(string $title): void
{
    line($title);
}

function cliSuccess(string $name): void
{
    line("Congratulations, {$name}!");
    exit();
}

function cliUnSuccess(string $name): void
{
    line("Let's try again, {$name}!");
    exit();
}
