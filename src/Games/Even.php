<?php

namespace Hexlet\Code\Even;

function expressionBuilder(): array
{
    $expressions = [];
    $correct_answers = [];
    for ($i = 0; $i <= 2; $i++) {
        $digit = rand(1, 99);
        $expressions[$i] = $digit;
        $correct_answers[$i] = $digit % 2 === 0 ? 'yes' : 'no';
    }
    return [$expressions, $correct_answers];
}
