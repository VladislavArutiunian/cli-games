<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

const STEPS = 3;

function logic(string $title, array $expressions, array $correct_answers): void
{
    $user_name = cliHelloAndAskName();
    cliTitle($title);
    $user_correct = true;
    $i = 0;
    do {
        $expression = $expressions[$i];
        $correct_answer = $correct_answers[$i];
        $user_answer = cliAskAndGetAnswer($expression);
        $user_correct = cliAnswerChecker($user_answer, $correct_answer);
        $i++;
    } while ($user_correct & $i < STEPS);

    if ($user_correct) {
        cliSuccess($user_name);
    }
    cliUnSuccess($user_name);
}

function cliAnswerChecker(string $user_answer, string $correct_answer): bool
{
    if ($user_answer !== $correct_answer) {
        line("'{$user_answer}' is wrong answer ;(. Correct answer was '{$correct_answer}'.");
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
    $user_answer = prompt("Question: {$question}");
    line("Your answer: {$user_answer}");
    return $user_answer;
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
