<?php

namespace Hexlet\Code\Games\Cli;

use function cli\line;
use function cli\prompt;

function askForName(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
