<?php

namespace Hexlet\Code\Even;

use function cli\line;
use function cli\prompt;

function logic(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Answer \"yes\" if the number is even, otherwise answer \"no\"");
    //3 questions
    $nums = [rand(1, 99), rand(1, 99), rand(1, 99)];
    foreach ($nums as $num) {
        $user_answer = prompt("Question: {$num}");
        line("Your answer: {$user_answer}");
        $correct_answer = $num % 2 === 0 ? 'yes' : 'no';
        if ($user_answer !== $correct_answer) {
            line("'{$user_answer}' is wrong answer ;(. Correct answer was '{$correct_answer}'.");
            line("Let's try again, {$name}!");
            exit();
        } else {
            line('Correct!');
        }
    }
    line("Congratulations, {$name}!");
}

function cli()
{
    //return $name;
}
