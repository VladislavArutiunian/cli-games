<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function logic($game, array $expressions, array $correct_answers): void
{
    $steps = 3;
    $user_name = cliHelloAndAskName();
    cliTitle($game);
    (bool) $user_correct = true;
    $i = 0;
    do {
        $expression = $expressions[$i];
        $correct_answer = $correct_answers[$i];
        $user_answer = cliAskAndGetAnswer($expression);
        $user_correct = cliAnswerChecker($user_answer, $correct_answer);
        $i++;
    } while ($user_correct & $i < $steps);

    if ($user_correct) {
        cliSuccess($user_name);
    }
    cliUnSuccess($user_name);
}

function cliAnswerChecker($user_answer, $correct_answer): bool
{
    if ($user_answer !== $correct_answer) {
        line("'{$user_answer}' is wrong answer ;(. Correct answer was '{$correct_answer}'.");
        return false;
    } else {
        line('Correct!');
    }
    return true;
}

function cliHelloAndAskName(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function cliAskAndGetAnswer($question): string
{
    $user_answer = prompt("Question: {$question}");
    line("Your answer: {$user_answer}");
    return $user_answer;
}

function cliTitle(string $game): void
{
    $titles = [
        "brain-even" => "Answer \"yes\" if the number is even, otherwise answer \"no\"",
        "brain-calc" => "What is the result of the expression?",
        "brain-gcd" => "Find the greatest common divisor of given numbers.",
        "brain-progression" => "What number is missing in the progression?",
    ];
    line($titles[$game]);
}

function cliSuccess($name): void
{
    line("Congratulations, {$name}!");
    exit();
}

function cliUnSuccess($name): void
{
    line("Let's try again, {$name}!");
    exit();
}
